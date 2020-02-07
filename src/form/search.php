<?php
require_once __DIR__ . '/../models/SearchModel.php';

if ( empty($_POST['InputPhone']) && empty($_POST['InputLastName'])) {
    $result = "Error no match";
    echo "<div class=\"alert alert-danger\">";
    print_r($result);
    echo "</div>";
    die();
}
if ((!isset($_POST['InputPhone'])) && (!isset($_POST['InputLastName']))) {
    $result = "Error no match";
    echo "<div class=\"alert alert-danger\">";
    print_r($result);
    echo "</div>";
    die();
}
if ((isset($_POST['InputPhone'])) && (empty($_POST['InputLastName'])) && ($_POST['selected'] == "InputPhone") && (preg_match('`^0[1-9]\d{8}$`', $_POST['InputPhone']))) {
    $result = SearchModel::searchByPhoneNumber($_POST['InputPhone']);
}
if ((isset($_POST['InputLastName'])) && (empty($_POST['InputPhone'])) && ($_POST['selected'] == "InputLastName") && (preg_match('`^([a-zA-Z \'àâéèêôùûçÀÂÉÈÔÙÛÇ-]{1,50})$`', $_POST['InputLastName']))) {
    $lastName = strtolower($_POST['InputLastName']);
    $lastName = ucfirst($lastName);
    $result = SearchModel::searchByLastName($_POST['InputLastName']);
}
if (is_null($result) || $result==false)  {
    $result = "Error no match";
    echo "<div class=\"alert alert-danger\">";
    print_r($result);
    echo "</div>";
    die();
}
echo "<div class=\"alert alert-info\">";
if (is_array($result)){
    $max=sizeof($result);
    foreach ($result as $item) {
        echo($item["phoneUser"]);
        if($max>0) {
            echo "</br>";
        }
    }
}else {
    print_r($result);
}
echo "</div>";
