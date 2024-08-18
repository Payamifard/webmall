<?php

namespace App\Http\Controllers\admin;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductColor;
use Illuminate\Http\Request;
//use livewire\WithPagination ;
use illuminate\support\Str ;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
   // use WithPagination ;
    protected $paginationTheme="bootstrap" ;
    public function index(){


        // $products=Product::orderBy('id','asc')->paginate(10) ;

        // return view('admin.products.index',['products'=>$products]) ;

        return view('admin.products.index');

    }

    public function create(){

        $categories=Category::all() ;
        $brands=Brand::all() ;
        $colors=Color::all();
        return view('admin.products.create',compact('categories','brands','colors')) ;



    }


    public function store(ProductFormRequest $request) {

        $validatedData=$request->validated() ;

        $category=Category::findOrFail($validatedData['category_id']) ;

      //  dd($validatedData['brand']) ;

       $product=$category->products()->create([

            'category_id'=>$validatedData['category_id'],
            'name'=>$validatedData['name'],
            'slug'=>str::slug($validatedData['slug'],'-',null),
            'brand_id'=>$validatedData['brand'],
            'small_description'=>$validatedData['small_description'],
            'description'=>$validatedData['description'],
            'original_price'=>$validatedData['original_price'],
            'selling_price'=>$validatedData['selling_price'],
            'quantity'=>$validatedData['quantity'],
            'trending'=>$request->trending==true ? '1' : '0' ,
            'status'=>$request->status==true ? '1' : '0' ,
            'meta_title'=>$validatedData['meta_title'],
            'meta_keyword'=>$validatedData['meta_keyword'],
            'meta_description'=>$validatedData['meta_description'],

        ]);




        if($request->hasFile('image'))
        {
            $uploadpath='uploads/products/' ;

            $i=1;

            foreach ($request->file('image') as $imageFile)
            {

            $extension=$imageFile->getClientOriginalExtension() ;
            $filename=time().$i++.'.'.$extension ;
            $imageFile->move($uploadpath,$filename) ;
            $filePathname=$uploadpath.$filename;

            $product->productImages()->create([
            'product_id'=>$product->id ,

            'image'=> $filePathname ,
            ]) ;
            }

        }

        if($request->colors){

            foreach($request->colors as $color){

                $product->productColors()->create([

                    'product_id'=>$product->id ,
                    'color_id'=>$color ,
                    'quantity'=>$request->colorquantity[$color] ?? 0
                ]);

            }

        }


        return redirect(route('product.index'))->with('message','محصول با موفقیت اضافه گردید') ;


    }

    // public function edit(Product $product){
        public function edit($id){
        // $categories=Category::all() ;
        // $brands=Brand::all() ;
        // $product_colors=$product->productColors->pluck('color_id')->toArray() ;
        // $colors=color::whereNotIn('id',$product_colors)->get() ;

      //  $productid=$id ;

        // return view('admin.products.edit', compact('product','categories','brands','colors')) ;
       // dd($productid);
       // return view('admin.products.edit', compact('productid')) ;

       $product=product::findOrFail($id) ;
        $categories=Category::all() ;
        $brands=Brand::all() ;
        $product_colors=$product->productColors->pluck('color_id')->toArray() ;
        $colors=color::whereNotIn('id',$product_colors)->get() ;

        return view('admin.products.edit',compact('product','categories','brands','colors')) ;

    }


    public function update(ProductFormRequest $request,$id){

        $validatedData=$request->validated() ;

        $product=Product::findOrFail($id) ;



       $product->update([

            'category_id'=>$validatedData['category_id'],
            'name'=>$validatedData['name'],
            'slug'=>str::slug($validatedData['slug'],'-',null),
            'brand_id'=>$validatedData['brand'],
            'small_description'=>$validatedData['small_description'],
            'description'=>$validatedData['description'],
            'original_price'=>$validatedData['original_price'],
            'selling_price'=>$validatedData['selling_price'],
            'quantity'=>$validatedData['quantity'],
            'trending'=>$request->trending==true ? '1' : '0' ,
            'status'=>$request->status==true ? '1' : '0' ,
            'meta_title'=>$validatedData['meta_title'],
            'meta_keyword'=>$validatedData['meta_keyword'],
            'meta_description'=>$validatedData['meta_description'],

        ]);



        if($request->colors){

            foreach($request->colors as $color){

                $product->productColors()->create([

                    'product_id'=>$product->id ,
                    'color_id'=>$color ,
                    'quantity'=>$request->colorquantity[$color] ?? 0
                ]);

            }

        }





            if($request->hasFile('image'))
            {
                $uploadpath='uploads/products/' ;

                   $i=1;

                foreach ($request->file('image') as $imageFile)
                {

                    $extension=$imageFile->getClientOriginalExtension() ;
                    $filename=time().$i++.'.'.$extension ;
                    $imageFile->move($uploadpath,$filename) ;
                    $filePathname=$uploadpath.$filename;

                    $product->productImages()->create([
                        'product_id'=>$product->id ,

                        'image'=> $filePathname ,
                    ]) ;
                 }

           }

        return redirect(route('product.index'))->with('message','محصول با موفقیت ویرایش گردید') ;


    }

    public function destroyImage($product_image_id){

        $productimage= ProductImage::findOrFail($product_image_id) ;


        if(File::exists( $productimage->image)){


        File::delete($productimage->image);

        }


        $productimage->delete() ;



        return redirect(route('product.index'))->with('message','تصویر محصول با موفقیت حذف گردید') ;





    }

    // public function destroyProduct($product_id){


    //     $product=Product::findOrFail($product_id);

    //     if ($product->productImages){

    //         foreach  ($product->productimages as $image) {

    //         File::delete($image->image);

    //         $image->delete() ;

    //         }
    //     }

    //     $product->delete() ;

    //     return redirect(route('product.index'))->with('message','محصول با موفقیت حذف گردید') ;


    // }

    public function updateProdColorQty(Request $request,$prod_color_id){

        $productColorData=product::findOrFail($request->product_id)->productColors()->where('id',$prod_color_id)->first() ;

        $productColorData->update([

            'quantity' => $request->qty

        ]) ;

            //response json
            return response()->json(['message'=>'ویرایش موجودی با موفقیت انجام شد']);

    }


    public function deleteProdColor($prod_color_id){

        $prodColor=ProductColor::findOrFail($prod_color_id) ;

        $prodColor->delete() ;



        return response()->json(['message'=>'رنگ انتخابی با موفقیت حذف شد']);

    }


}
