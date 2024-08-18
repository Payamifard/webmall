

@extends('layouts.frontend.home')

@section('title')

{{ $category->meta_title }}
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection

@section('meta_keyword')
{{$category->meta_keyword }}
@endsection

@section('priceRange')

<!-- ======== range slider -->
{{-- <link rel="stylesheet" href="{{asset('web/home/assets/plugin/bootstrap-slider/bootstrap-slider.min.css') }}"> --}}
<link rel="stylesheet" href="{{asset('web/home/assets/plugin/bootstrap-slider/slider.css') }}">
<!-- ======== range slider -->
@endsection

@section('content')


    <body>




        <!-- start breadcroumb -->

        <div class="bread-crumb pt-3">
            <div class="container-fluid">
                <div class="content-box">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb" class="my-lg-0 my-2">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">خانه</a></li>
                                <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">فروشگاه</a></li>
                                <li class="breadcrumb-item"><a href="#" class="font-14 text-muted">گوشی هوشمند</a></li>
                                <li class="breadcrumb-item active main-color-one-color font-14" aria-current="page">گوشی
                                    شیائومی
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- end breadcroumb -->




        <!-- start content -->


        <livewire:frontend.product.index :category="$category" />
        {{-- <div class="content">


            <div class="container-fluid">

                <!-- start filter in mobile -->

                {{-- badan bayad edit konamesh --}}

                {{-- <div class="custom-filter d-lg-none d-block">
                    <button class="btn btn-filter-float border-0 main-color-two-bg shadow-box px-3 rounded-3 position-fixed"
                        style="z-index: 999;bottom:80px;" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="bi bi-funnel font-20 fw-bold text-white"></i>
                        <span class="d-block font-14 text-white">فیلتر</span>
                    </button>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">فیلتر ها</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="filter-items position-sticky top-0">
                                <div class="container-fluid">
                                    <div class="filter-item">
                                        <h5 class="filter-item-title">جستجو</h5>
                                        <div class="filter-item-content">
                                            <div class="search-form">
                                                <form action="">
                                                    <div class="search-filed">
                                                        <input type="text" placeholder="جستجوی محصولات ..."
                                                            class="form-control search-input">
                                                        <button type="submit"
                                                            class="btn search-btn main-color-one-bg rounded-pill"><i
                                                                class="bi bi-search"></i></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <h5 class="filter-item-title">دسته بندی ها</h5>
                                        <div class="filter-item-content">
                                            <form action="">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                                    <div class="form-check">
                                                        <label for="colorCheck1" class="form-check-label">موبایل <i
                                                                class="bi bi-phone me-1"></i></label>
                                                        <input type="checkbox" name="" id="colorCheck1"
                                                            class="form-check-input">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold font-14">(27)</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                                    <div class="form-check">
                                                        <label for="colorCheck5" class="form-check-label">ایرپاد <i
                                                                class="bi bi-earbuds me-1"></i></label>
                                                        <input type="checkbox" name="" id="colorCheck5"
                                                            class="form-check-input">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold font-14">(32)</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                                    <div class="form-check">
                                                        <label for="colorCheck4" class="form-check-label">تبلت <i
                                                                class="bi bi-tablet me-1"></i></label>
                                                        <input type="checkbox" name="" id="colorCheck4"
                                                            class="form-check-input">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold font-14">(14)</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                                    <div class="form-check">
                                                        <label for="colorCheck3" class="form-check-label">هدست <i
                                                                class="bi bi-headset me-1"></i></label>
                                                        <input type="checkbox" name="" id="colorCheck3"
                                                            class="form-check-input">
                                                    </div>
                                                    <div>
                                                        <span class="fw-bold font-14">(8)</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <h5 class="filter-item-title">قیمت</h5>
                                        <div class="filter-item-content">
                                            <form action="" method="get">
                                                <div class="form-group">
                                                    <input type="range" class="catRange" name="range[]">
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="number" name="" min="1500000"
                                                            class="form-control input-range-filter"
                                                            placeholder="از 1500000">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="number" name=""  min="1500000" max="3000000"
                                                            class="form-control input-range-filter"
                                                            placeholder="از 3000000">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="filter-item">
                                        <h5 class="filter-item-title">رنگ محصول</h5>
                                        <div class="filter-item-content">
                                            <div class="product-meta-color-items">
                                                <input type="radio" class="btn-check" name="options" id="option1"
                                                    autocomplete="off" checked>
                                                <label class="btn btt-light" for="option1">
                                                    <span style="background-color: #c00;"></span>
                                                    قرمز
                                                </label>

                                                <input type="radio" class="btn-check" name="options" id="option2"
                                                    autocomplete="off">
                                                <label class="btn btt-light" for="option2">
                                                    <span style="background-color: #111;"></span>
                                                    مشکی
                                                </label>

                                                <input type="radio" class="btn-check" name="options" id="option3"
                                                    autocomplete="off">
                                                <label class="btn btt-light" for="option3">
                                                    <span style="background-color: #00cc5f;"></span>
                                                    سبز
                                                </label>

                                                <input type="radio" class="btn-check" name="options" id="option4"
                                                    autocomplete="off">
                                                <label class="btn btt-light" for="option4">
                                                    <span style="background-color: #1b69f0;"></span>
                                                    آبی
                                                </label>

                                                <input type="radio" class="btn-check" name="options" id="option5"
                                                    autocomplete="off">
                                                <label class="btn btt-light" for="option5">
                                                    <span style="background-color: #891bf0;"></span>
                                                    بنفش
                                                </label>

                                                <input type="radio" class="btn-check" name="options" id="option6"
                                                    autocomplete="off">
                                                <label class="btn btt-light" for="option6">
                                                    <span style="background-color: #f0501b;"></span>
                                                    نارنجی
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-item text-center">
                                        <a href="" class="btn-outline-site">اعمال فیلتر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- end filter mobile -->

                {{-- <div class="row gy-3">
                    <div class="col-lg-3 d-lg-block d-none">
                        <div class="filter-items position-sticky top-0">
                            <div class="container-fluid">
                                <div class="filter-item">
                                    <h5 class="filter-item-title">جستجو</h5>
                                    <div class="filter-item-content">
                                        <div class="search-form">
                                            <form action="">
                                                <div class="search-filed">
                                                    <input type="text" placeholder="جستجوی محصولات ..."
                                                        class="form-control search-input">
                                                    <button type="submit"
                                                        class="btn search-btn main-color-one-bg rounded-pill"><i
                                                            class="bi bi-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <h5 class="filter-item-title">برندها</h5>
                                    <div class="filter-item-content">




                                            @forelse ($brands as $brand )

                                                @if ($brand!==null)
                                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">




                                                        <div class="form-check">



                                                            <label for=">{{ $brand->name }}" class="form-check-label">{{ $brand->name }}<i
                                                                class="bi me-1"></i></label>
                                                                <input type="checkbox" name="" id=">{{ $brand->name }}"
                                                                class="form-check-input">
                                                        </div>


                                                        <div>
                                                        <span class="fw-bold font-14">({{$brand->brandProducts->where('category_id',$category_id)->count() }})</span>

                                                        </div>

                                                    </div>

                                                @else
                                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                                                <span class="fw-bold font-14">برندی یافت نشد</span>
                                                 </div>

                                                @endif
                                             @empty




                                            @endforelse


                                    </div>

                                </div>
                                <div class="filter-item">
                                    <h5 class="filter-item-title">قیمت</h5>
                                    <div class="filter-item-content">
                                        <form action="" method="get">
                                            <div class="form-group">

                                                <input type="range" class="catRange" name="range[]">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="number" name="minrange"  min="{{ $minPrice }}"
                                                        class="form-control input-range-filter" placeholder='0'>
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" name="maxrange" id="" min="{{ $minPrice }}" max="{{$maxPrice}}"
                                                        class="form-control input-range-filter" placeholder= '0'>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="filter-item">
                                    <h5 class="filter-item-title">رنگ محصول</h5>
                                    <div class="filter-item-content">



                                        <div class="product-meta-color-items">

                                             @forelse ($colors as $color )
                                                <input type="checkbox" class="btn-check" name={{ $color->id }} id={{ $color->id }}
                                                    autocomplete="off" >
                                                <label class="btn btt-light" for={{$color->id}}>
                                                    <span style="background-color:{{$color->code}};"></span>
                                                   {{ $color->name }}
                                                </label>
                                                @empty
                                                <span>رنگی یافت نشد</span>
                                            @endforelse
                                        </div>


                                    </div>
                                </div>
                                {{-- <div class="filter-item text-center">
                                    <a href="" class="btn-outline-site">اعمال فیلتر</a>
                                </div> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="col-lg-9">
                        <div class="category-sort mb-3">
                            <div class="content-box">
                                <div class="container-fluid">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div>
                                            <h5 class="font-18">مرتب سازی</h5>
                                            <p class="mb-0 text-muted font-16">براساس</p>
                                        </div>
                                        <div class="form-checks ms-md-5 ms-0 mt-md-0 mt-3">
                                            <div class="form-check form-check-inline active">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1" checked>
                                                <label class="form-check-label" for="inlineRadio1">پیشفرض</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">محبوب ترین</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">پرفروش ترین</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio4" value="option4">
                                                <label class="form-check-label" for="inlineRadio4">جدید ترین</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio5" value="option5">
                                                <label class="form-check-label" for="inlineRadio5">ارزان ترین</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio6" value="option6">
                                                <label class="form-check-label" for="inlineRadio6">گران ترین</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category-items">

                            <livewire:frontend.product.index :catProducts="$catProducts" />

                        </div>
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}

        <!-- end content -->




    </body>

@endsection

{{-- @section('scripts')
<script src="{{asset('web/home/assets/plugin/bootstrap-slider/bootstrap-slider.min.js') }}"></script>
 <script>
        $(document).ready(function () {
            ////slider range
            $(".catRange").slider({
                id: "slider5b",
                min: {{ $minPrice }},
                max:  {{ $maxPrice }},
                range: true,
                step: 100,
                value: [{{ $minPrice }},{{ $maxPrice }}],
                rtl: 'false',
                formatter: function formatter(val) {
                    if (Array.isArray(val)) {
                        return val[0] + " تومان " + "  تا   " + val[1] + " تومان ";
                    } else {
                        return val;
                    }
                },
            });
        });
    </script>
@endsection --}}

