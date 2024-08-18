<?php

namespace App\Livewire\Admin\Brand;
use Livewire\WithPagination;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str ;
class Index extends Component
{

    use WithPagination ;
    protected $paginationTheme="bootstrap" ;

    public $name,$slug,$status,$brand_id ;

    public function rules(){
        return[
        'name'=>'required|string' ,

        'slug'=>'required|string' ,

        'status'=>'nullable' ,
        ];
    }


    public function resetInput(){


        $this->name=null ;

        $this->slug=null ;

        $this->status=null ;

        $this->brand_id=null ;


    }


    public function storeBrand(){

        $validatedData=$this->validate() ;

        Brand::create([

            'name' => $this->name ,
            'slug' =>str::slug($this->slug,'-',null)  ,
            'status' => $this->status==true ? '1':'0' ,
        ]

        );

        session()->flash('message','برند جدید اضافه شد');

        $this->dispatch('close-modal') ;

        $this->resetInput() ;

    }


    public function editBrand($brand_id) {

        $this->brand_id=$brand_id ;

        $brand=Brand::findOrFail($brand_id) ;

        $this->name=$brand->name ;

        $this->slug=$brand->slug ;

        $this->status=$brand->status ;
    }


    public function updateBrand(){


        $validatedData=$this->validate() ;

        Brand::findOrFail($this->brand_id)->update([

            'name' => $this->name ,
            'slug' =>str::slug($this->slug,'-',null)  ,
            'status' => $this->status==true ? '1':'0' ,
        ]

        );

        session()->flash('message','برند ویرایش شد');

        $this->dispatch('close-modal') ;

        $this->resetInput() ;

    }


    public function deleteBrand($brand_id){


        $this->brand_id=$brand_id ;


    }


    public function destroyBrand(){

        Brand::findOrFail($this->brand_id)->delete();

        session()->flash('message','برند حذف شد');

        $this->dispatch('close-modal') ;

        $this->resetInput() ;


    }



    public function render()
    {
        $brands=Brand::orderBy('id','asc')->paginate(5);
        return view('livewire.admin.brand.index',['brands'=>$brands])->extends('layouts.admin.admin')->section('content');
    }
}
