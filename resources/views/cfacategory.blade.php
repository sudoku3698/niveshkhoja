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
                    cfacategory  
 


       
                <div class="panel-body">
                
                   <form role="form"  method="post" action="postcfacategory">

                        <div class="form-group">
                        <label>Choose CFA-Category</label>
                        <select class="form-control" style="width: 100%" name="CFA_Subcategory">
                            <option value="">Please  Select</option>
                            @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='cfa_details')
                                <option value="{{$category_mast->id}}" {{Input::old("CFA_Subcategory")==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
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
                        <label>Contact</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="CFA_Contact" value="{{ old('CFA_Contact') }}">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="CFA_Address" value="{{ old('CFA_Address') }}">
                        </div>

                        <div class="form-group">
                        <label>Contact Person</label> 
                        <input type="text" placeholder="Enter Contact Person" class="form-control" name="CFA_Contact_Person" value="{{ old('CFA_Contact_Person') }}">
                        </div>

                        <div class="form-group">
                        <label>FPSBI Number</label> 
                        <input type="text" placeholder="Enter FPSBI Number" class="form-control" name="CFA_FPSBI_Number" value="{{ old('CFA_FPSBI_Number') }}">
                        </div>

                        <div class="form-group">
                        <label>Nature of Employment</label> 
                        <input type="text" placeholder="Enter Stock Exchange" class="form-control" name="CFA_Nature_of_Employment" value="{{ old('CFA_Nature_of_Employment') }}">
                        </div>

                        <div class="form-group">
                        <label>Company Name</label> 
                        <input type="text" placeholder="Enter Company Name" class="form-control" name="CFA_Company_Name" value="{{ old('CFA_Company_Name') }}">
                        </div>

                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control" name="CFA_Email_ID" value="{{ old('CFA_Email_ID') }}">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" name="CFA_Website" value="{{ old('CFA_Website') }}">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" class="form-control" name="CFA_Services_Offered" value="{{ old('CFA_Services_Offered') }}">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" class="form-control" name="CFA_About" value="{{ old('CFA_About') }}">
                        </div>


                        <div class="form-group">
                        <label>Year Established</label> 
                        <input type="text" placeholder="Enter Year Established" class="form-control" name="CFA_Year_Establish" value="{{ old('CFA_Year_Establish') }}">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" name="CFA_Review" value="{{ old('CFA_Review') }}">
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