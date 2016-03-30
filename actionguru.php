<?php
	include("koneksi.php");
	$id = $_POST['id'];
	$nip = $_POST['nidhkASdjkp'];	
	$nama = $_POST['nama'];
	$gelar = $_POST['gelar'];
	$status = $_POST['status'];
	$kelamin = $_POST['kelamin'];
	$tempat = $_POST['tempat'];
	$tgl = $_POST['tgl'];
	$agama = $_POST['agama'];
	$hp = $_POST['hp'];
	$alamat = $_POST['alamat'];
	$query=mysql_query("insert into guru values ('$id','$nip','$nama','$gelar','$status','$kelamin','$tempat','$tgl','$agama','$hp','$alamat')");
	if($query){
		?>
		<script language="javascript">
				alert("Data Berhasil Disimpan!");
				document.location='profilguru.php';
		</script>
		<?php
	}
	else{
		?>
		<script language="javascript">
				alert("Data Gagal Disimpan!");
				document.location='profilguru.php';
			</script>
		<?php
	}
?>
