
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý bài viết</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
    <div class="col-md-12">
    <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                        Bài viết công khai (<?php echo $countpostpublic?>)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">
                        Tất cả bài viết (<?php echo $countpost?>)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">
                        Bản nháp (<?php echo $countpostdraft?>)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">
                        Thùng rác (<?php echo $countposttrash?>)
                    </a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                  <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Tác giả</th>
                        <th>Xuất bản</th>
                        <th>Tạo lúc</th>
                        <th>Cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($postpublic as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['cattitle'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a class="text-info" href="<?php echo base_url()?>/manage/post/edit/<?= $row['id'];?>">Sửa</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/post/delete/<?= $row['id'];?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Tác giả</th>
                        <th>Xuất bản</th>
                        <th>Tạo lúc</th>
                        <th>Cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </tfoot>
                </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table  id="example2"  class="table table-bordered table-striped dataTable dtr-inline">
                    <thead>
                        <tr>
                        <th>Tên</th>
                        <th>Danh mục</th>
                        <th>Tác giả</th>
                        <th>Xuất bản</th>
                        <th>Tạo lúc</th>
                        <th>Cập nhật</th>
                        <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($post as $row):?>
                        <tr>
                            <td><?= $row['title'];?></td>
                            <td><?= $row['cattitle'];?></td>
                            <td><?= $row['username'];?></td>
                            <td><?php 
                            if($row['published'])
                                echo '<i class="bi bi-check2"></i>';
                            ?></td>
                            <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                            <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                            <td>
                                <a class="text-info" href="<?php echo base_url()?>/manage/post/edit/<?= $row['id'];?>">Sửa</a>
                                <a class="text-danger" href="<?php echo base_url()?>/manage/post/delete/<?= $row['id'];?>">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Danh mục</th>
                            <th>Tác giả</th>
                            <th>Xuất bản</th>
                            <th>Tạo lúc</th>
                            <th>Cập nhật</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
                </table>                  
            </div>

                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table  id="example3"  class="table table-bordered table-striped dataTable dtr-inline" >
                        <thead>
                            <tr>
                            <th>Tên</th>
                            <th>Danh mục</th>
                            <th>Tác giả</th>
                            <th>Xuất bản</th>
                            <th>Tạo lúc</th>
                            <th>Cập nhật</th>
                            <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($postdraft as $row):?>
                            <tr>
                                <td><?= $row['title'];?></td>
                                <td><?= $row['cattitle'];?></td>
                                <td><?= $row['username'];?></td>
                                <td><?php 
                                if($row['published'])
                                    echo '<i class="bi bi-check2"></i>';
                                ?></td>
                                <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                                <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                                <td>
                                    <a class="text-info" href="<?php echo base_url()?>/manage/post/edit/<?= $row['id'];?>">Sửa</a>
                                    <a class="text-danger" href="<?php echo base_url()?>/manage/post/delete/<?= $row['id'];?>">Xóa</a>
                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>                  
                </div>
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                  <table  id="example4"  class="table table-bordered table-striped dataTable dtr-inline">
                <thead>
                    <tr>
                            <th>Tên</th>
                            <th>Danh mục</th>
                            <th>Tác giả</th>
                            <th>Xuất bản</th>
                            <th>Tạo lúc</th>
                            <th>Cập nhật</th>
                            <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($posttrash as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['cattitle'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a class="text-info" href="<?php echo base_url()?>/manage/post/edit/<?= $row['id'];?>">Sửa</a>
                            <a class="text-success" href="<?php echo base_url()?>/manage/post/restore/<?= $row['id'];?>">Khôi phục</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/post/delete-from-trash/<?= $row['id'];?>">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Danh mục</th>
                            <th>Tác giả</th>
                            <th>Xuất bản</th>
                            <th>Tạo lúc</th>
                            <th>Cập nhật</th>
                            <th>Thao tác</th>
                        </tr>
                    </tfoot>
            </table>                  
        </div>
                </div>
              </div>
              <!-- /.card -->
        </div>
</div>
</div>
    </div>
    </div>
</div>
</section>
</div>

