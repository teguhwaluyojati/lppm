<!doctype html>
<html lang="id" prefix="og: https://ogp.me/ns#" style="scroll-behavior: auto;">
  <head>
  	<title>Login LPPM</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <img src="{{ asset('img/logo.png') }}" alt="LPPM Logo" width="150" height="150">
					<h2 class="heading-section"><b>WELCOME TO
                        <br> LPPM ISTEK WIDURI</b>
                    </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<img src="{{ asset('img/man.png') }}" alt="User Icon" width="110" height="110">
		      	</div>
		      	<h3 class="text-center mb-4">Sign in to your account</h3>

		      	@if ($errors->any())
		      		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		      			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		      			@foreach ($errors->all() as $error)
		      				<div>{{ $error }}</div>
		      			@endforeach
		      		</div>
		      	@endif

		      	@if (session('error'))
		      		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		      			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		      			{{ session('error') }}
		      		</div>
		      	@endif

		      	@if (session('success'))
		      		<div class="alert alert-success alert-dismissible fade show" role="alert">
		      			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		      			{{ session('success') }}
		      		</div>
		      	@endif

					<form action="{{ route('auth.login') }}" method="POST" class="login-form">
						@csrf
		      		<div class="form-group">
		      			<input type="email" name="email" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autofocus>
		      			@error('email')
		      				<span class="text-danger small">{{ $message }}</span>
		      			@enderror
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left @error('password') is-invalid @enderror" placeholder="Password" required>
	              @error('password')
	              	<span class="text-danger small">{{ $message }}</span>
	              @enderror
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		{{-- <label class="checkbox-wrap checkbox-primary">Remember Me
								  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
								  <span class="checkmark"></span>
								</label> --}}
							</div>
	            </div>
                {{-- <div class="text-center mt-3">
                    <p class="text-muted small">Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar di sini</a></p>
                </div> --}}
                <div class="login-footer">
                    <small>© 2026 LPPM ISTEK WIDURI</small>
                </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
