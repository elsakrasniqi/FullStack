<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding a user</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.btn-add{
			background-color: #8f83d8;
            border-radius: 5px;
			width: 150px;
            color: white;
		}
		.btn-add:hover{
			background-color: #8f83d8;
            border-radius: 5px;
            width: 150px;
			color: white;
		}
	</style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add a new user!</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="add.php" method="POST" class="p-4 border rounded bg-light shadow-sm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username: </label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name: </label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password: </label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Your password" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn-add ">Add User!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>