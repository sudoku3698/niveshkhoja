<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\models\AddListing;
use App\models\Review;
use Session;
use Validator;
use Response;

class AddListingController extends Controller
{
    public function get_listings()
    {
        return view('get_listing',['listings'=>AddListing::all()]);
    }

    public function get_reviews()
    {
      return view('get_reviews',['reviews'=>Review::all()]);
    }
}