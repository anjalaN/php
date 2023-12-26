<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//while loop
$x = 10;
while($x >=0){
    echo $x;
    echo "<br>";
    $x--;
}
// do while loop
$x = 0;
do{
    echo "hello";
    echo "<br>";
    $x++;
}while($x <= 8);

// for loop
// initialisation varable
//check the condition
//excute the inside statements
//increment or decrement

for($x = 0; $x <= 8; $x++){
    echo $x;
    echo "<br>";
}

//foreach loop - use for array collection
$arr = array("anju", "devin", "wikum");
foreach($arr as $x){
    echo "my name is".$x."<br>";
}


?>
</body>
</html>



