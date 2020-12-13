<?php
require_once 'Admin/Product.php';
$product=new Product();
$action=$_POST['action']; 
switch($action) {
case "hostinglist" :
$data=$product->hostinglist();
print_r($data); 
}
?>