  <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?php echo base_url('assets/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">

            <!-- Untuk Status dan Riwayat Aktifitas Admin -->
            <div class="d-md-none d-lg-inline-block">Sedang Built</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in <?php echo date('d F y'); ?></div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url(); ?>user/index" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div> 
          </li>
        </ul>
      </nav>
    <br>
  <br>