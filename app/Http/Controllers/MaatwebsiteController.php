<?php

namespace App\Http\Controllers;

use Input;
use App\Http\Controllers\Controller;
use App\models\Bankdetails;
use App\models\Brokersubbroker;
use DB;
use Excel;
use Illuminate\Http\Request;
use App\models\Cfadetails;
use App\models\Insurance;
use App\models\Loan;
use App\models\Mutualfund;
use App\models\Postoffice;
use App\models\Investmentadvisors;
use App\models\Researchanalyst;

class MaatwebsiteController extends Controller
{
    public function downloadbankdetailsExcel($type)
	{
	    try
	    {
	        $data = Bankdetails::get()->toArray();
		
    		 Excel::create('bank_details_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importbankdetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'bank_name' => $value->bank_name,
					    'bank_address' => $value->bank_address,
					    'bank_contact' => $value->bank_contact,
					    'bank_ifsc_code' => $value->bank_ifsc_code,
					    'bank_branch' => $value->bank_branch,
					    'bank_micr_code' => $value->bank_micr_code,
					    'bank_email_id' => $value->bank_email_id,
					    'bank_website' => $value->bank_website,
					    'bank_services_offered' => $value->bank_services_offered,
					    'bank_about' => $value->bank_about,
					    'bank_year_establish' => $value->bank_year_establish,
					    'bank_review' =>$value->bank_review,
					    'bank_category' =>$value->bank_category,
					    'search_cities' => $value->search_cities,
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('bank_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadbrokersubbrokerdetailsExcel($type)
	{
	    try
	    {
	        $data = Brokersubbroker::get()->toArray();
		
    		 Excel::create('broker_sub_broker_details_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importbrokersubbrokerdetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'broker_subcategory' => $value->broker_subcategory,
					    'broker_contact' => $value->broker_contact,
					    'broker_address' => $value->broker_address,
					    'broker_contact_person' => $value->broker_contact_person,
					    'broker_registration_number' =>$value->broker_registration_number,
					    'broker_stock_exchange' => $value->broker_stock_exchange,
					    'broker_category' => $value->broker_category,
					    'broker_recommending_broker_name' => $value->broker_recommending_broker_name,
					    'broker_recommending_broker_reg_number' => $value->broker_recommending_broker_reg_number,
					    'broker_email_id' => $value->broker_email_id,
					    'broker_website' => $value->broker_website,
					    'broker_services_offered' =>$value->broker_services_offered,
					    'broker_about' => $value->broker_about,
					    'broker_year_establish' => $value->broker_year_establish,
					    'broker_review' => $value->broker_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('broker_subbroker')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadcfadetailsExcel($type)
	{
	    try
	    {
	        $data = Cfadetails::get()->toArray();
		
    		 Excel::create('cfa_details_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importcfadetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'cfa_subcategory' => $value->cfa_subcategory,
					    'cfa_contact' => $value->cfa_contact,
					    'cfa_address' => $value->cfa_address,
					    'cfa_contact_person' => $value->cfa_contact_person,
					    'cfa_fpsbi_number' => $value->cfa_fpsbi_number,
					    'cfa_nature_of_employment' => $value->cfa_nature_of_employment,
					    'cfa_company_name' => $value->cfa_company_name,
					    'cfa_email_id' => $value->cfa_email_id,
					    'cfa_website' => $value->cfa_website,
					    'cfa_services_offered' => $value->cfa_services_offered,
					    'cfa_about' => $value->cfa_about,
					    'cfa_year_establish' =>$value->cfa_year_establish,
					    'cfa_review' => $value->cfa_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('cfa_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadinsurancedetailsExcel($type)
	{
	    try
	    {
	        $data = Insurance::get()->toArray();
		
    		 Excel::create('insurance_details_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importinsurancedetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'insurance_subcategory' => $value->insurance_subcategory,
					    'insurance_contact' => $value->insurance_contact,
					    'insurance_address' => $value->insurance_address,
					    'insurance_contact_person' => $value->insurance_contact_person,
					    'insurance_insurer' => $value->insurance_insurer,
					    'insurance_license_number' => $value->insurance_license_number,
					    'insurance_irdc_urn' => $value->insurance_irdc_urn,
					    'insurance_agent_id' => $value->insurance_agent_id,
					    'insurance_email_id' => $value->insurance_email_id,
					    'insurance_website' => $value->insurance_website,
					    'insurance_services_offered' => $value->insurance_services_offered,
					    'insurance_about' =>$value->insurance_about),
					    'insurance_year_establish' => $value->insurance_year_establish,
					    'insurance_review' => $value->insurance_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('insurance_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadloandetailsExcel($type)
	{
	    try
	    {
	        $data = Loan::get()->toArray();
		
    		 Excel::create('loan_details_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importloandetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'loan_subcategory' =>$value->loan_subcategory,
					    'loan_contact' => $value->loan_contact,
					    'loan_address' => $value->loan_address,
					    'loan_contact_person' => $value->loan_contact_person,
					    'loan_email_id' => $value->loan_email_id,
					    'loan_website' => $value->loan_website,
					    'loan_services_offered' => $value->loan_services_offered,
					    'loan_about' =>$value->loan_about,
					    'loan_year_establish' => $value->loan_year_establish,
					    'loan_review' => $value->loan_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('loan_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadmutualfunddetailsExcel($type)
	{
	    try
	    {
	        $data = Mutualfund::get()->toArray();
		
    		 Excel::create('mutual_fund_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importmutualfunddetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'mutual_fund_distributor_subcategory' => $value->mutual_fund_distributor_subcategory,
					    'mutual_fund_distributor_contact' => $value->mutual_fund_distributor_contact,
					    'mutual_fund_distributor_address' => $value->mutual_fund_distributor_address,
					    'mutual_fund_distributor_contact_person' => $value->mutual_fund_distributor_contact_person,
					    'mutual_fund_distributor_amfi_registration_number' => $value->mutual_fund_distributor_amfi_registration_number,
					    'mutual_fund_distributor_arn_validity' => $value->mutual_fund_distributor_arn_validity,
					    'mutual_fund_distributor_kyd' => $value->mutual_fund_distributor_kyd,
					    'mutual_fund_distributor_euin' => $value->mutual_fund_distributor_euin,
					    'mutual_fund_distributor_email_id' => $value->mutual_fund_distributor_email_id,
					    'mutual_fund_distributor_website' => $value->mutual_fund_distributor_website,
					    'mutual_fund_distributor_services_offered' => $value->mutual_fund_distributor_services_offered,
					    'mutual_fund_distributor_about' =>$value->mutual_fund_distributor_about,
					    'mutual_fund_distributor_year_establish' => $value->mutual_fund_distributor_year_establish,
					    'mutual_fund_distributor_review' => $value->mutual_fund_distributor_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('mutual_fund_distributor')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadpostofficedetailsExcel($type)
	{
	    try
	    {
	        $data = Postoffice::get()->toArray();
		
    		 Excel::create('post_office_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importpostofficedetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'post_office_subcategory' => $value->post_office_subcategory,
					    'post_office_name' => $value->post_office_name,
					    'post_office_contact_person' => $value->post_office_contact_person,
					    'post_office_address' => $value->post_office_address,
					    'post_office_pincode' => $value->post_office_pincode,
					    'post_office_type' => $value->post_office_type,
					    'post_office_delivery' => $value->post_office_delivery,
					    'post_office_region' => $value->post_office_region,
					    'post_office_circle' => $value->post_office_circle,
					    'post_office_email_id' => $value->post_office_email_id,
					    'post_office_website' => $value->post_office_website,
					    'post_office_services_offered' => $value->post_office_services_offered,
					    'post_office_about' =>$value->post_office_about,
					    'post_office_year_establish' =>$value->post_office_year_establish,
					    'post_office_review' => $value->post_office_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('post_office_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadinvestment_advisorsdetailsExcel($type)
	{
	    try
	    {
	        $data = Investmentadvisors::get()->toArray();
		
    		 Excel::create('post_office_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importinvestment_advisorsdetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'investment_advisors_subcategory' => $value->investment_advisors_subcategory,
					    'investment_advisors_name' => $value->investment_advisors_name,
					    'investment_advisors_contact' => $value->investment_advisors_contact,
					    'investment_advisors_address' => $value->investment_advisors_address,
					    'investment_advisors_email_id' => $value->investment_advisors_email_id,
					    'investment_advisors_website' => $value->investment_advisors_website,
					    'investment_advisors_services_offered' => $value->investment_advisors_services_offered,
					    'investment_advisors_about' =>$value->investment_advisors_about,
					    'investment_advisors_year_establish' => $value->investment_advisors_year_establish,
					    'investment_advisors_review' => $value->investment_advisors_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('investment_advisors_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
	
	public function downloadresearch_analystdetailsExcel($type)
	{
	    try
	    {
	        $data = Researchanalyst::get()->toArray();
		
    		 Excel::create('post_office_'.date('Y-m-d'), function($excel) use ($data) {
    			$excel->sheet('mySheet', function($sheet) use ($data)
    	        {
    				$sheet->fromArray($data);
    	        });
    		})->download($type);
	    }catch(\Exception $e)
	    {
	        print_r($e->getMessage());
	    }
		
	}
	
	
	public function importresearch_analystdetailsExcel()
	{
	    try
	    {
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();

			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$record= [
					    'rank' => $value->rank, 
					    'research_analyst_subcategory' => $value->research_analyst_subcategory,
					    'research_analyst_contact' => $value->research_analyst_contact,
					    'research_analyst_contact_person' => $value->research_analyst_contact_person,
					    'research_analyst_address' => $value->research_analyst_address,
					    'research_analyst_insurer' => ($value->research_analyst_insurer,
					    'research_analyst_registration_number' => $value->research_analyst_registration_number,
					    'research_analyst_category' => $value->research_analyst_category,
					    'research_analyst_registration_valid_upto' => $value->research_analyst_registration_valid_upto,
					    'research_analyst_email_id' => $value->research_analyst_email_id,
					    'research_analyst_website' => $value->research_analyst_website,
					   'research_analyst_services_offered' => $value->research_analyst_services_offered,
					    'research_analyst_about' =>$value->research_analyst_about,
					    'research_analyst_year_establish' => $value->research_analyst_year_establish,
					    'research_analyst_review' => $value->research_analyst_review,
					    'search_cities' => $value->search_cities
					    ];
					    $insert[]=$record;
				}
				 
				if(!empty($insert)){
					DB::table('research_analyst_details')->insert($insert);
				}
			}
		}
		return back();
	    }catch(\Exception $e)
	    {
	        echo 'Server Exeption';
	    }
	}
}
