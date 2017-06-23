<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Signin Or Signup</title>
  
  <link href="css/animates.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

	  <link rel="stylesheet" href="css/loginform.css">

  
</head>

<body>
  
	<div class="container wow fadeInDown" data-wow-duration="5s">
	  <div class="info">
		<h1>Signin Or Signup</h1>
	  </div>
	</div>
	
	<div class="form wow fadeInLeft" data-wow-duration="5s">
	
		<a href="index.html"><img src="images/iphone.jpg" alt="logo"/></a>
		
	  <form class="login-form" method="">
	  
		<input type="text" placeholder="username"/>
		<input type="password" placeholder="password"/>
		<button>Login</button>
		<p class="message">Not Registered? <a href="#">Create an account</a></p>
		
	  </form>
	  
	  <form class="register-form" method="">
	  
		<input type="text" placeholder="First name"/>
		<input type="text" placeholder="Last name"/>
		<input type="email" placeholder="email address"/>
		<input type="password" placeholder="password"/>
		<input type="password" placeholder="Repeat password"/>
		<input type="text" placeholder="Date Of Birth"/>
		
		<button>Create</button>
		<p class="message">Already registered? <a href="#">Sign In</a></p>
		
	  </form>

	</div>


      {!! Html::script('js/wow.min.js') !!}
			<script> new WOW().init(); </script>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      {!! Html::script('js/loginform.js') !!}
	
	

</body>
</html>
