<div class="content-wrapper" style="min-height: 1345.6px">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa trang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() . '/manage/dashboard' ?>">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Sửa trang</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <form action="<?php echo base_url() ?>/manage/page/update" method="post" enctype='multipart/form-data'>
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                        </div>

                        <div class="card-body">
                            <?php if (isset($validation)) : ?>
                                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                            <?php endif; ?>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" id="title" class="form-control" name="title" placeholder="title" value="<?php echo $page->title ?>">
                            </div>


                            <input type="hidden" class="form-control" name="id" placeholder="meta title" value="<?php echo $page->id ?>">

                            <div class="mb-3">
                                <label for="title" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="slug" value="<?php echo $page->slug ?>">
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Danh mục</label>
                                <select name="cat_id" class="form-control select2 select2-hidden-accessible">
                                    <?php
                                    $select = '';
                                    foreach ($pagecat as $val) {
                                        if ($val['id'] == $page->cat_id) {
                                            $select = 'selected';
                                        }
                                    ?>
                                        <option value="<?= $val['id'] ?>" <?= $select ?>><?= $val['name'] ?></option>
                                    <?php $select = '';
                                    } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Mô tả</label>
                                <textarea class="form-control" name="description" placeholder="content" rows="3"><?php echo $page->description ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Nội dung</label>
                                <textarea class="form-control" name="content" placeholder="content" id="content" rows="3"><?php echo $page->content ?></textarea>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" name="published" value="1" type="checkbox" id="flexSwitchCheckChecked" <?php
                                                                                                                                        if ($page->published) {
                                                                                                                                            echo 'checked';
                                                                                                                                        }
                                                                                                                                        ?>>
                                <label class="form-check-label" for="flexSwitchCheckChecked">Xuất bản</label>
                            </div>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" name="image" id="imgus" class="custom-file-input">
                                    <label class="custom-file-label" for="customFile">Chọn file ảnh đại diện</label>
                                </div>
                            </div>

                            <div class="pb-2" id="preview">
                                <?php if ($page->img) { ?>
                                    <img src="<?php echo base_url() . '/public/uploads/page/' . $page->img ?>" width="200">
                                <?php } ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
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
    CKEDITOR.plugins.addExternal('codesnippet', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/codesnippet/', 'plugin.js');
    CKEDITOR.plugins.addExternal('autolink', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/autolink/', 'plugin.js');
    CKEDITOR.plugins.addExternal('bootstrapTabs', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/bootstrapTabs/', 'plugin.js');
    CKEDITOR.plugins.addExternal('btgrid', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/btgrid/', 'plugin.js');
    CKEDITOR.plugins.addExternal('ckeditorfa', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/ckeditorfa/', 'plugin.js');
    CKEDITOR.plugins.addExternal('contents', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/contents/', 'plugin.js');
    CKEDITOR.plugins.addExternal('easyimage', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/easyimage/', 'plugin.js');
    CKEDITOR.plugins.addExternal('emoji', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/emoji/', 'plugin.js');
    CKEDITOR.plugins.addExternal('gg', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/gg/', 'plugin.js');
    CKEDITOR.plugins.addExternal('imageresize', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/imageresize/', 'plugin.js');
    CKEDITOR.plugins.addExternal('table', '<?php echo base_url() ?>/public/admin/assets/lib/ckeditor/plugins/table/', 'plugin.js');


    CKEDITOR.replace('content', {
        extraPlugins: 'codesnippet, autolink, bootstrapTabs, btgrid, ckeditorfa, contents,easyimage, emoji, gg, imageresize, table '
    })

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
        if (!file.type.match('image.*')) {
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