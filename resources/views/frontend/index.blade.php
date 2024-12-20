@extends('layouts.frontend.home')

@section('slider')

<link rel="stylesheet" href="{{asset('web/home/assets/plugin/swiper/swiper-bundle.min.css') }}">
<script src="{{ asset('web/home/assets/plugin/swiper/swiper-bundle.min.js') }}"></script>

@endsection




@section('content')





    <!-- start slider -->

    <div class="main-slider py-20">
        <div class="container-fluid">
            <div class="row gy-3">
                <!-- start top page shegeft angiz slider -->
                <div class="col-lg-3 order-lg-1 order-2">

                    <div class="swiper" id="suggetMoment">

                        <div class="swiper-wrapper position-relative">
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>40% تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img src="web/home/assets/image/product/wach1.jpg" loading="lazy" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                            <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                                Smartwatch</span>
                                        </div>
                                        <div class="rating">
                                            <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                            <div class="icon"><i class="bi bi-star-fill"></i></div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <div class="price">
                                            <p class="new-price">3,175,000 تومان</p>
                                            <p class="old-price">6,500,000 تومان</p>
                                        </div>
                                        <div class="link">
                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                <i class="bi bi-basket text-white"></i>
                                                <span class="text-white">خرید محصول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>40% تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img src="web/home/web/home/assets/image/product/wach2.jpg" loading="lazy" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                            <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                                Smartwatch</span>
                                        </div>
                                        <div class="rating">
                                            <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                            <div class="icon"><i class="bi bi-star-fill"></i></div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <div class="price">
                                            <p class="new-price">3,175,000 تومان</p>
                                            <p class="old-price">6,500,000 تومان</p>
                                        </div>
                                        <div class="link">
                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                <i class="bi bi-basket text-white"></i>
                                                <span class="text-white">خرید محصول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <div class="product-timer">
                                        <div class="timer-label">
                                            <span>40% تخفیف</span>
                                        </div>
                                        <div class="timer">
                                            <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img src="web/home/assets/image/product/wach3.jpg" loading="lazy" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="product-title">
                                        <div class="title">
                                            <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                            <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                                Smartwatch</span>
                                        </div>
                                        <div class="rating">
                                            <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                            <div class="icon"><i class="bi bi-star-fill"></i></div>
                                        </div>
                                    </div>
                                    <div class="product-action">
                                        <div class="price">
                                            <p class="new-price">3,175,000 تومان</p>
                                            <p class="old-price">6,500,000 تومان</p>
                                        </div>
                                        <div class="link">
                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                <i class="bi bi-basket text-white"></i>
                                                <span class="text-white">خرید محصول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-progress-bar">
                            <span class="slide_progress-bar"></span>
                        </div>
                    </div>
                </div>
                <!-- End top page shegeft angiz slider -->

                <!-- start main slider -->
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="slider shadow-box">
                        <div class="swiper" id="homeSlider">

                            <div class="swiper-wrapper">


                                @forelse($sliders as $slider)
                                    <div class="swiper-slide">

                                        <a href="">
                                            <img src="{{ $slider->image }}" loading="lazy" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    @empty
                                    <span>هیچ اسلایدری انتخاب نشده است</span>
                                @endforelse

                            </div>
                            <div class="swiper-button-next d-lg-flex d-none"></div>
                            <div class="swiper-button-prev d-lg-flex d-none"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- End main slider -->
            </div>
        </div>
    </div>

    <!-- end slider -->

    <!-- start feature -->

    <div class="feature">
        <div class="container-fluid">
            <div
                class="row justify-content-center g-2 row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5">
                <div class="col">
                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white shadow-box">
                        <div class="image">
                            <img src="web/home/assets/image/history.png" alt="" class="img-fluid">
                        </div>
                        <div class="desc ms-3">
                            <h6 class=" mb-2">ضمانت بازگشت وجه</h6>
                            <p class="text-muted font-13  mb-0">در صورت عدم رضایت</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white shadow-box">
                        <div class="image">
                            <img src="web/home/assets/image/credit-card.png" alt="" class="img-fluid">
                        </div>
                        <div class="desc ms-3">
                            <h6 class="  mb-2">تضمین قیمت</h6>
                            <p class="text-muted font-13  mb-0">کمترین قیمت بازار</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white shadow-box">
                        <div class="image">
                            <img src="web/home/assets/image/fast.png" alt="" class="img-fluid">
                        </div>
                        <div class="desc ms-3">
                            <h6 class="  mb-2">ارسال سریع</h6>
                            <p class="text-muted font-13  mb-0">امن و مطمئن</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white shadow-box">
                        <div class="image">
                            <img src="web/home/assets/image/headphone.png" alt="" class="img-fluid">
                        </div>
                        <div class="desc ms-3">
                            <h6 class="  mb-2">پشتیبانی عالی</h6>
                            <p class="text-muted font-13  mb-0">24 ساعته شبانه روز</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item d-flex align-items-center p-3 rounded-3 bg-white shadow-box">
                        <div class="image">
                            <img src="web/home/assets/image/badge.png" alt="" class="img-fluid">
                        </div>
                        <div class="desc ms-3">
                            <h6 class="  mb-2">اصالت کالا</h6>
                            <p class="text-muted font-13  mb-0">تضمین اصالت کالا</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end feature -->

    <!-- start service -->

    <div class="service">
        <div class="container-fluid">
            <div class="row gy-3 justify-content-between align-items-center">
                <div class="col-lg-3">
                    <div class="service-title">
                        <h6 class="font-25 text-white mb-3">
                            بیش از 5000 محصول
                        </h6>
                        <p class="mb-0 text-white font-13">برترین برندهای اصلی و خارجی</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div
                        class="row gy-2 gx-2 service-logo justify-content-md-end justify-content-center align-items-center">
                        <div class="col-md-2 col-4 item">
                            <a href="">
                                <img src="web/home/assets/image/brand1-1.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-2 col-4 item">
                            <a href="">
                                <img src="web/home/assets/image/brand1-2.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-2 col-4 item">
                            <a href="">
                                <img src="web/home/assets/image/brand1-3.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-2 col-4 item">
                            <a href="">
                                <img src="web/home/assets/image/brand1-4.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-2 col-4 item">
                            <a href="">
                                <img src="web/home/assets/image/brand1-5.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-2 col-4 item">
                            <a href="">
                                <img src="web/home/assets/image/brand1-6.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end service -->

    <!-- start category -->

    <div class="category py-20">
        <div class="container-fluid">
            <div
                class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
                <div class="title d-flex align-items-center">
                    <img src="web/home/assets/image/square.png" alt="" class="img-fluid">
                    <h5 class="font-16 ms-3">دسته بندی<span
                            class="main-color-one-color d-inline-block ms-1">محصولات</span></h5>
                </div>
                <div class="link">
                    <a href="" class="border-animate fromCenter pb-1 fw-bold">
                        مشاهده همه
                        <i class="bi bi-chevron-double-left main-color-one-color"></i>
                    </a>
                </div>
            </div>
            <div class="category-items">
                <div class="row gy-3 justify-content-center">

                    @foreach ($categories as $category)


                    <div class="col-lg-3 col-sm-6 col-12">

                        <div class="category-item p-3 rounded-3 bg-white shadow-box">
                            <a href="">
                                <div
                                    class="d-flex align-items-center justify-content-md-flex-start justify-content-between">
                                    <div class="image">
                                        <img src="{{ $category->image }}" alt="" class="img-fluid">
                                    </div>
                                    <div class="text ms-3">
                                        <p class="text-center font-14 text-overflow-1">{{ $category->name }}</p>
                                        <a href="{{ route('frontend.products',$category->slug) }}"
                                            class="btn text-muted-two btn-sm font-14 px-3 light-btn shadow-sm"><span>مشاهده</span>
                                            <i
                                                class="bi bi-chevron-double-left font-16 main-color-one-color ms-2"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

    <!-- end category -->

    <!-- start category -->

    <div class="amazing py-20">
        <div class="container-fluid">
            <div
                class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
                <div class="title d-flex align-items-center">
                    <img src="web/home/assets/image/square.png" alt="" class="img-fluid">
                    <h5 class="font-16 ms-3">اسلایدر<span class="main-color-one-color d-inline-block ms-1">شگفت
                            انگیز</span></h5>
                </div>
                <div class="link">
                    <a href="" class="border-animate fromCenter pb-1 fw-bold">
                        مشاهده همه
                        <i class="bi bi-chevron-double-left main-color-one-color"></i>
                    </a>
                </div>
            </div>
            <div class="amazing-slider">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="amazing-pro-parent">
                            <div class="swiper amazing-slider-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="slider-item rounded-3 shadow-box bg-white">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-1.jpg" loading="lazy"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="timer">
                                                        <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                                        </div>
                                                    </div>
                                                    <div class="desc mt-3">
                                                        <div class="title">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <h3 class="text-overflow-1 font-18 me-2">لپ تاپ 14.2
                                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h3>
                                                                <span class="discount danger-label mt-sm-0 mt-3">17%
                                                                    تخفیف</span>
                                                            </div>
                                                        </div>
                                                        <div class="short-desc mt-3">
                                                            <p class="mb-2 text-overflow-3 text-muted">
                                                                برخی از شرکت‌های فعال در زمینه گوشی‌های هوشمند، تا به
                                                                امروز توانسته‌اند گوشی‌های هوشمند انعطاف‌پذیر یا همان
                                                                تاشو را روانه بازار کنند. یکی از این شرکت‌های موفق،
                                                                هوآوی است که P50 Pocket Premium Edition به عنوان یکی از
                                                                جدید‌ترین گوشی‌ خاص این شرکت با صفحه‌نمایشی تاشو معرفی
                                                                شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.9
                                                                اینچی تاشو مجهز شده است و حتی در حالت تاشو هم هوآوی
                                                                صفحه‌نمایش ثانویه با ابعاد 1.04 اینچی را برای این گوشی
                                                                هوشمند در نظر گرفته است
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="meta">
                                                        <ul class="navbar-nav flex-lg-row justify-content-between">
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">
                                                                    صفحه نمایش 27 اینج </span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">حافظه
                                                                    داخلی یک ترابایت</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">مخصوص
                                                                    بازی</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">پردازنده
                                                                    گرافیکی nvidia</span></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="foot mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="price d-flex align-items-center">
                                                            <h6 class="font-25 main-color-one-color">958,000</h6>
                                                            <h6 class="font-12 ms-1">هزار تومان</h6>
                                                            <h6 class="font-13 old-price ms-2">1,500,000</h6>
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                                <i class="bi bi-basket text-white"></i>
                                                                <span class="text-white">خرید محصول</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item rounded-3 shadow-box bg-white">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-2.jpg" loading="lazy"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="timer">
                                                        <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                                        </div>
                                                    </div>
                                                    <div class="desc mt-3">
                                                        <div class="title">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <h3 class="text-overflow-1 font-18 me-2">لپ تاپ 14.2
                                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h3>
                                                                <span class="discount danger-label mt-sm-0 mt-3">17%
                                                                    تخفیف</span>
                                                            </div>
                                                        </div>
                                                        <div class="short-desc mt-3">
                                                            <p class="mb-2 text-overflow-3 text-muted">
                                                                برخی از شرکت‌های فعال در زمینه گوشی‌های هوشمند، تا به
                                                                امروز توانسته‌اند گوشی‌های هوشمند انعطاف‌پذیر یا همان
                                                                تاشو را روانه بازار کنند. یکی از این شرکت‌های موفق،
                                                                هوآوی است که P50 Pocket Premium Edition به عنوان یکی از
                                                                جدید‌ترین گوشی‌ خاص این شرکت با صفحه‌نمایشی تاشو معرفی
                                                                شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.9
                                                                اینچی تاشو مجهز شده است و حتی در حالت تاشو هم هوآوی
                                                                صفحه‌نمایش ثانویه با ابعاد 1.04 اینچی را برای این گوشی
                                                                هوشمند در نظر گرفته است
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="meta">
                                                        <ul class="navbar-nav flex-lg-row justify-content-between">
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">
                                                                    صفحه نمایش 27 اینج </span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">حافظه
                                                                    داخلی یک ترابایت</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">مخصوص
                                                                    بازی</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">پردازنده
                                                                    گرافیکی nvidia</span></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="foot mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="price d-flex align-items-center">
                                                            <h6 class="font-25 main-color-one-color">958,000</h6>
                                                            <h6 class="font-12 ms-1">هزار تومان</h6>
                                                            <h6 class="font-13 old-price ms-2">1,500,000</h6>
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                                <i class="bi bi-basket text-white"></i>
                                                                <span class="text-white">خرید محصول</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item rounded-3 shadow-box bg-white">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-3.jpg" loading="lazy"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="timer">
                                                        <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                                        </div>
                                                    </div>
                                                    <div class="desc mt-3">
                                                        <div class="title">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <h3 class="text-overflow-1 font-18 me-2">لپ تاپ 14.2
                                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h3>
                                                                <span class="discount danger-label mt-sm-0 mt-3">17%
                                                                    تخفیف</span>
                                                            </div>
                                                        </div>
                                                        <div class="short-desc mt-3">
                                                            <p class="mb-2 text-overflow-3 text-muted">
                                                                برخی از شرکت‌های فعال در زمینه گوشی‌های هوشمند، تا به
                                                                امروز توانسته‌اند گوشی‌های هوشمند انعطاف‌پذیر یا همان
                                                                تاشو را روانه بازار کنند. یکی از این شرکت‌های موفق،
                                                                هوآوی است که P50 Pocket Premium Edition به عنوان یکی از
                                                                جدید‌ترین گوشی‌ خاص این شرکت با صفحه‌نمایشی تاشو معرفی
                                                                شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.9
                                                                اینچی تاشو مجهز شده است و حتی در حالت تاشو هم هوآوی
                                                                صفحه‌نمایش ثانویه با ابعاد 1.04 اینچی را برای این گوشی
                                                                هوشمند در نظر گرفته است
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="meta">
                                                        <ul class="navbar-nav flex-lg-row justify-content-between">
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">
                                                                    صفحه نمایش 27 اینج </span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">حافظه
                                                                    داخلی یک ترابایت</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">مخصوص
                                                                    بازی</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">پردازنده
                                                                    گرافیکی nvidia</span></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="foot mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="price d-flex align-items-center">
                                                            <h6 class="font-25 main-color-one-color">958,000</h6>
                                                            <h6 class="font-12 ms-1">هزار تومان</h6>
                                                            <h6 class="font-13 old-price ms-2">1,500,000</h6>
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                                <i class="bi bi-basket text-white"></i>
                                                                <span class="text-white">خرید محصول</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item rounded-3 shadow-box bg-white">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-4.jpg" loading="lazy"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="timer">
                                                        <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                                        </div>
                                                    </div>
                                                    <div class="desc mt-3">
                                                        <div class="title">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <h3 class="text-overflow-1 font-18 me-2">لپ تاپ 14.2
                                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h3>
                                                                <span class="discount danger-label mt-sm-0 mt-3">17%
                                                                    تخفیف</span>
                                                            </div>
                                                        </div>
                                                        <div class="short-desc mt-3">
                                                            <p class="mb-2 text-overflow-3 text-muted">
                                                                برخی از شرکت‌های فعال در زمینه گوشی‌های هوشمند، تا به
                                                                امروز توانسته‌اند گوشی‌های هوشمند انعطاف‌پذیر یا همان
                                                                تاشو را روانه بازار کنند. یکی از این شرکت‌های موفق،
                                                                هوآوی است که P50 Pocket Premium Edition به عنوان یکی از
                                                                جدید‌ترین گوشی‌ خاص این شرکت با صفحه‌نمایشی تاشو معرفی
                                                                شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.9
                                                                اینچی تاشو مجهز شده است و حتی در حالت تاشو هم هوآوی
                                                                صفحه‌نمایش ثانویه با ابعاد 1.04 اینچی را برای این گوشی
                                                                هوشمند در نظر گرفته است
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="meta">
                                                        <ul class="navbar-nav flex-lg-row justify-content-between">
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">
                                                                    صفحه نمایش 27 اینج </span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">حافظه
                                                                    داخلی یک ترابایت</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">مخصوص
                                                                    بازی</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">پردازنده
                                                                    گرافیکی nvidia</span></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="foot mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="price d-flex align-items-center">
                                                            <h6 class="font-25 main-color-one-color">958,000</h6>
                                                            <h6 class="font-12 ms-1">هزار تومان</h6>
                                                            <h6 class="font-13 old-price ms-2">1,500,000</h6>
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                                <i class="bi bi-basket text-white"></i>
                                                                <span class="text-white">خرید محصول</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="slider-item rounded-3 shadow-box bg-white">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-5.jpg" loading="lazy"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="timer">
                                                        <div class='countdown' data-date="2025-01-01" data-time="18:30">
                                                        </div>
                                                    </div>
                                                    <div class="desc mt-3">
                                                        <div class="title">
                                                            <div class="d-flex align-items-center flex-wrap">
                                                                <h3 class="text-overflow-1 font-18 me-2">لپ تاپ 14.2
                                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h3>
                                                                <span class="discount danger-label mt-sm-0 mt-3">17%
                                                                    تخفیف</span>
                                                            </div>
                                                        </div>
                                                        <div class="short-desc mt-3">
                                                            <p class="mb-2 text-overflow-3 text-muted">
                                                                برخی از شرکت‌های فعال در زمینه گوشی‌های هوشمند، تا به
                                                                امروز توانسته‌اند گوشی‌های هوشمند انعطاف‌پذیر یا همان
                                                                تاشو را روانه بازار کنند. یکی از این شرکت‌های موفق،
                                                                هوآوی است که P50 Pocket Premium Edition به عنوان یکی از
                                                                جدید‌ترین گوشی‌ خاص این شرکت با صفحه‌نمایشی تاشو معرفی
                                                                شده است. در نمای رو‌به‌رویی این گوشی به صفحه‌نمایش 6.9
                                                                اینچی تاشو مجهز شده است و حتی در حالت تاشو هم هوآوی
                                                                صفحه‌نمایش ثانویه با ابعاد 1.04 اینچی را برای این گوشی
                                                                هوشمند در نظر گرفته است
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="meta">
                                                        <ul class="navbar-nav flex-lg-row justify-content-between">
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">
                                                                    صفحه نمایش 27 اینج </span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">حافظه
                                                                    داخلی یک ترابایت</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">مخصوص
                                                                    بازی</span></li>
                                                            <li class="nav-item"><span
                                                                    class="nav-link text-overflow-1 font-14 fw-bold">پردازنده
                                                                    گرافیکی nvidia</span></li>
                                                        </ul>
                                                    </div>
                                                    <div
                                                        class="foot mt-3 d-flex justify-content-between align-items-center flex-wrap">
                                                        <div class="price d-flex align-items-center">
                                                            <h6 class="font-25 main-color-one-color">958,000</h6>
                                                            <h6 class="font-12 ms-1">هزار تومان</h6>
                                                            <h6 class="font-13 old-price ms-2">1,500,000</h6>
                                                        </div>
                                                        <div class="link">
                                                            <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                                                <i class="bi bi-basket text-white"></i>
                                                                <span class="text-white">خرید محصول</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination d-lg-none d-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-block d-none">
                        <div class="parent">

                            <div class="swiper amazing-slider-link" thumbsSlider="">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="row gy-2">
                                                <div class="col-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-1.jpg" loading="lazy"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="title">
                                                        <h6 class="font-14 text-overflow-2">لپ تاپ 14.2 اینچی اپل مدل
                                                            2021 MacBook MKGR3 M1 Pro</h6>
                                                        <p class="mb-0 text-muted font-12 mt-2 text-overflow-2">Apple
                                                            MacBook MKGR3 M1 Pro 2021 14.2 inch laptop</p>
                                                    </div>
                                                    <div class="price">
                                                        <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                                class="main-color-one-color">1,750,000</span> <small
                                                                class="font-11">تومان</small></p>
                                                        <p class="text-end old-price price-discount">2,750,000 <small
                                                                class="font-11">تومان</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="row gy-2">
                                                <div class="col-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-2.jpg" loading="lazy"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="title">
                                                        <h6 class="font-14 text-overflow-2">لپ تاپ 14.2 اینچی اپل مدل
                                                            2021 MacBook MKGR3 M1 Pro</h6>
                                                        <p class="mb-0 text-muted font-12 mt-2 text-overflow-2">Apple
                                                            MacBook MKGR3 M1 Pro 2021 14.2 inch laptop</p>
                                                    </div>
                                                    <div class="price">
                                                        <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                                class="main-color-one-color">1,750,000</span> <small
                                                                class="font-11">تومان</small></p>
                                                        <p class="text-end old-price price-discount">2,750,000 <small
                                                                class="font-11">تومان</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="row gy-2">
                                                <div class="col-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-3.jpg" loading="lazy"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="title">
                                                        <h6 class="font-14 text-overflow-2">لپ تاپ 14.2 اینچی اپل مدل
                                                            2021 MacBook MKGR3 M1 Pro</h6>
                                                        <p class="mb-0 text-muted font-12 mt-2 text-overflow-2">Apple
                                                            MacBook MKGR3 M1 Pro 2021 14.2 inch laptop</p>
                                                    </div>
                                                    <div class="price">
                                                        <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                                class="main-color-one-color">1,750,000</span> <small
                                                                class="font-11">تومان</small></p>
                                                        <p class="text-end old-price price-discount">2,750,000 <small
                                                                class="font-11">تومان</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="row gy-2">
                                                <div class="col-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-4.jpg" loading="lazy"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="title">
                                                        <h6 class="font-14 text-overflow-2">لپ تاپ 14.2 اینچی اپل مدل
                                                            2021 MacBook MKGR3 M1 Pro</h6>
                                                        <p class="mb-0 text-muted font-12 mt-2 text-overflow-2">Apple
                                                            MacBook MKGR3 M1 Pro 2021 14.2 inch laptop</p>
                                                    </div>
                                                    <div class="price">
                                                        <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                                class="main-color-one-color">1,750,000</span> <small
                                                                class="font-11">تومان</small></p>
                                                        <p class="text-end old-price price-discount">2,750,000 <small
                                                                class="font-11">تومان</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="row gy-2">
                                                <div class="col-4">
                                                    <div class="image">
                                                        <img src="web/home/assets/image/product/laptop-5.jpg" loading="lazy"
                                                            alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="title">
                                                        <h6 class="font-14 text-overflow-2">لپ تاپ 14.2 اینچی اپل مدل
                                                            2021 MacBook MKGR3 M1 Pro</h6>
                                                        <p class="mb-0 text-muted font-12 mt-2 text-overflow-2">Apple
                                                            MacBook MKGR3 M1 Pro 2021 14.2 inch laptop</p>
                                                    </div>
                                                    <div class="price">
                                                        <p class="text-end new-price mb-2 price-off fw-bold"><span
                                                                class="main-color-one-color">1,750,000</span> <small
                                                                class="font-11">تومان</small></p>
                                                        <p class="text-end old-price price-discount">2,750,000 <small
                                                                class="font-11">تومان</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end category -->

    <!-- start product slider -->

    <div class="product-slider site-slider py-20">
        <div class="container-fluid">
            <div
                class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
                <div class="title d-flex align-items-center">
                    <img src="web/home/assets/image/square.png" alt="" class="img-fluid">
                    <h5 class="font-16 ms-3"><span class="main-color-one-color d-inline-block ms-1">پرفروشترین
                            محصولات</span> فروشگاه</h5>
                </div>
                <div class="link">
                    <a href="" class="border-animate fromCenter pb-1 fw-bold">
                        مشاهده همه
                        <i class="bi bi-chevron-double-left main-color-one-color"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="parent">
            <div class="container-fluid">
                <div class="swiper product-slider-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/wach1.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/wach2.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/television1.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/television2.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/product-image3.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/product-image1.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/product-image2.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/product-image4.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/product-image1.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/product-image6.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/wach4.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/wach3.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/wach3.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/wach1.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/wach2.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/wach1.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

    </div>

    <!-- end product slider -->

    <!-- start banner -->

    <div class="banner py-20">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-lg-3 col-6">
                    <a href="">
                        <img src="web/home/assets/image/banner-1.webp" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="">
                        <img src="web/home/assets/image/banner-2.webp" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="">
                        <img src="web/home/assets/image/banner-3.webp" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="">
                        <img src="web/home/assets/image/banner-4.webp" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- end banner -->

    <!-- start new product -->

    <div class="products-row py-20">
        <div class="container-fluid">
            <div
                class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
                <div class="title d-flex align-items-center">
                    <img src="web/home/assets/image/square.png" alt="" class="img-fluid">
                    <h5 class="font-16 ms-3"><span class="main-color-one-color d-inline-block ms-1">پرفروشترین
                            محصولات</span> فروشگاه</h5>
                </div>
                <div class="link">
                    <a href="" class="border-animate fromCenter pb-1 fw-bold">
                        مشاهده همه
                        <i class="bi bi-chevron-double-left main-color-one-color"></i>
                    </a>
                </div>
            </div>
            <div class="parent">
                <div class="row g-3">
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/laptop-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">1</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/laptop-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">2</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/laptop-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">3</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/laptop-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">4</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/laptop-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">5</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/product-image1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">6</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/product-image2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">7</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/wach2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">8</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/wach3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">9</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/wach4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">10</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/television3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">11</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item bg-white p-2 shadow-box rounded-3">
                            <div class="row gy-2 align-items-center">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="web/home/assets/image/product/television1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex align-items-center">
                                        <div class="number me-2">
                                            <h4 class="font-22 main-color-one-color">12</h4>
                                        </div>
                                        <a href="">
                                            <div class="title">
                                                <h6 class="font-14 text-overflow-2">لپ تاپ 14.2
                                                    اینچی اپل مدل 2021 MacBook MKGR3 M1 Pro</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end new product -->

    <!-- start banner -->

    <div class="banner py-20">
        <div class="container-fluid">
            <div class="row g-3">
                <div class="col-sm-4">
                    <a href="">
                        <img src="web/home/assets/image/banner-11.jpg" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="">
                        <img src="web/home/assets/image/banner-12.jpg" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="">
                        <img src="web/home/assets/image/banner-13.jpg" class="img-fluid rounded-3 shadow-box" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- end banner -->

    <!-- start product slider -->

    <div class="product-slider site-slider theme-2 py-20">
        <div class="container-fluid">
            <div
                class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
                <div class="title d-flex align-items-center">
                    <img src="web/home/assets/image/square.png" alt="" class="img-fluid">
                    <h5 class="font-16 ms-3"><span class="main-color-one-color d-inline-block ms-1">پرفروشترین
                            محصولات</span> فروشگاه</h5>
                </div>
                <div class="link">
                    <a href="" class="border-animate fromCenter pb-1 fw-bold">
                        مشاهده همه
                        <i class="bi bi-chevron-double-left main-color-one-color"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="parent">
            <div class="container-fluid">
                <div class="swiper product-slider-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/wach3.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/wach4.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/wach1.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/wach2.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/product-image3.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/product-image1.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/laptop-5.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/laptop-1.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/laptop-3.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/laptop-4.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/laptop-1.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/laptop-2.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/television3.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/television4.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-box ">
                                <div class="product-timer">
                                    <div class="timer-label">
                                        <span>40% تخفیف</span>
                                    </div>
                                    <div class="product-header-btn">
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مقایسه"><i class="bi bi-shuffle"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="افزودن به علاقه مندی ها"><i class="bi bi-heart"></i></a>
                                        <a href="" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="مشاهده سریع"><i class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-image">
                                    <img src="web/home/assets/image/product/television1.jpg" loading="lazy" alt=""
                                        class="img-fluid one-image">
                                    <img src="web/home/assets/image/product/television2.jpg" loading="lazy" alt=""
                                        class="img-fluid two-image">
                                </div>
                                <div class="product-title">
                                    <div class="title">
                                        <p class="text-overflow-1">ساعت هوشمند شیائومی</p>
                                        <span class="text-muted text-overflow-1">Mibro Lite XPAW004
                                            Smartwatch</span>
                                    </div>
                                    <div class="rating">
                                        <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                        <div class="icon"><i class="bi bi-star-fill"></i></div>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <div class="price">
                                        <p class="new-price">3,175,000 تومان</p>
                                        <p class="old-price">6,500,000 تومان</p>
                                    </div>
                                    <div class="link">
                                        <a href="" class="btn border-0 rounded-3 main-color-one-bg">
                                            <i class="bi bi-basket text-white"></i>
                                            <span class="text-white">خرید محصول</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

    </div>

    <!-- end product slider -->

    <!-- start blog -->

    <div class="blog-slider site-slider site-slider-sm py-20">

        <div class="container-fluid">
            <div
                class="header-content mb-4 bg-white shadow-box rounded-3 p-3 d-flex align-items-center justify-content-between flex-wrap">
                <div class="title d-flex align-items-center">
                    <img src="web/home/assets/image/square.png" alt="" class="img-fluid">
                    <h5 class="font-16 ms-3">آخرین مطالب <span class="main-color-one-color d-inline-block">وبلاگ</span>
                    </h5>
                </div>
                <div class="link">
                    <a href="" class="border-animate fromCenter pb-1 fw-bold">
                        مشاهده همه
                        <i class="bi bi-chevron-double-left main-color-one-color"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="parent">
            <div class="container-fluid">
                <div class="swiper product-slider-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-1.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-2.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-3.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-4.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-5.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-6.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-7.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <a href="">
                                    <div class="image">
                                        <img src="web/home/assets/image/blog-8.jpg" alt="" class="img-fluid">
                                    </div>
                                    <div class="title">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="title-item">
                                                <i class="bi bi-tag me-1"></i>
                                                <span class="font-12">آموزشی</span>
                                            </div>
                                            <div class="title-item">
                                                <i class="bi bi-alarm me-1"></i>
                                                <span class="font-12">1 خرداد 1402</span>
                                            </div>
                                        </div>
                                        <h4 class="font-16 text-overflow-1 h4"> ارز دیجیتال چیست و چگونه استخراج میشود؟
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- end blog -->








@endsection


