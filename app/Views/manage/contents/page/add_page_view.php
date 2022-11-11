<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới trang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới trang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
<form action="<?php echo base_url()?>/manage/page/save" method="post">
    <div class="row">
    <div class="col-md-8">
    <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    </div>

    <div class="card-body">

    <?php if(isset($validation)):?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif;?>
    
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" class="form-control" name="title" placeholder="title">
        </div>

        
        <div class="mb-3">
            <label for="title" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="slug">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Mô tả</label>
            <textarea class="form-control" name="description" placeholder="content" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nội dung</label>
            <textarea class="form-control" name="content" placeholder="content" id="content" rows="3"></textarea>
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" name="published" type="checkbox" id="flexSwitchCheckChecked" value="1" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Công khai</label>
        </div>

        <button type="submit"  class="btn btn-primary">Lưu lại</button>
        </div>
    </div>
    </div>
    <?php echo view('manage/contents/SEO/seo', $test) ?>
    </div>
    </form>
    </div>
    </section>
</div>
<script>
    CKEDITOR.plugins.addExternal( 'codesnippet', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/codesnippet/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'autolink', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/autolink/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'bootstrapTabs', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/bootstrapTabs/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'btgrid', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/btgrid/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'ckeditorfa', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/ckeditorfa/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'contents', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/contents/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'easyimage', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/easyimage/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'emoji', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/emoji/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'gg', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/gg/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'imageresize', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/imageresize/', 'plugin.js' );
                        CKEDITOR.plugins.addExternal( 'table', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/table/', 'plugin.js' );


                        CKEDITOR.replace( 'content', {
                            extraPlugins: 'codesnippet, autolink, bootstrapTabs, btgrid, ckeditorfa, contents,easyimage, emoji, gg, imageresize, table '})
</script>