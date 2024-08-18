<!DOCTYPE html>
<html lang="FA-IR" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">

    <link rel="stylesheet" href="{{asset('web/home/assets/css/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{asset('web/home/assets/font/bootstrap-icon/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset('web/home/assets/plugin/waves/waves.min.css') }}">
    @yield('priceRange')
    @yield('slider')
    {{-- <link rel="stylesheet" href="{{asset('web/home/assets/plugin/swiper/swiper-bundle.min.css') }}"> --}}
    <link rel="stylesheet" href="{{asset('web/home/assets/plugin/timer/timer.css') }}">
    <link rel="stylesheet" href="{{asset('web/home/assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}">
    <link rel="stylesheet" href="{{asset('web/home/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('web/home/assets/css/responsive.css') }}">


    @livewireStyles

</head>

<body>


    @include('layouts.inc.frontend.header')

    @include('layouts.inc.frontend.menues')

    @include('layouts.inc.frontend.cartcanv')


    @yield('content')

    @include('layouts.inc.frontend.footer')

    @include('layouts.inc.frontend.mobile')



    <script src="{{ asset('web/home/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('web/home/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('web/home/assets/plugin/waves/waves.min.js') }}"></script>

    {{-- <script src="{{ asset('web/home/assets/plugin/swiper/swiper-bundle.min.js') }}"></script> --}}
    <script src="{{ asset('web/home/assets/plugin/timer/timer.js') }}"></script>
    <script src="{{ asset('web/home/assets/plugin/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('web/home/assets/js/app.js') }}"></script>
    <script src="{{ asset('web/home/assets/js/jquery-app.js') }}"></script>



    <!-- ===== start new update -->
    <script src="{{ asset('web/home/assets/plugin/go-to-top/script.js') }}"></script>
    <script src="{{ asset('web/home/assets/plugin/rasta-contact/script.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('web/home/assets/plugin/go-to-top/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/home/assets/plugin/rasta-contact/style.css') }}">

    <script>
        //// config floating contact
        $('#btncollapzion').Collapzion({
            _child_attribute: [{
                    'label': 'پشتیبانی تلفنی',
                    'url': 'tel:0930555555555',
                    'icon': 'bi bi-telephone'
                },
                {
                    'label': 'پشتیبانی تلگرام',
                    'url': 'https://tlgrm.me',
                    'icon': 'bi bi-telegram'
                },
                {
                    'label': 'پشتیبانی واتس آپ',
                    'url': 'https://wa.me/444444444',
                    'icon': 'bi-whatsapp'
                },

            ],
        });
    </script>
    <!-- ===== end new update -->

    {{-- <script src="{{asset('web/home/assets/plugin/bootstrap-slider/bootstrap-slider.min.js') }}"></script> --}}

    @yield('scripts')
    @stack('script')
    @livewireScripts


</body>


</html>
