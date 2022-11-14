
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
<form action="<?php echo base_url()?>/manage/pagecat/update" method="post">
    <div class="row">
    <div class="col-md-8">
    <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    </div>
    
    <div class="card-body">

    <?php if(session()->getFlashdata('msg')):?> 
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" class="form-control" name="name" value="<?php echo $pagecat->name ?>" placeholder="tiêu đề">
        </div>

        <input type="hidden" class="form-control" name="id" value="<?php echo $pagecat->id ?>">

        <button type="submit"  class="btn btn-primary">Lưu lại</button>
    
    </div>
    </div>
    </div>
    
    </div>
    </form>
    </div>
    </section>
    </div>


