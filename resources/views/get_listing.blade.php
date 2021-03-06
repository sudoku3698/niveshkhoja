@extends('layouts.master')

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

                        <th>Listing Title</th>

                        <th>Phone</th>

                        <th>Email</th>

                        <th>Address</th>

                        <th>City</th>

                        <th>Service Type</th>
                     </tr>

                    </thead>

                     <tbody>

                     @foreach($listings as $listing)

                        <tr>

                            <td>{{$listing->id}}</td>

                            <td>{{$listing->first_name}} {{$listing->last_name}}</td>

                            <td>{{$listing->listing_title}}</td>

                            <td>{{$listing->phone}}</td>

                            <td>{{$listing->email}}</td>

                            <td>{{$listing->address}}</td>

                            <td>{{$listing->city}}</td>

                            <td>{{$listing->service_type}}</td>

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
