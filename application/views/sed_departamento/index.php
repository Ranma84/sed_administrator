<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Departamentos Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_departamento/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Dpto</th>
						<th>Id Empresa</th>
						<th>Id Area</th>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Fec Ingreso</th>
						<th>User Ingreso</th>
						<th>Fec Modificacion</th>
						<th>User Modificacion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_departamentos as $s){ ?>
                    <tr>
						<td><?= $s['id_dpto']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_area']; ?></td>
						<td><?= $s['nombre']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td><?= $s['fec_ingreso']; ?></td>
						<td><?= $s['user_ingreso']; ?></td>
						<td><?= $s['fec_modificacion']; ?></td>
						<td><?= $s['user_modificacion']; ?></td>
						<td>
                            <a href="<?= site_url('sed_departamento/edit/'.$s['id_dpto']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_departamento/remove/'.$s['id_dpto']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
