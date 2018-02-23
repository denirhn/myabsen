<section class="wrapper">
  <div class="row">
    <div class="col-md-12">
      <section class="panel">
        <header class="panel-heading text-center">
          <h2 style="color: #007aff; font-weight: 700;">REKAPITULASI ABSENSI KARYAWAN PT MAJU MUNDUR</h2>
        </header>

        <table class="table table-striped table-advance table-hover">
          <tbody>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Hari, Tanggal</th>
              <th>Jam Hadir</th>
              <th>Jam Pulang</th>
              <th>Total Jam Kerja</th>
            </tr>

            <?php 
                $no = 1;

                require_once "function/db.php";
                $datas = mysqli_query($link, "SELECT id_karyawan, (TIMEDIFF(pulang,datang)) as jam_kerja  FROM kehadiran" );
                $data = mysqli_query($link, "SELECT karyawan.nama, kehadiran.tanggal_hadir, kehadiran.datang, kehadiran.pulang FROM karyawan JOIN kehadiran ON karyawan.id=kehadiran.id_karyawan ");
                    while( $output = mysqli_fetch_array($data) ){
                    $result = mysqli_fetch_array($datas); 

            ?>

            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $output['nama']; ?></td>
              <td><?php echo $output['tanggal_hadir']; ?></td>
              <td><?php echo $output['datang']; ?></td>
              <td><?php echo $output['pulang']; ?></td>
              <td><?php echo $result['jam_kerja']; ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </section>    

<!-- <section>
<table>
  <tbody>
        <tr>
          <th>Jam Kerja</th>
        </tr>
        <tr>
          <?php 
                $datas = mysqli_query($link, "SELECT id_karyawan, (TIMEDIFF(pulang,datang)) as jam_kerja  FROM kehadiran" );
                    while($result = mysqli_fetch_array($datas)) { 
          ?>
            
            <td><?php echo $result['jam_kerja']; ?></td>

          <?php } ?>
        </tr>
  </tbody>
</table>
</section> -->


    </div>
  </div>
</section>


