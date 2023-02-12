<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    crear producto
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Inventario</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listar')?>">Inicio </a>
                </li>
                
        </div>
    </nav>

    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Ingresar datos al sistema</h5>
    <p class="card-text">
    <form method= "post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">

<div class="form-group">
  <label for="Nombre_Producto">Nombre_Producto:</label> 
  <input type="text" name="Nombre_Producto"  id="Nombre_Producto :" value="<?=old('Nombre_Producto')?>" class="form-control" >
  <label for="Referencia">Referencia:</label>
      <input type="text" name="Referencia"  id="Referencia :" value="<?=old('Referencia')?>" class="form-control" >
      <label for="Precio">Precio:</label>
      <input type="number" name="Precio"  id="Precio:" value="<?=old('Precio')?>" class="form-control" >
      <label for="Peso">Peso:</label>
      <input type="number" name="Peso"  id="Peso:" value="<?=old('Peso')?>" class="form-control"  placeholder="kg">
      <label for="Categoria">Categoria:</label>
      <input type="text" name="Categoria"  id="Categoria :" value="<?=old('Categoria')?>" class="form-control" >
      <label for="Stock">Stock:</label>
      <input type="number" name="Stock"  id="Stock :" value="<?=old('Stock')?>" class="form-control" >
      <label for="Fecha">Fecha:</label>
      <input type="date" name="Fecha"  id="Fecha :" value="<?=old('Fecha')?>" class="form-control" >

      <!-- <label for="Fecha'">Fecha':</label>
      <input type="date" name="Fecha'"  id="Fecha' :" value="/php_fecha/*/" class="form-control" > -->


</div>

    

      <br/>
<button class= "btn btn-success" type="submit">Guardar</button>
<a href="<?=base_url('listar');?>" class="btn btn-info">cancelar</a>

<?php if(session('mensaje')){?>

<div class="alert alert-danger" role="alert">
<?php
echo session ('mensaje');
?>
</div>
<?php
} 
?>

</body>
</html>