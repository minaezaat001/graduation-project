<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>الامتحان</title>
        <link rel="stylesheet" href="{{ URL::asset('css/vandors/bootstrap.min-rtl.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet" />
        <!-- Select Style -->
        <link rel="stylesheet" href="{{ URL::asset('css/vandors/select.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/vandors/menu.css') }}" />
        <!-- Main Style -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    </head>
    <body>
        <div id="reload" class="reload"></div>
        <!-- Start NavBar -->
        <header>
            <img class="w-100" src={{ URL::asset('images/header/wave.svg') }} alt="" draggable="false" />
            <img src={{ URL::asset('images/logo/logo.jpg') }} alt="" class="logo" width="100px" />
        </header>
        <div class="menu-tab">
            <div id="one"></div>
            <div id="two"></div>
            <div id="three"></div>
        </div>
        <div class="menu-hide">
            <!-- Icon -->
            <svg hidden>
                <symbol id="icon-book" viewBox="0 0 32 32">
                    <path d="M28 4v26h-21c-1.657 0-3-1.343-3-3s1.343-3 3-3h19v-24h-20c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h24v-28h-2z"></path>
                    <path d="M7.002 26v0c-0.001 0-0.001 0-0.002 0-0.552 0-1 0.448-1 1s0.448 1 1 1c0.001 0 0.001-0 0.002-0v0h18.997v-2h-18.997z"></path>
                </symbol>
                <symbol id="icon-paste" viewBox="0 0 32 32">
                    <path
                        d="M22 4h-4v-2c0-1.1-0.9-2-2-2h-4c-1.1 0-2 0.9-2 2v2h-4v4h16v-4zM16 4h-4v-1.996c0.001-0.001 0.002-0.002 0.004-0.004h3.993c0.001 0.001 0.003 0.002 0.004 0.004v1.996zM26 10v-5c0-0.55-0.45-1-1-1h-2v2h1v4h-6l-6 6v8h-8v-18h1v-2h-2c-0.55 0-1 0.45-1 1v20c0 0.55 0.45 1 1 1h9v6h20v-22h-6zM18 12.828v3.172h-3.172l3.172-3.172zM30 30h-16v-12h6v-6h10v18z"
                    ></path>
                </symbol>
                <symbol id="icon-user-tie" viewBox="0 0 32 32">
                    <path d="M10 6c0-3.314 2.686-6 6-6s6 2.686 6 6c0 3.314-2.686 6-6 6s-6-2.686-6-6zM24.002 14h-1.107l-6.222 12.633 2.327-11.633-3-3-3 3 2.327 11.633-6.222-12.633h-1.107c-3.998 0-3.998 2.687-3.998 6v10h24v-10c0-3.313 0-6-3.998-6z"></path>
                </symbol>
                <symbol id="icon-log-out" viewBox="0 0 24 24">
                    <path
                        d="M9 20h-4c-0.276 0-0.525-0.111-0.707-0.293s-0.293-0.431-0.293-0.707v-14c0-0.276 0.111-0.525 0.293-0.707s0.431-0.293 0.707-0.293h4c0.552 0 1-0.448 1-1s-0.448-1-1-1h-4c-0.828 0-1.58 0.337-2.121 0.879s-0.879 1.293-0.879 2.121v14c0 0.828 0.337 1.58 0.879 2.121s1.293 0.879 2.121 0.879h4c0.552 0 1-0.448 1-1s-0.448-1-1-1zM18.586 11h-9.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h9.586l-3.293 3.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5-5c0.092-0.092 0.166-0.202 0.217-0.324 0.15-0.362 0.078-0.795-0.217-1.090l-5-5c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"
                    ></path>
                </symbol>
                <symbol id="icon-books" viewBox="0 0 36 32">
                    <path d="M7 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM6 10h-4v-2h4v2z"></path>
                    <path d="M17 4h-6c-0.55 0-1 0.45-1 1v22c0 0.55 0.45 1 1 1h6c0.55 0 1-0.45 1-1v-22c0-0.55-0.45-1-1-1zM16 10h-4v-2h4v2z"></path>
                    <path d="M23.909 5.546l-5.358 2.7c-0.491 0.247-0.691 0.852-0.443 1.343l8.999 17.861c0.247 0.491 0.852 0.691 1.343 0.443l5.358-2.7c0.491-0.247 0.691-0.852 0.443-1.343l-8.999-17.861c-0.247-0.491-0.852-0.691-1.343-0.443z"></path>
                </symbol>
                <symbol id="icon-files-empty" viewBox="0 0 32 32">
                    <path
                        d="M28.681 11.159c-0.694-0.947-1.662-2.053-2.724-3.116s-2.169-2.030-3.116-2.724c-1.612-1.182-2.393-1.319-2.841-1.319h-11.5c-1.379 0-2.5 1.122-2.5 2.5v23c0 1.378 1.121 2.5 2.5 2.5h19c1.378 0 2.5-1.122 2.5-2.5v-15.5c0-0.448-0.137-1.23-1.319-2.841zM24.543 9.457c0.959 0.959 1.712 1.825 2.268 2.543h-4.811v-4.811c0.718 0.556 1.584 1.309 2.543 2.268v0zM28 29.5c0 0.271-0.229 0.5-0.5 0.5h-19c-0.271 0-0.5-0.229-0.5-0.5v-23c0-0.271 0.229-0.5 0.5-0.5 0 0 11.499-0 11.5 0v7c0 0.552 0.448 1 1 1h7v15.5z"
                    ></path>
                    <path d="M18.841 1.319c-1.612-1.182-2.393-1.319-2.841-1.319h-11.5c-1.378 0-2.5 1.121-2.5 2.5v23c0 1.207 0.86 2.217 2 2.45v-25.45c0-0.271 0.229-0.5 0.5-0.5h15.215c-0.301-0.248-0.595-0.477-0.873-0.681z"></path>
                </symbol>
            </svg>
            @include('layouts.instructor.sideBarComponnent',['name'=>'mina'])
        </div>
        <!-- End Navbar -->

        <section id="quiz">
            <div class="container">
                <h3 class="mb-4">أرسال امتحان جديد</h3>

                <div class="d-flex mb-4">
                    <input class="border mr-3 p-2" type="text" placeholder="اسم الامتحان" />
                    <input class="border mr-3 p-2" min="0" type="number" placeholder="مدة الامتحان" />
                    <select data-menu>
                        <optgroup label="اختار الشعبة ">
                            <option value="" hidden>الشعبة</option>
                            <option value="informationSystems">نظم ومعلومات ادراية</option>
                            <option value="accounting">محاسبة</option>
                            <option value="businessManagement">ادارة اعمال</option>
                            <option value="languages">لغات</option>
                            <option value="engineering">هندسة</option>
                        </optgroup>
                    </select>

                    <select data-menu>
                        <optgroup label="اختار الفرقة ">
                            <option value="" hidden>الفرقة الدراسية</option>
                            <option value="first">الاولي</option>
                            <option value="second">الثانية</option>
                            <option value="third">الثالثة</option>
                            <option value="fourth">الرابعة</option>
                        </optgroup>
                    </select>

                    <select data-menu>
                        <optgroup label="اختار الماده ">
                            <option value="" hidden>اسم المادة</option>
                            <option value="first">الاولي</option>
                            <option value="second">الثانية</option>
                            <option value="third">الثالثة</option>
                            <option value="fourth">الرابعة</option>
                        </optgroup>
                    </select>
                </div>
                <!-- ./ Selected  -->
                <div class="row">
                    <div class="col-4">
                        <h3>انشاء الاسئلة</h3>
                        <select class="w-100 border mt-3 px-2 custom-select type_quesions">
                            <optgroup label="نوع الاسئلة ">
                                <option value="" hidden>اختر نوع السوال</option>
                                <option value="mulit">اختيار من متعدد</option>
                                <option value="trueF">صح - غلط</option>
                            </optgroup>
                        </select>
                        <div class="mulit">
                            <input class="border w-100 border mt-3 p-2 inp_title" type="text" placeholder="عنوان السوال" />
                            <input class="border w-100 border mt-3 p-2 inp_answer_a" type="text" placeholder="الاجابة الصحيحة" />
                            <input class="border w-100 border mt-3 p-2 inp_answer_b" type="text" placeholder="الاجابة الخاطئة" />
                            <input class="border w-100 border mt-3 p-2 inp_answer_c" type="text" placeholder="الاجابة الخاطئة" />
                            <input class="border w-100 border mt-3 p-2 inp_answer_d" type="text" placeholder="الاجابة الخاطئة" />
                        </div>
                        <div class="true_area off">
                            <input class="border w-100 border mt-3 p-2 inp_title_tf" type="text" placeholder="عنوان السوال" />
                            <input class="border w-100 border mt-3 p-2 inp_answer_a_tf" type="text" placeholder="الاجابة الصحيحة" />
                            <input class="border w-100 border mt-3 p-2 inp_answer_b_tf" type="text" placeholder="الاجابة الخاطئة" />
                        </div>

                        <button class="border w-100 border mt-3 p-2 btn addBtnStyle creat_question">اضافة السوال</button>
                        <!-- ./Add Questions -->
                    </div>
                    <!-- ./col -->
                    <div class="col-8">
                        <ol class="questions border p-4 mt-3">
                            <div class="title"></div>
                            <div class="answer_area"></div>
                        </ol>
                        <button class="border w-100 border mt-3 p-2 btn btnStyle">ارسال الامتحان</button>
                        <!-- ./All Question -->
                    </div>

                    <!-- ./col -->
                </div>
                <!-- ./Row -->
            </div>
        </section>

        <!-- copy Right -->
        <div class="copy text-center pt-3 mt-4"><p class="lead">Copyright &copy; 2021</p></div>
        <!-- JQuery Laibilaries -->
        <script src="{{ URL::asset('js/vandors/jquery-3.0.min.js') }}"></script>
        <script src="{{ URL::asset('js/vandors/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/select.js') }}"></script>
        <script src="{{ URL::asset('js/menu.js') }}"></script>
        <script src="{{ URL::asset('js/creatquiz.js') }}"></script>
        <script src="{{ URL::asset('js/script.js') }}"></script>    </body>
</html>
