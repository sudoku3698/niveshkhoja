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
                    Broker Add  
 


       
                <div class="panel-body">
                
                   <form role="form"  method="post" action="postbrokersubbroker">

                        <div class="form-group">
                        <label>Choose Sub-Category</label>
                        <select class="form-control" style="width: 100%" name="Broker_Subcategory">
                                <option value="">Please Select</option>
                                @foreach($category_master as $category_mast)
                                    @if($category_mast->service_type=='broker_subbroker')
                                    <option value="{{$category_mast->id}}" {{Input::old("Broker_Subcategory")==$category_mast->id?"selected":""}}>{{$category_mast->category_value}}</option>
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
                        <input type="text" placeholder="Enter Contact(Broker/Sub Broker)" class="form-control" name="Broker_Contact">
                        </div>

                        <div class="form-group">
                        <label>Address</label> 
                        <input type="text" placeholder="Enter Address" class="form-control" name="Broker_Address">
                        </div>

                        <div class="form-group">
                        <label>Contact Person</label> 
                        <input type="text" placeholder="Enter Contact" class="form-control" name="Broker_Contact_Person">
                        </div>

                        <div class="form-group">
                        <label>Registration Number</label> 
                        <input type="text" placeholder="Enter Registration Number" class="form-control" name="Broker_Registration_Number">
                        </div>

                        <div class="form-group">
                        <label>Stock Exchange</label> 
                        <input type="text" placeholder="Enter Stock Exchange" class="form-control" name="Broker_Stock_Exchange">
                        </div>

                        <div class="form-group">
                        <label>Category</label> 
                        <input type="text" placeholder="Enter Category" class="form-control" name="Broker_Category">
                        </div>

                        <div class="form-group">
                        <label>Recommending Broker Name</label> 
                        <input type="text" placeholder="Enter Recommending Broker Name" class="form-control" name="Broker_Recommending_Broker_Name">
                        </div>

                        <div class="form-group">
                        <label>Recommending Broker Reg. Number</label> 
                        <input type="text" placeholder="Enter Recommending Broker Reg. Number" class="form-control" name="Broker_Recommending_Broker_Reg_Number">
                        </div>
                       
                        <div class="form-group">
                        <label>Email</label> 
                        <input type="email" placeholder="Enter Email" class="form-control" name="Broker_Email_ID">
                        </div>

                        <div class="form-group">
                        <label>Website</label> 
                        <input type="text" placeholder="Enter Website" class="form-control" name="Broker_Website">
                        </div>


                        <div class="form-group">
                        <label>Services Offered</label> 
                        <input type="text" placeholder="Enter Services Offered" class="form-control" name="Broker_Services_Offered">
                        </div>


                        <div class="form-group">
                        <label>About</label> 
                        <input type="text" placeholder="Enter About Us" class="form-control" name="Broker_About">
                        </div>


                        <div class="form-group">
                        <label>Year Established</label> 
                        <input type="text" placeholder="Enter Year Established" class="form-control" name="Broker_Year_Establish">
                        </div>


                        <div class="form-group">
                        <label>Review</label> 
                        <input type="text" placeholder="Enter Review" class="form-control" name="Broker_Review">
                        </div>

                        <div class="form-group">
                        <label>Rank</label> 
                        <input  required type="number" placeholder="Enter Rank" class="form-control" name="rank" value="{{ old('rank') }}">
                        </div>

                        <div class="form-group">
                        <label>Advertisement</label> 
                        <input type="file" class="form-control" name="advertisement" value="{{ old('advertisement') }}">
                        </div>

                        <input type="hidden" name="Broker" value="broker_form">

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