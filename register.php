<?php 
// menghubungkan file header.php ke dalam file ini
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="container" style="padding-bottom: 250px;">
	<!-- judul -->
	<h2 style=" width: 100%; border-bottom: 4px solid #ff8680"><b>Register</b></h2>
	<form action="proses/register.php" method="POST">
		<!-- membuat form untuk register pengguna -->
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Nama</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">username</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" required >
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">No. Telepon</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="+62" name="telp" required >
				</div>
			</div>

		</div>


		<div class="row">
			
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Konfirmasi Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi" required>
				</div>
			</div>
		</div>
		<!-- button register -->
		<button type="submit" class="btn btn-success">Register</button>
	</form>
</div>
	
</body>
</html>

<?php 
// menghubungkan file footer.php ke dalam file ini
include 'footer.php';
?>