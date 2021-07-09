<div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="heading">
                            <h3 class="uppercase">Dashboard</h3>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/dashboard')}}" class="nav-link">
                                <i class="fa fa-home"></i>
                                <span class="title">Dashboard</span>
                            </a> 
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Vendor Section</h3>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/vendor')}}" class="nav-link">
                                <i class="fa fa-user"></i>
                                <span class="title">Vendor</span>
                            </a> 
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Branch Section</h3>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/branch')}}" class="nav-link">
                                <i class="fa fa-code-branch"></i>
                                <span class="title">Branch</span>
                            </a> 
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Model Section</h3>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/model')}}" class="nav-link">
                                <i class="fa fa-code-branch"></i>
                                <span class="title">Model</span>
                            </a> 
                        </li>
                        
                        
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>