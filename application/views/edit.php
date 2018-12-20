<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thaiwarehouse - AddWarehouse Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->
    </head>

    <body>

        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../home1" class="navbar-brand tm-site-name ">Thaiwarehouse</a>

                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>

                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="../home1" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="../NEWSEVENT1" class="nav-link">Mywarehouse</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../ContactUS1" class="nav-link">Contact US</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../AddWarehouse" class="nav-link">Add</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../profile" class="nav-link">Profile</a>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Edit Warehouse Of You</h3>
                            <p class="tm-form-description">แก้ไขคลังสินค้าของคุณ</p> 

                            <?php echo form_open('http://localhost:81/warehouse2/index.php/Home/update'); ?>
                            <form action="NEWSEVENT1" method="post" class="tm-contact-form" enctype="multipart/form-data">    
                                <div class="form-group">
                                    <label>ชื่อคลังสินค้า (ไทย):</label>
                                    <input type="text" value="<?php echo $r->nameth ?>" id="contact_name_th" name="nameth" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>ชื่อคลังสินค้า (อังกฤษ):</label>
                                    <input type="text" value="<?php echo $r->nameeng ?>" id="contact_name_eng" name="nameeng" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>ที่ตั้งคลังสินค้า :</label>
                                    <input type="text" value="<?php echo $r->location ?>" id="contact_location" name="location" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>จังหวัด :</label>
                                    <input type="text" id="contact_location" name="city" class="form-control" value="<?php echo $r->city ?>"  required/>

                                </div>
                                <div class="form-group">
                                    <label>ประเภทคลังสินค้า :</label>
                                    <input type="text" value="<?php echo $r->category ?>" class="form-control" name="category"/>

                                </div>
                                <div class="form-group">
                                    <label>ค่าเช่าเริ่มต้น (บาท/ตร.ม./เดือน) :</label>
                                    <input type="text" value="<?php echo $r->pricerange ?>" id="contact_rent" name="pricerange" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>รายละอียด :</label>
                                    <input type="text" value="<?php echo $r->description ?>" id="contact_detail" name="description" class="form-control"   required/>
                                </div>
                                <div class="form-group">
                                    <label>จุดเด่น/จุดสนใจ :</label>
                                    <input type="text" value="<?php echo $r->featured ?>" id="contact_featured" name="featured" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>ชื่อผู้ติดต่อ :</label>
                                    <input type="text" value="<?php echo $r->contacts ?>" id="contact_contacts" name="contacts" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>โทรศัพท์ :</label>
                                    <input type="text" value="<?php echo $r->phone ?>" id="contact_call" name="phone" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>อีเมล์ :</label>
                                    <input type="text" value="<?php echo $r->email ?>" id="contact_email" name="email" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>รูปภาพ :</label>
                                    <input type="text" value="<?php echo $r->image ?>" name="image" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>สถานะ :</label>
                                    <select name="status" value="<?php echo $r->status ?>" id="County_cen" class="form-control" style="margin-left:5px;">
                                        <option value="ไม่พร้อมใช้งาน"> ไม่พร้อมใช้งาน </option>
                                        <option value="พร้อมใช้งาน 10%"> พร้อมใช้งาน 10% </option>
                                        <option value="พร้อมใช้งาน 20%"> พร้อมใช้งาน 20% </option>
                                        <option value="พร้อมใช้งาน 30%"> พร้อมใช้งาน 30% </option>
                                        <option value="พร้อมใช้งาน 40%"> พร้อมใช้งาน 40% </option>
                                        <option value="พร้อมใช้งาน 50%"> พร้อมใช้งาน 50% </option>
                                        <option value="พร้อมใช้งาน 60%"> พร้อมใช้งาน 60% </option>
                                        <option value="พร้อมใช้งาน 70%"> พร้อมใช้งาน 70% </option>
                                        <option value="พร้อมใช้งาน 80%"> พร้อมใช้งาน 80% </option>
                                        <option value="พร้อมใช้งาน 90%"> พร้อมใช้งาน 90% </option>
                                        <option value="พร้อมใช้งาน 100%"> พร้อมใช้งาน 100% </option>
                                    </select>
                                </div>

                                <button type="submit" class="tm-btn">Edit</button>     

                            </form>   
                        </section>
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


        <script src="../../../assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="../../../assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

    </body>
</html>