<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Peminjaman</h2>

    <table border="1">
        <tr>
            <th>User</th>
            <th>Tanggal Pinjam</th>
            <th>Buku</th>
        </tr>

        @foreach($loans as $loan)
        <tr>
            <td>{{ $loan->user->username ?? '-' }}</td>
            <td>{{ $loan->loan_at }}</td>
            <td>
                @foreach($loan->loanDetails as $detail)
                    {{ $detail->book->title ?? '-' }} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>