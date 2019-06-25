<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function myshopindex()
    {
        $data = DB::table('wares')->orderBy('id','asc')->limit(4)->get();
        return view('index/myshopindex',['data'=>$data]);
    }
    public function myshoplist()
    {
        $search = request()->get('search');
        // dump($search);
        if(!empty($search)){
            $data = DB::table('wares')->where('waresname','like','%'.$search.'%')->orderBy('id','asc')->paginate(12);
        }else{
            $data = DB::table('wares')->orderBy('id','asc')->paginate(12);
        }
        foreach ($data as $key => $value) {
            $num = $value->waresname;//名字
            $nn = strlen($num);      //名字总条数
            if($nn){
                $str = mb_substr($num,0,10);
                $value->waresname = $str.'....';
            }
        }
       
        return view('index/myshoplist',['data'=>$data]);
    }
    public function userlogin()
    {
        return view('index/userlogin');
    }
    public function userregis()
    {
        return view('index/userregis');
    }
    public function adduser()
    {
        $data = request()->all();
        unset($data['_token']);
        $data['reg_time'] = time();
        $data['password'] = md5($data['password']);
        $re = DB::table('user')->insert($data);
        if($re){
            echo "<script>alert('注册成功,请登录');location='userlogin'</script>";
        }else{
            echo "<script>alert('注册失败，请重试');location='userregis'</script>";

        }
    }
    public function douserlogin()
    {
        $data = request()->all();
        $pwd= md5($data['password']);
        $name = $data['name'];
        $re = DB::table('user')->where('name',$name)->first();
        if($re){
            if($pwd == $re->password){
                    session(['userlogin'=>$name,'password'=>$pwd]);
                    echo "<script>alert('密码正确,登陆成功');location='myshopindex'</script>";
            }else{
                    echo "<script>alert('密码错误,请重试');location='userlogin'</script>";
            }
        }else{
            echo "<script>alert('找不到该用户，请先去注册');location='userregis'</script>";

        }
    }
    public function sess()
    {
        $ss = session('userlogin');
        echo $ss;
    }
    public function outuserlogin(Request $request)
    {
        $re = $request->session()->forget('userlogin');
        if($re == null){
            echo "<script>alert('用户退出成功');location='myshopindex'</script>";
        }else{
            echo "<script>alert('登出失败，请检查网络');location='myshopindex'</script>";

        }
    }
    public function indexproduct()
    {
        $goods_id = request()->get('goods_id');
        if(empty($goods_id)){
            echo "<script>alert('请最少选择一件商品');location='myshoplist'</script>";
        }else{
            $data = DB::table('wares')->where('id',$goods_id)->first();
        }
        return view('index/indexproduct',['data'=>$data]);
    }
    public function checkcart()
    {
        $res = DB::table('cart')->join('wares','goods_id','=','wares.id')->get();
        $tt = 0;
        foreach ($res as $k => $v) {
            $nn = $v->good_price;
            $tt += $nn;
        }
        return view('index/checkcart',['gonggongdata'=>$res,'gonggongtotal'=>$tt]);
    }
    //添加购物车
    public function addcart()
    {
        $num = request()->get('num');
        $goods_id = request()->get('goods_id');
        $data = DB::table('wares')->where('id',$goods_id)->first();
        $cartdata['goods_id'] = $goods_id;
        $cartdata['goods_pic'] = $data->waresimg;
        $cartdata['good_price'] = $data->goods_price * $num;
        $cartdata['add_time'] = time();
        $cartdata['goods_num'] = $num;
        $newnum = $data->waresnum - $num;
        $rre = DB::table('cart')->where('goods_id',$goods_id)->first();
        if($rre){
            //此商品存在购物车加库存
            $newnum = $rre->goods_num + $num;
            $rre1 = DB::table('cart')->where('goods_id',$goods_id)->update(['goods_num'=>$newnum]);
            if($rre1 != 0){
                echo "<script>alert('添加购物车成功');window.history.back(-1);</script>";die;
            }else{
                echo "<script>alert('添加购物车失败1');window.history.back(-1);</script>";die;
            }
        }else{
            //此商品不在购物车新增数据
            $re = DB::table('cart')->insert($cartdata);
            if($re){
                $res = DB::table('wares')->where('id',$goods_id)->update(['waresnum'=>$newnum]);
                if($res == 0){
                    echo "<script>alert('貌似没有那么多库存了');window.history.back(-1);</script>";die;
                }
                echo "<script>alert('添加购物车成功');window.history.back(-1);</script>";die;
            }else{
                echo "<script>alert('添加购物车失败2');window.history.back(-1);</script>";die;
            }
      }
    }
    /**
     * 添加至订单
     * 需要先查出goods_name,图片，和购物车的总价
     */
    public function addorder(Request $request)
    {
        DB::beginTransaction(); //开启事务
    try{
        $goods_id = request()->get('goods_id');
        if(empty($goods_id)){
            echo "<script>alert('请最少选择一件商品支付');window.history.back(-1);</script>";die;
        }
        $str = trim($goods_id,',');
        $goods_id = explode(',',$str); 
        $res = DB::table('cart')->join('wares','goods_id','=','wares.id')->whereIn('goods_id', $goods_id)->get();
        $oid = time().rand(1000,9999);
        $ttime = time();
        $data1 = [];
        $data2 = [];
        foreach ($res as $key => $value) {
            $data1[$key]['oid'] = $oid;
            $data1[$key]['goods_id'] = $value->goods_id;
            $data1[$key]['goods_name'] = $value->waresname;
            $data1[$key]['goods_pic'] = $value->waresimg;
            $data1[$key]['add_time']  = $ttime;
            $data1[$key]['goods_num'] = $value->goods_num;

            $data2['oid'] = $oid;
            $data2['pay_money'] = $value->goods_num * $value->goods_price;
            $data2['add_time']  = $ttime;
            $data2['goods_num'] = $value->goods_num;
        }
        $re = DB::table('order_detail')->insert($data1);
        $re1 = DB::table('order')->insert($data2);        
        if(!$re){
            throw new \Exception("操作失败1");
        }
        if(!$re1){
            throw new \Exception("操作失败2");
        }
        foreach ($goods_id as $key => $value) {
            $re2 = DB::table('cart')->where('goods_id','=',$value)->delete();
        }
        
        DB::commit();
        DB::connection()->enableQuerylog();
                $goods_id1 = request()->get('goods_id');
                $str = trim($goods_id1,',');
                $goods_id1 = explode(',',$str); 
                $res3 = DB::table('order_detail')->join('wares','goods_id','=','wares.id')->where('oid',$oid)->get();
                $log = DB::getQuerylog();
                // dump($oid);
                // dd($log);
                $tt3 = 0;
                foreach ($res3 as $k => $v) {
                    $nn = $v->goods_price;
                    $tt3 += $nn * $v->goods_num;
                    
                }
                return view('index/orderlist',['data'=>$res3,'total'=>$tt3]);
    } catch (\Exception $e){
        DB::rollback();//事务回滚
        echo "<script>alert('下单失败');window.history.back(-1);</script>";die;

    }
    }
    /**
     * 确认订单页面
     */
    public function orderlist(Request $request)
    {
        $goods_id = session('goods_id');
        $res = DB::table('order_detail')->join('wares','goods_id','=','wares.id')->whereIn('goods_id', $goods_id)->get();
        $tt = 0;
        foreach ($res as $k => $v) {
            $nn = $v->goods_price;
            $tt = $nn * $v->goods_num;
            
        }
       
        return view('index/orderlist',['data'=>$res,'total'=>$tt]);
    }
    public function userorder()
    {
        $res = DB::table('order')->get();
        foreach ($res as $key => $value) {
            $res1 = DB::table('order_detail')->where('oid',$value->oid)->get();
                // foreach ($res1 as $k => $v) {
                    // if($v->oid == $value->oid){
                        $res[$key]->ming = $res1;
                    // }
                // }
        }
        //    dd($res);
         return view('index/userorder',['data'=>$res]);
    }
    
}
