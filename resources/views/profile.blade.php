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
                                <a href="{{route('profile')}}" class="nav-item nav-link active">Profil</a>
                                <a href="{{route('wilayah')}}" class="nav-item nav-link">Wilayah</a>
                                <a href="{{route('penunjang')}}" class="nav-item nav-link">Penunjang</a>
                                <a href="{{route('klasifikasi')}}" class="nav-item nav-link">Klasifikasi</a>
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
                            <h2>Profil</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Departemen Keamanan</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

             <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Pimpinan</p>
                        <h2>Departemen Keamanan</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('img/1-vp.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Waluyo Sirdjo</h2>
                                    <p>Vice President</p>
                                </div>
                                {{-- <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('img/1-avp-opsmin.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Rachmad Wahyudi</h2>
                                    <p>AVP OPS & ADM</p>
                                </div>
                                {{-- <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('img/1-avp-kawasan.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Yunanto Setyawan</h2>
                                    <p>PTS AVP Kawasan</p>
                                </div>
                                {{-- <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('img/1-avp-pabrik.jpg')}}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Hari Ponco</h2>
                                    <p>PTS AVP Pabrik</p>
                                </div>
                                {{-- <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->

            <!-- Single Post Start-->
            <div class="single">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Struktur Organisasi</p>
                        <h2>Departemen Keamanan</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-content wow fadeInUp">
                                <img src="{{ asset('img/struktur.png')}}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Post End-->

            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Tugas Pokok</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Fungsi</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Peranan</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->

            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Prinsip</p>
                        <h2>Penyelenggaraan Pengamanan</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                            Memahami Sasaran, Tujuan dan Fungsi Organisasi.
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                            Disusun secara sistematis dan pendekatan yang dikoordinasikan antar bagian.
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                            Upaya penanganan situasi dengan tingkatan risiko dan pembiayaan yang efisien & efektif.
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                            Senantiasa melakukan koordinasi baik dengan pihak internal perusahaan maupun eksternal perusahaan.
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                            Terus dimonitor dan dikaji ulang.
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="section-header text-center">
                        <p></p>
                        <h2>Istilah Keamanan</h2>
                    </div>
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">1</h2>
                                        <p>INSTALASI</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">2</h2>
                                        <p>INSTALASI VITAL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-left wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">3</h2>
                                        <p>OBYEK PENGAMANAN</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">4</h2>
                                        <p>SATUAN PENGAMANAN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-4">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">5</h2>
                                        <p>KERAWANAN</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">6</h2>
                                        <p>ANCAMAN</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">7</h2>
                                        <p>PENGAMANAN</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->



            <!-- Single Post Start-->
            {{-- <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="single-content wow fadeInUp">
                                <img src="{{ asset('img/single.jpg')}}" />
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer molestie, lorem eu eleifend bibendum, augue purus mollis sapien, non rhoncus eros leo in nunc. Donec a nulla vel turpis consectetur tempor ac vel justo. In hac habitasse platea dictumst. Cras nec sollicitudin eros. Nunc eu enim non turpis sagittis rhoncus consectetur id augue. Mauris dignissim neque felis. Phasellus mollis mi a pharetra cursus. Maecenas vulputate augue placerat lacus mattis, nec ornare risus sollicitudin.
                                </p>
                                <p>
                                    Mauris eu pulvinar tellus, eu luctus nisl. Pellentesque suscipit mi eu varius pulvinar. Aenean vulputate, massa eget elementum finibus, ipsum arcu commodo est, ut mattis eros orci ac risus. Suspendisse ornare, massa in feugiat facilisis, eros nisl auctor lacus, laoreet tempus elit dolor eu lorem. Nunc a arcu suscipit, suscipit quam quis, semper augue.
                                </p>
                                <p>
                                    Quisque arcu nulla, convallis nec orci vel, suscipit elementum odio. Curabitur volutpat velit non diam tincidunt sodales. Nullam sapien libero, bibendum nec viverra in, iaculis ut eros.
                                </p>
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>
                                    Vestibulum sit amet ullamcorper sem. Integer hendrerit elit eget purus sodales maximus. Quisque ac nulla arcu. Morbi venenatis arcu ac arcu cursus pharetra. Morbi sit amet viverra augue, ac ultricies libero. Praesent elementum lectus mi, eu elementum urna venenatis sed. Donec auctor purus ut mattis feugiat. Integer mi erat, consectetur sed tincidunt vitae, sagittis elementum libero. Vivamus a mauris consequat, hendrerit lectus in, fermentum libero. Integer mattis bibendum neque et porttitor.
                                </p>
                                <p>
                                    Mauris quis arcu finibus, posuere dolor eu, viverra felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In porta, ex vitae accumsan facilisis, nisi tellus dictum metus, quis fringilla dui tellus in tellus. Praesent pharetra orci at vehicula posuere. Sed molestie fringilla lorem, vel imperdiet tortor blandit at. Quisque non ultrices lorem, eget rhoncus orci. Fusce porttitor placerat diam et mattis. Nam laoreet, ex eu posuere sollicitudin, sem tortor pellentesque ipsum, quis mattis purus lectus ut lacus. Integer eu risus ac est interdum scelerisque.
                                </p>
                                <h4>Lorem ipsum dolor sit amet</h4>
                                <p>
                                    Praesent ultricies, mauris eget vestibulum viverra, neque lorem malesuada mauris, eget rhoncus lectus enim a lorem. Vivamus at vehicula risus, eget facilisis massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et posuere sapien. Fusce bibendum lorem sem, quis tincidunt felis mattis nec.
                                </p>
                                <p>
                                    Proin vel nulla purus. Nunc nec eros in nisi efficitur rutrum quis sed eros. Mauris felis dolor, rhoncus eget gravida vitae, pretium vel arcu. Cras blandit tellus eget tellus dictum venenatis. Sed ultricies bibendum dictum. Etiam facilisis erat id turpis tincidunt malesuada. Duis bibendum sapien eu condimentum sagittis. Proin nunc lorem, ullamcorper vel tortor sodales, imperdiet lacinia dui. Sed congue, felis id rhoncus varius, urna lacus imperdiet nunc, ut porttitor mauris mi quis mi. Integer rutrum est finibus metus eleifend scelerisque. Morbi auctor dignissim purus in interdum. Vestibulum eu dictum enim. Suspendisse et sem vitae velit feugiat facilisis.
                                </p>
                                <p>
                                    Nam sodales scelerisque nunc sed convallis. Vestibulum facilisis porta erat, sit amet pharetra tortor blandit id. Nunc velit tellus, consectetur sed convallis in, tincidunt finibus nulla. Integer vel ex in mauris tincidunt tincidunt nec sed elit. Etiam pretium lectus lectus, sed aliquet erat tristique euismod. Praesent faucibus nisl augue, ac tempus libero pellentesque malesuada. Vivamus iaculis imperdiet laoreet. Aliquam vel felis felis. Proin sed sapien erat. Etiam a quam et metus tempor rutrum. Curabitur in faucibus justo. Etiam imperdiet iaculis urna.
                                </p>
                            </div>
                            <div class="single-tags wow fadeInUp">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                            <div class="single-bio wow fadeInUp">
                                <div class="single-bio-img">
                                    <img src="{{ asset('img/user.jpg')}}" />
                                </div>
                                <div class="single-bio-text">
                                    <h3>Author Name</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                    </p>
                                </div>
                            </div>
                            <div class="single-related wow fadeInUp">
                                <h2>Related Post</h2>
                                <div class="owl-carousel related-slider">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{ asset('img/post-1.jpg')}}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{ asset('img/post-2.jpg')}}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{ asset('img/post-3.jpg')}}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{ asset('img/post-4.jpg')}}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-comment wow fadeInUp">
                                <h2>3 Comments</h2>
                                <ul class="comment-list">
                                    <li class="comment-item">
                                        <div class="comment-body">
                                            <div class="comment-img">
                                                <img src="{{ asset('img/user.jpg')}}" />
                                            </div>
                                            <div class="comment-text">
                                                <h3><a href="">Josh Dunn</a></h3>
                                                <span>01 Jan 2045 at 12:00pm</span>
                                                <p>
                                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                                </p>
                                                <a class="btn" href="">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment-item">
                                        <div class="comment-body">
                                            <div class="comment-img">
                                                <img src="{{ asset('img/user.jpg')}}" />
                                            </div>
                                            <div class="comment-text">
                                                <h3><a href="">Josh Dunn</a></h3>
                                                <p><span>01 Jan 2045 at 12:00pm</span></p>
                                                <p>
                                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                                </p>
                                                <a class="btn" href="">Reply</a>
                                            </div>
                                        </div>
                                        <ul class="comment-child">
                                            <li class="comment-item">
                                                <div class="comment-body">
                                                    <div class="comment-img">
                                                        <img src="{{ asset('img/user.jpg')}}" />
                                                    </div>
                                                    <div class="comment-text">
                                                        <h3><a href="">Josh Dunn</a></h3>
                                                        <p><span>01 Jan 2045 at 12:00pm</span></p>
                                                        <p>
                                                            Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                                        </p>
                                                        <a class="btn" href="">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="comment-form wow fadeInUp">
                                <h2>Leave a comment</h2>
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name *</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="url" class="form-control" id="website">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message *</label>
                                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="search-widget">
                                        <form>
                                            <input class="form-control" type="text" placeholder="Search Keyword">
                                            <button class="btn"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 class="widget-title">Recent Post</h2>
                                    <div class="recent-post">
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{ asset('img/post-1.jpg')}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{ asset('img/post-2.jpg')}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{ asset('img/post-3.jpg')}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{ asset('img/post-4.jpg')}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-item">
                                            <div class="post-img">
                                                <img src="{{ asset('img/post-5.jpg')}}" />
                                            </div>
                                            <div class="post-text">
                                                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                <div class="post-meta">
                                                    <p>By<a href="">Admin</a></p>
                                                    <p>In<a href="">Design</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="image-widget">
                                        <a href="#"><img src="{{ asset('img/blog-1.jpg')}}" alt="Image"></a>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="tab-post">
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div id="featured" class="container tab-pane active">
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-1.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-2.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-3.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-4.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-5.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="popular" class="container tab-pane fade">
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-1.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-2.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-3.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-4.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-5.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="latest" class="container tab-pane fade">
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-1.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-2.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-3.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-4.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item">
                                                    <div class="post-img">
                                                        <img src="{{ asset('img/post-5.jpg')}}" />
                                                    </div>
                                                    <div class="post-text">
                                                        <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                                        <div class="post-meta">
                                                            <p>By<a href="">Admin</a></p>
                                                            <p>In<a href="">Design</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="image-widget">
                                        <a href="#"><img src="{{ asset('img/blog-2.jpg')}}" alt="Image"></a>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 class="widget-title">Categories</h2>
                                    <div class="category-widget">
                                        <ul>
                                            <li><a href="">National</a><span>(98)</span></li>
                                            <li><a href="">International</a><span>(87)</span></li>
                                            <li><a href="">Economics</a><span>(76)</span></li>
                                            <li><a href="">Politics</a><span>(65)</span></li>
                                            <li><a href="">Lifestyle</a><span>(54)</span></li>
                                            <li><a href="">Technology</a><span>(43)</span></li>
                                            <li><a href="">Trades</a><span>(32)</span></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="image-widget">
                                        <a href="#"><img src="{{ asset('img/blog-3.jpg')}}" alt="Image"></a>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 class="widget-title">Tags Cloud</h2>
                                    <div class="tag-widget">
                                        <a href="">National</a>
                                        <a href="">International</a>
                                        <a href="">Economics</a>
                                        <a href="">Politics</a>
                                        <a href="">Lifestyle</a>
                                        <a href="">Technology</a>
                                        <a href="">Trades</a>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 class="widget-title">Text Widget</h2>
                                    <div class="text-widget">
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea nec eros. Nunc eu enim non turpis id augue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Single Post End-->


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