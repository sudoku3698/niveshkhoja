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
                    Post office  
 


       
                <div class="panel-body">
            <form role="form" method="post" action="{{url('updatepostoffice')}}" enctype="multipart/form-data">
                    <input type="text" name="id" value="{{$data->id}}" hidden="">
                        <div class="form-group">
                        <label>Choose Post Office Category</label>
                        <select class="form-control" style="width: 100%" name="Post_Office_Subcategory">
                            <option value="">Please  Select</option>
                            @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='post_office_details')
                                <option value="{{$category_mast->id}}" {{$data->POST_OFFICE_SUBCATEGORY==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
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
                        <label>Post Office Name</label> 
                        <input type="text" placeholder="Enter Office Name" class="form-control" name="Post_Office_Name" value="{{$data->POST_OFFICE_NAME }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Post_Office_Address" value="{{$data->POST_OFFICE_ADDRESS }}"> 
                        </div>

                        <div class="form-group">
                        <label>Contact Person</label> 
                        <input type="text" placeholder="Enter Contact Person" class="form-control" name="Post_Office_Contact_Person" value="{{$data->POST_OFFICE_CONTACT_PERSON }}">
                        </div>

                        <div class="form-group">
                        <label>Pin Code</label> 
                        <input type="text" placeholder="Enter Pin Code" class="form-control" name="Post_Office_Pin_Code" value="{{$data->POST_OFFICE_PIN_CODE }}">
                        </div>

                        <div class="form-group">
                        <label>Post Office Type</label> 
                        <input type="text" placeholder="Enter Post Office Type" class="form-control" name="Post_Office_Type" value="{{$data->POST_OFFICE_TYPE }}">
                        </div>

                        <div class="form-group">
                        <label>Delivery</label> 
                        <input type="text" placeholder="Enter Delivery" class="form-control" name="Post_Office_Delivery" value="{{$data->POST_OFFICE_DELIVERY }}"> 
                        </div>

                        <div class="form-group">
                        <label>Region</label> 
                        <input type="text" placeholder="Enter Region" class="form-control" value="{{$data->POST_OFFICE_REGION }}" name="Post_Office_Region">
                        </div>

                        <div class="form-group">
                        <label>Circle</label> 
                        <input type="text" placeholder="Enter Circle" class="form-control" value="{{$data->POST_OFFICE_CIRCLE }}" name="Post_Office_Circle">
                        </div>

                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control"  value="{{$data->POST_OFFICE_EMAIL_ID }}" name="Post_Office_Email_ID">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" value="{{$data->POST_OFFICE_WEBSITE }}" name="Post_Office_Website">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" value="{{$data->POST_OFFICE_SERVICES_OFFERED }}" class="form-control" name="Post_Office_Services_Offered">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" value="{{$data->POST_OFFICE_ABOUT }}" class="form-control" name="Post_Office_About">
                        </div>


                        <div class="form-group">
                        <label>Year Established</label> 
                        <input type="text" placeholder="Enter Year Established" value="{{$data->POST_OFFICE_YEAR_ESTABLISH }}" class="form-control" name="Post_Office_Year_Establish">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" value="{{$data->POST_OFFICE_REVIEW }}" name="Post_Office_Review">
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