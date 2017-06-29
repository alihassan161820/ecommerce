
@extends('website.master')
@section('title')
Ads
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
                    <td> <input type="text" id="city"  name="city" value="{{ old('city') }}"   required autofocus>
                               @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif 
                   </td>
                  </tr>


                  <tr>
                  <td>Item Name</td>
                  <td> <input type="text" id="name" name="name" value="{{ old('name') }}"  required autofocus/> 
                   @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                   @endif
                  </td>
                  </tr>


                 <tr>
                  <td>Starting Price</td>
                  <td> <input type="number" min="0" id="starting_price" name="starting_price" value="{{ old('starting_price') }}" required>  
                               @if ($errors->has('starting_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('starting_price') }}</strong>
                                    </span>
                                @endif
                 </td>
                 </tr>
                 
                 <tr>
                  <td>Buy Now Price</td>
                  <td><input type="number" min="0" id="buy_now_price" name="buy_now_price" 
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
                  <td><input type="number" min="0"  id="target_price" name="target_price" value="{{ old('target_price') }}"  required>
                              @if ($errors->has('target_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('target_price') }}</strong>
                                    </span>
                                @endif
                  </td>
                  </tr>
                  
                  <tr>
                  <td>Number Of Unit</td>
                  <td><input type="number" min="0" id="units" name="units" value="{{ old('units') }}"  required>
                             
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
                  <td>End Time</td>
                  <td><input type="datetime-local"  id="end_time" name="end_time"  value="{{ old('end_time') }}" required>
                             
                              @if ($errors->has('end_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end_time') }}</strong>
                                    </span>
                                @endif
                  </td>
                  </tr>
                  
                  <tr>
                  <td>Period</td>
                    <td>
                      <ul class="nav navbar-nav navbar-right" name="period">
                        <select class="per-select">
                          <option value="">30 min</option>
                          <option value="">1 hour</option>
                          <option value="">2 hour </option>
                          <option value="">4 hour </option>
                          <option value="">6 hour </option>
                          <option value="">12 hour </option>
                          <option value="">24 hour </option>
                        </select> 
                      </ul>                 
                    </td>
                  </tr>
                
                  <tr>
                  <td>Choose Picture</td>
                  <td><input type="file" name="Photos[]" accept="image/*" multiple /></td>
                  </tr>
                  
                  <tr>
                  <td>Description</td>
                  <td>
                    <textarea row="15" placeholder="What Would You Like To Say " name="description" id="description"  class="wp-form-control wpcf7-textarea" cols="30" rows="10" value="{{ old('description') }}"></textarea>
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























































