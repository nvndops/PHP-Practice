<?php

class User {

}

$classes = get_declared_classes();

foreach ($classes as $class) {
    echo $class . "<br>";
}

$date = new DateTime();

$timeZone = new DateTimeZone('American/New_York');

$date->setTimezone($timeZone);

echo $date->getTimezone()->getName();