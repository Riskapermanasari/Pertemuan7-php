
<?php
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"])
) {
    header("Location: index.php");
    exit;
}

$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = (int) $_GET["nilai"];

if ($nilai >= 80) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 60) {
    $grade = "C";
} else {
    $grade = "D";
}

$status = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <h2>Detail Mahasiswa</h2>

    <p><strong>NIM:</strong> <?= htmlspecialchars($nim) ?></p>
    <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
    <p><strong>Jurusan:</strong> <?= htmlspecialchars($jurusan) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Nilai:</strong> <?= $nilai ?></p>
    <p><strong>Grade:</strong> <?= $grade ?></p>
    <p><strong>Status:</strong> <?= $status ?></p>

    <a class="tombol" href="index.php">Kembali</a>
</div>
</body>
</html>
</div>

</body>
</html>


