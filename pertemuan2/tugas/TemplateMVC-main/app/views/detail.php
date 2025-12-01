<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail User</title>
    <style>
        /* CSS SEDERHANA BUAT KARTU */
        body { font-family: sans-serif; padding: 20px; }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px; /* Biar ujungnya tumpul/nggak lancip */
            padding: 20px;
            max-width: 400px; /* Lebar maksimal kartu */
            background-color: #f9f9f9;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1); /* Efek bayangan dikit */
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: white;
            background-color: #007bff; /* Warna biru */
            padding: 8px 12px;
            border-radius: 4px;
        }
        .btn:hover { background-color: #0056b3; } /* Gelapin warna pas di-hover */
    </style>
</head>
<body>

    <h3>Detail Pengguna</h3>

    <div class="card">
        <h1><?= $data['user']['name']; ?></h1>
        
        <p>Email: <?= $data['user']['email']; ?></p>
        
        <p>Role: Dosen</p>

        <a href="<?= BASE_URL; ?>/user" class="btn">Kembali</a>
    </div>

</body>
</html>