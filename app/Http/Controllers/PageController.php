<?php
namespace App\Http\Controllers;
use App\Models\products;
use App\Models\slide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function getIndex(){						
    	$slide =slide::all();					
    	// return view('trangchu',['slide'=>$slide]);					
        $new_product = products::where('new',1)->paginate(8);						
        // dd($new_product);						
    	return view('trangchu',compact('slide','new_product'));					
    }						
}					
