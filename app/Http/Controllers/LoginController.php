<?php
namespace App\Http\Controllers;
use App\models\Login;
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

class LoginController extends Controller
{
	function __construct()
    {

    }

	
	
	 public function index(Request $request)
    {
      $v=Validator::make($request->all(),[
      	'username'=>'Required',
      	'password'=>'Required'
      	]);
      if($v->fails())
      {
		$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();
	  }else
	  {
	   $username=$request->username;
       $password=$request->password;
       $check=Login::where(["User_Name"=>$username,"Password"=>$password])->first();
	      if($check)
	      {
	      	Session(['userid' => $check->id,'username'=>$username]);
            return redirect('/dashboard')->with('success', 'Login Successfully');
	      }else
	      {
            return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	      }
	    }

      return Response::json($response);

    }

    public function logout()
    {
    	session::flush();
    	return redirect('/login');
    }
    public function dashboardcount($value='')
    {
    	$data['Bankdetails']=Bankdetails::count();
    	$data['Brokersubbroker']=Brokersubbroker::count();
    	$data['Cfadetails']=Cfadetails::count();
    	$data['Insurance']=Insurance::count();
    	$data['Loan']=Loan::count();
    	$data['Mutualfund']=Mutualfund::count();
    	$data['Postoffice']=Postoffice::count();
    	$data['Investmentadvisors']=Investmentadvisors::count();
    	$data['Researchanalyst']=Researchanalyst::count();

    	return view('dashboard',['data'=>$data]);
    }



}