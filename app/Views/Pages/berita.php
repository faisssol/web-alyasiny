<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-3">
                        <div class="d-flex align-items-center mt-lg-5 mb-4">
                            <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
                            <div class="ms-3">
                                <div class="fw-bold">Admin</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1">Launching Website Resmi PPP Al-Yasiny</h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2">10 November, 2021</div>
                            </header>
                            <!-- Preview image figure-->
                            <figure class="mb-4"><img class="img-fluid rounded" src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centuries, but also the leap into
                                    electronic typesetting, remaining essentially unchanged. It was popularised in
                                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                    and more recently with desktop publishing software like Aldus PageMaker including
                                    versions of Lorem Ipsum.</p>
                            </section>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- !--berita lainnya--! -->
        <section class="py-5 bg-light">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-xl-8">
                        <h2 class="fw-bolder fs-5 mb-4">Berita Lainnya</h2>
                        <!-- News item-->
                        <div class="mb-4">
                            <div class="small text-muted">10 November, 2021</div>
                            <a class="link-dark" href="#!">
                                <h3>Judul Berita Lainnya</h3>
                            </a>
                        </div>
                        <!-- News item-->
                        <div class="mb-4">
                            <div class="small text-muted">10 November, 2021</div>
                            <a class="link-dark" href="#!">
                                <h3>Judul Berita Lainnya</h3>
                            </a>
                        </div>
                        <!-- News item-->
                        <div class="mb-5">
                            <div class="small text-muted">10 November, 2021</div>
                            <a class="link-dark" href="#!">
                                <h3>Judul Berita Lainnya</h3>
                            </a>
                        </div>
                        <div class="text-end mb-5 mb-xl-0">
                            <a class="text-decoration-none" href="#!">
                                Lebih Banyak
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card border-0 h-100">
                            <div class="card-body p-3">
                                <div class="d-flex h-100 align-items-center justify-content-center">
                                    <div class="text-center">
                                        <div class="h4 mb-4 fst-italic text-muted">"Tanpa ilmu, amal itu tidak ada gunanya. Sedangkan ilmu tanpa amal adalah hal yang sia-sia."</div>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="fw-bold">
                                                Abu Bakar Ash-Shiddiq
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?= $this->endsection(); ?>