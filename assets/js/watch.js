    $(document).ready(function(){
    function clock() {
    var now = new Date();
    var secs = ('0' + now.getSeconds()).slice(-2);
    var mins = ('0' + now.getMinutes()).slice(-2);
    var hr = now.getHours();
    var Time = hr + ":" + mins + ":" + secs + " WIB";
    document.getElementById("watch").innerHTML = Time;
    requestAnimationFrame(clock);
    }

    requestAnimationFrame(clock);
    });

    var tanggallengkap = new String();
    var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
    namahari = namahari.split(" ");
    var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    namabulan = namabulan.split(" ");
    var tgl = new Date();
    var hari = tgl.getDay();
    var tanggal = tgl.getDate();
    var bulan = tgl.getMonth();
    var tahun = tgl.getFullYear();
    tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
    document.getElementById("tanggal").innerHTML = tanggallengkap;
