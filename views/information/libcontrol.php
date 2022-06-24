<?php
function Regclie($session){
      
    $server     = 'server160.tecnoweb.net';
	$_SESSION['server_nube']=$server;
	$user      = 'platcon1_SUPERVISOR';
	$password     = 'Pl@tcont2018'; 
	$database = 'platcon1_Platdb';    

    /*$server   = '192.168.1.99';
    $user     = 'SA';
    $password = 'sistema'; 
    $database = 'platdb'; */


       
    $info     = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $_SESSION['_webInfoNube'] = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn= sqlsrv_connect($server, $info);   
    $query    = sqlsrv_query($cnn,"select n_docu,l_clie,f_venc,l_inst,l_cons,l_password,k_modu,k_mlte,c_empr,users_sql,passw_sql from clientes where c_session='$session' ");

    if ($query === false) { 
        die(print_r(sqlsrv_errors(), true));}
    $C        = array();
    $I        = 0;

    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }
    sqlsrv_close($cnn);    
    return $C;    
}



function UpdatePaswword($c_empr,$user,$password){
    $sql="update clientes set l_password='$password' where c_empr='$c_empr' and c_session='$user' ";
    //$server   = '192.168.1.99';
	$server     = 'server160.tecnoweb.net';
    $info     = $_SESSION['_webInfoNube'];
    $cnn      = sqlsrv_connect($server, $info);
    $query = sqlsrv_query($cnn,$sql);
    if ($query === false) {
        die(print_r(sqlsrv_errors(), true));
        return false;
    }   
    //echo $sql;
    return true; 
    
}
function fin_update_creditos_at($dt_all){
    $lent=count($dt_all);
    if ($lent!=0) {
        $sql="";
        for ($i=0; $lent>$i ; $i++) {             
            $val="s_mora=s_mora+'".$dt_all[$i]['s_mora']."',s_desc=s_desc+'".$dt_all[$i]['s_desc']."', s_amor=s_amor+'".$dt_all[$i]['s_amor']."', k_stad='".$dt_all[$i]['k_stad']."' ";
            $where="where  c_sucu+n_cred='".$dt_all[$i]['id_cred']."' ";
            $sql.="update  Fin_creditos set  ". $val.$where." ";
      }
        $usu      = $_SESSION['_usu'];
        $cont     = $_SESSION['_cont'];
        $linea    = $_SESSION['_linea'];
        $database = $_SESSION['_database'];
        $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
        $cnn      = sqlsrv_connect($linea, $info);
        $query = sqlsrv_query($cnn,$sql);
        if ($query === false) {
              die(print_r(sqlsrv_errors(), true));
            return false;
        }   
            //echo $sql;
            return true; 
 
    }else{
      return true;  
    } 
 
}






function Platdetorg($c_empr){
    $cnn=sqlsrv_connect($_SESSION['server_nube'],$_SESSION['info_nube']);
    $query    = sqlsrv_query($_SESSION['cnn_nube'], "select * from detorg where k_db='1' and c_empr='$c_empr' ");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }

    return $C;

}

function Platorga($c_empr){
    $cnn=sqlsrv_connect($_SESSION['server_nube'],$_SESSION['info_nube']);    
    $query    = sqlsrv_query($cnn, "select * from organizacion where c_empr='$c_empr'");
    $C        = array();
    $I        = 0;
    if ($query === false) {
        die(print_r(sqlsrv_errors(), true));
    } 
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }
    return $C;
}

function Platvalusu(){
    $usu1     = $_SESSION['_usu'];
    $cnn=sqlsrv_connect($_SESSION['server_nube'],$_SESSION['info_nube']);   
    $query    = sqlsrv_query($_SESSION['cnn_nube'], "select * from Seguridad where  c_empr='".$_SESSION['_codempr']."' and usuario='$usu1'");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    $veri = count($C);
    if ($veri == 1) {

        return true;

    } else {
        return false;

    }

}

