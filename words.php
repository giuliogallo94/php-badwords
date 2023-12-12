<?php
$paragraph = $_GET['paragraph']
$badword = $_GET['badword'];
$p_length = strlen($paragraph);
$censured = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="paragraph">
        <h1>Il tuo paragrafo:</h1>
        <p><?php echo "$paragraph" ?></p>
        <p>Il paragrafo da te inserito è lungo:
            <?php
            echo $p_length;
            ?>
            caratteri
        </p>
    </div>

    <div class="censored">
        <h1>Il tuo paragrafo censurato:</h1>
        <p><?php echo "$censured" ?></p>
        <p>Il paragrafo da te inserito è lungo:
            <?php
            echo $p_length;
            ?>
            caratteri
        </p>
    </div>
</body>

</html>