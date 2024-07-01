<?php

// prepara chiamate a ricevere json
header("Content-type: application/json");

// recupero i dati dal file json
$rawData = file_get_contents('./db/todo.json');

// converto i dati in un array (associativo)
$data = json_decode($rawData, true);

// codifico ancora il dato in json e poi restituisco
echo json_encode($data);
