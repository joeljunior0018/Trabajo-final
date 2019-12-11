
<?php include ('header.php')?>

<main class="container p-4">
<div class="wrapp">
			<div class="mensaje">
				<h2>Registro Cliente</h2>
			</div>

  <div class="row">
    <div class="col-md-4">
      

      <!-- AGREGAR FORMULARIO -->
      <div class="card card-body">
        <form action="save.php?d=1" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
          </div>
          <div class="form-group">
            <input type="text" name="direccion" class="form-control" placeholder="Direccion">
          </div>
          <div class="form-group">
            <input type="num" name="telefono" class="form-control" placeholder="Telefono">
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Usuario">
          </div>
          <div class="form-group">
            <input type="text" name="pass" class="form-control" placeholder="Contraseña">
          </div>
          <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    
  </div>
</main>


<?php include('footer.php'); ?>



