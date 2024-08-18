@extends('layouts.admin.admin')

@section('content')





    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>ویرایش محصول
                        <a href="{{ route('product.index') }}" class="btn text-white btn-primary float-start">بازگشت</a>

                    </h4>

                </div>

                <div class="card-body">

                    @if (session('message'))
                    <div class="alert alert-success">
                    <h5>{{ session('message') }} </h5>
                    </div>
                    @endif

                    @if ($errors->any())

                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error )

                        <div>{{ $error }}</div>

                        @endforeach

                    </div>
                    @endif
                    {{-- {{route('product.update',$product->id)}} --}}
                    <form action="{{route('product.update',$product->id)}}" method="POST" id="1" enctype="multipart/form-data">

                        @method('PUT')
                        @csrf

                        <ul class="nav nav-tabs border" id="myTab" role="tablist">
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

                            <div class="tab-pane fade show active border mb-4" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


                                <div class="mt-3 px-3">
                                    <label>دسته بندی</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category )

                                        <option value="{{$category->id }}" {{ $category->id==$product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mt-3 px-3">

                                    <label>نام محصول</label>
                                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" />
                                </div>

                                <div class="mt-3 px-3">

                                    <label>اسلاگ محصول</label>
                                    <input type="text" name="slug" value="{{ $product->slug }}" class="form-control" />
                                </div>


                                <div class="mt-3 px-3">
                                    <label>برند محصول</label>
                                    <select name="brand" class="form-control">
                                        @foreach ($brands as $brand )

                                        <option value="{{$brand->id}}" {{ $brand->id ==$product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="mt-3 px-3">

                                    <label>توضیحات مخنصر</label>
                                    <textarea name="small_description" class="form-control" rows="4">{{ $product->small_description }}</textarea>
                                </div>

                                <div class="mt-3 mb-3 px-3">

                                    <label>توضیحات</label>
                                    <textarea name="description"  class="form-control" rows="4">{{ $product->description }}</textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade border mb-4" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab" tabindex="0">


                                <div class="mt-3 px-3">

                                    <label>عنوان متا</label>
                                    <input type="" name="meta_title"  value="{{ $product->meta_title }}" class="form-control" />
                                </div>

                                <div class="mt-3 px-3">

                                    <label>توضیحات متا</label>
                                    <textarea name="meta_description"  class="form-control" rows="4">{{ $product->meta_description }}</textarea>
                                </div>

                                <div class="mt-3 mb-3 px-3">

                                    <label>کلمات کلیدی متا</label>
                                    <textarea name="meta_keyword"   class="form-control" rows="4">{{ $product->meta_keyword }}</textarea>
                                </div>


                            </div>
                            <div class="tab-pane fade border mb-4" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mt-3 px-3">
                                            <label>قیمت اصلی</label>
                                            <input type="text" name="original_price" value="{{ $product->original_price }}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mt-3 px-3">

                                            <label>قیمت فروش</label>
                                            <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control" />
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <div class="mt-3 px-3">

                                            <label>تعداد موجودی</label>
                                            <input type="integer" name="quantity" value="{{ $product->quantity }}" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mt-3 mb-3 px-3">

                                        <label>پرفروش ها</label>
                                        <input type="checkbox" name="trending" {{ $product->trending==true ? 'checked' : ''}} style="width: 25px ; height: 25px" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mt-3 mb-3 px-3">

                                        <label>عدم نمایش</label>
                                        <input type="checkbox" name="status"  {{ $product->status==true ? 'checked' : ''}} style="width:25px ; height:25px" />
                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane fade border" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                                <div class="mt-3 mb-3">
                                    <label>آپلود تصاویر محصول</label>

                                    <input type="file" name="image[]" multiple class="form-control mt-3 mb-3"/>

                                </div>

                                <div>
                                    @if($product->productImages)

                                    <div class="row">

                                        @foreach ($product->productImages as $image )
                                        <div class="col-md-2">

                                        <img src="{{ asset($image->image) }}" style="width:80px ;height:80px; "
                                        class="me-4 mb-4 border" alt="Img" />
                                        <a href="{{ route('product.deleteImage',$image->id) }}" onclick="return confirm('آیا از حذف این تصویر مطمئن هستید؟') "  class="d-block me-4 mb-4" >حذف</a>
                                        </div>
                                        @endforeach



                                    </div>

                                    @endif
                                </div>


                            </div>

                            <div class="tab-pane fade border" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">


                                <div class="mt-3 mb-3">

                                    <label class="h5 px-3">افزودن رنگ جدید:</label>
                                    <br>
                                    <label class="mt-3 px-3" style="color:darkred">برای انتخاب روی رنگ مورد نظر کلیک کنید</label>
                                    <div class="color-row row">

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

                                                تعداد موجودی:<input type="integer" min="0" name="colorquantity[{{ $color->id }}]" style="width:70px ;border:1px solid" />


                                            </div>
                                        </div>
                                            @empty
                                            <div class="com-mid-12">

                                                {{-- <h5>رنگی برای نمایش وجود ندارد.از منوی سمت راست،بخش رنگ محصولات،رنگ ها را اضافه کنید</h5> --}}
                                                <label class="mt-3 px-3" style="color:darkred">رنگی برای نمایش وجود ندارد.از منوی سمت راست،بخش رنگ محصولات،رنگ ها را اضافه کنید</label>
                                            </div>

                                        @endforelse

                                    </div>

                                </div>

                                <div class="mt-3">
                                <label class="h5 mt-3 mb-3 px-3">ویرایش رنگ و موجودی:</label>
                                </div>

                                <div class="table-responsive mt-3">
                                    <table class="table table-sm table-bordered table-striped">

                                        <thead style="background-color:rgb(219, 213, 213)">
                                            <tr>
                                                <th>نام رنگ</th>
                                                <th>موجودی</th>
                                                <th>حذف</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if ($product->productColors->isEmpty())

                                                <tr>
                                                <td style="color:red">رنگی برای این محصول ثبت نشده است</td>
                                                <td>-</td>
                                                <td>-</td>
                                                </tr>
                                            @endif

                                            @foreach ($product->productColors as $prodcolor )
                                                <tr class="prod-color-tr">
                                                    <td>

                                                        <label class="mb-3"> {{ $prodcolor->color->name}}</label>
                                                        <div style=" width: 35px;height: 35px;border-radius:20%;

                                                            background-color:{{ $prodcolor->color->code }} ">

                                                        </div>


                                                    </td>

                                                    <td>

                                                            {{-- <form wire:submit="updateColorQuantity(Object.fromEntries(new FormData($event.target)),'{{$prodcolor->id}}')">

                                                                <div class="input-group mb-3" style="width:150px">
                                                                    <input name="quantity" type="number"  min="0" value="{{$prodcolor->quantity}}" class="form-control form-control-sm" />
                                                                    <button type="submit" class="btn btn-primary btn-sm text-white">ویرایش</button>

                                                                </div>
                                                            </form>
                                                         --}}


                                                         <div class="input-group mb-3" style="width:150px">
                                                            {{-- <input wire:model.live="quantity{{$prodcolor->quantity}}" :key="{{ $prodcolor->quantity}}" type="number"  min="0" value="{{$prodcolor->quantity}}" class="form-control form-control-sm" />
                                                            {{-- <button  wire:click="updateColorQuantity({{ $prodcolor->id }})" class="btn btn-primary btn-sm text-white">ویرایش</button> --}}
                                                            {{-- <button  wire:click="updateColorQuantity0({{ $prodcolor->id }})" class="btn btn-primary btn-sm text-white">ویرایش</button> --}}

                                                            <input name="quantity" type="integer"  min="0" value="{{$prodcolor->quantity}}" class="productColorQuantity form-control form-control-sm" />
                                                            <button type="button" value="{{$prodcolor->id}}" class="updateProductColorBtn btn btn-primary btn-sm text-white">ویرایش</button>

                                                        </div>

                                                    </td>
                                                    <td>


                                                        <button  type="button" value="{{ $prodcolor->id }}" class="deleteProductColorBtn btn btn-danger btn-sm text-white">حذف</button>

                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>



                            </div>

                           <button type="submit" class="btn btn-primary mb-3 text-white mt-4 " style="margin-right:20px">ذخیره</button>

                        </div>

                    </form>
                </div>


            </div>
        </div>

    </div>


@endsection

@section('scripts')

<script>

    //update color qnt
    //jqdoc
    $(document).ready(function () {

        //csrf ajax token from laravel documentation
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        //jqon
        $(document).on('click','.updateProductColorBtn', function () {
            var product_id={{ $product->id }} ;
            var prod_color_id=$(this).val() ;
            var qty=$(this).closest('.prod-color-tr').find('.productColorQuantity').val() ;

            if(qty<0) {

                alert('مقدار موجودی نمی تواند کمتر از صفر باشد')
            }

            //alert(product_id) ;

            var data={
            'product_id':product_id ,
            'qty' :qty
            };


            //jqajx
            $.ajax({
                type: "POST",
                url: "/admin/product-color/"+prod_color_id,
                data: data,
                success: function (response) {

                    alert(response.message)

                }
            });


        });

        //delet color qnt

        $(document).on('click','.deleteProductColorBtn', function () {
            var prod_color_id=$(this).val() ;
            var thisClick=$(this) ;


            $.ajax({
                type: "get",
                url: "/admin/product-color/"+prod_color_id+"/delete",
                 success: function (response) {

                thisClick.closest('.prod-color-tr').remove() ;

                alert(response.message) ;

                }
            });




        });


    });
</script>


@endsection



