<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/eg.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>JOB SEEKER</h3>
            <form method="POST" action="jobseeker.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="uid" placeholder="Unique Disability id"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="register.php" class="ForgetPwd">New User?</a>
                </div>
                            
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>JOB PROVIDER</h3>
            <form method="POST" action="jobprovider.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Your Password" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="newproviderreg.php" class="ForgetPwd">New User?</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>