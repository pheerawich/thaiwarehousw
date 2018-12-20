<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thaiwarehouse - Home Page</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->
    </head>

    <body>

        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../index.php/Home" class="navbar-brand tm-site-name ">Thaiwarehouse</a>

                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>

                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="../index.php/Home" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../index.php/Home/About" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../index.php/Home/NEWSEVENT" class="nav-link">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../index.php/Home/ContactUS" class="nav-link">Contact US</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../index.php/Home/Register" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../index.php/Home/Login" class="nav-link">Login</a>
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

    <center>
        <tr>
            <td align="left">
                <form action="<?= base_url('Home/search') ?>" method="post" name="frmSearch">

                    <tr>
                        <td align="left">
                            <input type="text" name="nameth" id="keysearch" class="select_texbox" placeholder="search">
                            <select name="city" id="fcCate_cen" class="select_box" style="margin-left:5px;">
                                <option value="*">All City</option>
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

                            <select name="pricerange" id="LoyaltyFee" class="select_box" style="margin-left:5px;">
                                <option value="0"> Price Range </option>
                                <option value='2'> น้อยกว่า 5,000 </option>
                                <option value='3'> 5,001 - 10,000 </option>
                                <option value='4'> 10,001 - 20,000 </option>
                                <option value='5'> 20,001 - 50,000 </option>
                                <option value='6'> 50,001 - 100,000 </option>
                                <option value='7'> 100,001 - 500,000 </option>
                                <option value='8'> 500,001 - 1,000,000 </option>
                                <option value='9'> 1,000,000 - 2,000,000 </option>
                                <option value='10'> 2,000,000 - 4,000,000 </option>
                                <option value='11'> 4,000,000 - 6,000,000 </option>
                                <option value='12'> 6,000,000 - 8,000,000 </option>
                                <option value='13'> 8,000,000 - 10,000,000 </option>
                                <option value='14'> มากกว่า 10,000,000 </option>
                            </select>
                            <select name="category" id="County_cen" class="select_box" style="margin-left:5px;">
                                <option value="คลังสินค้าทั่วไป"> คลังสินค้าทั่วไป </option>
                                <option value="คลังสินค้าแช่เย็น"> คลังสินค้าแช่เย็น </option>
                            </select>
                        </td>
                        <td align="right"> 

                            <INPUT type="submit" value=" GO " id="search-button" href="" onClick="">     
                        </td></form>
        </tr>
    </tr></center>  

<section class="tm-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" border="5">

                <section>
                    <?php foreach ($h AS $r): ?>
                        <h5>ชื่อคลังสินค้า (ไทย) : <?php echo $r->nameth ?></h5> 
                        <h5>ชื่อคลังสินค้า (อังกฤษ) : <?php echo $r->nameeng ?></h5>
                        <h5>ที่ตั้งคลังสินค้า : <?php echo $r->location ?></h5>
                        <h5>จังหวัด : <?php echo $r->city ?></h5>
                        <h5>ประเภทคลังสินค้า : <?php echo $r->category ?></h5>
                        <h5>ค่าเช่าเริ่มต้น : <?php echo $r->pricerange ?></h5>
                        <h5>รายละอียด : <?php echo $r->description ?></h5>
                        <h5>จุดเด่น/จุดสนใจ : <?php echo $r->featured ?></h5>
                        <h5>ชื่อผู้ติดต่อ : <?php echo $r->contacts ?></h5>
                        <h5>โทรศัพท์ : <?php echo $r->phone ?></h5>
                        <h5>อีเมล์ : <?php echo $r->email ?></h5>
                        <h5>สถานะ : <?php echo $r->status ?></h5>
                        <br><br><br>
                    <?php endforeach; ?>
                </section>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">

                <div class="row">
                    <div class="tm-gold-text tm-form-title ">
                        <img src="../assets/img/1.jpg" alt="Image" width="500" height="300" ><br><br><br><br><br><br><br><br><br>
                    </div>  

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">

                <div class="row">
                    <div class="tm-gold-text tm-form-title ">
                        <img src="../assets/img/2.jpg" alt="Image" width="500" height="300" ><br><br><br><br><br><br><br><br><br>
                    </div>  

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">

                <div class="row">
                    <div class="tm-gold-text tm-form-title ">
                        <img src="../assets/img/3.jpg" alt="Image" width="500" height="300" ><br><br><br><br><br><br><br><br><br>
                    </div>  

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">

                <div class="row">
                    <div class="tm-gold-text tm-form-title ">
                        <img src="../assets/img/BK.jpg" alt="Image" width="500" height="300" ><br><br><br><br><br><br><br><br><br>
                    </div>  

                </div>
            </div>
        </div>
    </div>
</section>

<br>

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
<script src="../assets/js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
<script src="../assets/js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
</body>
</html>