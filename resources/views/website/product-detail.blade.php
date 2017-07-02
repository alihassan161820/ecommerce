@extends('website.master')
@section('title')
Home
@endsection
@section('container')
 

<head>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>

	<section>
		<div class="container">
			<div class="row">
			<div class="col-sm-3">
			<div class="left-sidebar">
						<h2>ADS</h2>
			<div class="shipping text-center"><!--shipping-->
							<img src="{{ asset('images/home/shipping.jpg') }}" alt="" />
			</div><!--/shipping-->


			</div>
			</div>	
				<div class="col-sm-9 padding-center">
					<div class="product-details"><!--product-details-->


						<div class="col-sm-5">
							<div class="view-product">
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  		@foreach($item_photos as $photos)
			                      
						                            <img class="img-responsive" src="{{asset('product_image/' . $photos->Photos)}}" alt="">
						                          @endforeach 
									 </div>

							     </div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2>{{ $product->Name }}</h2>
								<p>Web ID: 1089772</p>
							
							
								<span>
									<span> {{$product->Price}} LE</span>
									<label>Quantity:</label>
									<input type="text"  value="{{ $product->Units }}" disabled/>
									
									@if(Auth::check())
									@if(!($product->seller_id == Auth::user()->id))
									<button  class="btn btn-fefault cart"> 
									<i class="fa fa-shopping-cart"></i>
									Buy Now </button>
									@endif
									@endif
									@if(!Auth::check())
									<button  class="btn btn-fefault cart">
									<i class="fa fa-shopping-cart"></i>
									 Buy Now </button>	
									@endif						
                                 <br>
		                                  <!-- form Delete Auction  -->
					         @if(Auth::check())
						@if($product->seller_id == Auth::user()->id)
						<form method="POST" action="{{ route('deleteitem') }}">
						          				     {{ csrf_field() }}
					   <input type="hidden" name="product_id" value="{{ $product->id }}" />
					<button  class="btn btn-fefault cart" name="delete" value="Delete">
									   <i class="fa fa-gavel"></i>
										Delete</button>
										</form>


			               </form>
							
						@endif	
						@endif	
		                            <!-- form Delete Auction -->

								</span>
								<p><b>Product ago :</b> {{ $product->created_at }}</p>
								<p><b>Condition:</b> {{ $product->condition }} </p>
								<p><b>City :</b> {{ $product->City }}</p>
								<p><b>Price :</b>{{ $product->Price }}</p>
								


								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
		
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>

										<li ><a href=""><i class="fa fa-user"></i><span>
										<span>Description

                                        </span>
                                        </span>
										</a></li>
									</ul>
									<p>{{ $product->Description }}</p>
									
								
								</div>
							</div>

                         <br>
                         <br>
						<!--<section class="simlar-product">
				        <div class=" container">
				            <div class="row">
				              <div class="col-lg-12 text-center">
				               <h1 class="text-center"> Simlar Product </h1>
				                <div class="simlar-image">
				                  <div class="col-lg-3">

				                  @foreach($similarProducts as $similarProduct) 
				                   <a href="/item/{{$similarProduct->id}}"><img src="public/product_image/{{session($similarProduct->id)}}"></a> 
				   

									  @endforeach  
									
                  </div>
                 
                </div>
              </div>
              
            </div>
        </div>
      </section>-->
					
					
				</div>
			</div>
		</div>

	</section>
	
	
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


       
@endsection

