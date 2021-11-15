 <body class="cm-no-transition cm-1-navbar">
        <div id="cm-menu">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="cm-flex"><img src="../images/logo.png" width="220" height="50" /><a href="index.php" ></a></div>
                <div class="btn btn-primary md-menu-white" data-toggle="cm-menu"></div>
            </nav>
            <div id="cm-menu-content">
                <div id="cm-menu-items-wrapper">
                    <div id="cm-menu-scroller">
                        <ul class="cm-menu-items">
                            <li class="active"><a href="index.php" class="sf-house">หน้าหลัก</a></li>
							<li class="cm-submenu">
                                <a class="sf-phone">ข้อมูลโทรศัพท์ <span class="caret"></span></a>
                                <ul>
                                    <li><a href=?action=phoneall>ข้อมูลโทรศัพท์ทั้งหมด</a></li>
									<li><a href=?action=phonedepart>ข้อมูลโทรศัพท์ ตามคณะ/หน่วยงาน</a></li>
                                    <li><a href=?action=phonetot>ข้อมูลโทรศัพท์เบอร์ตรง TOT</a></li>
                                    <li><a href=?action=phonemsu>ข้อมูลโทรศัพท์ เบอร์ภานใน 4 หลัก</a></li>
									<li><a href=?action=phonevoip>ข้อมูลโทรศัพท์ เบอร์ภานใน VOIP</a></li>
                                </ul>  </li>
                               <li><a href=?action=rehearsal class="sf-wrench-screwdriver">แจ้งซ่อมโทรศัพท์</a></li>
			<li class="cm-submenu">
                                <a class="sf-bubble">ข้อมูลการแจ้งโทรศัพท์ <span class="caret"></span></a>
                                <ul>
                                 	<li><a href=?action=show_rehearsal>ข้อมูลการแจ้งซ่อม</a></li>
                                    <li><a href=?action=show_reactive>ข้อมูลที่กำลังการดำเนินการ</a></li>
                                    <li><a href=?action=show_reconfirm>ข้อมูลการดำเนินการแล้วเสร็จ</a></li>
                                </ul>
								  </li>
                              <li class="cm-submenu">
                                <a class="sf-file-pdf">คู่มือการใช้งาน <span class="caret"></span></a>
                                <ul>
                                    <li><a href=?action=mannualphone>คู่มือการใช้งานเครื่องโทรศัพท์พื้นฐาน</a></li>
                                    <li><a href=?action=mannualpc>คู่มือการใช้งานโทรศัพท์ผ่าน PC</a></li>
									<li><a href=?action=mannualvoip>คู่มือการใช้งานโทรศัพท์ VOIP</a></li>
                                    <li><a href=?action=mannualsmartphone>คู่มือการใช้งานโปรแกรมสมาร์ทโฟน</a></li>
                                </ul>
                            </li>
							<li><a href=?action=personal  class="sf-user-male-alt">บุคลากร</a></li>
                            <li><a href=?action=present class="sf-file-video">แนะนำงานโทรศัพท์</a></li>
                            
                          
                          
                            <li><a href=?action=download  class="sf-folder-document">download</a></li>
                            <li><a href="http://facebook.com/ccphonemsu" class="sf-social-facebook">facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <header id="cm-header">
            <nav class="cm-navbar cm-navbar-primary">
                <div class="btn btn-primary md-menu-white hidden-md hidden-lg" data-toggle="cm-menu"></div>
                <div class="cm-flex">
                    <h1>โทรศัพท์ภายในมหาวิทยาลัย มหาสารคาม โทร. 043-719800 </h1> 
                    <form id="cm-search" action="index.php" method="get">
                        <input type="search" name="q" autocomplete="off" placeholder="Search...">
                    </form>
                </div>
                
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-view-headline md-menu-white" data-toggle="dropdown">  </button>
                    <div class="popover cm-popover bottom">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <div class="list-group">
                                <a href=?action=show_rehearsal class="list-group-item">
                                    <h4 class="list-group-item-heading text-overflow">
                                        <i class="fa fa-fw fa-flash"></i> แสดงรายการแจ้งซ่อม
                                    </h4>
                                    <p class="list-group-item-text text-overflow">สามารถแจ้งซ่อมโทรศัพท์ ภายใน ภายนอก</p>
									<p class="list-group-item-text text-overflow">ย้าย แก้ไข ซ่อมบำรุง โทรศัพท์...</p>
                                </a>
                                <a href=?action=phoneall class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-search"></i> ค้นหาเลขหมายโทรศัพท์
                                    </h4>
                                    <p class="list-group-item-text">ค้นหาเลขหมายโทรศัพท์ ภายใน ภายนอก </p>
									<p class="list-group-item-text">ตามคณะ/หน่วยงานต่าง ๆ </p>
                                </a>
                                <a href=?action=personal class="list-group-item">
                                    <h4 class="list-group-item-heading">
                                        <i class="fa fa-fw fa-tty"></i> ติดต่อเจ้าหน้าที่
                                    </h4>
                                    <p class="list-group-item-text">สามารถติดต่อเจ้าหน้าที่ได้ ที่ เลขหมาย ภายใน 2505 </p>
									<p class="list-group-item-text">ภายนอก โทร.043-754350 สำนักคอมพิวเตอร์  </p>
                                </a>
                            </div>
                            <div style="padding:10px"><a class="btn btn-success btn-block" href=?action=rehearsal>แจ้งซ่อมโทรศัพท์</a></div>
                        </div>
                    </div>
                </div>
                <div class="dropdown pull-right">
                    <button class="btn btn-primary md-account-circle-white" data-toggle="dropdown" ></button>
                    <ul class="dropdown-menu">
                        <li class="disabled text-center">
                            <a style="cursor:default;"><strong>ADMIN</strong></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../admin/login.php"><i class="fa fa-fw fa-user"></i> Login</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cog"></i> Settings</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
       
