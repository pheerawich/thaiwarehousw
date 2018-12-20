<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thaiwarehouse - AddWarehouse Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->
    </head>

    <body>

        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../Home/home1" class="navbar-brand tm-site-name ">Thaiwarehouse</a>


                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>

                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="../Home/home1" class="nav-link">Home</a>
                                </li>

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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Add Warehouse Of You</h3>
                            <p class="tm-form-description">เพิ่มคลังสินค้าของคุณ</p> 

                            <?php echo form_open('http://localhost:81/warehouse2/index.php/Home/addware'); ?>
                            <form action="AddWarehouse" method="post" class="tm-contact-form" enctype="multipart/form-data">                                
                                <div class="form-group">
                                    <label>ชื่อคลังสินค้า (ไทย):</label>
                                    <input type="text" id="contact_name_th" name="nameth" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>ชื่อคลังสินค้า (อังกฤษ):</label>
                                    <input type="text" id="contact_name_eng" name="nameeng" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>ที่ตั้งคลังสินค้า :</label>
                                    <input type="text" id="contact_location" name="location" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>จังหวัด :</label>
                                    <!--<input type="text" id="contact_location" name="contact_location" class="form-control"  required/>-->
                                    <select name="city" id="fcCate_cen" class="form-control" style="margin-left:5px;">
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ประเภทคลังสินค้า :</label>

                                    <select name="category" id="County_cen" class="form-control" style="margin-left:5px;">
                                        <option value="คลังสินค้าทั่วไป"> คลังสินค้าทั่วไป </option>
                                        <option value="คลังสินค้าแช่เย็น"> คลังสินค้าแช่เย็น </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ค่าเช่าเริ่มต้น (บาท/ตร.ม./เดือน) :</label>
                                    <input type="text" id="contact_rent" name="pricerange" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>รายละอียด :</label>
                                    <input type="text" id="contact_detail" name="description" class="form-control"   required/>
                                </div>
                                <div class="form-group">
                                    <label>จุดเด่น/จุดสนใจ :</label>
                                    <input type="text" id="contact_featured" name="featured" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>ชื่อผู้ติดต่อ :</label>
                                    <input type="text" id="contact_contacts" name="contacts" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label>โทรศัพท์ :</label>
                                    <input type="text" id="contact_call" name="phone" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>อีเมล์ :</label>
                                    <input type="text" id="contact_email" name="email" class="form-control"  required/>
                                </div>
                                <div class="form-group">
                                    <label>รูปภาพ :</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>สถานะ :</label>
                                    <select name="status" id="County_cen" class="form-control" style="margin-left:5px;">
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
                                <button type="submit" class="tm-btn">Add</button>                          
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

        <!-- load JS files -->
        <script src="../../assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="../../assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

    </body>
</html>