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
                    <h2>لیست اسلایدرها
                        <a href="{{ route('sliders.create')}}" class="btn text-white  btn-primary float-start">افزودن اسلایدر جدید</a>

                    </h2>

                </div>


                    <table class="table table-bordeerd table-striped">

                        <thead>
                            <tr>
                                <td>شناسه</td>
                                <td>نام</td>
                                <td>توضیحات</td>
                                <td>تصویر</td>
                                <td>وضعیت نمایش</td>
                                <td>عملیات</td>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($sliders as $slider )

                                <tr>

                                    <td>{{$slider->id}}</td>
                                    <td>{{$slider->title}}</td>
                                    <td>{{$slider->description}}</td>
                                    <td>
                                    <img src="{{ asset("$slider->image") }}" style="width:70px ;height:70px" alt="slider"   >
                                    </td>

                                    <td>{{$slider->status==1 ? "عدم نمایش" :"نمایش" }} </td>

                                    <td>
                                    <a href="{{ route('sliders.edit',$slider->id) }}" class="btn btn-success">ویرایش</a>
                                    <a href="{{ route('sliders.destroy',$slider->id) }}" onclick="return confirm('آیا می خواهید این اسلایدر را حذف کنید؟')" class="btn btn-danger">حذف</a>

                                    </td>



                                </tr>
                            @endforeach




                        </tbody>


                    </table>

                    <div class="mt-5 float-end">

                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


@endsection
