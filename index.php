
<?php
$mahasiswa = [
    ["nim" => "23001", "nama" => "Siti Lala", "jurusan" => "Sistem Informasi", "nilai" => 85],
    ["nim" => "23002", "nama" => "Farel Pratama", "jurusan" => "Sistem Informasi", "nilai" => 90],
    ["nim" => "23003", "nama" => "Zamzam", "jurusan" => "Informatika", "nilai" => 78]
];
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

        <?php
        for ($i = 0; $i < count($mahasiswa); $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $mahasiswa[$i]["nim"] . "</td>";
            echo "<td>" . $mahasiswa[$i]["nama"] . "</td>";
            echo "<td>" . $mahasiswa[$i]["jurusan"] . "</td>";
            echo "<td>" . $mahasiswa[$i]["nilai"] . "</td>";

            if ($mahasiswa[$i]["nilai"] >= 70) {
                echo "<td>Lulus</td>";
            } else {
                echo "<td>Tidak Lulus</td>";
            }

            echo "<td><a class='tombol' href='detail.php?nim=" . $mahasiswa[$i]["nim"] . "'>Detail</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <a class="tombol" href="form_pesan.php">Form Pesan</a>
</div>

</body>
</html>
