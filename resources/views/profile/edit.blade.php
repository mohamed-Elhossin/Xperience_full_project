 


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
                                <form action="{{ route('profile.update') }}" method="POST" role="form"
                                    class="php-email-form">
                                    @csrf
                                    @method('patch')
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="text" name="name" class="form-control text-start"
                                                id="name" placeholder="الاسم" value="{{ old('name', $user->name) }}"
                                                required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control text-start" name="email"
                                                id="email" placeholder="البريد الالكتروني"
                                                value="{{ old('email', $user->email) }}" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="text-start my-2"><button type="submit">تحديث المعلومات</button></div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
