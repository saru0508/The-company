<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<!--Bootstrap CDN Link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div style="bg-light">
        <div class="row h-100 m-0">
            <div class="card w-25 my-auto mx-auto">
                <div class="card-header br-white border-0 py-3">
                    <h1 class="text^center">REGISTER</h1>
                </div>
                <div class="card-body">
                    <form action="../actions/register-action.php" method="post">
                        <div class="mb-3">
                            <label for="first-name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="last-name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last-name" class="form-control" required>
                        </div>

                        <!--Boold for emphasis-->
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
                         </div>
                         <div class="mb-5">
                            <label for="password" classs="form-label fw-bold">Password</label>
                            <input type="password" name="password" id="password" class="form-control fw-bold" minlength="8"
                            ariadescribedby="password-info" required>
                         <div class="form-text" id="password-info">
                             Password must be alteast 9 characters long.
                          </div>
                         </div>
                         <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                    <p class="text-center mt-3 small">Registered Already? <a href="../views">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>