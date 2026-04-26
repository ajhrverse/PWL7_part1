<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data User</h2>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Riwayat Pinjam</th>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>
                @foreach($user->loans as $loan)
                    {{ $loan->loan_at }} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>