function existedatamaster(){
    $user     = $_SESSION['_loginSQL'];
    $password = $_SESSION['_passwordSQL'];
    $server   = $_SESSION['_server'];      
    $database = "Master";
    $info     = array("Database" => $database, "UID" => $user, "PWD" =>  $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
   $cnn  = sqlsrv_connect($server, $info); 
    $query    = sqlsrv_query($cnn, "select name from sys.databases where name='S_Master'");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    $veri = count($C);
    if ($veri == 1) {

        return true;

    } else {
        return false;

    }
}

function detorg(){
    $user     = $_SESSION['_loginSQL'];
    $password = $_SESSION['_passwordSQL'];
    $server   = $_SESSION['_server'];
    $database = "S_Master";
    $info     = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    $query    = sqlsrv_query($cnn, "select * from detorg where k_db='1' ");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }

    return $C;

}

function organizacion(){
    $user     = $_SESSION['_loginSQL'];
    $password = $_SESSION['_passwordSQL'];
    $server   = $_SESSION['_server'];
    $database = "S_Master";
    $info     = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    
    $query    = sqlsrv_query($cnn, "select * from organizacion order by  c_empr");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }
    return $C;
}

/*
function seguridad(){
    $user     = $_SESSION['_loginSQL'];
    $password = $_SESSION['_passwordSQL'];
    $server   = $_SESSION['_server'];
    $database = "S_Master";
    $info     = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    
    $query    = sqlsrv_query($cnn, "select * from seguridad");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    return $C;

}*/
function ValUsuario($database,$usu,$passd){   
    $user     = $_SESSION['_loginSQL'];
    $password = $_SESSION['_passwordSQL'];
    $server   = $_SESSION['_server'];   
    $info     = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);  
   
    $query    = sqlsrv_query($cnn, "select l_pass,c_sucu,c_alma,k_carg,id_carg,n_sero from a0_Seguridad where usuario='$usu'");
    $I        = 0;
    $C        = array();
     if ($query === false) { 
        die(print_r(sqlsrv_errors(), true));}
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }

    $veri = count($C);
    if ($veri == 1) {                    
        if ($C[0]['l_pass']==$passd) {            
            $_SESSION['_usersistem']=$usu;
            $_SESSION['_c_sucu']=$C[0]['c_sucu'];
            $_SESSION['_c_alma']=$C[0]['c_alma'];
            $_SESSION['_n_sero'] = $C[0]['n_sero'];
            $_SESSION['_id_carg'] = $C[0]['id_carg'];
            $_SESSION['_k_carg'] = $C[0]['k_carg'];           
             return true;
        }else{
            return false;
        }

    }else {
        return false;
    }

}



function dataorganizacion()
{
    session_start();
    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $linea    = $_SESSION['_linea'];   
    $database = $_SESSION['_database'];
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($linea, $info);
    $query    = sqlsrv_query($cnn, "select * from organizacion order by  c_empr");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    return $C;

}

