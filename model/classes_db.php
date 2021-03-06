<?php

    // Returns all classes
    function get_classes() {
        global $db;
        $query = 'SELECT * FROM classes
                  ORDER BY ID DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $classes = $statement->fetchAll();
        $statement->closeCursor();
        return $classes;
    }

    // Gets class name
    function get_class_name($class_id) {
        global $db;
        $query = 'SELECT * FROM classes
                  WHERE ID = :class_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $classes = $statement->fetch();
        $statement->closeCursor();
        $class_name = $class['Class'];
        return $class_name;
    }