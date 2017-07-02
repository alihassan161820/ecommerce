<!-- @extends('website.master')
@section('title')
Ads
@endsection
@section('container') -->

		<section id="blogArchive">      
		  <div class="row">
			<div class="col-lg-12 col-md-12">
			  <div class="blog-breadcrumbs-area">
				<div class="container">
				  <div class="blog-breadcrumbs-left">
					<h2 class="head">Create Product</h2>
				  </div>
				  <div class="blog-breadcrumbs-right">
					<ol class="breadcrumb">
					  <li>You are here</li>
					  <li class="active">Create Product</li>
					  <li><a href="index.html">Home</a></li>                  
					  
					</ol>
				  </div>
				</div>
			  </div>
			</div>        
		  </div>      
		</section> 
   <!-- Start Container Profile-->
   
	<div class="container">
		  <div class="row">

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
	   
	   
				<div class="panel panel-info">
					<div class="panel-heading">
				</div>
				<div class="panel-body">
				  <div class="row">
					<div class=" col-md-12 col-lg-12 "> 

						<form enctype="multipart/form-data" method="POST" action="{{ route('createitem') }}">
						
						 {{ csrf_field() }}
							<table class="table table-user-information">
								<tbody>

								<tr>
                    <td>City</td>
                    <td>
                            <select name="city" class="form-control input-sm" id="city">
                            @if(!is_null($cities))
                                    <option value="" disabled selected>Select A City</option>
                                    @foreach($cities as $city)
                                            <option value="{{$city}}">{{$city}}</option>
                                    @endforeach
                            @endif
                            </select>           
                               @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif 
                   </td>
                  </tr>
          
                  
                  <!--category dropdown start-->
                  <tr>
                  <td>Category</td>
                  <td> 
                  <select class="form-control input-sm" name="category" id="category">
                  <option value="" disabled selected>Select A Category</option>
                  @foreach($categorries as $category)
                  <option value="{{$category->id}}">{{$category->Name}}</option>
                  @endforeach
                  </select>
        
                  </td>
                  </tr>

                    <tr>
                  <td>Subcategory</td>
                  <td>
                        <select class="form-control input-sm" name="subcategory" id="subcategory">
                            <option value=""></option>
                        </select>

                  </td>
                  </tr>


                  <!--end of drop down-->

								  <tr>
									<td>Item Name</td>
									<td> <input type="text" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"   required autofocus>
                               @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                                 </td>
								  </tr>
							    
								 <tr>
									<td> Price</td>
									<td><input type="number" min="0" id="price"  name="price" class="form-control" value="{{ old('price') }}" required>  
                               @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif</td>
								  </tr>
								  
								  <tr>
									<td>Number Of Unit</td>
									<td><input type="number" min="0" id="units" name="units" class="form-control" value="{{ old('units') }}" required>  
                              @if ($errors->has('no_of_units'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_of_units') }}</strong>
                                    </span>
                                @endif
                                </td>
								</tr>
								  
								  <tr>
									<td >Condition</td>
									<td> 
									  <input type="radio" name="Condition" value="new" /> New<br/>
									  <input type="radio" name="Condition" value="used"/> Used
									</td>
								  </tr>
								  
								
								  <tr>
									<td>Choose Picture</td>
									<td><input type="file" name="Photos[]" class="form-control" accept="image/*" multiple /></td>
								  </tr>
								  
								  <tr>
									<td>Description</td>
									<td>
									<textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="What would you like to say at description"></textarea>
                               @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
									</td>
								  </tr>
								  
								</tbody>
							</table>
							<input type="submit" value="Create"  class="btn btn-primary">
					
						</form>
					</div>
				  </div>
				</div>
					
			  </div>
			</div>
		</div>
    </div>
    
    @section('script')
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var cat=document.getElementById("category");
    cat.onchange = function(e){
      var cat_id = e.target.value;
       $.ajax({
        data: { cat_id: cat_id },
        url: 'getcategoryitem',
        type: 'POST',
        beforeSend: function(request) {
            return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
        },
        success: function(response) {
            obj = JSON.parse(response.success)
            console.log(obj);
            appendDom=document.getElementById('subcategory');
            appendDom.innerHTML ="";
            for (var i=0;i<obj.length;i++)
            {
                appendDom=document.getElementById('subcategory');
                var option = document.createElement("option");
                option.text = obj[i].Name;
                option.value = obj[i].id;
                appendDom.add(option);
            }
    
        }
    });
    }
 </script>
@endsection
	
	<!-- End Container Profile-->
<!-- 
@endsection
 -->







































