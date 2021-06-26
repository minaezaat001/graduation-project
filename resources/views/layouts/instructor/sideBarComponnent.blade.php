<nav>
    <div class="p-3 mt-4 text-center">
        <div class="icon-menu">
            <svg class="icon icon-user-tie">
                <use xlink:href="#icon-user-tie"></use>
            </svg>
        </div>
        <h3 class="title-menu">الاسم : {{ $name }} </h3>
    </div>
    <ul>
        <li>
            <a href="{{ route('instructor.createLec') }}">
                <span>المحاضرات</span>

                <svg class="icon icon-book">
                    <use xlink:href="#icon-book"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="{{ route('instructor.createResearch') }}">
                <span>الابحاث</span>
                <svg class="icon icon-paste">
                    <use xlink:href="#icon-paste"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="{{ route('instructor.createAssiment') }}">

                <span>التكاليف</span>
                <svg class="icon icon-books">
                    <use xlink:href="#icon-books"></use>
                </svg>
            </a>
        </li>
        <li>

            <a href="{{ route('instructor.quiz') }}">
                <span>الامتحان</span>
                <svg class="icon icon-files-empty">
                    <use xlink:href="#icon-files-empty"></use>
                </svg>
            </a>
        </li>
        <li>
            <a href="#">
                <span>تسجيل خروج</span>
                <svg class="icon icon-log-out">
                    <use xlink:href="#icon-log-out"></use>
                </svg>
            </a>
        </li>
    </ul>
</nav>
