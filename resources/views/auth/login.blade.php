@extends('user.layout.user')


@section('user_content')
    <main id="main" class=" ">

        <!-- ======= Breadcrumbs ======= -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact Login_section mt-5 pt-5">

            <div class="container col-lg-6" data-aos="fade-up">

                <div class="row mt-5">

                    <div class=" mt-5 mt-lg-0">

                        <div class="card p-5">
                            <div class="card-header bg-transparent text-center">
                                <h2> أدخل بيانات حسابك لتسجيل الدخول</h2>
                                <p>أدخل بياناتك حسابك لمتابعة تطوير مهاراتك</p>
                            </div>
                            <div class="card-body text-start">
                                <form method="POST" action="{{ route('login') }}" class="php-email-form">
                                    @csrf
                                    <div class=" form-group mt-3 mt-md-0">
                                        <input type="email" value="{{ old('email') }}"
                                            class="form-control text-start  @error('email')
                                        is-invalid @enderror "
                                            name="email" placeholder="البريد الالكتروني" required>
                                        @error('email')
                                            <span class="text-danger"> البريد الالكتروني غير صحيح </span>
                                        @enderror
                                    </div>
                                    <div class=" form-group">
                                        <input type="password" name="password"
                                            class="form-control  @error('password')
                                        is-invalid @enderror "
                                            value="{{ old('password') }}" placeholder="كلمه المرور" required>
                                        @error('password')
                                            <span class="text-danger"> كلمه المرور غير صحيحه </span>
                                        @enderror
                                    </div>

                                    <p class="mt-2"><a href="" class="text-dark btn btn-link"> نسيت كلمة المرور ؟
                                        </a></p>
                                    <div class="d-grid mt-2">
                                        <button type="submit"> تسجيل الدخول</button>
                                    </div>
                                </form>
                                <div class="text-start">
                                    <p>ليس لديك حساب؟ <a href="{{ route('register') }}" class=" btn btn-link ">إنشاء حساب
                                            جديد</a></p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main>
    <!-- End #main -->
@endsection
