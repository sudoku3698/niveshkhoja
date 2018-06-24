<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\models\GetQuote;
use App\models\SendSms;
use DB;

class PublicActivityController extends Controller
{

  public function get_quotes()
  {
    //return GetQuote::get();
    return view('get_quotes',['quotes'=>GetQuote::all()]);
  }

  public function get_service_info(Request $request)
  {
    $data=DB::table($request->service_type)->where(['id'=>$request->service_id])->first();
    return response()->json($data);
  }

  public function get_sms()
  {
    //return GetQuote::get();
    return view('get_sms',['sms'=>SendSms::all()]);
  }

  public function setQuotes(Request $request)
  {
    try {
      $validator = Validator::make($request->all(), [
           'service_type' => 'required',
           'service_id' => 'required|integer',
           'fname' => 'required',
           'mobile' => 'required',
           'email' => 'required|email',
           'message' => 'required'
          ]);
          if ($validator->fails()) 
          {
            $response=array(
              "status"=>0,
              "message"=>"INVALID REQUEST!"
            );
          }else 
          {
            $GetQuote=new GetQuote;
            $GetQuote->service_type=$request->service_type;
            $GetQuote->service_id=$request->service_id;
            $GetQuote->fname=$request->fname;
            $GetQuote->mobile=$request->mobile;
            $GetQuote->email=$request->email;
            $GetQuote->message=$request->message;
            $GetQuote->save();
            if($GetQuote->id)
            {
              $response=array(
                "status"=>1,
                "message"=>"success"
              );
            }else {
              $response=array(
                "status"=>0,
                "message"=>"fail"
              );
            }
         }
    } catch (\Exception $e) {
      $response=array(
        "status"=>0,
        "message"=>"server exception",
        "description"=>$e->getMessage()
      );
    }
    return response()->json($response);
  }


  public function send_sms(Request $request)
  {
    try {
      $validator = Validator::make($request->all(), [
           'send_sms_service_type' => 'required',
           'send_sms_service_id' => 'required|integer',
           'send_sms_mobile' => 'required'
          ]);
          if ($validator->fails()) 
          {
            $response=array(
              "status"=>0,
              "message"=>"INVALID REQUEST!"
            );
          }else 
          {
            $SendSms=new SendSms;
            $SendSms->service_type=$request->send_sms_service_type;
            $SendSms->service_id=$request->send_sms_service_id;
            $SendSms->mobile=$request->send_sms_mobile;
            $SendSms->save();
            if($SendSms->id)
            {
              $response=array(
                "status"=>1,
                "message"=>"success"
              );
            }else {
              $response=array(
                "status"=>0,
                "message"=>"fail"
              );
            }
         }
    } catch (\Exception $e) {
      $response=array(
        "status"=>0,
        "message"=>"server exception",
        "description"=>$e->getMessage()
      );
    }
    return response()->json($response);
  }
}