@extends('layouts.master')

@push('scripts')
<script>
function display_review(id,value) {
  var data={};
  var checkBox = document.getElementById(id);
   data.checked=checkBox.checked?'1':'0';
   data.review_id = value;
   $(document).ready(function(){
    $.ajax({
        url:'set_review_status',
        method:'post',
        data:data,
        success:function(data){
            //console.log(data)
        }
    });
   });
}
</script>
@endpush

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
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
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                     <tr>
                        <th>Id</th>

                        <th>Name</th>

                        <th>Mobile</th>

                        <th>Email</th>

                        <th>Review</th>

                        <th>City</th>

                        <th>Service Type</th>

                        <th>Service Id</th>

                        <th>Publish</th>
                     </tr>

                    </thead>

                     <tbody>

                     @foreach($reviews as $listing)

                        <tr>

                            <td>{{$listing->id}}</td>

                            <td>{{$listing->full_name}}</td>

                            <td>{{$listing->mobile}}</td>

                            <td>{{$listing->email}}</td>

                            <td>{{$listing->review}}</td>

                            <td>{{$listing->city}}</td>

                            <td>{{$listing->service_type}}</td>

                            <td>{{$listing->service_id}}</td>

                            <td><input type="checkbox" {{$listing->display_review==1?'checked':''}} class="customcheckbox" value="{{$listing->id}}" id="display_review_{{$listing->id}}" onclick="display_review(this.id,this.value)"></td>

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
