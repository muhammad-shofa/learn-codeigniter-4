<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Igniter Project</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            <!-- <th>Aksi</th> -->
        </tr>
        <?php foreach ($user as $u) : ?>
            <tr>
                <td><?= $u['user_id']; ?></td>
                <td><?= $u['name']; ?></td>
                <td><?= $u['username']; ?></td>
                <td><?= $u['password']; ?></td>
                <td><?= $u['email']; ?></td>
                <td><?= $u['role']; ?></td>
                <!-- <td>
                    <a href="/barang/delete/<= $u['user_id']; ?>">Hapus</a>
                </td> -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>