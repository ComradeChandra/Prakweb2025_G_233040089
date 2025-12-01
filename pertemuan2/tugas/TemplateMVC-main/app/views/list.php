<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar User</title>
    
    <style>
        /* Atur font biar enak dibaca */
        body { font-family: sans-serif; padding: 20px; }
        
        /* Bikin garis tabel nyatu (collapse) & lebar full */
        table { border-collapse: collapse; width: 100%; }
        
        /* Kasih garis pinggir di setiap kotak (sel) */
        th, td { border: 1px solid #ddd; padding: 8px; }
        
        /* Kasih warna abu-abu di judul kolom biar beda */
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h3>Daftar Pengguna</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
        <tbody>
            <?php $no = 1; // Mulai nomor urut dari 1 ?>
            
            <?php foreach ($data['users'] as $user) : ?>
            <tr>
                <td><?= $no++; ?></td>
                
                <td><?= $user['name']; ?></td> 
                
                <td><?= $user['email']; ?></td>
                
                <td>
                    <a href="<?= BASE_URL; ?>/user/detail/<?= $user['id']; ?>">Detail</a>
                </td>
            </tr>
            <?php endforeach; // Selesai looping, ulang lagi ke atas kalau data masih ada ?>
        </tbody>
    </table>

</body>
</html>