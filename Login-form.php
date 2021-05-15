<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
</head>
<style type="text/css">
    *{
    margin: 0;
    padding: 0;
    }
    .label{
        font-size: 14px;
        font-family: Georgia;
        font-weight: 500;
        color: #f8bf28;
    }
    .modalcontent legend{
        padding-top: 30px;
        color: #f8bf28;
        text-align: center;
        font-size: 45px;
        font-weight: 800px;
        font-family: bignoodletitling;
    }
    .box{
        background-color: rgba(58, 104, 145, 0.1);
        color: black;
        margin-top: 10px;
    }
    .modalcontent input, 
    .modalcontent input:focus{
        background: #ebf5fc;
        border: none;
        outline: none;
        border-radius: 5px;
        padding: 10px 15px;
        margin: 10px 0px 0px 0px;
    }
    .modalcontent button{
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
    .modalcontent button:hover{
        background-color: #846a009e;
        color: antiquewhite;
    }
    .form-group{
        flex-direction: row;
        text-align: center;
        margin: 20px 0px;
    }
    .bg-modal{
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        top: 0px;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .modaldialog{
        width: 375px;
        max-width: 375px;
        background-color: #184e94db;
        border-radius: 8px;
        top: 0px;
    }
    .modalcontent{
        text-align: center;
    }
</style>
<body>
    <div class="bg-modal">
        <div class="modaldialog">
            <div class="modalcontent">
                <form method="POST" action="logincek.php">
                    <legend>Login HERE</legend>
                
                    <div class="form-group">
                        <label class="label"><span class="fa fa-user icon" style="padding-right: 10px;"></span>Username</label>
                        <div>
                            <input id="username" class="box" name="username" type="text" placeholder="Enter your username">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="label"><span class="fa fa-key icon" style="padding-right: 10px;"></span>Password</label>
                        <div>
                            <input id="password" class="box" name="password" type="password" placeholder="Enter your password">
                        </div>
                    </div>
                
                    <div class="form-group"></div>
                        <div>
                            <a>
                                <button>Login</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
<script src="jsformlogin.js"></script>
</html>