<div class="content-wrapper" style="min-height: 1345.6px">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa location</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() . '/manage/dashboard' ?>">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa location</li>
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

                        <?php if (session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>
                        <form action="<?php echo base_url() ?>/manage/location/update" method="post" enctype='multipart/form-data'>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Địa chỉ</label>
                                <textarea class="form-control" name="address" id="message-text"><?= $location->address ?></textarea>
                            </div>
                            <input type="hidden" value="<?= $location->id?>" name="id">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>