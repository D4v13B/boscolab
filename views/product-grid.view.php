<div class="d-flex flex-wrap justify-content-around mb-3" style="align-items: s;">
   <?php
   if (!$product_grid) {
      echo "<div class='text-center font-size-3 font-weight-bold w-100'>NO HAY PRODUCTOS...</div>";
   }
   foreach ($product_grid as $p) : ?>
      <div class="card mb-4 rounded-4 col-md-3 col-6 px-0">
         <a href="product.php?product=<?php echo $p["produ_id"] ?>" class="text-decoration-none text-black">
            <figure style="height: 160px">
               <img class="h-100 rounded-top card-img-top img-fluid" src="<?php echo $_ENV['RUTA'] ?>img/productos/<?php echo $p['produ_imagen'] ?>" alt="<?php echo $p["produ_nombre"] ?>" style="object-fit: contain">
            </figure>
            <div class="card-body px-2 px-md-3">
               <span style="height: 34px;">
                  <?php if ($p["produ_precio_descuento"] > $p["produ_precio"]) : ?>
                     <span class="btn p-1 text-white" style="background-color: #FF0000;">Ahorra $<?php echo number_format($p["produ_precio_descuento"] - $p["produ_precio"], 2) ?></span>
                  <?php else : ?>
                     <span class="btn text-white p-1">a</span>
                  <?php endif ?>
               </span>
               <p class="d-flex align-items-center">
                  <span class="mt-auto text-danger" style="font-size: 20px;">$<?php echo $p["produ_precio"] ?></span>
                  <?php if ($p["produ_precio_descuento"] > $p["produ_precio"]) : ?>
                     <span class="mt-auto mx-2" style="text-decoration: line-through;">$<?php echo $p["produ_precio_descuento"]?></span>
                  <?php endif?>
               </p>
               <h5 class="card-title text-dark w-100" style="overflow:hidden; white-space:initial; height: 63px; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;""><?php echo $p["produ_nombre"] ?></h5>
               <?php if ($p["total_stock"] > 5) : ?>
                  <p class="text-success d-block"><?php echo $p["total_stock"] ?> disponibles</p>
               <?php else : ?>
                  <p class="text-warning d-block">¡Solo <?php echo $p["total_stock"] ?> disponibles!</p>
               <?php endif ?>
               <a href="https://wa.me/50768691712?text=Estoy interesado en <?php echo $p['produ_nombre'] . ' ' . $_ENV["RUTA"] . 'product.php?product=' . $p['produ_id'] ?>" class="btn btn-primary bg-primario d-block border-0">Comprar</a>
               <p class="m-0 p-0 mt-1 text-secondary" style="font-size: 13px;">SKU: <?php echo $p["produ_codigo"] ?></p>
               <!-- <p class="card-text text-secondary"><?php echo $p["produ_descripcion"] ?></p> -->
               <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
         </a>
      </div>
   <?php endforeach ?>
</div>