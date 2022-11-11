
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới danh mục</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm danh mục</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
<form action="<?php echo base_url()?>/manage/category/save" method="post">
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
            <input type="text" id="title" class="form-control" name="title" placeholder="tiêu đề">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Danh mục cha</label>
            <select name="parent_id" class="form-control select2 select2-hidden-accessible">
                <option value="0">Không có danh mục cha</option>
                <?php showCategories($category); ?>
            </select>
            
        </div>

        
        <div class="mb-3">
            <label for="title" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="slug">
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" name="show_in_menu" type="checkbox" id="flexSwitchCheckChecked" value="1" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Hiện trên menu</label>
            <p>Hiện các bài viết trong danh mục này trên menu</p>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nội dung</label>
            <textarea class="form-control" name="content" placeholder="Nội dung" rows="3"></textarea>
        </div>


        <button type="submit"  class="btn btn-primary">Lưu</button>
    
    </div>
    </div>
    </div>
    <?php echo view('manage/contents/SEO/seo', $test) ?>
    </div>
    </form>
    </div>
    </section>
    </div>

<?php 
    function showCategories($categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id)
            {
                echo '<option value="'.$item['id'].'">';
                    echo $char . $item['title'];
                echo '</option>';
                 
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                 
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $item['id'], $char.'— ');
            }
        }
    }
?>