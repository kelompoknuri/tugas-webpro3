<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milliams Library | <?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/user/css/bootstrap.css">
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> 
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="<?= base_url(); ?>">Milliams media</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="navbar-nav m-auto">
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <!-- baru -->
                <a class="nav-item nav-link active text-white" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                <?php if (!empty($this->session->userdata('email'))) { ?>
                    <a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b>
                    <?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
                    <a class="nav-item nav-link text-white" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a> 
                    <a class="nav-item nav-link text-white" href="<?= base_url('member/logout'); ?>">
                    <i class="fas fw fa-login"></i> Log out</a>
                        <?php } else { ?> 
                            <a class="nav-item nav-link text-white" data-toggle="modal" data-target="#daftarModal" href="#">
                                <i class="fas fw fa-login"></i> Daftar</a> 
                            <a class="nav-item nav-link text-white" data-toggle="modal" data-target="#loginModal" href="#">
                                <i class="fas fw fa-login"></i> Log in</a>
                                <?php } ?> 
                            </div> 
                        </div> 
                        <span class="nav-item nav-link nav-right text-white float-right" style="display:block; margin-left:20px;">
                        Selamat Datang<b> &nbsp;<?= $user; ?></b></span> 
                    </div> 
                </nav> 
<div class="container mt-3">