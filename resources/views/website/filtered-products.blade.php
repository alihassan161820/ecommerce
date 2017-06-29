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
												<div class="col-md-2">
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
																	<div class="clockdiv clockdiv2" id="clockdiv{{$product->auction->id}}"data-value="{{$product->auction->id}}">
  																		<input type="hidden" class="endtime endtime{{$product->auction->id}}" name="auction-end-time" value="{{$product->auction->EndTime}}">
																		<div>
																			<span class="days days2"></span>
																			<div class="smalltext">Days</div>
																		</div>
																		<div>
																			<span class="hours hours2"></span>
																			<div class="smalltext">Hours</div>
																		</div>
																		<div>
																			<span class="minutes minutes2"></span>
																			<div class="smalltext">Minutes</div>
																		</div>
																		<div>
																			<span class="seconds seconds2"></span>
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
																	<li><a><i class="fa "></i>{{  \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans() }}</a></li>
																	<li><a><i class="fa "></i>{{$product->City}}</a></li>
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


@section('script')
      {!! Html::script('js/counter-update.js') !!}      
            {!! Html::script('js/downcount.js') !!}
@endsection