@extends('layouts.master')

@section('content')

              
             
                      <h4 class="modal-title" id="myModalLabel">Complete Details</h4>                     
                        
                         @if (count($errors) > 0)
                             <ul>
                               @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                         @endif
                    <form class="appointment-form" enctype="multipart/form-data" method="POST" action="/upload">
                        {{ csrf_field() }}
                          <div class="row">
                             Product name:
                          <br />
                        <input class="wp-form-control wpcf7-email" type="text" name="name" />
                        <br /><br />
                            <div class="col-md-6 col-sm-6">
                              Product photos (can attach more than one):
                              <input type="file"  class="wp-form-control wpcf7-email" name="photos[]"  multiple required>  
                               @if ($errors->has('photos[]'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('photos[]') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                         
                          <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                             
                          
                         <input type="submit" value="Upload">  
                        </form>



@endsection