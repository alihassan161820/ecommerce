
						
	<div class="col-sm-3">
					<div class="left-sidebar">
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
								@if(!$categorries->isEmpty())
									@foreach($categorries as $categorry)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#{{$classes[$loop->index]}}">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$categorry->Name}}
										</a>
									</h4>
								</div>
								<div id="{{$classes[$loop->index]}}" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											@foreach($categorry->subcategories as $subcategory)
											<li><a class="subcat-left-sidebar"href="{{ Request::root() }}/c/{{$categorry->Name}}/{{$subcategory->Name}}">• {{$subcategory->Name}} </a></li>
											@endforeach				
										</ul>
									</div>
								</div>
							</div>
							
							@endforeach				
							@endif	
					
						</div><!--/category-products-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{Request::root()}}/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
							<img src="{{Request::root()}}/images/home/rsz_zz.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
					
	