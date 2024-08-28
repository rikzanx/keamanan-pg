    @include('layout.header')

    <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{route('landing_pages')}}" class="nav-item nav-link">Home</a>
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Profile</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Struktur Organsisasi</a>
                                        <a href="single.html" class="dropdown-item">Tugas Fungsi Peranan</a>
                                        <a href="single.html" class="dropdown-item">Prinsip Penyelenggaraan</a>
                                        <a href="single.html" class="dropdown-item">Istilah Keamanan</a>
                                    </div>
                                </div> --}}
                                <a href="{{route('profile')}}" class="nav-item nav-link">Profil</a>
                                <a href="{{route('wilayah')}}" class="nav-item nav-link">Wilayah</a>
                                <a href="{{route('penunjang')}}" class="nav-item nav-link">Penunjang</a>
                                <a href="{{route('klasifikasi')}}" class="nav-item nav-link">Klasifikasi</a>
                                <a href="{{route('penghargaan')}}" class="nav-item nav-link">Penghargaan</a>
                                <a href="{{route('galeri')}}" class="nav-item nav-link">Galeri</a>
                                <a href="{{route('kontak')}}" class="nav-item nav-link active">Kontak</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{route('portal')}}">Portal</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            {{-- <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End --> --}}


            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p></p>
                        <h2>Hubungi Kami</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Alamat Kantor</h2>
                                        <p>Jl. Prof Dr Moh Yamin</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Telepon</h2>
                                        <p>+62 896 2797 0723 / Ext : 2392</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>info@kemanan-pg.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->


            @include('layout.footer')

           <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{ asset('lib/slick/slick.min.js')}}"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{ asset('mail/contact.js')}}"></script>


        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>

