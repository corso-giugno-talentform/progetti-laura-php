<?php


class Company

{
//attributi mettere protected di base


public $name;
public $state;
public $ndip;

//il costruttore deve essere sempre pubblico 

public function __construct($name,$state,$ndip)

{
    $this->name=$name;
    $this->state=$state;
    $this->ndip=$ndip;



}

public function Print()
{

  if ($this->ndip>0)

    {

 echo "L'ufficio ". $this->name. ' con sede in ' . $this->state .' ha ben '. $this->ndip . ' dipendenti<br>';
    }

    else
{

    echo "L’ufficio ". $this->name . ' con sede in ' . $this->state . ' non ha dipendenti<br>';
}
        



}



}


/*public function getAttribute ($key,$value)

{

echo $this->firstname;
}

}*/


?>