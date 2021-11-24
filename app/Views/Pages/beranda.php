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
        <section class="pt-3 pb-4 bg-light">
            <div class="container px-5 mt-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder text-black">Kegiatan Santri</h2>
                            <p class="fw-normal text-muted mb-3">Berikut merupakan kegiatan yang wajib diikuti oleh santri Pondok Pesantren Putera Al-Yasiny.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                            </div>
                            <div class="carousel-inner ratio" style="--bs-aspect-ratio: 50%;">
                                <div class="carousel-item active">
                                    <img src="img/keg1.jpg" class="img-fluid rounded w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/keg2.jpg" class="img-fluid rounded w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/keg3.jpeg" class="img-fluid rounded w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/keg4.jpg" class="img-fluid rounded w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/keg5.jpg" class="img-fluid rounded w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col col-lg-2">
                        <a class="btn btn-warning p-2 shadow text-white d-none d-xl-block" href="pages/kegiatan" role="button">Kegiatan lainnya</a>
                        <a class="btn btn-warning btn-sm  p-1 shadow text-white d-xl-none" href="pages/kegiatan" role="button">Kegiatan lainnya</a>
                    </div>
                </div>
            </div>
        </section>



        <!--Fasilitas-->
        <section class="pt-3 pb-4">
            <div class="container px-5 mt-5">
                <div class="row gx-5 justify-content-center mb-5">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder text-black">Fasilitas Santri</h2>
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
                        <a class="btn btn-warning p-2 shadow text-white d-none d-xl-block" href="pages/fasilitas" role="button">Fasilitas lainnya</a>
                        <a class="btn btn-warning btn-sm  p-1 shadow text-white d-xl-none" href="pages/fasilitas" role="button">Fasilitas lainnya</a>
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
                            <a href="pages/profil" class="text-reset">Profil</a>
                        </p>
                        <p>
                            <a href="pages/kegiatan" class="text-reset">Kegiatan</a>
                        </p>
                        <p>
                            <a href="pages/fasilitas" class="text-reset">Fasilitas</a>
                        </p>
                        <p>
                            <a href="pages/pendaftaran" class="text-reset">Pendaftaran</a>
                        </p>
                        <p>
                            <a href="pages/berita" class="text-reset">Berita</a>
                        </p>
                        <p>
                            <a href="pages/kontak" class="text-reset">Kontak</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Kontak
                        </h6>
                        <p><i class="bi bi-house-door-fill text-warning"></i> Jl. Tawang Mangu No. 53, Kel. Tegalgede, Kec. Sumbersari, Kab. Jember, Jawa Timur</p>
                        <p><i class="bi bi-envelope-fill text-warning"></i> alyasiny@gmail.com</p>
                        <p><i class="bi bi-whatsapp text-warning"></i> +62 123456789</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <?= $this->endSection(); ?>