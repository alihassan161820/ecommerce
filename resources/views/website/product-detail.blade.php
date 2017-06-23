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
                <h2 class="head">Product Details</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
				  <li class="active">Product Details</li>
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
									<td>Item Name : </td>
									<td>   </td>
								  </tr>
							   
								  <tr>
									<td>Unit Sold : </td>
									<td> </td>
								  </tr>
								  
								  <tr>
									<td>Price : </td>
									<td> </td>
								  </tr>
								  
								  <tr>
									<td>Condition : </td>
									<td> </td>
								  </tr>
								  
								  <tr>
									<td>Description : </td>
									<td>
										
									</td>
								  </tr>
								  
								</tbody>
							</table>
							
							<button class="btn btn-danger"> Buy Now </button> 							
						</form>

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

          {!! Html::script('js/custom.js') !!}
@endsection