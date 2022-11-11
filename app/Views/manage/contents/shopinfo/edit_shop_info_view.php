
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thông tin cửa hàng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thông tin cửa hàng</li>
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
    <form action="<?php echo base_url()?>/manage/shop-info/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tên</label>
            <input type="text" id="title" class="form-control" name="name" placeholder="Tên shop" value="<?php echo $shopinfo->name?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="address" placeholder="meta title" value="<?php echo $shopinfo->address?>">
        </div>

        <input type="hidden" class="form-control" name="id" value="<?php echo $shopinfo->id?>">
        <input type="hidden" class="form-control" name="logo_old" value="<?php echo $shopinfo->logo?>">
        <input type="hidden" class="form-control" name="favicon_old" value="<?php echo $shopinfo->favicon?>">
        
        <div class="mb-3">
            <label for="title" class="form-label">Điện thoại</label>
            <input type="text" class="form-control" name="phone" placeholder="phone" value="<?php echo $shopinfo->phone?>">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $shopinfo->email?>">
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>

        <div class="pb-2" id="preview">
        <?php if($shopinfo->logo){ ?>
                <img src="<?php echo base_url().'/public/uploads/logo/'.$shopinfo->logo?>" width="200">
        <?php } ?>
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="favicon" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Favicon</label>
            </div>
        </div>

        <?php if($shopinfo->favicon){ ?>
                <img src="<?php echo base_url().'/public/uploads/favicon/'.$shopinfo->favicon?>" width="100" style="margin: 0 20;display: block">
        <?php } ?>

        <button type="submit" class="btn btn-primary">Lưu lại</button>
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
