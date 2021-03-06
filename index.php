<?php include 'template/header.php' ?>

<?php 
     include_once "model/conexion.php";
     $sentencia = $bd -> query("select * from persona");
     $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
        
        <?php include 'template/mensajes.php'?>
        
            <div class="card">
            <div class="card-header">
                Lista de alumnos
                </div>
                <div class="p-4">
                   <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Materia</th>
                            <th scope="col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           foreach($persona as $dato){

                           
                        ?>
                        <tr>
                            <td scope="row"><?php echo $dato->codigo; ?></td>
                            <td><?php echo $dato->nombre; ?></td>
                            <td><?php echo $dato->edad; ?></td>
                            <td><?php echo $dato->materia; ?></td>
                            <td><a class="text-success" href="editar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<?php echo $dato->codigo; ?>"><i class="bi bi-trash"></i></a></td>
                        </tr>

                        <?php

                           }
                        ?>

                    </tbody>
                   </table>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingres
                    ar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Materia: </label>
                        <input type="text" class="form-control" name="txtMateria" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>