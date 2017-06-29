@extends('website.master')
@section('title')
Edit your profile
@endsection
@section('style')
     {!! Html::style('css/editprofilepage.css') !!}
     {!! Html::style('css/sm.css') !!}
@endsection
@section('container')
	<section id="blogArchive">      
		  <div class="row">
			<div class="col-lg-12 col-md-12">
			  <div class="blog-breadcrumbs-area">
				<div class="container">
				  <div class="blog-breadcrumbs-left">
					<h2 class="head">Edit Profile</h2>
				  </div>
				  <div class="blog-breadcrumbs-right">
					<ol class="breadcrumb">
					  <li>You are here</li>
					  <li class="active">Edit Profile</li>
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
              <h3 class="panel-title"> {{ucwords(Auth::user()->name)}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div colspan="12"  align="center">
                 <img id="image" alt="User Pic" src="{{url('../') }}/storage/{{ Auth::user()->avatar}}" width="170px" height="170px" class="img-circle"  >					
				
				</div>


                <div class=" col-md-12 col-lg-12 "> 
				
					<form enctype="multipart/form-data" action="/updateprofile" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
							
							
<!-- 
							<label class="fileContainer">
							    Select Image
							    <input type="file" name="avatar"/>
							</label>
							<br>
							<br> -->
						<table class="table table-user-information">
							<tbody>
							  
							<tr>
							  <td id="a"> User Picture:</td>
								<td> <input type="file" class="form-control-file"  name="avatar" > </td>
							 </tr>

							  <tr>
							  <td id="a">Name:</td>
								<td> <input type="text" class="form-control" placeholder="Name" name="name" value="{{$data->name}}"> </td>
							  </tr>

							  <tr>
								<td id="a">Gender:</td>
								<td> 
									<input type="radio" name="gender" value="Male" checked />Male<br/>
									<input type="radio" name="gender" value="Female"/> Female
								</td>
							 </tr>
							  
							  <tr>
								<td id="a">Birthdate:</td>
								<td> <input type="Date" class="form-control" placeholder="Birthdate" name="birthdate" value="{{$data->birthdate}}" ></td>
							  </tr>
					<tr>
								<td id="a">Phone Number:</td>
								<td>  <input type="tel" class="form-control" placeholder="Phone" name="phone" value="{{$data->phone}}"> </td>
							  </tr>
							  @if(!is_null($address))
							  <tr>
								<td id="a">Country:</td>
								<td> <input type="text" class="form-control" placeholder="Country Name" name="Country" value="{{$address->Country}}"> </td>
							  </tr>
							  
							  <tr>
								<td id="a">City:</td>
								<td> <input type="text" class="form-control" placeholder="City Name" name="City" value="{{$address->City}}"> </td>
							  </tr>
							  
							  <tr>
								<td id="a">Home address:</td>
								<td> <input type="text" class="form-control" placeholder="Street Name" name="Street" value="{{$address->Street}}"> </td>
							  </tr>
							  @else
							  <tr>
								<td id="a">Country:</td>
								<td> <input type="text" class="form-control" placeholder="Country Name" name="Country" value=""> </td>
							  </tr>
							  
							  <tr>
								<td id="a">City:</td>
								<td> <input type="text" class="form-control" placeholder="City Name" name="City" value=""> </td>
							  </tr>
							  
							  <tr>
								<td id="a">Home address:</td>
								<td> <input type="text" class="form-control" placeholder="Street Name" name="Street" value=""> </td>
							  </tr>
							  
							  @endif
							  
							</tbody>
						</table>
					  
					<button class="pull-right btn btn-lg btn-danger">Cancel</button>
					<span></span>
					  <button href="/profile" class="pull-right btn btn-lg btn-danger">Save</button>
					</form>
					
                </div>
              </div>
            </div>
				
          </div>
        </div>
	 </div>
    </div>
	
	<!-- End Container Profile-->
	
@endsection
