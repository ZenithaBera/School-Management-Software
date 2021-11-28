<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="admin";
    $conn=mysqli_connect($host,$username,$password,$db);

    if(isset($_POST['login']))
    {
    $id=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql=mysqli_query($conn,"select * from `master-admin` where id='$id' && username='$username' && password='$password'");
    $num=mysqli_num_rows($sql);
    if($num>0){
        echo '<script type="text/JavaScript"> alert("Successfully logged in");</script>';   
        echo '<script type="text/javascript">
			window.location="admin_panel.php";
		</script>';  
    }
    else{
        
        echo '<script type="text/JavaScript"> alert("Failed to log in");</script>';   
    
    }
}
?>