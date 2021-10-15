<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3 text-success">Profil PPP Al-Yasiny</h1>
                            <p class="lead fw-normal text-muted mb-4">Pondok Pesantren Putera Al-Yasiny merupakan lembaga pendidikan non-formal yang bertujuan untuk mendidik para santri perihal kegiatan keagamaan dan kemasyarakatan, akhlaq, serta pengetahuan agama.</p>
                            <!--<a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-light" id="scroll-target">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder text-success">Pengasuh PPP Al-Yasiny</h2>
                        <p class="lead fw-normal text-muted mb-0" style="text-align : justify;">Ponpes ini didirikan oleh Alm. Drs. KH. Zainul Arifin, M.H.I. melalui SK Menteri Kehakiman R.I. tanggal 29 Nopember 1999 Nomor C.1915.HT.03.02 Th. 1999 dengan akte bernamakan YAYASAN PONDOK PESANTREN AL YASINY tanggal 13 Oktober 2008.
                            Ponpes Putera Al-Yasiny telah mendapatkan piagam dari Departemen Agama dengan nomor Kd.13.9/5/PP.008/1977/2008 dengan diberikannya hak yang dilindungi hukum untuk mengadakan pendidikan dan pengajaran.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <!-- <h2 class="fw-bolder pb-5 text-success">Pengurus PPP Al-Yasiny</h2> -->
                    <!--<p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>-->
                </div>
                <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5 mb-5 mb-xl-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">KH. A. Ubaid Syafawi</h5>
                            <div class="fst-italic text-muted">Dewan Pengasuh</div>
                        </div>
                    </div>
                    <div class="col mb-5 mb-5 mb-sm-0">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">KH. Moh. Thamrin</h5>
                            <div class="fst-italic text-muted">Dewan Pengasuh</div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="text-center">
                            <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                            <h5 class="fw-bolder">F.A. Kafi</h5>
                            <div class="fst-italic text-muted">Pelaksana Harian</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?= $this->endSection(); ?>