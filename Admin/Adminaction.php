<?php
/**
 * Template File Doc Comment
 * 
 * PHP version 7
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */
?>
<?php
require_once 'Product.php';
$product=new Product();
$action= $_POST['ACT'];  
switch($action) {
case 'Addcategory':
    $name=$_POST['Name'];
    $ava=$_POST['Ava'];
    $data= $product-> Addcategory($name, $ava);
     echo $data;
    break;   

case 'showcategory':
    $data= $product-> showcategory();
        echo $data;
    break;  

case 'deleteCategory':
    $id=$_POST['Id'];
    $data= $product->deleteCategory($id);
    echo $data;
    break;   

case 'editCategory':
    $id=$_POST['Id'];
    $data= $product->editCategory($id);
    echo $data;
    break;   

case 'updateCategory':
    $name=$_POST['Name'];
    $ava=$_POST['Ava'];
    $id=$_POST['Id'];
    $link=$_POST['Link'];
    $data= $product->updateCategory($id, $name, $ava, $link);
    echo $data;
    break;   

case "hostinglist":
    $data=$product->hostinglist();
    print_r($data); 
    break;

case "AddMultiple":
    $prodid=$_POST["PRODID"];
    $pname=$_POST["PNAME"];
    $plink=$_POST['PLINK'];
    $mprice=$_POST['MPRICE'];
    $aprice=$_POST['APRICE'];
    $sku=$_POST['SKU'];
    $wsp=$_POST['WSP'];
    $band=$_POST['Band'];
    $domain=$_POST['DOM'];
    $lang=$_POST['LANG'];
    $mail=$_POST['Mail'];
    $prod_desc=array('web_space'=>$wsp,'band'=>$band,'domain'=>$domain,
    'lang'=>$lang,'mail'=>$mail);
    $prod_desc_encode=json_encode($prod_desc);
    $data=$product->AddMultiple($prodid, $pname, $plink, $mprice, $aprice, $sku, $prod_desc_encode);
    print_r($data); 
    break;

case "ShowProductsDesc":
    $data=$product->ShowProductsDesc();
    print_r($data);
    
    break;

case 'MultiProductsdelete':
    $id=$_POST['Id'];
    $data= $product->MultiProductsdelete($id);
    echo $data;
    break;  

case 'editProduct':
    $id=$_POST['Id'];
    $data= $product->editProduct($id);
    echo $data;
    break;  

case 'updateProduct':
    $id=$_POST['Id'];
    $ava=$_POST['Ava'];
    $plink=$_POST['Link'];
    $wsp=$_POST['Web'];
    $band=$_POST['Band'];
    $domain=$_POST['Domain'];
    $lang=$_POST['LSP'];
    $mail=$_POST['Mail'];
     $mprice=$_POST['Mon'];
    $aprice=$_POST['Anu'];
    $sku=$_POST['SKU'];
    $prod_desc=array('web_space'=>$wsp,'band'=>$band,'domain'=>$domain,
    'lang'=>$lang,'mail'=>$mail);
    $prod_desc_encode=json_encode($prod_desc);
    $data= $product->updateProduct($id,$ava, $plink,$mprice, $aprice, $sku, $prod_desc_encode);
    break; 

case 'ShowParentCategory':
    $data= $product->ShowParentCategory();
    echo $data;
    break;  
}


?>