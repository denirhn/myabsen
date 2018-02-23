<section class="wrapper">
  <div class="row">
    <div class="col-md-12">
      <section class="panel">
        <header class="panel-heading text-center">
          <h2 style="color: #007aff; font-weight: 700;">ABSENSI KARYAWAN PT MAJU MUNDUR</h2>
        </header>
      
      <form action="" method="POST">
        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th>Masukkan ID kamu</th>
              <th>Hari, Tanggal</th>
              <th>Jam Hadir</th>
              <th>Jam Pulang</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>
                <input type="number" name="id" required="">
              </td>
              <td>
                <input type="date" name="tanggal_hadir" required="">
              </td>
              <td>
                <input type="time" name="datang" required="">
              </td>
              <td>
                <input type="time" name="pulang" required="">
              </td>
              <td>
                <input type="submit" name="simpan" class="btn btn-primary">
              </td>
            </tr>
          </tbody>
        </table>
    </form>


<?php 
    require_once "function/db.php";
    if ( isset($_POST['simpan']) ) {
          
      $id      = $_POST['id'];
      $tanggal_hadir = $_POST['tanggal_hadir'];
      $datang = $_POST['datang'];
      $pulang    = $_POST['pulang'];

      $query = mysqli_query($link, "INSERT INTO kehadiran (id_karyawan, tanggal_hadir, datang, pulang) VALUES ('$id', '$tanggal_hadir','$datang', '$pulang') ");
      if ($query) { 
?>             
      <script>
          alert("Berhasil Ditambahkan");
          window.location.href="?page=rekap";
      </script>

<?php 
          }
      }
?> 

      </section>

<section class="panel" style="margin-top: 20px;">
  <header class="panel-heading text-center">
    <h2 style="color: #007aff; font-weight: 700;">DAFTAR ID KARYAWAN</h2>
  </header>
   <table class="table table-striped table-advance table-hover table-bordered" >
    <tbody>
      <tr>
        <th>Nama</th>
        <th>ID Karyawan</th>
      </tr>
      <?php 
            
            $data = mysqli_query($link, "SELECT * FROM karyawan ");
                while( $output = mysqli_fetch_array($data) ){ 

      ?>
      <tr>
        <td><?php echo $output['nama']; ?></td>
        <td style="color: #007aff; font-weight: 700;"><?php echo $output['id']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</section>


    </div>
  </div>
</section>


