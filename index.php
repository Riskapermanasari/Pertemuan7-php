<?php
$mahasiswa = [
    [
        "nim" => "23001",
        "nama" => "Siti Lala",
        "jurusan" => "Sistem Informasi",
        "nilai" => 85
    ],
    [
        "nim" => "23002",
        "nama" => "Farel Pratama",
        "jurusan" => "Sistem Informasi",
        "nilai" => 90
    ],
    [
        "nim" => "23003",
        "nama" => "Zamzam",
        "jurusan" => "Informatika",
        "nilai" => 78
    ],
    [
        "nim" => "23004",
        "nama" => "Alya Putri",
        "jurusan" => "Informatika",
        "nilai" => 88
    ],
    [
        "nim" => "23005",
        "nama" => "Budi Maulana",
        "jurusan" => "Sistem Informasi",
        "nilai" => 82
    ]
];

function e($data) {
    return htmlspecialchars((string)$data, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Daftar Nilai Mahasiswa</h2>
    <p class="keterangan">Data mahasiswa dan nilai perkuliahan.</p>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>

        <?php foreach ($mahasiswa as $i => $data): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= e($data["nim"]) ?></td>
            <td><?= e($data["nama"]) ?></td>
            <td><?= e($data["jurusan"]) ?></td>
            <td><?= e($data["nilai"]) ?></td>
            <td>
                <span class="status">
                    <?= $data["nilai"] >= 70 ? "Lulus" : "Tidak Lulus" ?>
                </span>
            </td>
            <td>
                <a class="tombol" href="detail.php?nim=<?= urlencode($data["nim"]) ?>">Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div style="margin-top: 20px;">
        <a class="tombol" href="form_pesan.php">Form Pesan</a>
    </div>
</div>
</body>
</html>