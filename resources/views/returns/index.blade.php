<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Pengembalian</h2>

    <table border="1">
        <tr>
            <th>Buku</th>
            <th>Denda</th>
        </tr>

        @foreach($returns as $r)
        <tr>
            <td>{{ $r->loanDetail->book->title ?? '-' }}</td>
            <td>{{ $r->amount }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>