<?php

namespace App\Http\Controllers\enduser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\models\AddListing;
use Session;
use Validator;
use Response;

class SearchController extends Controller
{
  public function landing()
  {
    $bank_details=DB::table('bank_details')->get();
    $broker_subbroker=DB::table('broker_subbroker')->get();
    $cfa_details=DB::table('cfa_details')->get();
    $insurance_details=DB::table('insurance_details')->get();
    $investment_advisors_details=DB::table('investment_advisors_details')->get();
    $loan_details=DB::table('loan_details')->get();
    $mutual_fund_distributor=DB::table('mutual_fund_distributor')->get();
    $post_office_details=DB::table('post_office_details')->get();
    $research_analyst_details=DB::table('research_analyst_details')->get();
    //dd($bank_details);

    return view('public.index',[
      'bank_details'=>$bank_details,
      'broker_subbroker'=>$broker_subbroker,
      'cfa_details'=>$cfa_details,
      'insurance_details'=>$insurance_details,
      'investment_advisors_details'=>$investment_advisors_details,
      'loan_details'=>$loan_details,
      'mutual_fund_distributor'=>$mutual_fund_distributor,
      'post_office_details'=>$post_office_details,
      'research_analyst_details'=>$research_analyst_details
    ]);
  }

  public function add_listing(Request $request)
  {
    try
    {
      $validator = Validator::make($request->all(),[
          'first_name'=>'required',
          'last_name'=>'required',
          'list_title'=>'required',
          'list_phone'=>'required',
          'listing_email'=>'required',
          'list_addr'=>'required',
          'listing_city'=>'required',
          'listing_description'=>'required',
          'service_type'=>'required'
      ]);

      if($validator->fails())
      {
        $data=array('status'=>1,'message'=>'Invalid Request');
          //$messages = $validator->errors();
      }else
      {
        $AddListing=new AddListing;
        $AddListing->first_name=$request->first_name;
        $AddListing->last_name=$request->last_name;
        $AddListing->listing_title=$request->list_title;
        $AddListing->phone=$request->list_phone;
        $AddListing->email=$request->listing_email;
        $AddListing->address=$request->list_addr;
        $AddListing->city=$request->listing_city;
        $AddListing->description=$request->listing_description;
        $AddListing->service_type=$request->service_type;
        $AddListing->save();
        if($AddListing)
        {
          $data=array('status'=>0,'message'=>'Successfully Submitted!!');
        }else
        {
          $data=array('status'=>1,'message'=>'Failed');
        }
      }
        
    }catch(\Exception $e)
    {
      $data=array('status'=>1,'message'=>'Server Exception!!!!');
    }

    return Response::json($data);

  }


  public function getSearchListByService()
  {
    $service=Session('service');
    
    $table=DB::table($service)
                ->orderBy('rank')
                ->paginate(15);
        if($table)
        {
          $find=1;
        }else
        {
          $find=0;
        }
    return view('public.list',['table'=>$table,'service'=>$service,'find'=>$find]);    
  }

	public function getSerachList()
	{
    $find=false;

    $category_array=Session('category');

    $service=Session('service');
    
    $cities_array=Session('city')!==null?Session('city'):[];
    $cities_final_array=array();
    $cities_final_string='';
    
     foreach($cities_array as $city_arr)
     {
        if(is_numeric($city_arr))
        {
          $city_id=$city_arr;
          $city=DB::select("select city_name from cities where city_id='".$city_id."' limit 1");
          $city=$city[0]->city_name;
          $cities_final_array[]=$city_id;
          $cities_final_array[]=$city;
           
        }else{
          $city=$city_arr;
          $city_id=DB::select("select city_id from cities where city_name='".$city."' limit 1");
          $city_id=$city_id[0]->city_id;
          $cities_final_array[]=$city;
          $cities_final_array[]=$city_id;
        }
     }

    //return $category_array;
     foreach($cities_final_array as $cities_final_arr)
     {
      $cities_final_string=$cities_final_string.", '".$cities_final_arr."'";
     }
     
     $cities_final_string=trim($cities_final_string,",");
     //dd($cities_final_string);
     if($cities_final_array!=null)
     {
       if(count($category_array)>0)
       {
         $table=$this->get_categorywise_list($service,$category_array,$cities_final_array);
        //$table=DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") order by rank");
       }else
       {
        $table=DB::table($service)->whereIn('search_cities', $cities_final_array)->orderBy('rank')->paginate(15);
       }
    		
    		if($table)
    		{
    			$find=1;
    		}else
    		{
    			$find=0;
    		}
     }else
     {
        if(count($category_array)>0)
        {
          $table=$this->get_categorywise_list_without_city($service,$category_array);
        //$table=DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") order by rank");
        }else
        {
        $table=DB::select("select * from ".$service." order by rank");
        }
        
        if($table)
        {
          $find=1;
        }else
        {
          $find=0;
        }
              // $table=[];
              // $find=0;
     }
    return view('public.list',['table'=>$table,'service'=>Session('service'),'find'=>$find]);

              
	}
   

