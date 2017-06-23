@extends('website.master')
@section('title')
Home
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
									<td>Starting Price</td>
									<td> <input type="number" min="0"/> </td>
								 </tr>
								 
								 <tr>
									<td>Buy Now Price</td>
									<td><input type="number" min="0"/></td>
								  </tr>
								  
								  <tr>
									<td>Target Price</td>
									<td><input type="number" min="0"/> </td>
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
									<td>Start Time</td>
									<td><input type="datetime-local" name="datetime"/></td>
								  </tr>
								  
								  <tr>
									<td>Period</td>
										<td>
											<ul class="nav navbar-nav navbar-right">
												<select class="per-select">
													<option>30 min </option>
													<option>1 hour</option>
													<option>2 hour </option>
													<option>4 hour </option>
													<option>6 hour </option>
													<option>12 hour </option>
													<option>24 hour </option>
												</select> 
											</ul> 								
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
							<button class="btn btn-primary"/>Create </button>
							<button class="btn btn-primary"/>Clear </button>
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
