@extends('website.masterp')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>

                <div class="panel-body">
                    welcome to your profile: {{ Auth::user()->name }}
                    </br>

                    <div class="panel-body">
                    <div class="col-sm-12 col-md-12">
                        <div class="thumbnail">
                            <h3 align="center">{{ucwords(Auth::user()->name)}}</h3>


					<img src="{{url('../') }}/storage/{{ Auth::user()->avatar}}" width="120px" height="120px" class="img-circle" />
                            <div class="caption">

                            

                     	
                     	 <form enctype="multipart/form-data" action="/updateProfile" method="POST">
               				 <label>Update Profile Image</label>
                				<input type="file" name="avatar">
                				<input type="hidden" name="_token" value="{{ csrf_token() }}">

								<div class="input-group">
                                    <span  id="basic-addon1">Name</span>
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{$data->name}}">
                                </div>
                                <div class="input-group">
                                    <span  id="basic-addon1">Gender</span>
                                    <input type="text" class="form-control" placeholder="Gender" name="gender" value="{{$data->gender()}}">
                                </div>
                                <div class="input-group">
                                    <span  id="basic-addon1">Age</span>
                                    <input type="text" class="form-control" placeholder="Age" name="age" value="{{$data->age}}">
                                </div>
                                <div class="input-group">
                                    <span  id="basic-addon1">Phone</span>
                                    <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$data->phone}}">
                                </div>
                                <!-- <div class="input-group">
                                    <span  id="basic-addon1">Email</span>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{$data->email}}">
                                </div> -->
                				<div class="input-group">
                                    <span  id="basic-addon1">City Name</span>
                                    <input type="text" class="form-control" placeholder="City Name" name="City" value="{{$address->City}}">
                                </div>

                                <div class="input-group">
                                    <span  id="basic-addon1">Country Name</span>
                                    <input type="text" class="form-control" placeholder="Country Name" name="Country" value="{{$address->Country}}">
                                </div>
                                <div class="input-group">
                                    <span  id="basic-addon1">Street Name</span>
                                    <input type="text" class="form-control" placeholder="Street Name" name="Street" value="{{$address->Street}}">
                                </div>



                <input type="submit" class="pull-right btn btn-sm btn-primary" value="Edit Profile">
            </form>











				</div>
            </div>
        </div>
    </div>
</div>
@endsection