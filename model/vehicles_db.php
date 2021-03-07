<?php

    // Returns all vehicles
    function get_vehicles() {
        global $db;
        $query = 'SELECT * FROM vehicles
                  ORDER BY vehicleID';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    // Gets vehicle name
    function get_vehicle_name($vehicle_id) {
        if (!$vehicle_id) {
            return "All vehicles";
        }
        global $db;
        $query = 'SELECT * FROM vehicles
                  WHERE vehicleID = :vehicle_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicle_id', $vehicle_id);
        $statement->execute();
        $vehicle = $statement->fetch();
        $statement->closeCursor();
        $vehicle_name = $vehicle['vehicleName'];
        return $vehicle_name;
    }