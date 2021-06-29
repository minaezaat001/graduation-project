<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>الرئيسية</title>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ URL::asset('css/vandors/bootstrap.min-rtl.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet" />
    <!-- Select Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/vandors/select.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/vandors/menu.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/vandors/aos.css') }}" />
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
</head>

<body>
    <!-- login -->
    <div id="reload" class="reload"></div>
    <!-- Start NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light nav-home">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo/logo.jpg" alt="logo" width="100px" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-4 active">
                        <a class="nav-link" href="#header">الرئيسية </a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#targets">الاهداف</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#shows">الرؤية</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="#mas">الرسالة</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="{{ route('auth.Getlogin') }}">تسجيل الدخول</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="home-header" id="header"></header>
    <!-- End Navbar -->

    <main class="home-page">
        <section class="py-5 mt-5">
            <div class="text-center mt-5 pt-5">
                <h2 class="pt-5">مرحبا بكم</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo perferendis, exercitationem
                    corrupti sit illum enim totam magnam delectus tenetur.</p>
            </div>
        </section>

        <section class="py-5" id="targets">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1500">
                        <div class="desc">
                            <h2>الاهداف</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo perferendis,
                                exercitationem corrupti sit illum enim totam magnam delectus tenetur.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-down-right" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1500">
                        <img class="w-100" src="images/home/undraw_education_f8ru.svg" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="shows">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-down-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1500">
                        <img class="w-100" src="images/home/undraw_quiz_nlyh.svg" alt="" />
                    </div>
                    <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1500">
                        <div class="desc">
                            <h2>الرؤية</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo perferendis,
                                exercitationem corrupti sit illum enim totam magnam delectus tenetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="mas">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1000">
                        <div class="desc">
                            <h2>الرسالة</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus illo perferendis,
                                exercitationem corrupti sit illum enim totam magnam delectus tenetur.</p>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <img class="w-100" src="images/home/undraw_knowledge_g5gf.svg" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- copy Right -->
    <div class="copy text-center pt-3">
        <p class="lead m-0 p-0">Copyright &copy; 2021</p>
    </div>
    <!-- JQuery Laibilaries -->
    <script src="{{ URL::asset('js/vandors/jquery-3.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/vandors/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/select.js') }}"></script>
    <script src="{{ URL::asset('js/menu.js') }}"></script>
    <script src="{{ URL::asset('js/vandors/aos.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
