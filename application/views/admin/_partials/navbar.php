  <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
            Halo, <?php echo $this->session->userdata("nama_admin") ?>
            <!-- Untuk Status dan Riwayat Aktifitas Admin -->
            <div class="d-md-none d-lg-inline-block"></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in <?php echo date('d F y'); ?></div>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url(); ?>admin/login/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div> 
          </li>
        </ul>
      </nav>
    <br>
  <br>