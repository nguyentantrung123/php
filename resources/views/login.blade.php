<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Đăng nhập</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css files -->
<link rel="stylesheet" href="{{ URL::asset("css/font-awesome.css") }}"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="{{ URL::asset("css/style.css") }}" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
		<!--header-->
		<div class="header-w3l">
			<h1>4T's VietNam Restaurant</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Đăng nhập vào hệ thống</h2>
							@if(session('thongbao'))
									<div class="alert alert-danger" role="alert">
									<strong class="error">{{session('thongbao')}}</strong>
									</div>
								@endif
							<form action="{{route('login')}}" method="post">
							@csrf

								<div class="form-sub-w3">
									<input type="text" name="Username" placeholder="Tài khoản " required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								
								</div>
								<div class="form-sub-w3">
									<input type="password" name="Password" placeholder="Mật khẩu" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								
								</div>
								<label class="anim">
								<input type="checkbox" class="checkbox">
									<span>Nhớ tài khoản</span> 
									<a href="#">Quên mật khẩu?</a>
								</label> 
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" value="Đăng nhập">
								</div>
							</form>
						</div>
		</div>	
</body>
</html>