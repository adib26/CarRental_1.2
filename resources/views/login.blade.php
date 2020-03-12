<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="login_design/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_design/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_design/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div>
                <img src="login_design/images/mer.jpg" alt="IMG" width="400px" height="300px" style="border-radius: 20px">
            </div>



            <form class="login100-form validate-form" method="post" action="{{ url('checklogin') }}">

                <!--- Very Important to Handling Error---->  {{ csrf_field() }}

					<span class="login100-form-title">
						Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" >
                        Login
                    </button>
                </div>
                <br>
                <!---------------Handling Error-------------------->
                <div class="wrap-input100">
                    @if(isset(Auth::user()->email))
                        <script>window.location="/main/successlogin";</script>
                    @endif


                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif


                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>

<a  href="{{ route('register') }}" class="txt2" >
                        Create New Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                    <br><br>

                    <a class="txt2" href="{{ route('home') }}">
                            Home
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        </a>

                <div class="text-center p-t-136" style="margin-bottom: 20px">
                    
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="login_design/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="login_design/vendor/bootstrap/js/popper.js"></script>
<script src="login_design/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="login_design/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="login_design/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="login_design/js/main.js"></script>

</body>
</html>
