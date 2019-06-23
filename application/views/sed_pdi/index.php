<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sed Pdi Listing</h3>
            	<div class="box-tools">
                    <a href="<?= site_url('sed_pdi/add'); ?>" class="btn btn-success btn-sm">Añadir</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Pdi</th>
						<th>Id Empresa</th>
						<th>Id Periodo</th>
						<th>Periocidad</th>
						<th>Mejora</th>
						<th>Accion</th>
						<th>Tipo</th>
						<th>Fec Inicio</th>
						<th>Fec Fin</th>
						<th>Presupuesto</th>
						<th>Resultado</th>
						<th>Observaciones</th>
						<th>Avance</th>
						<th>Fec Ingreso</th>
						<th>User Ingreso</th>
						<th>Fec Modificacion</th>
						<th>User Modificacion</th>
						<th>Id Periodo Detalle</th>
						<th>Id Evaluado</th>
						<th>Id Competencia</th>
						<th>Id Evaluador</th>
						<th>Id Mentor</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sed_pdi as $s){ ?>
                    <tr>
						<td><?= $s['id_pdi']; ?></td>
						<td><?= $s['id_empresa']; ?></td>
						<td><?= $s['id_periodo']; ?></td>
						<td><?= $s['periocidad']; ?></td>
						<td><?= $s['mejora']; ?></td>
						<td><?= $s['accion']; ?></td>
						<td><?= $s['tipo']; ?></td>
						<td><?= $s['fec_inicio']; ?></td>
						<td><?= $s['fec_fin']; ?></td>
						<td><?= $s['presupuesto']; ?></td>
						<td><?= $s['resultado']; ?></td>
						<td><?= $s['observaciones']; ?></td>
						<td><?= $s['avance']; ?></td>
						<td><?= $s['fec_ingreso']; ?></td>
						<td><?= $s['user_ingreso']; ?></td>
						<td><?= $s['fec_modificacion']; ?></td>
						<td><?= $s['user_modificacion']; ?></td>
						<td><?= $s['id_periodo_detalle']; ?></td>
						<td><?= $s['id_evaluado']; ?></td>
						<td><?= $s['id_competencia']; ?></td>
						<td><?= $s['id_evaluador']; ?></td>
						<td><?= $s['id_mentor']; ?></td>
						<td>
                            <a href="<?= site_url('sed_pdi/edit/'.$s['id_pdi']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?= site_url('sed_pdi/remove/'.$s['id_pdi']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Borrar</a>
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
