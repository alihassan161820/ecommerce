@extends('website.master')
@section('title')
Profile
@endsection
@section('style')
     {!! Html::style('css/editprofilepage.css') !!}
@endsection
@section('container')
	<section id="blogArchive">      
		  <div class="row">
			<div class="col-lg-12 col-md-12">
			  <div class="blog-breadcrumbs-area">
				<div class="container">
				  <div class="blog-breadcrumbs-left">
					<h2 class="head">Profile</h2>
				  </div>
				  <div class="blog-breadcrumbs-right">
					<ol class="breadcrumb">
					  <li>You are here</li>
					  <li class="active">Profile</li>
					  <li><a href="index.html">Home</a></li>                  
					  <li>Profile</li>
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
              <h3 class="panel-title"> {{Auth::user()->name}}</h3>
              

			  <a href="/editprofile">Edit Profile </a>
			 
			  <!-- <span> | </span>
			  <a href="editprofile.html">Logout </a> -->
            </div>
            <div class="panel-body">
              <div class="row">
                <div colspan="12" align="center"> <img alt="User Pic" src="{{url('../') }}/storage/{{ Auth::user()->avatar}}" width="170px" height="170px" class="img-circle  img-user ">
				</div>
				
				
                <div class=" col-md-12 col-lg-12 "> 
				
					<form>
						<table class="table table-user-information">
							<tbody>
							

							<tr>
							<th > Account Information</th>
								<td id="a">Email:</td>
								<td id="t"> {{Auth::user()->email}} </td>
							  </tr>

							  <tr>
							   <th rowspan="3">Personal Information</th>
							  <br>
								<td id="a">Gender:</td>
								<td > {{Auth::user()->gender()}}</td>
							 </tr>
							  
							  <tr>
								<td id="a">Birthdate:</td>
								<td >{{Auth::user()->birthdate}} </td>
							  </tr>
								<tr>
								<td id="a">Phone Number:</td>
								<td> {{Auth::user()->phone}} </td>
							  </tr>
							  
							  @if(!is_null($address))
							  <tr>
							  <th rowspan="3">Address Information</th>
								<td id="a">Country:</td>
								<td> {{$address->Country}} </td>
							  </tr>
							  
							  <tr>
								<td id="a">City:</td>
								<td> {{$address->City}} </td>
							  </tr>
							  
							  <tr>
								<td id="a">Home address:</td>
								<td>{{$address->Street}} </td>
								
							  </tr>
							  @else
							  <tr>
							  <th rowspan="3">Address Information</th>

							  <td id="a">Country:</td>
							  <td> </td>
							</tr>
								
							  <tr>
								<td id="a">City:</td>
								<td></td>
							  </tr>
							  
							  <tr>
								<td id="a">Home address:</td>
								<td> </td>
								
							  </tr>
							  @endif
							  
							  
							  
							</tbody>
						</table>
					  
					  
					  
					</form>
					
                </div>
              </div>
            </div>
				
          </div>
        </div>
	 </div>
    </div>
	
	
@endsection

