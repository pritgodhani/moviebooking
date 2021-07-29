<?php
session_start();
include('connection.php');
$_SESSION["email"];
//******/ user id = $userId
$qury = "SELECT `id`FROM `register` WHERE email='{$_SESSION["email"]}'";
$result = mysqli_query($mysqli, $qury);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
         $userId = $row['id'];
    };
};
//*****get data form javascript page */
$jsonObj = $_GET['formData1'];
// echo($jsonObj);
$sheetData = json_decode($jsonObj);
// print_r($sheetData);


//******insert in database- value of sheet-id and sheet-value******
$size = sizeof($sheetData);
$sheetName = array_map(function ($o) {
    return $o->name;
}, $sheetData);
$sheetValue = array_map(function ($o) {
    return $o->value;
}, $sheetData);
for ($i = 0; $i < $size; $i++) {
    $nameofsheet = $sheetName[$i];
    $valueofsheet = $sheetValue[$i];
    $qury = "SELECT * FROM `selectSheet` WHERE nameofsheet='{$sheetName[$i]}'And sheet_name='{$sheetValue[$i]}'";
    $result = mysqli_query($mysqli, $qury);
    if (mysqli_num_rows($result) > 0) {
        
    } else {
      $qury = "INSERT INTO `selectSheet`(`user_id`, `user_email`, `nameofsheet`, `sheet_name`) VALUES ('$userId','{$_SESSION["email"]}','$nameofsheet','$valueofsheet')";
        $result = mysqli_query($mysqli, $qury);  
    };
 
};


?>