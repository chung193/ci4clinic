
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
<form action="<?php echo base_url()?>/manage/category/update" method="post">
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
            <input type="text" id="title" class="form-control" name="title" value="<?php echo $category->title ?>" placeholder="tiêu đề">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Danh mục cha</label>
            <select name="parent_id" class="form-control select2 select2-hidden-accessible">
                <option value="0" <?php if($category->parent_id == 0) {echo 'selected';};?>>Không có danh mục cha</option>
                <?php showCategories($category->parent_id, $category_list); ?>
            </select>
            
        </div>

        <input type="hidden" class="form-control" name="id" value="<?php echo $category->id ?>">

        
        <div class="mb-3">
            <label for="title" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" value="<?php echo $category->slug ?>" placeholder="slug">
        </div>

        <button type="submit"  class="btn btn-primary">Lưu lại</button>
    
    </div>
    </div>
    </div>
    <?php 
    echo view('manage/contents/SEO/seo', $test) 
    ?>
    </div>
    </form>
    </div>
    </section>
    </div>

    <?php 
    function showCategories($id, $categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id)
            {
              if($item['id'] == $id){
                echo '<option value="'.$item['id'].'" selected>';
                    echo $char . $item['title'];
                echo '</option>';
              }else{
                echo '<option value="'.$item['id'].'">';
                    echo $char . $item['title'];
                echo '</option>';
              }
                
                 
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                 
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($id, $categories, $item['id'], $char.'— ');
            }
        }
    }
?>

