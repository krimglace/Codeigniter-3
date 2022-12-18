<!-- Footer -->
<div class="bg-home footer text-light text-center pt-3">
  <div class="float-start col-lg-4 col-md-4 col-11 m-3 lokasi-footer">
    <?php foreach($tentang as $ttg) : ?>
        <?= $ttg->lokasi ?>
      <?php endforeach ?>
  </div>
  <div class="footer-menu float-start text-start col-lg-3 col-md-3 col-6 ms-lg-5 ms-md-5 mt-3 ms-3 mb-3">
    <h5 class="ms-lg-5 ms-md-5" style="font-weight: bold;">Situs Kami</h5>
    <ul class="menu-footer ms-lg-5 ms-md-5">
      <li >
        <a href="<?= base_url('Dokumentasi') ?>">Dokumentasi</a>
      </li>
      <li >
        <a href="<?= base_url('Blog') ?>">Blog</a>
      </li>
    </ul>
  </div>
  <div class="float-start text-start col-lg-3 col-md-3 col-5 ms-lg-3 ms-md-3 me-2 mt-3 mb-3">
    <h5 style="font-weight:bold;">Ikuti Kami</h5>
    <div class="follow ms-lg-5 ms-md-5">
      <?php foreach($tentang as $ttg) : ?>
        <a href="<?= $ttg->link_instagram ?>"><img class="instagram" src="<?= base_url('assets/mystyle/image/instagram.png') ?>"></a>
        <a href="<?= $ttg->link_facebook ?>"><img class="facebook" src="<?= base_url('assets/mystyle/image/facebook.png') ?>"></a>
      <?php endforeach ?>
    </div>
  </div>
  <div class="clearfix"></div>
  <hr />
  <?php foreach($tentang as $ttg) : ?>
  &copy; 2022 <?= $ttg->nama_aplikasi ?>
  <?php endforeach ?>
</div>
<!-- End Footer -->


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>