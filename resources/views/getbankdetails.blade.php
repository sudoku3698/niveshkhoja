@extends('layouts.master')
@section('content')
<div class="content">

<div class="row">
<div class="col-lg-12">
 <div class="hpanel">

               <div class="panel-body">
                <a class="small-header-action" href="">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>
                @if($message = Session::get('success'))
            		<div class="alert alert-info alert-dismissible fade in" role="alert">
            	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            	        <span aria-hidden="true">×</span>
            	      </button>
            	      <strong>Success!</strong> {{ $message }}
            	    </div>
            	@endif
            	{!! Session::forget('success') !!}
               
                <h2 class="font-light m-b-xs">
                    Bank Details
                     <a href="{{ Route('downloadbankdetailsExcel',['type'=>'xls']) }}"><button class="btn btn-success">Download Excel xls</button></a>
        		   <a href="{{ Route('downloadbankdetailsExcel',['type'=>'xlsx']) }}"><button class="btn btn-success">Download Excel xlsx</button></a>
        		   <a href="{{ Route('downloadbankdetailsExcel',['type'=>'csv']) }}"><button class="btn btn-success">Download CSV</button></a>
        		    <form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 15px;" action="{{ Route('importbankdetailsExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            			<div class="form-group">
            			    {{ csrf_field() }}
            			<input type="file" name="import_file" class="form-control"/>
            			</div>
            			<button class="btn btn-primary">Import File</button>
        		    </form>
                </h2>
                
                <!-- <small>Advanced interaction controls to any HTML table</small> -->
            </div> @if(Session('success'))
               <script type="text/javascript">
                $(document).ready(function () {

                    toastr.success('Succesfully Deleted');
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
                   
 


       
                <div class="panel-body">
                  
                    <table id="example2" class="table table-striped table-bordered table-hover">
                    

                    <thead>
                     <tr>
                        <th>Bank_Cat</th>
                        <th>Bank_Name</th>
                        <th>Bank_Add</th>
                        <th>Bank_Cont</th>
                        <th>Bank_IFSC</th>
                        <th>Bank_Branch</th>
                        <th>Bank_MICR</th>
                        <th>Bank_Email</th>
                        <th>Bank_Web</th>
                    
                        <th>Edit</th>
                        <th>Delete</th>
                        
                     </tr>
                    </thead>
                     <tbody>
                     @foreach($data as $datas)
                    <tr>
                   
                    <td>{{$datas->BANK_CATEGORY}}</td>
                    <td>{{$datas->BANK_NAME}}</td>
                    <td>{{$datas->BANK_ADDRESS}}</td>
                    <td>{{$datas->BANK_CONTACT}}</td>
                    <td>{{$datas->BANK_IFSC_CODE}}</td>
                    <td>{{$datas->BANK_BRANCH}}</td>
                    <td>{{$datas->BANK_MICR_CODE}}</td>
                    <td>{{$datas->BANK_EMAIL_ID}}</td>
                    <td>{{$datas->BANK_WEBSITE}}</td>
              
                   
                      <td><a href="editbankdetails/{{$datas->id}}" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="deletebank/{{$datas->id}}" class="btn btn-danger btn-sm">Delete</a></td>    
                 </tr> 
                 @endforeach     






        </tbody>
                </table>
                </div>
            </div>



</div>
</div>
</div>
    @stop
@section('javascript')

@stop