

<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới người dùng</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới người dùng</li>
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
    <form action="<?php echo base_url()?>/manage/user/save" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tên</label>
            <input type="text" id="title" class="form-control" name="firstname" placeholder="firstname">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Họ</label>
            <input type="text" class="form-control" name="middlename" placeholder="Middlename">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tên đệm</label>
            <input type="text" class="form-control" name="lastname" placeholder="lastname">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Tên hiển thị</label>
            <input type="text" class="form-control" name="nicename" placeholder="nice name">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="password" placeholder="password">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" name="confpassword" placeholder="confirmpassword">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Quyền</label>
            <select class="custom-select rounded-0" name="role" aria-label="Default select example">
                <option value="admin">Quản trị</option>
                <option value="editor" selected>Nhập liệu</option>
            </select>        
        </div>
        

        <div class="mb-3">
            <label for="title" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tự bạch</label>
            <textarea class="form-control" name="profile" placeholder="content" rows="3"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="userimage" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Chọn ảnh đại diện</label>
            </div>
        </div>

        

        <div class="pb-2" id="preview"></div>

        <button type="submit"  class="btn btn-primary">Save</button>
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
