
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản trị viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Quản trị viên</li>
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
    <div class="card-body">
        
    <div class="pb-4">
        <a href="<?php echo base_url()?>/manage/user/add/">Thêm mới</a>
    </div>
    
    <table class="table table-bordered table-striped dataTable dtr-inline" id="example1">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($user as $row){
            if(!$row['is_superadmin']){?>
            <tr>
                <td><?= $row['nicename'];?></td>
                <td><?= $row['email'];?></td>
                <td><?= $row['role'];?></td>
                <td>
                    <a href="<?php echo base_url()?>/manage/user/edit/<?= $row['id'];?>">Sửa</a>
                    <a class="text-danger" href="<?php echo base_url()?>/manage/user/delete/<?= $row['id'];?>">Xóa</a>
                </td>
            </tr>
        <?php }
        } 
    ?>
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