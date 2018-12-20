<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thaiwarehouse - Contact Page</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->


    </head>

    <body>

        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../Home" class="navbar-brand tm-site-name">Thaiwarehouse</a>

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

        <div class="tm-contact-img-container">

        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Thaiwarehouse Contact US</h3>
                            <p class="tm-form-description">ติดต่อสอบถาม ปัญหาการใช้งานและข้อมูลคลังสินค้าต่างๆ</p> 


                            <form action="<?php echo base_url() ?>Home/ContactUS" method="post" class="tm-contact-form">                                
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="contact_message" name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                                </div>

                                <button type="submit" name="submit" class="tm-btn">Submit</button>                          
                            </form>   
                        </section>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">

                        <div class="row">
                            <div class="tm-gold-text tm-form-title ">
                                <img src="../../assets/img/mail.jpg" alt="Image" width="700" height="500" >
                            </div>  

                        </div>
                    </div>
                </div>
            </div>
        </section>

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