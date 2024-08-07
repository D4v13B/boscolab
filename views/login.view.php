<style>
   .bg-image {
      background-image: url("img/itdb.webp");
      background-position: center;
      background-size: cover;
   }
</style>

<body class="bg-image d-flex justify-content-start">
   <div class="bg-white p-2 p-md-5 col-12 col-lg-4 col-md-8 vh-100 d-flex flex-column justify-content-between">
      <div class="w-100">
         <div class="my-4">
            <a href="index.php" class="text-dark fs-5">
               <i class="fa-solid fa-arrow-left"></i>
            </a>
         </div>
         <div class="py-5">
            <div class="d-flex flex-column justify-content-center h-50">
               <!-- <div class="d-flex justify-content-center">
                  <i class="fa-solid fa-person-military-pointing m-1" style="font-size: 4rem"></i>
               </div> -->
               <div class="mb-3">
                  <h2 class="fw-bold fs-2 text-center">Iniciar sesión</h2>
                  <h6 class="fw-light text-center">Sin una sonrisa, no es posible demostrar amistad</h6>
               </div>
               <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                  <div class="input-group">
                     <div class="input-group-text bg-dark text-white">
                        <i class="fa-solid fa-envelope"></i>
                     </div>
                     <input type="text" name="user_email" placeholder="Correo o usuario" class="form-control py-3">
                  </div>
                  <div class="input-group my-4">
                     <div class="input-group-text bg-dark text-white">
                        <i class="fa-solid fa-key"></i>
                     </div>
                     <input type="password" name="user_password" placeholder="Contraseña" class="form-control py-3">
                  </div>
                  <div class="d-flex align-items-center flex-column">
                     <!-- <span class="text-secondary">No tienes una cuenta? <a href="signup.php" class="text-decoration-none text-link fw-semibold">Registrarse</a></span> -->
                     <input type="submit" value="Iniciar sesión" class="btn btn-dark mt-3 w-100">
                  </div>
               </form>
               <ul class="list-group mt-2">
                  <?php if (!empty($error)) : ?>
                     <li class="list-group-item list-group-item-danger text-center"><?php echo $error ?></li>
                  <?php endif ?>
               </ul>
            </div>
         </div>
      </div>
      <p class="text-center">Desarrollado por <a href="https://wa.me/50767345335">DBServices</a> &copy;</p>
   </div>
</body>