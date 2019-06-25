@extends('layouts.theindex')

@section('header')

@parent

@endsection
	<body>

		<header id="home" class="welcome-hero">

			<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
				<!--/.carousel-indicator -->
				 <ol class="carousel-indicators">
					<li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
					<li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
				</ol><!-- /ol-->
				<!--/.carousel-indicator -->

				<!--/.carousel-inner -->
				<div class="carousel-inner" role="listbox">
					<!-- .item -->
					<div class="item active">
						<div class="single-slide-item slide1">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>伟大的设计系列理论</h4>
													<h2>cloth covered accent chair</h2>
													<p>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
													</p>
													<div class="packages-price">
														<p>
															$ 399.00
															<del>$ 499.00</del>
														</p>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
														<span class="lnr lnr-plus-circle"></span>
														Read Product
													</button>
													<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
														more info
													</button> 
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="20190619223449.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->

					</div><!-- /.item .active-->

					<div class="item">
						<div class="single-slide-item slide2">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>以浅显易懂的文字带领您进入Linux 的世界</h4>
													<h2>mapple wood accent chair</h2>
													<p>
													《鸟哥的Linux私房菜 基础学习篇 第四版 》提供近期更新的技术，包括核心版本的升级建议，虚拟系统的操作，GPT 分割表格式处理，XFS 文件系统的实际操作使用，systemd 服务的管理，日志格式的更新，grub2 开机管理程序的说明，nmcli 文字指令操作网络参数的方式等，内容更加精彩！
													</p>
													<div class="packages-price">
														<p>
															$ 199.00
															<del>$ 299.00</del>
														</p>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
														<span class="lnr lnr-plus-circle"></span>
														add <span>to</span> cart
													</button>
													<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
														more info
													</button>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="20190619224214.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
					</div><!-- /.item .active-->
					<div class="item">
						<div class="single-slide-item slide3">
							<div class="container">
								<div class="welcome-hero-content">
									<div class="row">
										<div class="col-sm-7">
											<div class="single-welcome-hero">
												<div class="welcome-hero-txt">
													<h4>MySQL Crash Course</h4>
													<h2>valvet accent arm chair</h2>
													<p>
													《MySQL必知必会》是经典畅销书《SQL必知必会》之后，作者应众多读者的请求编写的，专门针对MySQL用户。书中继承了《MySQL必知必会》的优点，没有过多阐述数据库基础理论，而是紧贴实战需要，直接从数据检索开始，逐步深入各种复杂的内容，包括联结的使用、子查询、正则表达式和基于全文本的搜索、存储过程、游标、触发器、表约束，等等。通过本书，读者能够掌握扎实的基本功，迅速成为MySQL高手。
													</p>
													<div class="packages-price">
														<p>
															$ 299.00
															<del>$ 399.00</del>
														</p>
													</div>
													<button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
														<span class="lnr lnr-plus-circle"></span>
														add <span>to</span> cart
													</button>
													<button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
														more info
													</button>
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
										<div class="col-sm-5">
											<div class="single-welcome-hero">
												<div class="welcome-hero-img">
													<img src="20190619224422.png" alt="slider image">
												</div><!--/.welcome-hero-txt-->
											</div><!--/.single-welcome-hero-->
										</div><!--/.col-->
									</div><!--/.row-->
								</div><!--/.welcome-hero-content-->
							</div><!-- /.container-->
						</div><!-- /.single-slide-item-->
						
					</div><!-- /.item .active-->
				</div><!-- /.carousel-inner-->
			</div><!--/#header-carousel-->
			<!-- top-area Start -->

@extends('layouts.ttop')

@section('ttop')

@parent

@endsection

			    <div class="clearfix"></div>
			</div><!-- /.top-area-->
		</header><!--/.welcome-hero-->
		<div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >自助建站</a></div>
		<section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>热卖单品 featured products</h2>
					距离热卖商品结束还有：
                                        <div class="time-item">
                                            <strong id="day_show">&nbsp;</strong>
                                            <strong id="hour_show">&nbsp;</strong>
                                            <strong id="minute_show">&nbsp;</strong>
                                            <strong id="second_show">&nbsp;</strong>
                                        </div>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
@foreach($data as $dd)					
						<div class="col-sm-3">
							<div class="single-feature">
							<img class="img" goods_id="{{$dd->id}}" width="350" height="350"  src="{{asset('storage')}}/{{$dd->waresimg}}" alt="feature image">
								
								<div class="single-feature-txt text-center">
									<p>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
										<span class="feature-review">(45 review)</span>
									</p>
									<h3><a href="#">{{$dd->waresname}}</a></h3>
									<h5>🐏{{$dd->goods_price}}</h5>
								</div>
							</div>
						</div>
@endforeach	
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
		<!--feature end -->

		<!--blog start -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="section-header">
					<h2>时尚新品  latest blog</h2>
				</div><!--/.section-header-->
				<div class="blog-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b1.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b2.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-blog">
								<div class="single-blog-img">
									<img src="assets/images/blog/b3.jpg" alt="blog image">
									<div class="single-blog-img-overlay"></div>
								</div>
								<div class="single-blog-txt">
									<h2><a href="#">Why Brands are Looking at Local Language</a></h2>
									<h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
									<p>
										Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.container-->
		</section><!--/.blog-->

		<!--newsletter end -->
		<!--footer start-->
		<footer id="footer"  class="footer">
			<div class="container">
				<div class="hm-footer-copyright text-center">
					<div class="footer-social">
						<a href="#"><i class="fa fa-facebook"></i></a>	
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>	
					</div>

				</div><!--/.text-center-->
			</div><!--/.container-->
			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
			</div><!--/.scroll-Top-->
        </footer><!--/.footer-->
		<script src="assets/js/jquery.js"></script>
        <!--modernizr.min.js-->
        <script src="/modernizr2.8.3.min.js"></script>
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>
		<!--owl.carousel.js-->
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="/easing1.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
<script src="/jquery-3.3.1.min.js" charset="utf-8"></script>
<script src="/jquery-3.3.1.js" charset="utf-8"></script>
<script type="text/javascript">
        function ttt() {
            var timecount =(new Date()).getTime();//    Thu Jun 20 2019 17:21:23 GMT+0800 (中国标准时间)//当前时间
            var endtime = (new Date('Thu Jun 21 2019 23:59:59')).getTime();
            var tt = endtime - timecount;
            if (tt > 0) {
                var day  = parseInt(tt / (1000 * 60 * 60 * 24));       
                var hour = parseInt(tt / (1000 * 60 * 60) - (day * 24));
                var fen  = parseInt(tt / (1000 * 60) - (day * 24 *60) - (hour * 60));
                var miao = parseInt(tt / (1000 * 1) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (fen * 60));
            }
            if (fen <= 9) fen = '0' + fen;
            if (miao <= 9) miao = '0' + miao;
            $('#day_show').html(day + "天");
            $('#hour_show').html('<s id="h"></s>' + hour + '时');
            $('#minute_show').html('<s></s>' + fen + '分');
            $('#second_show').html('<s></s>' + miao + '秒');
        };
        window.setInterval(function() {
                ttt();
		}, 1000);
			$(function(){
				$('.img').click(function(){
					var goods_id = $(this).attr('goods_id');
					location.href="{{url('indexproduct')}}?goods_id="+goods_id;
				})
			})
    </script>
@extends('layouts.jjs')

@section('jjs')

@parent

@endsection