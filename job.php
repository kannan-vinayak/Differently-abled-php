<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
.card{
    width: 80%;
}
</style>
</head>
<body>
<center>
        <h1>JOBS</h1>
    </center>
<?php
    $link = new mysqli("localhost:3307","root","root","sample");
    $a=$_SESSION["uid"];

    $sql="SELECT `disability` FROM `person` WHERE `uid`='$a'";
        $c=mysqli_query($link,$sql);
        $b=mysqli_fetch_row($c);
        $d=$b[0];

        $sql=" SELECT `unique`,`cname`,`jdesig`,`city`,`state`,`country` FROM `company` WHERE `disability`='$d'";

        $retval = mysqli_query( $link, $sql );

     while($row = mysqli_fetch_array($retval)) {
?>
    
    <center>
    <form action="job.php" method="post">
    <div class="card">
        <div class="card-header">
        <?php 
        $ik = $row['unique'];
        $user = $ik;
        ?>
            <h4>COMPANY NAME</h4><?php echo $row['cname'] ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">Designation : <?php echo $row['jdesig'] ?> </h5>
            <p class="card-text">City : <?php echo $row['city'] ?> <br> State : <?php echo $row['state'] ?>
             Country : <?php echo $row['country'] ?></p>
            <a href= <?php echo "qw.php?user=".$user ?> class="btn btn-primary">Details</a>
        </div>
    </div>
    </form><br>
    </center>
     <?php } ?>
</body>
</html>