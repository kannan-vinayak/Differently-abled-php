<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bg{
        background-size: 100%;
        background-color: gray;
    }
    .form-container {
        margin-top: 10%;
        margin-left: 15%;
        width: 70%;
        background: #fff;
        padding:20px;
        border-radius:10px ;
        box-shadow: 0px 0px 15px 0px #000;
    }
    </style>
</head>
<body>
<?php
    $link = new mysqli("localhost:3307","root","root","sample");
    if(!$link)
    {
       die('could not connect: ' . $link->connect_error());
    }
    $fg=$_SESSION["uid"];
    $mkk=$_GET['mkk'];
    $sql = "INSERT INTO `details` (`suid`,`sunique`) VALUES ('$fg', '$mkk')" ;

    if(mysqli_query($link, $sql)){
        echo " ";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
?>
<div class="form-container">
    <center>
        <h1>Your Application has been Successfully Applied</h1>
    </center>
        </div>
</body>
</html>