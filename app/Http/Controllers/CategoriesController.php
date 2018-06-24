<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\models\CategoryMaster;
use Validator;


class CategoriesController extends Controller
{
    public function get_categories()
    {
        return view('get_categories',['categories'=>CategoryMaster::all()]);
    }

    public function add_new_category()
    {
        return view("add_new_category");
    }

    public function delete_category($cat_id)
    {
        $CategoryMaster = CategoryMaster::find($cat_id);

        $CategoryMaster->delete();

        return redirect()->back()->with('success', 'Category deleted Successfully');
    }

    public function post_new_category(Request $request)
    {
        try{  
            $validator = Validator::make($request->all(),[
                'service_type'=>'required',
                'category_value'=>'required',
            ]);

            if($validator->fails())
            {
                $messages = $validator->errors();
                return redirect()->back()->withErrors($messages)->withInput();
            }else
            {
                $CategoryMaster=new CategoryMaster;
                $CategoryMaster->service_type=$request->service_type;
                $CategoryMaster->category_value=$request->category_value;
                $CategoryMaster->save();
                if($CategoryMaster->id)
                {
                    //return Response::json('Bank details Added Successfully',200);
                // return view('bankdetails');
                return redirect()->back()->with('success', 'Category Added Successfully');
                }else
                {
                return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
                }
            }
        }catch(\Exception $e){
        
            return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
        } 
    }

    public function edit_category($cat_id)
    {
        return view('edit_categories',['category'=>CategoryMaster::find($cat_id)]);
    }

    public function update_category(Request $request)
    {
        try{  
            $validator = Validator::make($request->all(),[
                'cat_id'=>'required',
                'service_type'=>'required',
                'category_value'=>'required',
            ]);

            if($validator->fails())
            {
                $messages = $validator->errors();
                return redirect()->back()->withErrors($messages)->withInput();
            }else
            {
                $CategoryMaster=CategoryMaster::find($request->cat_id);
                if($CategoryMaster)
                {
                    $CategoryMaster->service_type=$request->service_type;
                    $CategoryMaster->category_value=$request->category_value;
                    $CategoryMaster->save();
                    if($CategoryMaster->id)
                    {
                        //return Response::json('Bank details Added Successfully',200);
                    // return view('bankdetails');
                    return redirect()->back()->with('success', 'Category Updated Successfully');
                    }else
                    {
                    return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
                    }
                }else
                {
                    return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
                }
                
            }
        }catch(\Exception $e){
        
            return redirect()->back()->with('error', 'Something Went Wrong, Please try Again');
        } 
    }
}