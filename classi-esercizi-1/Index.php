<?php


require 'Company.php';



//nuova istanza della classe Person

//Istanzio i 5 Oggetti


//array di oggetti o collection



$companies=[
new Company('Apple','USA',3),
new Company('Barilla','ITA',3),
new Company('Nintendo','JAP',5),
new Company('Nokia','FIN',10),
new Company('Xioami','CHI',0),

];



foreach ($companies as $company)

    {
$company->Print();
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
