
<?php
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
) {
    header("Location: form_pesan.php");
    exit;
}

$nama = trim($_POST["nama"]);
$kelas = trim($_POST["kelas"]);
$pesan = trim($_POST["pesan"]);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hasil Pesan</h2>

    <p><strong>Nama:</strong>
        <?= htmlspecialchars($nama) ?>
    </p>

    <p><strong>Kelas:</strong>
        <?= htmlspecialchars($kelas) ?>
    </p>

    <p><strong>Pesan/Kesan:</strong></p>

    <div class="kotak-pesan">
        <?= nl2br(htmlspecialchars($pesan)) ?>
    </div>

    <a class="tombol" href="form_pesan.php">Kembali ke Form</a>
    <a class="tombol" href="index.php">Kembali ke Home</a>
</div>

</body>
</html>




