  <!-- alerta -->
        <?php
          if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){

          ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         
            <strong>Error!</strong> Rellena todos los campos.
         </div>
        
          <?php 
          }
          ?>

         <?php
          if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){

          ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         
            <strong>Registrado!</strong> Se agregaron los datos.
         </div>
        
          <?php 
          }
          ?>

         <?php
          if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){

          ?>
         <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         
            <strong>Registrado!</strong> Se agregaron los datos.
         </div>
        
          <?php 
          }
          ?>

          <?php 
          if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
          ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

           <strong>Cambiado!</strong> Los datos fueron actualizados.
         </div>
          <?php 
          }
          ?>
          
          
          <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 