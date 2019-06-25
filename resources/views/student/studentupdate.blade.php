@extends('layouts.index')

@section('sidebar')

    

<html>
<head>
    <title>学生管理系统之修改学生</title>
</head>
<body>
<h3>修改学生信息</h3>
    <form action="{{url('dostudentupdate')}}" method="post">
    <input type="hidden" value="{{$data->id}}" name="id">
    @csrf
        学生姓名<input type="text" name="sname" value="{{$data->sname}}"><br><br>
        学生电话<input type="text" name="stel" value="{{$data->stel}}"><br><br>
        <input type="submit" value="修改">
    </form>
</body>
</html>


@endsection
