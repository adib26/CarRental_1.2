<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="register_styles/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register_styles/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register_styles/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register_styles/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="register_styles/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register_styles/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register_styles/css/util.css">
	<link rel="stylesheet" type="text/css" href="register_styles/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="register_styles/images/img-01.jpg" alt="IMG">
				


@if ($errors->any())
    <div class="alert alert-danger" style="margin-top: 15px">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

				<form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
					@csrf
					<span class="login100-form-title">
						Register
					</span>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Username" placeholder="UserName"
						value="{{old('Username')}}">
						<span class="focus-input100"></span>
						
					</div>



					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email"
						value="{{old('email')}}">
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password"
						value="{{old('pass')}}">
						<span class="focus-input100"></span>
						
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="pass_confirmation" placeholder="password confirm" value="{{old('pass_confirmation')}}">
						<span class="focus-input100"></span>
						
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" name="phone" placeholder="phone" value="{{old('phone')}}">
						<span class="focus-input100"></span>
						
					</div>


					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Submit
						</button>
					</div>

					
						<a class="txt2" href="{{url('')}}">
							Go Back
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
				</form>
			</div>
		</div>
	</div>
	
	

	


</body>
</html>