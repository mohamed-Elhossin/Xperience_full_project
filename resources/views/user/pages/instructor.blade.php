@extends('user.layout.user')

@section('user_content')
    <main id="main">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2> آنضم الينا وكن مع باقي المبدعين و المؤثيين</h2>
                <p class="mt-1"> انضم إلى فريق المحاضرين في منصتنا, شارك خبراتك... وغيّر حياة الآخرين</p>
            </div>
        </div>

        <section id="contact" class="contact contact3">

            <div class="container col-md-8" data-aos="fade-up">
                <div class="header">
                    <h5 class="fw-bold my-2"> كن محاضرًا معنا </h5>
                    <p>أدخل بيانات لنتواصل معك و تصبح محاضر معانا</p>
                </div>
                <div class="row mt-5">
                    <div class="  mt-5 mt-lg-0">
                        {{-- @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif --}}

                        <form action="{{ route('instructor.store') }}" method="POST" enctype="multipart/form-data"
                            role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control text-start" id="name"
                                        placeholder="الاسم" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" name="phone" class="form-control text-start" id="phone"
                                        placeholder="رقم الهاتف" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control text-start" name="email" id="email"
                                            placeholder="البريد الالكتروني" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <div class="form-group mt-3">
                                        <input type="url" class="form-control  text-start " name="linkedIn"
                                            id="linkedIn" placeholder="رابط حساب لينكدإن" value="{{ old('linkedIn') }}"
                                            required>
                                        @error('linkedIn')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mt-3">
                                <select name="field_id" class="form-select" id="field_id">
                                    <option selected disabled value="">اختر التخصص</option>
                                    @foreach ($fields as $field)
                                        <option value="{{ $field->id }}">{{ $field->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""> ملف السيره الذاتيه </label>
                                <input type="file" class="form-control   text-start" name="cv" id="cv"
                                    accept=".pdf" required>
                                @error('cv')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                            </div>
                            <div class="text-center"><button type="submit">إرسال البيانات</button></div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
