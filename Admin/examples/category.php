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
<?php include_once 'Product.php'?>
<?php require 'header.php'?>
<?php
$product=new Product();
$output=$product->parent_product(); 
?>
    <!-- Header -->
    <!-- Header -->
  <div class="header bg-primary pb-6">
  <div class="container-fluid">
  <div class="header-body">
  <div class="row align-items-center py-4">
  <div class="col-lg-6 col-7">
    <h6 class="h2 text-white d-inline-block mb-0">Add Product</h6>
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
      <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
        <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
      </ol>
    </nav>
  </div>

          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              
                  <div class="row">
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              
            </div>
            <div class="col-xl-3 col-md-6">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-1 ">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 mt-4 ml-4">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Add Category
              </div>
            </div>
            <div class="card-body px-lg-3 py-lg-3">
              <form role="form">
                <div class="form-group ">
                  <div class="input-group input-group-merge input-group-alternative">
            <div class="input-group-prepend ">
                <span class="input-group-text"><i class="ni ni-email-83 "></i></span>
            </div>
                    <input class="form-control pl-2" value="<?php echo $output?>" disabled type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="ni ni-lock-circle-open"></i></span>
                </div>
                    <input class="form-control pl-2" placeholder="product name" id="pn" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="ni ni-lock-circle-open"></i></span>
                </div>
                    <input class="form-control pl-2" placeholder="link url" id="link" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group ">
                  <select class="custom-select" id="aval" id="inputGroupSelect02">
                  <option val="ava">Availability</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" id="category">ADD</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row ">
            
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
  <div class="container-fluid">
    <div id="showdata">
   </div>
  </div>
</div>
  </div>
  
<?php 'footer.php'?>
