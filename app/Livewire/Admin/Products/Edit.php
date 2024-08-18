<?php

namespace App\Livewire\Admin\Products;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Category;
use App\Models\Color ;
use App\Models\Product ;
use App\Models\ProductColor;
use Illuminate\Http\Request;
class Edit extends Component
{


     public $productid,$quantity=[];


    //  public function mount($productid,$quantity){
        public function mount(){
    //agar dakhele parantez parametr ham esm ba parametre route nabashad,kar nakhahad kard
       //$this->productid=$productid;
     // $this->quantity=$quantity ;
     //  $quantity=$this->quantity ;
     //  dd($product) ;

     }
    public function render()
    {

    $product=product::findOrFail($this->productid) ;
    $categories=Category::all() ;
    $brands=Brand::all() ;
    $product_colors=$product->productColors->pluck('color_id')->toArray() ;
    $colors=color::whereNotIn('id',$product_colors)->get() ;


    return view('livewire.admin.products.edit',compact('product','categories','brands','colors'))->extends('layouts.admin')->section('content');

    }

    // public function updateColorQuantity($formData,$id){

    //     //data haye form be soora array ferestade mishavand
    //  //  dd($formData['quantity'],$id) ;

    // $productcolor=ProductColor::findOrFail($id) ;


    // $productcolor->quantity=$formData['quantity'] ;

    // $productcolor->update() ;

    //   // session()->flash('message','تعداد موجودی ویرایش شد') ;

    // }

    public function updateColorQuantity($prodcolorid){

            //data haye form be soora array ferestade mishavand
         //  dd($formData['quantity'],$id) ;

      //  $productcolor=ProductColor::findOrFail($id) ;

        dd($this->prodcolorid->id) ;
      //  dd($this->$quantity) ;
       // $productcolor->quantity=$formData['quantity'] ;

       // $productcolor->update() ;



        }



}
