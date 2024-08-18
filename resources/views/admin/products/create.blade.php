@extends('layouts.admin.admin')

{{-- <link rel="stylesheet" href="{{asset('web/assets/font/bootstrap-icon/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{asset('web/assets/css/bootstrap.rtl.min.css') }}">
<link rel="stylesheet" href="{{asset('web/assets/css/style.css') }}"> --}}

@section('content')



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2>افزودن محصول جدید
                    <a href="{{ route('product.index') }}" class="btn text-white btn-primary float-start">بازگشت</a>

                </h2>

            </div>

            <div class="card-body">

                @if ($errors->any())

                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error )

                    <div>{{ $error }}</div>

                    @endforeach

                </div>
                @endif

                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">خانه</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="seotag-tab" data-bs-toggle="tab" data-bs-target="#seotag-tab-pane" type="button" role="tab" aria-controls="seotag-tab-pane" aria-selected="false">تگ های سئو</button>
                        </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane" aria-selected="false">مشخصات محصول</button>
                        </li>
                        <li class="nav-item" role="presentation">

                            <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">تصویر محصول</button>

                        </li>
                        <li class="nav-item" role="presentation">

                            <button class="nav-link" id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="color-tab-pane" aria-selected="false">رنگ محصول</button>

                        </li>



                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


                            <div class="mt-3 px-3">
                                <label>دسته بندی</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($categories as $category )

                                    <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-3 px-3">

                                <label>نام محصول</label>
                                <input type="text" name="name" class="form-control" />
                            </div>

                            <div class="mt-3 px-3">

                                <label>اسلاگ محصول</label>
                                <input type="text" name="slug" class="form-control" />
                            </div>


                            <div class="mt-3 px-3">
                                <label>برند محصول</label>
                                <select name="brand" class="form-control">
                                    @foreach ($brands as $brand )

                                    <option value="{{$brand->id}}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mt-3 px-3">

                                <label>توضیحات مخنصر</label>
                                <textarea name="small_description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="mt-3 mb-3 px-3">

                                <label>توضیحات</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">


                            <div class="mt-3 px-3">

                                <label>عنوان متا</label>
                                <input type="" name="meta_title" class="form-control" />
                            </div>

                            <div class="mt-3 px-3">

                                <label>توضیحات متا</label>
                                <textarea name="meta_description" class="form-control" rows="4"></textarea>
                            </div>

                            <div class="mt-3 mb-3 px-3">

                                <label>کلمات کلیدی متا</label>
                                <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mt-3 px-3">
                                        <label>قیمت اصلی</label>
                                        <input type="text" name="original_price" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mt-3 px-3">

                                        <label>قیمت فروش</label>
                                        <input type="text" name="selling_price" class="form-control" />
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <div class="mt-3 px-3">

                                        <label>تعداد موجودی</label>
                                        <input type="text" name="quantity" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mt-3 mb-3 px-3">

                                    <label>پرفروش ها</label>
                                    <input type="checkbox" name="trending" style="width: 25px ; height: 25px" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mt-3 mb-3 px-3">

                                    <label>عدم نمایش</label>
                                    <input type="checkbox" name="status" style="width:25px ; height:25px" />
                                    </div>

                                </div>


                            </div>


                        </div>
                        <div class="tab-pane fade" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="mt-3">
                                <label>آپلود تصاویر محصول</label>

                                <input type="file" name="image[]" multiple class="form-control mt-3 mb-3"/>

                            </div>


                        </div>


                        <div class="tab-pane fade border" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">

                            <div class="mt-3 mb-3">

                                <label>انتخاب رنگ محصول</label>

                                <div class="row">

                                    @forelse ($colors as $color)

                                    <div class="col-md-3 mt-3">
                                        <div class="p-2 border">
                                            <div class="product-meta-color-items">

                                                <input type="checkbox" class="btn-check" name="colors[{{ $color->id }}]" id="{{ $color->id }}" value="{{ $color->id }}" autocomplete="off">
                                                <label class="btn " for="{{ $color->id}}"  >
                                                <span style="background-color:{{ $color->code }}"></span>
                                                {{ $color->name }}
                                                </label>
                                            </div>

                                            تعداد موجودی:<input type="number" min="0" name="colorquantity[{{ $color->id }}]" style="width:70px ;border:1px solid" />


                                        </div>
                                    </div>
                                        @empty
                                        <div class="com-mid-12">

                                            <h5>رنگی برای نمایش وجود ندارد.از منوی سمت راست،بخش رنگ محصولات،رنگ ها را اضافه کنید</h5>
                                        </div>

                                    @endforelse`

                                </div>


                            </div>

                        </div>



                        <button type="submit" class="btn btn-primary mb-3 text-white " style="margin-right:20px">ذخیره</button>

                    </div>

                </form>
            </div>


        </div>
    </div>

</div>
@endsection

