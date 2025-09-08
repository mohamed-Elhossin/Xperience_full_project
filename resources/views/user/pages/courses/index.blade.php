@extends('user.layout.user')

@section('user_content')
    <main id="main">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>  دورتنا التدريبية</h2>
             </div>
        </div>

        <!-- Courses Section -->
        <section id="courses" class="courses section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="course-item">
                            <img src="{{ asset('assets/img/course-1.jpg') }}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="category">تطوير المواقع</p>
                                    {{-- <p class="price">$169</p> --}}
                                </div>
                                <h3><a href="course-details.html">تصميم المواقع</a></h3>
                                <p class="description">من خلال هذه الدورة، ستتعلم كيفية تصميم وتطوير المواقع الإلكترونية
                                    باستخدام أحدث التقنيات.</p>
                                <div class="trainer d-flex justify-content-between align-items-center">
                                    <div class="trainer-profile d-flex align-items-center">
                                        <img src="assets/img/person/person-m-7.webp" class="img-fluid" alt="">
                                        <a href="" class="trainer-link">تحميل المحتوي</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->


                </div>

            </div>

        </section><!-- /Courses Section -->

    </main>
@endsection
