
<?php
$nama = $_POST["nama"];
$pesan = $_POST["pesan"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Dikirim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container detail">
    <h2>Pesan Berhasil Dikirim</h2>
    <p>Terima kasih, pesan kamu berhasil dikirim.</p>

    <?php
    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Pesan: " . $pesan . "</p>";
    ?>

   
     <p><a href="index.php" class="tombol">Kembali ke Daftar Nilai</a></p>
</div>

</body>
</html>



