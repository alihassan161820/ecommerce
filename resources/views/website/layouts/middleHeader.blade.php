<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img style="width:50%" src="{{Request::root()}}/images/home/logo.png" alt="" /></a>
						</div>

					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="{{url('/favorite')}}"><i class="fa fa-heart-o"></i> Favorites</a></li>


                                  @if(Auth::check() && Auth::user()->role_id == 1)
						        		<li><a href="/admin"><i class="fa fa-shield"></i> Admin Panel </a></li>
                                 @endif

                                    <li><a href="/createitem"><i class="fa "></i> Place a New Ads </a></li>


                            @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                            @endif

   
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->


    <script src="{{ asset('js/app.js') }}"></script>
