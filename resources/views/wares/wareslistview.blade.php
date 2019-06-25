@extends('layouts.index')
@section('sidebar')
@if(!empty(session('success')))
<button class="btn btn-primary" type="button">
  Messages <span class="badge"></span>
</button>
@endif

@if(!empty($num))
<button class="btn btn-primary" type="button">
浏览量<span class="badge">{{$num}}</span>
</button>
@endif
<html>
    <head>
        <title>货物列表</title>
<style>
*{
    list-style:none;
}
.page-link{
    border:0; margin:8; padding:8; font-size:8px;  /* savers */ float:left;
    border:solid 1px red; margin-right:2px; color:green;
}
a{
    text-decoration:none;
}
</style>
    </head>
<body>
    <center>
        <form class="layui-form" action="{{url('wareslistview')}}" method="get">

       
                        <div class="demoTable">
                        搜索信息：
                        <div class="layui-inline">
                            <input class="layui-input" name="search" style="width:700px;"  id="demoReload" placeholder="按照商品名称搜索" autocomplete="off">
                        </div>
                        <button class="btn btn-default" data-type="reload">搜索 Search</button>
                        </div>
        </form>
        <table border="1" class="layui-table">
        <!-- <h3>商品信息列表</h3> -->
        <tr align="center">
            <td>ID</td>
            <td>货物名称</td>
            <td>货物图片</td>
            <td>库存</td>
            <td>添加时间</td>
            <td>操作</td>
        </tr>
@foreach ($data as $dd)
        <tr>
            <td width="80" align="center"><span class="badge">{{$dd->id}}</span></span>
</td>
            <td width="200" align="center"><span class="label label-default">{{$dd->waresname}}</span></td>
            <td  width="200" align="center"><img src="{{asset('storage')}}/{{$dd->waresimg}}" alt=""></td>
            <td width="200" align="center"><a href="#">Num <span class="badge">{{$dd->waresnum}}</span></a></td>
            <td width="200" align="center">{{date('Y-m-d H:i:s',$dd->create_time)}}</td>
            <td width="200" align="center">
                <a href="{{url('delete')}}?id={{$dd->id}}" class="glyphicon glyphicon-trash"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{url('update')}}?id={{$dd->id}}" class="glyphicon glyphicon-pencil"></a>
            </td>
        </tr>
@endforeach
    </table>
    </body>
</html>

</table>
{{ $data->appends(['search' => $search])->links() }}</center>
@endsection
