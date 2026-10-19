
<?php
$mahasiswa = [
    ["nim"=>"23001", "nama"=>"Siti Lala", "jurusan"=>"Sistem Informasi", "nilai"=>85],
    ["nim"=>"23002", "nama"=>"Farel Pratama", "jurusan"=>"Sistem Informasi", "nilai"=>90],
    ["nim"=>"23003", "nama"=>"Zamzam", "jurusan"=>"Informatika", "nilai"=>78],
    ["nim"=>"23004", "nama"=>"Alya Putri", "jurusan"=>"Informatika", "nilai"=>88],
    ["nim"=>"23005", "nama"=>"Budi Maulana", "jurusan"=>"Sistem Informasi", "nilai"=>82]
];

$nim = $_GET["nim"] ?? "";
$detail = null;

foreach ($mahasiswa as $data) {
    if ($data["nim"] == $nim) {
        $detail = $data;
        break;
    }
}

function e($data) {
    return htmlspecialchars((string)$data, ENT_QUOTES, 'UTF-8');
}
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
<div class="container detail">
    <h2>Detail Mahasiswa</h2>
    <p class="keterangan">Data lengkap mahasiswa.</p>

    <?php if ($detail): ?>
        <p><b>NIM:</b> <?= e($detail["nim"]) ?></p>
        <p><b>Nama:</b> <?= e($detail["nama"]) ?></p>
        <p><b>Jurusan:</b> <?= e($detail["jurusan"]) ?></p>
        <p><b>Nilai:</b> <?= e($detail["nilai"]) ?></p>
        <p><b>Status:</b>
            <?= $detail["nilai"] >= 70 ? "Lulus" : "Tidak Lulus" ?>
        </p>
    <?php else: ?>
        <p>Data mahasiswa tidak ditemukan.</p>
    <?php endif; ?>

    <a class="tombol" href="index.php">Kembali</a>
</div>
</body>
</html>
