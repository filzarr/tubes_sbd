<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">
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
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register</h3>
			      		</div>
			      	</div>
							<form action="/register" method="post" class="signin-form">
							@csrf
			      		<div class="form-group">
			      			<input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="name" required value="{{ old("name") }}" >
			      			<label class="form-control-placeholder" for="name">Username</label>
							  @error('name')
							  <div  class="invalid-feedback">
								{{ $message }}
							  </div>
							  @enderror
			      		</div>
						  <div class="form-group form-floating">
							<input type="email" name="email" class="form-control" id="email" required value="{{ old("email") }}">
							<label class="form-control-placeholder @error('email')is-invalid @enderror" for="email" >Email</label>
							@error('email')
							  <div  class="invalid-feedback">
								{{ $message }}
							  </div>
							  @enderror
						</div>
		            <div class="form-group">
		              <input id="password-field" name="password" id="password" type="password" class="form-control" >
		              <label class="form-control-placeholder @error('password')is-invalid @enderror" for="password">Password</label>
					  	@error('password')
							  <div  class="invalid-feedback">
								{{ $message }}
							  </div>
						@enderror
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
					<div class="form-group">
						<input id="password-field" type="password"  class="form-control">
						<label class="form-control-placeholder" for="retypepassword">Re-Type Password</label>
						<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		            </div>
		            </div>
		          </form>
		          <p class="text-center">Anda sudah Punya Akun? <a href="/login">Log In</a></p>
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

