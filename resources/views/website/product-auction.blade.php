@extends('website.master')
@section('title')
Product-Auction
@endsection
@section('container')
@include('website.layouts.blogArchive')

		<!-- Start Section Product-detail -->
		
		<section class="product-detail">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="product-image">
							<img class="img-responsive" src="images/iphone.jpg"/>
							<img src="images/iphone - Copy.jpg"/>
							<img src="images/iphone - Copy.jpg"/>
							<img src="images/iphone - Copy.jpg"/>
						</div>
					</div>
					
					<div class="col-lg-5">
							<p> Name :</p>
							<p> Number Of Bids:</p>
							<p> Price:</p>
							<p> Unit Sold:</p>
							<p> Bid Increment:</p>
							<p> Quantity Available:</p>
							<p> Condition :</p>
							<p> Close Date:</p>
							<p> Time Left:</p>
							<button class="btn btn-danger "> Buy Now </button>

			</div>
		</section>

		<!-- End Section Product-detail -->
		
		<!-- Start Section Auction Details -->
		
		<section class="Auction-details">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<h1>Bidding History </h1>
						<div class="col-lg-2">
							<p> Name </p>
						</div>
						
						<div class="col-lg-2">
							<p> Cost </p>
						</div>
						
						<div class="col-lg-2">
							<p> Time </p>
						</div>
					</div>
					
					<div class="col-lg-5">
						<h1>live Auction </h1>
						<p> 00:00:40 </p>
						<button class="btn btn-primary"> 50 $ </button>
						<p> Real Price <p>
						<button class="btn btn-danger"> Bid Now </button>
					</div>
					
				</div>
			</div>
		</section>
	
		<!-- End Section Auction Details -->
		
		
		<!-- Start Section Auction Simlar Product -->
			
			<section class="simlar-product">
				<div class=" container">
					<h1 class="text-center"> Simlar Product </h1>
						<div class="row">
							<div class="col-lg-12 text-center">
								<div class="simlar-image">
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
										<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
									<div class="col-lg-3"> 
										<img src="images/iphone - Copy.jpg">
									</div>
								</div>
							</div>
							
						</div>
				</div>
			</section>
		
		<!-- End Section Auction Simlar Product -->

@endsection

@section('script')

          {!! Html::script('js/slick.min.js') !!}
          {!! Html::script('js/waypoints.min.js') !!}
          {!! Html::script('js/modernizr.custom.79639.js') !!}
          {!! Html::script('js/jquery.counterup.min.js') !!}
              <!-- verfied hover effect -->

          {!! Html::script('js/snap.svg-min.js') !!}
          {!! Html::script('js/hovers.js') !!}
              <!-- Photo Swipe Gallery Slider -->

          {!! Html::script('js/photoswipe.min.js') !!}
          {!! Html::script('js/photoswipe-ui-default.min.js') !!}
          {!! Html::script('js/photoswipe-gallery.js') !!}
              <!-- Custom JS -->

          {!! Html::script('js/custom.js') !!}
@endsection
