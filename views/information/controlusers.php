<?php
date_default_timezone_set('America/Lima');
include ('libcontrol.php');
session_start();
$accion =  $_POST['accion'];
if (isset($accion) and !empty($accion) and $accion == 'login') {
    $status=200;
    $error='';
    $ref='';
    $result=[];

    $user =  trim($_POST['login']);
    $password =  trim($_POST['password']);
    $datos=Regclie($user);
    $veri = count($datos);
    if ($veri == 1){       
        if (password_verify($password, $datos[0]['l_password'])) {
            $_SESSION['_webState']=1;
            $_SESSION['_webLogin']=$user;
            $_SESSION['_webCliente']=$datos[0]['l_clie'];
            $_SESSION['_webRuc']=$datos[0]['n_docu'];
            $_SESSION['_webCodigo']=$datos[0]['c_empr'];
           $ref="/change";
        }else{
        $status=404;
        $error='Usuario y/o Contraseña es Incorrecto!'; 
        }
    }else{
        $status=404;
        $error='Usuario y/o Contraseña es Incorrecto!'; 
    }

    $result['status']=$status;
    $result['error']=$error;
    $result['ref']=$ref;
   echo json_encode($result);
    // $_SESSION['_estado'] == quiere decir si esta logeado corrrecto se dirigira bien a seleccionar empresa
    // 1 ingreso correcto
    // 2 password es incorrecto     
    // 3 existe 2 usuarios con el mismo
    // 4 no existe ningun correo con este nombre
}else if (isset($accion) and !empty($accion) and $accion == 'change-login') {
    $status=200;
    $error='';
    $ref='';
    $result=[];

   
    $oldpassword =  trim($_POST['oldpassword']);
    $newpassword =  trim($_POST['newpassword']);
    $datos=Regclie($_SESSION['_webLogin']);
    $veri = count($datos);
    if ($veri == 1){       
        if (password_verify($oldpassword, $datos[0]['l_password'])) { //password_verify($pass, $passHash)

            if (UpdatePaswword( $_SESSION['_webCodigo'],$_SESSION['_webLogin'],password_hash($newpassword,PASSWORD_BCRYPT))==true){
                    $_SESSION['_webState']=0;
                    $_SESSION['_webCliente']='';
                    $_SESSION['_webRuc']='';
                    $_SESSION['_webCodigo']='';
                $ref="/login";

            }else{
                $status=404;
                $error='Error al Cambiar Contraseña Intente Nuevamente, si el Problema Persiste Contactese con el Administrador!'; 
            }
           $ref="/change";
        }else{
        $status=404;
        $error='Usuario y/o Contraseña es Incorrecto!'; 
        }
    }else{
        $status=404;
        $error='Usuario y/o Contraseña es Incorrecto!'; 
    }

    $result['status']=$status;
    $result['error']=$error;
    $result['ref']=$ref;
   echo json_encode($result);
    // $_SESSION['_estado'] == quiere decir si esta logeado corrrecto se dirigira bien a seleccionar empresa
    // 1 ingreso correcto
    // 2 password es incorrecto     
    // 3 existe 2 usuarios con el mismo
    // 4 no existe ningun correo con este nombre
}

   






