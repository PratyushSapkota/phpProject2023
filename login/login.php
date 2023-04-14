<?php
session_start();
$_SESSION['logged'] = false;
$_SESSION['id'] = null;
?>

<head>
    <title>Login</title>
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
            rel="stylesheet"
    />
</head>



<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="logindata.php" method="post">

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                               placeholder="Enter a valid email address" name="email" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                               placeholder="Enter password" name="password" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>


                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login" />
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="../register/sellerorbuyer.php"
                                                                                          class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>




