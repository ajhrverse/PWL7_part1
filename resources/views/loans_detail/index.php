<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Detail Peminjaman</h2>

    <table border="1">
        <tr>
            <th>ID Loan</th>
            <th>Buku</th>
            <th>Denda</th>
        </tr>

        @foreach($details as $d)
        <tr>
            <td>{{ $d->loan->id ?? '-' }}</td>
            <td>{{ $d->book->title ?? '-' }}</td>
            <td>
                @foreach($d->returns as $r)
                    {{ $r->amount }} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>