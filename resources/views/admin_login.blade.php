<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/responsive.css')}}" rel="stylesheet">


        
  
</head><!--/head-->

<body>

	
	<section id="form"><!--form-->
	
		<div class="container">
			<div class="row">

				<div class="col-sm-4 col-sm-offset-4">

					<div class="login-form"><!--login form-->


						<p class="alert-danger">
						<?php

						$message=Session::get('message');
						if ($message) {
							echo $message;
							session::put('message',null);
						}

						?>
						</p>
					


						<h2>Login to your account</h2>
						<form action="{{url('/admin-dashboard')}}" method="post">

							{{csrf_field()}}


							<input type="email" name="admin_email" id="admin_email" placeholder="email" />
							<input type="password"  name="admin_password" id="admin_password" placeholder="password "/>
							
							<button type="submit" class="btn btn-default">Login</button>
						</form>						

					</div><!--/login form-->
					
				</div>
								
			</div>
		</div>

	</section><!--/form-->


	
	
	

    <script src="{{asset('backend/js/jquery.js')}}"></script>
	<script src="{{asset('backend/js/price-range.js')}}"></script>
    <script src="{{asset('backend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('backend/js/main.js')}}"></script> 

   


   
</body>
</html>