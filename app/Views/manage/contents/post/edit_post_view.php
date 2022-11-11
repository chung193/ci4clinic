
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa bài viết</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Sửa bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
    <form action="<?php echo base_url()?>/manage/post/update" method="post" enctype='multipart/form-data'>
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
            <input type="text" id="title" class="form-control" name="title" placeholder="Tiêu đề" value="<?php echo $post->title?>">
        </div>

        <input type="hidden" class="form-control" name="id" placeholder="meta title" value="<?php echo $post->id?>">


        <div class="mb-3">
            <label for="title" class="form-label">Danh mục cha</label>
            <select class="form-control select2 select2-hidden-accessible"  name="parentid" aria-label="Default select example">
                <option selected>Chọn một danh mục</option>
                <?php 
                        foreach ($category as $item)
                        {
                         // Nếu là chuyên mục con thì hiển thị
                             if($item['id'] == $post->parentid){
                                 echo '<option value="'.$item['id'].'" selected>';
                                     echo $item['title'];
                                 echo '</option>';
                             }else{
                                 echo '<option value="'.$item['id'].'">';
                                     echo $item['title'];
                                 echo '</option>';
                             }
                        }  
                ?>
        </select>
        </div>
        
        <div class="mb-3">
            <label for="title" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="slug" value="<?php echo $post->slug?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Mô tả</label>
            <textarea class="form-control" name="description" placeholder="content" rows="3"><?php echo $post->description?></textarea>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nội dung</label>
            <textarea class="form-control" name="content" placeholder="content" id="content" rows="3"><?php echo $post->content?></textarea>
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" name="published" value="1" type="checkbox" id="flexSwitchCheckChecked" 
            <?php 
                if($post->published){
                    echo 'checked';
                }
            ?>
            
            >
            <label class="form-check-label" for="flexSwitchCheckChecked">Xuất bản</label>
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="image" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>

        <div class="pb-2" id="preview">
        <?php if($post->img){ ?>
                <img src="<?php echo base_url().'/public/uploads/post/'.$post->img?>" width="200">
        <?php } ?>
        </div>

        <button type="submit" class="btn btn-primary">Lưu lại</button>
    
        </div>
        </div>
    </div>
    <?php echo view('manage/contents/SEO/seo', $test); ?>
    </div>
    </form>
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
