<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
         .bg{
    background-size: 100%;
    background-color: #fff;
}
.container {
    background: #fff;
    padding: 30px;
    border-radius:30px ;
    box-shadow: 0px 0px 15px 0px #000;
}
    </style>
</head>
<body><br>
<?php
    $link = new mysqli("localhost:3307","root","root","sample");
    if(!$link)
    {
       die('could not connect: ' . $link->connect_error());
    }
    echo "hi hello";
    $zp = $_SESSION["data"];
    echo $zp;
if(isset($_POST['submit']))
{
    $a=$_POST['disability'];
    $b=$_POST['jdesig'];
    $_SESSION["disability"] = $op;
    $sql = " UPDATE `company` SET  `disability`='$a',`jdesig`='$b' WHERE `username`='$zp' ";
    if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
        {            
            header("Location:jobcomplete.php");         
        }
       else{
           header("Location:eg.php");
       }

       mysqli_close($link);
	
}

?>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header"><h4>POST A JOB</h4></div></center>
                    <div class="card-body">
                        <form action="postjob.php" method="POST">

                        <div class="form-group row">
                                <label for="optcheckbox1"  class="col-md-4 col-form-label text-md-right">Type Of Disability</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="optcheckbox1" name="disability" >
                                        <option value="">Select</option>
                                        <option value="Locomotor">Locomotor</option>
                                        <option value="Mute">Mute</option>
                                        <option value="Deaf">Deaf</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="jdesig" class="col-md-4 col-form-label text-md-right">Vacant Job</label>
                                <div class="col-md-6">
                                    <input type="text" id="jdesig" class="form-control" name="jdesig" placeholder="Vacant Job" required>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    Post
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>                

</body>
</html>