<?php
	//mengambil variabel login yg telah di daftarkan cookies
	$username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
	if(!isset($username)) { 
		echo"<script>alert('Cookies anda belum terdaftar, silakan login kembali'); document.location='index.php';</script>";
	}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login menggunakan Cookies</title>
</head>
<style type="text/css">
	body{
        font-size: 14px;
        font-family: Georgia;
        font-weight: 500;
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.1);
        top: 0px;
        justify-content: center;
        align-items: center;
        display: flex;
	    }
    button{
        cursor: pointer;
        width: 75px;
        border: none;
        outline: none;
        border-radius: 15px;
        color: rgb(99, 144, 164);
        padding: 5px;
        margin: 15px 0px 30px 0px;
        font-size: 14px;
        font-weight: bold;
        font-family: 'Segoe UI';
    }
    button:hover{
        background-color: #846a009e;
        color: antiquewhite;
    }
</style>
<body>

	<div>
		<h3>Berhasi Login<h3>
        <a href="logout.php">
            <button>Logout</button>
        </a>
	</div>
</body>
</html>