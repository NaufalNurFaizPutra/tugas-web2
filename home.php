<html><body>
<?php
	$nama = $NIM ="";
	if($_SERVER["REQUEST_METHOD"]== "POST"&& isset($_POST["nama"])&& isset($_POST["NIM"])){
		$nama =$_POST["nama"];
		$NIM = $_POST["NIM"];
	}
?>
<form method="POST"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<p>UNIVERSITAS AHMAD DAHLAN</p>
	Nama :<input type="text" name="nama"><br>
	NIM :<input type="text" name="NIM"><br>
	<input type="submit">
</form>
<?php
if(empty($nama) && empty($NIM) ){
echo "Nama dan Nim Tidak Boleh Kosong!!";
}
if (!empty($nama)&& !empty($NIM)) {
	echo "<h2> Selamat Datang</h2>";
	echo $nama ."<br>".$NIM;
	# code...
}
?>
</body></html>