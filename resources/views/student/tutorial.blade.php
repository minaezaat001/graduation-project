<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>المحتوي التعليمي</title>
    <!-- Links -->
    <link rel="stylesheet" href="{{ URL::asset('student/css/vandors/bootstrap.min-rtl.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('student/css/vandors/select.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('student/css/style.css') }}" />
</head>

<body>
    <!-- Start Menu -->
    <header>
        <!-- Icons -->
        <svg hidden>
            <symbol id="icon-bars" viewBox="0 0 24 28">
                <path
                    d="M24 21v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1zM24 13v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1zM24 5v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1z">
                </path>
            </symbol>
            <symbol id="icon-home" viewBox="0 0 32 32">
                <path d="M32 18.451l-16-12.42-16 12.42v-5.064l16-12.42 16 12.42zM28 18v12h-8v-8h-8v8h-8v-12l12-9z">
                </path>
            </symbol>
            <symbol id="icon-book" viewBox="0 0 32 32">
                <path
                    d="M28 4v26h-21c-1.657 0-3-1.343-3-3s1.343-3 3-3h19v-24h-20c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h24v-28h-2z">
                </path>
                <path
                    d="M7.002 26v0c-0.001 0-0.001 0-0.002 0-0.552 0-1 0.448-1 1s0.448 1 1 1c0.001 0 0.001-0 0.002-0v0h18.997v-2h-18.997z">
                </path>
                <symbol id="icon-books" viewBox="0 0 36 32">
                    <path
                        d="M7 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM6 10h-4v-2h4v2z">
                    </path>
                    <path
                        d="M17 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM16 10h-4v-2h4v2z">
                    </path>
                    <path
                        d="M23.909 5.546l-5.358 2.7c-0.491 0.247-0.691 0.852-0.443 1.343l8.999 17.861c0.247 0.491 0.852 0.691 1.343 0.443l5.358-2.7c0.491-0.247 0.691-0.852 0.443-1.343l-8.999-17.861c-0.247-0.491-0.852-0.691-1.343-0.443z">
                    </path>
                </symbol>
                <symbol id="icon-paste" viewBox="0 0 32 32">
                    <path
                        d="M22 4h-4v-2c0-1.1-0.9-2-2-2h-4c-1.1 0-2 0.9-2 2v2h-4v4h16v-4zM16 4h-4v-1.996c0.001-0.001 0.002-0.002 0.004-0.004h3.993c0.001 0.001 0.003 0.002 0.004 0.004v1.996zM26 10v-5c0-0.55-0.45-1-1-1h-2v2h1v4h-6l-6 6v8h-8v-18h1v-2h-2c-0.55 0-1 0.45-1 1v20c0 0.55 0.45 1 1 1h9v6h20v-22h-6zM18 12.828v3.172h-3.172l3.172-3.172zM30 30h-16v-12h6v-6h10v18z">
                    </path>
                </symbol>
                <symbol id="icon-files-empty" viewBox="0 0 32 32">
                    <path
                        d="M28.681 11.159c-0.694-0.947-1.662-2.053-2.724-3.116s-2.169-2.030-3.116-2.724c-1.612-1.182-2.393-1.319-2.841-1.319h-11.5c-1.379 0-2.5 1.122-2.5 2.5v23c0 1.378 1.121 2.5 2.5 2.5h19c1.378 0 2.5-1.122 2.5-2.5v-15.5c0-0.448-0.137-1.23-1.319-2.841zM24.543 9.457c0.959 0.959 1.712 1.825 2.268 2.543h-4.811v-4.811c0.718 0.556 1.584 1.309 2.543 2.268v0zM28 29.5c0 0.271-0.229 0.5-0.5 0.5h-19c-0.271 0-0.5-0.229-0.5-0.5v-23c0-0.271 0.229-0.5 0.5-0.5 0 0 11.499-0 11.5 0v7c0 0.552 0.448 1 1 1h7v15.5z">
                    </path>
                    <path
                        d="M18.841 1.319c-1.612-1.182-2.393-1.319-2.841-1.319h-11.5c-1.378 0-2.5 1.121-2.5 2.5v23c0 1.207 0.86 2.217 2 2.45v-25.45c0-0.271 0.229-0.5 0.5-0.5h15.215c-0.301-0.248-0.595-0.477-0.873-0.681z">
                    </path>
                </symbol>
                <symbol id="icon-log-out" viewBox="0 0 24 24">
                    <path
                        d="M9 20h-4c-0.276 0-0.525-0.111-0.707-0.293s-0.293-0.431-0.293-0.707v-14c0-0.276 0.111-0.525 0.293-0.707s0.431-0.293 0.707-0.293h4c0.552 0 1-0.448 1-1s-0.448-1-1-1h-4c-0.828 0-1.58 0.337-2.121 0.879s-0.879 1.293-0.879 2.121v14c0 0.828 0.337 1.58 0.879 2.121s1.293 0.879 2.121 0.879h4c0.552 0 1-0.448 1-1s-0.448-1-1-1zM18.586 11h-9.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h9.586l-3.293 3.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5-5c0.092-0.092 0.166-0.202 0.217-0.324 0.15-0.362 0.078-0.795-0.217-1.090l-5-5c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z">
                    </path>
                </symbol>
            </symbol>
        </svg>

        <div class="primary-nav">
            <div class="head d-flex justify-content-between">
                <button class="nav-toggle navbar-toggler">
                    <svg class="icon icon-bars">
                        <use xlink:href="#icon-bars"></use>
                    </svg>
                </button>
                <img src="images/header/logo2.jpg" width="40px" height="40px" alt="logo" />
            </div>

            @include('layouts.student.sideBarComponnent')
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/slider/slider.jpg" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider/slider2.jpg" alt="Second slide" />
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider/slider3.jpg" alt="Third slide" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- End Menu -->

    <!-- Content -->
    <section class="content-luatchar py-5">
        <div class="container">
            <div class="col-12">
                <h2>zoom</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Corrupti doloribus, aliquid delectus impedit
                    debitis laudantium aspernatur temporibus rerum molestias
                    eius!
                </p>
                <a href="{{ URL::asset('totu/Zoom For Student.pdf') }}">حمل من هنا</a>
            </div>
            <div class="col-12 mt-5">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%">
                    <source src="{{ URL::asset('totu/Zoom For Student.mp4') }}" type="video/mp4" />
                </video>
            </div>
            <div class="col-12 mt-5 mb-4">
                <h2>teams</h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Corrupti doloribus, aliquid delectus impedit
                    debitis laudantium aspernatur temporibus rerum molestias
                    eius!
                </p>
                <a href="{{ URL::asset('totu/Zoom For Student.pdf') }}">حمل من هنا</a>
            </div>
            <div class="col-12">
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%">
                    <source src="{{ URL::asset('totu/Zoom For Student.mp4') }}" type="video/mp4" />
                </video>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script src="{{ URL::asset('student/js/vandors/jquery-3.0.min.js') }}"></script>
    <script src="{{ URL::asset('student/js/vandors/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('student/js/vandors/select.js') }}"></script>
    <script src="{{ URL::asset('student/js/main.js') }}"></script>
</body>

</html>
