@extends('website.master')
@section('title')
Home
@endsection

@section('style')
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="our-service/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="our-service/css/icomoon.css">
	<link rel="stylesheet" href="/css/bottom-slider.css">

	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="our-service/css/simple-line-icons.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="our-service/css/bootstrap.css">
		<link rel="stylesheet" href="our-service/css/style.css">
	<script src="our-service/js/modernizr-2.6.2.min.js"></script>

@endsection
@section('container')
	<div class="container">
			<div class="row">
			<br>
			<br>
				@include('website.layouts.slider')
				@include('website.layouts.about-us')
				@include('website.layouts.left-sidebar')
		
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center "><a href="{{url('/ti/latestProds')}}">Latest Ads</a></h2>
							@if(!$latestProds->isEmpty())
										@foreach($latestProds as $product)
												<div class="col-sm-3">
														<div class="product-image-wrapper">
															<div class="single-products">
																	<div class="productinfo text-center">
																		<img class="img-responsive" src="{{Storage::disk('local')->url($product->Photos) }}" alt="">
																		<p>{{$product->Name}} </p>	
																		@if($product->Price)
																		<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																		@endif										
																	</div>
																	@if($product->auction)
																	<input type="hidden" class="bid-amount" name="bid-amount" id="{{$product->auction->id}}">																	
																	@foreach($product->auction->bids as $bid)
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<h2 class="auction-bid" id="bid-amount-{{$product->auction->id}}">{{$bid->Amount}}</h2>
																	@endforeach
																	<div class="clockdiv" id="clockdiv{{$product->auction->id}}"data-value="{{$product->auction->id}}">
  																		<input type="hidden" class="endtime endtime{{$product->auction->id}}" name="auction-end-time" value="{{$product->auction->EndTime}}">
																		<div>
																			<span class="days"></span>
																			<div class="smalltext">Days</div>
																		</div>
																		<div>
																			<span class="hours"></span>
																			<div class="smalltext">Hours</div>
																		</div>
																		<div>
																			<span class="minutes"></span>
																			<div class="smalltext">Minutes</div>
																		</div>
																		<div>
																			<span class="seconds"></span>
																			<div class="smalltext">Seconds</div>
																		</div>
																	</div>
																	<div class="sold-out-img" id="clockdiv{{$product->auction->id}}-img">
																	</div>
																	@endif
																	<div class="product-overlay">
																		<div class="overlay-content">
																			<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																			<p>{{$product->Name}} </p>
																			<input type="hidden" name="_token" value="{{ csrf_token() }}">
																			   @if(Auth::check())
																					@if($favorites->contains('product_id', $product->id))
																						<a class="btn btn-default add-to-cart add-to-wish"  clicked="true" data-value="{{$product->id}}" id="{{$product->id}}"><i class="fa fa-heart-o"></i>Remove from wish list</a>
																					@else
																						<a class="btn btn-default add-to-cart add-to-wish"  clicked="false" data-value="{{$product->id}}" id="{{$product->id}}"><i class="fa fa-heart-o"></i>Add to wish</a>
																					@endif
																				@else
																					<a class="btn btn-default add-to-cart" href="{{url('/login')}}"><i class="fa fa-heart-o"></i>Add to wish</a>
																				@endif
																		</div>
																	</div>
															</div>
															<br>
															<div class="choose">
																<ul class="nav nav-pills nav-justified">
																	<li><a><i class="fa fa-clock-o "></i>{{$product->created_at->diffForHumans()}}</a></li>
																	<li><a><i class="fa fa-map-marker "></i>{{$product->City}}</a></li>
																</ul>
															</div>
															<div class="choose choose-plus">
																<ul class="nav nav-pills nav-justified">
																	<li><a href="Product Details.html"><i class="fa "></i>Product Details</a></li>
																</ul>
															</div>
														</div>
													</div> 
										@endforeach			
								@endif
					</div><!--features_items-->
					</div>
					<div class="col-sm-12" style="margin-top:20px">					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#catch-deal" data-toggle="tab">Catch a deal</a></li>
								<li><a href="#Electronics" data-toggle="tab">Electronics</a></li>
								<li><a href="#cars" data-toggle="tab">Vehicles</a></li>
								<li><a href="#mobile" data-toggle="tab">Mobile Phones & Accessories</a></li>
								<li><a href="#poloshirt" data-toggle="tab">recommended</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="catch-deal" >
									<div class="main-tap-img co-md-4">
										<a href="{{url('')}}">
											<img src="images/home/rsz_hotauction.jpg" class=" img-responsive" alt="" />
											<h4>Hot Auctions</h4>
										</a>
									</div>
										<div class=" col-md-6">
										<a href="{{url('/createauction')}}">
											<img src="images/home/auc3.jpg" style="max-width: 96%"class=" img-responsive" alt="" />
											<h4 class="" >Create Auction</h4>
										</a>
											<a href="{{url('/createitem')}}">
											<img src="images/home/createfree.jpg" class=" img-responsive" alt="" />
											<h4  class="">Create free Ad</h4>
									</div>	
							
							</div>
							
							<div class="tab-pane fade" id="Electronics" >
									<div class="main-tap-img co-md-4">
										<a href="{{url('/c/Electronics/Laptop Computers')}}">
											<img src="images/home/rsz_laptops.jpg" class=" img-responsive" alt="" />
											<h4>Laptops</h4>
										</a>
									</div>
										<div class="right-tap-img col-md-3">
										<a href="{{url('/c/Electronics/Cameras & Imaging')}}">
											<img src="images/home/rsz_cameras.jpg" class=" img-responsive" alt="" />
											<h4 class="top-img" >Camera</h4>
										</a>
											<a href="{{url('/c/Electronics/Tablets')}}">
											<img src="images/home/rsz_tablets.jpg" class=" img-responsive" alt="" />
											<h4>Tablet</h4>
										</a>
									</div>	
									<div class="left-tap-img col-md-3">
										<a href="{{url('/c/Electronics/Televisions')}}">
											<img src="images/home/rsz_television.jpg" class=" img-responsive" alt="" />
											<h4  class="top-img">Television</h4>
										</a>
											<a href="{{url('/c/Electronics/Video Game Consoles')}}">
											<img src="images/home/rsz_videogame.jpg" class=" img-responsive" alt="" />
											<h4>Video Game</h4>
										</a>
									</div>
							</div>
							<div class="tab-pane fade" id="cars" >
										<div class="main-tap-img co-md-4">
										<a href="{{url('c/Vehicles/Cars')}}">
											<img src="images/home/rsz_1cars.jpg" class=" img-responsive" alt="" />
											<h4>Cars</h4>
										</a>
									</div>
										<div class="right-tap-img col-md-3">
										<a href="{{url('c/Vehicles/Motocycles')}}">
											<img src="images/home/rsz_motor.jpg" class=" img-responsive" alt="" />
											<h4 class="top-img" >Motorcycle</h4>
										</a>
											<a href="{{url('c/Vehicles/Trucks & Buses')}}">
											<img src="images/home/rsz_track.jpg" class=" img-responsive" alt="" />
											<h4>Trucks</h4>
										</a>
									</div>	
									<div class="left-tap-img col-md-3">
										<a href="{{url('c/Vehicles/Other Vehicles')}}">
											<img src="images/home/rsz_bicycle.jpg" class=" img-responsive" alt="" />
											<h4  class="top-img">Other Vehicles</h4>
										</a>
											<a href="{{url('c/Vehicles/Cars Accessories')}}">
											<img src="images/home/rsz_carsacc.jpg" class=" img-responsive" alt="" />
											<h4>Cars Accessories</h4>
										</a>
									</div>
							</div>
							<div class="tab-pane fade" id="mobile" >
								<div class="main-tap-img co-md-3">
										<a href="{{url('/c/Mobile Phones & Accessories/Mobile Phones')}}">
											<img src="images/home/rsz_mob.jpg" class=" img-responsive" alt="" />
											<h4>Mobile Phones</h4>
										</a>
									</div>
									<div class="main-tap-img co-md-3">
										<a href="{{url('/c/Mobile Phones & Accessories/Mobile Accessories')}}">
											<img src="images/home/rsz_acc2.jpg" class=" img-responsive" alt="" />
											<h4>Mobile Accessories</h4>
										</a>
									</div>
							</div>
							<div class="tab-pane fade" id="poloshirt" >
							
							</div>
						</div>
					</div><!--/category-tab-->
					</div>
			
				</div>
				<div class="row">
					<div class="col-sm-9">
							<div class="pro ">
							<img src="images/home/pro5.jpg" alt="" />
						</div>
						</div>
						<div class="col-sm-3">
						<div class="pro ">
							<img src="images/home/x.jpg" alt="" />
						</div>
					</div>
				</div>
		@include('website.layouts.bottom-slider')
						</div>
				</div>
			</div>
		</div>
@endsection

@section('script')

	<script src="our-service/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="our-service/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="our-service/js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="our-service/js/owl.carousel.min.js"></script>
	
	<!-- Main JS (Do not remove) -->
	<script src="our-service/js/main.js"></script>
	<script src="js/bottom-slider.js"></script>
	
    {!! Html::script('js/counter-update.js') !!}      
	{!! Html::script('js/downcount.js') !!}
@endsection