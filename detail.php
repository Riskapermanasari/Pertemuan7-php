
<?php
$nim = $_GET["nim"];

$mahasiswa = [
    ["nim" => "23001", "nama" => "Siti Lala", "jurusan" => "Sistem Informasi", "nilai" => 85],
    ["nim" => "23002", "nama" => "Farel Pratama", "jurusan" => "Sistem Informasi", "nilai" => 90],
    ["nim" => "23003", "nama" => "Zamzam", "jurusan" => "Informatika", "nilai" => 78]
];

$nama = "";
$jurusan = "";
$nilai = 0;

for ($i = 0; $i < count($mahasiswa); $i++) {
    if ($mahasiswa[$i]["nim"] == $nim) {
        $nama = $mahasiswa[$i]["nama"];
        $jurusan = $mahasiswa[$i]["jurusan"];
        $nilai = $mahasiswa[$i]["nilai"];
    }
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

    <?php
    echo "<p>NIM: " . $nim . "</p>";
    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Jurusan: " . $jurusan . "</p>";
    echo "<p>Nilai: " . $nilai . "</p>";

    if ($nilai >= 70) {
        echo "<p>Status: Lulus</p>";
    } else {
        echo "<p>Status: Tidak Lulus</p>";
    }
    ?>

    <a class="tombol" href="index.php">Kembali</a>
</div>

</body>
</html>

