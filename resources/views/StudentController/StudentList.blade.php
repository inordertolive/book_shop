<style>
*{
    list-style:none;
}
.page-link{
    border:0; margin:10; padding:10; font-size:20px;  /* savers */ float:left;
    border:solid 1px red; margin-right:2px; color:#9d5644;
}
a{
    text-decoration:none;
}
</style>
{{session('success')}}
<br>
<table border="1">

        <form action="{{url('wareslistview')}}" method="get">
        <input type="text" value="{{$search}}" placeholder="根据商品名称" name="search">
        <input type="submit" value="搜索">
        </form>
<tr>
<td>ID</td>
<td>名字</td>
<td>电话</td>
<td>操作</td>
</tr>
@foreach($data as $key => $v)
<tr>
<td>{{$v->id}}</td>
<td>{{$v->uname}}</td>
<td>{{$v->utel}}</td>
<td>
<a href="{{url('del', ['id' => $v->id])}}">删除</a>
<a href="{{url('updateweb',['id' => $v->id])}}">修改</a>
<a href="{{url('adduserinfo')}}">新增</a>
</td>
</tr>
@endforeach
</table>
{{ $data->appends(['search' => $search])->links() }}