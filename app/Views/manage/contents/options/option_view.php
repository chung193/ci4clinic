
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cài đặt website</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Cài đặt website</li>
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
    <div class="card-body">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    <form action="<?php echo base_url()?>/manage/options/save" method="post" enctype='multipart/form-data'>

        <h3>Mail</h3>

        <div class="mb-3">
            <label for="title" class="form-label">Mail protocol</label>
            <input type="text" id="title" class="form-control" name="data['mail_protocol']" placeholder="Mail protocol" value="<?php echo $option['mail_protocol']['value']?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Mail smtp</label>
            <input type="text" class="form-control" name="data['mail_SMTPHost']" placeholder="Mail smtp" value="<?php echo $option['mail_SMTPHost']['value']?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Mail port</label>
            <input type="text" class="form-control" name="data['mail_SMTPPort']" placeholder="Mail port" value="<?php echo $option['mail_SMTPPort']['value']?>">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Mail smtp crypto</label>
            <input type="text" class="form-control" name="data['mail_SMTPCrypto']" placeholder="Mail smtp crypto" value="<?php echo $option['mail_SMTPCrypto']['value']?>">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Mail user</label>
            <input type="text" class="form-control" name="data['mail_user']" placeholder="Mail user" value="<?php echo $option['mail_user']['value']?>">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Mail password</label>
            <input type="text" class="form-control" name="data['mail_password']" placeholder="Mail password" value="<?php echo $option['mail_password']['value']?>">
        </div>

        
        <h3>Trang web</h3>
        <p class="text-danger">Chú ý với phần này</p>

        <div class="mb-3">
            <label for="title" class="form-label">Mail mặc định của trang</label>
            <input type="text" class="form-control" name="data['site_mail']" placeholder="Default mail of site" value="<?php echo $option['site_mail']['value']?>">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Site title</label>
            <input type="text" class="form-control" name="data['site_title']" placeholder="Site title" value="<?php echo $option['site_title']['value']?>">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Site meta title</label>
            <textarea class="form-control" name="data['site_metatitle']" placeholder="Site meta title" rows="3"><?php echo $option['site_metatitle']['value']?></textarea>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Site description</label>
            <textarea class="form-control" name="data['site_description']" placeholder="Site description" rows="3"><?php echo $option['site_description']['value']?></textarea>
        </div>   
        
        <p class="text-danger">Quan trọng !</p>
        
        <div class="form-check form-switch pb-3">
            <input class="form-check-input " name="data['site_status']" value="<?= $option['site_status']['value'] ?>"
            type="checkbox" id="site_status" 
            <?php 
                if($option['site_status']['value']){
                    echo 'checked';
                }
            ?>
            >
            <label class="form-check-label" for="flexSwitchCheckChecked">
                <?php 
                    if($option['site_status']['value']){
                        echo '<span class="text-primary">Site online</span>';
                    }else{
                        echo '<span class="text-danger">Site online</span>';
                    }
                ?>
                
            </label>
        </div>

        <button  id="site" class="btn btn-primary">Lưu lại</button>
    </form>
    </div>
                </div>
              </div>
              <!-- /.card -->
        </div>
</div>
</div>
    </div>
    </div>
</div>
</section>
</div>


