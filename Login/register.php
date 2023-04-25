
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sistemas gestor de rotes</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
            <section class="vh-100 gradient-custom">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white text-black" style="border-radius: 1rem;">
                      <div class="card-body p-5 text-center">
            
                        <div class="mb-md-5 mt-md-4 pb-5">
                          <figure class="figure">
                            <img
                              src="src/jpg/logo.jpg"
                              class="figure-img img-fluid rounded shadow-3 mb-3"
                              alt="Taking up Water with a Spoon"
                            />
                          </figure>
                          <h2 class="fw-bold mb-2 text-uppercase text-black">Registro</h2>
                          <p class="text-black-50 mb-5">Bienvenido al sistema gestor rotes.</p>

                          <form action="procesar_formulario.php" method="post">
                              <div class="form-outline form-white mb-4 text-black ">
                                <input type="text" name="nombre" id="typeText" class="form-control form-control-lg text-black" />
                                <label class="form-label text-black" for="typeEmailX">Nombre</label>
                              </div>
                              <div class="form-outline form-white mb-4 text-black ">
                                <input type="email" name="correo" id="typeEmailX" class="form-control form-control-lg text-black" />
                                <label class="form-label text-black" for="typeEmailX">Correo</label>
                              </div>
                              <div class="form-outline form-white mb-4 text-black">
                                <input type="password" name="contrasena" id="typePasswordX" class="form-control form-control-lg text-black" />
                                <label class="form-label text-black" for="typePasswordX">Contraseña</label>
                              </div>
                              <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Contraseña olvidada?</a></p>
                              <button class="btn btn-outline-dark btn-lg px-5 text-black" type="submit">Registrar</button>
  
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>       
  </body>
</html>
