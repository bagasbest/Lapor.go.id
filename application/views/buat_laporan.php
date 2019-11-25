<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_lapor.css')?>">
</head>
<body>
	<div class="container">
		<div class="judul">
			<label> SIMPLE LAPOR! </label>
		</div>
		<div class="Lapor">
			<label>Buat Laporan/Komentar</label>
			<hr>
			<form action="#" method="POST">
				<div>
					<textarea placeholder="Laporan/Komentar"></textarea>
				</div>
				<br>
				<div>
					<select>
					<option default>Pilih Aspek Laporan/Komentar</option>
					<option>Umum</option>
					<option>Infrastruktur</option>
					<option>Pendidikan</option>
					<option>Bidang Resejahteraan Rakyat</option>
					<option>Pemilu</option>
					<option>Energi dan Sumber Daya Alam</option>
				</select>
				</div>
				<br>
				<div>
					<input type="file" name="file">
				</div>
				<br>
				
				<div class="sumbit">
					<button>Buat Laporan</button>
				</div>
				<br>
				<br>
				<hr>

			</form>
		</div>
	</div>

</body>
</html>