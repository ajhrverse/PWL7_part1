<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Rak Buku</h2>

    <table border="1">
        <tr>
            <th>Nama Rak</th>
            <th>Daftar Buku</th>
        </tr>

        @foreach($bookshelfs as $shelf)
        <tr>
            <td>{{ $shelf->name }}</td>
            <td>
                @foreach($shelf->books as $book)
                    {{ $book->title }} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>