<div id="kontenAgendaKegiatan">
    <div class="d-flex justify-content-center" id="instansibappeda">
        <img src="<?php echo base_url(); ?>assets/img/agenda.png" alt="gambar tidak muncul" width="80" height="80">
        <h2 class="ml-2 mt-3" id="fontStyleAgenda">AGENDA KEGIATAN</h2>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $counter = 1;
                foreach ($DataAgenda as $data) {
                ?>
                    <div class="item
                <?php if ($counter <= 1) {
                        echo " active";
                    } ?>">
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
                    </div>
                <?php
                    $counter++;
                }
                ?>
            </div>
        </div>
    </div>

    <div class="card text-light" style="width: 36rem;" id="cardAgenda">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="15000">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="daftarAgenda">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-start">
                                    <img src="<?php echo base_url(); ?>assets/img/jam.png" alt="gambar tidak muncul" width="45" height="45">
                                    <h4 class="mt-2 ml-2">13.00</h4>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <img src="<?php echo base_url(); ?>assets/img/kalender.png" alt="gambar tidak muncul" width="45" height="45">
                                    <h4 class="mt-2 ml-2">13th April, 2019</h4>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="daftarAgenda">
                            <h4 id="fontJudulKegiatan">Workshop TKPRD Provinsi Jawa Tengah Tahun 2021</h4>
                        </li>
                        <li class="list-group-item" id="daftarAgenda">
                            <h4 id="fontPenanggungJawab">PENANGGUNG JAWAB
                                Ka. Bid. Perencanaan Pengendalian dan Evaluasi, Ka. Sub. Bid. Perencanaan
                            </h4>
                        </li>
                        <li class="list-group-item " id="daftarAgenda">
                            <h2 class="text-center">Ruang Rapat II</h2>
                        </li>
                    </ul>
                </div>

                <div class="carousel-item" data-interval="15000">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="daftarAgenda">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-start">
                                    <img src="<?php echo base_url(); ?>assets/img/jam.png" alt="gambar tidak muncul" width="45" height="45">
                                    <h4 class="mt-2 ml-2">13.00</h4>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <img src="<?php echo base_url(); ?>assets/img/kalender.png" alt="gambar tidak muncul" width="45" height="45">
                                    <h4 class="mt-2 ml-2">13th April, 2019</h4>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="daftarAgenda">
                            <h4 id="fontJudulKegiatan">Workshop TKPRD Provinsi Jawa Tengah Tahun 2021</h4>
                        </li>
                        <li class="list-group-item" id="daftarAgenda">
                            <h4 id="fontPenanggungJawab">PENANGGUNG JAWAB
                                Ka. Bid. Perencanaan Pengendalian dan Evaluasi, Ka. Sub. Bid. Perencanaan
                            </h4>
                        </li>
                        <li class="list-group-item " id="daftarAgenda">
                            <h2 class="text-center">Ruang Spaceroom</h2>
                        </li>
                    </ul>
                </div>

                <div class="carousel-item" data-interval="15000">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="daftarAgenda">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-start">
                                    <img src="<?php echo base_url(); ?>assets/img/jam.png" alt="gambar tidak muncul" width="45" height="45">
                                    <h4 class="mt-2 ml-2">13.00</h4>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <img src="<?php echo base_url(); ?>assets/img/kalender.png" alt="gambar tidak muncul" width="45" height="45">
                                    <h4 class="mt-2 ml-2">13th April, 2019</h4>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" id="daftarAgenda">
                            <h4 id="fontJudulKegiatan">Workshop TKPRD Provinsi Jawa Tengah Tahun 2021</h4>
                        </li>
                        <li class="list-group-item" id="daftarAgenda">
                            <h4 id="fontPenanggungJawab">PENANGGUNG JAWAB
                                Ka. Bid. Perencanaan Pengendalian dan Evaluasi, Ka. Sub. Bid. Perencanaan
                            </h4>
                        </li>
                        <li class="list-group-item " id="daftarAgenda">
                            <h2 class="text-center">Ruang Sekretaris</h2>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>