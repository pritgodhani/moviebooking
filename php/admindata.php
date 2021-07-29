<?php
include('connection.php');
$qury = "SELECT `name`,`email`,`sheet_name` FROM `selectSheet` INNER JOIN `register` ON selectSheet.user_id = register.id ";
$result = mysqli_query($mysqli, $qury);
$storeArray = Array();
if(mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $storeArray[] =  $row;  
};
};

 echo $data = json_encode($storeArray);
