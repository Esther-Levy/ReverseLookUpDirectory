<?php
require_once __DIR__ . '/../models/AddUserModel.php';
$regExLastName = "/^([a-zA-Z 'àâéèêôùûçÀÂÉÈÔÙÛÇ-]{1,50})$/";
$regExPhoneNumber = "/^0[1-9]\d{8}$/";
$result = false;

if ( (isset($_POST['InputLastName'])) && (isset($_POST['InputTel'])) && (preg_match($regExLastName, $_POST['InputLastName'])) && (preg_match($regExPhoneNumber, $_POST['InputTel'])) ) {

    $ifPhoneExist = AddUserModel::checkPhone($_POST['InputTel']);

    if ($ifPhoneExist==null) {
        $lastName = strtolower($_POST['InputLastName']);
        $lastName = ucfirst($lastName);
        $tel = $_POST['InputTel'];
        $result = AddUserModel::addUser($lastName, $tel);
    }else{
        echo "<div class=\"alert alert-danger\">";
        print_r("AllReady Exist !");
        echo "</div>";
        die();
    }
}
if ($result == true) {
    echo "<div class=\"alert alert-success\">";
    print_r("Success !");
    echo "</div>";
} else {
    echo "<div class=\"alert alert-danger\">";
    print_r("Error !");
    echo "</div>";
}