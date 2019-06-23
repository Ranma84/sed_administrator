<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Escalas Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_escala/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Escala</th>
						<th>Id Empresa</th>
						<th>Nombre</th>
						<th>Valor</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_escalas as $s){ ?>
                    <tr>
						<td><?= $s['id_escala']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['nombre']; ?></td>
						<td><?= $s['valor']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td>
                            <a href="<?= site_url('sed_escala/edit/'.$s['id_escala']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_escala/remove/'.$s['id_escala']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
