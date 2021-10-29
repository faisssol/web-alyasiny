<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder text-success">Kontak</h1>
                    <!-- <p class="lead fw-normal text-muted mb-0">How can we help you?</p> -->
                </div>

                <div>
                    <h3 class="mb-4">Pondok Pesantren Putera Al-Yasiny</h3>
                    <h4>No. WhatsApp</h4>
                    <p><i class="bi bi-whatsapp text-success"></i> +62 123456789</p>
                    <h4>E-mail</h4>
                    <p><i class="bi bi-envelope-fill text-success"></i> alyasiny@gmail.com</p>
                    <h4>Alamat Pondok Pesantren</h4>
                    <div class="ratio ratio-16x9 shadow-sm">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d830.2765327288017!2d113.72575219069839!3d-8.153989801855454!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd69585978c2a59%3A0xd9b61a55da8e438f!2sPONPES%20AL%20YASINY%20JEMBER!5e0!3m2!1sen!2sid!4v1635389120891!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>


            </div>
        </section>
    </main>
</body>

<?= $this->endsection(); ?>