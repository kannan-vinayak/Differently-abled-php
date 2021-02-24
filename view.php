<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    $link = new mysqli("localhost:3307","root","root","sample");
    if(!$link)
    {
       die('could not connect: ' . $link->connect_error());
    }
    $zp = $_SESSION["data"];
        
        $sql="SELECT `unique`,`cname` FROM `company` WHERE `username`='$zp'";
        $c=mysqli_query($link,$sql);
        $b=mysqli_fetch_row($c);
        $d=$b[0];

    $sql = "SELECT `suid` FROM `details` WHERE `sunique`='$d'";
    $retval = mysqli_query($link, $sql);
    if(! $retval ) {
    die('Could not get data: ' . connect_error());
    }

    while($row = mysqli_fetch_array($retval)) {
?>
<center>
<div class="container">
  <h2>Applicant details</h2>
  <div class="list-group">
    <p class="list-group-item active">Unique Disability ID</p>
    <p  class="list-group-item"><?php echo $row['suid'] ?></p>
  </div>
</div>
</center>
<?php
    }
    ?>
</body>
</html>