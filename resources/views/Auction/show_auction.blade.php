@extends('layouts.master')

@section('content')

	
							<input type="text" id="bid_coins" name="bid_coins" >
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button id="bidbtn"  onclick="myfunction()"  name="bid_now" type="submit"></button>	
							<p> Bid   $ or more </p>
						@foreach($tmp as $key=>$v)
							<h1>{{$v}}</h1>
						@endforeach


				<script >
					function myfunction(){
							var bidValue =document.getElementById('bid_coins').value;
						 console.log(bidValue);
						}	

                  
						var x = {{$tmp}};
						x.forEach(function(product, index) {
 							 console.log(String(product));
						});

				
				</script>
						
@endsection

