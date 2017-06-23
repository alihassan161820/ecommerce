@extends('website.master')
@section('title')
Ads
@endsection
@section('container')

    <h4 class="modal-title" id="myModalLabel">Item  Description</h4>
    <div class="modal-body">
    <div class="appointment-area">
    

<form class="appointment-form"  enctype="multipart/form-data" role="form" method="POST" action="{{ route('createitem') }}">
    {{ csrf_field() }}
        <div class="row">
        <div class="col-md-6 col-sm-6">
            <label for="Name" class="control-label"> Name <span class="required">*</span>
            </label>
            <input id="Name" type="text"  name="Name" value="{{ old('Name') }}"  class="wp-form-control wpcf7-text" placeholder="Your Item's name" required autofocus>
            @if ($errors->has('Name'))
                <span class="help-block">
                    <strong>{{ $errors->first('Name') }}</strong>
                </span>
            @endif
        </div>
        </div>
<div class="modal-body">
    <div class="appointment-area">
    


        <div class="row">
        
        <div class="col-md-6 col-sm-6">
            <label for="Price" class="control-label">Price <span class="required">*</span>
            </label>
            <input type="text" id="Price"  class="wp-form-control wpcf7-email" name="Price" placeholder="Put yourPrice" value="{{ old('Price') }}" required>  
            @if ($errors->has('Price'))
                <span class="help-block">
                    <strong>{{ $errors->first('Price') }}</strong>
                </span>
            @endif
        </div>
        </div>
        
        
        <div class="row">
        <div class="col-md-6 col-sm-6">
            <label for="Units" class="control-label">Number of units <span class="required">*</span>
            </label>
            <input type="text" class="wp-form-control wpcf7-text" id="Units" name="Units" placeholder="Number of units" required>
            @if ($errors->has('Units'))
                <span class="help-block">
                    <strong>{{ $errors->first('Units') }}</strong>
                </span>
            @endif
        </div>
            
        <div class="row">
        
        <div class="col-md-6 col-sm-6">
            Product photos (can attach more than one):
            <input type="file"  class="wp-form-control wpcf7-email" name="Photos[]"  multiple required>  
            @if ($errors->has('Photos[]'))
                <span class="help-block">
                    <strong>{{ $errors->first('Photos[]') }}</strong>
                </span>
            @endif
        </div>
        </div>
                

        </div> 
            <div class="col-md-6 col-sm-6">
            <label for="Description" class="control-label">Description <span class="required">*</span>
            </label>
            <textarea name="Description" id="Description" class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to say at Description"></textarea>
            @if ($errors->has('Description'))
                <span class="help-block">
                    <strong>{{ $errors->first('Description') }}</strong>
                </span>
            @endif
        </div>
        
        
                {{--  <input id="id" name="id" type="hidden" value="{{$id}}"> --}}
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        </div>

        </div>   
        
        <button class="wpcf7-submit button--itzel" type="submit">Create</button>  
    </form>

@endsection