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
                <h1 style="color: #ff0000"> HOTEL BINTANG FIVE </h1>
            </legend>
                <?php
                if (isset($_POST['simpan'])) {
                    $tanggal = $_POST['tanggal'];
                    $nama = $_POST['nama'];
                    $identitas = $_POST['identitas'];
                    $kamar = $_POST['kamar'];
                    $durasi = $_POST['durasi'];   

                    // Diskon
                    $diskonke1 = 1700000;
                    $diskonke2 = 2500000;

                    $super = 850000;
                    $delux = 950000;
                    $jsuite = 1400000;

                    // MENGHITUNG HARGA DIKALI HARGA PERMALAMNYA
                    $total_super = $super * $durasi;
                    $total_delux = $delux * $durasi;
                    $total_jsuite = $jsuite * $durasi;

                    echo "<table>";
                    echo "<tr>";
                    echo "<td> Tanggal Menginap </td>";
                    echo "<td>:</td>";
                    echo "<td> $tanggal </td>";
                    echo "</tr>";
            
                    echo "<td> Nama Tamu </td>";
                    echo "<td>:</td>";
                    echo "<td> $nama </td>";
                    echo "</tr>";
    
                    echo "<tr>";
                    echo "<td> No Identitas </td>";
                    echo "<td>:</td>";
                    echo "<td> $identitas </td>";
                    echo "</tr>";


                    switch ($kamar) {
                            case "superior":
                                
                                echo "<tr>";
                                echo "<td> Tipe Kamar </td>";
                                echo "<td>:</td>";
                                echo "<td> $kamar </td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td> Harganya </td>";
                                echo "<td>:</td>";
                                echo "<td> $super /malam </td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td> Durasi Nginap </td>";
                                echo "<td>:</td>";
                                echo "<td> $durasi malam </td>";
                                echo "</tr>";

                                if ($total_super >= 2500000) {
                                    echo "<tr>";
                                    echo "<td> Diskon 25% </td>";
                                    echo "<td>:</td>";
                                    echo "<td><b>Rp.2.500.000,- </b></td>";
                                    echo "</tr>";

                                    $diskon25_super = $total_super * (25 / 100);
                                    $total_diskon_superke2 = $total_super - $diskon25_super;
                                    echo "<tr>";
                                    echo "<td> Total Harga </td>";
                                    echo "<td>:</td>";
                                    echo "<td><b>Rp.$total_diskon_superke2,-</b></td>";
                                    echo "</tr>";

                                } elseif ($total_super >= 1700000) {
                                    echo "<tr>";
                                    echo "<td> Diskon 15% </td>";
                                    echo "<td>:</td>";
                                    echo "<td><b>Rp.1.700.000,-</b></td>";
                                    echo "</tr>";

                                    $diskon15_super = $total_super * (15 / 100);
                                    $total_diskon_superke1 = $total_super - $diskon15_super;
                                    echo "<tr>";
                                    echo "<td> Total Harga </td>";
                                    echo "<td>:</td>";
                                    echo "<td><b>Rp.$total_diskon_superke1,-</b></td>";
                                    echo "</tr>";

                                } else {
                                    echo "<tr>";
                                    echo "<td> Total Harga </td>";
                                    echo "<td>:</td>";
                                    echo "<td><b>Rp.$total_super,-</b></td>";
                                    echo "</tr>";
                                }
                                break;
                        case "deluxe" :
                            
                            echo "<tr>";
                            echo "<td> Tipe Kamar </td>";
                            echo "<td>:</td>";
                            echo "<td> $kamar </td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td> Harganya </td>";
                            echo "<td>:</td>";
                            echo "<td> $delux /malam </td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td> Durasi Nginap </td>";
                            echo "<td>:</td>";
                            echo "<td> $durasi malam </td>";
                            echo "</tr>";

                            if ($total_delux >= 2500000) {
                                echo "<tr>";
                                echo "<td> Diskon 25% </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.2.500.000,-</b></td>";
                                echo "</tr>";

                                $diskon25_delux = $total_delux * (25 / 100);
                                $total_diskon_deluxke2 = $total_delux - $diskon12_delux;
                                echo "<tr>";
                                echo "<td> Total Harga </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.$total_diskon_deluxke2,-</b></td>";
                                echo "</tr>";


                            } elseif ($total_delux >= 1700000) {
                                echo "<tr>";
                                echo "<td> Diskon 15% </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.1.700.000,-</b></td>";
                                echo "</tr>";

                                $diskon15_delux = $total_delux * (15 / 100);
                                $total_diskon_deluxke1 = $total_delux - $diskon15_delux;
                                echo "<tr>";
                                echo "<td> Total Harga </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.$total_diskon_deluxke1,-</b></td>";
                                echo "</tr>";


                            } else {
                                echo "<tr>";
                                echo "<td> Total Harga </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.$total_delux,-</b></td>";
                                echo "</tr>";
                            }
                            break;
                        case "junior" :
                            
                            echo "<tr>";
                            echo "<td> Tipe Kamar </td>";
                            echo "<td>:</td>";
                            echo "<td> $kamar </td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td> Harganya </td>";
                            echo "<td>:</td>";
                            echo "<td> $jsuite /malam </td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td> Durasi Nginap </td>";
                            echo "<td>:</td>";
                            echo "<td> $durasi malam </td>";
                            echo "</tr>";

                            if ($total_jsuite >= 2500000) {
                                echo "<tr>";
                                echo "<td> Diskon 25% </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.2.500.000,-</b> </td>";
                                echo "</tr>";

                                $diskon25_jsuite = $total_jsuite * (25 / 100);
                                $total_diskon_jsuiteke2 = $total_jsuite - $diskon25_jsuite;
                                echo "<tr>";
                                echo "<td> Total Harga </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.$total_diskon_jsuiteke2,-</b></td>";
                                echo "</tr>";

                            } elseif ($total_jsuite >= 1700000) {
                                echo "<tr>";
                                echo "Diskon 15% ";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.1.700.000,-</b></td>";
                                echo "</tr>";

                                $diskon15_jsuite = $total_jsuite * (15 / 100);
                                $total_diskon_jsuiteke1 = $total_jsuite - $diskon15_jsuite;
                                echo "<tr>";
                                echo "<td> Total Harga </td>";
                                echo "<td>:</td>";
                                echo "<td><b>Rp.$total_diskon_jsuiteke1</b></td>";
                                echo "</tr>";

                            } else {
                                echo "<tr>";
                                echo "<td> Total Harga </td>";
                                echo "<td>:</td>";
                                echo "<td><b>$total_jsuite</b></td>";
                                echo "</tr>";
                            }
                            break;
                        default :
                            echo "Kamar sedang penuh";
                    }
                    echo "<tr>";
                    echo '<td><a href="input_hotel.php">INPUT KEMBALI</a></td>';
                    echo "<tr>";
                }
                ?>
        </fieldset>

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>