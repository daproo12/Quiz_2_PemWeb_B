<?php
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
		// perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
		$get_user = ("SELECT username,password FROM userdata WHERE (username = '$username') AND (password = '$password')");
		$result = mysqli_query($conn,$get_user);
		$data = mysqli_fetch_array($result);
		if($data[username]==$username and $data[password]==$password){
		 // email yang dimasukan ada di db
		 // check password
		 //membuat variabel untuk menambahkan variabel ke dalam cookie browser
		    $username =$data[username];
		    $password =$data[password];
		 
		    setcookie("username", $username, time()+3600);
		  	setcookie("password", $password, time()+3600);
		  	header("location:halaman.php"); //lokasi file jika cookie telah berhasil didaftarkan ke dalam browser
	 	}
	 	else{
	 		echo"<script>alert('Login tidak berhasil, username atau password tidak valid');document.location='javascript:history.back(0);'</script>";}
	}
?>