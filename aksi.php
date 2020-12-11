<?php
// include 'koneksi.php';
   if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('pdf','xls','xlsx');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){
			$upload_file = move_uploaded_file($file_tmp, 'file/'.$nama);
			// $query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
			if($upload_file){
				// echo 'FILE BERHASIL DI UPLOAD';
			header("location: index.php");
			}else{
				echo 'Gagal Mengupload File';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	       }
    }
?>
