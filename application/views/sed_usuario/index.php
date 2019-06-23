<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Usuarios Listing</h3>
                <div class="box-tools">
                    <a href="<?= site_url('sed_usuario/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Usuario</th>
                        <th>Id Empresa</th>
                        <th>Clave</th>
                        <th>Id Empleado</th>
                        <th>Estado</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($sed_usuarios as $s) { ?>
                        <tr>
                            <td><?= $s['id_usuario']; ?></td>
                            <td><?= $s['id_empresa']; ?></td>
                            <td><?= $s['clave']; ?></td>
                            <td><?= $s['id_empleado']; ?></td>
                            <td><?= $s['estado']; ?></td>
                            <td>
                                <a href="<?= site_url('sed_usuario/edit/' . $s['id_usuario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                                <a href="<?= site_url('sed_usuario/remove/' . $s['id_usuario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?= $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
