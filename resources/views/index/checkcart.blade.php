@extends('layouts.theindex')

@section('header')

@parent

@endsection
	  <link href="cart/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	  <link href="cart/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="cart/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	  <link href="cart/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	  <link href="cart/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	  <link href="cart/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	  <link href="cart/plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
	  <link href="cart/img/favicon.png" rel="shortcut icon">
	  <script src="cart/plugins/jquery/jquery.min.js"></script>
	  <script src="cart/plugins/jquery-ui/jquery-ui.min.js"></script>
	  <script src="cart/plugins/tether/js/tether.min.js"></script>
	  <script src="cart/plugins/raty/jquery.raty-fa.js"></script>
	  <script src="cart/plugins/bootstrap/dist/js/popper.min.js"></script>
	  <script src="cart/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	  <script src="cart/plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
	  <script src="cart/plugins/slick-carousel/slick/slick.min.js"></script>
	  <script src="cart/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	  <script src="cart/plugins/fancybox/jquery.fancybox.pack.js"></script>
	  <script src="cart/plugins/smoothscroll/SmoothScroll.min.js"></script>
	  <script src="cart/js/scripts.js"></script>
	<body>
@extends('layouts.ttop')

@section('ttop')

@parent

@endsection
<br><br><br><br><br><br><br><br><br>
<center>
<div style="width:80%;tr{height:80px;}" >
						<h1 class="">My Cart 我的购物车</h1><br><br>
						<table class="" border="0">
							<thead>
								<tr height="50">
									<th align="center" width="80">全选</th>
									<th width="100">图片 Image</th>
									<th align="center">商品名称 Title</th>
									<th class="text-center"  width="80">数量</th>
									<th class="text-center" width="50">操作</th>
								</tr>
							</thead>
@foreach($gonggongdata as $dd)
							<tbody>
								<tr style="100px;" class="goods_id" >
									<td><input type="checkbox" class="inp" goods_id={{$dd->goods_id}}></td>
									<td class="product-thumb"  height="100">
								<img style="width:100;height:100;" src="{{asset('storage')}}/{{$dd->goods_pic}}" alt="">
									</td>
									<td class="product-details">
										<h3 class="title">{{$dd->waresname}}</h3>
									</td>
									<td align="center" class="product-category"><span class="categories"><button>{{$dd->goods_num}}</button></span></td>
									<td align="center" class="action" data-title="Action">
										<div class="">
											<ul class="list-inline justify-content-center">
												<li class="list-inline-item">
													<a class="edit" href="">
														<i class="fa fa-clipboard"></i>
													</a>		
												</li>
												<li class="list-inline-item">
													<a class="delete" href="">
														<i class="fa fa-trash"></i>
													</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>

							</tbody>
@endforeach

						</table>
<br><br><br>
</div>						
</center>

<div class="col-md-4 col-sm-6 col-xs-6 cart-collaterals" style="float:right; width:50%; border:1px solid #F00">
<center>
						<div class="cart_totals">
							<h3 align="left">购物车合计 totals</h3>
							<table>
								<tr>
									<th >总价 Total🐏</th>
									<td>$--<span style="color:red;"><b>{{$gonggongtotal}}</b></span></td>
								</tr>
							</table>
							<div class="wc-proceed-to-checkout" align="right">		
								<a href="javascript:;" class="checkout-button button alt wc-forward"><button class="sub" style="border:1px solid #000">点这里下单至订单</button></a>
							</div>
						</div>
</center>
</div>
<br><br><br><br><br>
@section('folt')

@parent

@endsection

		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        <!--Custom JS-->
        
    </body>
	
</html>
<script>
	$(function(){
		
		$('.sub').click(function(){
			var goods_id = '';
			$('input:checked').each(function(){
				goods_id += $(this).attr('goods_id')+",";//每个值之间用','分开
			});
			window.location.href="{{url('addorder')}}?goods_id="+goods_id;
		})

	})			
</script>
@extends('layouts.jjs')

@section('jjs')

@parent

@endsection