<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thaiwarehouse - Home Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->
    </head>

    <body>

        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../Home" class="navbar-brand tm-site-name ">Thaiwarehouse</a>

                    <!-- navbar -->
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

        <div class="tm-about-img-container">

        </div>
        <br>

        <form action="<?= base_url('Home/uploadfile')?>" method="post" enctype="multipart/form-data">                                
            <div class="form-group">
                <label>รูปภาพ :</label>
                <input type="file" name="image" class="form-control" />
            </div>
            <button type="submit" class="tm-btn">Add</button>                          
        </form>   
        
        
        <?php if(isset($data)): ?>
        <p><img style="width: 488px" class="img-thumbnail" src="<?= base_url("application/uploads/{$data['file_name']}") ?>" ></p>
        
        <?php endif; ?>









        <!-- load JS files -->
        <script src="../../assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="../../assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

    </body>
</html>