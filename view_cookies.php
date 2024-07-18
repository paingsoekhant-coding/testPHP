<?php

require_once "store_cookies.php";

echo "<pre/>";

$result = $_COOKIE;

if($result){
    echo "Cookies create successfully";

}else{
    echo "No Cookies";
}