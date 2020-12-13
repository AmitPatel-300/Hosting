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
require_once 'Dbcon.php';
class Product
    {
    public $conn;
    public $name;
    public $rows;
    
    public function __construct()
    {
        $con=new Dbcon(); 
        $this->conn=$con->connect();
    }

 
   
    public function hostinglist() {
        $sql="Select * from tbl_product where `prod_parent_id`=1";
            $result = $this->conn->query($sql);
                if($result->num_rows>0) {
                    while($rows=$result->fetch_assoc()){
                        $this->rows[]=$rows;
                }
            }
            return json_encode($this->rows);
    } 


    public function parent_product() 
    {
        $sql="Select * from `tbl_product` where `prod_parent_id`=0";
         $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $name=$rows['prod_name'];  
            }
        }
        return $name;
    }

    public function Addcategory($name, $ava) 
    {
        $sql = " INSERT INTO tbl_product(`prod_parent_id`,`prod_name`, `link`,`prod_available`,`prod_launch_date`)
        VALUES ('1','$name',NULL, '$ava',NOW())";
        if ($this->conn->query($sql) === true ) {
            return 1;// return "New record created successfully";
          } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
          }
    }



    public function showcategory()
    {
        $sql="Select * from tbl_product where `id`!=1";
           $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $this->rows[]=$rows;

            }   
        }
          return json_encode($this->rows);
    }
    
     //category deletion
    public function deleteCategory($id) 
    {
        $sql="Delete  from `tbl_product` where id='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
              echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

   //edit category
    public function editCategory($id) 
    {
       
        $sql="Select * from tbl_product where `id`=$id";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
                $arr['data']=array();
            while ($rows=$result->fetch_assoc()) {
                    $this->rows[]=$rows;

            }   
        }
        return json_encode($this->rows);
    }



    public function updateCategory($id, $name, $ava, $link)
    {
        $sql= "UPDATE `tbl_product` SET `prod_name`='$name' ,`prod_available`='$ava',`link`='$link' WHERE `id` ='$id'";
        if ($this->conn->query($sql) === true) {
            return 1;
        } else {
                return "Error updating record: " . $this->conn->error;
        }
    }

    public function AddMultiple($prodid, $pname, $plink, $mprice, $aprice, $sku, $prod_desc_encode) 
    {
        $sql = " INSERT INTO tbl_product(`prod_parent_id`,`prod_name`, `link`,`prod_available`,`prod_launch_date`)
        VALUES ('$prodid','$pname','$plink','1',NOW())";
        if ($this->conn->query($sql) === TRUE ) {
            $last_id = $this->conn->insert_id;
            $sql = " INSERT INTO tbl_product_description(`prod_id`,`description`,`mon_price`,`annual_price`,`sku`)
            VALUES ('$last_id','$prod_desc_encode','$mprice','$aprice','$sku')";
            if ($this->conn->query($sql) == true ) {
                return 1;
              } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;
              }
           
          } else {
            return  "Error: " . $sql . "<br>" . $this->conn->error;
          }
    }
    //show product 

    public function ShowProductsDesc()
    {
        $sql="SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
           $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                $this->rows[]=$rows;

            }   
            return json_encode($this->rows);
        }
        return "Error: " . $sql . "<br>" . $this->conn->error;
            
    }

      //Product deletion
      public function MultiProductsdelete($id)
      {
        $sql="DELETE `tbl_product`, `tbl_product_description`
        FROM `tbl_product`
        INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`
        WHERE `prod_id`='$id'";
    if ($this->conn->query($sql) === true) {
           return 1;
    } else {
          echo "Error: " . $sql . "<br>" . $this->conn->error;
    }

}

 //edit Product
    public function editProduct($id) 
    {
       
        $sql="SELECT * FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `prod_id`='$id'";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                    $this->rows[]=$rows;

            }   
        }
        return json_encode($this->rows);
    }

    //update product
    public function updateProduct($id,$ava, $plink,$mprice, $aprice, $sku, $prod_desc_encode)
    {
        $sql = "UPDATE  tbl_product tp ,tbl_product_description tps SET `tp.prod_available`='$ava',`tp.link`='$plink',`tps.description`=$prod_desc_encode,`tps.mon_price`='$mprice',`tps.annual_price`='$aprice',
            `tps.sku`='$sku' where `tp.prod_parent_id`='$id' and `tps.prod_id='$id'";
            if ($this->conn->query($sql) == true ) {
                return 1;
              } else {
                return "Error: " . $sql . "<br>" . $this->conn->error;
            }
    }

    //show parent category

    public function ShowParentCategory(){
        $sql="SELECT a.prod_name FROM tbl_product a, tbl_product b WHERE a.id= b.prod_parent_id";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                    $this->rows[]=$rows;

            }   
        }
        return json_encode($this->rows);

    }

}


