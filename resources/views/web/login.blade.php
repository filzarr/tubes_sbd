<!doctype html>
<html lang="en">
  <head>
  	<title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(img/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							@if(session()->has("success"))
								<div class="alert alert-succes alert-dismissible fade show" role="alert">
									{{ session('success') }}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							@endif
							@if(session()->has("loginError"))
					<			<div class="alert alert-danger alert-dismissible fade show" role="alert">
									{{ session('loginError') }}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							@endif
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3>
			      		</div>
			      	</div>
							<form action="/login" method="post" class="signin-form">
								@csrf
			      		<div class="form-group">
			      			<input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email"  autofocus required value="{{ old('email') }}">
			      			<label class="form-control-placeholder" for="email">Email</label>
							@error('email')
								<div class="invalid-feedback">
									{{ $message }}
								</div>
							@enderror
			      		</div>
		            <div class="form-group">
		              <input id="password-field" name="password" type="password" class="form-control"  required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Ingatkan Saya
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Lupa Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Anda belum Buat Akun? <a  href="/register">Register</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

