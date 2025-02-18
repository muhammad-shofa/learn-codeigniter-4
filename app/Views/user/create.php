<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter 4 SandBox</title>
</head>

<body>
    <h2>Create User</h2>

    <?php if (session()->getFlashdata('success')) { ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php } ?>

    <?php $validation = \Config\Services::validation(); ?>

    <form action="/user/save-create" method="post">
        <?= csrf_field(); ?> <!-- Token keamanan -->

        <!--  -->
        <!-- Menambahkan old('username') dan old('email') di input agar data sebelumnya tidak hilang setelah validasi gagal. -->
        <!--  -->
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?= old('name') ?>" required>
            <small style="color: red;"><?= $validation->getError('name'); ?></small>
        </div>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" value="<?= old('username') ?>" required>
            <!-- <small style="color: red;"><= $validation->getError('username'); ?></small> -->
            <?php if ($validation && $validation->hasError('username')) : ?>
                <small style="color: red;"><?= $validation->getError('username'); ?></small>
            <?php endif; ?>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" value="<?= old('password') ?>" required>
            <small style="color: red;"><?= $validation->getError('password'); ?></small>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?= old('email') ?>" required>
            <small style="color: red;"><?= $validation->getError('email'); ?></small>
        </div>
        <div>
            <label for="role">Role</label>
            <select name="role" id="role" value="<?= old('role') ?>" required>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <small style="color: red;"><?= $validation->getError('role'); ?></small>
        </div>
        <button type="submit">Add New User</button>
    </form>
</body>

</html>