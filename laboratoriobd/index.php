<?php
//Archivo PHP para la conexion
  require('inc/conexion.php');

  $consulta="SELECT id,nombre,correo FROM usuarios";

  $resultado=$mysqli->query($consulta);

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Operaciones con bases de datos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">	
    <link href="css/dataTables.min.css" rel="stylesheet">
  </head>
  <h1>Usuarios</h1>
  <h3><a data-toggle="modal" href='#modal-id' href="inc/nuevo.php">Nuevo usuario</a></h3>
  
  <table id="example" class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php while($fila=$resultado->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['correo']; ?></td>
        <td><a href="#modal-md<?php echo $fila['id']; ?>" role="button" data-toggle="modal">Modificar</a></td>
        <td><a href="inc/eliminar.php?id=<?php echo $fila['id'];?>">Eliminar</a></td>
      </tr>



<!-- formulario modificar -->

  <div class="modal fade" id="modal-md<?php echo $fila['id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modificar usuario</h4>
        </div>
        <div class="modal-body">
          
          <form action="inc/modificarusuario.php" method="POST" role="form" name="nuevousuario">            
            <div class="form-group">
            <input type="text" class="form-control" name="id" value="<?php echo $fila['id']; ?>" readonly style="display:none">
              <label for="">Nombre</label>
              <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre']; ?>" id="" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="">Correo</label>
              <input type="text" class="form-control" name="correo" value="<?php echo $fila['correo']; ?>" id="" placeholder="Ingrese su correo">
            </div>
            <button type="submit" class="btn btn-primary">Guardar registro</button>
          </form>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
        </div>
      </div>
    </div>
  </div>
    <?php } ?>
    </tbody>
  </table>

<!-- formulario insertar -->
  <div class="modal fade" id="modal-id">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Nuevo usuario</h4>
        </div>
        <div class="modal-body">
          
          <form action="inc/nuevo.php" method="POST" role="form" name="nuevousuario">            
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
              <label for="">Correo</label>
              <input type="text" class="form-control" name="correo" id="" placeholder="Ingrese su correo">
            </div>
            <button type="submit" class="btn btn-primary">Guardar registro</button>
          </form>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar ventana</button>
        </div>
      </div>
    </div>
  </div>

   
  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
    $('#example').DataTable();
  });
  </script>
</html>