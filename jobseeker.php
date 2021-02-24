<?php
    session_start();
?>
<?php
        $link = new mysqli("localhost:3307","root","root","sample");
        if(!$link)
        {
           die('could not connect: ' . $link->connect_error());
        }
        if(isset($_POST['uid']))
        {    
        $a=$_POST['uid'];
        $b=$_POST['password'];
        $_SESSION["uid"] = $a;
		$sql = "SELECT * FROM `person` WHERE `uid`='$a' AND `password`='$b' limit 1";
		
	$result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
	$count = mysqli_num_rows($result);

        if($count == 1){
            header("Location:next.php");

        }
        else
        {
            header("Location:eg.php");
        }
    }
    mysqli_close($link);
     ?>