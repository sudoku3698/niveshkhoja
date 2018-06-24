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
                    Bank Details 

       
                <div class="panel-body">
                
                    <form role="form" id="form"  action="{{url('updatebankdetails')}}" method="post" enctype="multipart/form-data">
                      <input type="text" name="Bank_id"  value="{{ $data->id }}" hidden="">
                        <div class="form-group">
                        <label>Choose Category</label>
                            <select class="form-control" style="width: 100%" name="Bank_Category">
                                <option value="">Please  Select</option>
                                @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='bank_details')
                                <option value="{{$category_mast->id}}" {{$data->BANK_CATEGORY==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <label>Choose City</label>
                        <select class="form-control" style="width: 100%" name="cities">
                            <option value="">Please  Select City</option>
                            @foreach($Cities as $city)
                            <option value="{{$city->city_id}}" {{ ($data->search_cities== $city->city_id ? "selected":"") }}>{{$city->city_name}}</option>
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
                        <input type="text" placeholder="Enter Bank Name" class="form-control" name="Bank_Name" value="{{ $data->BANK_NAME }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Bank_Address" value="{{ $data->BANK_ADDRESS }}">
                        </div>

                        <div class="form-group">
                        <label>Contact</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="Bank_Contact" value="{{ $data->BANK_CONTACT }}">
                        </div>

                        <div class="form-group">
                        <label>IFSC Code</label> 
                        <input type="text" placeholder="Enter IFSC Code" class="form-control" name="Bank_IFSC_Code" value="{{ $data->BANK_IFSC_CODE }}">
                        </div>

                        <div class="form-group">
                        <label>Branch</label> 
                        <input type="text" placeholder="Enter Branch" class="form-control" name="Bank_Branch"  value="{{ $data->BANK_BRANCH }}">
                        </div>

                        <div class="form-group">
                        <label>MICR Code</label> 
                        <input type="text" placeholder="Enter MICR Code" class="form-control" name="Bank_MICR_Code" value="{{ $data->BANK_MICR_CODE }}">
                        </div>
                       
                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control" name="Bank_Email_ID" value="{{ $data->BANK_EMAIL_ID}}">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" name="Bank_Website" value="{{ $data->BANK_WEBSITE }}">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" class="form-control" name="Bank_Services_Offered" value="{{ $data->BANK_SERVICES_OFFERED }}">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" class="form-control" name="Bank_About" value="{{ $data->BANK_ABOUT}}">
                        </div>


                        <div class="form-group">
                        <label>Year Establish</label> 
                        <input type="text" placeholder="Enter Year Establish" class="form-control" name="Bank_Year_Establish" value="{{ $data->BANK_YEAR_ESTABLISH }}">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input id="#datetimepicker" type="text" placeholder="Enter Review" class="form-control" name="Bank_Review" value="{{ $data->BANK_REVIEW }}">
                        </div>

                        
                        <div class="form-group">
                        <label>Rank</label> 
                        <input  required type="number" placeholder="Enter Review" class="form-control" name="rank" value="{{ $data->rank }}">
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