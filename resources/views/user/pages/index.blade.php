@extends('user.layout.user')


@section('user_content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>
                <span class="s1"> <span class="s2">X</span>perience. </span> Academy
            </h1>
            <h2>
                مئات الدورات التدريبية وأكثر – مجانًا دون اشتراك <br />
                قَالُوا سُبْحَانَكَ لَا عِلْمَ لَنَا إِلَّا مَا عَلَّمْتَنَا ۖ إِنَّكَ
                أَنتَ الْعَلِيمُ الْحَكِيمُ (32)
            </h2>
            <a href="courses.html" class="d-block m-auto btn mt-3 w-25 btn-get-started">
                سجل ماعنا الأن
            </a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main" class="py-4 my-5">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>من نحن</h2>
                    <img src="./img/Vector-black.svg" alt="" />
                </div>
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="./img/about.jpg" class="img-fluid border border-dark rounded-5" alt="" />
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <p>
                            نحن منصة تعليمية عربية متخصصة في تقديم كورسات مجانية في مجالات
                            البرمجة، التصميم، والتكنولوجيا. نهدف إلى تمكين الشباب والمبتدئين
                            والمهتمين بهذه المجالات من تعلم المهارات المطلوبة لسوق العمل
                            الرقمي، بأسلوب مبسط. <br />
                            نؤمن بأن التعليم الجيد يجب أن يكون متاحًا للجميع، لذلك نوفر
                            محتوى عالي الجودة، مقدم من خبراء وممارسين، ومتاح للجميع دون أي
                            تكلفة. <br />
                            سواء كنت تبدأ من الصفر، أو تطوّر مهاراتك، نحن هنا لنساعدك في كل
                            خطوة على طريقك المهني.
                        </p>
                        <ul>
                            <li></li>
                            <li>
                                <i class="bi bi-check-circle mx-3"></i> تعلم البرمجه وتطوير
                                المواقع
                            </li>
                            <li>
                                <i class="bi bi-check-circle mx-3"></i> دورات مجانيه في كل
                                المجالات
                            </li>
                            <li></li>
                            <li>
                                <i class="bi bi-check-circle mx-3"></i> تعلم التسويق والتسويق
                                الإلكتروني
                            </li>
                            <li>
                                <i class="bi bi-check-circle mx-3"></i> دورات تعلم اللغه
                                الانجليزيه
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <hr />

        <!-- ======= Popular Courses Section ======= -->

        <!-- End Popular Courses Section -->
        <div class="layout-cover">
            <h1>آنضم الينا وكن مع باقي المبدعين و المؤثيين</h1>
            <div class="d-grid">
                <a class="btn w-25 m-auto" href="#"> سجل كمحاضر</a>
            </div>
        </div>

        <!-- End Trainers Section -->
    </main>
    <!-- End #main -->
@endsection
