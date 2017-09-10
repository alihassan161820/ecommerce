@extends('website.master')
@section('title')
auction details
@endsection
@section('container')


		<div class="container">
			<div class="row">	
@include('website.layouts.left-sidebar')

				<div class="col-sm-9 padding-center">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  		@foreach($item_photos as $photos)
			                      
						                            <img class="img-responsive auction-details" src="{{asset('product_image/' . $photos->Photos)}}" alt="">
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

						
						<!-- form Delete Auction  -->
						</div>
			              <div>
								                     
					         @if(Auth::check())

							  @if(Auth::user()->id == $auction->creator_id)

									 <form method="POST" action="{{ route('deleteauction') }}">
					          				     {{ csrf_field() }}
										 <input  type="hidden" name="auction_id" value="{{ $auction->id }}" />
										<button  class="btn btn-fefault cart delete-btn" name="delete" value="Delete">
									   <i class="fa fa-gavel"></i>
										Delete Auction</button>
										</form>

							
		                            <!-- form Delete Auction -->
		                     </div>
		                      <div>
		                            <!-- form confirm Auction -->
		
	     		             
							     <form method="post" action="/confirm">

							     					{{ csrf_field() }}
							     					
							         <input type="hidden" name="auction_id" value="{{ $auction->id }}">
							         <input type="hidden" name="_token" value="{{ csrf_token() }}">
							         @if($auction->StartingPrice == $bids->Amount)
							         
							     	 <input style ="visibility: hidden;"  class="btn btn-fefault cart delete-btn" type="submit" id="confirmation"  name="confirmation"  value="Not Sold!" >
							     	 @else
                                  
							     	  <input style ="visibility: hidden;" class="btn btn-fefault cart delete-btn"  type="submit" id="confirmation"  name="confirmation"  value="Confirm" >
							     	 @endif

							     </form>

					             
					         @endif
		                                  <!-- form confirm Auction  -->
                             @endif
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
						
								<h2>{{ $product->Name }}</h2>
									<span>
									<span> {{ $bids->Amount }} LE</span>
									<label>Quantity:</label>
									<input type="text"  value="{{ $product->Units }}" disabled/>		
                                 <br>
								</span>

								<p><b>Start Time :</b> {{  \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->toDayDateTimeString() }}</p>
								<p><b>End Time:</b>{{  \Carbon\Carbon::createFromTimeStamp(strtotime($auction->EndTime))->toDayDateTimeString() }}</p>
								<p><b>Condition:</b> {{ $product->condition }} </p>
								<p><b>City :</b> {{ $product->City }}</p>
								<!-- <p><b>Buy Now :</b>{{ $auction->BuyNow }}</p> -->
							
								<span class="timmer-span">
									<span> Time Left : </span><span id="days">00</span><span> : </span>
				                         <span id="hours">00</span><span> : </span>
				                         <span id="minutes">00</span><span> : </span>
				                         <span id="seconds">00</span>
				               </span>
                                 
  
							<div>
							@if(Auth::check())
							@if(!(Auth::user()->id == $auction->creator_id))
							<p></p>
							
							@endif
							<form method="POST" action="/auction/{{$auction->id}}" >
							 {{ csrf_field() }}
							 @if(!Auth::check())
							@if($bids->Amount)
							<input type="text" id="bid_coins" placeholder="Enter your max bid" name="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" min="{{$bids->Amount + 1}}" max="{{number_format((float) $bids->Amount + ($bids->Amount * 0.25), 2)}}" required>
							
							@endif
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						    <input type="hidden" name="auction_id"  value="{{ $auction->id }}" />
         

						    	@endif
                            
                            @if(Auth::check())
                            	
                            	<input type="hidden" id="user" value="{{ Auth::user()->id }}">

								<input type="hidden" id="comparedUser" value="{{ $auction->creator_id }}">
								
								@if(!($auction->creator_id == Auth::user()->id))
								
								@if($bids->Amount)
								
								<span>Last Bid : {{ $bids->Amount}}</span>
								
									<br>
							
							<input type="text" id="bid_coins" placeholder="Enter your max bid" name="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" min="{{$bids->Amount + 1}}" max="{{number_format((float) $bids->Amount + ($bids->Amount * 0.25), 2)}}" required>
							
							@if(session()->has('status'))
							 <div style="color: red;">{{ session('status') }}</div>
							@endif
							
							@endif
							
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							    <input type="hidden" name="auction_id"  value="{{ $auction->id }}" />

									<input type="hidden" id="activate" value="{{ session('activate') }}">

									


                            		<i class="fa fa-gavel"></i><input id="bids" type="submit" class="btn btn-fefault cart" value="Bid Now" name="bid">
                            		<br>
                            		@if ($errors->any())
   							  <div >
       							 <ul>
           						  @foreach ($errors->all() as $error)
             						   <li style="color: red;">{{ $error }}</li>
          						  @endforeach
       							 </ul>
   							 </div>
							@endif
                            
                           	    @endif
                           
                            
                            @endif

						</form>
						@endif
						<input type="hidden" name="auction_id" id="auction_id" value="{{$auction->id}}">

                                   <!-- update value of bid -->
						@if(!Auth::check())
							<form method="POST" action="/auction/{{$auction->id}}" >
							 {{ csrf_field() }}
							@if($bids->Amount)
							<input type="text" id="bid_coins" name="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" min="{{$bids->Amount +  1}}" max="{{number_format((float) $bids->Amount + ($bids->Amount * 0.25), 2)}}" required>
							
                             <i class="fa fa-gavel"></i><input type="submit" id="bids"  class="btn btn-fefault cart" value="bid Now" name="bid">
                             @endif
                            </form>
                            @endif
                            <!-- end update -->

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
								  </div>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					@if(Auth::check())
                    
                    @if(!($auction->StartingPrice == $bids->Amount))

					<form method="post" action="/info">
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="auction_id" value="{{ $auction->id }}">
						<button class="pull-right btn btn-lg btn-danger" type="submit" id="creator-info" style="visibility: hidden;" >click for seller info</button>
						
					</form>




					<form method="post" action="/info">
			
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="auction_id" value="{{ $auction->id }}">
						<button class="pull-right btn btn-lg btn-danger" type="submit" id="winner-info" style="visibility: hidden;" >click for winner info</button>

						
					</form>

					@endif

					@endif
		<div class=" container">
		<div class="recommended_items"><!--recommended_items-->
		<h2 class="title text-center similar-title">Similar Product</h2>
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
												<div class="productinfo text-center ">
													<a href="/item/{{$similarProduct->id}}"><img class="img-responsive item-imgs" align="middle" src="{{Request::root()}}/product_image/{{session($similarProduct->id)}}"></a> 
													<h2>{{$bids->Amount}} LE</h2>
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
				</div>					
				</div>
			</div>
		</div>

	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

					<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
					 <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
					 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
					   
							 <script src="{{ asset('js/countdown.js')}}"></script>
							  <script src="{{ asset('js/ajax-crud.js')}}"></script>
							  <script src="{{ asset('js/reload.js')}}"></script>
								
				          <script type="text/javascript">
				          	countdown('{{ $auction->EndTime }}' , ['days' , 'hours' , 'minutes' , 'seconds'] , function(){
				                                 console.log('finished');
				                                    });


				         var startAmount = {{$auction->StartingPrice}};
				         var endAmount  = {{$bids->Amount}};
                         var con = {{$auction->confirmation}};
                         var user = document.getElementById('user').value;
                         var comparedUser = document.getElementById('comparedUser').value;

                         console.log(user);
                         console.log(comparedUser);
                         console.log(con);
                          console.log(startAmount);
                          console.log(endAmount);

                         if(isend == true){
                         	

                         console.log(user);
                         console.log(comparedUser);

                         if(startAmount == endAmount){
                            console.log('ana hna')
                         	document.getElementById('confirmation').disabled = true;
                         	document.getElementById('confirmation').value = "Not Sold!";
                         }

                         
                         
                         	if(!(user == comparedUser)){
                         		console.log('iam creator');
                         		document.getElementById('creator-info').style.visibility = "visible";
                         	}
                         	else {
                         		document.getElementById('confirmation').style.visibility = "visible";
                         		console.log('iam winner');
                         		document.getElementById('winner-info').style.visibility = "visible";

                         	}

                         	
                          
                         if(con == 1 ){

                         	document.getElementById('confirmation').disabled = true;
                         	document.getElementById('confirmation').value = "Confirmed";

                         }
                         }

                      </script>


       
@endsection



		


