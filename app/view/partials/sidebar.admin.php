<?php
function sidebar(){
$str ='<div class="sidebar rows">
  <a href="../public/index.php"><img class ="logo" src="../public/images/Sweet Dreams logo-01.png" alt="logo" ></a>
  <a href="../public/index.php">Home</a>
  <a href="../public/viewAdmin.admin.php">My Profile</a>
  <a href="../public/addAdmin.admin.php">Add Admin</a>
  <a href="../public/allAdmins.admin.php">Admins</a>
  <a href="../public/allProducts.admin.php">Products</a>
  <a href="../public/addProduct.admin.php">Add Product</a>
  <a href="../public/addToBlog.php">Add blog</a>
  <a href="../public/reviews.admin.php">Reviews</a>
  <a href="../public/users.admin.php">Users</a>
</div>';
return $str;
}
?>