<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
</head>

<body>
    <h1>User Management | Must be Admin</h1>
    <h4><b>This is just dummy pages for test RBAC routing</b></h4>
    <p>Role Logged In : <u><?= $role ?></u></p>
    <a href="/">Login Page</a>
    <br>
    <a href="/user-management">User Management Page</a>
    <br>
    <a href="/create-transaction">create Transaction Page</a>
</body>

</html>