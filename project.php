<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $phrase = "school of it";
    
    echo strtoupper($phrase);

    echo strtolen($phrase);
    echo $phrase[0];
    echo str_replace("school", "department");
    $phrase [5] = "o";
    echo $phrase;
    ?>

    
</body>
</html>