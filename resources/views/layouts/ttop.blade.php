@section('ttop')

<div class="top-area">
				<div class="header-area">
					<!-- Start Navigation -->
			<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
				<!-- 商品搜索 -->
					<form action="{{url('myshoplist')}}" method="get">
                    <!-- @csrf -->
				        <!-- Start Top Search -->
				        <div class="top-search">
				            <div class="container">
				                <div class="input-group">
				                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
				                    <input type="text" name="search" class="form-control" placeholder="Search">
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                	<input type="submit" value="搜索商品">
								</div>
				            </div>
				        </div>
					</form>
				        <!-- End Top Search -->
				        <div class="container">            
				            <!-- Start Atribute Navigation -->
				            <div class="attr-nav">
				                <ul>
				                	<li class="search">
				                		<a href="#"><span class="lnr lnr-magnifier"></span></a>
				                	</li><!--/.search-->
@if(empty(session('userlogin')))
				                	<li class="nav-setting">
				                		<a class="out" href="{{url('userlogin')}}">登录</a>
				                	</li><!--/.search-->
@else
                                    <li class="nav-setting">
				                		<a href="{{url('myshopindex')}}" class="out">🐷</a>
				                	</li><!--/.search-->
@endif

				                    <li class="dropdown">
				                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
				                            <span class="lnr lnr-cart" ></span>
											<span class="badge badge-bg-1">2</span>
				                        </a>
				                        <ul class="dropdown-menu cart-list s-cate">
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">arm <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="assets/images/collection/arrivals2.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">single <br> armchair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="single-cart-list">
				                                <a href="#" class="photo"><img src="assets/images/collection/arrivals3.png" class="cart-thumb" alt="image" /></a>
				                                <div class="cart-list-txt">
				                                	<h6><a href="#">wooden arn <br> chair</a></h6>
				                                	<p>1 x - <span class="price">$180.00</span></p>
				                                </div><!--/.cart-list-txt-->
				                                <div class="cart-close">
				                                	<span class="lnr lnr-cross"></span>
				                                </div><!--/.cart-close-->
				                            </li><!--/.single-cart-list -->
				                            <li class="total">
				                                <span>Total: $0.00</span>
				                                <button class="btn-cart pull-right" onclick="window.location.href='checkcart'">view cart</button>
				                            </li>
				                        </ul>
				                    </li><!--/.dropdown-->
				                </ul>
				            </div><!--/.attr-nav-->
				            <!-- End Atribute Navigation -->
				            <!-- Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
				                <a class="navbar-brand" href="index.html">书架网.</a>
				            </div><!--/.navbar-header-->
				            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
				                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
				                    <li class="active"><a href="{{url('myshopindex')}}">home</a></li>
				                    <li class="active"><a href="{{url('myshoplist')}}">全部热卖Hot</a></li>
				                    <li class="scroll"><a href="#feature">首页秒杀features</a></li>
				                    <li class="scroll" id="admin"><a href="{{url('wareslistview')}}">后台管理Admin</a></li>
				                    <li class="scroll"><a href="#newsletter">个人信息Msg</a></li>
				                </ul><!--/.nav -->
				            </div><!-- /.navbar-collapse -->
				        </div><!--/.container-->
    		</nav><!--/nav-->
				</div><!--/.header-area-->
                
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

    $('#home').click(function(){
        // location.href="myshopindex";
        alert(1);
    })
	$('.dropdown-toggle').click(function(){
		alert();
	})

  
});
</script>
@show