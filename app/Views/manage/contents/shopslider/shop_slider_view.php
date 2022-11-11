<?php 
// print_r($slider);die();
?>
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Slider</li>
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
    </div>
    
    <div class="card-body">
    <a href="<?php echo base_url()?>/manage/shop-slider/add/" class="text-success m-2">Thêm mới</a>
    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th>Tiêu đề chính</th>
                <th>Tiêu đề phụ</th>
                <th>URL</th>
                <th>Ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($slider as $row){
                    ?>
                    <tr>
                        <td><?php echo $row['main_title'] ?></td>
                        <td><?php echo $row['sub_title'] ?></td>
                        <td><?php echo $row['url'] ?></td>
                        <td><img src="<?php echo base_url().'/public/uploads/slider/'.$row['img'] ?>" width="200"></td>
                        <td>
                            <a href="<?php echo base_url() ?>/manage/shop-slider/edit/<?php echo $row['id']?>" class="text-info">Edit</a>
                            <a href="<?php echo base_url() ?>/manage/shop-slider/delete/<?php echo $row['id']?>" class="text-danger">Delete</a></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>
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


