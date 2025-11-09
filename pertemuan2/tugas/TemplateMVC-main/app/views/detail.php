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
        <h1>Selamat Datang, <?= htmlspecialchars($data['user']['name']); ?></h1>
        <p>Email: <?= htmlspecialchars($data['user']['email']); ?></p>
        <a href="<?= BASE_URL; ?>/User" class="btn">Kembali ke Daftar</a>
    </div>
</body>
 </html>