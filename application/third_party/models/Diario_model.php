<?php

class Diario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_diario($id) {
        return $this->db->get_where('diario', array('id' => $id))->row_array();
    }

    function get_all_diario() {
        $this->db->order_by('id', 'desc');
        return $this->db->get('diario')->result_array();
    }

    function add_diario($params) {
        $this->db->insert('diario', $params);
        return $this->db->insert_id();
    }

    function update_diario($id, $params) {
        $this->db->where('id', $id);
        return $this->db->update('diario', $params);
    }

    function delete_diario($id) {
        return $this->db->delete('diario', array('id' => $id))->row();
    }

    function fechas1($fecha_inicial,$fecha_final, $usuario = 0) {
        $datetime1 = new DateTime($fecha_inicial);
        $datetime2 = new DateTime($fecha_final);
        $interval = date_diff($datetime1, $datetime2);
        $dias=$interval->format('%a');
        $row = $this->db->query("SELECT MAX(id) as id FROM diario")->row();
        $max = 0;
        if (isset($row)) {
            $max = $row->id;
        }
        $fecha_original = $fecha_inicial;
        $this->db->query("DELETE FROM diario WHERE fecha_inicio>='$fecha_inicial' and fecha_final<='$fecha_final';"); 
        $this->db->query("UPDATE diario_ingresos SET cerrado=0 WHERE fecha_inicio>='$fecha_inicial' and fecha_final<='$fecha_final';");
        for ($i = 1; $i <= $dias; ++$i) {
            $fecha_final = strtotime('+1 day', strtotime($fecha_inicial));
            $fecha_final = date('Y-m-d', $fecha_final);
            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_inicio<='$fecha_inicial 16:30:00' AND fecha_final<='$fecha_inicial 16:30:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
                $this->db->insert('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }

            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_inicio<='$fecha_inicial 19:00:00' AND fecha_final<='$fecha_inicial 19:00:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
                $this->db->insert('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }

            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 19:00:00' AND fecha_inicio<'$fecha_final 00:00:00'  AND fecha_final<='$fecha_final 00:0:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
                $this->db->insert('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }

            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_inicio<='$fecha_inicial 16:30:00' AND fecha_final<='$fecha_inicial 19:00:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => "$fecha_inicial 16:30:00", 'usuario_creacion' => $usuario);
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => "$fecha_inicial 16:30:00",
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
                $this->db->insert_batch('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }


            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_inicio<='$fecha_inicial 16:30:00' AND fecha_final<'$fecha_final 00:00:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => "$fecha_inicial 16:30:00", 'usuario_creacion' => $usuario);
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => "$fecha_inicial 16:30:00",
                    'fecha_final' => "$fecha_inicial 19:00:00", 'usuario_creacion' => $usuario);
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => "$fecha_inicial 19:00:00",
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
                $this->db->insert_batch('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }


            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_inicio<='$fecha_inicial 19:00:00' AND fecha_final<'$fecha_final 00:00:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => "$fecha_inicial 19:00:00", 'usuario_creacion' => $usuario);

                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => "$fecha_inicial 19:00:00",
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
				
                $this->db->insert_batch('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }

            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 19:00:00' AND fecha_final<'$fecha_final 00:00:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);
                $this->db->insert('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }

            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 19:00:00' and fecha_final<='$fecha_final 10:00:00' AND cerrado=0;";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_final' => "$fecha_final 00:00:00", 'usuario_creacion' => $usuario);

                ++$max;
                $row[] = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => "$fecha_final 00:00:00",
                    'fecha_final' => $value['fecha_final'], 'usuario_creacion' => $usuario);

                $this->db->insert_batch('diario', $row);
                $this->db->update('diario_ingresos', array('cerrado' => 1), array('id' => $value['id']));
            }
            //date("w", strtotime('2018-11-26'));
            $fecha_inicial = $fecha_final;
        }

        $fecha_inicial = $fecha_original;
        
        $query ="UPDATE  diario set cerrado=1,hora_100=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where CAST(fecha_inicio AS DATE) IN (SELECT fecha FROM dias_festivos WHERE fecha>='$fecha_inicial' AND fecha<='$fecha_final');";
        $this->db->query($query); 
        for ($i = 1; $i <= $dias; ++$i) {
            $fecha_final = strtotime('+1 day', strtotime($fecha_inicial));
            $fecha_final = date('Y-m-d', $fecha_final);
            $fecha_dia=date("w", strtotime($fecha_inicial));
            if($fecha_dia==0 || $fecha_dia==6)
            {
                $query = "UPDATE  diario set cerrado=1,hora_100=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_inicio<='$fecha_final 00:00:00' AND cerrado=0;";
                $this->db->query($query);    
            }
            $query = "UPDATE  diario set cerrado=1,hora_50=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_inicio<'$fecha_inicial 19:00:00' AND cerrado=0;";
	    $this->db->query($query);
            $query = "UPDATE  diario set cerrado=1,hora_25=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_inicio<='$fecha_final 00:00:00' AND cerrado=0;";
            $this->db->query($query);
            $query = "UPDATE  diario set cerrado=1,hora_normales=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_final<='$fecha_inicial 16:30:00' AND cerrado=0;";
            $this->db->query($query); 
            $fecha_inicial = $fecha_final;
        }
      // hora_25=,hora_50=0, hora_normales=0, hora_100=
                
        
       $data[]=array('numero'=>1);
       return $data; 
    }

    function reporte($fecha_inicio, $fecha_final) {
        $data = $this->db->query(
                'SELECT diario.cedula,
tb_usuario.usuario,
tb_usuario.Nombres,
tb_usuario.Apellidos,
time_format(diario.fecha_inicio, "%Y-%m-%d") AS fecha,
time_format(diario.fecha_inicio, "%H:%i") AS horai,
time_format(diario.fecha_final, "%H:%i") AS horaf,
time_format(diario.hora_normales, "%H") AS horas,
time_format(diario.hora_normales, "%i") AS minutos,
diario.hora_normales,
diario.hora_ocupadas,
diario.hora_validas,
diario.hora_laboradas,
diario.hora_25,
diario.hora_50,
diario.hora_100,
diario.viaje,
diario.total_horas 
FROM diario 
INNER JOIN tb_usuario ON
diario.cedula=tb_usuario.cedula'."
WHERE diario.fecha_inicio>='$fecha_inicio' 
AND diario.fecha_final<='$fecha_final' ORDER BY diario.cedula ASC, diario.fecha_inicio ASC;")->result();
        $datos = null;
        foreach ($data as $valor) {
            $datos[$valor->usuario][] = $valor;
        }
        return $datos;
    }

    function fechas() {
        $row = $this->db->query("SELECT MAX(id) as id FROM diario")->row();
        $max = 0;
        if (isset($row)) {
            $max = $row->id;
        }
        $fecha_inicial = '2018-08-01';
        for ($i = 1; $i <= 30; ++$i) {
            $fecha_final = strtotime('+1 day', strtotime($fecha_inicial));
            $fecha_final = date('Y-m-d', $fecha_final);
            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_inicio<'$fecha_final 00:00:00';";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $row = null;
                ++$max;
                $row = array('id' => $max, 'id_diario' => $value['id'], 'cedula' => $value['cedula'], 'fecha_inicio' => $value['fecha_inicio'],
                    'fecha_inicio' => $value['fecha_inicio'], 'usuario_creacion' => '0');
                $this->db->insert('diario', $row);
            }
            $fecha_inicial = $fecha_final;
        }
        $fecha_inicial = '2018-08-01';
        for ($i = 1; $i <= 30; ++$i) {
            $fecha_final = strtotime('+1 day', strtotime($fecha_inicial));
            $fecha_final = date('Y-m-d', $fecha_final);
            $array = null;
            $query = "SELECT * FROM diario_ingresos WHERE fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_final<'$fecha_final 00:00:00';";
            $array = $this->db->query($query)->result_array();
            foreach ($array as $value) {
                $data = array('fecha_final' => $value['fecha_final']);
                $this->db->where('id_diario', $value['id']);
                $this->db->update('diario', $data);
            }
            $fecha_inicial = $fecha_final;
        }
        $query = "SELECT id,id_diario,fecha_inicio,fecha_final,cedula FROM diario WHERE fecha_final is NULL;";
        $array = $this->db->query($query)->result_array();
        print_r($array);
        foreach ($array as $value) {
            $this->db->where(array('id' => $value['id'], 'id_diario' => $value['id_diario']));
            $fecha = explode(' ', $value['fecha_inicio']);
            $this->db->update('diario', array('fecha_final' => $fecha[0] . ' 23:59:59.000000'));
            $principal = $this->db->get_where('diario_ingresos', array('id' => $value['id_diario']))->row_array();
            $fecha = explode(' ', $principal['fecha_final']);
            ++$max;
            $row = array('id' => $max, 'id_diario' => $value['id_diario'], 'cedula' => $value['cedula'], 'fecha_inicio' => $fecha[0] . ' 00:00:01.000000',
                'fecha_final' => $principal['fecha_final'], 'usuario_creacion' => '0');
            $this->db->insert('diario', $row);
        }
        $fecha_inicial = '2018-08-01';
        for ($i = 1; $i <= 30; ++$i) {
            $fecha_final = strtotime('+1 day', strtotime($fecha_inicial));
            $fecha_final = date('Y-m-d', $fecha_final);
            $query = "UPDATE  diario set hora_normales=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_final<'$fecha_inicial 16:30:00' AND cerrado=0;";
            $this->db->query($query);
            /*  $query = "UPDATE  diario set hora_50=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_inicio<'$fecha_inicial 19:00:00' AND cerrado=0;";
              $this->db->query($query);
              $query = "UPDATE  diario set hora_25=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,fecha_final)) where fecha_inicio>='$fecha_inicial 19:00:00' AND fecha_inicio<='$fecha_inicial 23:59:59' AND cerrado=0;";
              $this->db->query($query);
              $query = "UPDATE  diario set hora_50=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,'$fecha_inicial 16:30:00')) where fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_final>'$fecha_inicial 16:30:00' AND fecha_final<='$fecha_inicial 23:59:59'  AND cerrado=0;";
              $this->db->query($query);
              $query = "UPDATE  diario set hora_25=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, '$fecha_inicial 16:30:00','$fecha_inicial 19:00:00')) where fecha_inicio>='$fecha_inicial 00:00:00' AND fecha_final>'$fecha_inicial 19:00:00' AND fecha_final<='$fecha_inicial 23:59:59'  AND cerrado=0;";
              $this->db->query($query);
              $query = "UPDATE  diario set hora_25=SEC_TO_TIME(TIMESTAMPDIFF(SECOND, fecha_inicio,'$fecha_inicial 19:00:00')) where fecha_inicio>='$fecha_inicial 16:30:00' AND fecha_final>'$fecha_inicial 19:00:00' AND fecha_final<='$fecha_inicial 23:59:59'  AND cerrado=0;";
              $this->db->query($query); */
            $fecha_inicial = $fecha_final;
            $dia = date('w', strtotime($fecha_final));
            echo $dia . '<br/>';
        }
    }

}
