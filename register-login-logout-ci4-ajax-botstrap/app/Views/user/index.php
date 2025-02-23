<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrtap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <title>Learning Login & Register using CI4 and Ajax</title>
</head>

<body>
    <div class="container py-5">
        <div class="wrapper border border-3 border-success rounded-top-4 rounded-bottom-3">
            <h1 class="bg-success text-white rounded-top-3 p-3">Learning Login, Register and Logout using CodeIgniter 4, Ajax, Bootstrap!</h1>
            <ul class="list-group m-2">
                <li class="list-group-item">Name : <?= $loggedUser['name'] ?? "John Doe" ?></li>
                <li class="list-group-item">Username : <?= $loggedUser['username'] ?? "John Doe" ?></li>
                <li class="list-group-item">Email : <?= $loggedUser['email'] ?? "johndoe@gmail.com" ?></li>
                <li class="list-group-item">Role : <?= $loggedUser['role'] ?? "invalid" ?></li>
                <li class="list-group-item">Status : <?= isset($loggedUser['is_login']) && $loggedUser['is_login'] ? '<b class="text-success">Logged In</b>' : '<b class="text-danger">Logout</b>' ?></li>
                <li class="list-group-item">Login At : <?= $loggedUser['login_at'] ?? 'invalid' ?></li>
                <li class="list-group-item">Expired In : <?= $loggedUser['expired_in'] ?? "2 H" ?></li>
                <li class="list-group-item">Available Action :
                    <?php
                    if (isset($loggedUser['is_login']) && $loggedUser['is_login'] == true) { ?>
                        <a href="/auth/logout" class="btn btn-danger">Logout</a>
                    <?php } else { ?>
                        <a href="/login" class="btn btn-success">Login</a>
                        <a href="/register" class="btn btn-outline-success">Register</a>
                    <?php } ?>
                </li>
            </ul>
            <p class="bg-success text-warning rounded-bottom-3 p-3">I made this project specifically to learn how to create register, login and logout features using Codeigniter 4, Ajax (jQuery) and bootstrap, so I will display things related to the box above.</p>
        </div>
    </div>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {

        // })
    </script>
</body>

</html>