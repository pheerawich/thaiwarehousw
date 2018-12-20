<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thaiwarehouse - Login Page</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->


    </head>

    <body>

        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../Home" class="navbar-brand tm-site-name ">Thaiwarehouse</a>


                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>

                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="../Home" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/About" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/NEWSEVENT" class="nav-link">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/ContactUS" class="nav-link">Contact US</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/Register" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/Login" class="nav-link">Login</a>
                                </li>
                            </ul>                        
                        </div>

                    </nav>  

                </div>                                  
            </div>            
        </div>



    <head>
        <meta charset="utf-8">
        <title>Login</title>

        <style type="text/css">
            body {
                background:url('https://image.dek-d.com/27/0546/1187/123338415');
                margin:0px;
                font-family: 'Ubuntu', sans-serif;
                background-size: 100% 110%;
                color:#ffe6e6;
            }
            h1, h2, h3, h4, h5, h6, a {
                margin:0; padding:0;
            }
            .login {
                margin:0 auto;
                max-width:500px;
                color:#4c4c4c;
            }
            .login-header {
                color:#fff;
                text-align:center;
                font-size:300%;
            }
            .login-header h1 {
                text-shadow: 0px 5px 15px #000; 
            }
            .login-form {
                border:.5px solid #fff;
                background:#4facff;
                background-color:rgba(50, 50, 171, 0.4);
                border-radius:10px;
                box-shadow:0px 0px 10px #000;
            }
            .login-form h3 {
                text-align:left;
                margin-left:40px;
                color:#fff;
            }
            .login-form {
                box-sizing:border-box;
                padding-top:15px;
                padding-bottom:10%;
                margin:5% auto;
                text-align:center;
            }
            .login input[type="text"],
            .login input[type="password"] {
                max-width:400px;
                width: 80%;
                line-height:3em;
                font-family: 'Ubuntu', sans-serif;
                margin:1em 2em;
                border-radius:5px;
                border:2px solid #f2f2f2;
                outline:none;
                padding-left:10px;
            }
            .login-form input[type="button"] {
                height:30px;
                width:100px;
                background:#fff;
                border:1px solid #f2f2f2;
                border-radius:20px;
                color: slategrey;
                text-transform:uppercase;
                font-family: 'Ubuntu', sans-serif;
                cursor:pointer;
            }
            .sign-up{
                color:#f2f2f2;
                margin-left:-70%;
                cursor:pointer;
                text-decoration:underline;
            }
            .no-access {
                color:#E86850;
                margin:20px 0px 20px -57%;
                text-decoration:underline;
                cursor:pointer;
            }
            .try-again {
                color:#f2f2f2;
                text-decoration:underline;
                cursor:pointer;
            }

            /*Media Querie*/
            @media only screen and (min-width : 150px) and (max-width : 530px){
                .login-form h3 {
                    text-align:center;
                    margin:0;
                }
                .sign-up, .no-access {
                    margin:10px 0;
                }
                .login-button {
                    margin-bottom:10px;
                }
            }
            .button {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #4CAF50;
                border: none;
                border-radius: 15px;

            }
            .button {
                background-color: #4CAF50; /* Green */
                border: 1px solid green;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                cursor: pointer;
                width: 150px;
                display: block;
            }

            .button:not(:last-child) {
                border-bottom: none; /* Prevent double borders */
            }

            .button:hover {
                background-color: #1a75ff;
            }
        </style>
    </head>
    <?php // echo form_open('Home/index0'); ?> 
    <div class="login">
        <div class="login-header">
            <h1>Login</h1>
        </div>

        <div class="login-form">
            <form name="form1" method="post" action="<?php echo base_url() ?>Home/index0">  
                <h3>User:</h3>
                <input name="user" type="text" placeholder="User"/><br>
                <h3>Password:</h3>
                <input name="password" type="password" placeholder="Password"/>
                <br>
                <center><input class="button" type="submit" value="Login"/></center>
                <br>
            </form>
            <a class="sign-up" href="../Home/Register"><center>Register</center></a>
        </div>
    </div>
</form>
<footer class="tm-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 tm-copyright-col">
                <p class="tm-copyright-text">Thaiwarehouse ศูนย์รวบรวมคลังสินค้าประเทศไทย</p>
            </div>
        </div>
    </div>
</footer>
<!-- load JS files -->
<script src="../../assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
<script src="../../assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

</body>
</html>