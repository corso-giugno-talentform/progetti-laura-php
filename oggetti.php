<?php


require 'classe.php';



//nuova istanza della classe Person


$studente1 = new Person('laura');


//array di oggetti o collection


$students=[new Person('laura'),
new Person('pippo'),
new Person('pluto'),];



  foreach ($students as $student)

    {
$student->sayHello();
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
