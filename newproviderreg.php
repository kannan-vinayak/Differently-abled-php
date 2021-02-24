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
        $key=rand(10000,100000);
        $a=$_POST['cname'];
        $b=$_POST['cpname'];
        $qp=$_POST['desig'];
        $c=$_POST['email'];
        $d=$_POST['cnum'];
        $e=$_POST['city'];
        $f=$_POST['state'];
        $g=$_POST['country'];
        $h=$_POST['username'];
        $i=$_POST['password'];
        
        $_SESSION["unique"] = $key;

        $sql = "INSERT INTO `company` (`unique`,`cname`,`cpname`,`desig`,`email`,`cnum`,`disability`,`city`,`state`,`country`,`jdesig`,`username`,`password`) VALUES ('$key','$a', '$b','$qp', '$c','$d','abc', '$e','$f','$g',NULL,'$h','$i')" ;
        
        if (mysqli_query($link,$sql,MYSQLI_USE_RESULT)) 
        {
            header("Location:eg.php");
        }
        else
        {
            header("Location:newproviderreg.php");
        }
}
mysqli_close($link);
?>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center><div class="card-header"><h4>COMPANY REGISTRATION</h4></div></center>
                    <div class="card-body">
                        <form action="newproviderreg.php" method="POST">
                            <div class="form-group row">
                                <label for="cname" class="col-md-4 col-form-label text-md-right">Company Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="cname" class="form-control" name="cname" placeholder="Enter your Company Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cpname" class="col-md-4 col-form-label text-md-right">Contact Person Name</label>
                                <div class="col-md-6">
                                    <input type="text" id="cpname" class="form-control" name="cpname" placeholder="Contact Person Name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="desig" class="col-md-4 col-form-label text-md-right">Designation</label>
                                <div class="col-md-6">
                                    <input type="text" id="desig" class="form-control" name="desig" placeholder="Designation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email ID</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email ID" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cnum" class="col-md-4 col-form-label text-md-right">Contact Number</label>
                                <div class="col-md-6">
                                    <input type="text" id="cnum" class="form-control" name="cnum" placeholder="Contact Number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
                                <div class="col-md-6">
                                    <input type="text" id="city" class="form-control" name="city" placeholder="City" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="optcheckbox2"  class="col-md-4 col-form-label text-md-right">State</label>
                                    <div class="col-md-6">
                                    <select class="form-control" id="optcheckbox2" name="state">
                                        <option value="">Select</option>
                                        <option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="New Delhi">New Delhi</option>
                                        <option value="Orissa">Orissa</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
                                <div class="col-md-6">
                                    <input type="text" id="country" class="form-control" name="country" placeholder="Country" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" minlength="7" maxlength="15" required>
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