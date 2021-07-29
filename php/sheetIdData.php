<?php 
include('connection.php');
//***chechbox id */
$qury ="SELECT  `nameofsheet` FROM `selectSheet`";
$result = mysqli_query($mysqli, $qury);
$storeArray = Array();
// $row = mysqli_fetch_assoc($result);
// echo sizeof($row);
if(mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $storeArray[] =  $row['nameofsheet'];  
};
};

echo $sheetId = json_encode($storeArray);

?>