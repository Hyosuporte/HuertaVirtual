<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="<?php echo BASE_URL; ?>Assets/css/styles.css" rel="stylesheet" />
    <script src="<?php echo BASE_URL; ?>Assets/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    .gradient-custom {
        background: #6a11cb;

        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>

<body class="gradient-custom">
    <section class="vh-100">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <form class="card bg-dark text-white" style="border-radius: 1rem;" id="frmLogin">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="email">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                
                                <div class="alert alert-danger text-center d-none"  id="alert" role="alert">
                                    
                                </div>

                                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>


                                <button class="btn btn-outline-light btn-lg px-5" type="button" onclick="frmLogin();">Login</button>


                                <div>
                                    <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>

                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo BASE_URL; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>Assets/js/scripts.js"></script>
    <script>
        const base_url = "<?php echo BASE_URL; ?>"
    </script>
    <script src="<?php echo BASE_URL; ?>Assets/js/funciones.js"></script>
</body>

</html>