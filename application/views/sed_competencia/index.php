<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Competencias Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_competencia/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Competencia</th>
						<th>Id Empresa</th>
						<th>Id Tipo Competencia</th>
						<th>Nombre</th>
						<th>Estado</th>
						<th>Definicion</th>
						<th>Inverso</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_competencias as $s){ ?>
                    <tr>
						<td><?= $s['id_competencia']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_tipo_competencia']; ?></td>
						<td><?= $s['nombre']; ?></td>
						<td><?= $s['estado']; ?></td>
						<td><?= $s['definicion']; ?></td>
						<td><?= $s['inverso']; ?></td>
						<td>
                            <a href="<?= site_url('sed_competencia/edit/'.$s['id_competencia']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_competencia/remove/'.$s['id_competencia']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
