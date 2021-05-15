<?php
    session_start();
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "mahasiswa";

    $conn = mysqli_connect($server, $user, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username == "" )
		{echo"<script>alert('Username tidak boleh kosong');document.location='javascript:history.back(0);'</script>";}
	else if($password=="")
		{echo"<script>alert('Password tidak boleh kosong');document.location='javascript:history.back(0);'</script>";}
	else{
		$get_user = ("SELECT username,password FROM userdata WHERE (username = '$username') AND (password = '$password')");
		$result = mysqli_query($conn,$get_user);
		$data = mysqli_fetch_array($result);
		if($data[username]==$username and $data[password]==$password){
		    $username =$data[username];
		    $password =$data[password];
		    $_SESSION['Login']=true;
		    if( ! isset($_SESSION['username'])){
		        header("document.location = index.php");
		    }
		 
		    setcookie("username", $username, time()+3600);
		  	setcookie("password", $password, time()+3600);
		  	header("location:halaman.php");
	 	}
	 	else{
	 		echo"<script>alert('Login tidak berhasil, username atau password tidak valid');document.location='javascript:history.back(0);'</script>";}
	}
?>