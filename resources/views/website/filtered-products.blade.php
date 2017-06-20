@extends('website.master')
@section('title')
Ads
@endsection
@section('container')
	<div class="container">
			<div class="row">
				<div class="col-sm-12 padding-right">
					<div class="features_items"><!--features_items-->
					<br>
					<br>
						<h2 class="title text-center ">Ads</h2>
							@if(!$products->isEmpty())
										@foreach($products as $product)
												<div class="col-md-3">
														<div class="product-image-wrapper">
															<div class="single-products">
																	<div class="productinfo text-center">
																		<img class="img-responsive" src="{{Storage::disk('local')->url($product->Photos) }}" alt="">
																		<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																		<p>{{$product->Name}} </p>
											
																		<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
																	</div>
																	<div class="product-overlay">
																		<div class="overlay-content">
																			<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																			<p>{{$product->Name}} </p>
																			<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
																		</div>
																	</div>
															</div>
															<br>
															<div class="choose">
																<ul class="nav nav-pills nav-justified">
																	<li><a><i class="fa "></i>{{  \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans() }}</a></li>
																	<li><a><i class="fa "></i>{{$product->City}}</a></li>
																</ul>
															</div>
														</div>
													</div>
										@endforeach				
							@elseif ($products->isEmpty())
									<h3>We haven’t found any Ads related to your search. Check spelling or try a more generic search</h3>
							@endif
							<br>
							<br>
							<br>
					</div><!--features_items-->
			</div>
		</div>
@endsection

