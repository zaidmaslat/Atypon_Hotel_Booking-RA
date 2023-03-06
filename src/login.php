<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

</body>

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <?php
                echo "<h1 style=\"text-align:center; font-size:50px;\">Login Page</h1>";
                if (isset($_GET['notFound'])) {
                  echo '<h3 style="color:red">User or Password Not found</h3>';
                }
                ?>
                <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Login</h2>

                        <form action="doLogin.php" method="post">
                            <div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label">E-Mail</label>
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                </div>
                            

                            <div class="col-md-12 mb-4">
                            <div class="form-outline mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" />
                              </div>
                              </div>

                            <!-- Submit button -->
                            <button type="submit" value="Submit" class="btn btn-primary btn-block col-md-12 mb-4">
                                Login
                            </button>
                        </div>
                        </form>


                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="Photo\AB5I0749_NikkiTo-1.jpg" class="w-100 rounded-4 shadow-4"
                    alt="" />
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->

</html>
