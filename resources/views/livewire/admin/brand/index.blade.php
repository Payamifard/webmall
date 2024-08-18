
<div>

    @include('livewire.admin.brand.modal-form')

    <div class="row">

        <div class="col-md-12">


            @if (session('message'))

                <div class="alert alert-success">


                    {{ session('message') }}

                </div>

            @endif

            <div class="card">

                <div class="card-header">
                    <h4> لیست برند ها

                    <a href="" data-bs-toggle="modal" data-bs-target="#addBrandModal" class="btn btn-primary btn-sm float-start text-white">افزودن برند</a>
                     </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>نام</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ( $brands as $brand )

                                <tr>

                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->status==1 ? 'غیر فعال' : 'فعال' }}</td>
                                    <td>
                                    <a href="#" wire:click="editBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#updateBrandModal" class="btn btn-sm btn-success">ویرایش</a>
                                    <a href="" wire:click="deleteBrand({{$brand->id}})" class="btn btn-sm btn-danger"  data-bs-toggle="modal" data-bs-target="#deleteBrandModal">حذف</a>
                                    </td>



                                </tr>
                            @endforeach

                        </tbody>


                    </table>
                    <div class="float-end mt-3">

                        {{ $brands->links() }}

                    </div>

                </div>

            </div>


        </div>


    </div>
</div>

@push('script')

{{-- listens for if confirmed,hides the modal --}}

<script>

window.addEventListener('close-modal',event=> {

$('#addBrandModal').modal('hide') ;
$('#updateBrandModal').modal('hide') ;
$('#deleteBrandModal').modal('hide') ;


});

</script>

@endpush
