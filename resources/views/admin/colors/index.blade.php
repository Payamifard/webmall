@extends('layouts.admin.admin')

@section('content')

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
                    <h2>رنگ ها
                        <a href="{{ route('colors.create')}}" class="btn text-white  btn-primary float-start">افزودن رنگ جدید</a>

                    </h2>

                </div>


                    <table class="table table-bordeerd table-striped">

                        <thead>
                            <tr>
                                <td>شناسه</td>
                                <td>نام</td>
                                <td>رنگ</td>
                                <td>عملیات</td>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($colors as $color )

                            <tr>
                                <td>{{ $color->id }}</td>
                                <td>{{ $color->name }}</td>
                                <td>
                                    <div style=" width: 25px;
                                    height: 25px;
                                    border-radius:20%;
                                     background-color:{{ $color->code }}">
                                    </div>


                                </td>
                                <td>
                                    <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-sm btn-success">ویرایش</a>
                                    <a href="{{ route('colors.destroy',$color->id) }}"  class="btn btn-sm btn-danger" onclick="return confirm('آیا از حذف این رنگ مطمئن هستید؟') " >حذف</a>

                                </td>
                            </tr>

                            @endforeach



                        </tbody>


                    </table>

                    <div class="mt-5 float-end">
                         {{$colors->links()}}
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


@endsection
