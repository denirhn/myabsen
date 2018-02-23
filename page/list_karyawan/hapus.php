<?php 
	require_once "function/db.php";

	$id = $_GET['id'];

	$delete = mysqli_query($link, "DELETE FROM karyawan WHERE id = '$id' ");
	
	if ($delete) { ?> 
	
		<script>
	   		alert("Hapus Data Berhasil");
	        window.location.href="?page=list_karyawan";
	    </script>

<?php } ?>