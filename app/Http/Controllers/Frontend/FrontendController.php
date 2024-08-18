<?php

namespace App\Http\Controllers\Frontend;

use App\Models\slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\color;
use App\Models\ProductColor;

class FrontendController extends Controller
{
    public function index(){

    $sliders=slider::where('status','0')->get() ;
    $categories=Category::where('status','0')->get() ;
    //dump($sliders,$categories) ;
    return view('frontend.index',compact('sliders','categories')) ;
    }

    public function products($category_slug){

        $category=Category::where('slug',$category_slug)->first() ;

//         $category_id= $category->id ;

         $categories=Category::where('status','0')->get() ;



//         $catProducts=$category->products->where('status','0')->all() ;

//         $productIds=array_column($catProducts, 'id') ;

//         $prices= array_column($catProducts, 'selling_price') ;

//         if($prices){

//         $minPrice=min($prices) ;

//         $maxPrice=max($prices) ;

//         }

//         else {
//             $minPrice=0 ;

//         $maxPrice=0 ;
//         }
//         //get product brands with specific categorty
//         $brands_id= array_unique(array_column($catProducts,'brand_id')) ;

//         if($brands_id){
//             foreach($brands_id as $id){
//             $brands[]=Brand::find($id);

//             }
//         }
//         else {

//             $brands[]=Null ;

//         }

// //        dump($brands);
//         //getting this category product colors



//         foreach($productIds as $pid){

//          $colorIds[]=ProductColor::where('product_id',$pid)->pluck('color_id')->toArray() ;



//         }

//         $count=count($colorIds)-1;

//         $productColorIds[]=null ;

//         for ($i=0;$i<=$count;$i++){

//          $productColorIds= array_merge_recursive($colorIds[$i],$productColorIds) ;



//         }

//         $productColorIds=array_filter(array_unique($productColorIds)) ;



//         foreach($productColorIds as $id){

//          $colors[]=Color::findOrFail($id) ;


//         }



       // return view('frontend.products.index',compact('categories','catProducts','minPrice','maxPrice','brands','category_id','colors','category')) ;

       return view('frontend.product.index',compact('category','categories')) ;
         // return view('livewire.frontend.product.index');




    }


}


