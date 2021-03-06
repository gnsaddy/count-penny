<?php
    session_start();
    include("../include/db.php");
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../jquery-3.4.0.slim.min.js"></script>
    <script src="../bootstrap.js"></script>
    <script src="../popper.min.js"></script>
    <script src="../tooltip.min.js"></script>
    <title>Login</title>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top container-fluid">
    <div class="container">
        <a class="navbar-brand logo" href="../index.html">
            <img src="../brandImage/ll.png" class="img-fluid " alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto text-center text-justify">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.html">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <?php
                            $userName = $_SESSION['user_mail'];
                            if ($userName == true){

                            }else{
                                header('location: adminLogin.php');
                            }
                            $query = "SELECT * FROM Admin where email='$userName' ";
                            $userData = mysqli_query($con,$query);
                            $result = mysqli_fetch_assoc($userData);  // result in the form of array
                            echo $result['fname']; // fetching the first name
                        ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h3 class="login-heading mb-4 text-center"><u>Query Analysis</h3></u>
                    <table class="table">
                        <tr>
                            <td><label>1.Display list of details user with respect to its type(salaried and unsalaried)</label></td>

                            <td><a href="query1.php"><button type="button" class="rounded-bottom" >Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>2.Display list of details user and fetch miscelleneous</label></td>
                            <td><a href="query2.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>3.Display details of flexibleExpense for unsalaried user<label></td>
                            <td><a href="query3.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>4.List the details of specific user having fixed expense (userid01) </label></td>
                            <td><a href="query4.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>5.List the details of flexibleExpense for salaried user</label></td>
                            <td><a href="query5.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td></tr>
                        </tr>

                        <tr>
                            <td><label>6.List the details of expense spend on food for all users.</label></td>
                            <td><a href="query6.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>7.List the details of medical expense for unsalaried user.</label></td>
                            <td><a href="query7.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>8.List the details of user with expenseId</label></td>
                            <td><a href="query8.php"> <button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>9.List the details of fixed expense for salaried user</label></td>
                            <td><a href="query9.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>

                        <tr>
                            <td><label>10.List the details of expense paid on bills for al users user</label></td>
                            <td><a href="query10.php"><button type="button" class="rounded-bottom">Execute Query</button></a></td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="  container-fluid py-4 bg-transparent text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; 2019 Count-Penny</small>
    </div>
</footer>


</body>
</html>