
<!DOCTYPE html>
<html>
<head>
	<title>Contributor Form</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/contributor.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
				<form action="/contributor" method="post">
                @csrf
                    <label for="chk" aria-hidden="true">Contributor Form</label>
					<input type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="url" name="url" placeholder="Github Profile " required="">
					<button>Submit</button>
				</form>
			</div>
	</div>
</body>
</html>
