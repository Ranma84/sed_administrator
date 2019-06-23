<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Areas Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_area/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Area</th>
						<th>Id Empresa</th>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_areas as $s){ ?>
                    <tr>
						<td><?= $s['id_area']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['nombre']; ?></td>
						<td><?= ($s['estado']=='A' ? 'Activo' : 'Inactivo') ?></td>
						<td>
                            <a href="<?= site_url('sed_area/edit/'.$s['id_area']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_area/remove/'.$s['id_area']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
