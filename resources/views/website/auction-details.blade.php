@extends('website.master')
@section('title')
Home
@endsection
@section('container')
 

<head>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
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
				<div class="col-sm-11 padding-center">
					<div class="product-details"><!--product-details-->


						<div class="col-sm-5">
							<div class="view-product">
								
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  		@foreach($item_photos as $photos)
			                      
						                            <img class="img-responsive" style="margin-left: 19%" src="{{asset('product_image/' . $photos->Photos)}}" alt="">
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
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h1>{{ $product->Name }}</h1>
							
								<span>
									<span> 
									Last Bid :
                                 @if($bids)
								</b> {{$bids->Amount}} LE</p>
								 @else
                              {{ $auction->StartingPrice }}
                              <input type="hidden" id="check" value="false">
                              @endif
									</span>
									<br>
									<span>
										<label>Quantity:</label>
									<input type="text"  value="{{ $product->Units }}" disabled/>

									</span>
									<br>

		                                  <!-- form Delete Auction  -->
					         @if(Auth::check())

							  @if(Auth::user()->id == $auction->creator_id)

									 <form method="POST" action="{{ route('deleteauction') }}">
					          				     {{ csrf_field() }}
										 <input type="hidden" name="auction_id" value="{{ $auction->id }}" />
										<button  class="btn btn-fefault cart" name="delete" value="Delete">
									   <i class="fa fa-gavel"></i>
										Delete</button>
										</form>

							 @endif
		                            <!-- form Delete Auction -->
		                            <!-- form confirm Auction -->
		                            <br>
		 
	     		             @if(Auth::user()->id == $auction->creator_id)
							     <form method="post" action="/confirm">

							     					{{ csrf_field() }}
							     					
							         <input type="hidden" name="auction_id" value="{{ $auction->id }}">
							         <input type="hidden" name="_token" value="{{ csrf_token() }}">
							         @if($auction->StartingPrice == $bids->Amount)
							     	 <input style ="width:100px ;visibility: hidden;"  type="submit" id="confirmation"  name="confirmation"  value="Confirm" >
							     	 @else
							     	  <input style ="visibility: hidden;"  type="submit" id="confirmation"  name="confirmation"  value="Confirm" >
							     	 @endif

							     </form>

					             
					         @endif
		                                  <!-- form confirm Auction  -->
                             @endif
								</span>
								<p><b>Start Time :</b> {{  \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->toDayDateTimeString() }}</p>
								<p><b>Close Date:</b> {{  \Carbon\Carbon::createFromTimeStamp(strtotime($auction->EndTime))->toDayDateTimeString() }}</p>
								<p><b>Condition:</b> {{ $product->condition }} </p>
								<p><b>City :</b> {{ $product->City }}</p>
								<p><b>Buy Now :</b>{{ $auction->BuyNow }}</p>
								<!--<span>
									<span> Time Left : </span><span id="days">00 :</span>
				                         <span id="hours">00 :</span>
				                         <span id="minutes">00 :</span>
				                         <span id="seconds">00</span></span>
                                 </span>-->
  
								 <!--counter-->
								 	<div class="clockdiv clockdiv4" id="clockdiv{{$product->auction->id}}"data-value="{{$product->auction->id}}">
											<input type="hidden" class="endtime endtime{{$product->auction->id}}" name="auction-end-time" value="{{$product->auction->EndTime}}">
											<!--<div>
												<span class="timecount"></span>
											</div>-->
												<span style="color:#104e8e; font-size:1.9em">Time left = </span>
											<div>
												<span class="days"></span>  
												
											</div>
											 <span style="color:#104e8e; font-size:1.9em">:</span>
											<div>
												<span class="hours"></span>
											</div>
											  <span style="color:#104e8e; font-size:1.9em">:</span>
											<div>
												<span class="minutes"></span> 
											</div>
											 <span style="color:#104e8e; font-size:1.9em" >:</span>
											<div>
												<span class="seconds"></span>
											</div>
										</div>
										<div class="sold-out-img" id="clockdiv{{$product->auction->id}}-img">
								</div>


								 <!--endcounter-->
							<div >
							@if(Auth::check())
							@if(!(Auth::user()->id == $auction->creator_id))
							<p></p>
							@if ($errors->any())
   							 <div >
       							 <ul>
           						  @foreach ($errors->all() as $error)
             						   <li>{{ $error }}</li>
          						  @endforeach
       							 </ul>
   							 </div>
							@endif
							@endif
						
							<form  method="POST" action="{{route('update')}}" >
							 {{ csrf_field() }}
							 @if(!Auth::check())
							@if($bids->Amount)
							<input class="form-control" type="text" id="bid_coins" placeholder="Enter your max bid" name="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" min="{{$bids->Amount + 0.25}}" max="{{number_format((float) $bids->Amount + ($bids->Amount * 0.2), 2)}}" required>
							@else
							<input type="text" class="form-control col-sm-2"  placeholder="Enter your max bid" id="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" name="bid_coins" min="{{$auction->StartingPrice + 0.25}}" max="{{number_format((float) $bids->Amount + ($auction->StartingPrice * 0.2), 2)}}" required>
							@endif
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						    <input type="hidden" name="auction_id"  value="{{ $auction->id }}" />
         

						    	@endif
                            
                            @if(Auth::check())

								@if(!($auction->creator_id == Auth::user()->id))
								@if($bids->Amount)
							<input type="text" class="form-control col-sm-2"  id="bid_coins" placeholder="Enter your max bid" name="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" min="{{$bids->Amount + 0.25}}" max="{{number_format((float) $bids->Amount + ($bids->Amount * 0.2), 2)}}" required>
							@else
							<input type="text" class="form-control col-sm-2"  placeholder="Enter your max bid" id="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" name="bid_coins" min="{{$auction->StartingPrice + 0.25}}" max="{{number_format((float) $bids->Amount + ($auction->StartingPrice * 0.2), 2)}}" required>
							@endif
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						    <input type="hidden" name="auction_id"  value="{{ $auction->id }}" />

									<input type="hidden" id="activate" value="{{ session('activate') }}">

									<input type="hidden" id="user" value="{{ Auth::user()->id }}">

									<input type="hidden" id="comparedUser" value="{{ session('users_id') }}">

                            		<input id="bids" type="submit" class="btn btn-fefault cart" value="Bid Now" name="bid">
                            
                           	    @endif
                           
                            
                            @endif

						</form>
						@endif
						</div>

						<div>                                   <!-- update value of bid -->
						@if(!Auth::check())
							<form method="POST" action="{{route('update')}}" >
							 {{ csrf_field() }}
							@if($bids->Amount)
							<input class="form-control col-sm-2"  type="text" id="bid_coins" name="bid_coins" pattern="[0-9]+([\.,][0-9]+)?" min="{{$bids->Amount + 0.25}}" max="{{number_format((float) $bids->Amount + ($bids->Amount * 0.2), 2)}}" required>
							
                             <input type="submit" class="btn btn-primary" value="bid" name="bid">
                             @endif
                            </form>
                            @endif
                            <!-- end update -->
						</div>

								<div class="col-sm-12">
									<ul>

										<h2>Description

                                        </h2>
									</ul>
									<p>{{ $product->Description }}</p>
									
								
								</div>
								
							</div><!--/product-information-->
							
						</div>
					</div><!--/product-details-->
				
			</div>
			
				</div>
				<div>


						<!-- Start similar Product-detail -->
		 <!--<section class="simlar-product">
        <div class=" container">
          <h1 class="text-center"> Simlar Product </h1>
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="simlar-image">
                  <div class="col-lg-3">

				  <div class="row">
				     @foreach($similarProducts as $similarProduct) 
					 				<div class="col-sm-6">
											<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<a href="/item/{{$similarProduct->id}}"><img class="img-responsive item-imgs" src="{{Request::root()}}/product_image/{{session($similarProduct->id)}}"></a> 
													<h2>{{$bids->Amount}} LE</h2>
													<p>{{$similarProduct->Name}}</p>
													<form method="POST" action="/auction/{{$similarProduct->id}}">
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Product Details</button>
													</form>
												</div>
											</div>
										</div>
										</div>
					  @endforeach  
				  </div>
               
									
                  </div>
                 
                </div>
              </div>
              
            </div>
        </div>
      </section> -->
					
					
				</div>
			</div>
		</div>

	</section>
	
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="{{ asset('js/downcount2.js')}}"></script>
	<script src="{{ asset('js/ajax-crud.js')}}"></script>
	<script src="{{ asset('js/reload.js')}}"></script>
				
				          <script type="text/javascript">
				          	countdown('{{ $auction->EndTime }}' , ['days' , 'hours' , 'minutes' , 'seconds'] , function(){
				                                 console.log('finished');
				                                    });


				         var startAmount = {{$auction->StartingPrice}};
				         var endAmount  = {{$bids->Amount}};
                         var con = {{$auction->confirmation}};
                          console.log(startAmount);
                          if(startAmount == endAmount){

                         	document.getElementById('confirmation').disabled = true;
                         	document.getElementById('confirmation').value = "Not Sold!";
                         }
                         if(con == 1 ){

                         	document.getElementById('confirmation').disabled = true;
                         	document.getElementById('confirmation').value = "Confirmed";

                         }

                      </script>
</body>


       
@endsection


<!-- 				                
//   var str = infovalue;
//  var res = str.split(",");
//  var aucid = res[1];
//  var userid = res[2];
//  var bidvalue = res[3];  
  
 

 
// //   console.log(aucid);
// //   console.log(userid);
// //   console.log(bidvalue);
// //   var fruits = [];
  
// // fruits.push(new Array([aucid ,userid , bidvalue]));
// // for (var i = 0; i < fruits.length; i++) {
// //                 var element = fruits[i];
// //        for (var h = 0; h < fruits[i].length; h++) {
// //            var lastbid = 3;
// //         //    var lastbid= fruits[i][h];   
// //         //    console.log(lastbid);
// //        }
// //     // console.log(element);
    
// // }
// // console.log(fruits);


   bidlimit(bidb); -->


		


