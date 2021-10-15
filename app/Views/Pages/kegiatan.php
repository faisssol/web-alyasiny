<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder text-success">Kegiatan Santri</h1>
                    <!--<p class="lead fw-normal text-muted mb-0">Company portfolio</p>-->
                </div>
                <div class="row gx-5">
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg1.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Tadarus Al-Qur'an</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg5.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Program Tahfidz</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg4.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Ngaji KItab Akhlaq</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg6.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Ngaji Kitab Fiqih</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg7.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Rutinan Yasin & Tahlil</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg8.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Sholawat Diba'</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg8.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Ngaji Kitab Tasawuf</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg8.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Surat Al-Kahfi</a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded-3 mb-1" src="/img/keg9.jpg" alt="..." />
                            <a class="fw-bolder text-decoration-none link-dark stretched-link" href="#!">Jam Belajar Bersama</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="py-5 bg-light">
            <div class="container px-5 mb-5">
                <div class=" mb-5">
                    <h1 class="fw-bolder text-success">Galeri</h1>
                    <p class="lead fw-normal text-muted mb-0">Potret aktivitas santri di dalam pondok.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-lg-0">
                        <img src="/img/g1.jpg" class="img-fluid w-100 shadow rounded mb-4" alt="" />

                        <img src="/img/g2.jpg" class="img-fluid w-100 shadow rounded mb-4" alt="" />
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-lg-0">
                        <img src="/img/g3.jpeg" class="img-fluid w-100 shadow rounded mb-4" alt="" />

                        <img src="/img/g4.jpeg" class="img-fluid w-100 shadow rounded mb-4" alt="" />
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-lg-0">
                        <img src="/img/g5.jpg" class="img-fluid w-100 shadow rounded mb-4" alt="" />

                        <img src="/img/g6.jpg" class="img-fluid w-100 shadow rounded mb-4" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery -->
        <!-- <section class="py-5 bg-light">
            <div class="container px-5 my-5">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-lg btn-primary" href="#!">Contact us</a>
            </div>
        </section> -->
    </main>


    <?= $this->endsection(); ?>