<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thaiwarehouse - New Page</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
        <link rel="stylesheet" href="../../assets/css/templatemo-style.css">                                   <!-- Templatemo style -->


    </head>

    <body>
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="../Home/home1" class="navbar-brand tm-site-name">Thaiwarehouse</a>
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


    <center>
        <table id="myTable" class="display"  border="5">
            <thead>
                <tr>
                    <th width="30"><center>ชื่อคลังสินค้า (ไทย)</center></th>
            <th width="27"><center>ชื่อคลังสินค้า (อังกฤษ)</center></th>
            <th width="100"><center>ที่ตั้งคลังสินค้า</center></th>
            <th width="27"><center>จังหวัด</center></th>
            <th width="250"><center>ประเภทคลังสินค้า</center></th>
            <th width="27"><center>ค่าเช่าเริ่มต้น</center></th>
            <th width="250"><center>รายละอียด</center></th>
            <th width="250"><center>จุดเด่น/จุดสนใจ</center></th>
            <th width="27"><center>ชื่อผู้ติดต่อ</center></th>
            <th width="27"><center>โทรศัพท์</center></th>
            <th width="27"><center>อีเมล์</center></th>
            <th width="27"><center>รูปภาพ</center></th>
            <th width="27"><center>สถานะ</center></th>
            <th width="27"><center>-</center></th>


            </tr>
            </thead>
            <tbody>
                <?php foreach ($o AS $r): ?>
                    <tr align="center">
                        <td><?php echo $r->nameth ?></td>
                        <td><?php echo $r->nameeng ?></td>
                        <td><?php echo $r->location ?></td>
                        <td><?php echo $r->city ?></td>
                        <td><?php echo $r->category ?></td>
                        <td><?php echo $r->pricerange ?></td>
                        <td><?php echo $r->description ?></td>
                        <td><?php echo $r->featured ?></td>
                        <td><?php echo $r->contacts ?></td>
                        <td><?php echo $r->phone ?></td>
                        <td><?php echo $r->email ?></td>
                        <td><?php echo $r->image ?></td>
                        <td><?php echo $r->status ?></td>  
                        <td><div>
                                <div class="col">
                                    <a href="<?= base_url("Home/update1/{$r->id}") ?>" class="btn btn-warning btn-block btn-sm">
                                        แก้ไข
                                    </a>
                                </div> 
                                <div class="col">
                                    <a onclick="return confirm('คุนต้องการจะลบข้อมูลนี้หรือไม่')" href="<?= base_url("Home/delete/{$r->id}") ?>" class="btn btn-warning btn-block btn-sm">
                                        ลบ
                                    </a>
                                </div>
                            </div></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>


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