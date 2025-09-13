<!DOCTYPE html>
<html lang="en">

<head>

    @include('user.shared.head')

</head>

<body class="course-details-page">

    @include('user.shared.header')


    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="breadcrumbs" data-aos="fade-in">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1> تفاصيل الكورس
                                <br>
                                {{ $course->name }}
                            </h1>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- End Page Title -->

        <!-- Course Details Section -->
        <section id="course-details" class="course-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Course Header -->
                        <div class="course-header" data-aos="fade-up" data-aos-delay="200">
                            <div class="course-image">
                                <img src="http://127.0.0.1:8000/pay_courses/{{ $course->image }}" alt="Course Image"
                                    class="img-fluid" />
                            </div>

                        </div>
                        <!-- End Course Header -->

                        <!-- Course Content -->
                        <div class="course-content" data-aos="fade-up" data-aos-delay="300">
                            <h2>{{ $course->name }}</h2>

                            <div class="course-description">
                                <p>
                                    {{ $course->description }}
                                </p>


                            </div>
                            @foreach ($sections as $section)
                                <div class="what-you-learn mt-4">
                                    <h3>{{ $section->name }}</h3>
                                    <p>{{ $section->description }} </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="learn-list">
                                                @foreach ($section->sectionContents->take(4) as $item)
                                                    <li>
                                                        <i class="bi bi-check-circle"></i> {{ $item->title }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <ul class="learn-list">
                                                @foreach ($section->sectionContents->skip(4) as $item)
                                                    <li>
                                                        <i class="bi bi-check-circle"></i> {{ $item->title }}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- End Course Content -->

                    </div>

                </div>
            </div>
        </section>
        <!-- /Course Details Section -->

        <!-- Tabs Section -->

        <!-- /Tabs Section -->
    </main>

    @include('user.shared.footer')

    @include('user.shared.script')
</body>

</html>
