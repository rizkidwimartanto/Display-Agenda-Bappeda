<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/stylecss(2).css">

    <!-- Swiper Carousel -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <title><?php echo $judul; ?></title>
</head>

<body>
    <div class="d-flex justify-content-between konten">
        <div class="d-flex justify-content-center ml-4 mt-2" id="instansibappeda">
            <img src="<?php echo base_url(); ?>assets/img/LogoSemarang.png" class="mb-2" alt="Logo Tidak Muncul" width="80" height="80">
            <h2 class="ml-2 mt-3 text-light" id="fontStyleBappeda">Bappeda Kota Semarang</h2>
        </div>
        <div class="d-flex justify-content-end">
            <div class="jamsekarang pt-1 pl-3 pr-2">
                <div id="watch" class="text-center"></div>
                <div id="tanggal" class="text-center"></div>
            </div>
        </div>
    </div>