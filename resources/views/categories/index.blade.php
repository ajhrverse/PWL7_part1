<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Kategori</h2>

    <table border="1">
        <tr>
            <th>Nama Kategori</th>
            <th>Daftar Buku</th>
        </tr>

        @foreach($categories as $category)
        <tr>
            <td>{{ $category->category }}</td>
            <td>
                @foreach($category->books as $book)
                    {{ $book->title }} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>