<div id="content">
  <!-- Banner -->
  <div id="CarouselSliderHome" class="carousel slide m-2" data-bs-ride="true">
    <div class="carousel-inner">
      <?php foreach($banner as $bnr) : ?>

      <div class="carousel-item carouselhome">
        <img src="<?= base_url('assets/mystyle/image/banner/'.$bnr->nama_foto) ?>" class="d-block" alt="...">
      </div>
      <?php endforeach?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#CarouselSliderHome" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#CarouselSliderHome" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Banner -->

  <div class="paketcover mt-4 mb-4">
    <!-- Title -->
    <div class="text-center titlepaketcover">
      <br />
      <h1><strong><em>Wedding All In Package</em></strong></h1>
      <p><strong><em>Starts from</em></strong></p>
    </div>
    <!-- End Title -->

    <!-- Paket -->
    <div>
      <?php foreach($paket as $pkt) : ?>
        <div class="float-start paket col-4 text-center paketpaket">
          <div class="p-2">
            <h1><?= $pkt->harga_paket ?></h1>
            <small><strong><?=$pkt->banyak_paket?></strong></small>
          </div>
        </div>
      <?php endforeach?>
      <div class="clearfix"></div>
      <br />
    </div>
    <br />
    <div class="text-center paket-ket">
      <?php foreach($ketpaket as $kpkt) : ?>
        <h5>Harga Termasuk : <br> <em> <?= $kpkt->harga_termasuk ?> </em></h5>
      <?php endforeach?>
    </div>
    <br />
    <!-- End Paket -->
  </div>

  <!-- Promo -->
    <div class="promocover bg-home text-light mt-4 mb-4 pt-4 pb-4 ps-2 pe-2">
      <?php foreach($promo as $prm) : ?>
        <?php if ($prm->mulai_promo <= date('Y-m-d H:i:s') && $prm->selesai_promo >= date('Y-m-d H:i:s')) : ?> 
        <div class="text-center">
          <h3>Promo <?= $prm->bulan_promo ?></h3>
          <h3><?= $prm->nama_promo ?></h3>
          <h3><?= $prm->promo ?></h3>
          <?php foreach($tentang as $ttg) : ?>
          Promo Berakhir Pada : 
          <div id="timercount">
            <h2 id="demo"></h2>
            <div class="timercount col-4 float-start">
              <div class="bg-light text-success p-lg-3 m-lg-2 p-md-3 m-md-2 m-1 pt-2 pb-2">
                <h3 id="hours"></h3> Jam
              </div>
            </div>
            <div class="timercount col-4 float-start">
              <div class="bg-light text-success p-lg-3 m-lg-2 p-md-3 m-md-2 m-1 pt-2 pb-2">
                <h3 id="minutes"></h3> Menit
              </div>
            </div>
            <div class="timercount col-4 float-start">
              <div class="bg-light text-success p-lg-3 m-lg-2 p-md-3 m-md-2 m-1 pt-2 pb-2">
                <h3 id="seconds"></h3> Detik
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <a class="btn btn-light btn-outline-success mt-3 rounded-pill ps-lg-5 ps-md-5 ps-3 pe-3 pe-lg-5 pe-md-5" href="https://wa.me/62<?= $ttg->whatsapp ?>">Hubungi Kami Segera</a> <br />
          <?php endforeach ?>
        </div>
        <input type="hidden" name="" value="<?= $prm->selesai_promo ?>" id="timeselesai">
        <?php else : ?>
          <div class="text-center">
            <h3><strong><em>Tidak Ada Promo Hari Ini</em></strong></h3>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    </div>
  <!-- End Promo -->

  <!-- Faq -->
    <div class="p-4 faq-cover mt-4 mb-4">
      <div class="text-center ps-lg-5 pe-lg-5">
        <h4><strong>Apa Yang Sering Ditanyakan ?</strong></h4>
        <div class="faqs text-start">
          <?php foreach($faq as $f) : ?>
            <div class="mb-2 faqqna bg-home">
              <div onclick="faqShow(<?= $f->id ?>)" class="pertanyaan w-100 pb-2 ps-2 pe-2 pt-3 text-light">
                <h5 class="float-start col-lg-9 col-md-9 col-8 ps-lg-3 pe-lg-3 pe-md-3 ps-md-3"><?= $f->pertanyaan ?></h5>
                <i id="i-qna<?php echo $f->id ?>" class="fas fa-circle-plus bukafaq float-end me-4 pt-lg-1 pt-md-1 text-end col-2"></i>
                <div class="clearfix"></div>
              </div>
              <div class="jawab bg-light jawaban<?= $f->id ?> w-100 pb-2 ps-2 pe-2 pt-3 d-none text-dark">
                <p class="ps-lg-3 pe-lg-3 pe-md-3 ps-md-3"><?= $f->jawaban ?></p>
                <div class="clearfix"></div>
              </div>
            </div>
          <?php endforeach ?>
          <div class="text-center knslts mt-3">
            <strong>Tidak menemukan jawaban atas pertanyaan anda?<br />Konsultasikan ke kami sekarang juga</strong><br />
            <?php foreach($tentang as $ttg) : ?>
              <a href="https://wa.me/62<?= $ttg->whatsapp ?>" class="btn btn-success bg-home btn-outline-light mt-3 rounded-pill ps-lg-5 ps-md-5 ps-3 pe-3 pe-lg-5 pe-md-5 mt-3">Konsultasi Sekarang</a>
            <?php endforeach ?>
          </div>
        </div>      
      </div>
      <br />
    </div>
  <!-- End Faqs -->

  <!-- Blog -->
    <div class="blog-cover bg-home text-light mt-4 mb-4 pt-4 pb-4 ps-2 pe-2">
      <div class="text-center ps-lg-5 pe-lg-5">
        <h3><strong>Blog dan Artikel Kami</strong></h3>
        <div class="blogs text-start">

          <?php foreach($blog as $bl) : ?>
            <a href="<?= base_url('blog/view/'.$bl->id.'?'.$bl->judul)?>" class="text-light">
              <div class="float-start col-lg-4 col-md-4 col-12">
                <div class="ms-3 me-3 coblog">
                  <img src="<?php echo base_url('assets/mystyle/image/blog/'.$bl->featured_image) ?>">
                  <div class="textcoblog">
                    <h3 style="margin-bottom: -2%;"><strong><?php echo $bl->judul ?></strong></h3>
                    <small><i class="fas fa-calendar"></i> <?php echo $bl->created_at ?></small>
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach ?>
          <div class="clearfix"></div>
          <div class="text-center">
            <a href="<?= base_url('Blog') ?>" class="btn btn-light text-home rounded-pill">Lihat Selengkapnya</a>
          </div>
        </div>      
      </div>
      <br />
    </div>
  <!-- End Blog -->

  <!-- Galeri -->

  <!-- End Galeri -->


  <!-- Form Pemesanan -->
    <div class="text-center pemesanan bg-light">
      <div class="pemesanan-cover">
        <h2><strong><em>Tunggu Apalagi ?</em></strong></h2>
        <h5>Lakukan pemesanan, sesuaikan kebutuhan dan tanyakan hal menarik <i class="text-home fa-solid fa-face-smile-wink"></i><br />yuk hubungi kami</h5>
        <form action="<?php echo('Home/pemesanan') ?>" method="post" class="text-start">
          <div class="form-group float-start col-lg-6 mt-3 col-md-6 col-12">
            <div class="me-2 ms-2">
              <label for="nama" class="">Nama</label>
              <input type="text" name="nama" class="form-control " id="nama">
            </div>
          </div>
          <div class="form-group float-start col-lg-6 mt-3 col-md-6 col-12">
            <div class="me-2 ms-2">
              <label for="hp" class="">No. Handphone/Whatsapp</label>
              <input type="number" name="hp" class="form-control " id="hp">
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group ms-2 me-2 mt-3">
            <label for="pemesanan" class="">Rencana Tanggal Pemesanan</label>
            <input type="date" name="pemesanan" class="form-control " id="pemesanan">
          </div>
          <div class="form-group ms-2 me-2 mt-3">
            <input type="submit" class="btn text-light bg-home form-control" id="nama" value="Kirim dan Hubungi Sekarang">
          </div>
        </form>
      </div>
    </div>
  <!-- End Form Pemesanan -->

<br />
</div>
<script type="text/javascript">
  document.getElementsByClassName('carouselhome')[0].classList.add('active')
  document.getElementsByClassName('carouselbanner')[0].classList.add('active')
</script>
<script>
  // Mengatur waktu akhir perhitungan mundur
  if(document.getElementById('timeselesai').value != null){   
    var dateSelesai = document.getElementById('timeselesai').value;
  console.log(dateSelesai)
    var countDownDate = new Date(dateSelesai).getTime();

    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {

      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();
        
      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;
        
      // Perhitungan waktu untuk hari, jam, menit dan detik
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      if(days >= 1){
        document.getElementsByClassName('promocover')[0].classList.add('d-none')
      } else {
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;
      }
        
      // Jika hitungan mundur selesai, tulis beberapa teks 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  }
</script>

<script type="text/javascript">
  function faqShow(values){
    document.getElementsByClassName('jawaban'+values)[0].classList.toggle('d-none')
    document.getElementById('i-qna'+values).classList.toggle('fa-circle-plus')
    document.getElementById('i-qna'+values).classList.toggle('fa-circle-minus')
  }
</script>