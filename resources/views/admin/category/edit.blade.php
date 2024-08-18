@extends('layouts.admin.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>ویرایش دسته بندی
                    <a href="{{ url('admin/category') }}" class="btn text-white btn-primary float-start">بازگشت</a>

                </h2>

            </div>

            <div class="card-body">

                <form action="{{route('category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label>نام</label>
                            <input type="text" value="{{ $category->name }}" name="name" class="form-control" />
                            @error ('name') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-6 mb-3">

                            <label>اسلاگ</label>
                            <input type="text"  value="{{ $category->slug }}" name="slug" class="form-control" />
                            @error ('slug') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>توضیحات</label>
                            <input type="text"  value="{{ $category->description }}" name="description" class="form-control" />
                            @error ('description') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>تصویر</label>
                            <input type="file"  name="image" class="form-control" />
                            <img src="{{ asset($category->image) }}" style="margin-top:10px" width="60px" height="60px" />
                            @error ('image') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>عدم نمایش دسته بندی</label>
                            <input  type="checkbox" name="status" {{$category->status=='1' ? 'checked' :'' }} />

                        </div>
                        <div class="col-md-12 mt-3">
                            <h3>تگ های سئو</h3>
                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <label>عنوان متا</label>
                            <input type="text"  value="{{ $category->meta_title }}" name="meta_title" class="form-control" />
                            @error ('meta_title') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <label>کلمه کلیدی متا</label>
                            <textarea type="text" name="meta_keyword" class="form-control" rows=3>{{ $category->meta_keyword }} </textarea>
                            @error ('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <label>توضیحات متا</label>
                            <textarea type="text"   name="meta_description" class="form-control" rows=3>{{ $category->meta_description }} </textarea>
                            @error ('meta_description') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mt-3">

                            <button type="submit" class="btn btn-primary float-start text-white">ذخیره ویرایش</button>

                        </div>


                    </div>

                </form>

            </div>
        </div>

    </div>
</div>


@endsection
