

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <?php 
            if(session('user_img') == ""){
            ?>
                <img src="<?php echo base_url()?>/public/admin/assets/img/user_image.jpg" class="img-circle elevation-2" alt="User Image">
            <?php }else{
            ?>
                <img src="<?php echo base_url()?>/public/uploads/user/<?php echo session('user_img')?>" class="img-circle elevation-2" alt="User Image">
            <?php 
            }
            ?>
        </div>
        <div class="info">
          <a href="<?php echo base_url()?>/manage/profile" class="d-block"><?php echo session('user_name')?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url()?>/manage/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Bảng quản trị
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Bài viết
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/post/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả bài viết</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/post/add/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh mục</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Trang
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/page" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/page/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới</p>
                </a>
              </li>
             
            </ul>
          </li>

          
          
          

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Người dùng
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/user/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/user/add/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Thêm mới</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>/manage/shop-ui" class="nav-link">
              <i class="nav-icon  fas fa-image"></i>
              <p>
                Giao diện
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/shop-slider" class="nav-link">
                  <i class="nav-icon far fa-circle"></i>
                  <p>
                    Slider
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/banner" class="nav-link">
                  <i class="nav-icon far fa-circle"></i>
                  <p>
                    Banner
                    
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url()?>/manage/shop-ui" class="nav-link">
                  <i class="nav-icon far fa-circle"></i>
                  <p>
                    UI
                    
                  </p>
                </a>
              </li>

            </ul>
          </li>

          

          <li class="nav-item">
            <a href="<?php echo base_url()?>/manage/shop-info" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Thông tin cửa hàng
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>/manage/discount" class="nav-link">
              <i class="nav-icon fas fa-percentage"></i>
              <p>
               Khuyến mại
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url()?>/manage/options" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Cài đặt
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>