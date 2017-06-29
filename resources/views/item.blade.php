@extends('website.master')

@section('content')
                            
                            <h2>{{ session('itemname') }}</h2>
                             <ul  >
                              <li>
                           {{ session('itemdescription') }} 
                            </li>
                             <li>
                           {{ session('itemavailability') }} 
                            </li>
                             <li>
                           {{ session('itemprice') }} 
                            </li>
                             <li>
                           {{ session('itemnumberofunits') }} 
                            </li>
                           
                            </ul>            
                         
                        
                     

@endsection