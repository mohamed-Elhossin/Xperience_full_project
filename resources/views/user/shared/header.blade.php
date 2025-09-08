    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="logo_div">
                <a href="{{ route('user_pages.index') }}" class="logo me-auto"><img src="{{ asset('img/Vector.svg') }}"
                        alt="" class="img-fluid" /></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="active" href="{{ route('user_pages.index') }}">الرئيسيه</a></li>
                    <li><a href="{{ route('user_pages.index') }}#about">من نحن</a></li>
                    <li><a href="{{ route('pay_courses.index') }}">الدورات</a></li>
                    {{-- <li><a href="trainers.html">المحاضرين</a></li> --}}
                    {{-- <li><a href="events.html">الاحداث والمناسبات</a></li> --}}
                    <li><a href="{{ route('instructor.index') }}"> كن محاضر</a></li>

                    <li><a href="{{ route('user_pages.contact') }}">تواصل ماعنا</a></li>


                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>

            </nav>
            <!-- .navbar -->

            <div>
                @auth
                    <div class="dropdown">
                        <button class="btn get-started-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">تعديل البيانات</a></li>
                            <li><a class="dropdown-item" href="{{ route('change_password') }}">تغير كلمة المرور</a></li>
                            <hr>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li><a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); this.closest('form').submit();"> تسجيل خروج </a>
                                </li>
                            </form>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn get-started-btn">تسجيل الدخول</a>
                @endauth

            </div>
        </div>
    </header>
    <!-- End Header -->
