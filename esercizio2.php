<?php

for ($i=1;$i<=15;$i++)
{

    if (mod($i,3) && mod($i,5))

        {

echo 'TALENTFORM<br>';

        }



    else if (mod($i,3))

{

    echo 'PHP';

}

else if (mod($i,5))

{

 echo 'JAVASCRIPT';

}

else
{

echo $i;

}



}

function mod($num,$div1,$div2=0)

{

if ($div2==0)

{

                if (($num%$div1)==0)
            {

                return true;

            }

            else
            {

                return false;
            }

        }


elseif  (($num%$div1)==0  && ($num%$div2)==0)

{

                return true;

            }

            else
            {

                return false;
            }
    



}


$persons = [
  [
    'name' => 'Marco',
    'age' => 18,
  ],
  [
    'name' => 'Vanessa',
    'age' => 12,
  ],
  [
    'name' => 'Jack',
    'age' => 34,
  ],
  [
    'name' => 'Maria',
    'age' => 55,
  ],
];

foreach ($persons as $person)

    {
if (maxeta($person['age']))

    {

echo $person['name'] . ' maggiorenne<br>';
    }

    else
    {
        
        echo $person['name'] . ' minorenne' .'<br>';
    
    }

    }


    function maxeta($eta)

    {

        if ($eta>=18)

            {
return true;


            }

            else
            {

                return false;
            }


    }


    $max=10;
    $str='';

    for ($i=0;$i<=$max;$i++)

        {



if (pd($i))
{

   
    //pari
$str=$str . $i .',';

}

else
{

    //dispari

 echo $i.',';



}






        }

echo '<br>'.$str;


        function pd($a)

        {

            if (($a%2)==0)

                {

                    return true;
                }
                else
                {

                    return false;
                }
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