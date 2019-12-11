<?php include ("db.php"); ?>
<?php include ('header.php')?>

<main class="container p-4">
<div class="wrapp">
			<div class="mensaje">
				<h2>Registrar Categoría</h2>
			</div>

  

      <!-- AGREGAR FORMULARIO -->
      <div class="card card-body">
        <form action="save.php?d=2" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-4">
      <h2>Categoría Registrada</h2>
      <table class="table table-striped table-bordered table-responsived ">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM categoria";
          $result_categoria = mysqli_query($conn, $query);    
          while($row = mysqli_fetch_assoc($result_categoria)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>


<?php include('footer.php'); ?>