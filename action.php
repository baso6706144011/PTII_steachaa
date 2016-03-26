<?php
	include("koneksi.php");
	$cek_nip=mysql_num_rows(mysql_query
             ("SELECT nip FROM guru 
               WHERE nip='$_POST[nip]'"));
	
	if ($cek_nip > 0)
	{  
		?>
		<script language="javascript">
			alert("NIP sudah terpakai. Ulangi lagi!");
			document.location='inputguru.php';
		</script>
		<?php
	}
	else
	{
	$id = $_POST['id'];
	$nip = $_POST['nip'];	
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
				document.location='inputguru.php';
		</script>
		<?php
	}
	else{
		?>
		<script language="javascript">
				alert("Data Gagal Disimpan!");
				document.location='inputguru.php';
			</script>
		<?php
	}
}
?>