
<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">حذف دسته بندی</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit="destroyCategory">

                <div class="modal-body">

                    <h6>آیا می خواهیداین دسته بندی را حذف کنید؟</h6>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خیر</button>
                    <button type="submit" class="btn btn-primary">بله</button>
                </div>

            </form>

        </div>
        </div>
    </div>



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
                        <h2>دسته بندی ها
                            <a href="{{ url('admin/category/create') }}" class="btn text-white  btn-primary float-start">اضافه کردن دسته بندی</a>

                        </h2>

                    </div>

                    <div class="card-body">

                        <table class="table table-bordeerd table-striped">

                            <thead>
                                <tr>
                                    <td>شناسه</td>
                                    <td>نام</td>
                                    <td>وضعیت</td>
                                    <td>عملیات</td>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($categories as $category )

                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->status ==1 ? 'غیر فعال':'فعال'}}</td>
                                    <td>
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-success">ویرایش</a>
                                        <a href="" wire:click="deleteCategory({{ $category->id }})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">حذف</a>

                                    </td>
                                </tr>

                                @endforeach



                            </tbody>


                        </table>

                        <div class="mt-5 float-end">
                            {{$categories->links()}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@push('script')

{{-- listens for if delet confirmed,hides the deletmodal --}}

<script>

window.addEventListener('close-modal',event=> {

$('#deleteModal').modal('hide') ;

});

</script>

@endpush
