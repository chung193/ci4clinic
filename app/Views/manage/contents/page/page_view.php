<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý trang</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản lý trang</li>
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
                <div class="p-4">
                    <a href="<?php echo base_url()?>/manage/page/add/">Thêm mới</a>
                </div>
                
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
                        Bài viết công khai (<?php echo $countpagepublic?>)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">
                        Nháp (<?php echo $countpagedraft?>)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">
                        Tất cả (<?php echo $countall?>)
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
                        <th>Mô tả</th>
                        <th>Tác giả</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($pagePublic as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a href="<?php echo base_url()?>/manage/page/edit/<?= $row['id'];?>">Edit</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/page/delete/<?= $row['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>

       <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table  id="example2"  class="table table-bordered table-striped dataTable dtr-inline">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Tác giả</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($pagedraft as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a href="<?php echo base_url()?>/manage/page/edit/<?= $row['id'];?>">Edit</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/page/delete/<?= $row['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    
        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table  id="example3"  class="table table-bordered table-striped dataTable dtr-inline" >
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Tác giả</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($page as $row):?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['description'];?></td>
                        <td><?= $row['username'];?></td>
                        <td><?php 
                        if($row['published'])
                            echo '<i class="bi bi-check2"></i>';
                        ?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['createdat']));?></td>
                        <td><?= date("d-m-Y h:i:s",strtotime($row['updateat']));?></td>
                        <td>
                            <a href="<?php echo base_url()?>/manage/page/edit/<?= $row['id'];?>">Edit</a>
                            <a class="text-danger" href="<?php echo base_url()?>/manage/page/delete/<?= $row['id'];?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
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