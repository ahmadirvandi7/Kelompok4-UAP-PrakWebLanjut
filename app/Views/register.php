<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-image: url(/assets/img/rektorat.jpg);
            background-size: cover;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 35px;
            text-align: center;
            border-radius: 10px;
        }

        .logo {
            width: 170px;
        }

        .input-box {
            margin: 10px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px); 
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 30px; 
            margin-left: 10px; 
        }

        .btn-login {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 30px;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-register {
            background-color: #808080;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/assets/img/LogoUnila.png" class="logo" alt="Logo UNILA">
        <div class="input-box">
            <form method="post" action="">
                <input type="text" name="register_username" placeholder="Username">
            </div>
            <div class="input-box">
                <input type="password" name="register_password" placeholder="Password">
            </div>
            <button class="btn-login" type="submit">Register</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $register_username = $_POST["register_username"];
            $register_password = $_POST["register_password"];

            if (empty($register_username) || empty($register_password)) {
                echo "Username dan password untuk pendaftaran harus diisi.";
            } else {
                //save ke db
            }
        }
        ?>
    </div>
</body>
</html>
