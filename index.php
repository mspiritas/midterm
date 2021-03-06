<?php
require('model/database.php');
require('model/vehicles_db.php');
require('model/makes_db.php');
require('model/types_db.php');
require('model/classes_db.php');

$year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
$model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
$class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
$make = filter_input(INPUT_POST, 'make', FILTER_SANITIZE_STRING);

if ($make) {

} else if ($type) {

} else if ($class) {

} else {
    
}