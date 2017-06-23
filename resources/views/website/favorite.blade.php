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
					<h2 class="head">Favorite</h2>
				  </div>
				  <div class="blog-breadcrumbs-right">
					<ol class="breadcrumb">
					  <li>You are here</li>
					  <li class="active">Favorite</li>
					  <li><a href="index.html">Home</a></li>                  
					  
					</ol>
				  </div>
				</div>
			  </div>
			</div>        
		  </div>      
		</section> 

	
		<div id="wrapper" class="container">

			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<table class="table table-striped">
							<thead>
								<tr>
									
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/pro2.jpg"></a></td>
									<td>Name</td>
									
									<td>$2,350.00</td>
									<td>$2,350.00</td>
								</tr>			  
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/pro2.jpg"></a></td>
									<td>Name</td>
									
									<td>$1,150.00</td>
									<td>$2,450.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/pro2.jpg"></a></td>
									<td>Name</td>
									
									<td>$1,210.00</td>
									<td>$1,123.00</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									
									<td><strong>$3,600.00</strong></td>
								</tr>		  
							</tbody>
						</table>
						<input class="btn btn-default" type="button" value="Remove">
						</div>
                        </div>
                        </div>
                        
		
@endsection

