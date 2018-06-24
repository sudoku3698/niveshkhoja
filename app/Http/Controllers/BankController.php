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

class BankController extends Controller
{

    public function bank()
    {
      return view('bankdetails');
    }	
	
	public function addbankdetails(Request $request)
    {
    //     echo "<pre>";
    // 	print_r($request->all());
    // 	exit;
        $response = array();
        $validator = Validator::make($request->all(),[
            'Bank_Category'=>'required',
			'Bank_Name'=>'required',
			'Bank_Address'=>'required',
			'Bank_Contact'=>'required',
			'Bank_IFSC_Code'=>'required',
			'Bank_Branch'=>'required',
			'Bank_MICR_Code'=>'required',
			'Bank_Email_ID'=>'required|email',
			'Bank_Website'=>'required',
			'Bank_Services_Offered'=>'required',
			'Bank_About'=>'required',
			'Bank_Year_Establish'=>'required',
			'Bank_Review'=>'required',
             'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
             
             
			 $BankM= new Bankdetails();
			 $BankM->BANK_NAME=ucwords($request->Bank_Name);
			 $BankM->BANK_ADDRESS=ucwords($request->Bank_Address);
			 $BankM->BANK_CONTACT=$request->Bank_Contact;
			 $BankM->BANK_IFSC_CODE=$request->Bank_IFSC_Code;
			 $BankM->BANK_BRANCH=$request->Bank_Branch;
			 $BankM->BANK_MICR_CODE=$request->Bank_MICR_Code;
			 $BankM->BANK_EMAIL_ID=$request->Bank_Email_ID;
             $BankM->BANK_WEBSITE=$request->Bank_Website;
			 $BankM->BANK_SERVICES_OFFERED=$request->Bank_Services_Offered;
			 $BankM->BANK_ABOUT=$request->Bank_About;
			 $BankM->BANK_YEAR_ESTABLISH=$request->Bank_Year_Establish;
			 $BankM->BANK_REVIEW=$request->Bank_Review;
			 $BankM->BANK_CATEGORY=$request->Bank_Category;
			 $BankM->search_cities=$request->cities;
			 $BankM->rank=$request->rank;
			 $BankM->save();
			  if($BankM->id)
			  {
			      
			   $getbanner = 'bank_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
               $request->banner->move(public_path('banners'), $getbanner);
             
               $getadvertisement = 'bank_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
               $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
               $BankM=Bankdetails::find($BankM->id);
               $BankM->banner=$getbanner;
               $BankM->advertisement=$getadvertisement;
               $BankM->save();
               
			   return redirect('/bank')->with('success', 'Bank details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}
    }


    public function postbrokersubbroker(Request $request)
    {


        $response = array();
        $validator = Validator::make($request->all(),[
            'Broker_Subcategory'=>'required',
			'Broker_Contact'=>'required',
			'Broker_Address'=>'required',
			'Broker_Contact_Person'=>'required',
			'Broker_Registration_Number'=>'required',
			'Broker_Stock_Exchange'=>'required',
			'Broker_Category'=>'required',
			'Broker_Recommending_Broker_Name'=>'required',
			'Broker_Recommending_Broker_Reg_Number'=>'required',
			'Broker_Email_ID'=>'required |email',
			'Broker_Website'=>'required',
			'Broker_Services_Offered'=>'required',
			'Broker_About'=>'required',
			'Broker_Year_Establish'=>'required',
			'Broker_Review'=>'required',
			'Broker'=>'required',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $BrokerM= new Brokersubbroker();
			 $BrokerM->BROKER_SUBCATEGORY=$request->Broker_Subcategory;
			 $BrokerM->BROKER_CONTACT=$request->Broker_Contact;
			 $BrokerM->BROKER_ADDRESS=$request->Broker_Address;
			 $BrokerM->BROKER_CONTACT_PERSON=$request->Broker_Contact_Person;
			 $BrokerM->BROKER_REGISTRATION_NUMBER=$request->Broker_Registration_Number;
			 $BrokerM->BROKER_STOCK_EXCHANGE=$request->Broker_Stock_Exchange;
			 $BrokerM->BROKER_CATEGORY=$request->Broker_Category;
             $BrokerM->BROKER_RECOMMENDING_BROKER_NAME=$request->Broker_Recommending_Broker_Name;
			 $BrokerM->BROKER_RECOMMENDING_BROKER_REG_NUMBER=$request->Broker_Recommending_Broker_Reg_Number;
			 $BrokerM->BROKER_EMAIL_ID=$request->Broker_Email_ID;
			 $BrokerM->BROKER_WEBSITE=$request->Broker_Website;
			 $BrokerM->BROKER_SERVICES_OFFERED=$request->Broker_Services_Offered;
			 $BrokerM->BROKER_ABOUT=$request->Broker_About;
			 $BrokerM->BROKER_YEAR_ESTABLISH=$request->Broker_Year_Establish;
			 $BrokerM->BROKER_REVIEW=$request->Broker_Review;
			 $BrokerM->search_cities=$request->cities;
			 $BrokerM->rank=$request->rank;
			 $BrokerM->save();
			  if($BrokerM->id)
			  {
			   $getbanner = 'brokersubbroker_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
               $request->banner->move(public_path('banners'), $getbanner);
             
               $getadvertisement = 'brokersubbroker_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
               $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
               $BrokerM=Brokersubbroker::find($BrokerM->id);
               $BrokerM->banner=$getbanner;
               $BrokerM->advertisement=$getadvertisement;
               $BrokerM->save();
			   return redirect()->back()->with('success', 'Broker SubBroker details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

    }



public function getbankdetails()
{

$bankdetails=Bankdetails::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('getbankdetails',['data'=>$bankdetails]);

}

public function cfacategory(Request $request)
{
   
  
        $response = array();
        $validator = Validator::make($request->all(),[
            'CFA_Subcategory'=>'required',
			'CFA_Contact'=>'required',
			'CFA_Address'=>'required',
			'CFA_Contact_Person'=>'required',
			'CFA_FPSBI_Number'=>'required',
			'CFA_Nature_of_Employment'=>'required',
			'CFA_Company_Name'=>'required',
			'CFA_Email_ID'=>'required |email',
			'CFA_Website'=>'required',
			'CFA_Services_Offered'=>'required ',
			'CFA_About'=>'required',
			'CFA_Year_Establish'=>'required',
			'CFA_Review'=>'required',
                        'cities'=>'required'
			
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $CfadetailsM= new Cfadetails();
			 $CfadetailsM->CFA_SUBCATEGORY=$request->CFA_Subcategory;
			 $CfadetailsM->CFA_CONTACT=$request->CFA_Contact;
			 $CfadetailsM->CFA_ADDRESS=$request->CFA_Address;
			 $CfadetailsM->CFA_CONTACT_PERSON=$request->CFA_Contact_Person;
			 $CfadetailsM->CFA_FPSBI_NUMBER=$request->CFA_FPSBI_Number;
			 $CfadetailsM->CFA_NATURE_OF_EMPLOYMENT=$request->CFA_Nature_of_Employment;
			 $CfadetailsM->CFA_COMPANY_NAME=$request->CFA_Company_Name;
             $CfadetailsM->CFA_EMAIL_ID=$request->CFA_Email_ID;
			 $CfadetailsM->CFA_WEBSITE=$request->CFA_Website;
			 $CfadetailsM->CFA_SERVICES_OFFERED=$request->CFA_Services_Offered;
			 $CfadetailsM->CFA_ABOUT=$request->CFA_About;
			 $CfadetailsM->CFA_YEAR_ESTABLISH=$request->CFA_Year_Establish;
			 $CfadetailsM->CFA_REVIEW=$request->CFA_Review;
			 $CfadetailsM->search_cities=$request->cities;
			 $CfadetailsM->rank=$request->rank;
			 $CfadetailsM->save();
			  if($CfadetailsM->id)
			  {
			   $getbanner = 'cfa_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
               $request->banner->move(public_path('banners'), $getbanner);
             
               $getadvertisement = 'cfa_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
               $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
               $CfadetailsM=Cfadetails::find($CfadetailsM->id);
               $CfadetailsM->banner=$getbanner;
               $CfadetailsM->advertisement=$getadvertisement;
               $CfadetailsM->save();
			   return redirect()->back()->with('success', 'CFA Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}


public function postinsurance(Request $request)
{
   
// dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Insurance_Subcategory'=>'required',
			'Insurance_Contact'=>'required',
			'Insurance_Address'=>'required',
			'Insurance_Contact_Person'=>'required',
			'Insurance_Insurer'=>'required',
			'Insurance_License_Number'=>'required',
			'Insurance_Irds_URN'=>'required',
			'Insurance_Agent_ID'=>'required ',
			'Insurance_Email_ID'=>'required |email',
			'Insurance_Website'=>'required ',
			'Insurance_Services_Offered'=>'required',
			'Insurance_About'=>'required',
			'Insurance_Year_Establish'=>'required',
			'Insurance_Review'=>'required',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $InsuranceM= new Insurance();
			 $InsuranceM->INSURANCE_SUBCATEGORY=$request->Insurance_Subcategory;
			 $InsuranceM->INSURANCE_CONTACT=$request->Insurance_Contact;
			 $InsuranceM->INSURANCE_ADDRESS=$request->Insurance_Address;
			 $InsuranceM->INSURANCE_CONTACT_PERSON=$request->Insurance_Contact_Person;
			 $InsuranceM->INSURANCE_INSURER=$request->Insurance_Insurer;
			 $InsuranceM->INSURANCE_LICENSE_NUMBER=$request->Insurance_License_Number;
			 $InsuranceM->INSURANCE_IRDS_URN=$request->Insurance_Irds_URN;
             $InsuranceM->INSURANCE_AGENT_ID=$request->Insurance_Agent_ID;
			 $InsuranceM->INSURANCE_EMAIL_ID=$request->Insurance_Email_ID;
			 $InsuranceM->INSURANCE_WEBSITE=$request->Insurance_Website;
			 $InsuranceM->INSURANCE_SERVICES_OFFERED=$request->Insurance_Services_Offered;
			 $InsuranceM->INSURANCE_ABOUT=$request->Insurance_About;
			 $InsuranceM->INSURANCE_YEAR_ESTABLISH=$request->Insurance_Year_Establish;
			 $InsuranceM->INSURANCE_REVIEW=$request->Insurance_Review;
			 $InsuranceM->search_cities=$request->cities;
			 $InsuranceM->rank=$request->rank;
			 $InsuranceM->save();
			  if($InsuranceM->id)
			  {
			  	$getbanner = 'insurance_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
             
               $getadvertisement = 'insurance_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
               $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
               $InsuranceM=Insurance::find($InsuranceM->id);
               $InsuranceM->banner=$getbanner;
               $InsuranceM->advertisement=$getadvertisement;
               $InsuranceM->save();
			   return redirect()->back()->with('success', 'Insurance Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}


public function postloan(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Loan_Subcategory'=>'required',
			'Loan_Contact'=>'required',
			'Loan_Address'=>'required',
			'Loan_Contact_Person'=>'required',
			'Loan_Email_ID'=>'required |email',
			'Loan_Website'=>'required',
			'Loan_Services_Offered'=>'required',
			'Loan_About'=>'required ',
			'Loan_Year_Establish'=>'required ',
			'Loan_Review'=>'required',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $LoanM= new Loan();
			 $LoanM->LOAN_SUBCATEGORY=$request->Loan_Subcategory;
			 $LoanM->LOAN_CONTACT=$request->Loan_Contact;
			 $LoanM->LOAN_ADDRESS=$request->Loan_Address;
			 $LoanM->LOAN_CONTACT_PERSON=$request->Loan_Contact_Person;
			 $LoanM->LOAN_EMAIL_ID=$request->Loan_Email_ID;
			 $LoanM->LOAN_WEBSITE=$request->Loan_Website;
			 $LoanM->LOAN_SERVICES_OFFERED=$request->Loan_Services_Offered;
             $LoanM->LOAN_ABOUT=$request->Loan_About;
			 $LoanM->LOAN_YEAR_ESTABLISH=$request->Loan_Year_Establish;
			 $LoanM->LOAN_REVIEW=$request->Loan_Review;
			 $LoanM->search_cities=$request->cities;
			 $LoanM->save();
			  if($LoanM->id)
			  {
			  	$getbanner = 'loan_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
             
                $getadvertisement = 'loan_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
                $LoanM=Loan::find($LoanM->id);
                $LoanM->banner=$getbanner;
                $LoanM->advertisement=$getadvertisement;
                $LoanM->save();
			   return redirect()->back()->with('success', 'Loan Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}




public function postmutual_fund(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Mutual_Fund_Distributor_Subcategory'=>'required',
			'Mutual_Fund_Distributor_Contact'=>'required',
			'Mutual_Fund_Distributor_Address'=>'required',
			'Mutual_Fund_Distributor_Contact_Person'=>'required',
			'Mutual_Fund_Distributor_AMFI_Registration_Number'=>'required',
			'Mutual_Fund_Distributor_ARN_Validity'=>'required',
			'Mutual_Fund_Distributor_KYD'=>'required',
			'Mutual_Fund_Distributor_EUIN'=>'required ',
			'Mutual_Fund_Distributor_Email_ID'=>'required  |email',
			'Mutual_Fund_Distributor_Website'=>'required',
			'Mutual_Fund_Distributor_Services_Offered'=>'required',
			'Mutual_Fund_Distributor_About'=>'required ',
			'Mutual_Fund_Distributor_Year_Establish'=>'required ',
			'Mutual_Fund_Distributor_Review'=>'required',
                        'cities'=>'required'

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $Mutual_fundM= new Mutualfund();
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY=$request->Mutual_Fund_Distributor_Subcategory;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_CONTACT=$request->Mutual_Fund_Distributor_Contact;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_ADDRESS=$request->Mutual_Fund_Distributor_Address;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_CONTACT_PERSON=$request->Mutual_Fund_Distributor_Contact_Person;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_AMFI_REGISTRATION_NUMBER=$request->Mutual_Fund_Distributor_AMFI_Registration_Number;

			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_ARN_VALIDITY=$request->Mutual_Fund_Distributor_ARN_Validity;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_KYD=$request->Mutual_Fund_Distributor_KYD;
             $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_EUIN=$request->Mutual_Fund_Distributor_EUIN;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_EMAIL_ID=$request->Mutual_Fund_Distributor_Email_ID;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_WEBSITE=$request->Mutual_Fund_Distributor_Website;

			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_SERVICES_OFFERED=$request->Mutual_Fund_Distributor_Services_Offered;
             $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_ABOUT=$request->Mutual_Fund_Distributor_About;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_YEAR_ESTABLISH=$request->Mutual_Fund_Distributor_Year_Establish;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_REVIEW=$request->Mutual_Fund_Distributor_Review;
			 $Mutual_fundM->search_cities=$request->cities;
			 $Mutual_fundM->rank=$request->rank;
			 $Mutual_fundM->save();
			  if($Mutual_fundM->id)
			  {
			  	$getbanner = 'mutual_fund_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
             
                $getadvertisement = 'mutual_fund_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
                $Mutual_fundM=Mutualfund::find($Mutual_fundM->id);
                $Mutual_fundM->banner=$getbanner;
                $Mutual_fundM->advertisement=$getadvertisement;
                $Mutual_fundM->save();
			   return redirect()->back()->with('success', 'Mutualfund Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}


public function postoffice(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Post_Office_Subcategory'=>'required',
			'Post_Office_Name'=>'required',
			'Post_Office_Address'=>'required',
			'Post_Office_Contact_Person'=>'required',
			'Post_Office_Pin_Code'=>'required',
			'Post_Office_Type'=>'required',
			'Post_Office_Delivery'=>'required',
			'Post_Office_Region'=>'required ',
			'Post_Office_Circle'=>'required  ',
			'Post_Office_Email_ID'=>'required |email',
			'Post_Office_Website'=>'required',
			'Post_Office_Services_Offered'=>'required ',
			'Post_Office_About'=>'required ',
			'Post_Office_Year_Establish'=>'required',
			'Post_Office_Review'=>'required',
            'cities'=>'required'

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $PostM= new Postoffice();
			 $PostM->POST_OFFICE_SUBCATEGORY=$request->Post_Office_Subcategory;
			 $PostM->POST_OFFICE_NAME=$request->Post_Office_Name;
			 $PostM->POST_OFFICE_ADDRESS=$request->Post_Office_Address;
			 $PostM->POST_OFFICE_CONTACT_PERSON=$request->Post_Office_Contact_Person;
			 $PostM->POST_OFFICE_PIN_CODE=$request->Post_Office_Pin_Code;

			 $PostM->POST_OFFICE_TYPE=$request->Post_Office_Type;
			 $PostM->POST_OFFICE_DELIVERY=$request->Post_Office_Delivery;
             $PostM->POST_OFFICE_REGION=$request->Post_Office_Region;
			 $PostM->POST_OFFICE_CIRCLE=$request->Post_Office_Circle;
			 $PostM->POST_OFFICE_EMAIL_ID=$request->Post_Office_Email_ID;

			 $PostM->POST_OFFICE_WEBSITE=$request->Post_Office_Website;
             $PostM->POST_OFFICE_SERVICES_OFFERED=$request->Post_Office_Services_Offered;
			 $PostM->POST_OFFICE_ABOUT=$request->Post_Office_About;
			 $PostM->POST_OFFICE_YEAR_ESTABLISH=$request->Post_Office_Year_Establish;
			 $PostM->POST_OFFICE_REVIEW=$request->Post_Office_Review;
			 $PostM->search_cities=$request->cities;
			 $PostM->rank=$request->rank;
			 $PostM->save();
			  if($PostM->id)
			  {
			  	$getbanner = 'postoffice_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
             
                $getadvertisement = 'postoffice_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
                $PostM=Postoffice::find($PostM->id);
                $PostM->banner=$getbanner;
                $PostM->advertisement=$getadvertisement;
                $PostM->save();
			   return redirect()->back()->with('success', 'Post Office Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}

public function postinvestment_advisors(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Investment_Advisors_Subcategory'=>'required',
			'Investment_Advisors_Name'=>'required',
			'Investment_Advisors_Address'=>'required',
			'Investment_Advisors_Contact'=>'required',
			'Investment_Advisors_Email_ID'=>'required |email',
			'Investment_Advisors_Website'=>'required',
			'Investment_Advisors_Services_Offered'=>'required',
			'Investment_Advisors_About'=>'required ',
			'Investment_Advisors_Year_Establish'=>'required  ',
			'Investment_Advisors_Review'=>'required ',
            'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $PostM= new Investmentadvisors();
			 $PostM->INVESTMENT_ADVISORS_SUBCATEGORY=$request->Investment_Advisors_Subcategory;
			 $PostM->INVESTMENT_ADVISORS_NAME=$request->Investment_Advisors_Name;
			 $PostM->INVESTMENT_ADVISORS_ADDRESS=$request->Investment_Advisors_Address;
			 $PostM->INVESTMENT_ADVISORS_CONTACT=$request->Investment_Advisors_Contact;
			 $PostM->INVESTMENT_ADVISORS_EMAIL_ID=$request->Investment_Advisors_Email_ID;

			 $PostM->INVESTMENT_ADVISORS_WEBSITE=$request->Investment_Advisors_Website;
			 $PostM->INVESTMENT_ADVISORS_SERVICES_OFFERED=$request->Investment_Advisors_Services_Offered;
             $PostM->INVESTMENT_ADVISORS_ABOUT=$request->Investment_Advisors_About;
			 $PostM->INVESTMENT_ADVISORS_YEAR_ESTABLISH=$request->Investment_Advisors_Year_Establish;
			 $PostM->INVESTMENT_ADVISORS_REVIEW=$request->Investment_Advisors_Review;
			 $PostM->search_cities=$request->cities;
			 $PostM->rank=$request->rank;
			 $PostM->save();
			  if($PostM->id)
			  {
			  	$getbanner = 'investment_advisors_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
             
                $getadvertisement = 'investment_advisors_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
                $PostM=Investmentadvisors::find($PostM->id);
                $PostM->banner=$getbanner;
                $PostM->advertisement=$getadvertisement;
                $PostM->save();
			   return redirect()->back()->with('success', 'Investment Advisors Office Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}



public function postresearch_analyst(Request $request)
{
   

        $response = array();
        $validator = Validator::make($request->all(),[
            'Research_Analyst_Subcategory'=>'required',
			'Research_Analyst_Contact'=>'required',
			'Research_Analyst_Address'=>'required',
			'Research_Analyst_Contact_Person'=>'required',
			'Research_Analyst_Insurer'=>'required ',
			'Research_Analyst_Registration_Number'=>'required',
			'Research_Analyst_Category'=>'required',
			'Research_Analyst_Registration_Valid_Upto'=>'required ',
			'Research_Analyst_Email_ID'=>'required  |email',
			'Research_Analyst_Website'=>'required ',

			 'Research_Analyst_Services_Offered' => 'required ',
			  'Research_Analyst_About' => 'required ',
			  'Research_Analyst_Year_Establish' => 'required ',
			  'Research_Analyst_Review' => 'required ',
                         'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
			 $PostM= new Researchanalyst();
			 $PostM->RESEARCH_ANALYST_SUBCATEGORY=$request->Research_Analyst_Subcategory;
			 $PostM->RESEARCH_ANALYST_CONTACT=$request->Research_Analyst_Contact;
			 $PostM->RESEARCH_ANALYST_ADDRESS=$request->Research_Analyst_Address;
			 $PostM->RESEARCH_ANALYST_CONTACT_PERSON=$request->Research_Analyst_Contact_Person;
			 $PostM->RESEARCH_ANALYST_INSURER=$request->Research_Analyst_Insurer;

			 $PostM->RESEARCH_ANALYST_REGISTRATION_NUMBER=$request->Research_Analyst_Registration_Number;
			 $PostM->RESEARCH_ANALYST_CATEGORY=$request->Research_Analyst_Category;
             $PostM->RESEARCH_ANALYST_REGISTRATION_VALID_UPTO=$request->Research_Analyst_Registration_Valid_Upto;
			 $PostM->RESEARCH_ANALYST_EMAIL_ID=$request->Research_Analyst_Email_ID;
			 $PostM->RESEARCH_ANALYST_WEBSITE=$request->Research_Analyst_Website;

		     $PostM->RESEARCH_ANALYST_SERVICES_OFFERED=$request->Research_Analyst_Services_Offered;
             $PostM->RESEARCH_ANALYST_ABOUT=$request->Research_Analyst_About;
			 $PostM->RESEARCH_ANALYST_YEAR_ESTABLISH=$request->Research_Analyst_Year_Establish;
			 $PostM->RESEARCH_ANALYST_REVIEW=$request->Research_Analyst_Review;
			 $PostM->search_cities=$request->cities;
			 $PostM->rank=$request->rank;
			 $PostM->save();
			  if($PostM->id)
			  {
			  	$getbanner = 'research_analyst_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
             
                $getadvertisement = 'research_analyst_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                $request->advertisement->move(public_path('advertisements'), $getadvertisement);
               
                $PostM=Researchanalyst::find($PostM->id);
                $PostM->banner=$getbanner;
                $PostM->advertisement=$getadvertisement;
                $PostM->save();
			   return redirect()->back()->with('success', 'Research Analyst Office Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}

public function getbrokersubbroker()
{

$Brokersubbroker=Brokersubbroker::where('is_deleted','=',0)->orderBy('id','desc')->get();
//dd($Brokersubbroker);
return view('getbrokersubbroker',['data'=>$Brokersubbroker]);

}

public function getcfacategory()
{

$cfacategory=Cfadetails::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('cfadetails',['data'=>$cfacategory]);

}

public function getmutual_fund()
{

$getmutual_fund=Mutualfund::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('mutualfund',['data'=>$getmutual_fund]);

}

public function getloan()
{

$getloan=Loan::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('getloan',['data'=>$getloan]);

}

public function getInsurance()
{

$getInsurance=Insurance::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('getInsurance',['data'=>$getInsurance]);

}



public function getpostoffice()
{

$getpostoffice=Postoffice::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('getpostoffice',['data'=>$getpostoffice]);

}


public function getinvestment_advisors()
{

$getinvestment_advisors=Investmentadvisors::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('getinvestment_advisors',['data'=>$getinvestment_advisors]);

}



public function getresearch_analyst()
{

$getresearch_analyst=Researchanalyst::where('is_deleted','=',0)->orderBy('id','desc')->get();
return view('getresearch_analyst',['data'=>$getresearch_analyst]);

}



public function getbankdetails_fetch($id)
{

$getbankdetails_fetch=Bankdetails::find($id);
//dd($getbankdetails_fetch);
return view('getbankdetails_fetch',['data'=>$getbankdetails_fetch]);

}



public function updatebankdetails(Request $request)
{
   //  dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[

            'Bank_Category'=>'required',
			'Bank_Name'=>'required',
			'Bank_Address'=>'required',
			'Bank_Contact'=>'required',
			'Bank_IFSC_Code'=>'required',
			'Bank_Branch'=>'required',
			'Bank_MICR_Code'=>'required',
			'Bank_Email_ID'=>'required|email',
			'Bank_Website'=>'required',
			'Bank_Services_Offered'=>'required',
			'Bank_About'=>'required',
			'Bank_Year_Establish'=>'required',
			'Bank_Review'=>'required',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
             $BankM=Bankdetails::where('id','=',$request->Bank_id)->first();
			
			 //$BankM= new Bankdetails();
			 $BankM->BANK_NAME=ucwords($request->Bank_Name);
			 $BankM->BANK_ADDRESS=ucwords($request->Bank_Address);
			 $BankM->BANK_CONTACT=$request->Bank_Contact;
			 $BankM->BANK_IFSC_CODE=$request->Bank_IFSC_Code;
			 $BankM->BANK_BRANCH=$request->Bank_Branch;
			 $BankM->BANK_MICR_CODE=$request->Bank_MICR_Code;
			 $BankM->BANK_EMAIL_ID=$request->Bank_Email_ID;
             $BankM->BANK_WEBSITE=$request->Bank_Website;
			 $BankM->BANK_SERVICES_OFFERED=$request->Bank_Services_Offered;
			 $BankM->BANK_ABOUT=$request->Bank_About;
			 $BankM->BANK_YEAR_ESTABLISH=$request->Bank_Year_Establish;
			 $BankM->BANK_REVIEW=$request->Bank_Review;
			 $BankM->BANK_CATEGORY=$request->Bank_Category;
			 $BankM->search_cities=$request->cities;
			 $BankM->rank=$request->rank;
			 $BankM->save();
			  if($BankM->id)
			  {
			   if($request->banner)
			   {
			       
                    if (file_exists(public_path('banners/'.$BankM->banner)) && $BankM->banner!="")
                    {
                        unlink(public_path('banners/'.$BankM->banner));
                    }
                    		         
			  	$getbanner = 'bank_details_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('banners'), $getbanner);
                $BankM=Bankdetails::find($BankM->id);
                $BankM->banner=$getbanner;
                $BankM->save();
			   }
               if($request->advertisement)
			   {
    		        if (file_exists(public_path('advertisements/'.$BankM->advertisement)) && $BankM->advertisement!="")
                    {
                        unlink(public_path('advertisements/'.$BankM->advertisement));
                    }
			     
                $getadvertisement = 'bank_details_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                $BankM=Bankdetails::find($BankM->id);
                $BankM->advertisement=$getadvertisement;
                $BankM->save();
			   }
			   return redirect('/editbankdetails/'.$request->Bank_id)->with('success', 'Bank details Update Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}

public function broker_add_fetch($id)
{

$broker_add_fetch=Brokersubbroker::find($id);
//dd($getbankdetails_fetch);
return view('updatesubbroker',['data'=>$broker_add_fetch]);

}


    public function updatebrokersubbroker(Request $request)
    {


        $response = array();
        $validator = Validator::make($request->all(),[
            'Broker_Subcategory'=>'required',
			'Broker_Contact'=>'required',
			'Broker_Address'=>'required',
			'Broker_Contact_Person'=>'required',
			'Broker_Registration_Number'=>'required',
			'Broker_Stock_Exchange'=>'required',
			'Broker_Category'=>'required',
			'Broker_Recommending_Broker_Name'=>'required',
			'Broker_Recommending_Broker_Reg_Number'=>'required',
			'Broker_Email_ID'=>'required |email',
			'Broker_Website'=>'required',
			'Broker_Services_Offered'=>'required',
			'Broker_About'=>'required',
			'Broker_Year_Establish'=>'required',
			'Broker_Review'=>'required',
			'Broker'=>'required',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
      
 $BrokerM=Brokersubbroker::where('id','=',$request->id)->first();

			// $BrokerM= new Brokersubbroker();
			 $BrokerM->BROKER_SUBCATEGORY=$request->Broker_Subcategory;
			 $BrokerM->BROKER_CONTACT=$request->Broker_Contact;
			 $BrokerM->BROKER_ADDRESS=$request->Broker_Address;
			 $BrokerM->BROKER_CONTACT_PERSON=$request->Broker_Contact_Person;
			 $BrokerM->BROKER_REGISTRATION_NUMBER=$request->Broker_Registration_Number;
			 $BrokerM->BROKER_STOCK_EXCHANGE=$request->Broker_Stock_Exchange;
			 $BrokerM->BROKER_CATEGORY=$request->Broker_Category;
             $BrokerM->BROKER_RECOMMENDING_BROKER_NAME=$request->Broker_Recommending_Broker_Name;
			 $BrokerM->BROKER_RECOMMENDING_BROKER_REG_NUMBER=$request->Broker_Recommending_Broker_Reg_Number;
			 $BrokerM->BROKER_EMAIL_ID=$request->Broker_Email_ID;
			 $BrokerM->BROKER_WEBSITE=$request->Broker_Website;
			 $BrokerM->BROKER_SERVICES_OFFERED=$request->Broker_Services_Offered;
			 $BrokerM->BROKER_ABOUT=$request->Broker_About;
			 $BrokerM->BROKER_YEAR_ESTABLISH=$request->Broker_Year_Establish;
			 $BrokerM->BROKER_REVIEW=$request->Broker_Review;
			 $BrokerM->search_cities=$request->cities;
			 $BrokerM->rank=$request->rank;
			 $BrokerM->save();
			  if($BrokerM->id)
			  {
    			  if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$BrokerM->banner)) && $BrokerM->banner!="")
                        {
                            unlink(public_path('banners/'.$BrokerM->banner));
                        }
                        		         
    			  	$getbanner = 'brokersubbroker_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $BrokerM=Brokersubbroker::find($BrokerM->id);
                    $BrokerM->banner=$getbanner;
                    $BrokerM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$BrokerM->advertisement)) && $BrokerM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$BrokerM->advertisement));
                        }
    			     
                    $getadvertisement = 'brokersubbroker_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $BrokerM=Brokersubbroker::find($BrokerM->id);
                    $BrokerM->advertisement=$getadvertisement;
                    $BrokerM->save();
    			   }
			   return redirect()->back()->with('success', 'Broker SubBroker details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

    }

public function postcfacategory_fetch($id)
{

$postcfacategory_fetch=Cfadetails::find($id);
//dd($getbankdetails_fetch);
return view('updatecfacategory',['data'=>$postcfacategory_fetch]);

}



public function updatecfacategory(Request $request)
{
   
  
        $response = array();
        $validator = Validator::make($request->all(),[
            'CFA_Subcategory'=>'required',
			'CFA_Contact'=>'required',
			'CFA_Address'=>'required',
			'CFA_Contact_Person'=>'required',
			'CFA_FPSBI_Number'=>'required',
			'CFA_Nature_of_Employment'=>'required',
			'CFA_Company_Name'=>'required',
			'CFA_Email_ID'=>'required |email',
			'CFA_Website'=>'required',
			'CFA_Services_Offered'=>'required ',
			'CFA_About'=>'required',
			'CFA_Year_Establish'=>'required',
			'CFA_Review'=>'required',
                        'cities'=>'required'
			
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{     

            $CfadetailsM=Cfadetails::where('id','=',$request->id)->first();
			 //$CfadetailsM= new Cfadetails();
			 $CfadetailsM->CFA_SUBCATEGORY=$request->CFA_Subcategory;
			 $CfadetailsM->CFA_CONTACT=$request->CFA_Contact;
			 $CfadetailsM->CFA_ADDRESS=$request->CFA_Address;
			 $CfadetailsM->CFA_CONTACT_PERSON=$request->CFA_Contact_Person;
			 $CfadetailsM->CFA_FPSBI_NUMBER=$request->CFA_FPSBI_Number;
			 $CfadetailsM->CFA_NATURE_OF_EMPLOYMENT=$request->CFA_Nature_of_Employment;
			 $CfadetailsM->CFA_COMPANY_NAME=$request->CFA_Company_Name;
             $CfadetailsM->CFA_EMAIL_ID=$request->CFA_Email_ID;
			 $CfadetailsM->CFA_WEBSITE=$request->CFA_Website;
			 $CfadetailsM->CFA_SERVICES_OFFERED=$request->CFA_Services_Offered;
			 $CfadetailsM->CFA_ABOUT=$request->CFA_About;
			 $CfadetailsM->CFA_YEAR_ESTABLISH=$request->CFA_Year_Establish;
			 $CfadetailsM->CFA_REVIEW=$request->CFA_Review;
			 $CfadetailsM->search_cities=$request->cities;
			 $CfadetailsM->rank=$request->rank;
			 $CfadetailsM->save();
			  if($CfadetailsM->id)
			  {
		           if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$CfadetailsM->banner)) && $CfadetailsM->banner!="")
                        {
                            unlink(public_path('banners/'.$CfadetailsM->banner));
                        }
                        		         
    			  	$getbanner = 'cfa_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $CfadetailsM=Cfadetails::find($CfadetailsM->id);
                    $CfadetailsM->banner=$getbanner;
                    $CfadetailsM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$CfadetailsM->advertisement)) && $CfadetailsM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$CfadetailsM->advertisement));
                        }
    			     
                    $getadvertisement = 'cfa_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $CfadetailsM=Cfadetails::find($CfadetailsM->id);
                    $CfadetailsM->advertisement=$getadvertisement;
                    $CfadetailsM->save();
    			   }
			   return redirect()->back()->with('success', 'CFA Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}

public function updatepostinsurance_fetch($id)
{

$updatepostinsurance_fetch=Insurance::find($id);
//dd($getbankdetails_fetch);
return view('updatepostinsurance',['data'=>$updatepostinsurance_fetch]);

}

public function updatepostinsurance(Request $request)
{
   
// dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Insurance_Subcategory'=>'required',
			'Insurance_Contact'=>'required',
			'Insurance_Address'=>'required',
			'Insurance_Contact_Person'=>'required',
			'Insurance_Insurer'=>'required',
			'Insurance_License_Number'=>'required',
			'Insurance_Irds_URN'=>'required',
			'Insurance_Agent_ID'=>'required ',
			'Insurance_Email_ID'=>'required |email',
			'Insurance_Website'=>'required ',
			'Insurance_Services_Offered'=>'required',
			'Insurance_About'=>'required',
			'Insurance_Year_Establish'=>'required',
			'Insurance_Review'=>'required',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     $InsuranceM=Insurance::where('id','=',$request->id)->first();
			 //$InsuranceM= new Insurance();
			 $InsuranceM->INSURANCE_SUBCATEGORY=$request->Insurance_Subcategory;
			 $InsuranceM->INSURANCE_CONTACT=$request->Insurance_Contact;
			 $InsuranceM->INSURANCE_ADDRESS=$request->Insurance_Address;
			 $InsuranceM->INSURANCE_CONTACT_PERSON=$request->Insurance_Contact_Person;
			 $InsuranceM->INSURANCE_INSURER=$request->Insurance_Insurer;
			 $InsuranceM->INSURANCE_LICENSE_NUMBER=$request->Insurance_License_Number;
			 $InsuranceM->INSURANCE_IRDS_URN=$request->Insurance_Irds_URN;
             $InsuranceM->INSURANCE_AGENT_ID=$request->Insurance_Agent_ID;
			 $InsuranceM->INSURANCE_EMAIL_ID=$request->Insurance_Email_ID;
			 $InsuranceM->INSURANCE_WEBSITE=$request->Insurance_Website;
			 $InsuranceM->INSURANCE_SERVICES_OFFERED=$request->Insurance_Services_Offered;
			 $InsuranceM->INSURANCE_ABOUT=$request->Insurance_About;
			 $InsuranceM->INSURANCE_YEAR_ESTABLISH=$request->Insurance_Year_Establish;
			 $InsuranceM->INSURANCE_REVIEW=$request->Insurance_Review;
			 $InsuranceM->search_cities=$request->cities;
			 $InsuranceM->rank=$request->rank;
			 $InsuranceM->save();
			  if($InsuranceM->id)
			  {
			  	 if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$InsuranceM->banner)) && $InsuranceM->banner!="")
                        {
                            unlink(public_path('banners/'.$InsuranceM->banner));
                        }
                        		         
    			  	$getbanner = 'insurance_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $InsuranceM=Insurance::find($InsuranceM->id);
                    $InsuranceM->banner=$getbanner;
                    $InsuranceM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$InsuranceM->advertisement)) && $InsuranceM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$InsuranceM->advertisement));
                        }
    			     
                    $getadvertisement = 'insurance_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $InsuranceM=Insurance::find($InsuranceM->id);
                    $InsuranceM->advertisement=$getadvertisement;
                    $InsuranceM->save();
    			   }
			   return redirect()->back()->with('success', 'Insurance Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}

public function updateloan_fetch($id)
{

$updateloan_fetch=Loan::find($id);
//dd($getbankdetails_fetch);
return view('updateloan',['data'=>$updateloan_fetch]);

}

public function updatepostloan(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Loan_Subcategory'=>'required',
			'Loan_Contact'=>'required',
			'Loan_Address'=>'required',
			'Loan_Contact_Person'=>'required',
			'Loan_Email_ID'=>'required |email',
			'Loan_Website'=>'required',
			'Loan_Services_Offered'=>'required',
			'Loan_About'=>'required ',
			'Loan_Year_Establish'=>'required ',
			'Loan_Review'=>'required',
			'cities'=>'required'
 
        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     
      $LoanM=Loan::where('id','=',$request->id)->first();
			// $LoanM= new Loan();
			 $LoanM->LOAN_SUBCATEGORY=$request->Loan_Subcategory;
			 $LoanM->LOAN_CONTACT=$request->Loan_Contact;
			 $LoanM->LOAN_ADDRESS=$request->Loan_Address;
			 $LoanM->LOAN_CONTACT_PERSON=$request->Loan_Contact_Person;
			 $LoanM->LOAN_EMAIL_ID=$request->Loan_Email_ID;
			 $LoanM->LOAN_WEBSITE=$request->Loan_Website;
			 $LoanM->LOAN_SERVICES_OFFERED=$request->Loan_Services_Offered;
             $LoanM->LOAN_ABOUT=$request->Loan_About;
			 $LoanM->LOAN_YEAR_ESTABLISH=$request->Loan_Year_Establish;
			 $LoanM->LOAN_REVIEW=$request->Loan_Review;
			 $LoanM->search_cities=$request->cities;
			 $LoanM->rank=$request->rank;
			 $LoanM->save();
			  if($LoanM->id)
			  {
			  	if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$LoanM->banner)) && $LoanM->banner!="")
                        {
                            unlink(public_path('banners/'.$LoanM->banner));
                        }
                        		         
    			  	$getbanner = 'loan_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $LoanM=Loan::find($LoanM->id);
                    $LoanM->banner=$getbanner;
                    $LoanM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$LoanM->advertisement)) && $LoanM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$LoanM->advertisement));
                        }
    			     
                    $getadvertisement = 'loan_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $LoanM=Loan::find($LoanM->id);
                    $LoanM->advertisement=$getadvertisement;
                    $LoanM->save();
    			   }
			   return redirect()->back()->with('success', 'Loan Details Added Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}

public function updatemutualfund_fetch($id)
{

$updatemutualfund_fetch=Mutualfund::find($id);
//dd($getbankdetails_fetch);
return view('updatemutual_fund',['data'=>$updatemutualfund_fetch]);

}

public function updatepostmutual_fund(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Mutual_Fund_Distributor_Subcategory'=>'required',
			'Mutual_Fund_Distributor_Contact'=>'required',
			'Mutual_Fund_Distributor_Address'=>'required',
			'Mutual_Fund_Distributor_Contact_Person'=>'required',
			'Mutual_Fund_Distributor_AMFI_Registration_Number'=>'required',
			'Mutual_Fund_Distributor_ARN_Validity'=>'required',
			'Mutual_Fund_Distributor_KYD'=>'required',
			'Mutual_Fund_Distributor_EUIN'=>'required ',
			'Mutual_Fund_Distributor_Email_ID'=>'required  |email',
			'Mutual_Fund_Distributor_Website'=>'required',
			'Mutual_Fund_Distributor_Services_Offered'=>'required',
			'Mutual_Fund_Distributor_About'=>'required ',
			'Mutual_Fund_Distributor_Year_Establish'=>'required ',
			'Mutual_Fund_Distributor_Review'=>'required',
                        'cities'=>'required'

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     $Mutual_fundM=Mutualfund::where('id','=',$request->id)->first();
			// $Mutual_fundM= new Mutualfund();
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_SUBCATEGORY=$request->Mutual_Fund_Distributor_Subcategory;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_CONTACT=$request->Mutual_Fund_Distributor_Contact;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_ADDRESS=$request->Mutual_Fund_Distributor_Address;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_CONTACT_PERSON=$request->Mutual_Fund_Distributor_Contact_Person;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_AMFI_REGISTRATION_NUMBER=$request->Mutual_Fund_Distributor_AMFI_Registration_Number;

			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_ARN_VALIDITY=$request->Mutual_Fund_Distributor_ARN_Validity;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_KYD=$request->Mutual_Fund_Distributor_KYD;
             $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_EUIN=$request->Mutual_Fund_Distributor_EUIN;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_EMAIL_ID=$request->Mutual_Fund_Distributor_Email_ID;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_WEBSITE=$request->Mutual_Fund_Distributor_Website;

			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_SERVICES_OFFERED=$request->Mutual_Fund_Distributor_Services_Offered;
             $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_ABOUT=$request->Mutual_Fund_Distributor_About;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_YEAR_ESTABLISH=$request->Mutual_Fund_Distributor_Year_Establish;
			 $Mutual_fundM->MUTUAL_FUND_DISTRIBUTOR_REVIEW=$request->Mutual_Fund_Distributor_Review;
			 $Mutual_fundM->search_cities=$request->cities;
			 $Mutual_fundM->rank=$request->rank;
			 $Mutual_fundM->save();
			  if($Mutual_fundM->id)
			  {
			  	   if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$Mutual_fundM->banner)) && $Mutual_fundM->banner!="")
                        {
                            unlink(public_path('banners/'.$Mutual_fundM->banner));
                        }
                        		         
    			  	$getbanner = 'mutual_fund_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $Mutual_fundM=Mutualfund::find($Mutual_fundM->id);
                    $Mutual_fundM->banner=$getbanner;
                    $Mutual_fundM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$Mutual_fundM->advertisement)) && $Mutual_fundM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$Mutual_fundM->advertisement));
                        }
    			     
                    $getadvertisement = 'mutual_fund_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $Mutual_fundM=Mutualfund::find($Mutual_fundM->id);
                    $Mutual_fundM->advertisement=$getadvertisement;
                    $Mutual_fundM->save();
    			   }
			   return redirect()->back()->with('success', 'Mutualfund Details update Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}
public function updatepostoffice_fetch($id)
{

$updatepostoffice_fetch=Postoffice::find($id);
//dd($getbankdetails_fetch);
return view('updatepostoffice',['data'=>$updatepostoffice_fetch]);

}
public function updatepostoffice(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Post_Office_Subcategory'=>'required',
			'Post_Office_Name'=>'required',
			'Post_Office_Address'=>'required',
			'Post_Office_Contact_Person'=>'required',
			'Post_Office_Pin_Code'=>'required',
			'Post_Office_Type'=>'required',
			'Post_Office_Delivery'=>'required',
			'Post_Office_Region'=>'required ',
			'Post_Office_Circle'=>'required  ',
			'Post_Office_Email_ID'=>'required |email',
			'Post_Office_Website'=>'required',
			'Post_Office_Services_Offered'=>'required ',
			'Post_Office_About'=>'required ',
			'Post_Office_Year_Establish'=>'required',
			'Post_Office_Review'=>'required',
                        'cities'=>'required'

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
     $PostM=Postoffice::where('id','=',$request->id)->first();
			// $PostM= new Postoffice();
			 $PostM->POST_OFFICE_SUBCATEGORY=$request->Post_Office_Subcategory;
			 $PostM->POST_OFFICE_NAME=$request->Post_Office_Name;
			 $PostM->POST_OFFICE_ADDRESS=$request->Post_Office_Address;
			 $PostM->POST_OFFICE_CONTACT_PERSON=$request->Post_Office_Contact_Person;
			 $PostM->POST_OFFICE_PIN_CODE=$request->Post_Office_Pin_Code;

			 $PostM->POST_OFFICE_TYPE=$request->Post_Office_Type;
			 $PostM->POST_OFFICE_DELIVERY=$request->Post_Office_Delivery;
             $PostM->POST_OFFICE_REGION=$request->Post_Office_Region;
			 $PostM->POST_OFFICE_CIRCLE=$request->Post_Office_Circle;
			 $PostM->POST_OFFICE_EMAIL_ID=$request->Post_Office_Email_ID;

			 $PostM->POST_OFFICE_WEBSITE=$request->Post_Office_Website;
             $PostM->POST_OFFICE_SERVICES_OFFERED=$request->Post_Office_Services_Offered;
			 $PostM->POST_OFFICE_ABOUT=$request->Post_Office_About;
			 $PostM->POST_OFFICE_YEAR_ESTABLISH=$request->Post_Office_Year_Establish;
			 $PostM->POST_OFFICE_REVIEW=$request->Post_Office_Review;
			 $PostM->search_cities=$request->cities;
			 $PostM->rank=$request->rank;
			 $PostM->save();
			  if($PostM->id)
			  {
			  	 if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$PostM->banner)) && $PostM->banner!="")
                        {
                            unlink(public_path('banners/'.$PostM->banner));
                        }
                        		         
    			  	$getbanner = 'postoffice_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $PostM=Postoffice::find($PostM->id);
                    $PostM->banner=$getbanner;
                    $PostM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$PostM->advertisement)) && $PostM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$PostM->advertisement));
                        }
    			     
                    $getadvertisement = 'postoffice_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $PostM=Postoffice::find($PostM->id);
                    $PostM->advertisement=$getadvertisement;
                    $PostM->save();
    			   }
			   return redirect()->back()->with('success', 'Post Office Details update Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}


public function updatepostinvestment_fetch($id)
{

$updatepostinvestment_fetch=Investmentadvisors::find($id);
//dd($getbankdetails_fetch);
return view('updateinvestment_advisors',['data'=>$updatepostinvestment_fetch]);

}



public function updatepostinvestment_advisors(Request $request)
{
   
 //dd($request->all());
        $response = array();
        $validator = Validator::make($request->all(),[
            'Investment_Advisors_Subcategory'=>'required',
			'Investment_Advisors_Name'=>'required',
			'Investment_Advisors_Address'=>'required',
			'Investment_Advisors_Contact'=>'required',
			'Investment_Advisors_Email_ID'=>'required |email',
			'Investment_Advisors_Website'=>'required',
			'Investment_Advisors_Services_Offered'=>'required',
			'Investment_Advisors_About'=>'required ',
			'Investment_Advisors_Year_Establish'=>'required  ',
			'Investment_Advisors_Review'=>'required ',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
          $PostM=Investmentadvisors::where('id','=',$request->id)->first();
			 //$PostM= new Investmentadvisors();
			 $PostM->INVESTMENT_ADVISORS_SUBCATEGORY=$request->Investment_Advisors_Subcategory;
			 $PostM->INVESTMENT_ADVISORS_NAME=$request->Investment_Advisors_Name;
			 $PostM->INVESTMENT_ADVISORS_ADDRESS=$request->Investment_Advisors_Address;
			 $PostM->INVESTMENT_ADVISORS_CONTACT=$request->Investment_Advisors_Contact;
			 $PostM->INVESTMENT_ADVISORS_EMAIL_ID=$request->Investment_Advisors_Email_ID;

			 $PostM->INVESTMENT_ADVISORS_WEBSITE=$request->Investment_Advisors_Website;
			 $PostM->INVESTMENT_ADVISORS_SERVICES_OFFERED=$request->Investment_Advisors_Services_Offered;
             $PostM->INVESTMENT_ADVISORS_ABOUT=$request->Investment_Advisors_About;
			 $PostM->INVESTMENT_ADVISORS_YEAR_ESTABLISH=$request->Investment_Advisors_Year_Establish;
			 $PostM->INVESTMENT_ADVISORS_REVIEW=$request->Investment_Advisors_Review;
             $PostM->search_cities=$request->cities;
			 $PostM->rank=$request->rank;
			 $PostM->save();
			  if($PostM->id)
			  {
			  	if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$PostM->banner)) && $PostM->banner!="")
                        {
                            unlink(public_path('banners/'.$PostM->banner));
                        }
                        		         
    			  	$getbanner = 'investment_advisors_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $PostM=Investmentadvisors::find($PostM->id);
                    $PostM->banner=$getbanner;
                    $PostM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$PostM->advertisement)) && $PostM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$PostM->advertisement));
                        }
    			     
