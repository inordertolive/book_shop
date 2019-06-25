@extends('layouts.index')

@section('sidebar')

    

<html>
<head>
    <title>学生管理系统之添加学生</title>
</head>
<body>
    <form action="{{url('dostudent')}}" method="post">
    @csrf
        学生姓名<input type="text" name="sname"><br><br>
        学生电话<input type="text" name="stel"><br><br>
        <input type="submit" value="添加">
    </form>
</body>
</html>


@endsection
