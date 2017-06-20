@extends('website.master')
@section('title')
Home
@endsection

@section('container')
	<section id="slider"><!--slider-->
		@include('website.layouts.slider')
	</section><!--/slider-->
	
	<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">				
						<div class="brands_products"><!--brands_products-->
							<h2>Categories</h2>
							<div class="brands-name" id="accordion">
								@if(!$categorries->isEmpty())
									@foreach($categorries as $categorry)
									<div class="panel">
											<li><a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->index +1}}">{{$categorry->Name}}</a></li>
										<div id="collapse{{$loop->index +1}}" class="panel-collapse collapse">
											@foreach($categorry->subcategories as $subcategory)
												<div class="panel-body"><a  href="{{ Request::root() }}/c/{{$categorry->Name}}/{{$subcategory->Name}}">➟ {{$subcategory->Name}}</a></div>
											@endforeach				
										</div>
									</div>
									@endforeach				
									@endif	
							</div>
						</div><!--/brands_products-->

						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
							<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
			
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center ">Latest Ads</h2>
							@if(!$latestProds->isEmpty())
										@foreach($latestProds as $product)
												<div class="col-sm-4">
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
																	<li><a><i class="fa "></i>{{$product->created_at->diffForHumans()}}</a></li>
																	<li><a><i class="fa "></i>{{$product->City}}</a></li>
																</ul>
															</div>
														</div>
													</div>
										@endforeach			
								@endif
					</div><!--features_items-->

						<div class="pro ">
							<img src="images/home/pro5.jpg" alt="" />
						</div>

					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">New-Arrivals</a></li>
								<li><a href="#blazers" data-toggle="tab">Papular</a></li>
								<li><a href="#sunglass" data-toggle="tab">Best-Seller</a></li>
								<li><a href="#kids" data-toggle="tab">Specials</a></li>
								<li><a href="#poloshirt" data-toggle="tab">recommended</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/iphone.jpg" alt="" />
												<h2>$99</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="pro ">
							<img src="images/home/pro5.jpg" alt="" />
						</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Featured Ads</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">							
									@if(!$featuredProds->isEmpty())
										@foreach($featuredProds as $product)
											@if($loop->index<=5)
												<div class="col-sm-2">
													<div class="product-image-wrapper">
														<div class="single-products">
															<div class="productinfo text-center">
																<img class="img-responsive" src="{{Storage::disk('local')->url($product->Photos) }}" alt="">
																<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																<p>{{$product->Name}} </p>
																<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
															</div>			
														</div>
														<br>
													<div class="choose">
														<ul class="nav nav-pills nav-justified">
															<li><a><i class="fa "></i>{{$product->created_at->diffForHumans()}}</a></li>
															<li><a><i class="fa "></i>{{$product->City}}</a></li>
														</ul>
													</div>
													</div>
												</div>	
												@endif					
										@endforeach				
									</div>
								@if(count($featuredProds)<6)
								<div class="item">	
									@foreach($featuredProds as $product)
										@if($loop->index>5 && $loop->index<10)
										<div class="col-sm-2">
												<div class="product-image-wrapper">
													<div class="single-products">
														<div class="productinfo text-center">
																<img class="img-responsive" src="{{Storage::disk('local')->url($product->Photos) }}" alt="">
																<h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
																<p>{{$product->Name}} </p>
																<p>{{$product->created_at->diffForHumans()}}</p>
																<p>{{$product->City}}</p>
															<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
														</div>
													</div>
													<div class="choose">
														<ul class="nav nav-pills nav-justified">
															<li><a><i class="fa "></i>{{$product->created_at->diffForHumans()}}</a></li>
															<li><a><i class="fa "></i>{{$product->City}}</a></li>
														</ul>
													</div>
												</div>
											</div>
										@endif	
									@endforeach					
								</div>
							@endif
						</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>		
						@endif	
						</div>
					</div><!--/recommended_items-->
						</div>
				</div>
			</div>
		</div>
@endsection
