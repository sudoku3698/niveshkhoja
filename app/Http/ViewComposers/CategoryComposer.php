<?php







namespace App\Http\ViewComposers;











use Illuminate\View\View;



use App\models\CategoryMaster;
use DB;





class CategoryComposer



{



      public function compose(View $view)
      {
          $view->with([
			'category_master'=>CategoryMaster::all(),
			]);



	}

}