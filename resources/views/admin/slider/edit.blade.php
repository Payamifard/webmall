@extends('layouts.admin.admin')

@section('content')

<div>
    <div class="row">
        <div class="col-md-12">

            @if (session('message'))

                <div class="alert alert-success">


                    {{ session('message') }}

                </div>

            @endif

            @if ($errors->any())

            <div class="alert alert-warning">
                @foreach ($errors->all() as $error )

                <div>{{ $error }}</div>

                @endforeach

            </div>
            @endif



            <div class="card">
                <div class="card-header">
                    <h2>ویرایش اسلایدر
                        <a href="{{ route('sliders.index')}}" class="btn text-white  btn-primary float-start">بازگشت</a>

                    </h2>

                </div>

                <div class="card-body">

                    <form action="{{ route('sliders.update',$slider->id) }}" method="POST" enctype="multipart/form-data" >


                        @csrf
                        @method('PUT') ;

                        <div class="mt-3">

                            <label>نام</label>
                            <input type="text" value="{{ $slider->title }}" name="title" class="form-control"/>


                        </div>

                        <div class="mt-3">

                            <label>توضیحات</label>
                            <textarea name="description" class="form-control" rows="3">  {{ $slider->description }}</textarea>

                        </div>

                        <div class="mt-3">

                            <label>تصویر</label>
                            <input type="file" name="image" class="form-control"/>
                            <img src="{{asset("$slider->image")}}" style="margin-top:20px ; width:50px; height:50px" alt="slider" />
                        </div>

                        <div class="mt-3">

                            <label>عدم نمایش</label>

                            <input type="checkbox" name="status" {{ $slider->status==1 ? 'checked': '' }} style="width:30px ;height:30px"/>

                        </div>


                        <div class="mt-3">

                            <button type="submit" class="btn btn-primary mt-3 text-white" >ویرایش</button>

                        </div>



                        <div class="mt-5 float-end">
                            {{-- {{$colors->links()}} --}}
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
