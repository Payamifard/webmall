<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;

use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index() {


        return view ( 'admin.category.index') ;



    }


    public function create() {


        return view ( 'admin.category.create') ;



    }



    public function store(CategoryFormRequest $request) {


        $validatedData=$request->validated() ;
        $category=new category ;
        $category->name=$validatedData['name'] ;
        // generates a URL friendly "slug" from the given string
         //  vorudi sevom zaban ast baraye support farsi barabar ba null bayad bashad

        $category->slug=str::slug($validatedData['slug'],'-',null);
        $category->description=$validatedData['description'] ;


        //check if we have image and save it
        if ($request->hasfile('image')) {
            $uploadpath='uploads/category/' ;
            $file=$request->file('image') ;
            $ext=$file->getClientOriginalExtension() ;
            $filename=time().'.'.$ext ;
            $file->move('uploads/category/' ,$filename) ;
                       $category->image=$uploadpath.$filename ;

        };

        $category->meta_title=$validatedData['meta_title'] ;
        $category->meta_keyword=$validatedData['meta_keyword'] ;
        $category->meta_description=$validatedData['meta_description'] ;
        $category->status=$request->status==true ? '1' : '0';

        $category->save() ;

        return redirect('admin/category')->with('message','دسته بندی جدید با موفقیت اضافه شد') ;
    }


    public function edit(Category $category){


        return view('admin.category.edit',compact('category')) ;

    }


    public function update(CategoryFormRequest $request, $category) {

        $validatedData=$request->validated() ;

        $category=category::findOrFail($category) ;



        $category->name=$validatedData['name'] ;
        // generates a URL friendly "slug" from the given string
         //  vorudi sevom zaban ast baraye support farsi barabar ba null bayad bashad

        $category->slug=str::slug($validatedData['slug'],'-',null);
        $category->description=$validatedData['description'] ;






        //check if we have image and save it
        if ($request->hasfile('image')) {

            $uploadpath='uploads/category/' ;

            //check for previus image and delete if exists

            $path='uploads/category/'.$category->image ;

            if (File::exists($path)) {

                File::delete($path) ;

            }

            $file=$request->file('image') ;
            $ext=$file->getClientOriginalExtension() ;
            $orgname=$file->getClientOriginalName() ;
            $filename=$orgname ;
            $file->move('uploads/category/' ,$filename) ;
            $category->image=$uploadpath.$filename ;

        }

        $category->meta_title=$validatedData['meta_title'] ;
        $category->meta_keyword=$validatedData['meta_keyword'] ;
        $category->meta_description=$validatedData['meta_description'] ;
        $category->status=$request->status==true ? '1' : '0';

        $category->update() ;


        return redirect('admin/category')->with('message','دسته بندی  با موفقیت ویرایش شد') ;




    }
}
