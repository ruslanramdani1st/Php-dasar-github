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
					<li class="nav-item active"><a href="tugas/index.php" class="nav-link">Home</a></li>
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
        <legend align="center">
            <h4> PENGULANGAN </h4>
        </legend>

        <form action="" method="post">
            <!-- INPUT BINTANG -->
            <label> Masukan Bintang : </label>
            <input type="number" name="bintang" id="B" required>
            <input type="submit" name= "simpan">
            <input type="reset" value="reset">
        </form>
        <?php
        echo "<br>";
        echo "Program segitiga bintang siku-siku <br>";
        if (isset($_POST['simpan'])) {
        $bintang = $_POST['bintang'];

            for($a = $bintang; $a >= 0; $a--){
            for($b = $bintang; $b > $a; $b--){
                echo "*";
            }
            echo "<br>";
            }

            echo "<br>";

            echo "Program Ganjil Genap dengan menggunakan For <br>";

            echo "<br>";

            echo "Bilangan Genap <br>";
            for ($c = 1; $c <= $bintang; $c++) {
                if(($c % 2) == 0){
                    echo "$c <br>";
                }
            }

            echo "<br>";

            echo "Bilangan ganjil <br>";
            for ($c = 1; $c <= $bintang; $c++) {
                if(($c % 2) == 1){
                    echo "$c <br>";
                }
            }

            echo "Program Bintang Diamond <br>";
            echo "<br>";

            for($a=1; $a<=$bintang; $a++){
            for($b=$bintang; $b>=$a; $b-=1){
                echo "&nbsp";
            }
            for($c=1; $c<=$a; $c++){
                echo "*";
            }
            echo "<br>";
            }
            for($a=1; $a<=$bintang; $a++){
            for($b=1; $b<=$a; $b++){
                echo "&nbsp";
            }
            for($c=$bintang; $c>=$a; $c-=1){
                echo "*";
            }
            echo "<br>";
            }
        }
        ?>

        <footer>
            <center>Copyright 2021 | Created By RusLan Ramdani.</center>
        </footer>

		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>