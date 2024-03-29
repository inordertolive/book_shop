
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>后台登录</title>
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

	<link href='loginstyle/family' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="loginstyle/css/bootstrap.min.css">
	<link rel="stylesheet" href="loginstyle/css/animate.css">
	<link rel="stylesheet" href="loginstyle/css/style.css">


	<!-- Modernizr JS -->
	<script src="loginstyle/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="loginstyle/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="menu">
						<li class="active"><a href="{{url('login')}}">管理员登录</a></li>
						<li class="active"><a href="{{url('regis')}}">注册管理员</a></li>
            <li class="active"><a href="{{url('myshopindex')}}">前往前台</a></li>

					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					

					<!-- Start Sign In Form -->
					<form action="{{url('loginweb')}}" method="post" class="fh5co-form animate-box" data-animate-effect="fadeIn">
  @csrf
          	<h2>登录 Sign In</h2>
						<div class="form-group">
							<label for="username" class="sr-only">Username</label>
							<input type="text" name="user" class="form-control" id="username" placeholder="Username" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<input type="password" name="pwd" class="form-control" id="password" placeholder="Password" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
						</div>

						<div class="form-group">
							<input type="submit" id="xxoo" value="登录  Sign In" class="btn btn-primary">
						</div>
					</form>
					<!-- END Sign In Form -->

				</div>
			</div>

	
	<!-- jQuery -->
	<script src="loginstyle/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="loginstyle/js/bootstrap.min.js"></script>
	<!-- Placeholder -->
	<script src="loginstyle/js/jquery.placeholder.min.js"></script>
	<!-- Waypoints -->
	<script src="loginstyle/js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="loginstyle/js/main.js"></script>
	</body>
</html>
<script>
  $(function(){
    $('#xxoo').click(function(){
      alert('登陆成功');
    })
  })
</script>
