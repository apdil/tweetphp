<?php
    $tweet = $_POST['tweet'];
    $nomfichier = $_POST['nomfichier'];
    echo $tweet.$nomfichier;

    if(!is_dir('tweets')){
        mkdir('tweets');
    }

    $file = fopen('tweets/'.$nomfichier .'.txt', 'w');
    fwrite($file, $tweet);
    fclose($file);
    
    header('location:index.php');
?>