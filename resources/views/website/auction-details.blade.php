@extends('website.master')
@section('title')
Home
@endsection
@section('container')
 <section id="blogArchive">      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="blog-breadcrumbs-area">
            <div class="container">
              <div class="blog-breadcrumbs-left">
                <h2 class="head">Auction Details</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>                  
                  <li class="active">Auction Details</li>
				  <li><a href="index.html">Home</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section> 
	
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
						<form class="Details">
							
							<table class="table table-user-information">
								<tbody>
								  <tr>
									<td>Item Name</td>
									<td> </td>
								  </tr>
							   
								 <tr>
									<td>Number Of Bid</td>
									<td> </td>
								 </tr>
								 
								  <tr>
									<td>Start Time</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>Close Time</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>Unit Sold</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>Country</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>City</td>
									<td> </td>
								  </tr>
								  
								  <tr>
									<td>Phone Number</td>
									<td> </td>
								  </tr>
								  
								  <tr>
									<td>Condition</td>
									<td> </td>
								  </tr>
								  
								  <tr>
									<td>Time left</td>
									<td></td>
								  </tr>
								  
								  <tr>
									<td>Description</td>
									<td></td>
								  </tr>
								  
								</tbody>
							</table>
							
							<button class="btn btn-danger"> Buy Now </button> 
							<p class="text-center"> 500.000 </p>
							
						</form>

					</div>
				</div>
			</div>
		</section>

		<!-- End Section Product-detail -->
		
		<!-- Start Section Auction Details -->
		
		<section class="Auction-details">
			<div class="container">
				<div class="row">
					
					
					<div class="col-lg-5">
						<h1 class="text-center">live Auction </h1>
							<div id="timer1">
							<!--  <span id="hours"></span>
							<span id="hours"></span> :-->
							<span id="minutes"></span> 
							<span id=""></span> :
							<span id="seconds"></span>
							</div>
						<button class="btn btn-primary"> 50 $ </button>
						<p class="text-center"> Real Price </p>
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
					@endsection

@section('script')

          {!! Html::script('js/slick.min.js') !!}
          {!! Html::script('js/modernizr.custom.79639.js') !!}
          
          {!! Html::script('js/waypoints.min.js') !!}
          {!! Html::script('js/jquery.counterup.min.js') !!}
              <!-- verfied hover effect -->

          {!! Html::script('js/snap.svg-min.js') !!}
          {!! Html::script('js/hovers.js') !!}
          

          {!! Html::script('js/photoswipe.min.js') !!}
          {!! Html::script('js/photoswipe-ui-default.min.js') !!}
          {!! Html::script('js/photoswipe-gallery.js') !!}

              <!-- Custom JS -->

@endsection