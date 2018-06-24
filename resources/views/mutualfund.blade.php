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
                            <span> Mutual Fund Distributor </span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    Mutual Fund Distributor 
                    
                    <a href="{{ Route('downloadmutualfunddetailsExcel',['type'=>'xls']) }}"><button class="btn btn-success">Download Excel xls</button></a>
        		   <a href="{{ Route('downloadmutualfunddetailsExcel',['type'=>'xlsx']) }}"><button class="btn btn-success">Download Excel xlsx</button></a>
        		   <a href="{{ Route('downloadmutualfunddetailsExcel',['type'=>'csv']) }}"><button class="btn btn-success">Download CSV</button></a>
        		    <form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 15px;" action="{{ Route('importmutualfunddetailsExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                        <th>SUBCATEGORY</th>
                        <th>CONTACT</th>
                        <th>ADDRESS</th>
                        <th>CONT</th>
                        <th>AMFI_REGNUM</th>
                        <th>ARN_VALID</th>
                        <th>KYD</th>
                        <th>EUIN</th>
                        <th>EMAIL_ID</th>
                        <th>WEBSITE </th>
                        <th>MSERVICES_OFF</th>
               <th>Edit</th>
                        <th>Delete</th>
                        
                     </tr>
                    </thead>
                     <tbody>
                     @foreach($data as $datas)
                    <tr>
                   
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_CONTACT}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_ADDRESS}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_CONTACT_PERSON}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_AMFI_REGISTRATION_NUMBER}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_ARN_VALIDITY}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_KYD}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_EUIN}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_EMAIL_ID}}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_WEBSITE   }}</td>
                    <td>{{$datas->MUTUAL_FUND_DISTRIBUTOR_SERVICES_OFFERED}}</td>
                   
                      <td><a href="editmutualfund_fetch/{{$datas->id}}" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="deletemutualfund/{{$datas->id}}" class="btn btn-danger btn-sm">Delete</a></td>   
                    
                         
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