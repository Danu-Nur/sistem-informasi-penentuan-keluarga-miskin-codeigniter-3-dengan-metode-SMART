<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('pemdes/home') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>SPK_Keluarga Miskin</span>
        </a>
    </li>

    </li>
    <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('pemdes/data_perhitungan') ?>">
            <i class="fas fa-fw fa-file"></i>
            <span>Hasil Kelayakan</span></a>
    </li>
</ul>