<?php

    session_start();

    //Substituindo o # por -
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST);

    /**
     * Abre o arquivo e adiciona coisas lá dentro
     * para abrir ele e editar, utiliza o "a"
     * Caso o arquivo não exista, ele vai criar
     */
    $arquivo = fopen('arquivo.txt', 'a');

    //Precisamos formata o array para escrever dentro do arquivo
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //PHP_EOL - Indica o final da linha, no proximo texto, vai ser salvo na proxima linha

    //Pegando o arquivo e colocando o texto no final do arquivo
    fwrite($arquivo, $texto);

    //Fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>