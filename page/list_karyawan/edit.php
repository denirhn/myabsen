<?php 
      require_once "function/db.php";

      $data_edit      = mysqli_query($link, "SELECT * FROM karyawan WHERE nama = '".$_GET['nama']."' ");
      $result    = mysqli_fetch_array($data_edit);

?>
<section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Edit Data Disini
              </header>
              <div class="panel-body" style="padding: 10px 60px;">
                <form class="form-horizontal " method="post" action="">
                  <div class="form-group">
                    <label class="control-label">Nama</label>                    
                      <input class="form-control" name="nama" value="<?php echo $result['nama']; ?>" required="">                   
                  </div>
                  <div class="form-group">
                    <label class="control-label">Jenis Kelamin</label>                  
                      <input class="form-control" name="kelamin" value="<?php echo $result['kelamin']; ?>" required="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Jabatan</label>                    
                      <input class="form-control" name="jabatan" value="<?php echo $result['jabatan']; ?>" required="">                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">No. HP</label>                    
                      <input class="form-control" name="nohp" value="<?php echo $result['nohp']; ?>" required="">                    
                  </div>
                  <div class="form-group">
                    <label class="control-label">Alamat</label>                    
                      <input class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>" required="">                    
                  </div>
                  <div class="form-group">
                    <input type="submit" name="edit" value="Edit Data" class="form-control btn btn-primary">
                  </div>
                </form>
              </div>
            </section>
                </form>
              </div>
            </section>
          </div>
        </div>
</section>


<?php
  if (isset( $_POST['edit'])) {
    $update = mysqli_query($link, "UPDATE karyawan SET nama     = '".$_POST['nama']."',
                                                       kelamin  = '".$_POST['kelamin']."',
                                                       jabatan  = '".$_POST['jabatan']."',
                                                       nohp     = '".$_POST['nohp']."',
                                                       alamat   = '".$_POST['alamat']."' 
                    WHERE nama = '".$_GET['nama']."' ");
    if ( $update ) { ?>
      <script>
          alert("Berhasil Ditambahkan");
          window.location.href="?page=list_karyawan";
      </script>
    
  <?php 
    }else{
      echo "gagal";
    }
  }
?>