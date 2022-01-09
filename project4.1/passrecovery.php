<html>
<head>
    <center>
    <title>pass</title>
    </head>
    <style>
        #form{
            background-color: azure;
            height: 450px;
            width:400px;
            padding-top: 20px;
        }
        #header{
            height:150px;
        }
        #input{
            height: 150px;
            text-align: justify;
            padding-left: 50px;
        }
        #button{
            height:100px;
            
        }
        #input input{
            width:300px;
            height: 40px;
            border:2px solid blue;
        }
        #button input{
            border-radius: 20px;
            background-color: red;
            height: 40px;
            width: 150px;
            color:white;
        }
        #button a{
            text-decoration-line: none;
            font-size:20px;
        }
    </style>
<body>
    <div id="form">
        <div id="header">
            <h1>Recover Password</h1>
            A reset link will be sent to mail.
        </div>
        <div id="input">
            <label>Username</label><br><br>
            <input type="text" text="username" placeholder=" Enter Your Username">
            
        </div>
        <div id="button">
            <input type="submit" value="Reset Password">
            <br><br>
            <a href="farm.php">Return To Login</a></br>
            <a href="register.php">Register</a>
        </div>
    </div>
    </body>
    </html>