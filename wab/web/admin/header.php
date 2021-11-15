 <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-gray">
                <div class="cm-flex"><img src="../images/logo.png" width="220" height="50" /><a href="index.php" ></a></div>
                <div class="btn btn-gray md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li class="active"><a href="index.php" class="sf-house">หน้าหลัก ADMIN</a></li>
							<li class="cm-submenu">
                                <a class="sf-phone">จัดการข้อมูลโทรศัพท์ <span class="caret"></span></a>
                                <ul>
                                    <li><a href="insert_phone_number.php">เพิ่มเบอร์โทรศัพท์</a></li>
									<li><a href="show_phone_number.php">แก้ไข/ลบ เบอร์โทรศัพท์</a></li>
                                    
                                </ul>
								  </li>
								  <li class="cm-submenu">
                                <a class="sf-pencil">จัดการข้อมูลการแจ้งโทรศัพท์ <span class="caret"></span></a>
                                <ul>
                                    <li><a href="index.php">ข้อมูลที่กำลังการดำเนินการ</a></li>
                                    <li><a href="show_rehearsal.php">ข้อมูลการดำเนินการแล้วเสร็จ</a></li>
                                </ul>
								  </li>
                              
							<li><a href="report.php" class="sf-file-pdf">รายงานประจำเดือน</a></li>
							<li class="cm-submenu">
                                <a class="sf-user-male-alt">จัดการ ADMIN<span class="caret"></span></a>
                                <ul>
                                    <li><a href="register_admin.php">เพิ่ม ADMIN</a></li>
									<li><a href="Profile_admin.php">แก้ไข/ลบ ADMIN</a></li>
                                    
                                </ul>
								  </li>
							<li><a href="profile_admin.php" class="sf-user-male-alt">บุคลากร</a></li>
                            <li><a href="present.php" class="sf-file-video">แนะนำงานโทรศัพท์</a></li>
                            
                          
                          
                            <li><a href="download.php" class="sf-folder-document">download</a></li>
                            <li><a href="http://facebook.com/ccphonemsu" class="sf-social-facebook">facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-gray">
                <div class="btn btn-gray md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>โทรศัพท์ภายในมหาวิทยาลัย มหาสารคาม โทร. 043-754333 , 043-754321-40</h1> 
                    <form id="cm-search" action="index.php" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                <div class="pull-right">
                    <div id="cm-search-btn" class="btn btn-gray md-search-white" data-toggle="cm-search"></div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-gray md-notifications-white" data-toggle="dropdown">  </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a href="rehearsal.php" class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-envelope"></i> แจ้งซ่อมโทรศัพท์
                                    </h4>
                                    <p class="list-group-item-text text-overflow">สามารถแจ้งซ่อมโทรศัพท์ ภายใน ภายนอก</p>
									<p class="list-group-item-text text-overflow">ย้าย แก้ไข ซ่อมบำรุง โทรศัพท์...</p>
                                </a>
                                <a href="phoneall.php" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-envelope"></i> ค้นหาเลขหมายโทรศัพท์
                                    </h4>
                                    <p class="list-group-item-text">ค้นหาเลขหมายโทรศัพท์ ภายใน ภายนอก </p>
									<p class="list-group-item-text">ตามคณะ/หน่วยงานต่าง ๆ </p>
                                </a>
                                <a href="personal.php" class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-warning"></i> ติดต่อเจ้าหน้าที่
                                    </h4>
                                    <p class="list-group-item-text">สามารถติดต่อเจ้าหน้าที่ได้ ที่ เลขหมาย ภายใน 2505 </p>
									<p class="list-group-item-text">ภายนอก โทร.043-754350 สำนักคอมพิวเตอร์  </p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-gray btn-block" href="show_rehearsal.php">แสดงรายการแจ้งซ่อม</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-gray md-account-circle-white" data-toggle="dropdown"></button>
                   <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong><?=$objHi['firstname']." ".$objHi['lastname']?></strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="Profile_admin.php"><i class="fa fa-fw fa-user"></i>ดูข้อมูลผู้ใช้</a>
                        </li>
                        <li>
                            <a href="register_admin.php"><i class="fa fa-fw fa-cog"></i> เพิ่มผู้ใช้งาน</a>
                        </li>
                        <li>
                            <a href="checklogout.php"><i class="fa fa-fw fa-sign-out"></i>ออกจากระบบ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
       