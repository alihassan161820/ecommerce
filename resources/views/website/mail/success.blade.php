@extends('website.master')

@section('container')
   @if($state == true)
   <h2>Your Email has been Verified </h2>

   <button class="wpcf7-submit button--itzel" > 
   <a class="navbar-brand" href="{{ url('/') }}">
                        </a>
                        Back
                       </button> 
                       to the site
                   @endif
                   @if($state == false)
   <h2>Confirm your Email !  </h2>

  
                   @endif
@endsection
