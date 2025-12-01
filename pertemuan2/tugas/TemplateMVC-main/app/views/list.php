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

    <a href="<?= BASE_URL; ?>/user/tambah" style="display: inline-block; margin-bottom: 10px; background-color: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">+ Tambah Data User</a>
    <br><br>

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
                    <a href="<?= BASE_URL; ?>/user/detail/<?= $user['id']; ?>" style="color: blue; text-decoration: none; margin-right: 10px;">Detail</a>
                    
                    <a href="<?= BASE_URL; ?>/user/ubah/<?= $user['id']; ?>" style="color: green; text-decoration: none; margin-right: 10px;">Ubah</a>
                    
                    <a href="<?= BASE_URL; ?>/user/hapus/<?= $user['id']; ?>" style="color: red; text-decoration: none;" onclick="return confirm('Yakin mau menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; // Selesai looping ?>
        </tbody>
    </table>

</body>
</html>