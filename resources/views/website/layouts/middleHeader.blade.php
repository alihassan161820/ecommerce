<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/"><img style="width:418px; height:107px " src="{{Request::root()}}/images/home/logo8.png" alt="" /></a>
						</div>

					</div>
				

                <script src="{{ asset('js/app.js') }}"></script>
                                        <div class=" col-sm-5 seach-box">
                                                <form method="post" action="/" class="form-inline" >
                                                {{ csrf_field() }}
                                                <input name="product" class="span3 search-box-input" type="text"  placeholder="Keywords: Car, Mobile, Laptop" >
                                                <select name="city" class="col-sm-4" id="city">
                                                @if(!is_null($cities))
                                                        <option value="" disabled selected>Select A City</option>
                                                        @foreach($cities as $city)
                                                                <option value="{{$city}}">{{$city}}</option>
                                                        @endforeach
                                                @endif
                                                </select>						
                                                <input type="submit" value="search" class="btn btn-info search-btn"></input>					
                                                </form>
                                        </div>
				</div>
			</div>
		</div><!--/header-middle-->

<!---->