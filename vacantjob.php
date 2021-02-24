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
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  width: 95%;
}
th, td {
  padding: 5px;
  text-align: left;    
}

    </style>
</head>
<body>
<?php

$link = new mysqli("localhost:3307","root","root","sample");
    
       $hp=$_SESSION["unique"];
       echo $hp;
       $sql = "SELECT `cname`,`cpname`,`jdesig`,`email`,`cnum`,`disability`,`city`,`state`,`country` FROM `company` WHERE `unique`='$hp'";
       $retval = mysqli_query( $link, $sql );
     
       while($row = mysqli_fetch_array($retval)) {
	
?>

$hp = $row['unique'];
            $jk = $row['cname'];
            echo $hp;
            $_SESSION["cname"] = $jk;
            $_SESSION["unique"] = $

            $hp=$_SESSION["unique"];
       echo $hp;
<br>
<center><h2 style="font-family:Times New Roman">JOB DETAILS</h2></center><br>
<center>
    <table class="tg" style="table-layout:fixed; width:80%;">
        <thead>              
       <tr>
         <td style="font-weight: bold;text-align: center">DESCRIPTION</td>
         <td style="font-weight: bold ;text-align: center" colspan="2">DETAILS</td>
       </tr>
       </thead>
       <tbody>
       <tr>
         <td style="font-weight: bold">COMPANY NAME<br></td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['cname'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">CONTACT PERSON NAME</td>
         <td style="font-size:18px"colspan="2"> <?php echo $row['cpname'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">DESIGNATION</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['jdesig'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">EMAIL ID</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['email'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">CONTACT NUMBER</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['cnum'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">TYPE OF DISABILITY</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['disability'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">CITY</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['city'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">STATE</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['state'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">COUNTRY</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['country'] ?> </td>
       </tr>
       </tbody>
       <?php 
    }
?>
</table><br>
</center>
<center><button onclick="location.href = 'apply.php';" id="button1" class="btn btn-outline-primary btn-lg" >Apply</button></center>
</body>
</html>