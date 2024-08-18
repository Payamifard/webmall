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

            @if ($errors->any())

            <div class="alert alert-warning">
                @foreach ($errors->all() as $error )

                <div>{{ $error }}</div>

                @endforeach

            </div>
            @endif



            <div class="card">
                <div class="card-header">
                    <h2>اسلایدر ها
                        <a href="{{ route('sliders.index')}}" class="btn text-white  btn-primary float-start">بازگشت</a>

                    </h2>

                </div>

                <div class="card-body">

                    <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data" >


                        @csrf

                        <div class="mt-3">

                            <label>نام</label>
                            <input type="text" name="title" class="form-control"/>


                        </div>

                        <div class="mt-3">

                            <label>توضیحات</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>

                        </div>

                        <div class="mt-3">

                            <label>تصویر</label>
                            <input type="file" name="image" class="form-control"/>

                        </div>

                        <div class="mt-3">

                            <label>عدم نمایش</label>

                            <input type="checkbox" name="status" style="width:30px ;height:30px"/>

                        </div>


                        <div class="mt-3">

                            <button type="submit" class="btn btn-primary mt-3 text-white" >ذخیره</button>

                        </div>



                        <div class="mt-5 float-end">
                            {{-- {{$colors->links()}} --}}
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
