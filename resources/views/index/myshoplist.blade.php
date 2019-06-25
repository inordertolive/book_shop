@extends('layouts.theindex')

@section('header')

@parent

@endsection

	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
@extends('layouts.ttop')

@section('ttop')

@parent

@endsection
		<!-- new-arrivals start              这个是商品列表 -->
		<section id="new-arrivals" class="new-arrivals">
			<div class="container">
				<div class="section-header">
					<h2>商品列表 Goods List</h2>
				</div><!--/.section-header-->
				<div class="new-arrivals-content">
					<div class="row">
@foreach($data as $dd)
						<div class="col-md-3 col-sm-4" style="width:292.5px;height:471px;">
							<div class="single-new-arrival">
								<div class="single-new-arrival-bg">
									<img id="img" goods_id="{{$dd->id}}" src="{{asset('storage')}}/{{$dd->waresimg}}" wdith="262" height="330" alt="new-arrivals images">
									<div class="single-new-arrival-bg-overlay img"></div>
									<div class="sale bg-1">
										<p>Hot {{$dd->id}}</p>
									</div>
									<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="{{url('indexproduct')}}?goods_id={{$dd->id}}">Read <span>to </span> Product</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
									</div>
								</div>
								<h4><a href="{{url('indexproduct')}}?goods_id={{$dd->id}}">{{$dd->waresname}}</a></h4>
								<p>🐏</p>
								<p class="arrival-product-price">${{$dd->goods_price}}</p>
							</div>
						</div>
@endforeach
					</div>
				</div>
				<center>{{ $data->links() }}</center>
			</div><!--/.container-->
		
		</section><!--/.new-arrivals-->
		<!--new-arrivals end -->
@section('folt')

@parent

@endsection

		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        
    </body>
	
</html>
<script src="/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="/jquery-3.3.1.js" charset="utf-8"></script>
<script>
		$(function(){
			$('.img').click(function(){
					alert(1);
			})
		})

</script>

@extends('layouts.jjs')

@section('jjs')

@parent

@endsection