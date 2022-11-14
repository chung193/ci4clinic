<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Danh mục bài viết</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Danh mục</li>
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
    <a href="<?php echo base_url()?>/manage/category/add/" class="text-success m-2">Thêm mới</a>
    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th>Tên danh mục</th>
                <th>url</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($category as $val){
                    echo '
                    <tr>
                        <td>'.$val['title'].'</td>
                        <td>'.$val['slug'].'</td>
                        <td>
                            <a href="'.base_url().'/manage/category/edit/'.$val['id'].'" class="text-info">Edit</a>
                            <a href="'.base_url().'/manage/category/delete/'.$val['id'].'" class="text-danger">Delete</a>
                        </td>
                    </tr>
                    ';
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


