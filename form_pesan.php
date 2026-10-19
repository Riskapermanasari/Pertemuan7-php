
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Pesan dan Kesan</h2>

    <form action="proses_pesan.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required>

        <label for="pesan">Pesan/Kesan:</label>
        <textarea id="pesan" name="pesan" required></textarea>

        <button type="submit">Kirim</button>
        <a class="tombol" href="index.php">Kembali</a>
    </form>
</div>

</body>
</html>






