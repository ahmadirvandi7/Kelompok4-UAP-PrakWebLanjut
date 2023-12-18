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
        input[type="email"],
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
            <form action="<?= url_to('register') ?>" method="post">
                  <?= csrf_field() ?>
                  <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
            </div>
            <div class="input-box">
            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
            </div>
            <div class="input-box">
            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
            </div>
            <div class="input-box">
            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
            </div>
            <button type="submit" class="btn-login"><?=lang('Auth.register')?></button>
        </form>
        <p><?=lang('Auth.alreadyRegistered')?> <a href="<?= url_to('login') ?>"><?=lang('Auth.signIn')?></a></p>
    </div>
</body>
</html>
