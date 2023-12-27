<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //string value output
    $persons = array('Nisal', 'anju', 'nehari');
    echo "my name is " . $persons[0];
    echo "<br>";
    echo "my name is " . $persons[1];
    echo "<br>";
    echo "my name is " . $persons[2];
    echo "<br>";

    //element count
    echo count($persons);
    echo "<br>";
    
    $persons = array('Nisal', 'anju', 'nehari');
    foreach($persons as $person){
        echo "my name is" . $person . "<br>";
    }


    ?>
</body>
</html>