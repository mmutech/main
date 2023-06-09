<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-layout-mode="orange" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - JED HRMS</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/material.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="#"><img src="{{asset('assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle"><x-input-error for="email" class="text-danger text-center"></x-input-error></p>
							
							<!-- Account Form -->
							<form method="POST" action="{{ route('login') }}">
                                @csrf
                                
								<div class="form-group">
									<label>Email Address</label>
                                    <x-label for="email" value="{{ __('Email') }}" />
									<input class="form-control" type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                    
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="forgot-password.html">
												Forgot password?
											</a>
										</div>
									</div>
									<div class="position-relative">
										<input class="form-control" type="password" name="password" required autocomplete="current-password" id="password">
										<span class="fa fa-eye-slash" id="toggle-password"></span>
									</div>
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Login</button>
								</div>
								<div class="account-footer">
									<p>Don't have an account yet? <a href="#">Contact Admin</a></p>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		

		<!-- jQuery -->
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		
		 <!-- Theme Settings JS -->
		<script src="{{asset('assets/js/layout.js')}}"></script>
		<script src="{{asset('assets/js/theme-settings.js')}}"></script>
		<script src="{{asset('assets/js/greedynav.js')}}"></script>
		<!-- Custom JS -->
		<script src="{{asset('assets/js/app.js')}}"></script>
		
    
<div class="sidebar-overlay"></div></body></html>