<!DOCTYPE html>
<html>
<head>
    <title>Identifikasi Metode</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        NAMA
        <input type="text" name="nama" /><br/>
        <input type="submit" value="Login" /><br/>
    </form>

    <?php
        if (isset($_REQUEST['nama'])) {
            $nama = $_REQUEST['nama']; // Mengambil nilai dari input "nama"
            echo "Metode " . $_SERVER['REQUEST_METHOD'] . "<br/>";
            echo "Nama yang diinput: " . $nama; // Menampilkan nilai dari variabel "nama"
        }
    ?>
</body>
</html>