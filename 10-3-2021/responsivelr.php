<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Log</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <script>
        ScrollReveal().reveal('.col');
    </script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="responsive.php">Responsive</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="responsivelr.php">Responsive Login Reg</a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </nav>
    <div class="container align-content-center p-5 p-md-5 p-sm-5 p-lg-5 mr-auto">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-5 col-lg-5">
                <form action="">
                    <table class="table table-borderless">
                        <thead>
                            <h2>Login</h2>
                        </thead>
                        <tr>
                            <td><label for="">Username</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="">Password</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="button" value="Login" class="btn btn-primary form-control"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col col-12 col-sm-12 col-md-7 col-lg-7">
                <form action="">
                    <table class="table table-borderless">
                        <thead>
                            <h2>Register</h2>
                        </thead>
                        <tr>
                            <td><label>Name</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Rollno</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Admn no</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>College</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Username</label></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td><input type="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Confirm Password</label></td>
                            <td><input type="password" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label>Name</label></td>
                            <td><input type="button" value="Register" class="btn btn-primary form-control"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>