

<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sửa slider</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa slider</li>
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
    <form action="<?php echo base_url()?>/manage/shop-slider/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" class="form-control" name="main_title" placeholder="Tiêu đề chính" value="<?php echo $slider->main_title?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề phụ</label>
            <input type="text" class="form-control" name="sub_title" placeholder="Tiêu đề phụ" value="<?php echo $slider->sub_title?>">
        </div>

        <input type="hidden" class="form-control" name="id" value="<?php echo $slider->id?>">
        <input type="hidden" class="form-control" name="old_img" value="<?php echo $slider->img?>">

        <div class="mb-3">
            <label for="title" class="form-label">URL</label>
            <input type="text" class="form-control" name="url" placeholder="URL" value="<?php echo $slider->url?>">
        </div>


        <img src="<?php echo base_url().'/public/uploads/slider/'.$slider->img ?>" width="200" style="margin-bottom:20px">

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>

        <div id="preview" class="pb-3"></div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
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
<!-- <?php 
// echo view('manage/contents/SEO/seo');
?> -->
