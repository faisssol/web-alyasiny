<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

        <!--banner-->
        <header class="py-5 bg-success">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2 d-none d-xl-block">PONDOK PESANTREN PUTERA AL-YASINY</h1>
                            <h1 class="display-5 fw-bolder text-white mb-2 d-xl-none">PPP AL-YASINY</h1>
                            <p class="text-white-50">Pondok Pesantren Putera Al-Yasiny merupakan lembaga pendidikan non-formal yang bertujuan untuk mendidik para santri perihal kegiatan keagamaan dan kemasyarakatan, akhlaq, serta pengetahuan agama.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start mt-4">
                                <a class="btn btn-warning btn-lg px-4 me-sm-3 text-white" href="pages/profil">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/foto-banner.jpg" alt="..." /></div>
                </div>
            </div>
        </header>
        <!--akhir banner-->

        <!--Kegiatan-->
        <section class="py-5 bg-light">
            <div class="container px-5 mt-5">
                <!--coba carousel-->

                <!---->
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder text-success">Kegiatan Santri</h2>
                            <p class="lead fw-normal text-muted mb-5">Berikut merupakan kegiatan yang wajib diikuti oleh santri Pondok Pesantren Putera Al-Yasiny.</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="img/keg1.jpg" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Program Tahfidz</h5>
                                </a>
                                <p class="card-text mb-0">Aktivitas menghafal Al-Quran, mengamalkan, dan membudayakan nilai-nilai Al-Qur'an dalam sikap hidup sehari-hari.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="img/keg2.jpg" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Ngaji Kitab Akhlaq</h5>
                                </a>
                                <p class="card-text mb-0">Supaya para santri memahami akhlaq terpuji dan tata cara menuntut ilmu yang benar, agar ilmu yang didapat bermanfaat di masyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="img/keg3.jpeg" alt="..." />
                            <div class="card-body p-4">
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Yasin & Tahlil</h5>
                                </a>
                                <p class="card-text mb-0">Some more quick example text to build on the card title and make up
                                    the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center mt-3">
                    <div class="col col-lg-2">
                        <a class="btn btn-warning p-2 shadow rounded-pill text-white" href="#" role="button">Kegiatan lainnya</a>
                    </div>
                </div>
        </section>



        <!--Fasilitas-->
        <section class="py-5">
            <div class="container px-5 mt-5">
                <div class="row gx-5 justify-content-center mb-5">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder text-success">Fasilitas Santri</h2>
                            <!-- <p class="lead fw-normal text-muted mb-5">Berikut merupakan kegiatan yang wajib diikuti oleh santri Pondok Pesantren Putera Al-Yasiny.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2">
                    <div class="col mb-5 col-lg-4 col-sm-6">
                        <div class="feature bg-success text-white rounded-3 mb-3"><span class="material-icons">
                                meeting_room
                            </span></div>
                        <h2 class="h5">10 Kamar Santri</h2>
                        <p class="mb-0">Kamar santri dapat menampung 5-10 santri dan dilengkapi dengan lemari.</p>
                    </div>
                    <div class="col mb-5 col-lg-4 col-sm-6">
                        <div class="feature bg-success text-white rounded-3 mb-3"><span class="material-icons">
                                wifi
                            </span></div>
                        <h2 class="h5">WIFI Zone</h2>
                        <p class="mb-0">Akses internet untuk menunjang kegiatan akademik dan non-akademik santri.</p>
                    </div>
                    <div class="col mb-5 col-lg-4 col-sm-6">
                        <div class="feature bg-success text-white rounded-3 mb-3"><span class="material-icons">
                                shower
                            </span></div>
                        <h2 class="h5">14 Kamar Mandi</h2>
                        <p class="mb-0">Akses internet untuk menunjang kegiatan akademik dan non-akademik santri.</p>
                    </div>
                    <div class="col mb-5 col-lg-4 col-sm-6">
                        <div class="feature bg-success text-white rounded-3 mb-3"><span class="material-icons">
                                local_parking
                            </span></div>
                        <h2 class="h5">2 Area Parkir</h2>
                        <p class="mb-0">Akses internet untuk menunjang kegiatan akademik dan non-akademik santri.</p>
                    </div>

                    <div class="col mb-5 mb-md-0 col-lg-4 col-sm-6">
                        <div class="feature bg-success text-white rounded-3 mb-3"><span class="material-icons">
                                sports_soccer
                            </span></div>
                        <h2 class="h5">Lapangan Olahraga</h2>
                        <p class="mb-0">Halaman yang luas dapat digunakan untuk berolahraga untuk menjaga kebugaran santri.</p>
                    </div>
                    <div class="col col-lg-4 col-sm-6">
                        <div class="feature bg-success text-white rounded-3 mb-3"><span class="material-icons">
                                visibility
                            </span></div>
                        <h2 class="h5">CCTV</h2>
                        <p class="mb-0">Sebagai keamanan tambahan dan pengawasan aktifitas santri di dalam pondok.</p>
                    </div>
                </div>
                <div class="row justify-content-md-center mt-3">
                    <div class="col col-lg-2">
                        <a class="btn btn-warning p-2 shadow rounded-pill text-white" href="#" role="button">Fasilitas lainnya</a>
                    </div>
                </div>
        </section>

        <!--Quotes-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">" Mondok adalah belajar melatih jiwa agar tenang "</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <!-- <img class="rounded-circle me-3" src="img/ae.jpg " alt="..." /> -->
                                <div class="fw-bold">
                                    KH. Moh. Thamrin
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--pendafaran banner
        <aside class="bg-success p-5 p-sm-5 ">
            <div class="d-flex align-items-center justify-content-center flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0 text-center">
                    <div class="fs-3 fw-bold text-white">PENERIMAAN SANTRI BARU PPP AL-YASINY</div>
                    <div class="text-white-50">klik tombol di bawah untuk tata cara pendaftaran</div>
                    <div class="py-2"> <a class="btn btn-warning px-2 shadow rounded-pill text-success" href="#" role="button">Selengkapnya<i class="bi bi-chevron-right ps-1"></i></a></div>
                </div>
            </div>
        </aside> -->
        </div>

    </main>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-success text-light">

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5 border-bottom border-1 border-light">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>Al-Yasiny
                        </h6>
                        <p>
                            Pondok Pesantren Putera Al-Yasiny merupakan lembaga pendidikan non-formal yang bertujuan untuk mendidik para santri perihal kegiatan keagamaan dan kemasyarakatan, akhlaq, serta pengetahuan agama.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 d-none d-md-block">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Menu
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Profil</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kegiatan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Fasilitas</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pendaftaran</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pengumumn</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Kontak</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Kontak
                        </h6>
                        <p><i class="bi bi-house-door-fill text-warning"></i></i> Jl. Tawang Mangu No. 53, Kel. Tegalgede, Kec. Sumbersari, Kab. Jember, Jawa Timur</p>
                        <p><i class="bi bi-envelope-fill text-warning"></i> alyasiny@gmail.com</p>
                        <p><i class="bi bi-telephone-fill text-warning"></i> +62 123456789</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <?= $this->endSection(); ?>