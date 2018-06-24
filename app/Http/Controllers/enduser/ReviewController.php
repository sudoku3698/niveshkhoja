<?php

namespace App\Http\Controllers\enduser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Review;
use Validator;

class ReviewController extends Controller
{
    public function postReview(Request $request)
    {
    	$validator = Validator::make($request->all(),[
            'full_name'=>'required',
			'mobile'=>'required',
			'email'=>'required',
			'rating'=>'required',
			'city'=>'required',
			'review'=>'required',
			'service_id'=>'required',
			'service_type'=>'required'
        ]);

        if($validator->fails())
        {
        	$messages = $validator->errors();
        	return redirect()->back()->withErrors($messages)->withInput();
        }else{
			Review::create($request->all());
			return back()->with('success', 'Review Successfully Submitted!!!');
    	}
    }
}
