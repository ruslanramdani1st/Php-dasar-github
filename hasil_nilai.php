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
        <?php
        if (isset($_POST['input'])) {
            $nama = $_POST['nama'];
            $nis = $_POST['nis'];
        }
        ?>
        <fieldset align="center">
            <h3>Form Cetak Nilai Siswa <br>
            SMK ASSALAAM BANDUNG <br>
            Tahun 2021/2022</h3>

            <table border=4 cellpadding="2" align="center">
                <?php
                $array = [
                    $pai = $_POST['pai'],
                    $pkn = $_POST['pkn'],
                    $indonesia[4] = $_POST['indonesia'],
                    $mtk = $_POST['mtk'],
                    $inggris = $_POST['inggris'],
                    $kwu = $_POST['kwu'],
                    $quran = $_POST['quran'],
                    $bk = $_POST['bk'],
                    $rpl = $_POST['rpl'],
                    $tkj = $_POST['tkj']];
                $no = 1;
                for ($i = 0; $i < count($array); $i++){ 
                    if ($array[$i] > 100) {
                        echo "Nilai terlalu tinggi";
                    } elseif ($array[$i] > 85 && $array[$i] <= 100 ) { 
                        $grade[$i] = "A"; 
                        $bobot[$i] = 4;
                    } elseif ($array[$i] >  70 && $array[$i] <= 85 )  { 
                        $grade[$i] = "B"; 
                        $bobot[$i] = 3;
                    } elseif ($array[$i] >  60 && $array[$i] <= 70 )  {
                        $grade[$i] = "C"; 
                        $bobot[$i] = 4;
                    } elseif($array[$i] >  40 && $array[$i] <= 60 )  {
                        $grade[$i] = "D"; 
                        $bobot[$i] = 1;
                    } elseif($array[$i] >  0 && $array[$i] <= 40 )  {
                        $grade[$i] = "E"; 
                        $bobot[$i] = 0;
                    } elseif ($array[$i] <= 0){
                        echo "Nilai anda minus";
                    } else {
                        echo "OON";
                    }
                    $rata = array_sum($bobot)/10;
                }

                    for ($i = 0; $i < count($grade);) {
                        $grade0 = $grade[$i++];
                        $grade1 = $grade[$i++];
                        $grade2 = $grade[$i++];
                        $grade3 = $grade[$i++];
                        $grade4 = $grade[$i++];
                        $grade5 = $grade[$i++];
                        $grade6 = $grade[$i++];
                        $grade7 = $grade[$i++];
                        $grade8 = $grade[$i++];
                        $grade9 = $grade[$i++]; 
                    }
                ?>
                <tr>
                    <th colspan="4" align="left">
                        Nama :
                        <?php echo $nama; ?>
                        <br>
                        NIs :
                        <?php echo $nis; ?>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr> 
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Pendidikan Agama Islam</td>
                    <td><?php echo $grade0 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">PPKN</td>
                    <td>
                    <?php echo $grade1 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Bahasa Indonesia</td>
                    <td><?php echo $grade2?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Matematika</td>
                    <td><?php echo $grade3 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Bahasa Inggris</td>
                    <td><?php echo $grade4 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Produk Kreatif dan Kewirausahaan</td>
                    <td>
                    <?php echo $grade5 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Al Quran</td>
                    <td><?php echo $grade6 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Bimbingan Konseling</td>
                    <td> <?php echo $grade7 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Produktif RPL</td>
                    <td><?php echo $grade8 ?></td>           
                </tr>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td align="left">Produktif TKJ</td>
                    <td><?php echo $grade9 ?></td>           
                </tr>
                <tr>
                    <td colspan="3" align="center" cellpadding="4">
                        <?php echo "Nilai Rata-Ratanya Adalah = $rata"; ?>
                    </td>
                </tr>
            </table>
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