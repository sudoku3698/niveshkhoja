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
                   Investment Advisors
 


       
                <div class="panel-body">
          <form role="form"  method="post" action="{{url('updatepostinvestment_advisors')}}"  enctype="multipart/form-data">
                        <input type="text" name="id" value="{{ $data->id}}" hidden="">
                        <div class="form-group">
                        <label>Choose Investment Advisors Category</label>
                        <select class="form-control" style="width: 100%" name="Investment_Advisors_Subcategory">
                            <option value="">Please  Select</option>
                            @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='investment_advisors_details')
                                <option value="{{$category_mast->id}}" {{$data->INVESTMENT_ADVISORS_SUBCATEGORY==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
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
                        <label>Name</label> 
                        <input type="text" placeholder="Enter Investment Advisors Name" class="form-control" name="Investment_Advisors_Name" value="{{ $data->INVESTMENT_ADVISORS_NAME }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Investment_Advisors_Address" value="{{ $data->INVESTMENT_ADVISORS_ADDRESS }}"> 
                        </div>

                        <div class="form-group">
                        <label>Contact</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="Investment_Advisors_Contact" value="{{ $data->INVESTMENT_ADVISORS_CONTACT }}">
                        </div>

                    
                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control" name="Investment_Advisors_Email_ID" value="{{ $data->INVESTMENT_ADVISORS_EMAIL_ID }}">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" name="Investment_Advisors_Website" value="{{ $data->INVESTMENT_ADVISORS_WEBSITE }}">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" class="form-control" name="Investment_Advisors_Services_Offered" value="{{ $data->INVESTMENT_ADVISORS_SERVICES_OFFERED }}">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" class="form-control" name="Investment_Advisors_About" value="{{ $data->INVESTMENT_ADVISORS_ABOUT }}">
                        </div>


                        <div class="form-group">
                        <label>Year Establish</label> 
                        <input type="text" placeholder="Enter Year Establish" class="form-control" name="Investment_Advisors_Year_Establish" value="{{ $data->INVESTMENT_ADVISORS_YEAR_ESTABLISH }}">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" name="Investment_Advisors_Review" value="{{ $data->INVESTMENT_ADVISORS_REVIEW }}">
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