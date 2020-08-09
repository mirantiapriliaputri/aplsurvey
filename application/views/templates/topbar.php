<!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

   <!-- Main Content -->
   <div id="content">

     <!-- Topbar -->
     <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

       <!-- Sidebar Toggle (Topbar) -->
       <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
         <i class="fa fa-bars"></i>
       </button>



       <!-- Topbar Navbar -->
       <ul class="navbar-nav ml-auto">
         <div class="mt-4">
           <h5>
             <marquee><b> Selamat Datang di Aplikasi Survey</b></marquee>
           </h5>
         </div>

         <div class="topbar-divider d-none d-sm-block"></div>


         <!-- <li class="nav-item dropdown no-arrow">
           <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name'] ?></span>
             <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
           </a>
           <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">
               <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
               Profile
             </a>
             <a class="dropdown-item" href="#">
               <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
               Settings
             </a>
             <a class="dropdown-item" href="#">
               <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
               Activity Log
             </a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
               <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
               Logout
             </a>
           </div>
         </li> -->


         <?php
          date_default_timezone_set("Asia/Jakarta");
          ?>
         <script type="text/javascript">
           var detik = <?php echo date('s'); ?>;
           var menit = <?php echo date('i'); ?>;
           var jam = <?php echo date('H'); ?>;

           function clock() {
             if (detik != 0 && detik % 60 == 0) {
               menit++;
               detik = 0;
             }
             second = detik;

             if (menit != 0 && menit % 60 == 0) {
               jam++;
               menit = 0;
             }
             minute = menit;

             if (jam != 0 && jam % 24 == 0) {
               jam = 0;
             }
             hour = jam;

             if (detik < 10) {
               second = '0' + detik;
             }
             if (menit < 10) {
               minute = '0' + menit;
             }

             if (jam < 10) {
               hour = '0' + jam;
             }
             waktu = hour + ':' + minute + ':' + second;

             document.getElementById("clock").innerHTML = waktu;
             detik++;
           }

           setInterval(clock, 1000);
         </script>

         <div style="text-align:right;">
           <button type="button" class="btn btn-outline-primary btn-sm mt-3">
             <h6 id="clock" class="mt-1"></h6>
           </button>

         </div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
          <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>

    </ul>

  </nav>
  <!-- End of Topbar -->
