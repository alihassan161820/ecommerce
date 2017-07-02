@extends('website.master')
@section('title')
Ads
@endsection
@section('container')
	<div class="container">
			<div class="row">
@include('website.layouts.left-sidebar')									
				<div class="col-sm-9 padding-right" style="margin-top:2px">
					<div class="features_items"><!--features_items-->
							@if(!is_null($product))
							<span><h4 class="search-query">{{$product}}  ({{$products->count()}}) Ads found</></h4></span>
							@endif
			
							@if(!$products->isEmpty())
										@foreach($products as $product)
												<div class="col-md-3">
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
																	<div class="clockdiv clockdiv3" id="clockdiv{{$product->auction->id}}"data-value="{{$product->auction->id}}">
  																		<input type="hidden" class="endtime endtime{{$product->auction->id}}" name="auction-end-time" value="{{$product->auction->EndTime}}">
																		<!--<div>
																			<span class="timecount"></span>
																		</div>-->
																		<div>
																			<span class="days days2"></span>
																		</div>
																		<div>
																			<span class="hours hours2"></span>
																		</div>
																		<div>
																			<span class="minutes minutes2"></span>
																		</div>
																		<div>
																			<span class="seconds seconds2"></span>
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
		<!--{!! Html::script('js/downcount.js') !!}-->
		{!! Html::script('js/downcount2.js') !!}


@endsection
