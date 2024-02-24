<!DOCTYPE html>
<html lang="es">
<?php include_once './includes/loginhead.php'; ?>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="assets/img/muebleria_logo.png" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="./conexion/login.php" method="post">

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingresa</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './includes/footer.php'; ?>
</body>

</html>