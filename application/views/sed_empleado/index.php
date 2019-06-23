<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Empleado Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_empleado/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Empleado</th>
						<th>Id Empresa</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Ruc Ced</th>
						<th>Fec Nacimiento</th>
						<th>Fec Ingreso</th>
						<th>Fec Baja</th>
						<th>Estado</th>
						<th>Id Jefe</th>
						<th>Fec Alta</th>
						<th>Fec Modificacion</th>
						<th>User Modificacion</th>
						<th>User Ingreso</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_empleado as $s){ ?>
                    <tr>
						<td><?= $s['id_empleado']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['nombres']; ?></td>
						<td><?= $s['apellidos']; ?></td>
						<td><?= $s['ruc_ced']; ?></td>
						<td><?= $s['fec_nacimiento']; ?></td>
						<td><?= $s['fec_ingreso']; ?></td>
						<td><?= $s['fec_baja']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td><?= $s['id_jefe']; ?></td>
						<td><?= $s['fec_alta']; ?></td>
						<td><?= $s['fec_modificacion']; ?></td>
						<td><?= $s['user_modificacion']; ?></td>
						<td><?= $s['user_ingreso']; ?></td>
						<td>
                            <a href="<?= site_url('sed_empleado/edit/'.$s['id_empleado']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_empleado/remove/'.$s['id_empleado']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
