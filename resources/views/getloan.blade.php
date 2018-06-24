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

                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li>
                            <span>Tables</span>
                        </li>
                        <li class="active">
                            <span> LOAN Details</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    LOAN Details
                    
                    <a href="{{ Route('downloadloandetailsExcel',['type'=>'xls']) }}"><button class="btn btn-success">Download Excel xls</button></a>
        		   <a href="{{ Route('downloadloandetailsExcel',['type'=>'xlsx']) }}"><button class="btn btn-success">Download Excel xlsx</button></a>
        		   <a href="{{ Route('downloadloandetailsExcel',['type'=>'csv']) }}"><button class="btn btn-success">Download CSV</button></a>
        		    <form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 15px;" action="{{ Route('importloandetailsExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                        <th>LOAN_SUBCAT</th>
                        <th>LOAN_CONT</th>
                        <th>LOAN_ADD</th>
                        <th>LOAN_CONTP</th>
                        <th>LOAN_EMAIL</th>
                        <th>LOAN_WEB</th>
                 <!--        <th>LOAN_SERVICES_OFFERED</th>
                        <th>LOAN_ABOUT</th>
                        <th>LOAN_YEAR_ESTABLISH</th>
                        <th>LOAN_REVIEW </th> -->
                       <th>Edit</th>
                        <th>Delete</th>
                        
                     </tr>
                    </thead>
                     <tbody>
                     @foreach($data as $datas)
                    <tr>
                   
                    <td>{{$datas->LOAN_SUBCATEGORY}}</td>
                    <td>{{$datas->LOAN_CONTACT}}</td>
                    <td>{{$datas->LOAN_ADDRESS}}</td>
                    <td>{{$datas->LOAN_CONTACT_PERSON}}</td>
                    <td>{{$datas->LOAN_EMAIL_ID}}</td>
                    <td>{{$datas->LOAN_WEBSITE}}</td>
                 <!--    <td>{{$datas->LOAN_SERVICES_OFFERED}}</td>
                    <td>{{$datas->LOAN_ABOUT}}</td>
                    <td>{{$datas->LOAN_YEAR_ESTABLISH}}</td>
                    <td>{{$datas->LOAN_REVIEW}}</td> -->
                     <td><a href="editloan_fetch/{{$datas->id}}" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="deleteloan/{{$datas->id}}" class="btn btn-danger btn-sm">Delete</a></td>   
                    
                    
                         
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