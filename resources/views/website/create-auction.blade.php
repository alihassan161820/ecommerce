@extends('website.master')
@section('title')
Create auction
@endsection
@section('container')

  <section id="blogArchive">      
      <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="blog-breadcrumbs-area">
        <div class="container">
          <div class="blog-breadcrumbs-left">
          <h2 class="head">Create Auction</h2>
          </div>
          <div class="blog-breadcrumbs-right">
          <ol class="breadcrumb">
            <li>You are here</li>
            <li class="active">Create Auction</li>
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
            <form enctype="multipart/form-data"  method="POST" action="{{ route('store') }}">
               {{ csrf_field() }}

              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>City</td>
                    <td>
                    <!--city dropdown start-->
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
                   <!--end of drop down-->
                  
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
                   <!--Subcategory dropdown start-->
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
                  <td> <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}"  required autofocus/> 
                   @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                   @endif
                  </td>
                  </tr>


                 <tr>
                  <td>Starting Price</td>
                  <td> <input type="number" min="0" id="starting_price" class="form-control" name="starting_price" value="{{ old('starting_price') }}" required>  
                               @if ($errors->has('starting_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('starting_price') }}</strong>
                                    </span>
                                @endif
                 </td>
                 </tr>
                 
                 <tr>
                  <td>Buy Now Price</td>
                  <td><input type="number" min="0" id="buy_now_price" class="form-control" name="buy_now_price" 
                              value="{{ old('buy_now_price') }}"  required>
                              @if ($errors->has('buy_now_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('buy_now_price') }}</strong>
                                    </span>
                                @endif
                  </td>
                  </tr>
                  
                  <tr>
                  <td>Target Price</td>
                  <td><input type="number" min="0"  id="target_price" name="target_price" class="form-control" value="{{ old('target_price') }}"  required>
                              @if ($errors->has('target_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('target_price') }}</strong>
                                    </span>
                                @endif
                  </td>
                  </tr>
                  
                  <tr>
                  <td>Number Of Unit</td>
                  <td><input type="number" min="0" id="units" class="form-control" name="units" value="{{ old('units') }}"  required>
                             
                              @if ($errors->has('no_of_unit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_of_unit') }}</strong>
                                    </span>
                                @endif
                 </td>
                  </tr>
                  
                  <tr>
                  <td>Condition</td>
                  <td> 
                    <input type="radio" name="Condition" value="new" checked />New<br/>
                    <input type="radio" name="Condition" value="used"/> Used
                  </td>
                  </tr>
    
                  <tr>
                  <td><label for="end_time" class="control-label">Auction Period <span class="required">*</span>
                              </label></td>
                    <td>
                      <ul class="nav navbar-nav navbar-left" >
                        <select class="per-select" name="period">
                        <option value="{{\Carbon\Carbon::now()->addMinutes(3)}}">3 min</option>
                          <option value="{{\Carbon\Carbon::now()->addMinutes(30)}}">30 min</option>
                          <option value="{{\Carbon\Carbon::now()->addHours(1)}}">1 hour</option>
                          <option value="{{\Carbon\Carbon::now()->addHours(2)}}">2 hour </option>
                          <option value="{{\Carbon\Carbon::now()->addHours(4)}}">4 hour </option>
                          <option value="{{\Carbon\Carbon::now()->addHours(6)}}">6 hour </option>
                          <option value="{{\Carbon\Carbon::now()->addHours(12)}}">12 hour </option>
                          <option value="{{\Carbon\Carbon::now()->addDay(1)}}">24 hour </option>
                        </select> 
                      </ul> 
                        @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                                @endif             
                    </td>
                  </tr>
                
                  <tr>
                  <td>Choose Picture</td>
                  <td><input type="file" name="Photos[]" class="form-control" accept="image/*" multiple /></td>
                  </tr>
                  
                  <tr>
                  <td>Description</td>
                  <td>
                    <textarea row="15" placeholder="What Would You Like To Say " class="form-control"name="description" id="description"  class="wp-form-control wpcf7-textarea" cols="30" rows="10" value="{{ old('description') }}" required></textarea>
                               @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                  </td>
                  </tr>
                  
                </tbody>
              </table>
              <button class="btn btn-primary"/>Create </button>
             
            </form>
          </div>
          </div>
        </div>
          
        </div>
      </div>
    </div>
    </div>
 
 @endsection

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
        url: 'getcategory',
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




