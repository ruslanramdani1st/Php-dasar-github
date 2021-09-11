<!doctype html>
<html lang="en">
  <head>
  	<title>Data Hotel B5</title>
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
								<a class="navbar-brand" href="index.html">Ruslan Ramdani <span>XII RPL 3</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="social-media">
							<p class="mb-0 d-flex">
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
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
					<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
					<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WORK</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item" href="tugas/konser/konser.php">Konser</a>
					<a class="dropdown-item" href="tugas/tugas3/pengulangan.php">Pengulangan</a>
					<a class="dropdown-item" href="tugas/hotel/input.php">Hotel</a>
					<a class="dropdown-item" href="tugas/tugas4/inputbilangan.php">Bilangan</a>
				</div>
				</li>
				<li class="nav-item"><a href="https://bit.ly/38neELq" class="nav-link">Contact</a></li>
				</ul>
			</div>
			</div>
		</nav>
		<!-- END nav -->
		</section>

        <fieldset class="kotak">
            <legend align="center">
                <h1 style="color: #ff0000"> HOTEL BINTANG FIVE </h1>
            </legend>
            <form action="output.php" method="POST">
                <table>
                    <tr>
                        <td>Tanggal Menginap</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tanggal" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Tamu</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" required>
                        </td>
                    </tr>
                    <tr>
                        <td>No Identitas</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="identitas" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tipe Kamar</td>
                        <td>:</td>
                        <td>
                            <select name="kamar">
                                <option value="">Pilih Kamar</option>
                                <option value="superior">Superior</option>
                                <option value="deluxe">Deluxe</option>
                                <option value="junior">Junior Suite</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Durasi Menginap</td>
                        <td>:</td>
                        <td>
                            <input type="number" name="durasi" >
                        </td>
                        <td>Malam.</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="simpan" value="KIRIM">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>