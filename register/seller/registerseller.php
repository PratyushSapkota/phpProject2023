<head>
    <title>Register as a Seller</title>
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


<section class="vh-100 bg-image"">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
        <div class="container h-100 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account as Seller</h2>

                            <form action="sellerdata.php" method="post">

                                <div class="form-outline mb-4">
                                    <input type="text" name="fullname" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="address" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Shop Address</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="number" name="contact" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Contact Number</label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <input type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-5 text-body colour-blue" value="Register">
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="../../login/login.php"
                                                                                                        class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>