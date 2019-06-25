<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>商城后台管理</title>
  <link rel="stylesheet" href="/layui/css/layui.css">
  <!-- bootroap样式链接 -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.css.map">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min">
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.map">
  <link rel="stylesheet" href="/bootstrap/css/app.css">
  
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">辣椒炒肉</div>
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">用户管理</a></li>
      <li class="layui-nav-item"><a href="{{url('regis')}}">用户注册</a></li>
      <li class="layui-nav-item"><a href="{{url('/')}}">前台查看</a></li>

    </ul>
@if(empty(session('login')))
          <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
              <a href="javascript:;">
                <img src="144330.png" class="layui-nav-img">
                贤心
              </a>
              <dl class="layui-nav-child">
                <dd><a href="">基本资料</a></dd>
                <dd><a href="">安全设置</a></dd>
              </dl>
            </li>
          <li class="layui-nav-item"><a href="{{url('login')}}" style="color:red;">欢迎游客,请登陆后操作</a></li>
      </ul>
@else
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
              <a href="javascript:;">
                <img src="/批注 2019-06-19 144330.png" class="layui-nav-img">
                <span style="color:red;">{{session('login')}}</span>
              </a>
              <dl class="layui-nav-child">
                <dd><a href="">基本资料</a></dd>
                <dd><a href="">安全设置</a></dd>
              </dl>
            </li>
      <li class="layui-nav-item">欢迎管理员登录！！</li>|||
      <li class="layui-nav-item out"><a>点此退出</a></li>
      </ul>
@endif
    
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">商品管理</a>
          <dl class="layui-nav-child">
            <dd><a href="{{url('addgoodsweb')}}">商品添加</a></dd>
            <dd><a href="{{url('wareslistview')}}">商品列表</a></dd>
            <dd><a href="{{url('adminorder')}}">用户订单管理</a></dd>
          </dl>
        </li>

      </ul>
    </div>
  </div>
  
  <div class="layui-body">
  @section('sidebar')
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">内容主体区域</div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
    @show
  </div>
</div>
<script src="/layui/layui.js"></script>
<script>
//JavaScript代码区域
layui.use(['element','jquery','layer'], function(){
  var element = layui.element;
  var $ = layui.jquery;
  var layer = layui.layer;


$('.out').click(function(){
            $.ajax({
              url:"iii",
              dataType:'json',
              success:function(msg){
                if(msg.code==1){
                      layer.msg(msg.font,{icon:msg.code});
                      setTimeout(function(){     //设置多少毫秒后自动刷新
                         self.location='login';
                      },2000) 
                }else{
                      layer.msg(msg.font,{icon:msg.code});
                }
              }
            })
        })

  
});
</script>

</body>
</html>