@extends('layouts.index')

@section('sidebar')

<form class="layui-form" action="{{url('studentlist')}}" method="get">
    <div class="demoTable">
    <div class="layui-inline">
        <input class="layui-input" value="{{$search}}" name="search" style="width:700px;"  id="demoReload" placeholder="按照学生姓名搜索" autocomplete="off">
    </div>
    <button class="btn btn-default" data-type="reload">搜索</button>
    </div>
</form>


<table border="1" class="layui-table">
        <tr align="center">
            <td>ID</td>
            <td>学生姓名</td>
            <td>学生电话</td>
            <td>操作</td>
        </tr>
@foreach ($data as $dd)
        <tr>
            <td width="80" align="center">{{$dd->id}}</td>
            <td width="200" align="center">{{$dd->sname}}</td>
            <td  width="200" align="center">{{$dd->stel}}</td>
            <td width="200" align="center">
                <a href="{{url('studentdelete')}}?id={{$dd->id}}" class="glyphicon glyphicon-trash"></a>
                <a href="{{url('studentupdate')}}?id={{$dd->id}}" class="glyphicon glyphicon-pencil"></a>
            </td>
        </tr>
@endforeach
    </table>
    <center>    {{ $data->appends(['search' => $search])->links() }}</center>
                <!-- {{ $data->appends(['search' => $search])->links() }} -->




@endsection