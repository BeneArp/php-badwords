<?php 

    $world = $_POST['world'];
    $text = $_POST['text'];

    $new_text = str_replace($world, '***', $text);

    $text_lenght = strlen($text);
    $new_text_lenght = strlen($new_text);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>Il tuo testo è: <?php echo $text ?> </p>
    <span>Contiene <?php echo $text_lenght ?> caratteri</span>

    <p>Il nuovo testo è: <?php echo $new_text ?> </p>
    <span>Contiene <?php echo $new_text_lenght ?>caratteri</span>

</body>
</html>