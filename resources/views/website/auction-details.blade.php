
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
				  <li><a href="/">Home</a></li>
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
						@foreach(session('item_photos') as $photos)
                            

                            <img class="img-responsive" src="{{asset('product_image/' . $photos->Photos)}}" alt="">
                           
                     @endforeach  
						</div>
					</div>
					
					<div class="col-lg-5">
					<!--  -->
						<form class="Details">
							
							<table class="table table-user-information">
								<tbody>
								  <tr>
									<td>Item Name : {{ $product->name }}</td>
									<td> </td>
								  </tr>
								 <tr>
									<td>Number Of Bid</td>
								 </tr>
								 
								  <tr>
									<td>Start Time : {{ $product->created_at }}</td>
								  </tr>

								  <tr>
									<td>Unit Sold {{ $product->units }}</td>
								
								  </tr>
								  
								  <tr>
									<td>City : {{ $product->city }}</td>
								  </tr>  
								  <tr>
									<td>Condition : {{ $product->condition }}</td>
								  </tr>
								  <tr>
								  @if(session('bidUserID'))

									<td>Last Bid : {{$auction->StartingPrice + $bids->bid_coins}}</td>
									@else
									<td>Last Bid : {{$auction->StartingPrice}}</td>
									 @endif
								  </tr>

								  <tr>
									<td>Description :{{ $product->description }}</td>
								  </tr>
								    <tr>
									<td> Buy Now : {{$auction->BuyNow }}</td>
								  </tr>
								</tbody>
							</table>
                        <div>
							<button class="btn btn-primary"> Buy Now </button>
                        </div>
							
						</form>

					</div>
				</div>
			</div>
		</section>

		                                  <!-- End Section Product-detail -->
		
		<!-- Start Section Live Auction -->
		
		<section class="Auction-details">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<h1 class="text-center">live Auction </h1>
						<br>
							<div  class="text-center">
							Time left :  <span id="days">00 :</span>
				                         <span id="hours">00 :</span>
				                         <span id="minutes">00 :</span>
				                         <span id="seconds">00</span>
                        
                            <div class="col-lg-6 col-md-offset-3">
					    <br>	
						
						<p class="text-center"> Bid  $ or more </p>
						<form method="POST" action="{{route('update')}}" >
							<input type="text" id="bid_coins" class="form-control" name="bid_coins" placeholder="enter your bid price here" required="">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						    <input type="hidden" name="auction_id"  value="{{ $auction->id }}" />

        
							@if(!Auth::check())
                             <input type="submit" value="bid" name="bid">
                            @endif
                            
                            @if(Auth::check())

								@if(!($auction->creator_id == Auth::user()->id))
                            		<input id="bids" type="submit" value="bid" name="bid">
                            
                               @endif 
                            @endif
						</form>
					</div>


					<input type="hidden" id="activate" value="{{ session('activate') }}">
					<input type="hidden" id="user" value="{{ Auth::user()->id }}">
					<input type="hidden" id="comparedUser" value="{{ session('bidUserID') }}">
						<div>

								@if(Auth::check())
								@if(!($auction->creator_id == Auth::user()->id))
									<button  class="btn btn-danger "> Buy Now </button>
									@endif
									<p>{{ $auction->BuyNow }}</p>
									@else
									<button name="almalk" class="btn btn-danger "> Buy Now </button>
									@endif
                        </div>






						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <div class="col-lg-4" style="margin-left: 10px;">
                        	  <button class="btn btn-primary"  id="bidbtn"  onclick="myfunction()"  name="bidbtn" type="submit"> 
						                Bid Now </button>
                        </div>
                        </div>
                        </div>

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
		                               <!-- End Section Similar Product -->


										
			<script src="{{ asset('js/countdown.js')}}"></script>
			<script >
           	countdown('{{ $auction->end_time }}' , ['days' , 'hours' , 'minutes' , 'seconds'] , function(){
				                                 console.log('finished');
				  
				                                    });
		 	</script>
		 	@section('script')


       
@endsection
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


		




