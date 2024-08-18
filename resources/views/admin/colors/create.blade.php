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
                    <h2>رنگ ها
                        <a href="{{ route('colors.index')}}" class="btn text-white  btn-primary float-start">بازگشت</a>

                    </h2>

                </div>

                <div class="card-body">

                    <form action="{{ route('colors.store') }}" method="POST"  >


                        @csrf

                        <div class="mt-3">

                            <label>نام رنگ</label>
                            <input type="text" name="name" class="form-control"/>


                        </div>

                        <div class="mt-3">

                            <label>انتخاب رنگ</label>
                            <input type="color" name="code" />


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
