<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 4 sandbox</title>
</head>

<body>
    <h2>Edit User</h2>

    <?php if (session()->getFlashdata('success')) { ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php } ?>

    <!-- validation draft -->
    <!-- <php $validation = \Config\Services::validation(); ?> -->

    <form action="/user/update/<?= $data['user_id']; ?>" method="post">
        <?= csrf_field(); ?>

        <!-- validation draft -->
        <!-- <php if ($validation && $validation->hasError('username')) : ?>
            <small style="color: red;"><= $validation->getError('username'); ?></small>
        <php endif; ?> -->

        <label>Name:</label>
        <input type="text" name="name" value="<?= old('name', $data['name']); ?>" required>
        <br>

        <label>Username:</label>
        <input type="text" name="username" value="<?= old('username', $data['username']); ?>" required>
        <br>

        <label>Password:</label>
        <input type="password" name="password" value="<?= old('password', $data['password']); ?>" required>
        <br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= old('email', $data['email']); ?>" required>
        <br>

        <label for="role">Role</label>
        <select name="role" id="role" value="<?= old('role', $data['role']) ?>" required>
            <?php
            if ($data['role'] == 'user') {
            ?>
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
            <?php } else { ?>
                <option value="user">User</option>
                <option value="admin" selected>Admin</option>
            <?php } ?>
        </select>
        <br>

        <button type="submit">Update</button>
    </form>

    <a href="/user">Kembali</a>
</body>

</html>