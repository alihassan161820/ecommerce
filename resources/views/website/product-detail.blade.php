@extends('website.master')
@section('title')
Home
@endsection
@section('style')
     {!! Html::style('css/modal.css') !!}
@endsection
@section('container')
 
<head>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
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
				<div class="col-sm-12 padding-center">
					<div class="product-details">         <!--product-details-->
						<div class="col-sm-5">
						    <div id="similar-product" class="carousel slide" data-ride="carousel">
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  		@foreach($item_photos as $photos)
			                      
						                            <img class="img-responsive" src="{{asset('product_image/' . $photos->Photos)}} " align="middle" alt="">
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
						                              <!-- form Delete Auction  -->
			                     <div>
									@if(Auth::check())
											@if($product->seller_id == Auth::user()->id)
												<form method="POST" action="{{ route('deleteitem') }}">
												          				     {{ csrf_field() }}
											          <input type="hidden" name="product_id" value="{{ $product->id }}" />
											          <button   class="btn btn-fefault cart delete-btn" name="delete" value="Delete">
															   <i class="fa fa-gavel"></i>
																Delete Product</button>
												</form>
											@endif	
										 @endif	
								</div>
		                                                  <!-- form Delete Auction -->

		                        <div>
		                                             
                            		
						</div>

						<div class="col-sm-7">
												
				<div class="product-information">


						                                 	<!--/product-information-->

								<h2>{{ $product->Name }}</h2>
								<span>
									<span> {{$product->Price}} LE</span>
									<label>Quantity:</label>
									<input type="text"  value="{{ $product->Units }}" disabled/>
									
												@if(Auth::check())
													@if(!($product->seller_id == Auth::user()->id))
														


														<button id="myBtn" class="btn btn-fefault cart" data-toggle="modal" data-target="#basicModal"> 
									<i class="fa fa-shopping-cart"></i>
									Buy Now </button>
											

											<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
											  <div class="modal-dialog">
											    <div class="modal-content">
											      <div class="modal-header">
											        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											        <h1 class="modal-title" id="myModalLabel"> Seller Information </h1>
											      </div>
											      <div class="modal-body">
											        <label class="la"> Seller's Name:</label><h3>{{$seller->name}}</h3>
											         <label class="la">Seller's Phone Number:</label><h3>{{$seller->phone}}</h3>
											         <label class="la">Seller's Name:</label><h3>{{$seller->email}}</h3>
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											    
											      </div>
											    </div>
											  </div>
											</div>




													@endif
													@endif
													@if(!Auth::check())
														<button  class="btn btn-fefault cart">
														<i class="fa fa-shopping-cart"></i>
													 	Buy Now </button>	
												@endif						
                                 <br>
								</span>
								<p><b>Added	at :</b>  {{ date('F d, Y', strtotime($product->created_at)) }}</p>
								<p><b>Condition:</b> {{ $product->condition }} </p>
								<p><b>City :</b> {{ $product->City }}</p>
								<p><b>Price :</b>{{ $product->Price }}</p>
								<hr>
									<div class="col-sm-12">
										<span>
										<span style="padding:0px; margin: 0px">
										<i class="fa fa-user"></i>
										Description
                                        </span>
                                        </span>
                                        <p>{{ $product->Description }}</p>
								  </div>
								


								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					<div class=" container">
		<div class="recommended_items"><!--recommended_items-->
		<h2 class="title text-center">Similar Product</h2>
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="simlar-image">
                  <div class="col-lg-3 ">
				  <div class="row">
				     @foreach($similarProducts as $similarProduct) 
				     @if($similarProduct->id != $product->id)
					 				<div class="col-sm-6">
											<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="/item/{{$similarProduct->id}}"><img class="img-responsive item-imgs" align="middle" src="{{Request::root()}}/product_image/{{session($similarProduct->id)}}"></a> 
													<h2>{{$similarProduct->Price}} LE</h2>
													<p>{{$similarProduct->Name}}</p>
													<form method="POST" action="/auction/{{$similarProduct->id}}">
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product Details</button>
													</form>
												</div>
											</div>
										</div>
										</div>
										@endif
					  @endforeach  
				  </div>
               
			</div>			
          </div>
                 
        </div>
      </div>
              
   </div>
 </div>
					</div>
					</div>
					</div>

		
	</section>
  
    <script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


       
@endsection

