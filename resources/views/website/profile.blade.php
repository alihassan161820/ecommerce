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
                     <img src="{{url('../') }}/storage/{{ Auth::user()->avatar}}" width="120px" height="120px" class="img-circle" />

                     	</br>
                     	 
                       age: {{ Auth::user()->age }}
                       </br>
     
                       	Gender:{{Auth::user()->gender()}}
                       </br>
                       phone: {{ Auth::user()->phone }}
                       </br>
                       	 Country: {{$address->Country}}
                       	 </br>
                       	 City: {{ $address->City }}
                       	 </br>
                       	 Street: {{ $address->Street }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection