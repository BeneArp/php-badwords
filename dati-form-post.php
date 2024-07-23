<?php 

    $world = $_POST['world'];
    $text = $_POST['text'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <span>La tua parola è: <?php echo $world ?></span>
    <p>Il tuo testo è: <?php echo $text ?> </p>

</body>
</html>