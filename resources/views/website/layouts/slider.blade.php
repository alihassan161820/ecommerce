		<section class="main-search container">
			<div class="row" style="padding-bottom:9%">		
			<div class="col-sm-12">
				<div class="search-content">
						<div class="search-title">
							<h1 style="font-size:4em">Alla tre changes the way you shop</h1>
							<h2 style="color:white">Buy and Sell Whatever Your Want?</h2>
							@if(!$latestProds->isEmpty())
							<p>Search in <strong>{{$productcount}}</strong> new ads and <strong>{{$auctioncount}}</strong> auctions . </p>
							@endif
							<p>Alla tre  offers online auctions, allowing you to buy products in a playful and innovative way while saving money
							.To know how you can participate to our bid <br> please consult our <a href="{{Request::root()}}/help">Help</a> section

							</p>


							<div class="main-a">

								<a class="create-auc-btn" href="{{Request::root()}}/createauction">Create Auction</a>
								<a class="create-free-btn" href="{{Request::root()}}/ti/hotauctions">Hot Auctions</a>

							
							</div>
			
						</div>			

				</div>
							
				</div>
		</div>
		</section>