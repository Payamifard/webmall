<div>

    <div class="content">


        <div class="container-fluid">

            <!-- start filter in mobile -->

            {{-- badan bayad edit konamesh --}}

            <div class="custom-filter d-lg-none d-block">
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
            </div>

            <!-- end filter mobile -->

            <div class="row gy-3">
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




                                                    <div class="form-check" wire:ignore>



                                                        <label  class="form-check-label">{{ $brand->name }}<i
                                                            class="bi me-1"></i></label>
                                                            <input type="checkbox"  value="{{ $brand->id }}" wire:model="brandInputs"
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
                                <div class="filter-item-content"  >

                                        <div class="range_container" wire:ignore>
                                            <div class="sliders_control">
                                               <input id="fromSlider" type="range" wire:model="min_value" value={{$min_value }} min={{$minPrice }} max={{ $maxPrice }} step="1000"/>
                                               <input id="toSlider" type="range" wire:model="max_value" value={{$max_value }} min={{$minPrice }} max={{$maxPrice}} step="1000"/>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <label>از قیمت:</label>
                                                <input type="number" name="minrange"  min="{{ $min_value }}"
                                                    class="form-control input-range-filter" placeholder='{{$min_value }}'>
                                            </div>
                                            <div class="col-6">
                                                <label>تا قیمت:</label>
                                                <input type="number" name="maxrange" id="" min="{{ $min_value }}" max="{{$max_value}}"
                                                    class="form-control input-range-filter" placeholder= '{{$max_value}}'>
                                            </div>
                                        </div>

                                </div>
                            </div>

                            <div class="filter-item">
                                <h5 class="filter-item-title">رنگ محصول</h5>
                                <div class="filter-item-content">



                                    <div class="product-meta-color-items" wire:ignore>

                                         @forelse ($colors as $color )
                                            <input type="checkbox" class="btn-check" value={{ $color->id }} wire:model="colorInputs" id={{ $color->id }}
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

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="category-sort mb-3">
                        <div class="content-box">
                            <div class="container-fluid">
                                <div class="d-flex align-items-center flex-wrap">
                                    <div>
                                        <h5 class="font-18">مرتب سازی</h5>
                                        <p class="mb-0 text-muted font-16">براساس</p>
                                    </div>
                                    <div class="form-checks ms-md-5 ms-0 mt-md-0 mt-3" wire:ignore>
                                        <div class="form-check form-check-inline active">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" wire:model="sortOption" value="0" checked>
                                            <label class="form-check-label" for="inlineRadio1">پیش فرض</label>
                                        </div>
                                        {{-- <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">محبوب ترین</label>
                                        </div> --}}
                                        {{-- <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">پرفروش ترین</label>
                                        </div> --}}
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio4" wire:model="sortOption" value="1">
                                            <label class="form-check-label" for="inlineRadio4">جدید ترین</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio5" wire:model="sortOption" value="2">
                                            <label class="form-check-label" for="inlineRadio5">ارزان ترین</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" wire:model="sortOption" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio6" value="3">
                                            <label class="form-check-label" for="inlineRadio6">گران ترین</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="category-items">

                        <div class="row g-3">

                            @forelse ($catProducts as $catProduct )
                                                <div class="col-lg-4">
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

                                                                        @if($catProduct->productImages->count() == 0)
                                                                        <img src="" loading="lazy" alt=""
                                                                            class="img-fluid one-image">
                                                                        @endif

                                                                        @if($catProduct->productImages->count() == 1)

                                                                            <img src="{{ asset($catProduct->productImages[0]->image) }}" loading="lazy" alt=""
                                                                            class="img-fluid one-image">

                                                                            <img src="{{ asset($catProduct->productImages[0]->image) }}" loading="lazy" alt=""
                                                                            class="img-fluid two-image">
                                                                        @endif

                                                                        @if($catProduct->productImages->count() > 1)

                                                                        <img src="{{ asset($catProduct->productImages[0]->image) }}" loading="lazy" alt=""
                                                                        class="img-fluid one-image">
                                                                        <img src="{{ asset($catProduct->productImages[1]->image) }}" loading="lazy" alt=""
                                                                                class="img-fluid two-image">
                                                                        @endif



                                                                    </div>
                                                                    <div class="product-title">
                                                                        <div class="title">
                                                                            <p class="text-overflow-1">{{ $catProduct->name }}</p>
                                                                            <span class="text-muted text-overflow-1">{{ $catProduct->description }}
                                                                            </span>
                                                                        </div>
                                                                        <div class="rating">
                                                                            <div class="number"><span class="text-muted font-12">(15+) 4.8</span></div>
                                                                            <div class="icon"><i class="bi bi-star-fill"></i></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <div class="price">
                                                                            <p class="new-price">{{ $catProduct->selling_price }} تومان</p>
                                                                            <p class="old-price">{{ $catProduct->original_price }} تومان</p>
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

                                                        @empty

                                                            <span>محصولی یافت نشد</span>

                            @endforelse
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
