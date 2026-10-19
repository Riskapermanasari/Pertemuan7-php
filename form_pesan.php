
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container form">
    <h2>Form Pesan</h2>
    <p class="keterangan">Silakan isi formulir untuk mengirim pesan.</p>

    <form action="proses_pesan.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Pesan:</label>
        <textarea name="pesan" rows="4" required></textarea>

        <button type="submit" class="tombol">Kirim</button>
    </form>

    <br>
    <p><a href="index.php" class="tombol">Kembali ke Daftar Nilai</a></p>
</div>

</body>
</html>



