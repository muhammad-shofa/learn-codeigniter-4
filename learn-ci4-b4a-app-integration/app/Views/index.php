<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CI4 & B4A Integration</title>
</head>

<body>
    <div class="container-lg border border-3 p-4">
        <h1>Hello World</h1>
        <div id="userDataContainer" class="border"></div>



    </div>

    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(() => {
            $.ajax({
                url: "/api/getUser",
                type: 'GET',
                dataType: 'json',
                success: (response) => {
                    if (response.status == 'success') {
                        console.log(response.data)
                        let row = '';
                        response.data.forEach((user) => {
                            row += `
                            <div class="border border-3 p-4">
                                <h3>${user.username}</h3>
                                <p>${user.email}</p>
                                <p>${user.gender}</p>
                                <p>${user.role}</p>
                            </div>
                                `;
                        })

                        $('#userDataContainer').html(row);

                    } else {
                        console.log(response.data)
                    }
                },
                error: (xhr, status, error) => {
                    console.log(error);
                    console.log(xhr.responseText)
                }
            })
        })
    </script>
</body>

</html>