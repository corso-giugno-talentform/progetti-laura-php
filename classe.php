<?php


class Person

{
//attributi mettere protected
protected $firstname;

//il costruttore deve essere pubblico 

public function __construct($a)

{
    $this->firstname=$a;



}

public function sayHello()
{

  

         echo 'ciao mi chiamo '. $this->firstname;



}


public function getAttribute ($key,$value)

{

echo $this->firstname;
}

}


?>