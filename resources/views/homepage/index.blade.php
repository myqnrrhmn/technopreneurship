@include('partials.homepage.head')
@include('partials.homepage.header')
        <!-- start hero section -->
        <section class="cover-background full-screen ipad-top-space-margin py-0 md-h-750px sm-h-650px" style="background-image:url({{asset('assets/homepage/images/hero-1.jpg')}});">
            <div class="opacity-very-light bg-black"></div>
            <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff">
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate
                    attributeName="d"
                    dur="5s"
                    values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    repeatCount="indefinite"
                    />
                </path>
                </svg>
            </div>
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-xl-6 col-lg-8 col-md-10 position-relative z-index-1" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex w-70 sm-w-100"><i class="bi bi-handbag text-white icon-small me-10px"></i>Satu tempat untuk semua jenis ikan</span>
                        <h1 class="text-white fw-700 ls-minus-2px mb-25px">Benih Ikan <br> Pasar Simpang</h1>
                        <div><p class="fw-300 fs-18 w-85 sm-w-95 text-white opacity-6">Tersedia beragam jenis ikan, mulai dari benih hingga ikan besar, semua dalam satu tempat.</p></div>
                        <a href="index.html" target="blank" class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="Hubungi Kami">Hubungi Kami</span>
                            </span>
                        </a>
                        <a href="demo-it-business-contact.html" class="btn btn-extra-large btn-switch-text btn-transparent-white-light btn-rounded border-1 ls-0px mt-15px">
                            <span>
                                <span class="btn-double-text" data-text="Lokasi Kami">Lokasi Kami</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <!-- start section -->
        <section class="pt-3 sm-pt-50px">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-7" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01 md-mb-30px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-20px">
                                <img src="https://via.placeholder.com/80x80" alt=""/>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Pilihan ikan lengkap</span>
                                <p class="w-80 xl-w-90 lg-w-100">Tersedia berbagai jenis ikan — dari benih hingga ikan konsumsi, semua bisa kamu temukan di satu tempat.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01 md-mb-30px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-20px">
                                <img src="https://via.placeholder.com/80x80" alt=""/>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Harga terjangkau</span>
                                <p class="w-80 xl-w-90 lg-w-100">Belanja langsung dari penjual dengan harga bersaing, cocok untuk usaha maupun kebutuhan rumah tangga.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-01 md-mb-30px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-20px">
                                <img src="https://via.placeholder.com/80x80" alt=""/>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-18 text-dark-gray fw-700 mb-5px">Lokasi mudah diakses</span>
                                <p class="w-80 xl-w-90 lg-w-100">Benih Ikan Pasar Simpang mudah dijangkau dan menjadi tujuan favorit bagi pencari ikan segar setiap hari.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
                <div class="row row-cols-1 row-cols-lg-5 row-cols-md-3 row-cols-sm-2 clients-style-06 justify-content-center ps-3 pe-3 xs-mt-40px" data-anime='{ "el": "childs", "scale": [0.8,1], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-walmart-dark-blue.svg" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-netflix-dark-blue.svg" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center md-mb-40px">
                        <a href="#"><img src="images/logo-invision-dark-blue.svg" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center sm-mb-40px">
                        <a href="#"><img src="images/logo-yahoo-dark-blue.svg" alt=""></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="col client-box text-center">
                        <a href="#"><img src="images/logo-amazon-dark-blue.svg" alt=""></a>
                    </div>
                    <!-- end client item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section style="background-color: #27548A;" id="products">
            <div class="container">
                <div class="row justify-content-center mb-5 sm-mb-30px">
                    <div class="col-xl-6 col-lg-8 col-md-10 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-white mb-0 fw-600">Jenis ikan yang tersedia</h3>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-0" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay":0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Mas</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 sm-border-end-0 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Nila Hitam</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Nila Merah</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 md-border-end-0 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Lele</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-end border-1 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Patin Biasa</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-bottom border-1 md-border-end sm-border-end-0 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Patin Albino</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 md-border-bottom border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Bawal</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 md-border-end-0 md-border-bottom border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Gurame</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 sm-border-bottom border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Mujair</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 sm-border-end-0 sm-border-bottom border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Baung</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-end border-1 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Tawes</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all">
                        <div class="feature-box hover-box h-100 transition dark-hover pt-25 pb-25 xs-p-12 last-paragraph-no-margin overflow-hidden border-1 border-color-transparent-white-light border-color-transparent-on-hover">
                            <div class="feature-box-icon">
                                <i class="line-icon-Fish icon-extra-large text-white mb-15px"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block text-white fw-600 fs-14 text-uppercase">Ikan Nilem</span>
                            </div>
                            <div class="feature-box-overlay bg-base-color"></div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 bg-midnight-blue">
            <div class="container">
                <div class="row align-items-center justify-content-center g-0" data-anime='{  "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col-auto d-flex align-items-center">
                        <img src="https://via.placeholder.com/130x98" alt="">
                        <div class="fs-17 lh-26 last-paragraph-no-margin text-white pt-15px pb-15px fw-500">
                            <p>Sudah menemukan jenis ikan yang Anda cari?<a href="demo-it-business-contact.html" class="text-decoration-line-bottom text-white"> Hubungi kami sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pt-3 sm-pt-50px" id="contacts">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-8 col-md-10 lg-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 250, "easing": "easeOutQuad" }'>
                        <div class="position-sticky top-120px lg-top-0px lg-position-relative text-center text-xl-start">
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex justify-content-center justify-content-xl-start"><i class="bi bi-chat-square-dots fs-16 me-5px"></i>Lets's work together</span>
                            <h3 class="text-dark-gray ls-minus-2px fw-700">Call or visit us at one of our different locations.</h3>
                            <p class="mb-35px w-90 lg-w-100 sm-mb-25px">Amet minim mollit non deserunt ullamco est aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit amet minim mollit on.</p>
                            <a href="#" class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink left-icon btn-rounded me-10px ls-0px">
                                <span>
                                    <span><i class="bi bi-telephone-outbound"></i></span>
                                    <span class="btn-double-text" data-text="Schedule a call">Schedule a call</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-10 offset-xl-1">
                        <div class="row row-cols-1 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <!-- start services box item -->
                            <div class="col services-box-style-02 mb-30px">
                                <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="h-100 cover-background xs-h-300px" style="background-image: url({{asset('assets/homepage/images/people-1.jpg')}})"></div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-40px xl-p-30px">
                                        <div class="services-box-content last-paragraph-no-margin">
                                            <span class="d-block text-dark-gray primary-font fw-700 fs-19 mb-10px">New York</span>
                                            <p>167 Hawthorne, Business central, New York, 11722</p>
                                            <a href="#" class="fs-16 lh-20 primary-font fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px">View on map</a>
                                            <div class="text-dark-gray fw-600"><i class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i><a href="tel:12345678910">+1 234 567 8910</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end services box item -->
                            <!-- start services box item -->
                            <div class="col services-box-style-02 mb-30px">
                                <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="h-100 cover-background xs-h-300px" style="background-image: url({{asset('assets/homepage/images/people-2.jpg')}})"></div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-40px xl-p-30px">
                                        <div class="services-box-content last-paragraph-no-margin">
                                            <span class="d-block text-dark-gray primary-font fw-700 fs-19 mb-10px">San Francisco</span>
                                            <p>777 Magnolia farme ville, San Francisco, 93223</p>
                                            <a href="#" class="fs-16 lh-20 primary-font fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px">View on map</a>
                                            <div class="text-dark-gray fw-600"><i class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i><a href="tel:12345678910">+1 234 567 8910</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end services box item -->
                            <!-- start services box item -->
                            <div class="col services-box-style-02 md-mb-30px">
                                <div class="row g-0 box-shadow-quadruple-large border-radius-6px overflow-hidden">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="h-100 cover-background xs-h-300px" style="background-image: url({{asset('assets/homepage/images/people-3.jpg')}})"></div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 bg-white box-shadow-extra-large p-40px xl-p-30px">
                                        <div class="services-box-content last-paragraph-no-margin">
                                            <span class="d-block text-dark-gray primary-font fw-700 fs-19 mb-10px">Paris</span>
                                            <p>959 Seven forks tower, Paris, France, 30557</p>
                                            <a href="#" class="fs-16 lh-20 primary-font fw-500 text-dark-gray text-decoration-line-bottom d-inline-block mb-25px">View on map</a>
                                            <div class="text-dark-gray fw-600"><i class="feather icon-feather-phone-call icon-small me-10px text-dark-gray"></i><a href="tel:12345678910">+1 234 567 8910</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end services box item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-very-light-gray position-relative">
            <div class="container">
                <div class="row mb-8">
                    <div class="col-xl-5 col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="bg-white border-radius-6px box-shadow-quadruple-large p-10 ps-12 pe-12 lg-ps-8 lg-pe-8 h-100 d-flex flex-wrap flex-column justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex align-self-start"><i class="bi bi-chat-square-dots fs-16 me-5px"></i>Lets's work together</span>
                            <h4 class="text-dark-gray ls-minus-1px fw-700 mb-15px">Ready to help you!</h4>
                            <p class="w-85 sm-w-100">We're here to help and answer any question you might have.</p>
                            <div class="row row-cols-1 row-cols-sm-2">
                                <div class="col last-paragraph-no-margin mb-25px">
                                    <p>Call us directly?</p>
                                    <a href="tel:12345678910" class="text-dark-gray fw-600">+1 234 567 8910</a>
                                </div>
                                <div class="col last-paragraph-no-margin mb-25px">
                                    <p>Need live support?</p>
                                    <a href="mailto:info@domain.com" class="text-dark-gray fw-600">info@domain.com</a>
                                </div>
                                <div class="col last-paragraph-no-margin sm-mb-25px">
                                    <p>Join growing team?</p>
                                    <a href="mailto:join@domain.com" class="text-dark-gray fw-600">join@domain.com</a>
                                </div>
                                <div class="col last-paragraph-no-margin">
                                    <p>Visit headquarters?</p>
                                    <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449" target="_blank" class="text-dark-gray fw-600">View on google map</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1 md-mb-50px sm-mb-0" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray ls-minus-2px fw-700">Looking for any help?</h3>
                        <form action="email-templates/contact-form.php" method="post" class="contact-form-style-03">
                            <label for="exampleInputEmail1" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Enter your name*</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-emoji-smile text-dark-gray"></i></span>
                                <input class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="What's your good name" />
                            </div>
                            <label for="exampleInputEmail1" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Email address*</label>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon"><i class="bi bi-envelope text-dark-gray"></i></span>
                                <input class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Enter your email address" />
                            </div>
                            <label for="exampleInputEmail1" class="form-label fs-13 text-uppercase text-dark-gray fw-700 mb-0">Your message</label>
                            <div class="position-relative form-group form-textarea mb-0">
                                <textarea class="fs-15 ps-0 border-radius-0px border-color-dark-gray bg-transparent form-control" name="comment" placeholder="Describe about your project" rows="3"></textarea>
                                <span class="form-icon"><i class="bi bi-chat-square-dots text-dark-gray"></i></span>
                            </div>
                            <div class="row mt-25px align-items-center">
                                <div class="col-xl-7 col-lg-12 col-sm-7 lg-mb-30px md-mb-0">
                                    <p class="mb-0 fs-14 lh-22 text-center text-sm-start">We will never collect information about you without your explicit consent.</p>
                                </div>
                                <div class="col-xl-5 col-lg-12 col-sm-5 text-center text-sm-end text-lg-start text-xl-end xs-mt-25px">
                                    <input id="exampleInputEmail3" type="hidden" name="redirect" value="">
                                    <button class="btn btn-dark-gray btn-medium btn-round-edge btn-box-shadow submit" type="submit">Send message</button>
                                </div>
                                <div class="col-12 mt-20px mb-0 text-center text-md-start">
                                    <div class="form-results d-none"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#27548A">
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate
                    attributeName="d"
                    dur="5s"
                    values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    repeatCount="indefinite"
                    />
                </path>
                </svg>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="cover-background one-third-screen sm-h-500px pb-0 position-relative" style="background-color: #27548A;">
            <div style="background-color: #27548A;"></div>
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-xl-8 col-lg-10 mb-9 md-mb-15 position-relative z-index-1 text-center d-flex flex-wrap align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-inline-flex align-items-center text-start sm-lh-20"><i class="bi bi-megaphone text-white d-inline-block align-middle icon-small me-10px"></i> Penyedia berbagai jenis ikan segar dan berkualitas.</span>
                        <h1 class="text-white fw-600 ls-minus-2px mb-50px">Pusat ikan lengkap untuk kebutuhan Anda!</h1>
                        <a href="#" class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px">
                            <span>
                                <span class="btn-double-text" data-text="Got a project in mind">Mulai belanja ikan</span>
                                <span><i class="fa-solid fa-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff">
                <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate
                    attributeName="d"
                    dur="5s"
                    values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                    repeatCount="indefinite"
                    />
                </path>
                </svg>
            </div>
        </section>
        <!-- end section -->
        <!-- start subscription popup -->
        <div id="subscribe-popup" class="mfp-hide subscribe-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 p-60px pt-40px pb-40px xs-p-30px xs-pt-30px xs-pb-30px position-relative box-shadow-quadruple-large bg-white border-radius-10px">
                        <div class="row">
                            <div class="col-12 text-center mb-20px">
                                <img src="https://via.placeholder.com/160x160" alt=""/>
                            </div>
                            <div class="col-12 newsletter-popup position-relative">
                                <h5 class="d-inline-block fw-500 text-dark-gray ls-minus-1px mb-20px">Grow your business with <span class="fw-700">crafto agency.</span></h5>
                                <div class="col icon-with-text-style-08 mb-5px" style="">
                                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                        <div class="feature-box-icon me-15px">
                                            <i class="bi bi-wallet2 icon-small text-base-color"></i>
                                        </div>
                                        <div class="feature-box-content">
                                            <span class="text-dark-gray">Increase your conversion rate.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col icon-with-text-style-08 mb-5px" style="">
                                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                        <div class="feature-box-icon me-15px">
                                            <i class="bi bi-calendar-check icon-small text-base-color"></i>
                                        </div>
                                        <div class="feature-box-content">
                                            <span class="text-dark-gray">Save your time and effort spent.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col icon-with-text-style-08 md-mb-15px" style="">
                                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                        <div class="feature-box-icon me-15px">
                                            <i class="bi bi-clock icon-small text-base-color"></i>
                                        </div>
                                        <div class="feature-box-content">
                                            <span class="text-dark-gray">Make your business stand out.</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="demo-it-business-contact.html" class="btn btn-extra-large btn-gradient-purple-pink btn-rounded btn-box-shadow d-block mt-30px">Let's talk now <i class="fa-solid fa-arrow-right"></i></a>
                                <a href="#" class="btn btn-link hover-text-light btn-large text-dark-gray d-block mt-15px">No thanks</a>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end subscription popup -->
@include('partials.homepage.footer')
