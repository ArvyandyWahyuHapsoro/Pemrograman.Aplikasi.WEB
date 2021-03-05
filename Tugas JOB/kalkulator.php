<html>

<head>
    <title>Membuat Kalkulator Sederhana Dengan PHP</title>
    <style>
        #footer {
            background: #F8F9FA;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: #808080;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="kalkulator.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Angka Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Angka Kedua">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
        </form>
        <?php if (isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php } else { ?>
            <input type="text" value="0" class="bil">
        <?php } ?>
    </div>
    <div id="footer">
        Copyright &copy; Arvyandy Wahyu Hapsoro (MI-P.18.1K) Universitas Stekom Kendal <?php echo date("Y"); ?>
    </div>
</body>

</html>