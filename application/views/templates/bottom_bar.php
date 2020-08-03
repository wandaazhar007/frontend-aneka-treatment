<nav class="nav">
  <div class="garis1"></div>
  <a href="<?php echo base_url('layanan') ?>" class="nav_link">
    <i class="fa fa-stethoscope nav_icon"></i>
    <span class="nav_text">Layanan</span>
  </a>

  <div class="garis3"></div>
  <a href="<?php echo base_url('daftar_dokter') ?>" class="nav_link">
    <i class="fa fa-calendar nav_icon"></i>
    <span class="nav_text">Kontak</span>
  </a>


  <a href="<?php echo base_url('dashboard') ?>" class="nav_link">
    <i class="fa fa-comments nav_icon"></i>
    <span class="nav_text">Home</span>
  </a>
  <?php
  if ($this->session->userdata('email') == null) {
    echo '
					<a href="' . base_url('login/') . $this->session->userdata('id') . '" class="nav_link">
						<i class="fa fa-power-off nav_icon"></i>
						<span class="nav_text">Login</span>
					</a>
				';
  } else {
    echo '
					<a href="' . base_url('profile_pasien/getProfile/') . $this->session->userdata('id') . '" class="nav_link">
						<i class="fa fa-user nav_icon"></i>
						<span class="nav_text">Profil</span>
					</a>
				';
  }
  ?>

  <div class="garis-vertikal2"></div>
</nav>