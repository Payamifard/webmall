<div>
    <div>
        <div class="row">
            <div class="col-md-12">

                @if (session('message'))

                    <div class="alert alert-success">


                        {{ session('message') }}

                    </div>

                @endif





                <div class="card">
                    <div class="card-header">
                        <h2>محصولات
                            <a href="{{ route('product.create')}}" class="btn text-white  btn-primary float-start">افزودن محصول جدید</a>

                        </h2>

                    </div>

                    <div class="card-body">

                        <table class="table table-bordeerd table-striped">

                            <thead>
                                <tr>
                                    <td>شناسه</td>
                                    <td>نام</td>
                                    <td>دسته بندی</td>
                                    <td>قیمت</td>
                                    <td>موجودی</td>
                                    <td>وضعیت</td>
                                    <td>عملیات</td>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($products as $product )

                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>

                                        @if ($product->category)
                                        {{ $product->category->name }}
                                        @else
                                        بدون دسته بندی
                                        @endif
                                    </td>
                                    <td>{{ $product->selling_price }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->status ==1 ? 'غیر فعال':'فعال'}}</td>
                                    <td>
                                        {{-- <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-success">ویرایش</a>  --}}
                                      <a wire:click="editProduct({{ $product->id }})" class="btn btn-sm btn-success">ویرایش</a> 
                                        <a wire:click="destroyProduct({{ $product->id }})" class="btn btn-sm btn-danger" onclick="return confirm('آیا از حذف این محصول مطمئن هستید؟') " >حذف</a>

                                    </td>
                                </tr>

                                @endforeach



                            </tbody>


                        </table>

                        <div class="mt-5 float-end">
                            {{$products->links()}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
{{-- 
@push('script')
<script>
    Livewire.on('postAdded', postId => {
        alert('A post was added with the id of: ' + postId);
    })
    </script>
@endpush --}}
