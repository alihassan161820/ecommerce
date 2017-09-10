<!-- <!DOCTYPE html>
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
  
  <div class="container wow fadeInRight" data-wow-duration="5s">
    <div class="info">
    <h1>Signin Or Signup</h1>
    </div>
  </div>
  
  <div class="form wow fadeInLeft form-horizontal" data-wow-duration="5s">
  
    <div class="thumbnail">
      <a href="index.html"><img src="images/" alt="logo"/></a>
    </div>
    
    <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
  <div class="input-group">
    <input type="email" name="email" placeholder="Enter your E-mail"/>

  
  </div>



    <input type="password" name="password" placeholder="Password"/>
    <input type="submit" value="Login"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p class="message">Not Registered? <a href="#">Create an account</a></p>
    
    </form>
    
    <form class="register-form" role="form" method="POST" action="{{ route('register') }}">
     {{ csrf_field() }}
   
          <label for="firstname" >First Name</label>
          <input id="firstname" name="firstname" type="text"  />
       
          <label for="lastname"  >Last Name</label>
          <input id="lastname" name="lastname" type="text" />
        
          <label for="email" >Email Address</label>
          <input id="email" name="email" type="text" />
       
          <label for="password" >Password</label>
          <input id="password" name="password" type="password"  />
       
          <label for="password-confirm" >Repeat Password</label>
          <input id="password-confirm" name="password-confirm" type="password"  />

          <label for="gender" >Gender </label>
                              <br>
                              Male<input type="radio"  id="gender" name="gender" value="Male"  required>
                             Female <input type="radio"  id="gender" name="gender" value="Female"  required>
                              @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit"  value="Sign Up">       
        
       
        
        
        
    <p class="message">Already registered? <a href="#">Sign In</a></p>
    
    </form>

  </div>
  
  <script src="js/wow.min.js"></script>
  <script> new WOW().init(); </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/loginform.js"></script>
  

</body>
</html> -->