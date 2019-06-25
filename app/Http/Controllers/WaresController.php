<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WaresController extends Controller
{
    /**
     * 商品添加视图
     * 商品名称，商品图片，商品的库存数量，商品添加时间
     */
    public function addwaresview()
    {
        return  view('wares/addwares');
    }
    public function iii(request $request)
    {
        $re = $request->session()->forget('login');
        
            echo json_encode(['font'=>'退出成功','code'=>1]);
    }
    /**
     * 商品添加
     */
    public function addwares(request $request)
    {
        $data = request()->all();
        $push = $request->file('waresimg')->store('wares');
        $waresimg = asset('storage/'.$push);
        $data['waresimg'] = $waresimg;
        $data['create_time'] = time();
        unset($data['_token']);
        $res = DB::table('wares')->insert($data);
        if($res){
        return redirect()->action('WaresController@wareslistview')->with('success','商品添加成功');
        }else{
        echo "<script>alert('商品添加失败');window.history.back(-1);</script>";die; 
        }
    }
    /**
     * 商品列表展示
     * 展示商品的：货物名称，货物图片，库存，添加时间】【要有分页】
     */
    public function wareslistview()
    {
        $redis  =  new  \redis();   
        $redis->connect('127.0.0.1','6379');
        $num = $redis->incr('num');
        $search = request()->get('search');
        $search = $search  ? $search : '' ;
        $data = DB::table('wares')->where('waresname','like','%'.$search.'%')->orderBy('create_time','desc')->paginate(3);
        return  view('wares/wareslistview',['data'=>$data,'search'=>$search])->with('num',$num);
    }
    public function delete()
    {
        $id = request()->all();
        $re = DB::table('wares')->where('id',$id)->delete();
        if($re){
        echo "<script>alert('删除成功');window.history.back(0);</script>";die;
        }else{
        echo "<script>alert('删除失败');window.history.back(0);</script>";die;
        }
    }
    public function update()
    {
        $id = request()->all();
        $data = DB::table('wares')->find($id);
        return view('wares/updateview')->with('data',$data);
    }
    public function updatedo(request $request)
    {
        $data = request()->all();
        if(array_key_exists('waresimg',$data)){
        $push = $request->file('waresimg')->store('wares');
        $waresimg = asset('storage/'.$push);
        $data['waresimg'] = $waresimg;
        }
    
        $data['create_time'] = time();
        unset($data['_token']);
        $res = DB::table('wares')->where('id',$data['id'])->update($data);
        if($res){
        return redirect()->action('WaresController@wareslistview')->with('success','商品修改成功');
        }else{
        echo "<script>alert('商品修改失败');window.history.back(-1);</script>";die; 
        }
    }
    public function xxoo()
    {
        return view('xxoo');
    }
    public function adminorder()
    {
        $res = DB::table('order_detail')->join('order','order_detail.oid','=','order.oid')->get();

        $redis  =  new  \redis();   
        $redis->connect('127.0.0.1','6379');
        $num = $redis->incr('num');
        $search = request()->get('search');
        $search = $search  ? $search : '' ;
        $data = DB::table('order_detail')->join('order','order_detail.oid','=','order.oid')->where('goods_name','like','%'.$search.'%')->orderBy('order.add_time','desc')->paginate(3);
        // dd($data);
        return  view('wares/adminorder',['data'=>$data,'search'=>$search])->with('num',$num);
    }

}
