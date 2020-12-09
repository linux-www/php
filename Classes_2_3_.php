<?php

require 'Person.php';

$person = new Person;

$person->name = 'Linux';

$person->age = 20;

echo $person->name . ' is ' . $person->age . ' years old ' ;
