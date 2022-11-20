<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Đăng ký</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">đăng ký</li>
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
    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th>Email</th>
                <!-- <th>Thao tác</th> -->
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($sub as $row){
            ?>
            <tr>
                <td><?= $row['email']?></td>
                <!-- <td>
                    <a class="text-info" href="<?php echo base_url()?>/manage/book/edit/<?= $row['id'];?>">Sửa</a>
                    <a class="text-danger" href="<?php echo base_url()?>/manage/book/delete/<?= $row['id'];?>">Xóa</a>
                </td> -->
            </tr>
            <?php } ?>
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

