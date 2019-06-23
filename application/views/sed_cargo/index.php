<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Cargos Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_cargo/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Cargo</th>
						<th>Id Empresa</th>
						<th>Id Area</th>
						<th>Id Dpto</th>
						<th>Id Nivel</th>
						<th>Nombre</th>
						<th>Plazas</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_cargos as $s){ ?>
                    <tr>
						<td><?= $s['id_cargo']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_area']; ?></td>
						<td><?= $s['id_dpto']; ?></td>
						<td><?= $s['id_nivel']; ?></td>
						<td><?= $s['nombre']; ?></td>
						<td><?= $s['plazas']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td>
                            <a href="<?= site_url('sed_cargo/edit/'.$s['id_cargo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_cargo/remove/'.$s['id_cargo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
