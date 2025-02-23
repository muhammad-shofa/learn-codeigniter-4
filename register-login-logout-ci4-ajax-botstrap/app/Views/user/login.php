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
        <div class="wrapper-login w-50 mx-auto border border-3 border-success rounded">
            <h2 class="text-center bg-success text-white p-3">Login</h2>
            <form class="p-3">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="button" class="btn-login btn btn-success">Login</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn-login").on('click', function() {
                let username = $('#username').val();
                let password = $('#password').val();

                $.ajax({
                    url: '/auth/login',
                    type: 'POST',
                    data: {
                        username: username,
                        password: password
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 'success') {
                            alert('Login successfull');
                        } else {
                            alert('Login failed');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", error);
                        alert("Login failed, try again");
                    }
                })
            })
        })
    </script>
</body>

</html>