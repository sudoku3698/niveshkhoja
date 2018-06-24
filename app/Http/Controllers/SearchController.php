<?php
namespace App\Http\Controllers;
use App\models\Bankdetails;
use App\models\Brokersubbroker;
use App\models\Cfadetails;
use App\models\Insurance;
use App\models\Loan;
use App\models\Mutualfund;
use App\models\Postoffice;
use App\models\Investmentadvisors;
use App\models\Researchanalyst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use Session;
use DB;

class SearchController extends Controller
{
	function __construct()
    {

    }

    public function master_cat()
    {
    	$master_cat=DB::table('master_category')->get();
    	return view('search',['data'=>$master_cat]);
    } 

	public function search_category(Request $request)
    {
  //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'search_cities'=>'required',
			'search_keyword'=>'required'
        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }
        else
        {
		
		       try
		        {  
                  $tableName=$request->search_keyword;
                  $users = DB::table($tableName)->where('search_cities', $request->search_cities)->get();
                  dd($users);


		       	}catch(\Exception $e)
		       	{
				         echo $e->getMessage();
				         exit;
						
						 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
				} 

		}
    }



    

}  