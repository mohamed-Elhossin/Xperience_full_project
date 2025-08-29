@extends('user.layout.user')

@section('user_content')
<main id="main">
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>تواصل معنا</h2>
            <p class="mt-1">هل لديك سؤال؟ اقتراح؟ <br>أو تحتاج إلى مساعدة؟ <br> يسعدنا دائمًا أن نسمع منك!</p>
        </div>
    </div>

    <section id="contact" class="contact">
        <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.0459378424107!2d31.209439076055272!3d30.03553991899169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846d412624b85%3A0x1c58ec70a0e48731!2sThe%20junction!5e0!3m2!1sen!2seg!4v1755601726231!5m2!1sen!2seg"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="email">
                            <h4>البريد الالكتروني :
                                <i class="bi bi-envelope float-start mx-5"></i>
                            </h4>
                            <p>info@Xperience.com</p>
                        </div>
                        <div class="phone">
                            <h4>رقم الهاتف
                                <i class="bi bi-phone float-start mx-5"></i>
                            </h4>
                            <p class="text-left">+02 01223432425</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" role="form" class="php-email-form">
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
                                <input type="email" class="form-control text-start" name="email" id="email"
                                    placeholder="البريد الالكتروني" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="الموضوع" value="{{ old('subject') }}" required>
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="الرسالة"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-3">
                            <div class="loading">تحميل ...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">تم ارسال رسالتك. شكرا لك!</div>
                        </div>
                        <div class="text-center"><button type="submit">إرسال الرسالة</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
