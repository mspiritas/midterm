<?php

    // Returns all models
    function get_models() {
        global $db;
        $query = 'SELECT * FROM models
                  ORDER BY ID DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $models = $statement->fetchAll();
        $statement->closeCursor();
        return $models;
    }

    // Gets model name
    function get_model_name($model_id) {
        global $db;
        $query = 'SELECT * FROM models
                  WHERE ID = :model_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':model_id', $model_id);
        $statement->execute();
        $models = $statement->fetch();
        $statement->closeCursor();
        $model_name = $model['Model'];
        return $class_name;
    }