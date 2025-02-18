<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter 4 SandBox</title>
</head>

<body>
    <h2>Data Users</h2>
    <!-- link route -->
    <a href="/user/show-create">Add User</a>
    <?php if (session()->getFlashdata('success')) { ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php } ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($user as $u) : ?>
            <tr>
                <td><?= $u['user_id']; ?></td>
                <td><?= $u['name']; ?></td>
                <td><?= $u['username']; ?></td>
                <td><?= $u['password']; ?></td>
                <td><?= $u['email']; ?></td>
                <td><?= $u['role']; ?></td>
                <td>
                    <a href="/user/edit/<?= $u['user_id']; ?>">Edit</a> |
                    <a href="/user/delete/<?= $u['user_id']; ?>" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                </td>
                <!-- <td>
                    <a href="/barang/delete/<= $u['user_id']; ?>">Hapus</a>
                </td> -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>