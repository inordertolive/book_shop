@extends('layouts.index')

@section('sidebar')


    <form action="addwares" method="post" class="layui-form" enctype="multipart/form-data">

    @csrf
<div style="padding:50px;">
    <div class="layui-form-item">
    <label class="layui-form-label" style="width:90px;">商品名称</label>
    <div class="layui-input-inline">
      <input type="text" name="waresname" lay-verify="required" placeholder="请输入" style="width:300px;" autocomplete="off" class="layui-input">
    </div>
    </div>
    <div class="layui-form-item">
    <label class="layui-form-label" style="width:90px;">商品图片</label>
    <div class="layui-input-inline">
      <input type="file" name="waresimg" lay-verify="required" placeholder="请输入" autocomplete="off" >
    </div>
    </div>
    <div class="layui-form-item">
    <label class="layui-form-label" style="width:90px;">商品价格</label>
    <div class="layui-input-inline">
      <input type="text" name="goods_price"  lay-verify="required" placeholder="请输入商品价格" style="width:300px;" autocomplete="off" class="layui-input">
    </div>
    </div>
    <div class="layui-form-item">
    <label class="layui-form-label" style="width:90px;">商品库存</label>
    <div class="layui-input-inline">
      <input type="text" name="waresnum"  lay-verify="required" placeholder="请输入商品库存" style="width:300px;" autocomplete="off" class="layui-input">
    </div>
    </div>
    
    <input style="padding-left:100px;padding-right:100px;" type="submit" class="btn btn-danger" value="&nbsp;&nbsp;&nbsp;&nbsp;商品添加 inser">
</div>


    </form>

@endsection

    
