<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>User: {{$user->full_name}}</h1>
        <h2>Daftar Pinjaman</h2>
        @forelse($user->loans as $loan)
        <div>
            Peminjaman ID: {{$loan->id}} - Tanggal: {{$loan->loan_at}}
        </div>
        @empty
        <div>
            Tidak ada Pinjaman
        </div>
        @endforelse
    </div>
</body>
</html>