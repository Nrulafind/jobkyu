<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title ?></title>

        <!-- CSS File -->
        <link rel="stylesheet" href="/assets/css/auth.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- JS File -->
        <script src="/assets/js/alert.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </head>
    <body>

        <header>
            <section class="top">
                <div class="container-fluid">
                    <div class="d-flex justify-content-start">
                        <h3 class="text-light mt-4 ms-4">JobQ</h3>
                    </div>
                </div>
            </section>
        </header>

        <!-- Card Box Start -->

            <main>
                <section class="login-body">
                    <div class="container-fluid">
                        <div class="d-flex justify-content-start">
                            <div class="left-side">
                                <!-- Accessories Start -->

                                <section class="accessories">
                                    <div class="position-relative">
                                        <div class="rect-1 position-absolute"></div>
                                    </div>
                                </section>

                                <!-- Accessories End -->
                                <div class="form-body">
                                    <form action="<?= base_url('Auth/aksi_login');?>" method="post">
                                        <div class="text-light form">
                                            <div class="email">
                                                <label for="email">Email</label> <br>
                                                <input type="email" name="email" id="email" required>
                                            </div>
                                            <div class="password mt-3">
                                                <label for="password">Password</label> <br>
                                                <input type="password" name="password" id="password" required>
                                            </div>
                                            <div class="button-control mt-5">
                                                <button>Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="more-control text-light">
                                        <p>don't have an account yet? <a href="register" class="fw-bold ms-3 text-light">Register</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="right-side">
                                <div class="d-flex justify-content-start">
                                    <div class="alert-text text-center mb-5">
                                        <?php echo $this->session->flashdata('message'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

        <!-- Card Box Start -->



    </body>
</html>