<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//si no existe la función invierte_date_time la creamos
if(!function_exists('validar_acceso'))
{
    //formateamos la fecha y la hora, función de cesarcancino.com
 function validar_acceso($user,$grupo,$grupo_necesario)
 {
 $numero=false;
foreach ($grupo as $clave => $valor){
				if($grupo_necesario==$valor['id']){
					$numero=true;
				};
			}
	if($numero==false || (empty($user) && empty($user->username))){
			$numero=false;
	}			
 return $numero;
 }
}
 
