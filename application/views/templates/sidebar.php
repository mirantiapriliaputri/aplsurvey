<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">Survey </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="admin">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">



<li class="nav-item">
  <a class="nav-link" href="<?= base_url('pengguna'); ?>">
    <i class="fas fa-fw fa-user"></i>
    <span>Pengguna</span></a>
    </li>
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('organisasi'); ?>">
    <i class="fas fa-fw fa-users"></i>
    <span>Organisasi</span></a>
</li>
    

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('kegiatan'); ?>">
    <i class="fas fa-fw fa-calendar-alt"></i>
    <span>Kegiatan</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('kategori'); ?>">
    <i class="fas fa-fw fa-calendar-check"></i>
    <span>Kategori</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('galeri'); ?>">
    <i class="fas fa-fw fa-camera"></i>
    <span>Galeri</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="<?= base_url('kuesioner'); ?>">
  <i class="fas fa-question"></i>
  <span>Kuesioner</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('pertanyaan'); ?>">
  <i class="far fa-question-circle"></i>
  <span>Pertanyaan</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('hasil'); ?>">
  <i class="far fa-question-circle"></i>
  <span>Hasil</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-comments"></i>
    <span>Saran</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->