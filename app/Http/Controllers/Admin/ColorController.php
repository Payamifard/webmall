<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;

class ColorController extends Controller
{
    public function index(){



        $colors=Color::orderby('id','asc')->paginate(10) ;

        return view('admin.colors.index',['colors'=>$colors]) ;


    }


    public function create(){

        return view('admin.colors.create') ;


    }


    public function store(ColorFormRequest $request){

         $validatedData=$request->validated() ;


        Color::create($validatedData);

        return redirect(route('colors.index'))->with('message','رنگ جدید با موفقیت افزوده شد') ;

    }

    public function edit(Color $color){

        return view('admin.colors.edit',compact('color')) ;

    }

    public function update(ColorFormRequest $request,$id){

        $validatedData=$request->validated() ;

        Color::findOrFail($id)->update( $validatedData) ;

        return redirect(route('colors.index'))->with('message','ویرایش با موفقیت انجام شد') ;

    }


    public function destroy($id){



        Color::findOrFail($id)->delete() ;

        return redirect(route('colors.index'))->with('message','حذف با موفقیت انجام شد') ;


    }


}
