<?php
    $tab = scandir('tweets');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Les Tweets</h2>
    <a href='http://localhost/Php/tweetphp/creat-tweet.php'>create tweet</a>
    <?php foreach($tab as $file){
        
        if(is_dir($file)){continue;}
        
        include_once './CreateView.php';
        $createDiv = new CreateView(file_get_contents('tweets/'.$file));
        echo $createDiv->divStruc();
    ?>
    <?php } ?>
</body>
</html>