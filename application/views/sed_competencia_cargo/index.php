<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Competencia Cargo Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_competencia_cargo/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cargo</th>
						<th>Id Empresa</th>
						<th>Id Competencia</th>
						<th>Estado</th>
						<th>Fec Ingreso</th>
						<th>User Ingreso</th>
						<th>Fec Modificacion</th>
						<th>User Modificacion</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_competencia_cargo as $s){ ?>
                    <tr>
						<td><?= $s['id_cargo']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_competencia']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td><?= $s['fec_ingreso']; ?></td>
						<td><?= $s['user_ingreso']; ?></td>
						<td><?= $s['fec_modificacion']; ?></td>
						<td><?= $s['user_modificacion']; ?></td>
						<td>
                            <a href="<?= site_url('sed_competencia_cargo/edit/'.$s['id_cargo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_competencia_cargo/remove/'.$s['id_cargo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
