<!doctype html>
<html lang="en">
  <head>
  	<title>Daftar Tugas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<section class="ftco-section">
			<div class="container-fluid px-md-5">
				<div class="row justify-content-between">
					<div class="col-md-8 order-md-last">
						<div class="row">
							<div class="col-md-6 text-center">
								<a class="navbar-brand" href="index.php">Ruslan Ramdani <span>XII RPL 3</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="social-media">
							<p class="mb-0 d-flex">
								<a href="https://web.facebook.com/neyokaizosizei/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="https://twitter.com/Ruslanramdani16" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
								<a href="https://www.instagram.com/_llann7/" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container-fluid">
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav m-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="index.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WORK</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item" href="input_konser.php">Konser</a>
					<a class="dropdown-item" href="pengulangan.php">Pengulangan</a>
					<a class="dropdown-item" href="input_hotel.php">Hotel</a>
					<a class="dropdown-item" href="inputbilangan.php">Bilangan</a>
				</div>
				</li>
				<li class="nav-item"><a href="https://bit.ly/38neELq" class="nav-link">Contact</a></li>
				</ul>
			</div>
			</div>
		</nav>
		<!-- END nav -->
		</section>

        <fieldset>
            <legend align="center">
                <h1 style="color: #ff0000"> KONSER AMAL ASSALAAM BAHAGIA </h1>
            </legend>
            <?php

            if (isset($_POST['simpan'])) {
                $nama = $_POST['nama'];
                $studio = $_POST['studio'];
                $kelas = $_POST['kelas'];
                $tiket = $_POST['tiket'];
        
                echo "<table>";
                echo "<tr>";
                echo "<td> Nama Pemesan </td>";
                echo "<td>:</td>";
                echo "<td> $nama </td>";
                echo "</tr>";

                if ($studio == "studio1") {
                    echo "<tr>";
                    echo "<td> Kode Studio </td>";
                    echo "<td>:</td>";
                    echo "<td> $studio </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Bintang Tamu </td>";
                    echo "<td>:</td>";
                    echo "<td> Opick </td>";
                    echo "</tr>";
                } elseif ($studio == "studio2") {
                    echo "<tr>";
                    echo "<td> Kode Studio </td>";
                    echo "<td>:</td>";
                    echo "<td> $studio </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Bintang Tamu </td>";
                    echo "<td>:</td>";
                    echo "<td> Raihan </td>";
                    echo "</tr>";
                } else {
                    echo "<tr>";
                    echo "<td> Bintang Tamunya sedang halangan </td>";
                    echo "</tr>";
                }

                // HARGA KELAS
                $Harga_VIP = 500000;
                $Harga_Festival = 250000;

                // MENGHITUNG HARGA KELAS
                $VIP = $Harga_VIP * $tiket;
                $FESTIVAL = $Harga_Festival * $tiket;

                if ($kelas == "vip") {
                    echo "<tr>";
                    echo "<td> Jenis Kelas </td>";
                    echo "<td>:</td>";
                    echo "<td> $kelas </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Harga </td>";
                    echo "<td>:</td>";
                    echo "<td> Rp.500.000.00,- </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Jumlah Beli </td>";
                    echo "<td>:</td>";
                    echo "<td> $tiket </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Total </td>";
                    echo "<td>:</td>";
                    echo "<td> Rp.$VIP,- </td>";
                    echo "</tr>";
                
                } elseif ($kelas == "festival") {
                    echo "<tr>";
                    echo "<td> Jenis Kelas </td>";
                    echo "<td>:</td>";
                    echo "<td> $kelas </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Harga </td>";
                    echo "<td>:</td>";
                    echo "<td> Rp.250.000.00,- </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Jumlah Beli </td>";
                    echo "<td>:</td>";
                    echo "<td> $tiket </td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td> Total </td>";
                    echo "<td>:</td>";
                    echo "<td> Rp.$FESTIVAL,- </td>";
                    echo "</tr>";
                }
                echo "<tr>";
                echo '<td><a href="input_konser.php">INPUT KEMBALI</a></td>';
                echo "<tr>";
            }
            ?>

            <footer>
                <center>Copyright 2021 | Created By RusLan Ramdani.</center>
            </footer>
        </fieldset>

        

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>