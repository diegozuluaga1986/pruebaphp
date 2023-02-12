
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
SISTEMA DE VENTAS
<form method="post" action="<?php echo base_url() ?>productos/editar">
		<label for="codigo">Código de ID</label>
		<input autocomplete="off" autofocus class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código" >
	</form>
<br/>
<br/>
       <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#ID</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoria</th>
                
                <th>Fecha</th>-->
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($productos as $producto):

            ?>
            <tr>
               

           
                
                <td>  <?= $producto['ID']; ?></td>
                <td>  <?= $producto['Stock'];  ?></td>
                <!--
                <td>  <?= $producto['Nombre_Producto'];  ?></td>
                <td>  <?= $producto['Referencia'];  ?></td>
                <td>  <?= $producto['Precio'];  ?></td>
                <td>  <?= $producto['Peso'];  ?></td>
                <td>  <?= $producto['Categoria'];  ?></td>
              
                <td>  <?= $producto['Fecha'];  ?></td>
            -->
                <td>
                <a href="<?=base_url('editar/'.$producto['ID']);?>"class="btn btn-info" type="button">Comprar</a>    
                 
                
            </td>
             
            </tr>
            <?php endforeach;?>
            
        </tbody>
       </table>


</body>

<div>
<a href="<?=base_url('listar/');?>"class="btn btn-info" type="button">Regresar</a>  
</div>
</html>