                    $getadvertisement = 'investment_advisors_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $PostM=Investmentadvisors::find($PostM->id);
                    $PostM->advertisement=$getadvertisement;
                    $PostM->save();
    			   }
			   return redirect()->back()->with('success', 'Investment Advisors Office Details update Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}
public function updateResearchAnalyst_fetch($id)
{

$updateResearchAnalyst_fetch=Researchanalyst::find($id);
//dd($getbankdetails_fetch);
return view('updateResearchAnalyst',['data'=>$updateResearchAnalyst_fetch]);

}

public function updatepostresearch_analyst(Request $request)
{
   

        $response = array();
        $validator = Validator::make($request->all(),[
            'Research_Analyst_Subcategory'=>'required',
			'Research_Analyst_Contact'=>'required',
			'Research_Analyst_Address'=>'required',
			'Research_Analyst_Contact_Person'=>'required',
			'Research_Analyst_Insurer'=>'required ',
			'Research_Analyst_Registration_Number'=>'required',
			'Research_Analyst_Category'=>'required',
			'Research_Analyst_Registration_Valid_Upto'=>'required ',
			'Research_Analyst_Email_ID'=>'required  |email',
			'Research_Analyst_Website'=>'required ',

			 'Research_Analyst_Services_Offered' => 'required ',
			  'Research_Analyst_About' => 'required ',
			  'Research_Analyst_Year_Establish' => 'required ',
			  'Research_Analyst_Review' => 'required ',
                        'cities'=>'required'
			

        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();   


        }else{
		
       try{       
      $PostM=Researchanalyst::where('id','=',$request->id)->first();
			 //$PostM= new Researchanalyst();
			 $PostM->RESEARCH_ANALYST_SUBCATEGORY=$request->Research_Analyst_Subcategory;
			 $PostM->RESEARCH_ANALYST_CONTACT=$request->Research_Analyst_Contact;
			 $PostM->RESEARCH_ANALYST_ADDRESS=$request->Research_Analyst_Address;
			 $PostM->RESEARCH_ANALYST_CONTACT_PERSON=$request->Research_Analyst_Contact_Person;
			 $PostM->RESEARCH_ANALYST_INSURER=$request->Research_Analyst_Insurer;

			 $PostM->RESEARCH_ANALYST_REGISTRATION_NUMBER=$request->Research_Analyst_Registration_Number;
			 $PostM->RESEARCH_ANALYST_CATEGORY=$request->Research_Analyst_Category;
             $PostM->RESEARCH_ANALYST_REGISTRATION_VALID_UPTO=$request->Research_Analyst_Registration_Valid_Upto;
			 $PostM->RESEARCH_ANALYST_EMAIL_ID=$request->Research_Analyst_Email_ID;
			 $PostM->RESEARCH_ANALYST_WEBSITE=$request->Research_Analyst_Website;

		     $PostM->RESEARCH_ANALYST_SERVICES_OFFERED=$request->Research_Analyst_Services_Offered;
             $PostM->RESEARCH_ANALYST_ABOUT=$request->Research_Analyst_About;
			 $PostM->RESEARCH_ANALYST_YEAR_ESTABLISH=$request->Research_Analyst_Year_Establish;
			 $PostM->RESEARCH_ANALYST_REVIEW=$request->Research_Analyst_Review;
			 $PostM->search_cities=$request->cities;
			 $PostM->rank=$request->rank;
			 $PostM->save();
			  if($PostM->id)
			  {
			      if($request->banner)
    			   {
    			       
                        if (file_exists(public_path('banners/'.$PostM->banner)) && $PostM->banner!="")
                        {
                            unlink(public_path('banners/'.$PostM->banner));
                        }
                        		         
    			  	$getbanner = 'research_analyst_banner_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->banner->getClientOriginalExtension();
                    $request->banner->move(public_path('banners'), $getbanner);
                    $PostM=Researchanalyst::find($PostM->id);
                    $PostM->banner=$getbanner;
                    $PostM->save();
    			   }
                   if($request->advertisement)
    			   {
        		        if (file_exists(public_path('advertisements/'.$PostM->advertisement)) && $PostM->advertisement!="")
                        {
                            unlink(public_path('advertisements/'.$PostM->advertisement));
                        }
    			     
                    $getadvertisement = 'research_analyst_advertisement_'.substr(str_shuffle("0123456789"), 0, 5).time().'.'.$request->advertisement->getClientOriginalExtension();
                    $request->advertisement->move(public_path('advertisements'), $getadvertisement);
                    $PostM=Researchanalyst::find($PostM->id);
                    $PostM->advertisement=$getadvertisement;
                    $PostM->save();
    			   }
			  	
			   return redirect()->back()->with('success', 'Research Analyst Office Details update Successfully');
			  }else
			  {
				
              return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
			  }
			 
			  
		   }catch(\Exception $e){
		         echo $e->getMessage();
		         exit;
				
				 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
		   } 

		}

}


//deleted function stat


public function deletebankdetails($id)
{
	$bankdetails=Bankdetails::find($id);
	if($bankdetails)
	{
		$bankdetails->is_deleted=1;
		$bankdetails->save();
		return redirect()->back()->with('success', 'Bank details Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}

public function deleteBrokersubbroker($id)
{
	$bankBrokersubbroker=Brokersubbroker::find($id);
	if($bankBrokersubbroker)
	{
		$bankBrokersubbroker->is_deleted=1;
		$bankBrokersubbroker->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}

public function deletecfa($id)
{
	$deletecfa=Cfadetails::find($id);
	if($deletecfa)
	{
		$deletecfa->is_deleted=1;
		$deletecfa->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}


public function deleteinsurance($id)
{
	$deleteinsurance=Insurance::find($id);
	if($deleteinsurance)
	{
		$deleteinsurance->is_deleted=1;
		$deleteinsurance->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}


public function deleteloan($id)
{
	$deleteloan=Loan::find($id);
	if($deleteloan)
	{
		$deleteloan->is_deleted=1;
		$deleteloan->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}
public function deletemutualfund($id)
{
	$deletemutualfund=Mutualfund::find($id);
	if($deletemutualfund)
	{
		$deletemutualfund->is_deleted=1;
		$deletemutualfund->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}
public function deletepostoffice($id)
{
	$deletepostoffice=Postoffice::find($id);
	if($deletepostoffice)
	{
		$deletepostoffice->is_deleted=1;
		$deletepostoffice->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}



public function deleteinvestment($id)
{
	$deleteinvestment=Investmentadvisors::find($id);
	if($deleteinvestment)
	{
		$deleteinvestment->is_deleted=1;
		$deleteinvestment->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}


public function deleteResearchAnalyst($id)
{
	$deleteResearchAnalyst=Researchanalyst::find($id);
	if($deleteResearchAnalyst)
	{
		$deleteResearchAnalyst->is_deleted=1;
		$deleteResearchAnalyst->save();
		return redirect()->back()->with('success', ' Deleted Successfully');
	}else{

		 return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
	}

}





}