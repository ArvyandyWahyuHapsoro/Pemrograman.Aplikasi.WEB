<!DOCTYPE html>

<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/footer.min.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Statemen IF</title>
	<style>
		#footer {
			background: #F8F9FA;
			position: absolute;
			bottom: 0;
			width: 100%;
			text-align: center;
			color: #808080;
		}
	</style>
</head>

<body>
	<form action="" method="post">
		<div align="center"><label for="nilai"><h1>Nilai</h1></label></div>
		<div align="center"><input type="text" name="nilai" id="nilai" class="bil"></div>
		<div align="center"><button type="submit" name="cek" class="tombol">cek </button></div>
	</form>
	<?php
	// apakah tombol cek sudah ditekan
	if (isset($_POST["cek"])) {
		// menangkap nilai menggunakan variabel super global post
		$nilai = $_POST["nilai"];
		if ($nilai == "") {
			echo "<b><h1> Anda belum memasukkan nilai</h1> </b>";
		} elseif (!is_numeric($nilai)) {
			echo "<b><h1> Ini bukan nilai angka</h1> </b>";
		} else {
			if ($nilai <= 30) {
				echo "<b><h1>Anda mendapat nilai huruf E</h1> </b>";
			} elseif ($nilai <= 50) {
				echo "<b><h1>Anda mendapat nilai huruf D</h1> </b>";
			} elseif ($nilai <= 70) {
				echo "<b><h1>Anda mendapat nilai huruf C</h1> </b>";
			} elseif ($nilai <= 85) {
				echo "<b><h1>Anda mendapat nilai huruf AB</h1> </b>";
			} else {
				echo "<b><h1>Anda mendapat nilai huruf A</h1> </b>";
			}
		}
	}
	?>
	<div id="footer">
		Copyright &copy; Arvyandy Wahyu Hapsoro (MI-P.18.1K) Universitas Stekom Kendal <?php echo date("Y"); ?>
	</div>
	
</body>

</html>