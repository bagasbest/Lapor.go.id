<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style_awal.css')?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<header>
		<div class="judul">
			<label> SIMPLE LAPOR! </label>
		</div>
		<div class="search">
			<input type="text" class="searchTerm">
			<button type="submit" class="searchButton" >
        	<i class="fa fa-search"></i> Cari
    		</button>
		</div>
		<div class="buatLapor">
			<label>Buat Laporan/Komentar</label>
			<a href="<?php echo base_url()?>Tampil/lapor">
			<i class="fa fa-plus"></i>
			</a>
		</div>
		</header>
	
		<div class="content">
			<label>Laporan/Komentar Terakhir</label>
			<hr>
			
		</div>
		<div class="footer">

		</div>
	</div>

</body>
</html>