@extends('user.layout.user')

@section('user_content')
    <main id="main">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2> دورتنا التدريبية</h2>
            </div>
        </div>

        <!-- Courses Section -->
        <section id="courses" class="courses section">
            <div class="container">
                <div class="row">

                    @foreach ($courses as $item)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="course-item">
                                <img src="{{ env('XPERIENCE_DASHBOARD_URL') }}/pay_courses/{{ $item->image }}" class="img-fluid"
                                    alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <p class="category"> {{ $item->name }} </p>
                                        {{-- <p class="price">$169</p> --}}
                                    </div>
                                    <h3><a  href="{{route("pay_courses.show", $item->id)}}">{{ $item->name }}</a></h3>
                                    <p class="description"> {{ $item->description }} </p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="assets/img/person/person-m-7.webp" class="img-fluid" alt="">
                                            <a href="{{route("pay_courses.show", $item->id)}}" class="trainer-link">مشاهدة المحتوى</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                    @endforeach


                </div>

            </div>

        </section><!-- /Courses Section -->

    </main>
@endsection
