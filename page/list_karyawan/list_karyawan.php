<section class="wrapper">
<div class="row">
  <div class="col-md-12">

    <a class="btn btn-add btn-primary" data-toggle="modal" data-target="#addModal" style="margin-bottom: 20px;">
      <i class="fa fa-plus"></i> Tambah Data
    </a>

    <section class="panel">
      <header class="panel-heading text-center">
        <h2 style="color: #007aff; font-weight: 700;">DATA KARYAWAN PT MAJU MUNDUR</h2>
      </header>

      <table class="table table-striped table-advance table-hover">
        <tbody>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Jabatan</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
          <?php 
                $no = 1;

                require_once "function/db.php";
                $data = mysqli_query($link, "SELECT * FROM karyawan ");
                    while( $output = mysqli_fetch_array($data) ){ 

          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $output['nama']; ?></td>
            <td><?php echo $output['kelamin']; ?></td>
            <td><?php echo $output['jabatan']; ?></td>
            <td><?php echo $output['nohp']; ?></td>
            <td><?php echo $output['alamat']; ?></td>
            <td>
                <div class="action">

                  <a href="?page=edit&nama=<?php echo $output['nama']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Ubah</a>

                  <a onclick="return confirm('Yakin Mau Menghapus ?')" href="?page=list_karyawan&aksi=hapus&id=<?php echo $output['id']; ?>" class="btn btn-danger">
                      Hapus
                  </a>
                </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

      <!-- add data modal -->
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="addModalLabel" style="color: #007aff; font-weight: 700;"> Isi Form Dibawah Untuk Menambah Data</h4>
                  </div>
                  <div class="modal-body">                                            
                      <form action="" method="post">
                        <div class="form-group create-data">
                          <label>Nama</label>
                          <input class="form-control data-input" name="nama" placeholder="Masukkan Nama" required="">
                        </div>
                        <div class="form-group create-data">
                          <label>Jenis Kelamin</label>
                          <input class="form-control data-input" name="kelamin" placeholder="Kelamin" required="">
                        </div>
                        <div class="form-group create-data">
                          <label>Jabatan</label>
                          <input class="form-control data-input" name="jabatan" placeholder="Masukkan Jabatan" required="">
                        </div>                                              
                        <div class="form-group create-data">
                          <label>No. HP</label>
                          <input class="form-control data-input" name="nohp" placeholder="Masukkan Nomor HP" required="">
                        </div>
                        <div class="form-group create-data">
                          <label>Alamat</label>
                          <input class="form-control data-input" name="alamat" placeholder="Masukkan Alamat" required=""> 
                        </div>
                  </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                          <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                        </div>
                      </form>
              </div>
          </div>
      </div>


      <?php 

            if ( isset($_POST['simpan']) ) {
                
                $nama    = $_POST['nama'];
                $kelamin = $_POST['kelamin'];
                $jabatan = $_POST['jabatan'];
                $nohp    = $_POST['nohp'];
                $alamat  = $_POST['alamat'];

                $query = mysqli_query($link, "INSERT INTO karyawan (nama, kelamin, jabatan, nohp, alamat) VALUES ('$nama', '$kelamin','$jabatan', '$nohp',     '$alamat') ");
                if ($query) { 
      ?>             
                    <script>
                        alert("Berhasil Ditambahkan");
                        window.location.href="?page=list_karyawan";
                    </script>

      <?php 
                }
            }
      ?>

     
       

    </section>
  </div>
</div>
</section>
