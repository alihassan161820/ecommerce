  <div class="container">
  <div class="row">
  <h2 class="title2 "><a href="{{url('/ti/featuredProds')}}">Featured Ads</a></h2>

    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                    @if(!$featuredProds->isEmpty())
                        @foreach($featuredProds as $product)
                                  <div class="item-slider col-md-1">
                                            <div class="product-image-wrapper"> 
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                            <img onclick="location.href='{{Request::root()}}/item/{{$product->id}}'" class="img-responsive item-imgs" src="{{asset('product_image/' . $product->Photos) }}" alt="">
                                                            <p>{{$product->Name}} </p>	
                                                                <h2>{{$product->Price}} <span style="font-size:18px">EGP</span></h2>
                                                 </div>			
                                                </div>
                                            		<div class="choose">
																<ul class="nav nav-pills nav-justified">
																	<li><a style="font-size:12px"><i class="fa fa-clock-o "></i>{{$product->created_at->diffForHumans()}}</a></li>
																	<li><a><i class="fa fa-map-marker "></i>{{$product->City}}</a></li>
																</ul>
															</div>
															<div class="choose" onclick="location.href='{{Request::root()}}/item/{{$product->id}}'">
																<ul class="nav nav-pills nav-justified">
												
																	<li><a class="external" href="{{Request::root()}}/item/{{$product->id}}"><i class="fa "></i>Product Details</a></li>
																</ul>
															</div>
														</div>
													</div> 
                    @endforeach		  
                    @endif 
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
  </div>
  </div>