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
						<form>
							<table class="table table-user-information">
								<tbody>

								<tr>
									<td>City</td>
									<td> <input type="text"/> </td>
								</tr>

								

								<tr>
									<td>Phone Number</td>
									<td> <input type="number"/> </td>
								</tr>

								  <tr>
									<td>Item Name</td>
									<td> <input type="text"/> </td>
								  </tr>
							    
								 <tr>
									<td> Price</td>
									<td><input type="number" min="0"/></td>
								  </tr>
								  
								  <tr>
									<td>Number Of Unit</td>
									<td><input type="number" min="0"/> </td>
								  </tr>
								  
								  <tr>
									<td>Condition</td>
									<td> 
									  <input type="radio" name="Condition" value="New" checked />New<br/>
									  <input type="radio" name="Condition" value="Used"/> Used
									</td>
								  </tr>
								  
								
								  <tr>
									<td>Choose Picture</td>
									<td><input type="file" name="chose picture" accept="image/*" multiple /></td>
								  </tr>
								  
								  <tr>
									<td>Description</td>
									<td>
										<textarea row="15" placeholder="What Would You Like To Say "></textarea>
									</td>
								  </tr>
								  
								</tbody>
							</table>
							<input type="submit" value="Create">
							<input type="reset" value="Clear">
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