 

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
                                <form method="POST" action="{{ route('register') }}" class="php-email-form">
                                    @csrf
                                    <div class=" form-group mt-3 mt-md-0">
                                        <input type="text" value="{{ old('name') }}"
                                            class="form-control text-start  @error('name')
                                        is-invalid @enderror "
                                            name="name" placeholder="الاسم" required>
                                        @error('name')
                                            <span class="text-danger"> الاسم غير صحيح </span>
                                        @enderror
                                    </div>
                                    <div class=" form-group mt-3 mt-md-0">
                                        <input type="email" value="{{ old('email') }}"
                                            class="form-control text-start  @error('email')
                                        is-invalid @enderror "
                                            name="email" placeholder="البريد الالكتروني" required>
                                        @error('email')
                                            <span class="text-danger"> البريد الالكتروني غير صحيح </span>
                                        @enderror
                                    </div>
                                    <div class=" form-group mt-3 mt-md-0">
                                        <input type="text" value="{{ old('phone') }}"
                                            class="form-control text-start  @error('phone')
                                        is-invalid @enderror "
                                            name="phone" placeholder="رقم الهاتف" required>
                                        @error('phone')
                                            <span class="text-danger"> رقم الهاتف غير صحيح </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class=" form-group">
                                                <input type="password" name="password"
                                                    class="form-control  @error('password')
                                                    is-invalid @enderror "
                                                    value="{{ old('password') }}" placeholder="كلمه المرور" required>
                                                @error('password')
                                                    <span class="text-danger"> كلمه المرور غير صحيحه </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class=" form-group">
                                                <input type="password" name="password_confirmation"
                                                    class="form-control  @error('password_confirmation')
                                        is-invalid @enderror "
                                                    value="{{ old('password_confirmation') }}"
                                                    placeholder="تأكيد كلمه المرور" required>
                                                @error('password_confirmation')
                                                    <span class="text-danger"> كلمه المرور غير متطابقه </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class=" form-group mt-3 mt-md-0">
                                                <input type="text" value="{{ old('university') }}"
                                                    class="form-control text-start  @error('university')
                                        is-invalid @enderror "
                                                    name="university" placeholder="الجامعة" required>
                                                @error('university')
                                                    <span class="text-danger"> الجامعة غير صحيحة </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class=" form-group mt-3 mt-md-0">
                                                <input type="text" value="{{ old('college') }}"
                                                    class="form-control text-start  @error('college')
                                        is-invalid @enderror "
                                                    name="college" placeholder="الكلية" required>
                                                @error('college')
                                                    <span class="text-danger"> الكلية غير صحيحة </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class=" form-group mt-3 mt-md-0">
                                                <input type="text" value="{{ old('country') }}"
                                                    class="form-control text-start  @error('country')
                                        is-invalid @enderror "
                                                    name="country" placeholder="الدولة" required>
                                                @error('country')
                                                    <span class="text-danger"> الدولة غير صحيحة </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class=" form-group mt-3 mt-md-0">
                                                <input type="text" value="{{ old('city') }}"
                                                    class="form-control text-start  @error('city')
                                        is-invalid @enderror "
                                                    name="city" placeholder="المدينة" required>
                                                @error('city')
                                                    <span class="text-danger"> المدينة غير صحيحة </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-grid mt-2">
                                        <button type="submit"> انشاء حساب </button>
                                    </div>
                                </form>
                                <div class="text-start">
                                    <p> لديك حساب؟ <a href="{{ route('login') }}" class=" btn btn-link ">تسجيل الدخول
                                        </a></p>
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
