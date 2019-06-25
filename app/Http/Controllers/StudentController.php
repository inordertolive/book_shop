<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use DB;
/**
 * 学生信息的增删改查
 */
class StudentController extends Controller
{
    //清除所有redis信息
    public function init()
    {
        $redis  =  new  \redis();   
        $redis->connect('127.0.0.1','6379');
        $re = $redis->delete('user');
        if($re){
        echo "<script>alert('退出成功');window.history.back(-1);</script>";die;
        }
    }
    
    //用户注册
    public function regis()
    {
        return view('StudentController/regis');
    }
    public function addregis()
    {
        $data = request()->all();
        unset($data['_token']);
        $re = DB::table('users')->insert($data);
        if($re){
            return redirect()->action('StudentController@login')->with('success','注册成功,请登录');
        }else{
            return redirect()->action('StudentController@regis')->with('success','注册失败，请重试');
        }
    }
    public function login()
    {
        return view('StudentController/login');
    }
    public function dologin(Request $request)
    {
        $data = request()->all();
        $date = DB::table('users')->where('user',$data['user'])->limit(1)->find(1);
        $date = json_encode($date);
        if(!$date == null){
            $redis  =  new  \redis();   
            $redis->connect('127.0.0.1','6379');
            $redis->set('user',$date);
            // session('login',$data['user']);
            $request->session()->put('login',$data['user']);
            return redirect()->action('WaresController@wareslistview')->with('success','登录成功,请前去添加信息');
        }else{
            return redirect()->action('StudentController@login')->with('success','登录失败,请重试');
        }
        dd($date);
    }
    public function index()
    {
        $redis  =  new  \redis();   
        $redis->connect('127.0.0.1','6379');
        $redis->incr('num');


        // $values = Redis::get('name');
        return view('StudentController/addstudent');
        // return 'ok';
    } 
    public function insert()
    {
        $data = request()->all();
        $arr['uname']=$data['uname'];
        $arr['utel']=$data['utel'];
        // dd($arr);
        $re = Db::table('student')->insert($arr);
        // return view('StudentController/StudentList');
        if($re){
            return redirect()->action('StudentController@read')->with('success','添加成功');
        }else{
            return redirect()->action('StudentController@addstudent')->with('success','添加成功');
        }
    }
    public function read()
    {
        $redis  =  new  \redis();   
        $redis->connect('127.0.0.1','6379');
        $res = $redis->get('num');
        // var_dump($res);

        $search = request()->get('search');
        $search = $search  ? $search : '' ;
        $data = DB::table('student')->where('uname','like','%'.$search.'%')->paginate(2);
        return view('StudentController/StudentList',['data'=>$data,'search'=>$search]);
    }
    public function delete($id)
    {
        $re = DB::delete('delete from student where id=?',[$id]);
        if($re){
            return redirect()->action('StudentController@read')->with('success','删除成功');
        }else{
            return redirect()->action('StudentController@read')->with('success','删除成功');
        }
    }
    public function update($id)
    {
        $data = DB::table('student')->find($id);
        return view('StudentController/update')->with('data',$data);
    }
    public function edit()
    {
        $data = request()->post();
        $id = $data['id'];
        unset($data['_token']);
        unset($data['id']);
        $re = Db::table('student')->where('id',$id)->update($data);
        if($re){
            return redirect()->action('StudentController@read')->with('success','修改成功');
        }else{
            return redirect()->action('StudentController@read')->with('success','修改成功');
        }
    }




}
