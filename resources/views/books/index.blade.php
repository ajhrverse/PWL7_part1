<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Buku</h2>

<table border="1">
    <tr>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Rak</th>
    </tr>

    @foreach($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->category->category ?? '-' }}</td>
        <td>{{ $book->bookshelf->name ?? '-' }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>