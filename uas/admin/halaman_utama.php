<?php 
//menyertakan file header.php di dalam file ini
include 'header.php';
//pesanan baru 
$result1 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 0 and tolak = 0");
$jml1 = mysqli_num_rows($result1);
//pesanan ditolak
$result2 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  tolak = 1");
$jml2 = mysqli_num_rows($result2);
// pesanan diterima
$result3 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  terima = 1");
$jml3 = mysqli_num_rows($result3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<div class="container">
		<!-- membuat kolom yang akan ditampilkan sebagai dashboard -->
		<div class="row">
			<div class="col-md-4" >
				<div style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
					<h4>PESANAN BARU</h4>
					<h4 style="font-size: 56pt;"><b><?= $jml1; ?></b></h4>
				</div>
			</div>

			<div class="col-md-4" >
				<div style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
					<h4>PESANAN DITOLAK</h4>
					<h4 style="font-size: 56pt;"><b><?= $jml2; ?></b></h4>
				</div>
			</div>

			<div class="col-md-4" >
				<div style="background-color: #dfdfdf; padding-bottom: 60px; padding-left: 20px;padding-right: 20px; padding-top: 10px;">
					<h4>PESANAN DITERIMA</h4>
					<h4 style="font-size: 56pt;"><b><?= $jml3; ?></b></h4>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</body>
</html>

<?php 
//menyertakan file footer.php di dalam file ini
include 'footer.php';
?>