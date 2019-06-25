@extends('layouts.loginstyle')
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Minimal and Clean Sign up / Login and Forgot Form by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	
@section('indexstyle')

@parent

@endsection
  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	</head>
	<body class="style-3">

		<div class="container">
        <div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						<li class="active"><a href="{{url('userlogin')}}">书架网会员登录(有好礼)</a></li>
						<li><a href="{{url('userregis')}}">书架网会员注册</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-push-8">
					

					<!-- Start Sign In Form -->
					<form action="{{url('indexadduser')}}" method="post" class="fh5co-form animate-box" data-animate-effect="fadeInRight">
                    @csrf
                        <h2>注册(送好礼)</h2>
						<div class="form-group">
							<div class="alert alert-success" role="alert">Please fill in your information.
                        </div>
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
						</div>

						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>
						<div class="form-group">
							<input type="submit" value="注册 Regis" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->
				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
			</div>
		</div>
	
	
	</body>
</html>

