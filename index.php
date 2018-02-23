<?php 
     error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    require_once "views/header.php";
    
?>
<aside>
    <!--sidebar start-->
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>DATA</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="?page=list_karyawan">List Karyawan</a></li>
              <li><a class="" href="?page=rekap">Rekap Absensi</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>ABSEN</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="?page=absen">Mulai Absen</a></li>
            </ul>
          </li>
        </ul>
      </div>


       <!-- /. NAV SIDE  -->
        <section id="main-content" >                    
                        <?php 
                            $page = $_GET["page"];
                            $aksi = $_GET["aksi"];

                            if ($page == "list_karyawan") {
                                if ($aksi == "") {
                                    include "page/list_karyawan/list_karyawan.php";                                    
                                }if ($aksi == "hapus") {
                                    include "page/list_karyawan/hapus.php";
                                }
                            }elseif ($page == "absen") {
                                if ($aksi == "") {
                                    include "page/mulai_absen/absen.php";
                                }if ($aksi == "hapus") {
                                    include "page/mulai_absen/hapus.php";
                                }
                            }elseif ($page == "rekap") {
                                if ($aksi == "") {
                                    include "page/rekap_absensi/rekap.php";
                                }
                            }elseif ($page == "edit") {
                                if ($aksi == "") {
                                    include "page/list_karyawan/edit.php";
                                }
                            }elseif ($page == ""){
                                include "home.php";
                            }
                        ?>
        </section> <!-- /. PAGE WRAPPER  -->
    <!-- sidebar menu end-->
  </aside>


  


<?php 

    require_once "views/footer.php";
    
?>