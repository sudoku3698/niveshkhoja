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
                            <span> CFA Details</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                    CFA Details
                    <a href="{{ Route('downloadcfadetailsExcel',['type'=>'xls']) }}"><button class="btn btn-success">Download Excel xls</button></a>
        		   <a href="{{ Route('downloadcfadetailsExcel',['type'=>'xlsx']) }}"><button class="btn btn-success">Download Excel xlsx</button></a>
        		   <a href="{{ Route('downloadcfadetailsExcel',['type'=>'csv']) }}"><button class="btn btn-success">Download CSV</button></a>
        		    <form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 15px;" action="{{ Route('importcfadetailsExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                        <th>CFA_SUBcat</th>
                        <th>CFA_CONT</th>
                        <th>CFA_ADD</th>
                        <th>CFA_CONT</th>
                        <th>CFA_FPSBI_NUM</th>
                        <th>CFA_NATUREOFEMPL</th>
                        <th>CFA_COMPNAME</th>
                       
                       <th>Edit</th>
                        <th>Delete</th>
                      
                        
                     </tr>
                    </thead>
                     <tbody>
                     @foreach($data as $datas)
                    <tr>
                   
                    <td>{{$datas->CFA_SUBCATEGORY}}</td>
                    <td>{{$datas->CFA_CONTACT}}</td>
                    <td>{{$datas->CFA_ADDRESS}}</td>
                    <td>{{$datas->CFA_CONTACT_PERSON}}</td>
                    <td>{{$datas->CFA_FPSBI_NUMBER}}</td>
                    <td>{{$datas->CFA_NATURE_OF_EMPLOYMENT}}</td>
                    <td>{{$datas->CFA_COMPANY_NAME}}</td>
                  
              <td><a href="editcfacategory_fetch/{{$datas->id}}" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="deletecfa/{{$datas->id}}" class="btn btn-danger btn-sm">Delete</a></td> 
                         
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