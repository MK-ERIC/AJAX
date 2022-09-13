<?php

include("dbQuery.php");
$m=new dbQuery();
if(isset($_GET['serialnumber'])){
    $id=$_GET['serialnumber'];
    
    $result=$m->viewoneRow("product","SerialNumber",$id);
    if($row=$result->fetch()){
        echo $row['Asset'];
    }
    else{
        echo "<i>Serial Number Not Found</i>";
    }
}



?>