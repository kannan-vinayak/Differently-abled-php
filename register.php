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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/reg.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="jquery.passwordstrength.js"></script>
</head>
<body>
<?php
    $link = new mysqli("localhost:3307","root","root","sample");
    if(!$link)
    {
       die('could not connect: ' . $link->connect_error());
    }

    if(isset($_POST['submit']))
    {   
        $a=$_POST['name'];
        $b=$_POST['fname'];
        $c=$_POST['dob'];
        $d=$_POST['gender'];
        $e=$_POST['high'];
        $f=$_POST['disability'];
        $g=$_POST['percent'];
        $h=$_POST['uid'];
        $i=$_POST['doi'];
        $j=$_POST['doe'];
        $k=$_POST['occupation'];
        $l=$_POST['sector'];
        $m=$_POST['password'];
        $n=$_POST['cpassword'];
        
        $sql = "INSERT INTO `person` (`name`,`fname`,`dob`,`gender`,`high`,`disability`,`percent`,`uid`,`doi`,`doe`,`occupation`,
        `sector`,`password`,`cpassword`) VALUES ('$a', '$b', '$c', '$d','$e', '$f', '$g','$h','$i', '$j','$k', '$l', '$m','$n')" ;
        
      if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
      {
        if($m == $n )
        {           
            header("Location:eg.php");
        }
        else
        {
            header("Location:register.php");
        }
    }
}
    mysqli_close($link);
?>
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header"><h4>REGISTRATION</h4></div></center>
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Enter your Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-md-4 col-form-label text-md-right">Father's Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter your Father's Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                                <div class="col-md-6">
                                    <input type="date" id="dob" class="form-control" name="dob" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="optradio" name="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="gender" value="Male"> Male</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="gender" value="Female"> Female</label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="gender" value="Others"> Others</label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="optcheckbox"  class="col-md-4 col-form-label text-md-right">Highest Qualification</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="optcheckbox" name="high">
                                        <option value="">Select</option>
                                        <option value="SSLC">SSLC</option>
                                        <option value="HSC">HSC</option>
                                        <option value="UG">UG</option>
                                        <option value="PG">PG</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    </div>
                            </div>

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
                                <label for="percent" class="col-md-4 col-form-label text-md-right">Percentage Of Disability</label>
                                <div class="col-md-6">
                                    <input type="text" id="percent" class="form-control" name="percent" placeholder="Yours percentage of disability" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="uid" class="col-md-4 col-form-label text-md-right">Unique Disability ID</label>
                                <div class="col-md-6">
                                    <input type="text" id="uid" class="form-control" name="uid" placeholder="Yours Unique Disability ID" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doi" class="col-md-4 col-form-label text-md-right">Date Of Issue</label>
                                <div class="col-md-6">
                                    <input type="date" id="doi" class="form-control" name="doi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="doe" class="col-md-4 col-form-label text-md-right">Date Of Expired</label>
                                <div class="col-md-6">
                                    <input type="date" id="doe" class="form-control" name="doe" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="optradio" name="occupation" class="col-md-4 col-form-label text-md-right">Occupation</label>
                                <div class="col-md-6">
                                <div class="radio">
                                    <label><input type="radio" name="occupation" value="Yes"> Yes</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="occupation" value="No"> No</label>
                                </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="optcheckbox2"  class="col-md-4 col-form-label text-md-right">Sector</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="optcheckbox2" name="sector">
                                        <option value="">Select</option>
                                        <option value="Public">Public</option>
                                        <option value="Private">Private</option>
                                        <option value="NA">NA</option>
                                    </select>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter Password" minlength="7" maxlength="15" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Enter Confirm Password" minlength="7" maxlength="15" required>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                    </div>
                    </form>

                    <script>
                        $(function() {
                            $("#password").passwordStrength();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
</body>
</html>