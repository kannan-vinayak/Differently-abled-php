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
       
        $ss=$_SESSION["uid"];
       $sql = "SELECT `name`,`fname`,`dob`,`gender`,`high`,`disability`,`percent`,`uid`,`doi`,`doe`,`occupation`,`sector` FROM `person` WHERE `uid`='$ss' ";
       $retval = mysqli_query( $link, $sql );
     
     while($row = mysqli_fetch_array($retval)) {
      $fg = $row['uid']; 
      $_SESSION["uid"] = $fg;
	
?>
<br>
<center><h2 style="font-family:Times New Roman">DETAILS</h2></center><br>
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
         <td style="font-weight: bold">NAME<br></td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['name'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">FATHER'S NAME</td>
         <td style="font-size:18px"colspan="2"> <?php echo $row['fname'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">DATE OF BIRTH</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['dob'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">GENDER</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['gender'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">HIGHEST QUALIFICATION</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['high'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">TYPE OF DISABILITY</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['disability'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">PERCENTAGE OF DISABILITY</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['percent'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">UNIQUE DISABILITY ID</td>
         <td  style="font-size:18px"colspan="2"><?php echo $fg ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">DATE OF ISSUE</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['doi'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">DATE OF EXPIRED</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['doe'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">OCCUPATION</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['occupation'] ?> </td>
       </tr>
       <tr>
         <td style="font-weight: bold">SECTOR</td>
         <td  style="font-size:18px"colspan="2"><?php echo $row['sector'] ?> </td>
       </tr>
       
       <?php 
    }
?>
</tbody>
</table><br>
</center>
<center><button onclick="location.href = 'job.php';" id="button1" class="btn btn-outline-primary btn-lg" >JOBS</button></center>
</body>
</html>