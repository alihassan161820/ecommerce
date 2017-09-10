@extends('website.master')
@section('title')
Profile
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
					<h2 class="head">Information</h2>
				  </div>
				  <div class="blog-breadcrumbs-right">
					<ol class="breadcrumb">
					  <li>You are here</li>
					  
					  <li><a href="index.html">Home</a></li>                  
					  <li class="active">Information</li>
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
              <h3 class="panel-title"> </h3>
              

			 
			 
			  <!-- <span> | </span>
			  <a href="editprofile.html">Logout </a> -->
            </div>
            <div class="panel-body">
              <div class="row">
              
				
				
                <div class=" col-md-12 col-lg-12 "> 
				
					<form>
						<table class="table table-user-information">
							<tbody>
							
								<tr>
							
								<td id="a">Name:</td>
								<td style="color:#525459;" > {{$info->name}} </td>
							  </tr>


							<tr>
							
								<td id="a">Email:</td>
								<td style="color:#525459"> {{$info->email}} </td>
							  </tr>

							  
							  
							  
								<tr>
								<td id="a">Phone Number:</td>
								<td style="color:#525459"> {{$info->phone}} </td>
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