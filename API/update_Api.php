<?php

header("Access-Control-Allow-Methods: PUT");

include("../Config/config.php");

$config = new Config();

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {

    $input = file_get_contents("php://input");

    parse_str($input, $_PUT);

    $name = $_PUT['name'];
    $cityname = $_PUT['cityname'];
    $proucttype = $_PUT['proucttype'];
    $phonenumber = $_PUT['phonenumber'];
    $id = $_PUT['id'];

   $res = $config->update($name, $cityname, $proucttype, $phonenumber, $id);

    if ($res) {
        $arr['msg'] = "Data Updated Successfully...";
    } else {
        $arr['msg'] = "Data Updation Failed...";
    }
} else {
    $arr['error'] = "Only PUT HTTP Methods are Allowed...";
}
echo json_encode($arr);
?>