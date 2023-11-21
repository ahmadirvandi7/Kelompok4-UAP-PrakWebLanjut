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

        <?= view('Myth\Auth\Views\_message_block') ?>

        <div class="input-box">
            <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>
            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
				    name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
            </div>
            <div class="input-box">
            <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
                <div class="invalid-feedback">
							<?= session('errors.password') ?>
				</div>
            </div>
            <button type="submit" class="btn-login"><?=lang('Auth.loginAction')?></button>
            <p><?=lang('Belum Mempunyai Akun?')?> <a href="<?= url_to('register') ?>"><?=lang('Auth.register')?></a></p>
            <br>
        </form>
        <br>
        <br>
    </div>
</body>
</html>
