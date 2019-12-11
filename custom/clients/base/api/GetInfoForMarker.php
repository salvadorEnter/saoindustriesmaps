<?php
/**
 * Created by Salvador Lopez.
 * User: salvador.lopez@enterconecta.com
 * Date: 13/08/19
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetInfoForMarker extends SugarApi
{

    /**
     * Registro de todas las rutas para consumir los servicios del API
     *
     */
    public function registerApiRest()
    {
        return array(
            //GET
            'retrieve' => array(
                //request type
                'reqType' => 'GET',
                'noLoginRequired' => true,
                //endpoint path
                'path' => array('GetInfoForMarker','?'),
                //endpoint variables
                'pathVars' => array('method','id_record'),
                //method to call
                'method' => 'getInfoForInfowindow',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Método que regresa la información relacionada con el registro para poblar de información el infowindow desplegado',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),

            'retrieveAllAccounts' => array(
                //request type
                'reqType' => 'GET',
                'noLoginRequired' => true,
                //endpoint path
                'path' => array('GetAccountsForMap'),
                //endpoint variables
                'pathVars' => array('method'),
                //method to call
                'method' => 'getAllAccountsMap',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Obtiene todas las cuentas, con la información necesario para mostrar en sección de detalle dentro del mapa en app móvil',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),


        );

    }

    /**
     * Método que regresa información para poblar contenido de Infowindow
     *
     * @param array $api
     * @param array $args Array con los parámetros enviados para su procesamiento
     * @return array $info Array con información relacionada al registro
     */
    public function getInfoForInfowindow($api, $args){

      $id_record=$args['id_record'];
      $info=array();

      $select="SELECT 
	a.id idCuenta,
	a.name cuenta,
    a.billing_address_street calle,
    a.billing_address_city ciudad,
    a.billing_address_state estado,
    a.billing_address_postalcode cp,
    a.billing_address_country pais,
    a.assigned_user_id id_user,
    ac.rate_c estrellas,
    concat(u.first_name,' ',u.last_name) as nombre_completo_usuario,
    u.user_name nombre_usuario,
    u.department depto,
    u.reports_to_id reporta_id,
    (select concat(usr.first_name,' ',usr.last_name) from users usr WHERE usr.id=u.reports_to_id) as reporta,
    t.name etiqueta
FROM
    accounts a
inner join accounts_cstm ac on a.id=ac.id_c
inner join users u ON a.assigned_user_id=u.id
left join tag_bean_rel tb on a.id=tb.bean_id and tb.deleted=0
left join tags t on tb.tag_id=t.id
WHERE a.id='{$id_record}';";
        
        $info['infoCuenta']['domicilio']=array();
        $result = $GLOBALS['db']->query($select);
        $total_resultado=$result->num_rows;
        $last=0;
        if($total_resultado >0){

            while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
                $last++;
                if($last==$total_resultado){

                    //Información general de la cuenta
                    $info['infoCuenta']['domicilio']['calle']=$row['calle'];
                    $info['infoCuenta']['domicilio']['ciudad']=$row['ciudad'];
                    $info['infoCuenta']['domicilio']['estado']=$row['estado'];
                    $info['infoCuenta']['domicilio']['cp']=$row['cp'];
                    $info['infoCuenta']['domicilio']['pais']=$row['pais'];

                    //Información del usuario asignado a la cuenta
                    $info['usuario']['nombre']=$row['nombre_completo_usuario'];
                    $info['usuario']['user_name']=$row['nombre_usuario'];
                    $info['usuario']['depto']=$row['depto'];
                    $info['usuario']['reporta_nombre']=$row['reporta'];
                    $info['usuario']['reporta_id']=$row['reporta_id'];

                    //Información de los pedidos
                    $info['pedidos'][]='';

                    //Información del resumen de los pedidos
                    $info['resumen'][]='';
                    $info['infoCuenta']['estrellas'][]=$row['estrellas'];

                }
                //Agregando el nombre de etiquetas para mostrar imágenes de sao indutries en infowindow
                $info['infoCuenta']['etiquetas'][]=$row['etiqueta'];
            }

        }else{
            //Información general de la cuenta
            $info['infoCuenta']['domicilio']['calle']='';
            $info['infoCuenta']['domicilio']['ciudad']='';
            $info['infoCuenta']['domicilio']['estado']='';
            $info['infoCuenta']['domicilio']['cp']='';
            $info['infoCuenta']['domicilio']['pais']='';

            $info['infoCuenta']['etiquetas']='';
            $info['infoCuenta']['estrellas'][]='';

            //Información del usuario asignado a la cuenta
            $info['usuario']['nombre']='';
            $info['usuario']['user_name']='';
            $info['usuario']['depto']='';
            $info['usuario']['reporta_nombre']='';
            $info['usuario']['reporta_id']='';

            //Información de los pedidos
            $info['pedidos'][]='';

            //Información del resumen de los pedidos
            $info['resumen'][]='';

        }

        
        return $info;
    }

    public function getAllAccountsMap($api, $args){

        $info=array();

        $selectAll="SELECT 
    a.id id,
    a.name name,
    a.account_type,
    ac.gps_latitud_c,
    ac.gps_longitud_c,
    ac.quick_contact_c,
    ac.business_type_c,
    ac.visit_c,
    ac.rate_c,
    ac.photography_c,
    a.billing_address_street calle,
    a.billing_address_city ciudad,
    a.billing_address_state estado,
    a.billing_address_postalcode cp,
    a.billing_address_country pais,
    a.assigned_user_id id_user,
    concat(u.first_name,' ',u.last_name) as nombre_completo_usuario,
    u.user_name nombre_usuario,
    u.department depto,
    u.reports_to_id reporta_id,
    (select concat(usr.first_name,' ',usr.last_name) from users usr WHERE usr.id=u.reports_to_id) as reporta
FROM
    accounts a
    inner join accounts_cstm ac ON a.id=ac.id_c
inner join users u ON a.assigned_user_id=u.id
WHERE (ac.gps_latitud_c is not null or  ac.gps_latitud_c != '' ) and (ac.gps_longitud_c is not null or ac.gps_longitud_c !=' ');";

        $info['records']=array();
        $result = $GLOBALS['db']->query($selectAll);
        $total_resultado=$result->num_rows;
        $last=0;
        if($total_resultado >0){

             while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

                array_push($info['records'], $row);

             }
        }

        return $info;
    }

}

?>
