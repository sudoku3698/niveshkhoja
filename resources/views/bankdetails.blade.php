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
                
                    <form role="form" id="form"  action="bankdetails" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                        <label>Choose Category</label>
                        <select class="form-control" style="width: 100%" name="Bank_Category">
                                <option value="">Please  Select</option>
                                @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='bank_details')
                                <option value="{{$category_mast->id}}" {{Input::old("Bank_Category")==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                        <label>Choose City</label>
                        <select class="form-control" style="width: 100%" name="cities">
                            <option value="">Please  Select City</option>
                            @foreach($Cities as $city)
                            <option value="{{$city->city_id}}" {{ (Input::old("cities") == $city->city_id ? "selected":"") }}>{{$city->city_name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Banner</label> 
                        <input type="file" class="form-control" name="banner" value="{{ old('banner') }}">
                        </div>

                        <div class="form-group">
                        <label>Name</label> 
                        <input type="text" placeholder="Enter Bank Name" class="form-control" name="Bank_Name" value="{{ old('Bank_Name') }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Bank_Address" value="{{ old('Bank_Address') }}">
                        </div>

                        <div class="form-group">
                        <label>Contact</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="Bank_Contact" value="{{ old('Bank_Contact') }}">
                        </div>

                        <div class="form-group">
                        <label>IFSC Code</label> 
                        <input type="text" placeholder="Enter IFSC Code" class="form-control" name="Bank_IFSC_Code" value="{{ old('Bank_IFSC_Code') }}">
                        </div>

                        <div class="form-group">
                        <label>Branch</label> 
                        <input type="text" placeholder="Enter Branch" class="form-control" name="Bank_Branch"  value="{{ old('Bank_Branch') }}">
                        </div>

                        <div class="form-group">
                        <label>MICR Code</label> 
                        <input type="text" placeholder="Enter MICR Code" class="form-control" name="Bank_MICR_Code" value="{{ old('Bank_MICR_Code') }}">
                        </div>
                       
                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control" name="Bank_Email_ID" value="{{ old('Bank_Email_ID') }}">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" name="Bank_Website" value="{{ old('Bank_Website') }}">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" class="form-control" name="Bank_Services_Offered" value="{{ old('Bank_Services_Offered') }}">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" class="form-control" name="Bank_About" value="{{ old('Bank_About') }}">
                        </div>


                        <div class="form-group">
                        <label>Year Establish</label> 
                        <input type="text" placeholder="Enter Year Establish" class="form-control" name="Bank_Year_Establish" value="{{ old('Bank_Year_Establish') }}">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" name="Bank_Review" value="{{ old('Bank_Review') }}">
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