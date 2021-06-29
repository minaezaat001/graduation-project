 <nav role="navigation navbar navbar-expand-lg" class="menu show">
     <ul class="navbar-nav">
         <li class="nav-item">
             <a href="{{ route('student.index') }}" class="nav-link">
                 <span>الرئيسية</span>
                 <svg class="icon icon-home">
                     <use xlink:href="#icon-home"></use>
                 </svg>
             </a>
         </li>

         <li class="nav-item">
             <a href="{{ route('student.getlecture') }}" class="nav-link">
                 <span>المحاضرات</span> <svg class="icon icon-book">
                     <use xlink:href="#icon-book"></use>
                 </svg></a>
         </li>

         <li class="nav-item">
             <a href="{{ route('student.researchget') }}" class="nav-link">
                 <span>الابحاث</span> <svg class="icon icon-paste">
                     <use xlink:href="#icon-paste"></use>
                 </svg></a>
         </li>
         <li class="nav-item">
             <a href="{{ route('student.assimentget') }}" class="nav-link">
                 <span>التكاليف</span> <svg class="icon icon-books">
                     <use xlink:href="#icon-books"></use>
                 </svg></a>
         </li>
         <li class="nav-item">
             <a href="#" class="nav-link">
                 <span>الامتحان</span> <svg class="icon icon-files-empty">
                     <use xlink:href="#icon-files-empty"></use>
                 </svg></a>
         </li>
         <li class="nav-item">
             <a href="{{ route('auth.logout') }}" class="nav-link">
                 <span>تسجيل خروج</span> <svg class="icon icon-log-out">
                     <use xlink:href="#icon-log-out"></use>
                 </svg></a>
         </li>
     </ul>
 </nav>
