		<div class="footer-widget">
			<div class="container">
				<div class="row">
						<div class="col-sm-2">
						<div class="single-widget">
								<div class="logo pull-left">
							<a href="/"><img style="width:298px; height:108px " src="{{Request::root()}}/images/home/logo8.png" alt="" /></a>
						</div>	
					</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{Request::root()}}/help">Online Help</a></li>
								<li><a href="{{Request::root()}}/contact">Contact Us</a></li>
			
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>category</h2>
							<ul class="nav nav-pills nav-stacked">
								@if(!$categorries->isEmpty())
								@foreach($categorries as $categorry)
								@if($loop->index<8)
									<li><a href="{{ Request::root() }}/c/{{$categorry->Name}}">{{$categorry->Name}} </a></li>
								@endif
								@endforeach
								@endif
							</ul>
						</div>
					</div>
			
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Us</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="{{Request::root()}}/aboutus">Site Information</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Hi there ..</h2>
							<form method="post" action="subscripe" class="searchform">
								    {{ csrf_field() }}
								<input type="email" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>		
				</div>
			</div>
		</div>
	

		
		