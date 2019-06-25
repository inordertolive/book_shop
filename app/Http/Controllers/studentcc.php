<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class studentcc extends Controller
{
    /**
     * 学生添加
     */
    public function createstudent()
    {
        
        return view('student/createstu');
    }
    public function dostudent()
    {
        $data = request()->all();
        unset($data['_token']);
        $re = DB::table('stu')->insert($data);
        // dd($data);
        if($re){
            echo "<script>alert('添加学生成功');location.href='studentlist'</script>";die;
        }else{
            echo "<script>alerrt('添加失败，请重试');window.history.back(-1);</script>";die;
        }
    }
    public function studentlist()
    {
        $search = request()->get('search');
        $search = $search  ? $search : '' ;
        $data = DB::table('stu')->where('sname','like','%'.$search.'%')->paginate(3);
// dump($search);
        // dd($data);
        return view('student/studentlist',['data'=>$data,'search'=>$search]);
    }
    public function studentdelete()
    {
        $id = request()->get('id');
        // dd($id);
        $re = DB::table('stu')->where('id',$id)->delete();
        if($re){
        echo "<script>alert('删除成功');window.history.back(0);</script>";die;
        }else{
        echo "<script>alert('删除失败');window.history.back(0);</script>";die;
        }
    }
    public function studentupdate()
    {
        $id = request()->get('id');
        $re = DB::table('stu')->where('id',$id)->first();
        return view('student/studentupdate',['data'=>$re]);

    }
    public function dostudentupdate()
    {
        $data = request()->all();
        // dd($data);
        unset($data['_token']);
        $re = DB::table('stu')->where('id',$data['id'])->update($data);
        // dd($data);
        if($re){
            echo "<script>alert('修改成功');location.href='studentlist'</script>";die;
        }else{
            echo "<script>alerrt('修改失败');window.history.back(-1);</script>";die;
        }
    }
}
