<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Niveles Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_nivele/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Nivel</th>
						<th>Id Empresa</th>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_niveles as $s){ ?>
                    <tr>
						<td><?= $s['id_nivel']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['nombre']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td>
                            <a href="<?= site_url('sed_nivele/edit/'.$s['id_nivel']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_nivele/remove/'.$s['id_nivel']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
