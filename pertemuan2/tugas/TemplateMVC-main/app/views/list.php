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
    <h1>Daftar Pengguna</h1>

    <a href="<?= BASE_URL; ?>/User/tambah" class="btn">Tambah Data User</a>
    <br><br>

    <table class="user-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['users'] as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['name']); ?></td>
                <td><?= htmlspecialchars($user['email']); ?></td>
                <td>
                    <a href="<?= BASE_URL; ?>/User/ubah/<?= $user['id']; ?>" class="btn-small">Ubah</a>
                    <a href="<?= BASE_URL; ?>/User/hapus/<?= $user['id']; ?>" class="btn-small" onclick="return confirm('Yakin mau hapus data ini?');">Hapus</a>
                    <a href="<?= BASE_URL; ?>/User/detail/<?= $user['id']; ?>" class="btn-small">Detail</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>