<?php

namespace App\Http\Controllers\logic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cities;
use DB;

class LogicController extends Controller
{
    
    public function get_cities()
    {
        $city_array=array();
        $cities=Cities::all();
        foreach($cities as $city)
        {
            $city_array[$city->city_name]=null;
        }
       return $city_array;
    }

    public function get_tables()
    {
    	$table_array=array();
    	$tables = DB::select('SHOW TABLES');
		foreach($tables as $table)
		{
		      $table_array[$table->Tables_in_niveshkhoj]=null;
		}
		return $table_array;
    }

    public function get_services(Request $request){
        $city=$request->city;
        $service=explode(" ",$request->service);
        $implode_service="";
        for($i=0;$i<count($service);$i++)
        {
            $implode_service=$implode_service."_".strtolower($service[$i]);
        }
        $service=trim($implode_service,"_");
        $table=DB::select("select * from ".$service." where search_cities='".$city."'");
        $str='<ul>
                <li class="col-md-3 col-sm-6">
                    <a href="list.html">
                        <div class="dir-hli-5">
                            <div class="dir-hli-1">
                                <div class="dir-hli-3"><img src="images/hci1.png" alt=""> </div>
                                <div class="dir-hli-4"> </div> <img src="images/services/15.jpg" alt=""> </div>
                            <div class="dir-hli-2">
                                <h4>'.$request->service.' <span class="dir-ho-cat">Show All ('.count($table).')</span></h4> </div>
                        </div>
                    </a>
                </li>
               </ul>';
        echo $str;
    }


    public function get_service_list(Request $request)
    {
        //dd($request->all());
        $city=$request->city;
        $service=explode(" ",$request->service);
        $implode_service="";
        for($i=0;$i<count($service);$i++)
        {
            $implode_service=$implode_service."_".strtolower($service[$i]);
        }
        $service=trim($implode_service,"_");
        $table=DB::select("select * from ".$service." where search_cities='".$city."'")->paginate(10);

        if($table)
        {
            foreach($table as $tbl)
            {
                if($service=="bank_details")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="javascrit:void(0)" onclick="list_details(\''.$service.'\',\''.$tbl->id.'\')"><h3>'.$tbl->BANK_NAME.'</h3></a>
                            <h4>'.$tbl->BANK_BRANCH.'</h4>
                            <p><b>Address:</b> '.$tbl->BANK_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->BANK_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->BANK_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="investment_advisors_details")
                {
                   echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="javascrit:void(0)" onclick="list_details(\''.$service.'\',\''.$tbl->id.'\')"><h3>'.$tbl->INVESTMENT_ADVISORS_NAME.'</h3></a>
                            <h4>'.$tbl->INVESTMENT_ADVISORS_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->INVESTMENT_ADVISORS_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->INVESTMENT_ADVISORS_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->INVESTMENT_ADVISORS_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="broker_subbroker")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->BROKER_RECOMMENDING_BROKER_NAME.'</h3></a>
                            <h4>'.$tbl->BROKER_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->BROKER_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->BROKER_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->BROKER_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="cfa_details")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->CFA_CONTACT_PERSON.'</h3></a>
                            <h4>'.$tbl->CFA_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->CFA_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->CFA_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->CFA_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="insurance_details")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->INSURANCE_CONTACT_PERSON.'</h3></a>
                            <h4>'.$tbl->INSURANCE_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->INSURANCE_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->INSURANCE_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->INSURANCE_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="loan_details")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->LOAN_CONTACT_PERSON.'</h3></a>
                            <h4>'.$tbl->LOAN_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->LOAN_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->LOAN_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->LOAN_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="mutual_fund_distributor")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->MUTUAL_FUND_DISTRIBUTOR_CONTACT_PERSON.'</h3></a>
                            <h4>'.$tbl->MUTUAL_FUND_DISTRIBUTOR_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->MUTUAL_FUND_DISTRIBUTOR_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->MUTUAL_FUND_DISTRIBUTOR_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->MUTUAL_FUND_DISTRIBUTOR_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }
                
                if($service=="post_office_details")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->POST_OFFICE_NAME.'</h3></a>
                            <h4>'.$tbl->POST_OFFICE_REGION.'</h4>
                            <p><b>Address:</b> '.$tbl->POST_OFFICE_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->POST_OFFICE_CONTACT_PERSON.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->POST_OFFICE_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }

                if($service=="research_analyst_details")
                {
                    echo '<div class="home-list-pop list-spac">
                        <!--LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/s10.jpeg" alt="" /> </div>
                        <!--LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc inn-list-pop-desc"> <a href="listing-details.html"><h3>'.$tbl->RESEARCH_ANALYST_CONTACT_PERSON.'</h3></a>
                            <h4>'.$tbl->RESEARCH_ANALYST_ADDRESS.'</h4>
                            <p><b>Address:</b> '.$tbl->RESEARCH_ANALYST_ADDRESS.'</p>
                            <div class="list-number">
                                <ul>
                                    <li><img src="images/icon/phone.png" alt=""> '.$tbl->RESEARCH_ANALYST_CONTACT.'</li>
                                    <li><img src="images/icon/mail.png" alt=""> '.$tbl->RESEARCH_ANALYST_EMAIL_ID.'</li>
                                </ul>
                            </div> <span class="home-list-pop-rat">4.2</span>
                            <div class="list-enqu-btn">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-star-o" aria-hidden="true"></i> Write Review</a> </li>
                                    <li><a href="#!"><i class="fa fa-commenting-o" aria-hidden="true"></i> Send SMS</a> </li>
                                    <li><a href="#!"><i class="fa fa-phone" aria-hidden="true"></i> Call Now</a> </li>
                                    <li><a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#list-quo"><i class="fa fa-usd" aria-hidden="true"></i> Get Quotes</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>';
                }


                
            }
        }else
        {
            echo "<h3>No Record Found</h3>";
        }
        
    }

    public function get_list_detail(Request $request)
    {
      $table="";
      $id="";
      $table=$request->selected_table;
      $id=$request->id;
      $table=DB::select("select * from ".$table." where id='".$id."'");
      return response()->json($table[0]);
    }

    public function getAvailableCities(){
        $cities=array();
        $table=DB::select("select search_cities from bank_details union select search_cities from broker_subbroker union select search_cities from cfa_details union select search_cities from insurance_details union select search_cities from investment_advisors_details union select search_cities from loan_details union select search_cities from mutual_fund_distributor union select search_cities from post_office_details union select search_cities from research_analyst_details");
        foreach($table as $tb)
        {
            if(is_numeric($tb->search_cities))
            {
                $getCity=Cities::where(['city_id'=>$tb->search_cities])->first();
                if($getCity)
                {
                    $cities[$getCity->city_id]=$getCity->city_name;
                }
            }else
            {
                $getCity=Cities::where(['city_name'=>$tb->search_cities])->first();
                if($getCity)
                {
                    $cities[$getCity->city_id]=$getCity->city_name;
                }
            }


        }
       return $cities;
    }
}
