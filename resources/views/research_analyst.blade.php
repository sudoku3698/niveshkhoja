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
                   Research Analyst
 


       
                <div class="panel-body">
        <form role="form"  method="post" action="postresearch_analyst">

                        <div class="form-group">
                        <label>Choose Research Analyst Category</label>
                        <select class="form-control" style="width: 100%" name="Research_Analyst_Subcategory">
                            <option value="">Please  Select</option>
                            @foreach($category_master as $category_mast)
                                @if($category_mast->service_type=='research_analyst_details')
                                <option value="{{$category_mast->id}}" {{Input::old("Research_Analyst_Subcategory")==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
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
                        <input type="text" placeholder="Enter Contact"  value="{{ old('Research_Analyst_Contact') }}" class="form-control" name="Research_Analyst_Contact">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" value="{{ old('Research_Analyst_Address') }}" class="form-control" name="Research_Analyst_Address">
                        </div>

                        <div class="form-group">
                        <label>Contact Person</label> 
                        <input type="text" placeholder="Enter Contact Person"  value="{{ old('Research_Analyst_Contact_Person') }}" class="form-control" name="Research_Analyst_Contact_Person">
                        </div>

                        <div class="form-group">
                        <label>Insurer</label> 
                        <input type="text" placeholder="Enter Insurer"  value="{{ old('Research_Analyst_Insurer') }}" class="form-control" name="Research_Analyst_Insurer">
                        </div>

                        <div class="form-group">
                        <label>Registration Number</label> 
                        <input type="text" placeholder="Enter Registration Number" value="{{ old('Research_Analyst_Registration_Number') }}" class="form-control" name="Research_Analyst_Registration_Number">
                        </div>

                        <div class="form-group">
                        <label>Category</label> 
                        <input type="text" placeholder="Enter Category" value="{{ old('Research_Analyst_Category') }}" class="form-control" name="Research_Analyst_Category">
                        </div>


                        <div class="form-group">
                        <label>Registration Valid Upto</label> 
                        <input type="text" placeholder="Enter Registration Valid Upto" value="{{ old('Research_Analyst_Registration_Valid_Upto') }}" class="form-control" name="Research_Analyst_Registration_Valid_Upto">
                        </div>

                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" value="{{ old('Research_Analyst_Email_ID') }}" class="form-control" name="Research_Analyst_Email_ID">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website"  value="{{ old('Research_Analyst_Website') }}" class="form-control" name="Research_Analyst_Website">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" value="{{ old('Research_Analyst_Services_Offered') }}" class="form-control" name="Research_Analyst_Services_Offered">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" value="{{ old('Research_Analyst_About') }}"  class="form-control" name="Research_Analyst_About">
                        </div>


                        <div class="form-group">
                        <label>Year Established</label> 
                        <input type="text" placeholder="Enter Year Established" value="{{ old('Research_Analyst_Year_Establish') }}" class="form-control" name="Research_Analyst_Year_Establish">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" value="{{ old('Research_Analyst_Review') }}" class="form-control" name="Research_Analyst_Review">
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