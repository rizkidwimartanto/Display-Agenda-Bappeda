<div class="d-flex justify-content-around" id="infokehadiran">
    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($DataKehadiran as $data) : ?>
                <?php if ($data['tanggal'] == tgl_indo(date("Y-m-d"))) : ?>
                    <div class="swiper-slide" data-swiper-autoplay="8000">
                        <h4 class="mt-3 text-center font-weight-bold text-light" style="font-size: 30px;"><?php echo $data['kepala']; ?></h4>
                    </div>
                    <div class="swiper-slide" data-swiper-autoplay="8000">
                        <h4 class="mt-3 text-center font-weight-bold text-light" style="font-size: 30px;"><?php echo $data['sekretariat']; ?></h4>
                    </div>
                    <div class="swiper-slide" data-swiper-autoplay="8000">
                        <h4 class="mt-3 text-center font-weight-bold text-light" style="font-size: 30px;"><?php echo $data['kepala_bidang_ekonomi']; ?></h4>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Membuat Jam -->
<script src="<?php echo base_url(); ?>assets/js/watch.js"></script>

<!-- Swiper Carousel -->
<script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>