    public function get_categorywise_list_without_city($service,$category_array)
    {
    //   $cat_final_string="";
    //   foreach($category_array as $category_arr)
    //   {
    //     $cat_final_string=$cat_final_string.", '".$category_arr."'";
    //     $cat_final_string=trim($cat_final_string,",");
    //   }
      if($service=='bank_details')
      {
        return DB::table($service)->whereIn('BANK_CATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  BANK_CATEGORY in (".$cat_final_string.") order by rank");  
      }
      if($service=='broker_subbroker')
      {
          return DB::table($service)->whereIn('BROKER_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  BROKER_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='cfa_details')
      {
          return DB::table($service)->whereIn('CFA_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  CFA_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='insurance_details')
      {
          return DB::table($service)->whereIn('INSURANCE_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  INSURANCE_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service =='investment_advisors_details')
      {
          return DB::table($service)->whereIn('INVESTMENT_ADVISORS_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  INVESTMENT_ADVISORS_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='loan_details')
      {
        return DB::table($service)->whereIn('LOAN_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
         //return DB::select("select * from ".$service." where  LOAN_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='mutual_fund_distributor')
      {
          return DB::table($service)->whereIn('MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='post_office_details')
      {
          return DB::table($service)->whereIn('POST_OFFICE_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  POST_OFFICE_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service='research_analyst_details')
      {
          return DB::table($service)->whereIn('RESEARCH_ANALYST_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where  RESEARCH_ANALYST_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
    }

    public function get_categorywise_list($service,$category_array,$cities_final_string)
    {
    //   $cat_final_string="";
    //   foreach($category_array as $category_arr)
    //   {
    //     $cat_final_string=$cat_final_string.", '".$category_arr."'";
    //     $cat_final_string=trim($cat_final_string,",");
    //   }
      if($service=='bank_details')
      {
         return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('BANK_CATEGORY', $category_array)->orderBy('rank')->paginate(15);
        return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and BANK_CATEGORY in (".$cat_final_string.") order by rank");  
      }
      if($service=='broker_subbroker')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('BROKER_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and BROKER_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='cfa_details')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('CFA_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and CFA_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='insurance_details')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('INSURANCE_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and INSURANCE_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service =='investment_advisors_details')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('INVESTMENT_ADVISORS_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and INVESTMENT_ADVISORS_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='loan_details')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('LOAN_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and LOAN_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='mutual_fund_distributor')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service=='post_office_details')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('POST_OFFICE_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and POST_OFFICE_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
      if($service='research_analyst_details')
      {
        return DB::table($service)->whereIn('search_cities', $cities_final_string)->whereIn('RESEARCH_ANALYST_SUBCATEGORY', $category_array)->orderBy('rank')->paginate(15);
        //return DB::select("select * from ".$service." where search_cities in (".$cities_final_string.") and RESEARCH_ANALYST_SUBCATEGORY in (".$cat_final_string.") order by rank"); 
      }
    }

    public function get_service_by_name($service_type)
    {
      Session(['service'=>$service_type]);
      return redirect()->route('search-list-by-service');
    }

    public function searchService(Request $request)
    {
        Session::forget('category');
        $city=$request->city;
        Session(['service_name'=>$request->service]);
        $service=explode(" ",$request->service);
        $implode_service="";
        for($i=0;$i<count($service);$i++)
        {
            $implode_service=$implode_service."_".strtolower($service[$i]);
        }
        $service=trim($implode_service,"_");
        $city_id=DB::select("select city_id from cities where city_name='".$city."' limit 1");
        $city_id=$city_id[0]->city_id;
        Session(['service'=>$service,'city'=>[$city_id]]);
        return redirect()->route('search-list');
        // $table=DB::select("select * from ".$service." where search_cities='".$city."'");
        // return view('public.list',['table'=>$table,'service'=>$service]);
        
    }

    public function add_city_filter(Request $request)
    {

      $cities_array=[];
      if($request->city_check_id==true)
      {
        if(in_array($request->city_id,$cities_array))
        {
        }else
        { 
        $cities_array[]=$request->city_id;
        }
      }else
      {
        if(in_array($request->city_id,$cities_array))
        {
         $key = array_search($request->city_id, $cities_array);
           $cities_array[$key];
           unset($cities_array[$key]);
        }
      }
      Session(['city'=>$cities_array]);
      return response()->json(Session('city'));
    }

    public function add_cat_filter(Request $request)
    {

      $cat_array=Session('category')!=null?Session('category'):[];
      if($request->cat_check_id==true)
      {
        if(in_array($request->cat_id,$cat_array))
        {
        }else
        { 
        $cat_array[]=$request->cat_id;
        }
      }else
      {
        if(in_array($request->cat_id,$cat_array))
        {
          $key = array_search($request->cat_id, $cat_array);
           $cat_array[$key];
           unset($cat_array[$key]);
        }
      }
      Session(['category'=>$cat_array]);
      return response()->json(Session('category'));
    }

   
   public function list_details($service,$id)
   {
      $table=DB::table($service)->where('id', $id)->first();
      $service_list=DB::table($service)->leftjoin('cities', $service.'.search_cities', '=', 'cities.city_id')->whereNotIn($service.'.id', [$id])->orderBy('rank')->get();
      if($service=='bank_details')
      {
        return view('public.bank_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);  
      }
      if($service=='broker_subbroker')
      {
        return view('public.broker_subbroker_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service=='cfa_details')
      {
        return view('public.cfa_details_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service=='insurance_details')
      {
        return view('public.insurance_details_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service =='investment_advisors_details')
      {
        return view('public.investment_advisors_details_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service=='loan_details')
      {
        return view('public.loan_details_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service=='mutual_fund_distributor')
      {
        return view('public.mutual_fund_distributor_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service=='post_office_details')
      {
        return view('public.post_office_details_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
      if($service='research_analyst_details')
      {
        return view('public.research_analyst_details_list_details',['table'=>$table,'service'=>$service,'service_list'=>$service_list]);
      }
   }
}
