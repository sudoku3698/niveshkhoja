@extends('layouts.master')
@section('content')
   <style>
     td, th {
      padding: 4px;
    } 
   </style>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                     @if(Session::has('success'))
                     <div class="alert alert-success">
                       <strong>Success!</strong> {{ Session('success') }}
                     </div>
                     @endif
                    </div>
                    <div class="panel-body">
                        
                        <form method="post" action="{{ Route('add_ad') }}" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <table>
                                <tr>
                                    <th><label>Service Type</label></th>
                                    <td>
                                        <div class="form-group">
                                            <select id="service_type" name="service_type" class="form-control" required>
            									<option value="" disabled selected>Select Service Type</option>
            									@foreach(config('service_type.service_types') as $key=>$service_type)
            									<option value="{{$key}}">{{$service_type}}</option>
            									@endforeach
        								    </select>
    								    </div>
    								</td>
                                </tr>
                                <tr>
                                    <th><label>Ad Page</label></th>
                                    <td><div class="form-group"><input type="file" name="ad_page" class="form-control" required></div></td>
                                </tr>
                                <tr>
                                    <th><label>Title</label></th>
                                    <td><div class="form-group"><input type="text" name="title" class="form-control" required></div></td>
                                </tr>
                                <tr>
                                    <th><label>Link</label></th>
                                    <td><div class="form-group"><input type="text" name="link" class="form-control" required></div></td>
                                </tr>
                                 <tr>
                                    <th><label>Min Weight</label></th>
                                    <td>
                                        <div class="form-group" ><select name="min" class="form-control" style="width: 100%">
                                            <?php for($i=1;$i<=100;$i++){ ?>
                                            <option value="<?=$i?>"><?=$i?></option>
                                            <?php }  ?>
                                        </select></div>
                                    </td>
                                </tr>
                                 <tr>
                                    <th><label>Max Weight</label></th>
                                    <td>
                                        <div class="form-group" ><select name="max" class="form-control" style="width: 100%">
                                        <?php for($i=1;$i<=100;$i++){ ?>
                                        <option value="<?=$i?>"><?=$i?></option>
                                        <?php }  ?>
                                    </select></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" value="Add">
                                    </select>
                                    </td>
                                </tr>
                            </table>
                         </form>
                        
                    </div>
                </div>
                @foreach($ads as $ad)
                <div class="hpanel">
                <form method="post" action="{{ Route('delete_ad') }}">
                     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="add_id" value="<?php echo $ad->id; ?>">
                    <div class="panel-heading">{{$ad->title}} ( <u><a href="{{$ad->link}}">{{$ad->link}}</a></u> )</div>
                    <div class="panel-body">
                     
                      <input type="submit" value="delete" onclick="return confirm('Are You Sure?')">
                      <a href="{{asset('public/ad_images/'.$ad->ad_page)}}" onclick="return !window.open(this.href, 'salary_slip', 'width=1200,height=600')" target="_blank"><u>image</u></a>
                        
                          Weight:- Min={{$ad->min}} Max={{$ad->max}}
                    </div>
                  </form>
                </div>
               @endforeach
            </div>
        </div>
    </div>
@stop
@section('javascript')

@stop