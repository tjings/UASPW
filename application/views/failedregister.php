<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="path/to/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . "assets/css/style.css" ?>">
 </head>
 <body style="padding-top: 70px;">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form action="<?= site_url() . "/register/registrasi"; ?>" method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name" value="<?php echo set_value('name'); ?>"/>
                        <p> <?php echo form_error('name'); ?> </p>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-calendar"></i></label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"/> 
                        <p> <?php echo form_error('tanggal_lahir'); ?> </p>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="text" name="username" id="username" placeholder="Your Username" value="<?php echo set_value('username'); ?>"/>
                        <p> <?php echo form_error('username'); ?> </p>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
                        <p> <?php echo form_error('password'); ?> </p>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="password_conf" id="password_conf" placeholder="Repeat your password" value="<?php echo set_value('password_conf'); ?>"/>
                        <p> <?php echo form_error('password_conf'); ?> </p>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="btnSubmit" id="signup" class="form-submit" style="background-color: #114B4C;" value="Register"/>
                    </div>
                    <h7><?php echo $fail; ?></h7>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="<?= base_url() . "/assets/images/starred-ticket.png"; ?>" alt="sing up image"></figure>
                <a href="<?php echo site_url(). "/login"; ?>" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
 </body>
 </html>