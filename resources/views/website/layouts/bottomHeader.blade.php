		<div class="header-bottom" ><!--header-bottom-->
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
								<li><a href="{{ Request::root() }}/contact">Contact</a></li>
								<li><a href="{{ Request::root() }}/help">About us</a></li>
								<li><a href="{{ Request::root() }}/aboutus">Help</a></li>
							</ul>
						</div>
					
					</div>
					 @if(Auth::check() && Auth::user()->role_id == 1)
                                @else
										<div class="col-md-3">
									<section class="main place-new-ads">
									<div class="wrapper-demo">
										<div id="dd" class="wrapper-dropdown-5" tabindex="1">Place a New Ad
											<ul class="dropdown">
												<li><a href="{{url('/createauction')}}"><i class="fa fa-gavel"></i>Auction</a></li>
												<li><a href="{{url('/createitem')}}"><i class="fa fa-shopping-cart"></i>Fixed Price</a></li>
											</ul>
										</div>
									​</div>
								</section>
				</div>           		
				@endif
            
			
				</div>
			</div>
		</div><!--/header-bottom-->
