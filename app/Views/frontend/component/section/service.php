<div class="vc_row wpb_row vc_row-fluid vc_custom_1484638563134">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.5s; -moz-transition-delay: 0.5s; transition-delay: 0.5s;" data-opacity_start_effect="">
                    <div class="dt-sc-icon-heading aligncenter animated bounceInDown" style="opacity:1;-webkit-animation-delay:0.5s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.5s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.5s;animation-duration:1s;animation-iteration-count:1;test">
                        <div class="icon-wrapper"><span class="fa fa-stethoscope"> </span></div>
                        <div class="icon-content">
                            <h2 class="text-uppercase">Dịch vụ <strong>của chúng tôi</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="dt-sc-clear "> </div>
                <div class="ult-spacer spacer-63691ac0c2b96" data-id="63691ac0c2b96" data-height="40" data-height-mobile="40" data-height-tab="40" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>

                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484303874743">

                    <?php
                    $i = 0;
                    foreach ($dichvu as $val) {
                        if ($i < 3) {
                    ?>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                            <div class="dt-sc-image-caption type8 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;">
                                                <div class="dt-sc-image-wrapper">
                                                    <a target="_self" href="<?= base_url() ?>/<?= $val['slug'] ?>">
                                                        <img width="1170" height="795" src="<?= base_url() ?>/public/uploads/page/<?= $val['img'] ?>" class="attachment-full" alt="" loading="lazy" srcset="<?= base_url() ?>/public/uploads/page/<?= $val['img'] ?> 1170w, <?= base_url() ?>/public/uploads/page/<?= $val['img'] ?> 300w, <?= base_url() ?>/public/uploads/page/<?= $val['img'] ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px">
                                                    </a>
                                                </div>
                                                <div class="dt-sc-image-content">
                                                    <div class="dt-sc-image-title">
                                                        <h3><?= $val['title'] ?></h3>
                                                    </div>
                                                    <p><?= $val['description'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                        $i++;
                    }
                    ?>
                </div>

                <div class="vc_row wpb_row vc_inner vc_row-fluid">

                    <?php
                    $i = 0;
                    foreach ($dichvu as $val) {
                        if ($i < 6 && $i > 2) {
                    ?>
                            <div class="wpb_column vc_column_container vc_col-sm-4">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                            <div class="dt-sc-image-caption type8 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;test">
                                                <div class="dt-sc-image-wrapper">
                                                    <a target="_self" href="<?= base_url() ?>/<?= $val['slug'] ?>">
                                                        <img width="1170" height="795" src="<?= base_url() ?>/public/uploads/page/<?= $val['img'] ?>" class="attachment-full" alt="" loading="lazy" srcset="<?= base_url() ?>/public/uploads/page/<?= $val['img'] ?> 1170w, <?= base_url() ?>/public/uploads/page/<?= $val['img'] ?> 300w, <?= base_url() ?>/public/uploads/page/<?= $val['img'] ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px">
                                                    </a>
                                                </div>
                                                <div class="dt-sc-image-content">
                                                    <div class="dt-sc-image-title">
                                                        <h3><?= $val['title'] ?></h3>
                                                    </div>
                                                    <p><?= $val['description'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                        $i++;
                    }
                    ?>

                </div>
                <div class="ult-spacer spacer-63691ac0c53f4" data-id="63691ac0c53f4" data-height="70" data-height-mobile="30" data-height-tab="50" data-height-tab-portrait="50" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
            </div>
        </div>
    </div>
</div>