<html>
<head>
    <title>商品修改</title>
</head>
<body>
    <form action="updatedo" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$data->id}}">
    @csrf
        &nbsp;&nbsp;商品名称<input type="text" value="{{$data->waresname}}" name="waresname"><br>
        修改图片<br><img width="120" height="100" src="{{asset('storage')}}/{{$dd->waresimg}}" alt=""><input type="file"  name="waresimg"><br>
        &nbsp;&nbsp;商品库存<input type="text" value="{{$data->waresnum}}" name="waresnum"><br>
        <input type="submit" value="修改商品">
    </form>
</body>
</html>