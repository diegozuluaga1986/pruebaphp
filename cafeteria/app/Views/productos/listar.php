<?=$cabecera?>
<a class="btn btn-success" href="<?=base_url('crear')?>">Crear un producto</a>
<br/>
<br/>
       <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre_Producto</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($productos as $producto):

            ?>
            <tr>
               

           
                
                <td>  <?= $producto['ID']; ?></td>
                <td>  <?= $producto['Nombre_Producto'];  ?></td>
                <td>  <?= $producto['Referencia'];  ?></td>
                <td>  <?= $producto['Precio'];  ?></td>
                <td>  <?= $producto['Peso'];  ?></td>
                <td>  <?= $producto['Categoria'];  ?></td>
                <td>  <?= $producto['Stock'];  ?></td>
                <td>  <?= $producto['Fecha'];  ?></td>

                <td>  <?= $producto['Nombre_Producto'];  ?></td>
                <td>
                <a href="<?=base_url('editar/'.$producto['ID']);?>"class="btn btn-info" type="button">Editar</a>    
                 
                <a href="<?=base_url('borrar/'.$producto['ID']);?>"class="btn btn-danger" type="button">Borrar</a>    
                
            </td>
             
            </tr>
            <?php endforeach;?>
            
        </tbody>
       </table>
       <?=$pie?>
  