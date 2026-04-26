<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Detail Pinjaman ID: {{$detail->id}}</h1>

        <h2>Data Buku</h2>
        <p>Buku ID: {{$detail->book_id}}</p>
        <p>Jumlah: {{$detail->is_return}}</p>
        <hr>

        <h2>Data Pengambilan</h2>
        <p>Status Peminjaman: {{$detail->is_return ? 'Sudah dikembalikan' : 'Belum dikembalikan'}}</p>
    </div>
</body>
</html>