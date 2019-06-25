
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用户信息注册</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="loginstyle/favicon.ico">

	<link href='/loginstyle/family' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="loginstyle/css/bootstrap.min.css">
	<link rel="stylesheet" href="loginstyle/css/animate.css">
	<link rel="stylesheet" href="loginstyle/css/style.css">

	<!-- Modernizr JS -->
	<script src="loginstyle//modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="loginstyle//respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="style-2">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						<li class="active"><a href="{{url('login')}}">管理员登陆</a></li>
						<li class="active"><a href="{{url('regis')}}">管理员注册</a></li>
						<li class="active"><a href="{{url('myshopindex')}}">前往前台</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					

					<!-- Start Sign In Form -->
					<form action="{{url('regisweb')}}" class="fh5co-form animate-box" data-animate-effect="fadeInLeft">
    @csrf
                        <h2>管理员注册</h2>
						<div class="form-group">
							<div class="alert alert-success" role="alert">
Please enter your information.</div>
						</div>
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="text" class="form-control" id="name" name="user" placeholder="Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">工号</label>
							<input type="email" class="form-control" id="email" placeholder="员工工号(选填)" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="pwd" id="password" placeholder="Password" autocomplete="off">
						</div>

						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>

						<div class="form-group">
							<input type="submit" id="xxoo" value="注册 Sign Up" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->


				</div>
			</div>
			<div class="row" style="padding-top: 60px; clear: both;">
			</div>
		</div>
	
	<!-- jQuery -->
	<script src="loginstyle//jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="loginstyle//bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="loginstyle//jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="loginstyle//jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="loginstyle//main.js"></script>

	</body>
</html>

<script>
  $(function(){
    $('#xxoo').click(function(){
      alert('注册成功');
    })
  })
</script>
