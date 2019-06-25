@extends('layouts.theindex')

@section('header')

@parent

@endsection

	<link rel="icon" type="image/x-icon" href="order/images//favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="order/images//apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="order/images//apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="order/images//apple-touch-icon-57x57-precomposed.png">	
	<link href="/googleapis.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="order/revolution/css/settings.css">
	<!-- <link rel="stylesheet" type="text/css" href="order/revolution/css/layers.css"> -->
	<link rel="stylesheet" type="text/css" href="order/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="order/libraries/lib.css">
	<link rel="stylesheet" type="text/css" href="order/css/plugins.css">			
	<link rel="stylesheet" type="text/css" href="order/css/navigation-menu.css">
	<link rel="stylesheet" type="text/css" href="order/css/shortcode.css">
	<link rel="stylesheet" type="text/css" href="order/style.css">
	<script src="order/js/jquery.min.js"></script>
	<script src="order/libraries/lib.js"></script>
	<script src="order/libraries/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="order/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="order/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	<script type="text/javascript" src="order/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="order/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="order/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="order/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="order/js/functions.js"></script>

	<body>
@extends('layouts.ttop')

@section('ttop')

@parent

@endsection
<br><br><br><br><br><br><br><br><br>
<center>
<div style="width:80%;tr{height:80px;}" >
						<h1 class="">订单结算页面(订单编号{{$data[0]->oid}})</h1><br><br>
						<table class="" border="0">
							<thead>
								<tr height="50">
									<th width="100">图片 Image</th>
									<th align="center">商品名称 Title</th>
									<th class="text-center"  width="80">购买数量</th>
									<th class="text-center"  width="80">单价</th>
								</tr>
							</thead>
@foreach($data as $dd)
							<tbody>
								<tr style="100px;" class="goods_id" >
									<td class="product-thumb"  height="100">
								<img style="width:100;height:100;" src="{{asset('storage')}}/{{$dd->goods_pic}}" alt="">
									</td>
									<td class="product-details">
										<h3 class="title">{{$dd->waresname}}</h3>
									</td>
									<td align="center" class="product-category"><span class="categories"><button>{{$dd->goods_num}}</button></span></td>
									<td align="center" class="action" data-title="Action">{{$dd->goods_price}}</td>
									<td align="center" class="action" data-title="Action"></td>
								</tr>

							</tbody>
@endforeach

						</table>
<br><br><br>
</div>						
</center>

<div class="col-md-4 col-sm-6 col-xs-6 cart-collaterals" height="300" style="float:right; background:#ddd; width:50%; border:1px solid #dd0">
<center>
						

						<div class="cart_totals">
						<div class="checkout-payment">
										<ul>
											<li>
												<input value="Direct Bank Transfer"  type="radio">
												<label>直接银行转账</label>
												<div class="payment_box">
													<p>将付款直接存入我们的银行帐户。请使用您的订单ID作为付款参考。在我们的帐户中清算资金之前，您的订单不会被运送。</p>
												</div>
											</li>
											<li>
												<input value="Paypal" checked type="radio"><br>
												<label>使用支付宝结算</label><img style="border:none;max-width:226px; height:60px;" src="/20190623174127.png" alt="">
											</li>
										</ul>
						</div>
						</div>
						<div class="cart_totals"><br><br>
						<label>订单详情</label><br>
											合计金额：🐏{{$total}}（人民币）（元）<br>
											支付方式：默认使用支付宝方式<br>
											本次订单编号：{{$data[0]->oid}}<br>
											<p>👇👇👇点击这里马上去付款咯👇👇👇</p>
											<input value="PLACE YOUR ORDER" class="sub" type="button">
						</div>
</center>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
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
			// alert();
			// $('input:checked').each(function(){
			// 	goods_id += $(this).attr('goods_id')+",";//每个值之间用','分开
			// });
			window.location.href="{{url('pay')}}?oid={{$data[0]->oid}}";
		})

	})			
</script>
@extends('layouts.jjs')

@section('jjs')

@parent

@endsection