@extends('layouts.master')
@section('content')
<div class="content">

<div class="row">
<div class="col-lg-12">
 <div class="hpanel">

               @if(Session('success'))
               <script type="text/javascript">
                $(document).ready(function () {

                    toastr.success('Succesfully Saved');
                });
                </script>


         <div class="alert alert-success">

         {{ Session('success') }}

         </div>

         @endif
           @if(Session('error'))
         <script type="text/javascript">
                $(document).ready(function () {

                    toastr.error('Something Went Wrong, Please try Again.');
                });
                </script>
        

         <div class="alert alert-danger">

         {{ Session('error') }}

         </div>

         @endif
          @if (count($errors) > 0)
            <script type="text/javascript">
                    $(document).ready(function () {

                        toastr.error('Something Went Wrong, Please try Again.');
                    });
            </script>
            
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
                <div class="panel-heading">
                    Insurance  
 


       
                <div class="panel-body">
                
                  <form role="form"  method="post" action="{{url('updatepostinsurance')}}" enctype="multipart/form-data">
                        <input type="text" name="id" value="{{$data->id}}" hidden="">
                        <div class="form-group">
                        <label>Choose Insurance-Category</label>
                        <select class="form-control" style="width: 100%" name="Insurance_Subcategory">
                            <option value="">Please  Select</option>
                            @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='insurance_details')
                                <option value="{{$category_mast->id}}" {{$data->INSURANCE_SUBCATEGORY==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="form-group">
                        <label>Choose City</label>
                        <select class="form-control" style="width: 100%" name="cities">
                            <option value="">Please  Select City</option>
                            @foreach($Cities as $city)
                            <option value="{{$city->city_id}}" {{ ($data->search_cities== $city->city_id ? "selected":"") }}>{{$city->city_name}}
                            </option>
                            @endforeach
                        </select>
                        </div>    

                        <div class="form-group">
                        <img src="{{asset('public/banners/'.$data->banner)}}" alt="{{$data->banner}}" height="300" width="300">
                        <label>Banner</label> 
                        <input type="file" class="form-control" name="banner" value="{{ old('banner') }}">
                        </div>                    

                        <div class="form-group">
                        <label>Contact</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="Insurance_Contact" value="{{ $data->INSURANCE_CONTACT }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Insurance_Address" value="{{ $data->INSURANCE_ADDRESS }}">
                        </div>

                        <div class="form-group">
                        <label>Contact Person</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="Insurance_Contact_Person" value="{{ $data->INSURANCE_CONTACT_PERSON }}">
                        </div>

                        <div class="form-group">
                        <label>Insurer</label> 
                        <input type="text" placeholder="Enter Insurer Name" class="form-control" name="Insurance_Insurer" value="{{ $data->INSURANCE_INSURER}}">
                        </div>

                        <div class="form-group">
                        <label>License Number</label> 
                        <input type="text" placeholder="Enter License Number" class="form-control" name="Insurance_License_Number" value="{{ $data->INSURANCE_LICENSE_NUMBER}}">
                        </div>

                        <div class="form-group">
                        <label>IRDS URN</label> 
                        <input type="text" placeholder="Enter IRDS URN" class="form-control" name="Insurance_Irds_URN" value="{{ $data->INSURANCE_IRDS_URN }}">
                        </div>

                        <div class="form-group">
                        <label>Agent ID</label> 
                        <input type="text" placeholder="Enter Agent ID" class="form-control" name="Insurance_Agent_ID" value="{{ $data->INSURANCE_AGENT_ID }}">
                        </div>
                       
                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control" name="Insurance_Email_ID" value="{{ $data->INSURANCE_EMAIL_ID }}">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" name="Insurance_Website" value="{{ $data->INSURANCE_WEBSITE }}">
                        </div>

                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" class="form-control" name="Insurance_Services_Offered" value="{{ $data->INSURANCE_SERVICES_OFFERED }}">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" class="form-control" name="Insurance_About" value="{{ $data->INSURANCE_ABOUT }}">
                        </div>


                        <div class="form-group">
                        <label>Year Established</label> 
                        <input type="text" placeholder="Enter Year Established" class="form-control" name="Insurance_Year_Establish" value="{{ $data->INSURANCE_YEAR_ESTABLISH }}">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" name="Insurance_Review" value="{{ $data->INSURANCE_REVIEW }}">
                        </div>

                        <div class="form-group">
                        <label>Rank</label> 
                        <input  required type="number" placeholder="Enter Rank" class="form-control" name="rank" value="{{ $data->rank }}">
                        </div>

                        <div class="form-group">
                        <img src="{{asset('public/advertisements/'.$data->advertisement)}}" alt="{{$data->advertisement}}" height="300" width="300">
                        <label>Advertisement</label> 
                        <input type="file" class="form-control" name="advertisement" value="{{ old('advertisement') }}">
                        </div>

                        <div>
                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                        </div>
                    </form>

                </div>
            </div>



</div>
</div>
</div>
    @stop
@section('javascript')

@stop