<?php

const BUDGET=1000;

$cifra=100;


if ($cifra>1000 )

    {

echo 'LA CIFRA DEVE ESSERE MINORE DI 1000';

    }
else
{

$valore_calcolato=$cifra/3;

echo 'PAGA IN 3 COMODE RATE DA ' .round($valore_calcolato, 2) .' Euro';



}
echo '<br>';

$anno=2020;

$eta=2025-$anno;

if ($eta<0)
    
    {
echo 'ANNO NON VALIDO';

    }

else if ($eta>=0 && $eta<=3)

    {

        echo 'Troppo piccolo per scrivere a macchina. ';
    }

else if ($eta>=4)

    {

        echo 'Il nostro sistema ha calcolato che hai:'. $eta .' anni';
    }


echo '<br>';

$ordinazione='fff';





switch ($ordinazione) {

case 'pizza': 
    $costo=6;
 
    break;

case 'birra':
$costo=3;
    break;

default:
echo 'voce non presente';
$costo=0;

}

if ($costo>0 )

{

echo 'hai ordinato ' . $ordinazione . ' costo '.$costo;

}

$somma=0;
for ($i = 1; $i <= 10; $i++) {
    if (($i%2)==0)

        {
$somma=$i+$somma;

        }
}

echo 'somma ' . $somma;


for ($i = 1; $i <= 30; $i++) {
    if (($i%3)==0)

        {
echo 'PHP,';

        }
else if (($i%5)==0)

        {
echo 'JAVASCRIPT,';

        }

 else if (($i%3)==0 && ($i%5)==0)

        {
echo 'Francesco';

        }
        else
        {
echo $i.',';

        }

}

$arrays = [
  [
    'name' => 'Marco',
    'gender' => 'M',
  ],
  [
    'name' => 'Vanessa',
    'gender' => 'F',
  ],
  [
    'name' => 'Jack',
    'gender' => 'M',
  ],
  [
    'name' => 'Mari*',
    'gender' => '',
  ],
];

foreach ($arrays as $key => $value) {
       //echo "Key: $key => Value: $value\n";

       //echo $value['name']. ' '.$value['gender'] . '<br>';


       if ($value['gender']=='M')
       {

echo 'Buongiorno Sig. ' . $value['name'];

       }
else      if ($value['gender']=='F')
       {

echo 'Buongiorno Sig.ra ' . $value['name'];

       }

    else
{

echo $value['name'] .'ha preferito non specificare.';

}



}

echo sum(3,4);

function sum($a,$b)
{

    return $a+$b;

}

//phpinfo();

$persons=[

['name'=>'pippo','age'=>12],
['name'=>'laura','age'=>48],


];


foreach ($persons as $person)
{



saluta($person['name']);


}

//secondo paramtero facoltativo - valore di default se vuoto

function saluta ($c,$d=0)
{

echo 'ciao '.$c;

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