/*
function Regclie($session){
    $server     = 'server160.tecnoweb.net';   
    $user      = 'platcon1_supervsor';
    $password     = 'Pl@tcont2018'; 
    $database = 'platcon1_Platdb';
    $info     = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $_SESSION['cnn_nube'] =sqlsrv_connect($server, $info);
    $cnn      = sqlsrv_connect($server, $info);
    $query    = sqlsrv_query($cnn,"select n_docu,l_clie,f_venc,l_inst,l_cons,l_password,k_modu,k_mlte,c_empr from clientes where c_session='$session' ");

    if ($query === false) {
        die(print_r(sqlsrv_errors(), true));}
    $C        = array();
    $I        = 0;

    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }
    sqlsrv_close($cnn);    
    return $C;    
}



function testconect($server){     
    
    $server     = 'server160.tecnoweb.net';     
    $user      = 'platcon1_supervsor';
    $password     = 'Pl@tcont2018'; 
    $database = 'platcon1_Platdb';
   
    $login     = $_SESSION['_login']; 
    
    $info = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn  = sqlsrv_connect($server, $info);   
    //con esta consulta verificamos que el usuario supervisor hay acambiado la contraseña por defecto que es 2017
    $query=sqlsrv_query($_SESSION['cnn_nube'], "if exists(select n_docu,l_clie,f_venc,l_inst,l_cons,l_password from clientes where c_session='$login' and l_cons='2017')
                                select 1 as k_cont
                                else
                                select 0 as k_cont");    
    $datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    return $datos['k_cont'];
         
}


function Platdetorg()
{
    $server     = 'server160.tecnoweb.net';    
    $user      = 'platcon1_supervsor';
    $password     = 'Pl@tcont2018'; 
    $database = 'platcon1_Platdb';

    $info = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    $query    = sqlsrv_query( $_SESSION['cnn_nube'], "select * from detorg where k_db='1' ");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }

    return $C;

}

function Platorga($c_empr)
{
    $server     = 'server160.tecnoweb.net';     
    $user      = 'platcon1_supervsor';
    $password     = 'Pl@tcont2018'; 
    $database = 'platcon1_Platdb';

    $info = array("Database" => $database, "UID" => $user, "PWD" => $password, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");

    $cnn      = sqlsrv_connect($server, $info);
    
    $query    = sqlsrv_query($_SESSION['cnn_nube'], "select * from organizacion where c_empr='$c_empr'");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }
    return $C;
}

function Platvalusu()
{
    $usu1     = $_SESSION['_usu'];
    $server     = 'server160.tecnoweb.net';    
    $user      = 'platcon1_supervsor';
    $password     = 'Pl@tcont2018'; 
    $database = 'platcon1_Platdb';
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);  
   
    $query    = sqlsrv_query( $_SESSION['cnn_nube'], "select * from Seguridad where  c_empr='".$_SESSION['_codempr']+"' and usuario='$usu1'");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    $veri = count($C);
    if ($veri == 1) {

        return true;

    } else {
        return false;

    }

}




function existedatamaster(){

    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $server   = $_SESSION['_server'];      
    $database = "Master";
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
   $cnn  = sqlsrv_connect($server, $info); 
    $query    = sqlsrv_query($cnn, "select name from sys.databases where name='S_Master'");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    $veri = count($C);
    if ($veri == 1) {

        return true;

    } else {
        return false;

    }
}




function detorg()
{
    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $server   = $_SESSION['_server'];
    $database = "S_Master";
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    $query    = sqlsrv_query($cnn, "select * from detorg where k_db='1' ");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
        $C[$I] = $datos;
        $I++;
    }

    return $C;

}

function organizacion()
{
    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $server   = $_SESSION['_server'];
    $database = "S_Master";
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    
    $query    = sqlsrv_query($cnn, "select * from organizacion order by  c_empr");
    $C        = array();
    $I        = 0;
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }
    return $C;
}


function seguridad()
{
    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $server   = $_SESSION['_server'];
    $database = "S_Master";
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);
    
    $query    = sqlsrv_query($cnn, "select * from seguridad");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    return $C;

}
function ValUsuario()
{
    $usu1     = $_SESSION['_usu'];
    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $server   = $_SESSION['_server'];
    $database = "platcon1_NEWCPT";
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($server, $info);  
   
    $query    = sqlsrv_query($cnn, "select * from Seguridad where usuario='$usu1'");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    $veri = count($C);
    if ($veri == 1) {

        return true;

    } else {
        return false;

    }

}



function dataorganizacion()
{
    session_start();
    $usu      = $_SESSION['_usu'];
    $cont     = $_SESSION['_cont'];
    $linea    = $_SESSION['_linea'];   
    $database = $_SESSION['_database'];
    $info     = array("Database" => $database, "UID" => $usu, "PWD" => $cont, 'ReturnDatesAsStrings' => true, "CharacterSet" => "UTF-8");
    $cnn      = sqlsrv_connect($linea, $info);
    $query    = sqlsrv_query($cnn, "select * from organizacion order by  c_empr");
    $I        = 0;
    $C        = array();
    while ($datos = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {

        $C[$I] = $datos;
        $I++;
    }

    return $C;

}
*/