<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sin In Ar || Page</title>
    <link rel="stylesheet" href="{{ URL::asset('css/vandors/all.min.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('css/vandors/bootstrap.min-rtl.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/form.css') }}" />
</head>

<body>
    <div id="reload" class="reload"></div>

    <!-- Icon -->
    <svg hidden>
        <symbol id="icon-eye" viewBox="0 0 32 32">
            <path
                d="M16 6c-6.979 0-13.028 4.064-16 10 2.972 5.936 9.021 10 16 10s13.027-4.064 16-10c-2.972-5.936-9.021-10-16-10zM23.889 11.303c1.88 1.199 3.473 2.805 4.67 4.697-1.197 1.891-2.79 3.498-4.67 4.697-2.362 1.507-5.090 2.303-7.889 2.303s-5.527-0.796-7.889-2.303c-1.88-1.199-3.473-2.805-4.67-4.697 1.197-1.891 2.79-3.498 4.67-4.697 0.122-0.078 0.246-0.154 0.371-0.228-0.311 0.854-0.482 1.776-0.482 2.737 0 4.418 3.582 8 8 8s8-3.582 8-8c0-0.962-0.17-1.883-0.482-2.737 0.124 0.074 0.248 0.15 0.371 0.228v0zM16 13c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z">
            </path>
        </symbol>
        <symbol id="icon-eye-slash" viewBox="0 0 28 28">
            <path
                d="M8.672 20.859l1.219-2.203c-1.813-1.313-2.891-3.422-2.891-5.656 0-1.234 0.328-2.453 0.953-3.516-2.438 1.25-4.469 3.219-5.953 5.516 1.625 2.516 3.922 4.625 6.672 5.859zM14.75 9c0-0.406-0.344-0.75-0.75-0.75-2.609 0-4.75 2.141-4.75 4.75 0 0.406 0.344 0.75 0.75 0.75s0.75-0.344 0.75-0.75c0-1.797 1.469-3.25 3.25-3.25 0.406 0 0.75-0.344 0.75-0.75zM20.422 6.016c0 0.031 0 0.109-0.016 0.141-3.297 5.891-6.563 11.813-9.859 17.703l-0.766 1.391c-0.094 0.156-0.266 0.25-0.438 0.25-0.281 0-1.766-0.906-2.094-1.094-0.156-0.094-0.25-0.25-0.25-0.438 0-0.25 0.531-1.094 0.688-1.359-3.031-1.375-5.578-3.719-7.375-6.531-0.203-0.313-0.313-0.688-0.313-1.078 0-0.375 0.109-0.766 0.313-1.078 3.094-4.75 7.922-7.922 13.687-7.922 0.938 0 1.891 0.094 2.812 0.266l0.844-1.516c0.094-0.156 0.25-0.25 0.438-0.25 0.281 0 1.75 0.906 2.078 1.094 0.156 0.094 0.25 0.25 0.25 0.422zM21 13c0 2.906-1.797 5.5-4.5 6.531l4.375-7.844c0.078 0.438 0.125 0.875 0.125 1.313zM28 15c0 0.406-0.109 0.734-0.313 1.078-0.484 0.797-1.094 1.563-1.703 2.266-3.063 3.516-7.281 5.656-11.984 5.656l1.156-2.063c4.547-0.391 8.406-3.156 10.844-6.937-1.156-1.797-2.641-3.375-4.406-4.594l0.984-1.75c1.937 1.297 3.891 3.25 5.109 5.266 0.203 0.344 0.313 0.672 0.313 1.078z">
            </path>
        </symbol>
        <symbol id="icon-envelope" viewBox="0 0 20 20">
            <path
                d="M18 2c1.105 0 2 0.895 2 2v0 12c0 1.105-0.895 2-2 2v0h-16c-1.105 0-2-0.895-2-2v0-12c0-1.1 0.9-2 2-2h16zM13.63 11.1l6.37 4.9v-2l-5.12-3.9 5.12-4.1v-2l-10 8-10-8v2l5.12 4.1-5.12 3.9v2l6.37-4.9 3.63 2.9 3.63-2.9z">
            </path>
        </symbol>
        <symbol id="icon-user" viewBox="0 0 32 32">
            <path
                d="M18 22.082v-1.649c2.203-1.241 4-4.337 4-7.432 0-4.971 0-9-6-9s-6 4.029-6 9c0 3.096 1.797 6.191 4 7.432v1.649c-6.784 0.555-12 3.888-12 7.918h28c0-4.030-5.216-7.364-12-7.918z">
            </path>
        </symbol>
    </svg>
    <div class="forms d-flex align-items-center">
        <div class="sidenav d-flex align-items-center justify-content-center">
            <div class="login-main-text">
                <h2>مرحبا بكم</h2>
                <p>يمكن من خلال هذه الصفحة تسجيل الدخول </p>
            </div>
        </div>
        <!-- ./text Page -->
        <div class="main">
            <img class="logo" src="images/logo/logo.jpg" alt="" width="100px" />
            <div class="login-form mx-5">
                <a href="{{ route('test') }}">dfaf</a>
                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <svg class="icon icon-user">
                            <use xlink:href="#icon-user"></use>
                        </svg>
                        <input type="text" name="email" class="form-control" placeholder="البريد الالكتروني" />
                    </div>
                    <div class="form-group mb-3">
                        <svg class="icon icon-eye-slash fa-eye-slash">
                            <use xlink:href="#icon-eye-slash"></use>
                        </svg>
                        <svg class="icon icon-eye fa-eye">
                            <use xlink:href="#icon-eye"></use>
                        </svg>
                        <input type="password" name="password" class="form-control" placeholder="كلمة المرور" />
                    </div>
                    <button type="submit" class="btn btn-log w-100 border mb-3">تسجيل الدخول</button>

                </form>
            </div>
        </div>
        <!-- ./Form Page -->
    </div>

    <script src="{{ URL::asset('js/vandors/jquery-3.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/vandors/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/form.js') }}"></script>
</body>

</html>
