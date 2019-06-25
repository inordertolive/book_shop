@extends('layouts.theindex')

@section('header')

@parent

@endsection
		<link href="product/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="product/css/font-awesome.min.css" rel="stylesheet">
		<link href="product/css/linearicons.css" rel="stylesheet">
		<link href="product/css/style.css" rel="stylesheet">
		<link href="product/css/responsive.css" rel="stylesheet">
		<script src="product/js/jquery-2.1.1.js"></script>
		<script src="product/bootstrap/js/bootstrap.min.js"></script>
	<body>
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
@extends('layouts.ttop')

@section('ttop')

@parent

@endsection
<br><br><br><br><br><br>	
<section class="single-product">
            <div class="container">	
                <div class="row">	
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-product-img">
                            <img class="img-responsive" src="{{asset('storage')}}/{{$data->waresimg}}" alt="" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="single-product-detail">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default active"> <i class="fa fa-circle"></i>有货 in Stock</button>
                                <button type="button" class="btn btn-default"> {{$data->waresnum}} - in Stock 库存</button>
                            </div>
                            <h3>{{$data->waresname}}</h3>
                            <ul class="list-inline">
                                <li><i class="lnr lnr-star"></i></li>
                                <li><i class="lnr lnr-star"></i></li>
                                <li><i class="lnr lnr-star"></i></li>
                                <li><i class="lnr lnr-star"></i></li>
                                <li><i class="lnr lnr-star-half"></i></li>
                                <li><span>5 - Reviews</span></li>
                            </ul>
                            <p>{{$data->content}}</p>
                            <table class="table table-responsive table-bordered">
                                 <tr>
                                    <td width="100">购买数量</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li>
                                                <button class="n_btn_1">+</button>
                                                <input type="text" class="n_ipt" value="1" name="waresnum" style="width:40px;">
                                                <button class="n_btn_2">-</button>
                                            </li>
                                        </ul>    
                                    </td>
                                </tr>
                            </table>
                            <div class="price">${{$data->goods_price}}</div>
                            <div class="order-tag">Tellus accumsan purus diam molestias</div>
                            <div class="add-cart"><a class="btn btn-default" id="add" href="javascript:;"><i class="lnr lnr-cart"></i>Add to 添加至购物车</a></div>
                        </div>    
                    </div>    
                </div>    
            </div> 
</section>

@section('folt')

@parent

@endsection
<!-- //{{url('addcart')}}?goods_id={{$data->id}} -->

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
<script >
         $(document).on('click','.n_btn_1',function(){
                var num = $('.n_ipt').val();    //获取input框内的值
                var maxnum = '{{$data->waresnum}}';  //最大库存
                num = parseInt(num);
                maxnum = parseInt(maxnum);
                if(num >= maxnum){
                    alert('在下没有那么多货了');
                }else{
                    num = num+1;
                    $('.n_ipt').val(num);
                }
         })
         $(document).on('click','.n_btn_2',function(){    //点击减号
                var num = $('.n_ipt').val();    //获取input框内的值
                var maxnum = '{{$data->waresnum}}';  //最大库存
                num = parseInt(num);
                maxnum = parseInt(maxnum);
                if(num <= 1){
                    alert('真是铁公鸡');
                }else{
                    num = num-1;
                    $('.n_ipt').val(num);
                }
         })
         $(document).on('blur','.n_ipt',function(){    //input失焦
                var num = $('.n_ipt').val();    //获取input框内的值
                var maxnum = '{{$data->waresnum}}';  
                num = parseInt(num);                    //这个值可能不止是整型，需要强制转换成整型
                maxnum = parseInt(maxnum);    
                // alert(num);die();
                if(num>=maxnum){
                    alert('在下没有那么多货了');
                    $('.n_ipt').val(maxnum);
                }else if(num <= 1){
                    alert('真是铁公鸡');
                    $('.n_ipt').val(1);
                }else if(isNaN(num)){
                    $('.n_ipt').val(1);
                }else{
                    $('.n_ipt').val(num);
                }      
         })
         $('#add').click(function(){
            var num = $('.n_ipt').val();    //获取input框内的值
            var goods_id = {{$data->id}};   //商品ID
            location.href="addcart?goods_id="+goods_id+'&num='+num;
        })
        //  $(document).on('click','.imgs',function(){
        //     var goods_id = '{$goods.id}';    //获取商品id
        //     var num = $('.n_ipt').val();    //获取input框内的值
        //     if(goods_id == ''){
        //          alert('至少得选择一个商品吧');
        //          return false;
        //     }
        //     if(num == ''){
        //          alert('购买数量不正确');
        //          return false;
        //     }
        //     // $.ajax({
        //     //     url:"{:url('addcart')}",
        //     //     data:{goods_id:goods_id,num:num},
        //     //     dataType:'json',
        //     //     type:'post',
        //     //     success:function(msg){
        //     //         alert(msg.msg);
        //     //         // console.log(msg);
        //     //     }
        //     // })

        //  }) 
</script>
@extends('layouts.jjs')

@section('jjs')

@parent

@endsection