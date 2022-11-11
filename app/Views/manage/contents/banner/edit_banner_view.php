
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Chỉnh sửa banner</li>
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

    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    <form action="<?php echo base_url()?>/manage/banner/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề chính</label>
            <input type="text" id="title" class="form-control" name="text_main" value="<?= $banner->text_main ?>" placeholder="tiêu đề chính">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề phụ</label>
            <input type="text" class="form-control" name="text_sub" value="<?= $banner->text_sub ?>" placeholder="Tiêu đề phụ">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">URL</label>
            <input type="text" class="form-control" name="url" value="<?= $banner->url ?>" placeholder="URL">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Vị trí</label>
            <select class="custom-select" name="location">
                <option selected value="home">Trang chủ</option>
                <option value="blog/productlist">Danh sách sản phẩm/ Blog</option>
            </select>
        </div>

        <input type="hidden" class="form-control" name="id" value="<?= $banner->id ?>" >
        <input type="hidden" class="form-control" name="img_old" value="<?= $banner->img ?>" >

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Chọn ảnh</label>
            </div>
        </div>

        <img src="<?= base_url().'/public/uploads/banner/'.$banner->img ?>" width="200">
        <div id="preview" class="pb-3 pt-3"></div>

        <button type="submit"  class="btn btn-primary">Lưu</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>

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

