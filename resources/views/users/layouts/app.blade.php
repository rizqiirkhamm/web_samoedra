<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <!-- Menggunakan asset() Laravel untuk memanggil file CSS di public/css/ -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/output.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <div class="layout-wrapper active w-full">

        <div class="relative flex w-full">
            @include('users.partials.sidebar')
        <div class="body-wrapper flex-1 overflow-x-hidden dark:bg-darkblack-500">
            @include('users.partials.header')
            <main class="w-full px-6 pb-6 pt-[100px] sm:pt-[156px] xl:px-12 xl:pb-12" style="height: 100vh">
            @yield('content')
            </main>
        </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script>
      AOS.init();
    </script>
    <script src="{{ asset('js/quill.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/dashboard-users.js') }}"></script>

    <!-- Common Scripts -->
    <script src="{{ asset('js/common.js') }}"></script>
    
    <!-- Page Specific Scripts -->
    @stack('scripts')
</body>

</html>
