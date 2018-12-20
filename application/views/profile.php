<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thaiwarehouse - Profile Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->
</head>

    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../Home/home1" class="navbar-brand tm-site-name ">Thaiwarehouse</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="../Home/home1" class="nav-link">Home</a>
                                </li>
<!--                                <li class="nav-item">
                                    <a href="../Home/About1" class="nav-link">About</a>
                                </li>-->
                                <li class="nav-item">
                                    <a href="../Home/NEWSEVENT1" class="nav-link">Mywarehouse</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/ContactUS1" class="nav-link">Contact US</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/AddWarehouse" class="nav-link">Add</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home/profile" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Home" class="nav-link">Logout</a>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
        <div class="tm-blog-img-container"></div>
        
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">

                        <div class="row">
                            <div class="tm-gold-text tm-form-title ">
                                <img src="../../assets/img/profile.jpg" alt="Image" width="300" height="300" >
                            </div>  

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Profile</h3>
                            <?php // echo form_open('http://localhost:81/warehouse2/index.php/Home/saveprofile');  ?>
                            <form action="profile" class="tm-contact-form">                                
                                <div class="form-group">
                                    <label>User :</label>
                                    <input type="text" id="profile_user" name="user" class="form-control" placeholder="user" value="<?php echo $pro -> user ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" id="profile_name" name="name" class="form-control" placeholder="name" value="<?php echo $pro -> name ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Lastname :</label>
                                    <input type="text" id="profile_last" name="latname" class="form-control" placeholder="latname" value="<?php echo $pro -> lastname ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Email :</label>
                                    <input type="text" id="profile_last" name="email" class="form-control" placeholder="email" value="<?php echo $pro -> emailr ?>" required/>
                                </div>
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input type="password" id="profile_last" name="password" class="form-control" placeholder="password" value="<?php echo $pro -> password ?>" required/>
                                </div>

                                <button type="submit" class="tm-btn">Save</button>                          
                            </form>   
                        </section>
                    </div>
                </div>
            </div>
    </section>
        


        <!-- load JS files -->
        <script src="../../assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="../../assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>