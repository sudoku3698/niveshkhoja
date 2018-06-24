<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\models\Advertisement;

class AdvertisementController extends Controller
{

   public function index()
   {
     $ads=Advertisement::all();
    return view('advertisement',['ads'=>$ads]);
   }
   
   public function add_ad(Request $request)
   {
     $this->validate($request, [
            'ad_page' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $getimageName = time().'.'.$request->ad_page->getClientOriginalExtension();
        $request->ad_page->move(public_path('ad_images'), $getimageName);
        $advertisement=new Advertisement();
        $advertisement->service_type=$request->service_type;
        $advertisement->title=$request->title;
        $advertisement->link=$request->link;
        $advertisement->ad_page=$getimageName;
        $advertisement->min=$request->min;
        $advertisement->max=$request->max;
        $advertisement->save();
        return back()
            ->with('success','images Has been uploaded successfully.')
            ->with('image',$getimageName);
   }

   public function delete_ad(Request $request)
   {
      $advertisement=Advertisement::find($request->add_id);
      if($advertisement)
      {
        $advertisement->delete();
        unlink(public_path('ad_images/'.$advertisement->ad_page));
         return back()
            ->with('success','images Has been deleted successfully.');
      }
      
   }

}
