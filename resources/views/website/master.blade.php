<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Alla Tre | @yield('title') </title>
    <title>{{ config('app.name', 'Alla Tre') }}</title>

      @yield('style')

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

     {!! Html::style('css/main.css') !!}
     {!! Html::style('css/style.css') !!}
     {!! Html::style('css/prettyPhoto.css') !!}
     {!! Html::style('css/price-range.css') !!}
     {!! Html::style('css/animate.css') !!}
     {!! Html::style('css/responsive.css') !!}
     {!! Html::style('css/select2.css') !!}
     
        <!--user dropdown-->
        <link rel="stylesheet" type="text/css" href="/css/css/style.css" />        
        <link rel="stylesheet" type="text/css" href="/css/css/user-drop.css" />

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/css" href="css/css/noJS.css" /></noscript>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="icon" href="{{ Request::root() }}/images/06.png">
      <!-- Google fonts -->
      <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
      <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>   
      <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>
     {!! Html::style('css/cus.css') !!}
    

	  <script>
          window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
     </script>
 
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
      {!! Html::script('js/select2.min.js') !!}
      {!! Html::script('js/bootstrap.min.js') !!}
      {!! Html::script('js/jquery.scrollUp.min.js') !!}
      {!! Html::script('js/price-range.js') !!}
      {!! Html::script('js/jquery.prettyPhoto.js') !!}
      {!! Html::script('js/main.js') !!}
      {!! Html::script('js/add-to-wish.js') !!}


      <script type="text/javascript">
        $(document).ready(function() {
        $("#city").select2({});
        });
        </script>
   
		<script type="text/javascript">

			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});

		</script>

        		<script type="text/javascript">

            $('.User').click(function(){
                
                if( $(".User-Dropdown").hasClass( "U-open" ) ){
                        $('.User-Dropdown').removeClass("U-open");
                }
                else {
                        $('.User-Dropdown').addClass("U-open");
                }
                });

		</script>
        @yield('script')

      
</body>
</html>