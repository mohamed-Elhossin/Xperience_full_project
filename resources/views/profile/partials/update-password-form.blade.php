
@extends('user.layout.user')

@section('user_content')
    <main id="main">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2> معلومات الملف الشخصي</h2>
                <p class="mt-1"> قم بتحديث معلومات الملف الشخصي وعنوان البريد الإلكتروني الخاص بحسابك. </p>
            </div>
        </div>

        <section id="contact" class="contact">

            <div class="container col-md-8" data-aos="fade-up">

                <div class="row mt-5">

                    <div class="  mt-5 mt-lg-0">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ route('password.update') }}" role="form"
                                    class="php-email-form">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="password" name="current_password"
                                                class="form-control @error('current_password', 'updatePassword') is-invalid @enderror text-start"
                                                placeholder="كلمه المرور الحاليه" required>
                                            @error('current_password', 'updatePassword')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <input type="password" name="password"
                                                class="form-control @error('password', 'updatePassword') is-invalid @enderror text-start"
                                                placeholder="كلمه المرور الجديده" required>
                                            @error('password', 'updatePassword')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <input type="password" name="password_confirmation"
                                                class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror text-start"
                                                placeholder="تأكيد المرور الجديده" required>
                                            @error('password_confirmation', 'updatePassword')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="text-start my-2"><button type="submit">تحديث كلمه المرور</button></div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
