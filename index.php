
<?php
$mahasiswa = [
    [
        "nim" => "231001",
        "nama" => "Alya Putri",
        "jurusan" => "Sistem Informasi",
        "email" => "alya@gmail.com",
        "nilai" => 85
    ],
    [
        "nim" => "231002",
        "nama" => "Bima Pratama",
        "jurusan" => "Informatika",
        "email" => "bima@gmail.com",
        "nilai" => 75
    ],
    [
        "nim" => "231003",
        "nama" => "Citra Maharani",
        "jurusan" => "Sistem Informasi",
        "email" => "citra@gmail.com",
        "nilai" => 90
    ],
    [
        "nim" => "231004",
        "nama" => "Dafa Ramadhan",
        "jurusan" => "Informatika",
        "email" => "dafa@gmail.com",
        "nilai" => 65
    ],
    [
        "nim" => "231005",
        "nama" => "Nadia Safitri",
        "jurusan" => "Sistem Informasi",
        "email" => "nadia@gmail.com",
        "nilai" => 55
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Daftar Nilai Mahasiswa</h2>

    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>

        <?php
        $no = 1;

        foreach ($mahasiswa as $data) {
            if ($data["nilai"] >= 80) {
                $grade = "A";
            } elseif ($data["nilai"] >= 70) {
                $grade = "B";
            } elseif ($data["nilai"] >= 60) {
                $grade = "C";
            } else {
                $grade = "D";
            }

            $status = ($data["nilai"] >= 70)
                ? "Lulus"
                : "Tidak Lulus";
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($data["nim"]) ?></td>
            <td><?= htmlspecialchars($data["nama"]) ?></td>
            <td><?= htmlspecialchars($data["jurusan"]) ?></td>
            <td><?= $data["nilai"] ?></td>
            <td><?= $grade ?></td>
            <td><?= $status ?></td>
            <td>
                <a class="detail"
                   href="detail.php?nim=<?= urlencode($data['nim']) ?>&nama=<?= urlencode($data['nama']) ?>&jurusan=<?= urlencode($data['jurusan']) ?>&email=<?= urlencode($data['email']) ?>&nilai=<?= $data['nilai'] ?>">
                    Detail
                </a>
            </td>
        </tr>

        <?php } ?>
    </table>

    <p>
        <a class="tombol" href="form_pesan.php">Form Pesan</a>
    </p>
</div>

</body>
</html>

