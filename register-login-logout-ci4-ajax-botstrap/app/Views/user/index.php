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
                <li class="list-group-item">Status : <?= isset($loggedUser['isLogin']) && $loggedUser['isLogin'] ? '<b class="text-success">Logged In</b>' : '<b class="text-danger">Logout</b>' ?></li>
                <!-- <li class="list-group-item">Status : <b class="text-danger">Logout</b></li> -->
                <li class="list-group-item">Login At : <?= $loggedUser['loggedAt'] ?? "Ex data, 21 February 2025" ?></li>
                <li class="list-group-item">Expired In : <?= $loggedUser['expiredIn'] ?? "2 H" ?></li>
            </ul>
            <div class="all-btn d-flex justify-content-center gap-3 align-items-center">
                <a href="/user/login" class="btn btn-success">Login</a>
                <a href="/user/register" class="btn btn-outline-success">Register</a>
            </div>
            <p class="bg-success text-warning rounded-bottom-3 p-3">I made this project specifically to learn how to create register, login and logout features using Codeigniter 4, Ajax (jQuery) and bootstrap, so I will display things related to the box above.</p>
        </div>
    </div>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>