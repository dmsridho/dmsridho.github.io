<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Lumayan</title>
    <link rel="stylesheet" href="Tugas4_Dimas Ridho Amali.css">
</head>


<body>
    <h2>Kalkulator Lumayan</h2>
    <div class="kalkulator">
        <table>
            <form action="" method="post">
                <tr>
                    <td><input type="number" name="bil" placeholder="Masukan angka pertama"></td>
                </tr>
                <tr>
                    <td><input type="number" name="bil1" placeholder="Masukan angka kedua"></td>
                    <td colspan=" 3"><input type="submit" name="btn" value="Hitung"></td>
                </tr>
                <tr>

                </tr>
            </form>
        </table>

        <br>

        <?php

        function prosesTambah($bil11, $bil22)
        {
            $bil33 = $bil11 + $bil22;
            return $bil33;
        }

        function prosesKurang($bil11, $bil22)
        {
            $bil33 = $bil11 - $bil22;
            return $bil33;
        }

        function prosesKali($bil11, $bil22)
        {
            $bil33 = $bil11 * $bil22;
            return $bil33;
        }

        function prosesBagi($bil11, $bil22)
        {
            $bil33 = $bil11 / $bil22;
            return $bil33;
        }

        if (isset($_POST['btn'])) {
            $bil1 = $_POST['bil'];
            $bil2 = $_POST['bil1'];

            $bil3 = prosesTambah($bil1, $bil2);
            echo "Hasil Penjumlahan = " . $bil3;

            echo "<br>";

            $bil3 = prosesKurang($bil1, $bil2);
            echo "Hasil Pengurangan = " . $bil3;

            echo "<br>";

            $bil3 = prosesKali($bil1, $bil2);
            echo "Hasil Perkalian = " . $bil3;

            echo "<br>";

            $bil3 = prosesBagi($bil1, $bil2);
            echo "Hasil Pembagian = " . $bil3;
        }
        ?>
    </div>
</body>


<footer>
    &copy;Dimas Ridho Amali
</footer>

</html>