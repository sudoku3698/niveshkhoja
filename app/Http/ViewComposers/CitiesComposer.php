<?php







namespace App\Http\ViewComposers;











use Illuminate\View\View;



use App\models\Cities;
use App\models\Advertisement;
use DB;





class CitiesComposer



{



      public function compose(View $view)
      {
        //dd(Session('service'));
        $image_name=""; 
        $ad_link="";
        $ad_link_array=array();
        $number=rand(1,100);
        $Ads=Advertisement::all();
        foreach($Ads as $Ad)
        {
          if($number>=$Ad->min && $number<=$Ad->max)
          {
            $image_name=$Ad->ad_page; 
            $ad_link_array[]=array('link'=>$Ad->link,'page'=>$Ad->ad_page);
          }
        }
           $ad_link=array_rand($ad_link_array,1);
           // print_r($ad_link_array);
    	   // print_r($ad_link);
    	   // exit;
          $Cities=Cities::orderBy('city_id')->get(['city_id','city_name']);
          $view->with([
			'Cities'=>$Cities,
			'AvailableCities'=>$this->getAvailableCities(),
                        'ad_pic' => $ad_link_array[$ad_link]['page'],
                        'ad_link'=>$ad_link_array[$ad_link]['link']
			]);



	}

	public function getAvailableCities(){
        $cities=array();
        // $table=DB::select("select search_cities from bank_details union select search_cities from broker_subbroker union select search_cities from cfa_details union select search_cities from insurance_details union select search_cities from investment_advisors_details union select search_cities from loan_details union select search_cities from mutual_fund_distributor union select search_cities from post_office_details union select search_cities from research_analyst_details");
        // foreach($table as $tb)
        // {
        //     if(is_numeric($tb->search_cities))
        //     {
        //         $getCity=Cities::where(['city_id'=>$tb->search_cities])->first();
        //         if($getCity)
        //         {
        //             $cities[$getCity->city_id]=$getCity->city_name;
        //         }
        //     }else
        //     {
        //         $getCity=Cities::where(['city_name'=>$tb->search_cities])->first();
        //         if($getCity)
        //         {
        //             $cities[$getCity->city_id]=$getCity->city_name;
        //         }
        //     }


        // }
        $Cities=Cities::all();
        foreach($Cities as $City)
        {
            $cities[$City->city_id]=$City->city_name;
        }
       return $cities;
    }



}