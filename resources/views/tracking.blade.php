<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="سایت نوجوان خوارزمی" />
    <meta name="author" content="موسوی" />
    <title>وب سایت سامانه آثار نوجوان خوارزمی</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>
    
    <style>
        @import url('https://v1.fontapi.ir/css/Sahel');
    </style>
    @livewireStyles
</head>

<body id="page-top" style="font-family: 'Sahel', sans-serif;">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top">جشنواره نوجوان خوارزمی</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">درباره ما</a></li>
                    <li class="nav-item"><a class="nav-link" href="#reg">ثبت اثر</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">صفحه نخست</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h4 class="mb-5">بسم الله الرحمن الرحیم</h4>
            <h5>آموزش و پرورش ناحیه 4 مشهد</h5>
            <h1 class="fw-bolder">محور برنامه نویسی جشنواره نوجوان خوارزمی</h1>
            <p class="lead">سامانه ثبت آثار جشنواره نوجوان خوارزمی</p>
            <a class="btn btn-lg btn-light" href="#reg">بررسی اطلاعات</a>
        </div>
    </header>
    <!-- About section-->
    @livewire('tracking')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">آدرس دبیرخانه: مشهد مقدس - بلوار فلسطین - فلسطین 26 - پلاک 6 - دبیرستان انرژی اتمی مشهد مقدس</p>
            <p class="m-0 text-center text-white mb-3">تلفن تماس: 37603117 - 051</p>
            <p class="m-0 text-center text-white">طراحی و پیاده سازی: دبیرستان انرژی اتمی مشهد مقدس</p>
            <p class="m-0 text-center text-white">کلیه حقوق این وب سایت محفوظ است - کپی رایت 1400</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/scripts.js') }}"></script>
    @livewireScripts
</body>

</html>