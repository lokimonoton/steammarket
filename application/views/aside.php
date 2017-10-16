<aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Mr. <?php echo $this->session->userdata('username'); ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Home</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="app/about"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                <li><a href="app/our"><i class="fa fa-angle-double-right"></i> Our Address</a></li>
                                <li><a href="l_notification"><i class="fa fa-angle-double-right"></i> Notification List</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Master Data</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="area"><i class="fa fa-angle-double-right"></i> Area</a></li>
                                <li><a href="area_city"><i class="fa fa-angle-double-right"></i> Area City</a></li>
                                <li><a href="attribute_item"><i class="fa fa-angle-double-right"></i> Attribute Item</a></li>
                                <li><a href="bank"><i class="fa fa-angle-double-right"></i> Bank</a></li>
                                <li><a href="branch"><i class="fa fa-angle-double-right"></i> Branch</a></li>
                                <li><a href="city"><i class="fa fa-angle-double-right"></i> List City</a></li>
                                <li><a href="country"><i class="fa fa-angle-double-right"></i> List Country</a></li>
                                <li><a href="region"><i class="fa fa-angle-double-right"></i> List Region</a></li>
                                <li><a href="region_state"><i class="fa fa-angle-double-right"></i> List Region State</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Purchasing</span>
                            <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="sales/purchaseorder"><i class="fa fa-angle-double-right"></i> Purchase Order (PO)</a></li>
                                <!--<li><a href="area_city"><i class="fa fa-angle-double-right"></i> Outstanding Purchase Order</a></li>-->
                                <!--<li><a href="attribute_item"><i class="fa fa-angle-double-right"></i> Purchase Receive (PR)</a></li>-->
                                <!--<li><a href="bank"><i class="fa fa-angle-double-right"></i> Purchase Invoice (PI)</a></li>-->
                                <!--<li><a href="branch"><i class="fa fa-angle-double-right"></i> Purchase Return Request (PCM)</a></li>-->
                                <!--<li><a href="city"><i class="fa fa-angle-double-right"></i> Purchase Return (DN)</a></li>-->
                                <!--<li><a href="country"><i class="fa fa-angle-double-right"></i> Archive</a></li>-->
                                <!--<li><a href="region"><i class="fa fa-angle-double-right"></i> Vendor Item Promotion</a></li>-->
                                <!--<li><a href="region_state"><i class="fa fa-angle-double-right"></i> Vendor List</a></li>-->
                            </ul>
                        </li> 
                        <li>
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Inventory</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Sales</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="sales/customerlist"><i class="fa fa-angle-double-right"></i> Customer List</a></li>
                                <!--<li><a href="area_city"><i class="fa fa-angle-double-right"></i> Sales Order(SO)</a></li>-->
                                <!--<li><a href="attribute_item"><i class="fa fa-angle-double-right"></i> Outstanding Sales Order</a></li>-->
                                <!--<li><a href="bank"><i class="fa fa-angle-double-right"></i> Delivery Order (DO)</a></li>-->
                                <!--<li><a href="branch"><i class="fa fa-angle-double-right"></i> Sales Invoice (SI)</a></li>-->
                                <!--<li><a href="city"><i class="fa fa-angle-double-right"></i> Kwitansi</a></li>-->
                                <!--<li><a href="country"><i class="fa fa-angle-double-right"></i> Sales Return Request (CN)</a></li>-->
                                <!--<li><a href="region"><i class="fa fa-angle-double-right"></i> Assembly Non Keep</a></li>-->
                                <!--<li><a href="region_state"><i class="fa fa-angle-double-right"></i> Sales Return (CM)</a></li>-->
                                <!--<li><a href="region_state"><i class="fa fa-angle-double-right"></i> Navigate</a></li>-->
                                <!--<li><a href="region_state"><i class="fa fa-angle-double-right"></i> Archive</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Finance</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Setup</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Reporting</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>Setting</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-laptop"></i> <span>LogOut</span>
                            </a>
                        </li>
                        
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>