
 <?php
 
 require 'help.php';
 include 'header.php';
 if($_SERVER['REQUEST_METHOD'] === 'POST')
 {
    $name = $_POST['name'];
    $list = $_POST['list'];
    $sql = "INSERT INTO authors (name,list) VALUES('$name','$list')";
    $query = mysqli_query($conn,$sql);

    if($query)
    {
        Home();
    }else{
        echo 'Create Fail';
    }
 }
?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="h5 text-center text-info">Create Author </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Author Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Author List</label>
                                <input type="text" name="list" class="form-control">
                            </div>
                            
                            <input type="submit" value="Create" class="btn btn-outline-success float-right">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>