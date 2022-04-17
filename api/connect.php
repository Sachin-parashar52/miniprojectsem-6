<?php
$connect=mysqli_connect("localhost","root","","online voting system") or die("Connection failed");

if($connect){
    echo "connecting";
}
else{
        echo "not connected";
    }


?>