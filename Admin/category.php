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
<?php include 'header.php'?>
<?php include_once 'Dbcon.php'?>
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
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                
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
          <div class="row mt-3">
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="editcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" class="text-muted h3"  id="exampleModalLongTitle">Edit Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body showeditcat">
      </div>
    
    </div>
  </div>
</div>
  <div class="container-fluid">
    <div id="showdata">
   </div>
  </div>
  <script>

 var html;
$(document).ready(function(){  
       html="<table id='tableshow'>";
       html+="<thead class='table table-striped'>";
       html+="<tr>";
       html+="<th>Category Name</th>";
        html+="<th>Product Name</th>";
       html+="<th>Product Available</th>";
       html+="<th>link</th>";
       html+="<th>Product launch date</th>";
       html+="<th>Action</th>"
       html+='</tr>';
       html+="</thead>";
        $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT:"showcategory",
        },
        dataType:'json',
        success: function(data) {
            for(var i=0;i<data.length;i++){
                html+='<tbody><tr>';
                html+='<td class="cat'+i+'"></td>';
                html+='<td>'+data[i]['prod_name']+'</td>';
                if(data[i]['prod_available']==1){
                html+='<td>Available</td>';
                }
                else{
                    html+='<td>Not Available</td>';
                }
            html+='<td>'+data[i]['link']+'</td>';
            html+='<td>'+data[i]['prod_launch_date']+'</td>';
            html+='<td><input type="button"  data-toggle="modal" data-id='+data[i]['id']+' data-target="#editcategory" value="edit" class="btn btn-info edit"><input type="button" class="btn btn-danger del" data-id='+data[i]['id']+' value="delete"</td>';
            }
            html+='</tr></tbody>'
            html+='</table>';
            $('#showdata').html(html);
            $('#tableshow').DataTable();
        }
    });

    $.ajax({
       url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT:"ShowParentCategory",
        },
        dataType:'json',
        success: function(data) {
          for(var i=0;i<data.length;i++){
           $('.cat'+i).html(data[i]['prod_name']);
          }
          
      }
  });

   
    $(document).on("click",'.del',function(){
        var id=$(this).data('id');
        var x='deleteCategory';
        var con=confirm("Are you sure want do you want to delete");
        if(con==1){
        $.ajax({
            url: 'Adminaction.php',
            type: 'POST',
            data: {
                ACT: x,Id:id
            },
            success: function(data) {
                if(data==1)
                {   
                alert("Deleted Successfully");
                window.location.href='category.php';
                }
            }
            });
        }
    
    });

  $('#category').click(function(){
      var name=$('#pn').val();
      var available=$('#aval').val();
      var act="Addcategory";
      $.ajax({
            url: 'Adminaction.php',
            type: 'POST',
            data: {
                ACT:act,
                Name: name,
                Ava: available,
            },
            success: function(data) {
              if(data==1){
                  alert("added successfully");
                  window.location.href='category.php';
              }
            }
        });
  });

  $(document).on("click",'.edit',function(){
    var id=$(this).data('id');
    var x="editCategory";
    $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT: x,Id:id
        },
        dataType:'json',
        success: function(data) {
            for(var i=0;i<data.length;i++) {
            html='<div class="form-group">\
            <label class="text-muted h3" for="exampleInputEmail1">Product Name</label>\
            <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" value="'+data[i]['prod_name']+'"\
            <label class="text-muted h3" for="exampleInputEmail1">Please select</label>\
          <select class="form-control" id="pava">\
            <option value="0">Not  Available</option>\
            <option value="1">Available</option>\
          </select>\
            <label class="text-muted h3"  for="exampleInputEmail1">link</label>\
            <input type="text" class="form-control" id="plink" aria-describedby="emailHelp" value="'+data[i]['link']+'">\
            <div class="modal-footer">\
            <button type="button" class="btn btn-danger" data-dismiss="modal">cancel</button>\
            <button type="button" class="btn btn-success upcat" data-id='+data[i]['id']+'>Update</button>\
          </div>';
            }
            html+='</div>';
              $(".showeditcat").html(html);
        }
        });
});


  $(document).on("click",".upcat",function(){
    var pname=$("#pname").val();
    var aval=$("#pava").val();
    var plink=$("#plink").val();
    var id=$(this).data('id');
    x="updateCategory";
    $.ajax({
        url: 'Adminaction.php',
        type: 'POST',
        data: {
            ACT: x,Id:id,
            Name:pname,Ava:aval,
            Id:id,Link:plink
        },
        success: function(data) {
            if(data==1){
             alert("updated Successfully");
             window.location.href='category.php';
            }
        }
  });
});

});
  </script>
<?php include 'footer.php'?>
