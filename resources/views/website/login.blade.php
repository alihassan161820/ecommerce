
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Signin | Signup</title>
  
  <link href="css/animates.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/loginform.css">
 

    {!! Html::style('css/bootstrap.min.css') !!}
  
</head>
<body>
<section id="form">
   <div class="container">
      <div class="row">
      <h2> Welcome To Alla-Tre</h2  >
        <div class=" col-md-12 "> 

          <div class="form wow fadeInLeft " style="width: 559px;padding: 49px;"  data-wow-duration="3s">

            
            <form  role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}


             <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         <input type="email" name="email" class="form-control" placeholder="Enter your E-mail"/>  
                           @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
               @endif
                                      
            </div>
              <br>
              <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

             <input type="password" name="password" class="form-control" placeholder="Password"/>
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

              </div>
          <br>
           
                <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Login</button>                          
                        </div>
                    </div>

            <input type="hidden" class="btn btn-danger pull-right" name="_token" value="{{ csrf_token() }}">
            <p class="message">Not Registered? <a href="#">Create an account</a></p>  

            </form>
            
            <form class="register-form" role="form" method="POST" action="{{ route('register') }}">
             {{ csrf_field() }}
           
                 <div class="input-group reg-form">
              
                  <label for="name">User Name</label>
                  <input id="name" class="form-control" name="name" type="text"  />
                
                 </div>
          <div class="input-group reg-form">
                 
                  <label for="email" >Email</label>
                  <input id="email" class="form-control" name="email" type="text"  />

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                 
          </div>
          <div class="input-group reg-form">

                 
                  <label for="password" >Password</label>
                  <input id="password" name="password" class="form-control" type="password" />
                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                
          </div>
         
          <div class="input-group reg-form">
                 
                  <label for="password-confirm" >Repeat Password</label>
                  <input id="password-confirm" name="password-confirm" class="form-control" type="password" />
                  
          </div>

          <div class="input-group reg-form">
                 
                  <label for="gender" >Gender</label>

                <span> <input class="gender-reg" type="radio"  name="gender" value="male"/>Male </span>
                 <span> <input class="gender-reg" type="radio" name="gender"  value="female"/>Female </span>
                
                                      @if ($errors->has('gender'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                
         </div>

               <input type="hidden" name="_token" value="{{ csrf_token() }}">

                   <div class="form-group reg-group">
                        <!-- Button -->
                        <div class="controls controls-reg">
                            <button type="submit" href="#" class="btn btn-primary pull-right">Sign In</button>                          
                        </div>
                    </div>
         
            <p class="message reg-msg">Already registered? <a href="#">Sign In</a></p>
            
            </form>
          </div>
          </div>
          </div>
</div>
  </section>


 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="js/wow.min.js"></script>
  <script> new WOW().init(); </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/loginform.js"></script>


  

</body>
</html>