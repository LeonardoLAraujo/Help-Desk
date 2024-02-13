<?php

    session_start();

    //Essa sessão criada, fica disponível, para os outros scripts php tbm
    $_SESSION['x'] = "Oi, sou um valor de sessão!";

    print_r($_SESSION);
    /*
    Global Variável GET
    print_r($_GET);
    echo "<br>";
    echo $_GET['email'];
    echo "<br>"; 
    echo $_GET['senha'];

    Global Variável POST
    print_r($_POST);
    echo "<br>";
    echo $_POST['email'];
    echo "<br>"; 
    echo $_POST['senha'];
    **/

    //Verifica se o usuario foi autenticado
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Adiministrativo', 2 => 'Usuário');

    //Usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234567', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;   
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo "Usuário Autenticado";
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else{
        header('Location: index.php?login=error');
        $_SESSION['autenticado'] = 'NAO';
    }
?>