<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Empresa Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_empresa/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Empresa</th>
						<th>Nombre Comercial</th>
						<th>Descripcion</th>
						<th>Ced Ruc</th>
						<th>Direccion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_empresa as $s){ ?>
                    <tr>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['nombre_comercial']; ?></td>
						<td><?= $s['descripcion']; ?></td>
						<td><?= $s['ced_ruc']; ?></td>
						<td><?= $s['direccion']; ?></td>
						<td>
                            <a href="<?= site_url('sed_empresa/edit/'.$s['id_empresa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_empresa/remove/'.$s['id_empresa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
