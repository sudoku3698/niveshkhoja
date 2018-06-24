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
                    Mutual Fund  
 


       
                <div class="panel-body">
                
                 <form role="form"  method="post" action="postmutual_fund">
            
            <div class="form-group">
            <label>Choose Loan-Category</label>
            <select class="form-control" style="width: 100%" name="Mutual_Fund_Distributor_Subcategory">
                <option value="">Please  Select</option>
                 @foreach($category_master as $category_mast)
                    @if($category_mast->service_type=='mutual_fund_distributor')
                    <option value="{{$category_mast->id}}" {{Input::old("Mutual_Fund_Distributor_Subcategory")==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
                    @endif
                @endforeach
            </select>
            </div>

            <div class="form-group">
                        <label>Choose City</label>
                        <select class="form-control" style="width: 100%" name="cities">
                            <option value="">Please  Select City</option>
                            @foreach($Cities as $city)
                            <option value="{{$city->city_id}}" {{ (Input::old("cities") == $city->city_id? "selected":"") }}>{{$city->city_name}}
                            </option>
                            @endforeach
                        </select>
            </div>  

            <div class="form-group">
            <label>Banner</label> 
            <input type="file" class="form-control" name="banner" value="{{ old('banner') }}">
            </div>
    
            <div class="form-group">
            <label>Contact</label> 
            <input type="text" placeholder="Enter Contact" class="form-control" name="Mutual_Fund_Distributor_Contact" value="{{ old('Mutual_Fund_Distributor_Contact') }}">
            </div>

            <div class="form-group">
            <label>Address</label> 
            <input type="text" placeholder="Enter Address" class="form-control" name="Mutual_Fund_Distributor_Address" value="{{ old('Mutual_Fund_Distributor_Address') }}">
            </div>

            <div class="form-group">
            <label>Contact Person</label> 
            <input type="text" placeholder="Enter Contact Person" class="form-control" name="Mutual_Fund_Distributor_Contact_Person" value="{{ old('Mutual_Fund_Distributor_Contact_Person') }}">
            </div>

            <div class="form-group">
            <label>AMFI Registration Number(ARN)</label> 
            <input type="text" placeholder="Enter AMFI Registration Number" class="form-control" name="Mutual_Fund_Distributor_AMFI_Registration_Number" value="{{ old('Mutual_Fund_Distributor_AMFI_Registration_Number') }}">
            </div>

            <div class="form-group">
            <label>ARN Validity</label> 
            <input type="text" placeholder="Enter ARN Valid till" class="form-control" name="Mutual_Fund_Distributor_ARN_Validity" value="{{ old('Mutual_Fund_Distributor_ARN_Validity') }}">
            </div>

            <div class="form-group">
            <label>KYD</label> 
            <input type="text" placeholder="Enter KYD" class="form-control" name="Mutual_Fund_Distributor_KYD" value="{{ old('Mutual_Fund_Distributor_KYD') }}">
            </div>

            <div class="form-group">
            <label>EUIN</label> 
            <input type="text" placeholder="Enter EUIN" class="form-control" name="Mutual_Fund_Distributor_EUIN" value="{{ old('Mutual_Fund_Distributor_EUIN') }}">
            </div>

            <div class="form-group">
            <label>Email</label> 
            <input type="email" placeholder="Enter Email" class="form-control" name="Mutual_Fund_Distributor_Email_ID" value="{{ old('Mutual_Fund_Distributor_Email_ID') }}">
            </div>

            <div class="form-group">
            <label>Website</label> 
            <input type="text" placeholder="Enter Website" class="form-control" name="Mutual_Fund_Distributor_Website" value="{{ old('Mutual_Fund_Distributor_Website') }}">
            </div>


            <div class="form-group">
            <label>Services Offered</label> 
            <input type="text" placeholder="Enter Services Offered" class="form-control" name="Mutual_Fund_Distributor_Services_Offered" value="{{ old('Mutual_Fund_Distributor_Services_Offered') }}">
            </div>


            <div class="form-group">
            <label>About</label> 
            <input type="text" placeholder="Enter About Us" class="form-control" name="Mutual_Fund_Distributor_About" value="{{ old('Mutual_Fund_Distributor_About') }}">
            </div>


            <div class="form-group">
            <label>Year Established</label> 
            <input type="text" placeholder="Enter Year Established" class="form-control" name="Mutual_Fund_Distributor_Year_Establish" value="{{ old('Mutual_Fund_Distributor_Year_Establish') }}">
            </div>


            <div class="form-group">
            <label>Review</label> 
            <input type="text" placeholder="Enter Review" class="form-control" name="Mutual_Fund_Distributor_Review" value="{{ old('Mutual_Fund_Distributor_Review') }}">
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