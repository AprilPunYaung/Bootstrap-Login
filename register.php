
 <?php
 
 require 'help.php';
 include 'header.php';
 if($_SERVER['REQUEST_METHOD'] === 'POST')
 {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (email,password) VALUES('$email','$password')";
    $query = mysqli_query($conn,$sql);

    if($query)
    {
        Home();
    }else{
        echo 'Register Fail';
    }
 }
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="h5 text-center text-info">Register Form</div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <input type="submit" value="Register" class="btn btn-outline-info">
                            <a href="index.php" class="float-right">Already Register ?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>