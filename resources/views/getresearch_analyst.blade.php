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
                            <span> Research  Analyst Details</span>
                        </li>
                    </ol>
                </div>
                <h2 class="font-light m-b-xs">
                   Research  Analyst Details
                   
                   <a href="{{ Route('downloadresearch_analystdetailsExcel',['type'=>'xls']) }}"><button class="btn btn-success">Download Excel xls</button></a>
        		   <a href="{{ Route('downloadresearch_analystdetailsExcel',['type'=>'xlsx']) }}"><button class="btn btn-success">Download Excel xlsx</button></a>
        		   <a href="{{ Route('downloadresearch_analystdetailsExcel',['type'=>'csv']) }}"><button class="btn btn-success">Download CSV</button></a>
        		    <form style="border: 1px solid #a1a1a1;margin-top: 15px;padding: 15px;" action="{{ Route('importresearch_analystdetailsExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
                        <th>ADD</th>
                        <th>CONTACTPER</th>
                        <th>INSURER</th>
                        <th>REGNUM</th>
                        <th>CATEGORY</th>
                        <th>REGVALID_UPTO</th>
                        <!-- <th>RESEARCH_ANALYST_EMAIL_ID</th>
                        <th>RESEARCH_ANALYST_WEBSITE </th>
                       
                        <th>RESEARCH_ANALYST_SERVICES_OFFERED</th>
                        <th>RESEARCH_ANALYST_ABOUT</th>
                        <th>RESEARCH_ANALYST_YEAR_ESTABLISH</th>
                        <th>RESEARCH_ANALYST_REVIEW </th> -->
                        
                        <th>Edit</th>
                        <th>Delete</th>
                     </tr>
                    </thead>
                     <tbody>
                     @foreach($data as $datas)
                    <tr>
                   
                    <td>{{$datas->RESEARCH_ANALYST_SUBCATEGORY}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_CONTACT}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_ADDRESS}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_CONTACT_PERSON}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_INSURER}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_REGISTRATION_NUMBER}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_CATEGORY}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_REGISTRATION_VALID_UPTO}}</td>
                   <!--  <td>{{$datas->RESEARCH_ANALYST_EMAIL_ID}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_WEBSITE}}</td>
                   
                  
                    <td>{{$datas->RESEARCH_ANALYST_SERVICES_OFFERED}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_ABOUT}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_YEAR_ESTABLISH}}</td>
                    <td>{{$datas->RESEARCH_ANALYST_REVIEW}}</td> -->
                   <td><a href="editResearchAnalyst_fetch/{{$datas->id}}" class="btn btn-info btn-sm">Edit</a></td>
                    <td><a href="deleteResearchAnalyst/{{$datas->id}}" class="btn btn-danger btn-sm">Delete</a></td>   
                    
                         
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