<?php

    session_start();

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';  

    echo "<br>";

    //Remover índice do array de sessão, de um em um
    //unset() - Usado para remover o índice
    unset($_SESSION['x']);


    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
 
    //Destruir a variável de sessão de um vez
    //session_destroy() - destroi o array

    session_destroy();
    //Após usar, precisa usar o redirecionamento 

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');
?>