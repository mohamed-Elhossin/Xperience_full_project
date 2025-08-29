    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="{{ asset('img/Vector-black.svg') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>الصفحات</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">الرئيسيه</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="{{ route('user_pages.index') }}#about">من
                                    نحن</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="{{ route('user_pages.contact') }}">تواصل ماعنا</a>
                            </li>

                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="{{ route('register') }}">انشاء حساب</a>
                            </li>
                        </ul>
                    </div>



                    <div class="col-lg-5 col-md-6 footer-newsletter">
                        <h4> انضم ألينا</h4>
                        <p> آنضم الينا وكن مع باقي المبدعين و المؤثيين
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="ms-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Xperience</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
