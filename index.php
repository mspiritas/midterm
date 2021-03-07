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

    $vehicle_id = filter_input(INPUT_POST, 'vehicle_id', FILTER_VALIDATE_INT);
    if (!$vehicle_id) {
        $vehicle_id = filter_input(INPUT_GET, 'vehicle_id', FILTER_VALIDATE_INT);
    }

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'list_vehicles_by_price';
        }
    }

    switch($action) {
        case "list_vehicles_by_price":
            $vehicles = get_vehicles_by_price();
            include('view/vehicle_list.php');
            break;
        case "list_vehicles_by_year":
            $vehicles = get_vehicles_by_year();
            include('view/vehicle_list.php');
            break;
        
        default:
            $vehicles = get_vehicles_by_price();
            $items = get_vehicles_by_price($vehicle_id);
            include('view/vehicle_list.php');
    }
    