		<div class="header-bottom" style="margin-bottom:45px"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
  	
						<div class="mainmenu pull-left ">
						
					<ul class="nav navbar-nav collapse navbar-collapse">
								<li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
								<ul role="menu" class="sub-menu">
								@if(!$categorries->isEmpty())
								@foreach($categorries as $categorry)
									<li><a href="{{ Request::root() }}/c/{{$categorry->Name}}">{{$categorry->Name}} </a></li>
								@endforeach
								@endif
								</ul>
								</li>
								</li>
								<li><a href="{{ Request::root() }}" class="">Home</a></li>
								<!--<li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="Products.html">Products</a></li>
										<li><a href="Details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> -->
					
								
								<li><a href="{{ Request::root() }}/contact">Contact</a></li>
								<li><a href="{{ Request::root() }}/help">Help</a></li>
							</ul>
						</div>
					</div>
	
				</div>
			</div>
		</div><!--/header-bottom-->
