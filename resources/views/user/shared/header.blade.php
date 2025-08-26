    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="logo_div">
                <a href="{{ route('user_pages.index') }}" class="logo me-auto"><img src="{{asset('img/Vector.svg')}}" alt=""
                        class="img-fluid" /></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="{{ route('user_pages.index') }}">الرئيسيه</a></li>
                    <li><a href="{{ route('user_pages.index') }}#about">من نحن</a></li>
                    {{-- <li><a href="courses.html">الدورات</a></li> --}}
                    {{-- <li><a href="trainers.html">المحاضرين</a></li> --}}
                    {{-- <li><a href="events.html">الاحداث والمناسبات</a></li> --}}
                    {{-- <li><a href="#features"> الاقسام</a></li> --}}

                    <li><a href="{{ route('user_pages.contact') }}">تواصل ماعنا</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <div>
                <a href="{{route("login")}}" class="get-started-btn"> تسجيل الدخول </a>
            </div>
        </div>
    </header>
    <!-- End Header -->
