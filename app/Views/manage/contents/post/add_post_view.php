

<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới bài viết</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
    <form action="<?php echo base_url()?>/manage/post/save" method="post" enctype='multipart/form-data'>
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
            <input type="text" id="title" class="form-control" name="title" placeholder="Tiêu đề">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Danh mục cha</label>
            <select class="form-control select2 select2-hidden-accessible" name="parentid" aria-label="Default select example">
                <?php 
                    showCategories($category);
                ?>
        </select>
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
            <textarea class="form-control" name="content" style="min-heigh: 400px" placeholder="Nội dung"  id="content" rows="3"></textarea>
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" name="published" type="checkbox" id="flexSwitchCheckChecked" value="1" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Xuất bản</label>
        </div>


        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>

        <div id="preview" class="pb-3"></div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    
    </div>
    </div>
    </div>
    <?php echo view('manage/contents/SEO/seo', $test) ?>
    </div>
    </form>
    
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

                <script>
                        

                        function renderImage(currentImage) {
                            var img = document.createElement("img");
                            var width = 400;
                            img.src = currentImage;
                            img.width = width;
                            img.alt = "user image";
                            document.getElementById("preview").innerHTML = '';
                            document.getElementById("preview").appendChild(img);
                        }

                        function readURL(evt) {
                            console.log(evt);
                            var file = evt.target.files[0];
                            if(!file.type.match('image.*')){
                                alert("unknow format");
                            }

                            var reader = new FileReader();

                            reader.onload = function(evt) {
                                currentImage = evt.target.result;            
                                renderImage(currentImage);
                            };

                            reader.readAsDataURL(file);
                        }

                        document.getElementById('imgus').addEventListener('change', readURL, false);
                        
                </script>
<!-- <?php 
// echo view('manage/contents/SEO/seo');
?> -->
