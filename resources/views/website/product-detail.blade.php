@extends('website.master')
@section('title')
Product Details
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
							<p> Number Of Bids:</p>
							<p> Unit Sold:</p>
							<p> Bid Increment:</p>
							<p> Quantity Available:</p>
							<p> Condition :</p>
							<p> Close Date:</p>
							<p> Time Left:</p>
					</div>
					
				</div>
				<button class="btnn btn-danger "> Buy Now </button>
			</div>
		</section>
		
		<!-- End Section Product-detail -->
		
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
