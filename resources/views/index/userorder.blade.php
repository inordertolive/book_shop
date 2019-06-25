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
						<h1 class="">My Cart 我的订单</h1><br><br>
						<table class="" border="0">
							<thead>
								<tr height="50">
									<th width="100">图片 Image</th>
									<th align="center">商品名称 Title</th>
									<th class="text-center"  width="100">数量</th>
									<th class="text-center" width="50">操作</th>
								</tr>
							</thead>
@foreach($data as $dd)
							<tbody>
								<tr class="times" startime="{{$dd->add_time}}" end_time="{{date('Y-m-d H:i:s',strtotime('+10 minutes',$dd->add_time))}}">
									<td colspan="4" style="background:#ddd;">
									<a>订单号:{{$dd->oid}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					@if($dd->state == 1)
									<a style="float:right;">订单未支付</a>
									订单过期支付时间(<a class="timess"></a>)<a style="float:right;">&nbsp;&nbsp;&nbsp;</a>
					@elseif($dd_>state == 2)
									<a style="float:right;">订单已支付</a>
					@else
									<a style="float:right;">订单已过期</a>
					@endif
									</td>
								</tr>
		@foreach($dd->ming as $d)
								<tr style="100px;" class="goods_id" >
									<td class="product-thumb"  height="100">
								<img style="width:100;height:100;" src="{{asset('storage')}}/{{$d->goods_pic}}" alt="">
									</td>
									<td class="product-details">
										<h3 class="title">{{$d->goods_name}}</h3>
									</td>
									<td align="center" class="product-category"><span class="categories"><button>{{$d->goods_num}}</button></span></td>
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
		@endforeach
							</tbody>
@endforeach
						</table>        
</div>						
</center>

@section('folt')

@parent

@endsection
		<script src="assets/js/jquery.js"></script>
        <script src="/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    </body>
</html>
<script type="text/javascript">
$(function(){
	// getTime();
			function aaa() {
				$('.times').each(function(){
					var _this = $(this);
					var end_time =  $(this).attr('end_time');
					end_time = new Date(end_time);
					timedate = end_time.getTime();        //截至时间
					var timecount =(new Date()).getTime();//    Thu Jun 20 2019 17:21:23 GMT+0800 (中国标准时间)//当前时间
					var tt = timedate - timecount;        //获取一个时间差集
					console.log(end_time);
					if (tt > 0) {
						var fen  = parseInt(tt / (1000 * 60));
						var miao = parseInt(tt / (1000 * 1) - (fen * 60));
					}

					if (fen <= 9) fen = '0' + fen;
					if (miao <= 9) miao = '0' + miao;
					_this.find('.timess').html(fen + '分' + miao + '秒');
							if(tt <= 0){
								_this.find('.timess').html('订单已过期，请重新下单');
							}
				})
			};
						window.setInterval(function() {
							aaa();
						}, 1000);
})
        
       
    </script>

@extends('layouts.jjs')

@section('jjs')

@parent

@endsection