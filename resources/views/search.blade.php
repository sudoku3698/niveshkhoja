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
                
                    <form role="form" id="form"  action="searchkeyword" method="post">

                        <div class="form-group">
                        <label>Choose Cities</label>
                        <select class="form-control" style="width: 100%" name="search_cities">
                            <option value="">Please  Select</option>
                            @foreach($Cities as $cit)
                            <option value="{{$cit->city_id}}">{{$cit->city_name}}</option>
                            @endforeach
                           
                        </select>
                        </div>

                        

                        <div class="form-group">
                        <label>Search Keyword</label> 
                        <select class="form-control" style="width: 100%" name="search_keyword">
                            <option value="">Please  Select</option>
                            @foreach($data as $datas)
                            <option value="{{$datas->category_value}}">{{$datas->category_name}}</option>
                            @endforeach
                            <!-- <option value="101" {{ (Input::old("Bank_Category") == 101 ? "selected":"") }}>Cooperative Societies</option>
                            <option value="102" {{ (Input::old("Bank_Category") == 102 ? "selected":"") }}>RNBC</option>
                            <option value="103" {{ (Input::old("Bank_Category") == 103 ? "selected":"") }}>MFI</option>
                            <option value="104" {{ (Input::old("Bank_Category") == 104 ? "selected":"") }}>NBFC</option> -->
                        </select>
                       
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