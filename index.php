<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <?php
        $text = 'Questo testo contiene parolacce, come: php, mamp, variabile d\'ambiente';
        $badword = $_GET['badword'];
        $text = str_replace($badword,'***',$text);
    ?>

    <h3>Il testo seguente ha lunghezza <?php echo strlen($text); ?> caratteri</h3>
    <p><?php echo $text; ?></p>

</body>
</html>