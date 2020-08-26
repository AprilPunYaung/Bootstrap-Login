<?php 
require('help.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql = "SELECT * FROM users WHERE email='$email' AND password= '$password'";
            $query = mysqli_query($conn,$sql);
            $users = mysqli_fetch_all($query, MYSQLI_ASSOC);

            if($users)
            {
                $_SESSION['auth'] = true;
                Home();
            }else{
                $_SESSION['auth'] = false;
                echo 'Fail';
            }
    }

    include 'header.php';

?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="h5 text-center text-info">Login Form</div>
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
                            <input type="submit" value="Login" class="btn btn-outline-info">
                            <a href="register.php" class="float-right">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'footer.php';
?>