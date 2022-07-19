{include file='templates/html.tpl'}
<div class="main-table">
<table class="table">
    <thead>
             <tr>
                <th scope="col">Producto</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio</th>
                <th scope="col">Borrar</th>
                <th scope="col">Editar</th>
              </tr>
    </thead>
    <tbody>
        {foreach from=$item item=$items}

        <tr>
            <td scope="row">{$items->tipo_item}</td>
            <td>{$items->marca}</td>
            <td>{$items->id_categoria}</td>
            <td>$ {$items->precio}</td>
            <td>
                <a class="btn btn-danger" href="" id="btn-categoria-delete">
                    <i class="fas fa-trash-alt"></i>
                </a>
                
            </td>
            <td>
                <a class="alerta btn btn-success" href="" id="btn-categoria-edit">
                    <i class="far fa-edit"></i>
                </a>     
            </td>
        </tr>
        {/foreach}
    </tbody>
        
    </table>
</div>
{include file='templates/footer.tpl'}