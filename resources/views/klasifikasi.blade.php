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
                                <a href="{{route('landing_pages')}}" class="nav-item nav-link ">Home</a>
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
                                <a href="{{route('klasifikasi')}}" class="nav-item nav-link active">Klasifikasi</a>
                                <a href="{{route('penghargaan')}}" class="nav-item nav-link">Penghargaan</a>
                                <a href="{{route('galeri')}}" class="nav-item nav-link">Galeri</a>
                                <a href="{{route('kontak')}}" class="nav-item nav-link">Kontak</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{route('portal')}}">Portal</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Klasifikasi</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Departemen Keamanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

            <!-- Single Post Start-->
            <div class="single">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Klasifikasi Area Pengamanan</p>
                        <h2>Departemen Keamanan</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-content wow fadeInUp">
                                <img src="{{ asset('img/klasifikasi.jpg')}}" />
                            </div>
                        </div>
                    </div>

                    <div class="row component_responsive">
                        <div class="col-lg-4 col-sm-4 col-6 component-col-set">
                            <div class="component-hover-effect mb-2">
                                <img src="../assets/images/landing/icon/1.png" alt="">
                                <hr>
                                <br>
                                <h4 class="m-0 Pt-4  ml-2 mr-2">Area Tertutup (Warna Merah)</h4>
                                <br>
                                <p class="ml-2 mr-2">Area yang aksesnya hanya untuk personel dan kendaraan dengan Ijin Akses Merah. Area ini merupakan area instalasi Pabrik dimana terdapat risiko yang tinggi untuk terjadinya kecelakaan dan/atau kebakaran/peledakan atau area yang terdapat aset perusahaan yang akan mengakibatkan terhentinya aktivitas produksi apabila terjadi gangguan keamanan.</p>
                                <h6><b>Seperti</b></h6>
                                <p>Karyawan Organik dan Non Organik dengan Badge latar belakang merah.</p>
                                <p>Mahasiswa / Pelajar kerja praktek dengan Badge latar belakang merah.</p>
                                <p>Tamu perusahaan dengan Visitor Pass latar belakang merah.</p>
                                <p>Kendaraan roda 4 dengan bahan bakar solar.</p>
                                <h6><b>Meliputi</b></h6>
                                <p>Seluruh area produksi dan pemeliharaan.</p>
                                <p>Rumah dinas Direksi.</p>
                                <p>Gedung Kantor Pusat Lantai 8.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-6 component-col-set">
                            <div class="component-hover-effect mb-2">
                                <img src="../assets/images/landing/icon/1.png" alt="">
                                <hr>
                                <br>
                                <h4 class="m-0 Pt-4  ml-2 mr-2">Area Terbatas (Warna Kuning)</h4>
                                <br>
                                <p class="ml-2 mr-2">Area pendukung yang berbatasan langsung dengan Area Tertutup (Warna Merah) serta aksesnya hanya untuk personel dan kendaraan dengan Ijin Akses Kuning dan/atau Merah atau area yang terdapat aset perusahaan yang akan mengakibatkan terganggunya aktivitas produksi apabila terjadi gangguan keamanan.</p>
                                <h6><b>Seperti</b></h6>
                                <p>Karyawan Organik dan Non Organik dengan Badge latar belakang kuning.</p>
                                <p>Mahasiswa / Pelajar kerja praktek dengan Badge latar belakang kuning.</p>
                                <p>Tamu perusahaan dengan Visitor Pass latar belakang kuning.</p>
                                <p>Semua kendaraan boleh masuk.</p>
                                <h6><b>Meliputi</b></h6>
                                <p>Semua area perkantoran (selain lantai 8, kantor Dep Produksi dan Dep Pemeliharaan).</p>
                                <p>Pengolahan air Gunungsari, Babat, Buster Pump Kandangan dan Lamongan.</p>
                                <p>Semua gudang produk jadi.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-6 component-col-set">
                            <div class="component-hover-effect mb-2">
                                <img src="../assets/images/landing/icon/1.png" alt="">
                                <hr>
                                <br>
                                <h4 class="m-0 Pt-4  ml-2 mr-2">Area Terbuka Terbatas (Warna Hijau)</h4>
                                <br>
                                <p class="ml-2 mr-2">Area diluar area tertutup dan terbatas tetapi  masih merupakan area perusahaan serta tidak memerlukan Ijin Akses namun masih dalam pengawasan kecuali dalam kondisi tertentu.</p>
                                <h6><b>Seperti</b></h6>
                                <p>Semua orang dan kendaraan boleh masuk.</p>
                                <h6><b>Meliputi</b></h6>
                                <p>Semua fasilitas / sarana olah raga.</p>
                                <p>Perumahan dinas kecuali rumah dinas Direksi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Post End-->

            <!-- Team Start -->
            {{-- <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our Team</p>
                        <h2>Meet Our Engineer</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Adam Phillips</h2>
                                    <p>CEO & Founder</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Civil Engineer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Jhon Doe</h2>
                                    <p>Interior Designer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Painter</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Adam Phillips</h2>
                                    <p>CEO & Founder</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-2.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Civil Engineer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-3.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Jhon Doe</h2>
                                    <p>Interior Designer</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-4.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Painter</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Team End -->


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

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js')}}"></script>
    </body>
</html>
