<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css"> 
</head>
<body>
    <div class="container">
        <h1>Tambah Data User</h1>
        
        <form action="<?= BASE_URL; ?>/User/prosesTambah" method="post">
            <div>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Tambah Data</button>
        </form>
        
        <a href="<?= BASE_URL; ?>/User" class="btn">Kembali ke Daftar</a>
    </div>
</body>
</html>