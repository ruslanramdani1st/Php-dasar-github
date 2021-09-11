<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hotel B5</title>
</head>
    <body>
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
                echo '<td><a href="input.php">INPUT KEMBALI</a></td>';
                echo "<tr>";
            }
            ?>
        </fieldset>
    </body>
</html>