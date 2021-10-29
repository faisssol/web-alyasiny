<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Page Content-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder text-success">Informasi Pendaftaran</h1>
                    <!-- <p class="lead fw-normal text-muted mb-0">How can we help you?</p> -->
                </div>

                <div class="mb-4">
                    <h3 class="fw-bolder">Prosedur Pendaftaran</h3>
                    <ol class="text-black-50">
                        <li>Sowan kepada Dewan Pengasuh atau Pelaksana Harian PPP Al-Yasiny bersama wali santri.</li>
                        <li>Mengisis formulir pendaftaran.</li>
                        <li>Melengkapi syarat dan biaya pendaftaran.</li>
                        <li>Menyerahkan formulir dan syarat pendaftaran ke Pelaksana Harian PPP Al-Yasiny.</li>
                        <li>Terdaftar sebagai santri aktif.</li>
                    </ol>
                </div>

                <div class="mb-4">
                    <h3 class="fw-bolder">Syarat Pendaftaran</h3>
                    <!-- <br> -->
                    <p class="mb-0 ">Syarat pendaftaran sebagai berikut :</p>
                    <ol class="text-black-50">
                        <li> Bukan mahasiswa/pekerja.</li>
                        <li> Mengisi formulir pendaftaran.</li>
                        <li> Melampirkan foto calon santri 3x4 berwarna.</li>
                        <li> Melampirkan fotocopy KTP (santri/salah satu wali santri).</li>
                        <li> Melakukan pembayaran awal (cash/angsur/tunda).</li>
                    </ol>
                </div>

                <div class="mb-4">
                    <h3 class="fw-bolder">Biaya Pendaftaran</h3>
                    <p class="mb-0">Rincian biaya pendaftaran sebagai berikut :</p>
                    <div class="row text-black-50">
                        <div class="row">
                            <div class="col">Pendaftaran</div>
                            <div class="col">Rp. 200.000</div>
                        </div>
                        <div class="row">
                            <div class="col">Jariyah Bulanan</div>
                            <div class="col">Rp. 100.000</div>
                        </div>
                        <div class="row">
                            <div class="col">Makan bulanan (2x sehari)</div>
                            <div class="col">Rp. 200.000</div>
                        </div>
                        <div class="row">
                            <div class="col">Sewa lemari (3 tahun)</div>
                            <div class="col">Rp. 100.000</div>
                        </div>
                        <div class="row">
                            <div class="col">Pendidikan (3 tahun)</div>
                            <div class="col">Rp. 100.000</div>
                        </div>
                        <div class="row fw-bolder">
                            <div class="col">Total</div>
                            <div class="col">Rp. 700.000</div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="fw-bolder">Biaya Tiap Bulan</h3>
                    <p class="mb-0">Rincian biaya tiap bulan sebagai berikut :</p>
                    <div class="row text-black-50">
                        <div class="row">
                            <div class="col">Jariyah bulanan</div>
                            <div class="col">Rp. 100.000</div>
                        </div>
                        <div class="row">
                            <div class="col">Makan bulanan (2x sehari)</div>
                            <div class="col">Rp. 200.000</div>
                        </div>
                        <div class="row fw-bolder">
                            <div class="col">Total</div>
                            <div class="col">Rp. 300.000</div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h3 class="fw-bolder">Waktu Pendaftaran</h3>
                    <p class="text-black-50">Waktu pendaftaran calon santri Pondok Pesantren Putera Al-Yasiny <b>dibuka setiap waktu.</b> Calon santri boleh daftar saat sedang menempuh kelas atau semester berapapun.</p>
                </div>

            </div>
        </section>
    </main>
</body>

<?= $this->endsection(); ?>