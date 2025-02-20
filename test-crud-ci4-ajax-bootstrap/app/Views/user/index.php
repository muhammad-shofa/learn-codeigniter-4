<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Test CRUD CI4</title>
</head>

<body>
    <div class="container">
        <h1 class="my-3">Learn CodeIgniter 4, Ajax and Bootstrap</h1>
        <br>
        <h2>User List</h2>

        <!-- status -->
        <?php if (session()->getFlashdata('success')) { ?>
            <p class="font"><?= session()->getFlashdata('success') ?></p>
        <?php } ?>

        <!-- Button trigger create user modal -->
        <!-- <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#createUserModal">
            Add new user
        </button> -->

        <!-- Create User Modal -->
        <!-- <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add new user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/user/create" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="emusernameail" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" name="role" id="role" aria-label="Default select example">
                                    <option selected>Select Role</option>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

        <!-- Table list data  -->
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="tableUser">

            </tbody>
        </table>

        <!-- Edit user modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit user</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <input type="hidden" name="user_id" id="editUserId">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="editName">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="editUsername">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="editPassword">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="editEmail">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" name="role" id="editRole" aria-label="Default select example">
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="save-edit btn btn-primary">Save edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            // ambil semua data user dari backend
            function loadUserData() {
                $.ajax({
                    url: '/user/get-data',
                    type: 'GET',
                    dataType: "json",
                    success: function(users) {
                        let rows = "";
                        users.forEach(user => {
                            rows += `
                            <tr>
                                <td>${user.name}</td>
                                <td>${user.username}</td>
                                <td>${user.password}</td>
                                <td>${user.email}</td>
                                <td>${user.role}</td>
                                <td>
                                     <button class="edit-user btn btn-warning btn-sm" data-user_id="${user.user_id}">Edit</button>
                                     <button class="delete-user btn btn-danger btn-sm" data-user_id="${user.user_id}">Delete</button>
                                 </td>
                            </tr>`;
                        });

                        $('#tableUser').html(rows);
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching data: ", error);
                    }
                })
            }

            // jalankan loadUserData
            loadUserData();

            // $('.edit-user').on('click', function() {
            // ambil data user dari backend dan tampilkan pada form modal edit
            $(document).on('click', '.edit-user', function() { // pakai $(document).on('click'.... agar dapat berfungsi meskipun elemen dibuat secara dinamis
                let user_id = $(this).data('user_id');

                $.ajax({
                    url: '/user/show-data-edit/' + user_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status == 'success') {
                            $("#editUserId").val(user_id);
                            $("#editName").val(response.data.name);
                            $("#editUsername").val(response.data.username);
                            $("#editPassword").val(response.data.password);
                            $("#editEmail").val(response.data.email);
                            $("#editRole").val(response.data.role);

                            // $("#editUserModal").data("user_id", user_id);
                            $("#editUserModal").modal("show");
                        }
                    },
                    error: function() {
                        alert('Failed fetching user data');
                    }
                })
            })

            // simpan edit user
            // $('.save-edit').on('click', function() {
            $(document).on('click', '.save-edit', function() {
                // let user_id = $(this).data('user_id');
                let user_id = $('#editUserId').val();

                let formData = {
                    name: $('#editName').val(),
                    username: $('#editUsername').val(),
                    password: $('#editPassword').val(),
                    email: $('#editEmail').val(),
                    role: $('#editRole').val(),
                }

                $.ajax({
                    url: '/user/save-edit/' + user_id,
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        alert("User edited");
                        $("#editUserModal").modal("hide");
                        loadUserData();
                    },
                    error: function() {
                        alert('Failed to edit user!');
                    }
                })
            })
        })
    </script>
</body>

</html>