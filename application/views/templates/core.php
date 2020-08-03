<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/header') ?>

<body>

  <!-- ======= Header ======= -->
  <?php $this->load->view('templates/navbar') ?>

  <main id="main">

    <?php $this->load->view($contents) ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('templates/footer') ?>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <?php echo $this->load->view('templates/fab') ?>
  <?php echo $this->load->view('templates/bottom_bar') ?>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

</body>

</html>