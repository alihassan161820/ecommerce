


<div class="header_top "><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="{{ Request::root() }}"><i class=""></i> Welcome </a></li>
								<li><a href="{{ Request::root() }}/contact"><i class="fa fa-envelope"></i> Contact Us To Day!</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="social-icons pull-right">
			
							<ul class="nav navbar-nav">
                                  @if(Auth::check() && Auth::user()->role_id == 1)
						        <li><a href="/admin"><i class="fa fa-shield"></i> Admin Panel </a></li>
                                @else
								<li><a href="{{url('/favorite')}}"><i class="fa fa-heart-o top-elements"></i> Wish list</a></li>
                                <li><a href="/createitem"><i class="fa top-elements"></i> Place a New Ads </a></li>
                                 @endif
                                @if (Auth::guest())
                                <!--<span id="gh-ug" class="gh-ug-guest">Hi! <a href="https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&amp;ru=" _sp="m570.l1524">Sign in</a>
                                &nbsp;<span id="gh-ug-flex">or <a href="https://reg.ebay.com/reg/PartialReg?ru=" _sp="m570.l2621">register</a></span></span>-->
                                <li class="signin-top"><a href="{{ route('login') }}"><i class="fa "></i>Hi Sign in   |</a></li>
                                <li class="reg-top"><a href="{{ route('register') }}"></i>Register</a></li>
                                @else
                                    <li class="dropdown user-name-top">
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
</div><!--/header_top-->