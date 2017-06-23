@extends('website.master')
@section('title')
Ads
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
              <h3 class="panel-title"> Name</h3>
			  <a href="editprofile.html">Edit Profile </a>
			  <span> | </span>
			  <a href="editprofile.html">Logout </a>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/user.jpg" class="img-circle img-responsive">
				</div>
				
                <div class=" col-md-9 col-lg-9 "> 
				
					<form>
						<table class="table table-user-information">
							<tbody>
							  
							  <tr>
								<td>Gender</td>
								<td> </td>
							 </tr>
							  
							  <tr>
								<td>Date of Birth</td>
								<td> </td>
							  </tr>
					
							  <tr>
								<td>Country</td>
								<td>  </td>
							  </tr>
							  
							  <tr>
								<td>City</td>
								<td>  </td>
							  </tr>
							  
							  <tr>
								<td>Home address</td>
								<td> </td>
							  </tr>
							  
							  <tr>
								<td>Email</td>
								<td>  </td>
							  </tr>
							  
							  <tr>
								<td>Phone Number</td>
								<td>  </td>
							  </tr>
							  
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

