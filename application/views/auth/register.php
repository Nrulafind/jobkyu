<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>

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
                                <form action="" method="post">
                                    <div class="card mt-5 pb-3" style="width: 30rem; border-radius: 30px;">
                                        <div class="card-title">
                                            <h3 class="ms-3 mt-4">Register</h3>
                                        </div>
                                        <hr>
                                        <div class="card-body ms-5">
                                            <div class="username">
                                                <label for="username">Username</label> <br>
                                                <input type="email" name="username" id="username">
                                            </div>
                                            <div class="password mt-3">
                                                <label for="password">Password</label> <br>
                                                <input type="password" name="password" id="password">
                                            </div>
                                            <div class="button-control mt-5">
                                                <button>Sign Up</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="more-control mt-3">
                                    <p>have an account ? <a href="#" class="fw-bold ms-3">Login</a></p>
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