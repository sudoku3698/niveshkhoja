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
            <form role="form" method="post" action="postoffice">

                        <div class="form-group">
                        <label>Choose Post Office Category</label>
                        <select class="form-control" style="width: 100%" name="Post_Office_Subcategory">
                            <option value="">Please  Select</option>
                            @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='post_office_details')
                                <option value="{{$category_mast->id}}" {{Input::old("Post_Office_Subcategory")==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
                                @endif
                            @endforeach
                        </select>
                        </div>
                        
                        <div class="form-group">
                        <label>Choose City</label>
                        <select class="form-control" style="width: 100%" name="cities">
                            <option value="">Please  Select City</option>
                            @foreach($Cities as $city)
                            <option value="{{$city->city_id}}" {{ (Input::old("cities") == $city->city_id? "selected":"") }}>{{$city->city_name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Banner</label> 
                        <input type="file" class="form-control" name="banner" value="{{ old('banner') }}">
                        </div>

                        <div class="form-group">
                        <label>Post Office Name</label> 
                        <input type="text" placeholder="Enter Office Name" class="form-control" name="Post_Office_Name" value="{{ old('Post_Office_Name') }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Post_Office_Address" value="{{ old('Post_Office_Address') }}"> 
                        </div>

                        <div class="form-group">
                        <label>Contact Person</label> 
                        <input type="text" placeholder="Enter Contact Person" class="form-control" name="Post_Office_Contact_Person" value="{{ old('Post_Office_Contact_Person') }}">
                        </div>

                        <div class="form-group">
                        <label>Pin Code</label> 
                        <input type="text" placeholder="Enter Pin Code" class="form-control" name="Post_Office_Pin_Code" value="{{ old('Post_Office_Pin_Code') }}">
                        </div>

                        <div class="form-group">
                        <label>Post Office Type</label> 
                        <input type="text" placeholder="Enter Post Office Type" class="form-control" name="Post_Office_Type" value="{{ old('Post_Office_Type') }}">
                        </div>

                        <div class="form-group">
                        <label>Delivery</label> 
                        <input type="text" placeholder="Enter Delivery" class="form-control" name="Post_Office_Delivery" value="{{ old('Post_Office_Delivery') }}"> 
                        </div>

                        <div class="form-group">
                        <label>Region</label> 
                        <input type="text" placeholder="Enter Region" class="form-control" value="{{ old('Post_Office_Region') }}" name="Post_Office_Region">
                        </div>

                        <div class="form-group">
                        <label>Circle</label> 
                        <input type="text" placeholder="Enter Circle" class="form-control" value="{{ old('Post_Office_Circle') }}" name="Post_Office_Circle">
                        </div>

                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control"  value="{{ old('Post_Office_Email_ID') }}" name="Post_Office_Email_ID">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" value="{{ old('Post_Office_Website') }}" name="Post_Office_Website">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" value="{{ old('Post_Office_Services_Offered') }}" class="form-control" name="Post_Office_Services_Offered">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" value="{{ old('Post_Office_About') }}" class="form-control" name="Post_Office_About">
                        </div>


                        <div class="form-group">
                        <label>Year Established</label> 
                        <input type="text" placeholder="Enter Year Established" value="{{ old('Post_Office_Year_Establish') }}" class="form-control" name="Post_Office_Year_Establish">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" value="{{ old('Post_Office_Review') }}" name="Post_Office_Review">
                        </div>

                        <div class="form-group">
                        <label>Rank</label> 
                        <input  required type="number" placeholder="Enter Rank" class="form-control" name="rank" value="{{ old('rank') }}">
                        </div>

                        <div class="form-group">
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