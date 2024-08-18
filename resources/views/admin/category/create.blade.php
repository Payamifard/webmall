@extends('layouts.admin.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>افزودن دسته بندی جدید
                    <a href="{{ url('admin/category') }}" class="btn text-white btn-primary float-start">بازگشت</a>

                </h2>

            </div>

            <div class="card-body">

                <form action="{{ url('admin/category') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label>نام</label>
                            <input type="text" name="name" class="form-control" />
                            @error ('name') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-6 mb-3">

                            <label>اسلاگ</label>
                            <input type="text" name="slug" class="form-control" />
                            @error ('slug') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>توضیحات</label>
                            <input type="text" name="description" class="form-control" />
                            @error ('description') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>تصویر</label>
                            <input type="file" name="image" class="form-control" />
                            @error ('image') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>عدم نمایش دسته بندی</label>
                            <input type="checkbox" name="status" />

                        </div>
                        <div class="col-md-12 mt-3">
                            <h3>تگ های سئو</h3>
                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <label>عنوان متا</label>
                            <input type="text" name="meta_title" class="form-control" />
                            @error ('meta_title') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <label>کلمه کلیدی متا</label>
                            <textarea type="text" name="meta_keyword" class="form-control" rows=3> </textarea>
                            @error ('meta_keyword') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mt-3">
                            <label>توضیحات متا</label>
                            <textarea type="text" name="meta_description" class="form-control" rows=3> </textarea>
                            @error ('meta_description') <small class="text-danger">{{ $message }}</small> @enderror

                        </div>
                        <div class="col-md-12 mb-3 mt-3">

                            <button type="submit" class="btn btn-primary float-start text-white">ذخیره</button>

                        </div>


                    </div>

                </form>

            </div>
        </div>

    </div>
</div>


@endsection
