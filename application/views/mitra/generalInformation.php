<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $title?></title>
        
        <!-- CSS File -->
        <link rel="stylesheet" href="/assets/css/sidebarMitra.css">
        <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        
        <!-- JS File -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <section>
            <div class="d-flex justify-content-start">

                <!-- Siderbar Start -->

                <?php
                    $this->load->view('template/mitra/sidebar');
                ?>

                <!-- Sidebar End -->

                <!-- Content Start -->

                    <div class="content-body" style="margin-left: 15em; margin-top: 10px;">
                        <div class="container ms-3" style="width: 62em; max-width: 62em;">
                            <div class="d-flex justify-content-start flex-wrap" id="hasil">
                                <section class="top-content d-flex flex-column">
                                    <div class="d-flex justify-content-start mt-3">
                                        <p class="location text-light" style="background-color: #A06CD5; padding: 2px 15px;">Location</p>
                                        <p class="ms-3" style="margin-top: 1q;">Mitra - General Information</p>
                                        <div class="profile ms-auto">
                                            <p>Nickname</p>
                                        </div>
                                    </div>
                                    <hr style="width: 150vh; margin-top: 5px;">
                                </section>
                                <section class="body-content">
                                    <div class="d-flex justify-content-start">
                                        <div class="information-account mt-3">
                                            <p class="text-muted" style="font-size: 12px;">Account Information</p>
                                            <div class="card" style="width: 20rem;">
                                                <div class="card-body">
                                                    <div class="name">
                                                        <h6>Name</h6>
                                                        <input type="text" disabled="disabled" value="Anjay">
                                                    </div>
                                                    <div class="email mt-2">
                                                        <h6>Email</h6>
                                                        <input type="text" disabled="disabled" value="Anjay">
                                                    </div>
                                                    <div class="address mt-2">
                                                        <h6>Address</h6>
                                                        <input type="text" disabled="disabled" value="Anjay">
                                                    </div>
                                                    <div class="sex mt-2">
                                                        <h6>Sex</h6>
                                                        <input type="text" disabled="disabled" value="Anjay">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="business-information mt-3">
                                            <p class="text-muted" style="font-size: 12px;">Business Information</p>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                <!-- Content End -->

            </div>
        </section>
    </body>
</html>