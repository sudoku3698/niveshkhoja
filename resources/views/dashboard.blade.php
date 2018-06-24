@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12 text-center welcome-message">
                <h2>
                    Welcome to Bank Khoja
                </h2>
              

                <!-- <p>
                    Special <strong>Admin Theme</strong> for medium and large web applications with very clean and
                    aesthetic style and feel.
                </p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Dashboard information and statistics
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <div class="small">
                                    <i class="fa fa-bolt"></i> Page views
                                </div>
                                <div>
                                    <h1 class="font-extra-bold m-t-xl m-b-xs">
                                        226,802
                                    </h1>
                                    <small>Company Agent Views</small>
                                </div>
                                <div class="small m-t-xl">
                                    <i class="fa fa-clock-o"></i> Data from January
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-center small">
                                    <i class="fa fa-laptop"></i> Active users in current month (December)
                                </div>
                                <div class="flot-chart" style="height: 160px">
                                    <div class="flot-chart-content" id="flot-line-chart"></div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="small">
                                    <i class="fa fa-clock-o"></i> Active duration
                                </div>
                                <div>
                                    <h1 class="font-extra-bold m-t-xl m-b-xs">
                                        10 Months
                                    </h1>
                                    <small>And four weeks</small>
                                </div>
                                <div class="small m-t-xl">
                                    <i class="fa fa-clock-o"></i> Last active in 12.10.2015
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    <span class="pull-right">
                          You have two new messages from <a href="">Monica Bolt</a>
                    </span>
                        Last update: 21.05.2015
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Bankdetails']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Bankdetails
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Brokersubbroker']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Brokersubbroker
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
           <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Cfadetails']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Cfadetails
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
           <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Insurance']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Insurance
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>

   <div class="row">
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Loan']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Loan
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Mutualfund']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Mutualfund
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
           <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Mutualfund']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Mutualfund
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
           <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-body text-center h-200">
                        <i class="pe-7s-graph1 fa-4x"></i>

                        <h1 class="m-xs">{{$data['Mutualfund']}}</h1>

                        <h3 class="font-extra-bold no-margins text-success">
                           Mutualfund
                        </h3>
                        <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit vestibulum.</small>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-3">
                <div class="hpanel stats">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Last active
                    </div>
                    <div class="panel-body list">
                        <div class="stats-title pull-left">
                            <h4>Activity</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="pe-7s-science fa-4x"></i>
                        </div>
                        <div class="m-t-xl">
                            <span class="font-bold no-margins">
                                Social users
                            </span>
                            <br/>
                            <small>
                                Lorem Ipsum is simply dummy text of the printing simply all dummy text. Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.
                            </small>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-lg-6">
                                <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                                <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                                <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                        </div>
                        <div class="row m-t-md">
                            <div class="col-lg-6">
                                <h3 class="no-margins font-extra-bold ">120,108</h3>

                                <div class="font-bold">38% <i class="fa fa-level-down"></i></div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="no-margins font-extra-bold ">450,600</h3>

                                <div class="font-bold">28% <i class="fa fa-level-down"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="panel-footer">
                        This is standard panel footer
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Recently active projects
                    </div>
                    <div class="panel-body list">
                        <div class="table-responsive project-list">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th colspan="2">Project</th>
                                    <th>Completed</th>
                                    <th>Task</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="checkbox" class="i-checks" checked></td>
                                    <td>Contract with Zender Company
                                        <br/>
                                        <small><i class="fa fa-clock-o"></i> Created 14.08.2015</small>
                                    </td>
                                    <td>
                                        <span class="pie">1/5</span>
                                    </td>
                                    <td><strong>20%</strong></td>
                                    <td>Jul 14, 2013</td>
                                    <td><a href=""><i class="fa fa-check text-success"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="i-checks"></td>
                                    <td>There are many variations of passages
                                        <br/>
                                        <small><i class="fa fa-clock-o"></i> Created 21.07.2015</small>
                                    </td>
                                    <td>
                                        <span class="pie">1/4</span>
                                    </td>
                                    <td><strong>40%</strong></td>
                                    <td>Jul 16, 2013</td>
                                    <td><a href=""><i class="fa fa-check text-navy"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="i-checks" checked></td>
                                    <td>Contrary to popular belief
                                        <br/>
                                        <small><i class="fa fa-clock-o"></i> Created 12.06.2015</small>
                                    </td>
                                    <td>
                                        <span class="pie">0.52/1.561</span>
                                    </td>
                                    <td><strong>75%</strong></td>
                                    <td>Jul 18, 2013</td>
                                    <td><a href=""><i class="fa fa-check text-navy"></i></a></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="i-checks"></td>
                                    <td>Gamma project
                                        <br/>
                                        <small><i class="fa fa-clock-o"></i> Created 06.03.2015</small>
                                    </td>
                                    <td>
                                        <span class="pie">226/360</span>
                                    </td>
                                    <td><strong>16%</strong></td>
                                    <td>Jul 22, 2013</td>
                                    <td><a href=""><i class="fa fa-check text-navy"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="hpanel">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
                        Activity
                    </div>
                    <div class="panel-body list">

                        <div class="pull-right">
                            <a href="#" class="btn btn-xs btn-default">Today</a>
                            <a href="#" class="btn btn-xs btn-default">Month</a>
                        </div>
                        <div class="panel-title">Last Activity</div>
                        <small class="fo">This is simple example</small>
                        <div class="list-item-container">
                            <div class="list-item">
                                <h3 class="no-margins font-extra-bold text-success">2,773</h3>
                                <small>Tota Messages Sent</small>
                                <div class="pull-right font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                            <div class="list-item">
                                <h3 class="no-margins font-extra-bold text-color3">4,422</h3>
                                <small>Last activity</small>
                                <div class="pull-right font-bold">13% <i class="fa fa-level-down text-color3"></i></div>
                            </div>
                            <div class="list-item">
                                <h3 class="no-margins font-extra-bold text-color3">9,180</h3>
                                <small>Monthly income</small>
                                <div class="pull-right font-bold">22% <i class="fa fa-bolt text-color3"></i></div>
                            </div>
                            <div class="list-item">
                                <h3 class="no-margins font-extra-bold text-success">1,450</h3>
                                <small>Tota Messages Sent</small>
                                <div class="pull-right font-bold">44% <i class="fa fa-level-up text-success"></i></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')

@stop