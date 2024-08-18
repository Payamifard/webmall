<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;


use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{

    use WithPagination ;
    protected $paginationTheme="bootstrap" ;

    public $category_id ;

    public function render()
    {


        $categories=category::orderBy('id','asc')->paginate(5) ;

        //php artisan livewire:publish --config
        //'in livewire.php file edit this: pagination_theme' => 'bootstrap',


        return view('livewire.admin.category.index',['categories'=>$categories]);
    }


    public function deleteCategory($category_id){

    $this->category_id=$category_id ;


    }

    public function destroyCategory(){

        $category=category::find($this->category_id) ;

        $path='uploads/category/'.$category->image ;

        if(File::exists($path)){

            File::delete($path) ;

        }


        $category->delete() ;

        session()->flash('message','دسته بندی حذف شد') ;

        $this->dispatch('close-modal') ;
    }


}
