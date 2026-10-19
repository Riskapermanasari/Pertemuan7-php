
<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: form_pesan.php");
    exit;
}

$nama = trim($_POST["nama"] ?? "");
$email = trim($_POST["email"] ?? "");
$pesan = trim($_POST["pesan"] ?? "");

if ($nama == "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || $pesan == "") {
    echo "Data belum lengkap atau email tidak valid.";
    echo '<p><a href="form_pesan.php">Kembali ke Form Pesan</a></p>';
    exit;
}

$nama = htmlspecialchars($nama, ENT_QUOTES, "UTF-8");
$email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
$pesan = nl2br(htmlspecialchars($pesan, ENT_QUOTES, "UTF-8"));
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
    <p class="keterangan">Terima kasih, pesan kamu berhasil diproses.</p>

    <p><b>Nama:</b> <?= $nama ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Pesan:</b> <?= $pesan ?></p>

    <a class="tombol" href="form_pesan.php">Kembali ke Formulir</a>
</div>
</body>
</html>

