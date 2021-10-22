<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder text-success">Fasilitas PPP Al-Yasiny</h1>
                    <!-- <p class="lead fw-normal text-muted mb-0">How can we help you?</p> -->
                </div>
                <div class="row gx-5">
                    <div class="col-xl-8">
                        <!-- Fasilitas Accordion-->
                        <!-- <h2 class="fw-bolder mb-3">Account &amp; Billing</h2> -->
                        <div class="accordion my-5" id="accordionExample">
                            <!-- Fasilitas 7 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingSeven"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <span class="material-icons pe-3 text-success">
                                            mosque
                                        </span> Musholla
                                    </button></h3>
                                <div class="accordion-collapse collapse show" id="collapseSeven" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="carouself7" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/img/f16.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f17.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f18.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouself7" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouself7" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 1 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <span class="material-icons pe-3 text-success">
                                            meeting_room
                                        </span> Kamar Santri</button></h3>
                                <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="carouself1" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/img/f1.jpeg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f2.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f3.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouself1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouself1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 2 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="material-icons pe-3 text-success">
                                            wifi
                                        </span> WIFI Zone</button></h3>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <img src="/img/f4.jpg" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 3 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="material-icons pe-3 text-success">
                                            shower
                                        </span>
                                        Kamar Mandi
                                    </button></h3>
                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="carouself3" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/img/f5.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f6.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f7.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouself3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouself3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 4 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFour"><button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <span class="material-icons pe-3 text-success">
                                            local_parking
                                        </span>
                                        Area Parkir
                                    </button></h3>
                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="carouself4" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/img/f8.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f9.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouself4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouself4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 5 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingFive"><button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <span class="material-icons pe-3 text-success">
                                            sports_soccer
                                        </span>
                                        Lapangan Olahraga
                                    </button></h3>
                                <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="carouself5" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/img/f10.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f11.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouself5" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouself5" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 6 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingSix"><button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <span class="material-icons pe-3 text-success">
                                            visibility
                                        </span>
                                        CCTV
                                    </button></h3>
                                <div class="accordion-collapse collapse" id="collapseSix" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <img src="/img/f12.jpg" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Fasilitas 8 -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingEight"><button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <span class="material-icons pe-3 text-success">
                                            <span class="material-icons">
                                                restaurant
                                            </span>
                                        </span>
                                        Dapur
                                    </button></h3>
                                <div class="accordion-collapse collapse" id="collapseEight" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="carouself8" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="/img/f13.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f14.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="/img/f15.jpg" class=" d-block w-100" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouself8" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouself8" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card border-0 bg-light mt-xl-5">
                            <div class="card-body p-4 py-lg-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <div class="h6 fw-bolder">Have more questions?</div>
                                        <p class="text-muted mb-4">
                                            Contact us at
                                            <br />
                                            <a href="#!">support@domain.com</a>
                                        </p>
                                        <div class="h6 fw-bolder">Follow us</div>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                        <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?= $this->endsection(); ?>