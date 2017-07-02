@extends('website.master')
@section('title')
Wish-List
@endsection
@section('style')
     {!! Html::style('css/editprofilepage.css') !!}
@endsection
@section('container')

	<section id="blogArchive">      
		  <div class="row">
			<div class="col-lg-12 col-md-12">
			  <div class="blog-breadcrumbs-area">
				<div class="container">
				  <div class="blog-breadcrumbs-left">
					<h2 class="head">Wish List</h2>
				  </div>
				  <div class="blog-breadcrumbs-right">
					<ol class="breadcrumb">
					  <li>You are here</li>
					  <li class="active">Wish List</li>
					  <li><a href="index.html">Home</a></li>                  
					  
					</ol>
				  </div>
				</div>
			  </div>
			</div>        
		  </div>      
		</section> 
	
		<div id="wrapper" class="container">

			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<table class="table table-striped">
							<tbody>
								@if(!$favorites->isEmpty())
										@foreach($favorites as $product)
												<tr>
													@if(! empty($product->auction_id))
													<td class="col-md-4"><a href="{{Request::root()}}/auction/{{$product->auction->id}}"><img class="img-responsive  item-imgs fav-img" src="{{asset('product_image/' . $product->Photos) }}" alt=""></a></td>
													@else
													<td class="col-md-4"><a href="{{Request::root()}}/item/{{$product->product_id}}"><img class="img-responsive  item-imgs fav-img" src="{{asset('product_image/' . $product->Photos) }}" alt=""></a></td>
													@endif
													<td>
														<div>
														<p><a style="color:#104e8e" href="#">{{$product->Name}}</a></p>
														<p class='fav-details'><i class="fa fa-map-marker "></i> {{$product->City}}</p>																
														<p class='fav-details'><i class="fa fa-clock-o "></i> {{ \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans()}}</p>																
																														
														</div>
													</td>
													@if($product->Price)
													<td><div class="fav-price favorite-price">{{$product->Price}}<span style="font-size:18px"> EGP</span></div></td>
													@endif	

														@if(! empty($product->auction_id))
																	<input type="hidden" class="bid-amount" name="bid-amount" id="{{$product->auction_id}}">																	
																	@if(! empty($product->Amount))
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																<td><div class="auction-bid fav-price" id="bid-amount-{{$product->auction_id}}">{{$product->Amount}}<span style="font-size:18px"> EGP</span></div></td>
															@endif
															@endif
													<td >
														<form method="post" action="/favorite">
																	{{ csrf_field() }}
																	<input type="hidden" name="id" value="{{$product->product_id}}">
																	<button type="submit" class="btn btn-danger fav-remove">Remove</button>
														</form>
													</td>
													
												</tr>			  			
									@endforeach
									
								@else
								<h2>0 items in your list !!</h2>
								@endif
							</tbody>
						</table>
					
						</div>
            </div>
						</section>
                        </div>
                        
		
@endsection


@section('script')
      {!! Html::script('js/counter-update.js') !!}      
            {!! Html::script('js/downcount.js') !!}
@endsection