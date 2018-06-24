@extends('layouts.master')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel">
                <div class="panel-body">
                    
                <table id="example2" class="table table-striped table-bordered table-hover">
                    <thead>
                     <tr>
                        <th>Service ID</th>

                        <th>Service Type</th>

                        <th>Service Info</th>

                        <th>Mobile</th>

                        <th>Date</th>
                     </tr>

                    </thead>

                     <tbody>

                     @foreach($sms as $sm)

                        <tr>

                            <td>{{$sm->service_id}}</td>

                            <td>{{$sm->service_type}}</td>

                            <th>
                            <a href="#" data-dismiss="modal" data-toggle="modal" 
                            data-servicetype="<?php echo $sm->service_type; ?>" 
                            data-serviceid="<?php echo $sm->service_id; ?>"  
                            data-target="#show-info"><i class="fa fa-commenting-o" aria-hidden="true"></i> Show</a>
                            </th>

                            <td>{{$sm->mobile}}</td>

                            <td>{{$sm->created_at}}</td>

                        </tr> 

                    @endforeach

                    </tbody>

                </table>
                </div>
            </div>
        </div>    
    </div>

    <div class="modal fade dir-pop-com" id="show-info" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header dir-pop-head">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Service Details</h4>
                    <!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
                </div>
                <div class="modal-body dir-pop-body">
                    <div id="show_message"></div>
                </div>
            </div>
        </div>
	</div>
</div>

@stop

@section('javascript')
<script>
    $(document).ready(function(){
        $('#show-info').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var service_type= button.data('servicetype');
        var service_id= button.data('serviceid');
        var modal = $(this);
            $.ajax({
            url: "get_service_info",
            type: 'GET',
            data: { service_type:service_type,service_id:service_id },
            success: function(res) {
                console.log(res);
                response_string="<table border='1'>";
                $.each( res, function( key, value ) {
                response_string+='<tr><th>'+key+'</th><td>'+value+'</td></tr>';
                });
                response_string+="</table>";
                modal.find('#show_message').html(response_string);
            }
            });
        });
    });
</script>
@stop