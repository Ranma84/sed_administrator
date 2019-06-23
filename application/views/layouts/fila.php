<tr id="addr'+<?= $name ?>+'" data-id="'+<?= $name ?>+'">
    <td data-name="parentesco">
        <select name="detalle['+<?= $name ?>+'][parentesco]" id="detalle['+<?= $name ?>+'][parentesco]" class="form-control">
            <option value="Esposa">Esposa</option>
            <option value="Hijo" selected="" >Hijo</option>                          
        </select>
    </td>
    <td data-name="nombre">
        <input type="text" id="detalle['+<?= $name ?>+'][nombre]" name="detalle['+<?= $name ?>+'][nombre]" placeholder="nombre" class="form-control">
    </td>

    <td data-name="fecha">
        <input type="text" id="detalle['+<?= $name ?>+'][fecha]" name="detalle['+<?= $name ?>+'][fecha]" placeholder="fecha" class="has-datepicker form-control">
    </td>
    <td data-name="del">
        <input type="hidden" id="detalle['+<?= $name ?>+'][nuevo]" name="detalle['+<?= $name ?>+'][nuevo]" value="N">
        <input type="hidden" id="detalle['+<?= $name ?>+'][secuencia]" name="detalle['+<?= $name ?>+'][secuencia]" value="0">
        <button type="button"  class="btn btn-danger glyphicon glyphicon-remove row-remove text-center" title="Eliminar" value=""></button>
    </td>
</tr>
