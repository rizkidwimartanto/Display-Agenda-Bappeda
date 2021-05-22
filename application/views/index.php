<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>

<div id="kontenAgendaKegiatan">
    <div class="d-flex justify-content-center" id="instansibappeda">
        <img src="<?php echo base_url(); ?>assets/img/agenda.png" alt="gambar tidak muncul" width="80" height="80">
        <h2 class="ml-2 mt-3" id="fontStyleAgenda">AGENDA KEGIATAN</h2>
    </div>

    <div class="d-flex justify-content-around mt-4">
        <h2 class="mr-5 font-weight-bold" id="SekarangBesok">SEKARANG</h2>
        <h2 class="mr-5 font-weight-bold" id="SekarangBesok">BESOK</h2>
    </div>

    <div class="d-flex justify-content-between mt-4">

        <div class="card text-light" style="width: 36rem;" id="cardAgenda">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($DataAgenda as $data) : ?>
                        <?php if ($data['tanggal_acara'] == tgl_indo(date("Y-m-d"))) : ?>
                            <div class="swiper-slide" data-swiper-autoplay="10000">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" id="daftarAgenda">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex justify-content-start">
                                                <img src="<?php echo base_url(); ?>assets/img/jam.png" alt="gambar tidak muncul" width="45" height="45">
                                                <h4 class="mt-2 ml-2"><?php echo $data['jam_acara']; ?></h4>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="<?php echo base_url(); ?>assets/img/kalender.png" alt="gambar tidak muncul" width="45" height="45">
                                                <h4 class="mt-2 ml-2"><?php echo $data['tanggal_acara']; ?></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" id="daftarAgenda">
                                        <h4 id="fontJudulKegiatan"><?php echo $data['nama_acara']; ?></h4>
                                    </li>
                                    <li class="list-group-item" id="daftarAgenda">
                                        <h4 id="fontPenanggungJawab">
                                            PENANGGUNG JAWAB : <?php echo $data['penanggung_jawab']; ?>
                                        </h4>
                                    </li>
                                    <li class="list-group-item " id="daftarAgenda">
                                        <h2 class="text-center"><?php echo $data['ruangan']; ?></h2>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($data['tanggal_acara'] != tgl_indo(date("Y-m-d"))) : ?>
                        <h2 id="h2AgendaKosong">Agenda Kosong</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="card text-light" style="width: 36rem;" id="cardAgenda">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ($DataAgenda as $data) : ?>
                        <?php if ($data['tanggal_acara'] == tgl_indo(date("Y-m-d", strtotime('tomorrow')))) : ?>
                            <div class="swiper-slide" data-swiper-autoplay="8000">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" id="daftarAgenda">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex justify-content-start">
                                                <img src="<?php echo base_url(); ?>assets/img/jam.png" alt="gambar tidak muncul" width="45" height="45">
                                                <h4 class="mt-2 ml-2"><?php echo $data['jam_acara']; ?></h4>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <img src="<?php echo base_url(); ?>assets/img/kalender.png" alt="gambar tidak muncul" width="45" height="45">
                                                <h4 class="mt-2 ml-2"><?php echo $data['tanggal_acara']; ?></h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" id="daftarAgenda">
                                        <h4 id="fontJudulKegiatan"><?php echo $data['nama_acara']; ?></h4>
                                    </li>
                                    <li class="list-group-item" id="daftarAgenda">
                                        <h4 id="fontPenanggungJawab">
                                            PENANGGUNG JAWAB : <?php echo $data['penanggung_jawab']; ?>
                                        </h4>
                                    </li>
                                    <li class="list-group-item " id="daftarAgenda">
                                        <h2 class="text-center"><?php echo $data['ruangan']; ?></h2>
                                    </li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if ($data['tanggal_acara'] != tgl_indo(date("Y-m-d", strtotime('tomorrow')))) : ?>
                        <h2 id="h2AgendaKosong">Agenda Kosong</h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>