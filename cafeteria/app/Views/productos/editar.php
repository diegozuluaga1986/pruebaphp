<?=$cabecera?>
 

    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Ingresar datos del producto</h5>
    <p class="card-text">
  

    <form method= "post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
    <input type="hidden" name="ID" value="<?=$producto['ID']?>">

<div class="form-group">
  <label for="Nombre_Producto">Nombre_Producto:</label>
  <input type="text" name="Nombre_Producto"  id="Nombre_Producto :" value="<?=$producto['Nombre_Producto']?>" class="form-control" >
  <label for="Referencia">Referencia:</label>
      <input type="text" name="Referencia"  id="Referencia :" value="<?=$producto['Referencia']?>" class="form-control" >
      <label for="Precio">Precio:</label>
      <input type="number" name="Precio"  id="Precio:" value="<?=$producto['Precio']?>" class="form-control" >
      <label for="Peso">Peso:</label>
      <input type="number" name="Peso"  id="Peso:" value="<?=$producto['Peso']?>" class="form-control"  placeholder="kg">
      <label for="Categoria">Categoria:</label>
      <input type="text" name="Categoria"  id="Categoria :" value="<?=$producto['Categoria']?>" class="form-control" >
      <label for="Stock">Stock:</label>
      <input type="number" name="Stock"  id="Stock :" value="<?=$producto['Stock']?>" class="form-control" >
      <label for="Fecha">Fecha:</label>
      <input type="date" name="Fecha"  id="Fecha :" value="<?=$producto['Fecha']?>" class="form-control" >
    </div>



<br/>
<button  type="submit" class= "btn btn-success">Actualizar  </button>
<a href="<?=base_url('listar');?>" class="btn btn-info">cancelar</a>


    </form>
    </p>
    </div>
</div>  
    <?=$pie?>