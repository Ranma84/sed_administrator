<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Periodos Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_periodo/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Periodo</th>
						<th>Id Empresa</th>
						<th>Anio</th>
						<th>Descripcion</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_periodos as $s){ ?>
                    <tr>
						<td><?= $s['id_periodo']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['anio']; ?></td>
						<td><?= $s['descripcion']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td>
                            <a href="<?= site_url('sed_periodo/edit/'.$s['id_periodo']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_periodo/remove/'.$s['id_periodo']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
