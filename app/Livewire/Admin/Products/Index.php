<?php

namespace App\Livewire\Admin\Products;
use App\Models\Product;
use Livewire\Component;
use App\Models\ProductColor;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination ;
    protected $paginationTheme="bootstrap" ;


    public function render()
    {
        $products=Product::orderBy('id','asc')->paginate(10) ;

        return view('livewire.admin.products.index',compact('products'));
    }

    public function destroyProduct($product_id){


        $product=Product::findOrFail($product_id);

        if ($product->productImages){

            foreach  ($product->productimages as $image) {

            File::delete($image->image);

            $image->delete() ;

            }
        }

        $product->delete() ;

        // return redirect(route('product.index'))->with('message','محصول با موفقیت حذف گردید') ;
        session()->flash('message','محصول با موفقیت حذف گردید') ;



    }

    public function deleteProductColor($prodColorId){

    dd($prodColorId);

    ProductColor::findOrFail($prodColorId)->delete();

    session()->flash('message','رنگ محصول با موفقیت حذف گردید') ;

    }

    public function editProduct($productid){

       // dd($productid) ;

       return redirect(route('product.edit',$productid));

    
      
    
    }
}
