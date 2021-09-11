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
					<a class="dropdown-item" href="cetak_nilai.php">Nilai Raport</a>
				</div>
				</li>
				<li class="nav-item"><a href="https://bit.ly/38neELq" class="nav-link">Contact</a></li>
				</ul>
			</div>
			</div>
		</nav>
		<!-- END nav -->
		</section>

        <fieldset align="center">
            <form action="hasil_nilai.php" method="post" align="center">
                <h3>Form Cetak Nilai Siswa <br>
                SMK ASSALAAM BANDUNG <br>
                Tahun 2021/2022</h3>

                <table border=4 cellpadding="4" align="center">
                    <div class="data">
                        <tr class="info">
                            <th colspan="3" align="left">
                                Nama :
                                <input type="text" name="nama" id="A">
                                <br>
                                NIs :
                                <input type="number" name="nis" id="B">
                            </th>
                        </tr>
                    </div>
                    
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th class="nilai">Nilai</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td align="left">Pendidikan Agama Islam</td>
                        <td>
                            <input type="number" name="pai" id="C">
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td align="left">PPKN</td>
                        <td>
                            <input type="number" name="pkn" id="D">
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td align="left">Bahasa Indonesia</td>
                        <td>
                            <input type="number" name="indonesia" id="E">
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td align="left">Matematika</td>
                        <td>
                            <input type="number" name="mtk" id="F">
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td align="left">Bahasa Inggris</td>
                        <td>
                            <input type="number" name="inggris" id="G">
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td align="left">Produk Kreatif dan Kewirausahaan</td>
                        <td>
                            <input type="number" name="kwu" id="H">
                        </td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td align="left">Al Quran</td>
                        <td>
                            <input type="number" name="quran" id="I">
                        </td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td align="left">Bimbingan Konseling</td>
                        <td>
                            <input type="number" name="bk" id="J">
                        </td>
                    </tr>

                    <tr>
                        <td>9</td>
                        <td align="left">Produktif RPL</td>
                        <td>
                            <input type="number" name="rpl" id="K">
                        </td>
                    </tr>

                    <tr>
                        <td>10</td>
                        <td align="left">Produktif TKJ</td>
                        <td>
                            <input type="number" name="tkj" id="L">
                        </td>
                    </tr>
                    <td align="center" colspan="5">
                        <button type="submit" name="input" align="center" id="M" bgcolor="chocolate">CETAK NILAI</button>
                    </td>
                </table>
            </form>
        </fieldset>

		<footer>
            <center>Copyright 2021 | Created By RusLan Ramdani.</center>
        </footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>