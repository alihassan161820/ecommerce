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

@endsection
@section('container')
	@include('website.layouts.slider')

<section>
	<div class="container">
			<div class="row">
			<br>
			<br>
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
																		<img class="img-responsive item-imgs" src="{{asset('product_image/' . $product->Photos) }}" alt="">
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
																			<span class="timecount"></span>
																		</div>
																		<!--<div>
																			<span class="days"></span>
																			
																		</div>
																		<div>
																			<span class="hours"></span>
																		</div>
																		<div>
																			<span class="minutes"></span>
																		</div>
																		<div>
																			<span class="seconds"></span>
																		</div>-->
																	</div>
																	<div class="sold-out-img" id="clockdiv{{$product->auction->id}}-img">
																	</div>
																	@endif
																	<div class="product-overlay">
																		<div class="overlay-content">
																			@if(!$product->auction)
																			<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																			@endif
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
																	@if($product->auction)																	
																	<li><a href="{{Request::root()}}/auction/{{$product->auction->id}}"><i class="fa "></i>Auction Details</a></li>
																	@else
																	<li><a href="{{Request::root()}}/item/{{$product->id}}"><i class="fa "></i>Product Details</a></li>
																	@endif
																</ul>
															</div>
														</div>
													</div> 
										@endforeach			
								@endif
					</div><!--features_items-->
					</div>
					<div class="col-sm-12" style="margin-top:100px">					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#Electronics" data-toggle="tab">Electronics</a></li>
								<li><a href="#cars" data-toggle="tab">Vehicles</a></li>
								<li><a href="#mobile" data-toggle="tab">Mobile Phones & Accessories</a></li>
<!-- 								<li><a href="#poloshirt" data-toggle="tab">Fashion and beauty</a></li>
 -->							</ul>
						</div>
						<div class="tab-content">
					
							
							<div class="tab-pane fade active in" id="Electronics" >
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
						<!-- 	<div class="tab-pane fade" id="poloshirt" >
										<div class="main-tap-img co-md-4">
										<a href="{{url('/c/Fashion & Beauty/Mens Clothing')}}">
											<img src="images/home/rsz-men.jpg" class=" img-responsive" alt="" />
											<h4>Men clothing</h4>
										</a>
									</div>
										<div class="right-tap-img col-md-3">
										<a href="{{url('/c/Fashion & Beauty/Womens Clothing')}}">
											<img src="images/home/rsz-woman.jpg" class=" img-responsive" alt="" />
											<h4 class="top-img" >Women clothing</h4>
										</a>
											<a href="{{url('/c/Fashion & Beauty/Decoration')}}">
											<img src="images/home/rsz-decoration.jpg" class=" img-responsive" alt="" />
											<h4>Home Decoration</h4>
										</a>
									</div>	
									<div class="left-tap-img col-md-3">
										<a href="{{url('/c/Fashion & Beauty/Jewelry & Gold')}}">
											<img src="images/home/rsz-rings.jpg" class=" img-responsive" alt="" />
											<h4  class="top-img">Jewelry</h4>
										</a>
											<a href="{{url('/c/Fashion & Beauty/Womens Accessories')}}">
											<img src="{{Request::root()}}images/home/rsz-waccess.jpg" class=" img-responsive" alt="" />
											<h4>Women Accessories</h4>
										</a>
									</div>
							</div> -->
						</div>
					</div><!--/category-tab-->
					</div>
			
				</div>
				<div class="row">
					<div class="col-sm-9">
							<div class="pro ">
							<img style="padding-left:35px" src="images/home/rsz_xxx.jpg" alt="" />
						</div>
						</div>
						<div class="col-sm-3">
						<div class="pro ">
							<img src="images/home/x.jpg" alt="" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
										<div class=" col-md-1 logo-div" style="margin-left:45px">
										<a href="{{url('#')}}">
											<img class="logo-imgs" src="images/logo/1.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs" src="images/logo/2.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/3.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/4.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/5.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>	
									<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/6.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/7.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/8.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/9.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/10.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
				
										</a>
									</div>
										<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/11.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/12.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/13.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/14.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/15.jpg" style="max-width: 100%"class=" img-responsive" alt="" />											
										</a>
									</div>
										<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/16.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/17.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/18.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/19.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/20.png" style="max-width: 100%"class=" img-responsive" alt="" />

										</a>
									</div>
										<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/21.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/22.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/36.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/37.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/38.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>
											<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/25.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/26.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/28.jpg" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/29.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/30.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>
											<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/31.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/32.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/33.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/34.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/35.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>
											<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/39.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/40.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/41.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/42.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/43.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>
											<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/44.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/45.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/46.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/47.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/48.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>

											<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/49.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/50.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/51.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/52.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/53.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>
									<div class="col-md-1 logo-div">
										<a href="#">
											<img class="logo-imgs"  src="images/logo/54.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/55.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/56.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/2.png" style="max-width: 100%"class=" img-responsive" alt="" />
											<img class="logo-imgs"  src="images/logo/5.png" style="max-width: 100%"class=" img-responsive" alt="" />
										</a>
									</div>
							</div>
					</div>
				</div>
		@include('website.layouts.bottom-slider')
						</div>
				</div>
			</div>
		</div>

</section>
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
	<!--{!! Html::script('js/downcount2.js') !!}-->
	
@endsection