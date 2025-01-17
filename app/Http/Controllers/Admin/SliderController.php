<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SliderFormRequest;

class SliderController extends Controller
{
    public function index(){

        $sliders=slider::all() ;

        return view('admin.slider.index',compact('sliders'));

    }

    public function create(){

        return view('admin.slider.create');


    }


    public function store(SliderFormRequest $request){

        $validatedData=$request->validated() ;

        if($request->hasFile('image')){

            $file=$request->file('image') ;
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'. $ext ;
            $file->move('uploads/slider/',$filename) ;
            $validatedData['image']="uploads/slider/$filename" ;
        }
        else {
            $validatedData['image']=null ;
        }

        $validatedData['status']=$request->status==true ? '1':'0' ;

        slider::create([

            'title'=>$validatedData['title'] ,
            'description'=>$validatedData['description'] ,
            'image'=>$validatedData['image'] ,
            'status'=>$validatedData['status'] ,

        ]);


        return redirect('admin/sliders')->with('message','اسلایدر با موفقیت اضافه شد') ;


    }

    public function edit(Slider $slider){

        return view('admin.slider.edit',compact('slider')) ;

    }

    public function update(SliderFormRequest $request,Slider $slider){

        $validatedData=$request->validated() ;

        if($request->hasFile('image')){

            $destination=$slider->image ;

            if (File::exists($destination)){

                File::delete($destination);
            }

            $file=$request->file('image') ;
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'. $ext ;
            $file->move('uploads/slider/',$filename) ;
            $validatedData['image']="uploads/slider/$filename" ;

            slider::where('id',$slider->id)->update([
            'image'=>$validatedData['image'] ,

            ]);

        };

        $validatedData['status']=$request->status==true ? '1':'0' ;

        slider::where('id',$slider->id)->update([

            'title'=>$validatedData['title'] ,
            'description'=>$validatedData['description'] ,
            'status'=>$validatedData['status']

        ]);


        return redirect('admin/sliders')->with('message','اسلایدر با موفقیت ویرایش شد') ;


    }

    public function destroy(Slider $slider){

        $destination=$slider->image ;

        if (File::exists($destination)){

            File::delete($destination);
        }

        $slider->delete() ;
        return redirect('admin/sliders')->with('message','اسلایدر با موفقیت حذف شد') ;

    }


}
