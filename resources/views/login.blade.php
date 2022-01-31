<!DOCTYPE html>
<html>
<head>
	<title>SignUp/LogIn </title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/login.css">
</head>
<body>  	

		<!-- signUp page-->
		<div class="signup">
				<div class="form">
					<h2>Sign Up</h2>
					<p>Enter your name, email and password to sign up</p>
					<!-- form -->
					<form action="/signUp" method="post">
			
						<h4>Name*</h4>
						<input type="text" name="txt" placeholder="Enter your Name" required="">
					
						<h4>Email*</h4>
						<input type="email" name="email" placeholder="Enter your Email" required="">
						
						<h4>Password*</h4>
						<input type="password" name="pswd" placeholder="Create a Password" required="">	

						<a href=""><button>CREATE AN ACCOUNT</button></a>
						<a href=""><button>SIGN UP WITH GOOGLE</button></a>

						<p>Already have an account?<a href="">Sign in</a></p>
					</form>
				</div>

				<div class="right-section">
						<div>
							<img src="" alt="">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sequi beatae voluptatum. Obcaecati, hic ad?</p>
						</div>
				</div>
		</div>


			<!-- SignIn page -->
		<div class="login">
			<div class="form">
					<h2>Sign In</h2>
					<p>Enter your email and password to sign in</p>
					<!-- form -->
					<form action="/login" method="post">
							
						<h4>Email*</h4>
						<input type="email" name="email" placeholder="Email" required="">	

						<h4>Password*</h4>
						<input type="password" name="pswd" placeholder="Password" required="">	

						<label for="remember">Remember me</label>
						<input type="checkbox" name="remember" id="remember">
						
						<button>SIGN IN</button>

						<p>Don't have an account?<a href="">Sign up</a></p>
					</form>
			</div>
	
			<div class="right-section">
					<div>
							<img src="" alt="">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sequi beatae voluptatum. Obcaecati, hic ad?</p>
					</div>
			</div>
		</div>
</body>
</html>
