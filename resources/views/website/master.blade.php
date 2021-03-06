<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
    Alla Tre | 
    @yield('title')</title>
    <title>{{ config('app.name', 'Alla Tre') }}</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}

        <!-- Default Theme css file -->
    <link id="switcher" href="{{ Request::root() }}/css/themes/blue-theme.css" rel="stylesheet">   

       <!-- Slick slider css file -->

    {!! Html::style('css/slick.css') !!}
        <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='{{ Request::root() }}/css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='{{ Request::root() }}/css/default-skin.css'>    

        <!-- Main structure css file -->
     {!! Html::style('css/style.css') !!}
     {!! Html::style('css/main.css') !!}

     {!! Html::style('css/prettyPhoto.css') !!}
    {!! Html::style('css/price-range.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/responsive.css') !!}

    <link rel="icon" href="{{ Request::root() }}/images/06.png">


    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	 <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ Request::root() }}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ Request::root() }}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ Request::root() }}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{ Request::root() }}/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('website.layouts.topHeader')
		@include('website.layouts.middleHeader')
		@include('website.layouts.bottomHeader')
	</header><!--/header-->

	
	<section>
	@yield('container')
	</section>
	
	
	<footer id="footer"><!--Footer-->

	@include('website.layouts.footer')
		


      {!! Html::script('js/jquery.js') !!}
      {!! Html::script('js/bootstrap.min.js') !!}
      {!! Html::script('js/jquery.scrollUp.min.js') !!}
      {!! Html::script('js/price-range.js') !!}
      {!! Html::script('js/jquery.prettyPhoto.js') !!}
      {!! Html::script('js/main.js') !!}

      @yield('script')

      
</body>
</html>