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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </head>
    <body>

        <header class="mt-3">
            <section class="top">
                <div class="container">
                    <div class="d-flex justify-content-start">
                        <h3 class="text-light">JobQ</h3>
                    </div>
                </div>
            </section>
        </header>

        <!-- Card Box Start -->

            <main>
                <section class="card-box mt-5">
                    <div class="container">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-center">
                                <div class="alert-text text-center mb-5" style="height: 70px;">
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                                <form action="<?= base_url('Auth/aksi_login');?>" method="post">
                                    <div class="card mt-5 pb-3" style="width: 30rem; border-radius: 30px;">
                                        <div class="card-title">
                                            <h3 class="ms-3 mt-4">Login</h3>
                                        </div>
                                        <hr>
                                        <div class="card-body ms-5">
                                            <div class="email">
                                                <label for="email">Email</label> <br>
                                                <input type="email" name="email" id="email">
                                            </div>
                                            <div class="password mt-3">
                                                <label for="password">Password</label> <br>
                                                <input type="password" name="password" id="password">
                                            </div>
                                            <div class="button-control mt-5">
                                                <button>Sign In</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="more-control mt-3">
                                    <p>don't have an account yet? <a href="register" class="fw-bold ms-3">Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

        <!-- Card Box Start -->

        <!-- Accessories Start -->

            <section class="accessories">
                <div class="position-relative">
                    <div class="rect-1 position-absolute"></div>
                </div>
            </section>

        <!-- Accessories End -->
    </body>
</html>