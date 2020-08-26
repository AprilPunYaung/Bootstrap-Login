<?php
require('help.php');

if($_SESSION['auth']!= true)
{
   Login();
}

$sql = "SELECT * FROM authors";
$query = mysqli_query($conn,$sql);
$authors = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<?php 

include"header.php";
include "nav.php";
 ?>

<div class="h3 text-center">Author List</div>
 
<div class="container">
   <div class="row">
      <?php
         foreach($authors as $author)
         { ?>

         <div class="col-md-4 mt-2">
               <div class="card">
                     <div class="card-header"> <?php  echo $author['name']; ?> </div>
                     <div class="card-body"><?php  echo $author['list']; ?></div>
                        <div class="card-footer">
                           <a href="" class="btn btn-info">View More</a>
                        </div>            
               </div>
         </div>
         


      <?php }
      ?>
   </div>
</div>
<?php include"footer.php"; ?>
