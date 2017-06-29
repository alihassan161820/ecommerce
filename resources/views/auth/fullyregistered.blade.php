@extends('layouts.master')

@section('content')

              
             
                      <h4 class="modal-title" id="myModalLabel">Complete Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">
                        

                    <form class="appointment-form" role="form" method="POST" action="{{ route('fullyregistered') }}">
                        {{ csrf_field() }}
                          <div class="row">
                            
                            <div class="col-md-6 col-sm-6">
                              <label for="birthday" class="control-label">Birthday <span class="required">*</span>
                              </label>
                              <input type="date" id="birthday"  class="wp-form-control wpcf7-email" name="birthday" placeholder="Put your Birthday" value="{{ old('birthday') }}" required>  
                               @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                         
                          
                            <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="address" class="control-label">Address <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" id="address" name="address" placeholder="Address" required>
                              @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="col-md-6 col-sm-6">
                              <label for="phone" class="control-label">Phone <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" id="phone" name="phone" placeholder="Target Price" required>
                              @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="col-md-6 col-sm-6">
                              <label for="gender" class="control-label">Gender <span class="required">*</span>
                              </label>
                              <br>
                              Male<input type="radio"  id="gender" name="gender" value="Male"  required>
                             Female <input type="radio"  id="gender" name="gender" value="Female"  required>
                              @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                             <div class="col-md-6 col-sm-6">
                              <label for="type" class="control-label">Type <span class="required">*</span>
                              </label><br>
                              Seller<input type="radio"  id="type" name="type" value="Seller"  required>
                             Bidder <input type="radio"  id="type" name="type" value="Bidder"  required>
                              @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                           
                                 

                          </div>   
                          
                         <button class="wpcf7-submit button--itzel" type="submit">Create</button>  
                        </form>



@endsection