<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNBBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/navbar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/footer.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('application/views/css/index.css'); ?>">
</head>
<body>
    
<!-- Navbar -->
<?php include('navbar.php'); ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="hero-text">
            <h1>Apa itu Bimbingan Skripsi Online?</h1>
            <p>Sistem Bimbingan Skripsi Online (Si Bool) adalah platform digital yang mempermudah proses 
                bimbingan antara mahasiswa dan dosen melalui fitur komunikasi, 
                pengelolaan dokumen, serta pelacakan progres secara terstruktur dan efisien.</p>
            <button class="btn btn-primary rounded-pill px-5 py-3 mt-4">Daftar Sekarang!</button>
        </div>
        <div class="hero-image">
            <img src="<?= base_url('images/model.png'); ?>" alt="Hero Image" class="img-fluid">
        </div>
    </div>
</section>


<!-- Why Choose Section -->
<section class="why-choose-section">
    <div class="container">
        <h2>Mengapa Bimbingan Skripsi Online?</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <i class="fas fa-clock fa-3x"></i>
                <p>Efisien Waktu</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-comments fa-3x"></i>
                <p>Efektif dan Konsultasi</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-file-alt fa-3x"></i>
                <p>Dokumen Tersimpan</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-user-shield fa-3x"></i>
                <p>Privasi Data Terjamin</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-book fa-3x"></i>
                <p>Akses Materi Pendukung</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-laptop fa-3x"></i>
                <p>Diskusi Interaktif</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2>FAQ</h2>
        <div class="accordion" id="faqAccordion">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $i ?>">
                        <button 
                            class="accordion-button collapsed" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#collapse<?= $i ?>" 
                            aria-expanded="false" 
                            aria-controls="collapse<?= $i ?>">
                            Pertanyaan Umum <?= $i ?>
                        </button>
                    </h2>
                    <div id="collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $i ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Jawaban untuk pertanyaan umum <?= $i ?>.
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
