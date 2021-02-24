<?php
    session_start();
?>
<?php
        $link = new mysqli("localhost:3307","root","root","sample");
        if(!$link)
        {
           die('could not connect: ' . $link->connect_error());
        }
        if(isset($_POST['username']))
        {    
        $a=$_POST['username'];
        $b=$_POST['password'];
        $_SESSION["username"] = $a;
		$sql="SELECT * FROM `company` WHERE  `username`='$a' AND `password`='$b' limit 1";
		
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            header("Location:next1.php");
        }
        else
        {
            header("Location:eg.php");
        }
    }
    mysqli_close($link);
     ?>