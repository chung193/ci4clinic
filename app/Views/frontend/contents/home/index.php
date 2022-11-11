<?php 
    // print_r($dichvu); die();
?>

<div id="main">
    <div class="container">
        <section id="primary" class="content-full-width">
            <div id="post-10436" class="post-10436 page type-page status-publish hentry">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1484638563134">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.5s; -moz-transition-delay: 0.5s; transition-delay: 0.5s;" data-opacity_start_effect="">
                                    <div class="dt-sc-icon-heading aligncenter animated bounceInDown" style="opacity:1;-webkit-animation-delay:0.5s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.5s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.5s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="icon-wrapper"><span class="fa fa-stethoscope"> </span></div>
                                        <div class="icon-content">
                                            <h2>Dịch vụ của chúng tôi</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="dt-sc-clear "> </div>
                                <div class="ult-spacer spacer-63691ac0c2b96" data-id="63691ac0c2b96" data-height="40" data-height-mobile="40" data-height-tab="40" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                
                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484303874743">
                                    
                                    <?php 
                                        $i = 0;
                                        foreach($dichvu as $val){
                                            if($i < 3){
                                    ?>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-image-caption type8 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="dt-sc-image-wrapper">
                                                            <a target="_self" href="<?= base_url() ?>/bai-viet/<?= $val['slug'] ?>">
                                                                <img width="1170" height="795" src="<?= base_url() ?>/public/uploads/post/<?= $val['img'] ?>" class="attachment-full" alt="" loading="lazy" 
                                                                srcset="<?= base_url() ?>/public/uploads/post/<?= $val['img'] ?> 1170w, <?= base_url() ?>/public/uploads/post/<?= $val['img'] ?> 300w, <?= base_url() ?>/public/uploads/post/<?= $val['img'] ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px">
                                                            </a>
                                                        </div>
                                                        <div class="dt-sc-image-content">
                                                            <div class="dt-sc-image-title">
                                                                <h3><?= $val['title']?></h3>
                                                            </div>
                                                            <p><?= $val['description']?></p>
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
                                        foreach($dichvu as $val){
                                            if($i < 6 && $i > 2){
                                    ?>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-image-caption type8 animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="dt-sc-image-wrapper">
                                                            <a target="_self" href="<?= base_url() ?>/bai-viet/<?= $val['slug'] ?>">
                                                                <img width="1170" height="795" src="<?= base_url() ?>/public/uploads/post/<?= $val['img'] ?>" class="attachment-full" alt="" loading="lazy" 
                                                                srcset="<?= base_url() ?>/public/uploads/post/<?= $val['img'] ?> 1170w, <?= base_url() ?>/public/uploads/post/<?= $val['img'] ?> 300w, <?= base_url() ?>/public/uploads/post/<?= $val['img'] ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px">
                                                            </a>
                                                        </div>
                                                        <div class="dt-sc-image-content">
                                                            <div class="dt-sc-image-title">
                                                                <h3><?= $val['title']?></h3>
                                                            </div>
                                                            <p><?= $val['description']?></p>
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
                <div style="background-attachment: fixed !important; position: relative; left: -351.5px; box-sizing: border-box; width: 1903px; padding-left: 351.5px; padding-right: 351.5px;" data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid dt-sc-skin-color dt-sc-dark-bg wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504352993928 vc_row-has-fill wpb_start_animation animated">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY" data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.3s; -moz-transition-delay: 1.3s; transition-delay: 1.3s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-icon-box type7 aligncenter animated flipInY" style="opacity:1;-webkit-animation-delay:1.3s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.3s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.3s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="icon-wrapper">
                                                            <img width="60" height="60" src="<?= base_url().getenv('solution-1-icon') ?>" class="attachment-full" alt="img" loading="lazy"></div>
                                                        <div class="icon-content">
                                                            <h5><?= getenv('solution-1')?><strong><?= getenv('solution-1-strong')?></strong></h5>
                                                            <h4><?= getenv('solution-1-1')?></h4>
                                                            <p><?= getenv('solution-1-2')?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY" data-animation-delay="1.6" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.6s; -moz-transition-delay: 1.6s; transition-delay: 1.6s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-icon-box type7 aligncenter animated flipInY" style="opacity:1;-webkit-animation-delay:1.6s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.6s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.6s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="icon-wrapper"><img width="60" height="60" src="<?= base_url().getenv('solution-2-icon') ?>" class="attachment-full" alt="img" loading="lazy"></div>
                                                        <div class="icon-content">
                                                            <h5><?= getenv('solution-2')?><strong><?= getenv('solution-2-strong')?></strong></h5>
                                                            <h4><?= getenv('solution-2-1')?></h4>
                                                            <p><?= getenv('solution-2-2')?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ult-spacer spacer-63691ac0c665d" data-id="63691ac0c665d" data-height="5" data-height-mobile="5" data-height-tab="5" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="1.9" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.9s; -moz-transition-delay: 1.9s; transition-delay: 1.9s;" data-opacity_start_effect="">
                                    <div class="dt-sc-arrow-headed-hr-separator animated fadeInUp" style="opacity:1;-webkit-animation-delay:1.9s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.9s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.9s;animation-duration:1s;animation-iteration-count:1;test"><span></span></div>
                                    <div class="ult-spacer spacer-63691ac0c6711 animated fadeInUp" data-id="63691ac0c6711" data-height="35" data-height-mobile="35" data-height-tab="35" data-height-tab-portrait="" data-height-mobile-landscape="" style="opacity:1;-webkit-animation-delay:1.9s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.9s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.9s;animation-duration:1s;animation-iteration-count:1;clear:both;display:block;"></div>
                                    <h2 style="opacity:1;-webkit-animation-delay:1.9s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.9s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.9s;animation-duration:1s;animation-iteration-count:1;font-size: 28px;text-align: center" class="vc_custom_heading vc_custom_1482394283794 animated fadeInUp"><?= getenv('fig-solution-1')?> <strong><?= getenv('fig-solution-1-strong')?></strong></h2>
                                    <div class="wpb_text_column wpb_content_element aligncenter animated fadeInUp" style="opacity:1;-webkit-animation-delay:1.9s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.9s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.9s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="wpb_wrapper">
                                            <p><em><?= getenv('fig-solution-2')?></em></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="ult-spacer spacer-63691ac0c6d66" data-id="63691ac0c6d66" data-height="55" data-height-mobile="55" data-height-tab="55" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid aligncenter">
                                    <div class="center-button wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="2.2" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 2.2s; -moz-transition-delay: 2.2s; transition-delay: 2.2s;" data-opacity_start_effect=""><a href="https://dtdental.wpengine.com/home-page-1-2/#" target="_self" title="" class="dt-sc-button xlarge white bordered animated bounceIn" style="opacity:1;-webkit-animation-delay:2.2s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:2.2s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:2.2s;animation-duration:1s;animation-iteration-count:1;test"> <?= getenv('fig-solution-book')?></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid services-section3 vc_custom_1484308126005" style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px; padding-left: 351.5px; padding-right: 351.5px;">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceInDown" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.5s; -moz-transition-delay: 0.5s; transition-delay: 0.5s;" data-opacity_start_effect="">
                                    <div class="dt-sc-icon-heading aligncenter animated bounceInDown" style="opacity:1;-webkit-animation-delay:0.5s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.5s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.5s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="icon-wrapper"><span><img width="162" height="140" src="<?= base_url() ?>/public/frontend/template/css/title_img5.png" class="attachment-full" alt="img" loading="lazy"></span></div>
                                        <div class="icon-content">
                                            <h2><?= getenv('title-1')?> <strong><?= getenv('title-1-strong')?></strong></h2>
                                            <p><?= getenv('sub-title-1')?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ult-spacer spacer-63691ac0c787f" data-id="63691ac0c787f" data-height="70" data-height-mobile="30" data-height-tab="50" data-height-tab-portrait="50" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid our-features">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                                    <div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <ul class="smile_icon_list left circle with_bg">
                                                            <li class="icon_list_item" style=" font-size:72px;">
                                                                <div class="icon_list_icon animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="font-size:24px;border-width:1px;border-style:none;background:#00bcd5;color:#050505;border-color:#333333;"><img class="list-img-icon" alt="white-icon" src="<?= base_url().getenv('icon-1') ?>"></div>
                                                                <div class="icon_description" id="Info-list-wrap-1867" style="font-size:24px;">
                                                                    <h3 class="ult-responsive info-list-heading" data-ultimate-target="#Info-list-wrap-1867 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:50px;&quot;}" style=""><?= getenv('skill-1-bold')?></h3>
                                                                    <div class="icon_description_text ult-responsive" data-ultimate-target="#Info-list-wrap-1867 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="">
                                                                        <p><?= getenv('skill-1')?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="icon_list_connector animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="border-right-width: 1px;border-right-style: dashed;border-color: #cecece;"></div>
                                                            </li>
                                                            <li class="icon_list_item" style=" font-size:72px;">
                                                                <div class="icon_list_icon animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="font-size:24px;border-width:1px;border-style:none;background:#00bcd5;color:#050505;border-color:#333333;"><img class="list-img-icon" alt="white-icon2" src="<?= base_url().getenv("icon-2") ?>"></div>
                                                                <div class="icon_description" id="Info-list-wrap-6533" style="font-size:24px;">
                                                                    <h3 class="ult-responsive info-list-heading" data-ultimate-target="#Info-list-wrap-6533 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:50px;&quot;}" style=""><?= getenv('skill-2-bold')?></h3>
                                                                    <div class="icon_description_text ult-responsive" data-ultimate-target="#Info-list-wrap-6533 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="">
                                                                        <p><?= getenv('skill-2')?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="icon_list_connector animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="border-right-width: 1px;border-right-style: dashed;border-color: #cecece;"></div>
                                                            </li>
                                                            <li class="icon_list_item" style=" font-size:72px;">
                                                                <div class="icon_list_icon animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="font-size:24px;border-width:1px;border-style:none;background:#00bcd5;color:#050505;border-color:#333333;"><img class="list-img-icon" alt="white-icon2" src="<?= base_url().getenv("icon-3") ?>"></div>
                                                                <div class="icon_description" id="Info-list-wrap-6533" style="font-size:24px;">
                                                                    <h3 class="ult-responsive info-list-heading" data-ultimate-target="#Info-list-wrap-6533 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:50px;&quot;}" style=""><?= getenv('skill-3-bold')?></h3>
                                                                    <div class="icon_description_text ult-responsive" data-ultimate-target="#Info-list-wrap-6533 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="">
                                                                        <p><?= getenv('skill-3')?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="icon_list_connector animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="border-right-width: 1px;border-right-style: dashed;border-color: #cecece;"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown" data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.4s; -moz-transition-delay: 1.4s; transition-delay: 1.4s;" data-opacity_start_effect="">
                                                    <div class="wpb_single_image wpb_content_element vc_align_center animated zoomInDown" style="opacity:1;-webkit-animation-delay:1.4s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.4s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.4s;animation-duration:1s;animation-iteration-count:1;test">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="768" height="768" src="<?= base_url() ?>/public/frontend/template/css/services5-2.jpg" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services5-2.jpg 768w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services5-2-150x150.jpg 150w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services5-2-300x300.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services5-2-200x200.jpg 200w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services5-2-500x500.jpg 500w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services5-2-600x600.jpg 600w" sizes="(max-width: 768px) 100vw, 768px"></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.1s; -moz-transition-delay: 1.1s; transition-delay: 1.1s;" data-opacity_start_effect="">
                                                    <div class="smile_icon_list_wrap ult_info_list_container ult-adjust-bottom-margin animated fadeInUp" style="opacity:1;-webkit-animation-delay:1.1s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.1s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.1s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <ul class="smile_icon_list right circle with_bg">

                                                            <li class="icon_list_item" style=" font-size:72px;">
                                                                <div class="icon_list_icon animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="font-size:24px;border-width:1px;border-style:none;background:#00bcd5;color:#050505;border-color:#333333;"><img class="list-img-icon" alt="white-icon2" src="<?= base_url().getenv("icon-4") ?>"></div>
                                                                <div class="icon_description" id="Info-list-wrap-6533" style="font-size:24px;">
                                                                    <h3 class="ult-responsive info-list-heading" data-ultimate-target="#Info-list-wrap-6533 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:50px;&quot;}" style=""><?= getenv('skill-4-bold')?></h3>
                                                                    <div class="icon_description_text ult-responsive" data-ultimate-target="#Info-list-wrap-6533 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="">
                                                                        <p><?= getenv('skill-4')?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="icon_list_connector animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="border-right-width: 1px;border-right-style: dashed;border-color: #cecece;"></div>
                                                            </li>

                                                            <li class="icon_list_item" style=" font-size:72px;">
                                                                <div class="icon_list_icon animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="font-size:24px;border-width:1px;border-style:none;background:#00bcd5;color:#050505;border-color:#333333;"><img class="list-img-icon" alt="white-icon2" src="<?= base_url().getenv("icon-5") ?>"></div>
                                                                <div class="icon_description" id="Info-list-wrap-6533" style="font-size:24px;">
                                                                    <h3 class="ult-responsive info-list-heading" data-ultimate-target="#Info-list-wrap-6533 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:50px;&quot;}" style=""><?= getenv('skill-5-bold')?></h3>
                                                                    <div class="icon_description_text ult-responsive" data-ultimate-target="#Info-list-wrap-6533 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="">
                                                                        <p><?= getenv('skill-5')?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="icon_list_connector animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="border-right-width: 1px;border-right-style: dashed;border-color: #cecece;"></div>
                                                            </li>

                                                             <li class="icon_list_item" style=" font-size:72px;">
                                                                <div class="icon_list_icon animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="font-size:24px;border-width:1px;border-style:none;background:#00bcd5;color:#050505;border-color:#333333;"><img class="list-img-icon" alt="white-icon2" src="<?= base_url().getenv("icon-6") ?>"></div>
                                                                <div class="icon_description" id="Info-list-wrap-6533" style="font-size:24px;">
                                                                    <h3 class="ult-responsive info-list-heading" data-ultimate-target="#Info-list-wrap-6533 h3" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:20px;&quot;,&quot;line-height&quot;:&quot;desktop:50px;&quot;}" style=""><?= getenv('skill-6-bold')?></h3>
                                                                    <div class="icon_description_text ult-responsive" data-ultimate-target="#Info-list-wrap-6533 .icon_description_text" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:13px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="">
                                                                        <p><?= getenv('skill-6')?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="icon_list_connector animated fadeInUp delay-03" data-animation="fadeInUp" data-animation-delay="03" style="border-right-width: 1px;border-right-style: dashed;border-color: #cecece;"></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg aligncenter0 dt-sc-skin-color wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504353491679 wpb_start_animation animated" style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px; padding-left: 351.5px; padding-right: 351.5px;">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="1" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1s; -moz-transition-delay: 1s; transition-delay: 1s;" data-opacity_start_effect="">
                                    <h2 style="opacity:1;-webkit-animation-delay:1s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1s;animation-duration:1s;animation-iteration-count:1;font-size: 40px;text-align: left" class="vc_custom_heading animated fadeInUp">Technology at your service!</h2>
                                    <div class="wpb_text_column wpb_content_element animated fadeInUp" style="opacity:1;-webkit-animation-delay:1s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="wpb_wrapper">
                                            <p>Sed convallis, lorem quis viverra dictum, ex diam cursus justo, ut vehicula lacus leo vel ante. Sed at egestas lorem.<br>
                                                Etiam lobortis metus justo, tempor commodo risus cursus sit amet. Donec at lacinia magna.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_inner vc_row-fluid app-btn">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.3s; -moz-transition-delay: 1.3s; transition-delay: 1.3s;" data-opacity_start_effect="">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left app-btn animated bounceIn" style="opacity:1;-webkit-animation-delay:1.3s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.3s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.3s;animation-duration:1s;animation-iteration-count:1;test">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="160" height="56" src="<?= base_url() ?>/public/frontend/template/css/app-store-1.png" class="vc_single_image-img attachment-full" alt="" loading="lazy"></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="1.6" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.6s; -moz-transition-delay: 1.6s; transition-delay: 1.6s;" data-opacity_start_effect="">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left app-btn animated bounceIn" style="opacity:1;-webkit-animation-delay:1.6s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.6s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.6s;animation-duration:1s;animation-iteration-count:1;test">

                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="160" height="56" src="<?= base_url() ?>/public/frontend/template/css/app-store2.png" class="vc_single_image-img attachment-full" alt="" loading="lazy"></div>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown" data-animation-delay="1.9" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.9s; -moz-transition-delay: 1.9s; transition-delay: 1.9s;" data-opacity_start_effect="">
                                    <div class="wpb_single_image wpb_content_element vc_align_center animated zoomInDown" style="opacity:1;-webkit-animation-delay:1.9s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.9s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.9s;animation-duration:1s;animation-iteration-count:1;test">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="452" height="309" src="<?= base_url() ?>/public/frontend/template/css/device-1.png" class="vc_single_image-img attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/device-1.png 452w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/device-1-300x205.png 300w" sizes="(max-width: 452px) 100vw, 452px"></div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp wpb_start_animation animated">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="dt-sc-tabs-horizontal-frame-container type3">
                                    <ul class="dt-sc-tabs-horizontal-frame">
                                        <li><a href="javascript:void(0);" class="current">Better Oral Health</a></li>
                                        <li><a href="javascript:void(0);">Common Dental</a></li>
                                        <li><a href="javascript:void(0);">Nutrition &amp; Dental Health</a></li>
                                    </ul>
                                    <div class="dt-sc-tabs-horizontal-frame-content" style="">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><strong>Free dental care:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est sed lacus volutpat lobortis. Lorem ipsum dolor sit amet. Going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text .</p>

                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="dt-sc-image-flip"><img width="768" height="350" src="<?= base_url() ?>/public/frontend/template/css/img1(1).jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img1.jpg 768w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img1-300x137.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"><img width="768" height="350" src="<?= base_url() ?>/public/frontend/template/css/img15.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img15.jpg 768w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img15-300x137.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="dt-sc-image-flip"><img width="768" height="350" src="<?= base_url() ?>/public/frontend/template/css/img2-1.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img2-1.jpg 768w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img2-1-300x137.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"><img width="768" height="350" src="<?= base_url() ?>/public/frontend/template/css/img16.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img16.jpg 768w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/img16-300x137.jpg 300w" sizes="(max-width: 768px) 100vw, 768px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ult-spacer spacer-63691ac0cca90" data-id="63691ac0cca90" data-height="40" data-height-mobile="40" data-height-tab="40" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="dt-sc-tabs-horizontal-frame-content" style="display: none;">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p><strong>Free dental care:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est sed lacus volutpat lobortis. Lorem ipsum dolor sit amet. Going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text .</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="dt-sc-progress-wrapper">
                                                            <div class="dt-sc-bar-title">SURGICAL PROCEDURES</div>
                                                            <div class="dt-sc-progress dt-sc-progress-striped active">
                                                                <div class="dt-sc-bar" style="background-color:#00bcd5;" data-value="90">
                                                                    <div class="dt-sc-bar-text"><span> 90% </span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ult-spacer spacer-63691ac0cd08e" data-id="63691ac0cd08e" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                                        <div class="dt-sc-progress-wrapper">
                                                            <div class="dt-sc-bar-title">COSMETIC SURGERY</div>
                                                            <div class="dt-sc-progress dt-sc-progress-striped active">
                                                                <div class="dt-sc-bar" style="background-color:#00bcd5;" data-value="80">
                                                                    <div class="dt-sc-bar-text"><span> 80% </span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ult-spacer spacer-63691ac0cd0a1" data-id="63691ac0cd0a1" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                                        <div class="dt-sc-progress-wrapper">
                                                            <div class="dt-sc-bar-title">DENTAL IMPLANTS</div>
                                                            <div class="dt-sc-progress dt-sc-progress-striped active">
                                                                <div class="dt-sc-bar" style="background-color:#00bcd5;" data-value="75">
                                                                    <div class="dt-sc-bar-text"><span> 75% </span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ult-spacer spacer-63691ac0cd0b0" data-id="63691ac0cd0b0" data-height="10" data-height-mobile="10" data-height-tab="10" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                                        <div class="dt-sc-progress-wrapper">
                                                            <div class="dt-sc-bar-title">RESTORATIVE PROCEDURES</div>
                                                            <div class="dt-sc-progress dt-sc-progress-striped active">
                                                                <div class="dt-sc-bar" style="background-color:#00bcd5;" data-value="95">
                                                                    <div class="dt-sc-bar-text"><span> 95% </span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dt-sc-tabs-horizontal-frame-content" style="display: none;">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><strong>Free dental care:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id est sed lacus volutpat lobortis. Lorem ipsum dolor sit amet. Going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text .</p>

                                            </div>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ult-spacer spacer-63691ac0cd289" data-id="63691ac0cd289" data-height="70" data-height-mobile="30" data-height-tab="50" data-height-tab-portrait="50" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504353922513 ult-vc-hide-row vc_row-has-fill wpb_start_animation animated" data-rtl="false" style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px; padding-left: 351.5px; padding-right: 351.5px;" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true">
                    <div class="upb_row_bg vcpb-default" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="0" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" style="background-size: cover; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0); background-image: url(&quot;https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/img12.jpg&quot;); background-attachment: fixed; min-width: 1903px; left: 0px; width: 1902px;">
                        <div class="upb_bg_overlay" style="background-color:rgba(0,0,0,0.77);"></div>
                        <div class="upb_bg_overlay_pattern" style="background-image:url(https://dtdental.wpengine.com/wp-content/plugins/Ultimate_VC_Addons/assets/images/patterns/08.png); opacity:1; ; background-attachment:scroll;"></div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-8">
                        <div class="vc_column-inner vc_custom_1466401553262">
                            <div class="wpb_wrapper">
                                <div class="ult-spacer spacer-63691ac0cd62c" data-id="63691ac0cd62c" data-height="100" data-height-mobile="100" data-height-tab="100" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.3s; -moz-transition-delay: 1.3s; transition-delay: 1.3s;" data-opacity_start_effect="">
                                    <div id="ultimate-heading-719063691ac0cd6ea" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-719063691ac0cd6ea uvc-1318 animated bounceIn" data-hspacer="no_spacer" data-halign="left" style="opacity:1;-webkit-animation-delay:1.3s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.3s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.3s;animation-duration:1s;animation-iteration-count:1;text-align:left">
                                        <div class="uvc-heading-spacer no_spacer" style="top"></div>
                                        <div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-719063691ac0cd6ea h5" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:30px;&quot;,&quot;line-height&quot;:&quot;&quot;}">
                                            <h5 style="font-family:&#39;Roboto&#39;;font-style:italic;font-weight:500;color:#999999;">Planning Dental Implants</h5>
                                        </div>
                                        <div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-719063691ac0cd6ea .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:54px;&quot;,&quot;line-height&quot;:&quot;&quot;}" style="font-weight:normal;color:#ffffff;margin-bottom:10px;">COMPLETE DENTURES</div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element animated bounceIn" style="opacity:1;-webkit-animation-delay:1.3s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.3s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.3s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="wpb_wrapper">
                                            <p><span style="color: #999999;">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</span></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-spacer spacer-63691ac0cd914" data-id="63691ac0cd914" data-height="150" data-height-mobile="20" data-height-tab="" data-height-tab-portrait="" data-height-mobile-landscape="40" style="clear:both;display:block;"></div>
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="bounceIn" data-animation-delay="1.3" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.3s; -moz-transition-delay: 1.3s; transition-delay: 1.3s;" data-opacity_start_effect="">
                                    <div class="ult-just-icon-wrapper vc_custom_1484116995053 animated bounceIn" style="opacity:1;-webkit-animation-delay:1.3s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.3s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.3s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="align-icon" style="text-align:center;">
                                            <a class="aio-tooltip 63691ac0cd9be" href="https://dtdental.wpengine.com/home-page-1-2/#" data-toggle="tooltip" data-placement="top" data-original-title="" title=""></a>
                                            <div class="aio-tooltip 63691ac0cd9be" data-toggle="tooltip" data-placement="top" title="" data-original-title="Watch Video"><a class="aio-tooltip 63691ac0cd9be" href="https://dtdental.wpengine.com/home-page-1-2/#" data-toggle="tooltip" data-placement="top" data-original-title="" title="">
                                                    <div class="aio-icon circle animated fadeInDown delay-03" data-animation="fadeInDown" data-animation-delay="03" style="color:#ffffff;background:#00bcd5;font-size:35px;display:inline-block;">
                                                        <i class="Defaults-video-camera"></i>
                                                    </div>
                                                </a></div>
                                            <script>
                                                jQuery(function() {
                                                    jQuery(".63691ac0cd9be").bsf_tooltip("hide")
                                                })
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="ult-spacer spacer-63691ac0cd9e6" data-id="63691ac0cd9e6" data-height="150" data-height-mobile="20" data-height-tab="" data-height-tab-portrait="" data-height-mobile-landscape="40" style="clear:both;display:block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1484640677021">
                    <div class="aligncenter wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="vc_row wpb_row vc_inner vc_row-fluid rs_min_height_team_col">
                                    <div class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3" style="min-height: 395px;">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.5s; -moz-transition-delay: 0.5s; transition-delay: 0.5s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-team hide-social-role-show-on-hover animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.5s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.5s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.5s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="dt-sc-team-thumb"><img width="420" height="420" src="<?= base_url() ?>/public/frontend/template/css/team1-1.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team1-1.jpg 420w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team1-1-150x150.jpg 150w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team1-1-300x300.jpg 300w" sizes="(max-width: 420px) 100vw, 420px"></div>
                                                        <div class="dt-sc-team-details">
                                                            <h4>Annie Mcgee</h4>
                                                            <h5>Periodontist</h5>
                                                            <ul class="dt-sc-team-social diamond-square-border">
                                                                <li><a class="fa fa-twitter" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Twitter"></a></li>
                                                                <li><a class="fa fa-facebook" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Facebook"></a></li>
                                                                <li><a class="fa fa-google-plus" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Google"></a></li>
                                                                <li><a class="fa fa-linkedin" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3" style="min-height: 395px;">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-team hide-social-role-show-on-hover animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="dt-sc-team-thumb"><img width="420" height="420" src="<?= base_url() ?>/public/frontend/template/css/team2-1.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team2-1.jpg 420w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team2-1-150x150.jpg 150w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team2-1-300x300.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team2-1-200x200.jpg 200w" sizes="(max-width: 420px) 100vw, 420px"></div>
                                                        <div class="dt-sc-team-details">
                                                            <h4>Danny Fowler</h4>
                                                            <h5>Dentist</h5>
                                                            <ul class="dt-sc-team-social diamond-square-border">
                                                                <li><a class="fa fa-twitter" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Twitter"></a></li>
                                                                <li><a class="fa fa-facebook" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Facebook"></a></li>
                                                                <li><a class="fa fa-google-plus" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Google"></a></li>
                                                                <li><a class="fa fa-linkedin" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3" style="min-height: 395px;">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.1s; -moz-transition-delay: 1.1s; transition-delay: 1.1s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-team hide-social-role-show-on-hover animated fadeInUp" style="opacity:1;-webkit-animation-delay:1.1s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.1s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.1s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="dt-sc-team-thumb"><img width="420" height="420" src="<?= base_url() ?>/public/frontend/template/css/team3-1.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team3-1.jpg 420w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team3-1-150x150.jpg 150w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team3-1-300x300.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team3-1-200x200.jpg 200w" sizes="(max-width: 420px) 100vw, 420px"></div>
                                                        <div class="dt-sc-team-details">
                                                            <h4>Lydia Dean</h4>
                                                            <h5>Prosthodontist</h5>
                                                            <ul class="dt-sc-team-social diamond-square-border">
                                                                <li><a class="fa fa-twitter" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Twitter"></a></li>
                                                                <li><a class="fa fa-facebook" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Facebook"></a></li>
                                                                <li><a class="fa fa-google-plus" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Google"></a></li>
                                                                <li><a class="fa fa-linkedin" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs_col-sm-6 wpb_column vc_column_container vc_col-sm-3" style="min-height: 395px;">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1.4s; -moz-transition-delay: 1.4s; transition-delay: 1.4s;" data-opacity_start_effect="">
                                                    <div class="dt-sc-team hide-social-role-show-on-hover animated fadeInUp" style="opacity:1;-webkit-animation-delay:1.4s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1.4s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1.4s;animation-duration:1s;animation-iteration-count:1;test">
                                                        <div class="dt-sc-team-thumb"><img width="420" height="420" src="<?= base_url() ?>/public/frontend/template/css/team4-1.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team4-1.jpg 420w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team4-1-150x150.jpg 150w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team4-1-300x300.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/team4-1-200x200.jpg 200w" sizes="(max-width: 420px) 100vw, 420px"></div>
                                                        <div class="dt-sc-team-details">
                                                            <h4>Mike Roy</h4>
                                                            <h5>Orthodontist</h5>
                                                            <ul class="dt-sc-team-social diamond-square-border">
                                                                <li><a class="fa fa-twitter" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Twitter"></a></li>
                                                                <li><a class="fa fa-facebook" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Facebook"></a></li>
                                                                <li><a class="fa fa-google-plus" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Google"></a></li>
                                                                <li><a class="fa fa-linkedin" href="https://dtdental.wpengine.com/home-page-1-2/#" title="Linkedin"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex wpb_start_animation animated" style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px;">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner vc_custom_1484118530848">
                            <div class="wpb_wrapper">
                                <div class="dt-sc-image-flip"><img width="1920" height="1280" src="<?= base_url() ?>/public/frontend/template/css/services20.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services20.jpg 1920w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services20-300x200.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services20-1024x683.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px"><img width="1920" height="1280" src="<?= base_url() ?>/public/frontend/template/css/services19.jpg" class="attachment-full" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services19.jpg 1920w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services19-300x200.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/services19-1024x683.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="dt-sc-skin-color wpb_column vc_column_container vc_col-sm-6">
                        <div class="vc_column-inner vc_custom_1484027781243">
                            <div class="wpb_wrapper">
                                <h2 style="font-size: 40px;color: #ffffff;text-align: left" class="vc_custom_heading">Oral Screening Tests</h2>
                                <div class="ult-spacer spacer-63691ac0d088c" data-id="63691ac0d088c" data-height="40" data-height-mobile="40" data-height-tab="40" data-height-tab-portrait="" data-height-mobile-landscape="" style="clear:both;display:block;"></div>
                                <div id="ult-carousel-120304627063691ac0d08c6" class="ult-carousel-wrapper  vc_custom_1483336365462 dt-sc-dark-bg ult_horizontal" data-gutter="15" data-rtl="false">
                                    <div class="ult-carousel-284074779063691ac0d08ac slick-initialized slick-slider slick-dotted" role="toolbar">
                                        <div aria-live="polite" class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 4070px; transform: translate3d(-2442px, 0px, 0px);" role="listbox">
                                                <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="-1" id="" aria-hidden="true" style="width: 784px;" tabindex="-1">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1480329683351">

                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                    <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"></div>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1483336405481">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>“Ullamco laboris nisi ut aliquip ex ea commodo consequat lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation”</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading">MATHEW</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ult-item-wrap slick-slide" data-animation="animated no-animation" data-slick-index="0" aria-hidden="true" style="width: 784px;" tabindex="-1" role="option" aria-describedby="slick-slide00">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1480329658251">

                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                    <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"></div>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1483336303353">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat”</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading">DARREN TILER</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ult-item-wrap slick-slide animated no-animation" data-animation="animated no-animation" data-slick-index="1" aria-hidden="true" style="width: 784px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1480329670916">

                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                    <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"></div>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1483336380844">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>“Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading">JOHN MILLER</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ult-item-wrap slick-slide slick-current slick-active animated no-animation" data-animation="animated no-animation" data-slick-index="2" aria-hidden="false" style="width: 784px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1480329683351">

                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                    <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"></div>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1483336405481">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>“Ullamco laboris nisi ut aliquip ex ea commodo consequat lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation”</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading">MATHEW</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ult-item-wrap slick-slide slick-cloned" data-animation="animated no-animation" data-slick-index="3" id="" aria-hidden="true" style="width: 784px;" tabindex="-1">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1480329658251">

                                                                                <figure class="wpb_wrapper vc_figure">
                                                                                    <div class="vc_single_image-wrapper vc_box_circle  vc_box_border_grey"></div>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <div class="wpb_text_column wpb_content_element  vc_custom_1483336303353">
                                                                                <div class="wpb_wrapper">
                                                                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat”</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ult-item-wrap" data-animation="animated no-animation">
                                                                            <h5 style="color: #ffffff;text-align: left" class="vc_custom_heading">DARREN TILER</h5>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="slick-dots" style="" role="tablist">
                                            <li class="" aria-hidden="true" role="presentation" aria-selected="true" aria-controls="navigation00" id="slick-slide00"><i type="button" style="color:#ffffff;" class="ultsl-stop" data-role="none"></i></li>
                                            <li aria-hidden="true" role="presentation" aria-selected="false" aria-controls="navigation01" id="slick-slide01" class=""><i type="button" style="color:#ffffff;" class="ultsl-stop" data-role="none"></i></li>
                                            <li aria-hidden="false" role="presentation" aria-selected="false" aria-controls="navigation02" id="slick-slide02" class="slick-active"><i type="button" style="color:#ffffff;" class="ultsl-stop" data-role="none"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function($) {
                                        if (typeof jQuery('.ult-carousel-284074779063691ac0d08ac').slick == "function") {
                                            $('.ult-carousel-284074779063691ac0d08ac').slick({
                                                dots: !0,
                                                autoplay: !0,
                                                autoplaySpeed: 5000,
                                                speed: 300,
                                                infinite: !0,
                                                arrows: !1,
                                                slidesToScroll: 1,
                                                slidesToShow: 1,
                                                swipe: !0,
                                                draggable: !0,
                                                touchMove: !0,
                                                pauseOnHover: !0,
                                                pauseOnFocus: !1,
                                                responsive: [{
                                                    breakpoint: 1026,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1,
                                                    }
                                                }, {
                                                    breakpoint: 1025,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1
                                                    }
                                                }, {
                                                    breakpoint: 760,
                                                    settings: {
                                                        slidesToShow: 1,
                                                        slidesToScroll: 1
                                                    }
                                                }],
                                                pauseOnDotsHover: !0,
                                                customPaging: function(slider, i) {
                                                    return '<i type="button" style= "color:#ffffff;" class="ultsl-stop" data-role="none"></i>'
                                                },
                                            })
                                        }
                                    })
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-spacer spacer-63691ac0d35b9" data-id="63691ac0d35b9" data-height="70" data-height-mobile="30" data-height-tab="50" data-height-tab-portrait="50" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.5s; -moz-transition-delay: 0.5s; transition-delay: 0.5s;" data-opacity_start_effect="">
                                    <div class="dt-sc-icon-heading aligncenter animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.5s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.5s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.5s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="icon-wrapper"><span><img width="96" height="146" src="<?= base_url() ?>/public/frontend/template/css/title_img4.png" class="attachment-full" alt="img" loading="lazy"></span></div>
                                        <div class="icon-content">
                                            <h2>News from the <strong>World of Dentists</strong></h2>
                                            <p>Duas molestias excepturi sint occaecati cupiditate non provident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-spacer spacer-63691ac0d412c" data-id="63691ac0d412c" data-height="60" data-height-mobile="30" data-height-tab="50" data-height-tab-portrait="50" data-height-mobile-landscape="30" style="clear:both;display:block;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp" data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 0.8s; -moz-transition-delay: 0.8s; transition-delay: 0.8s;" data-opacity_start_effect="">
                                    <div class="carousel_items animated fadeInUp" style="opacity:1;-webkit-animation-delay:0.8s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:0.8s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:0.8s;animation-duration:1s;animation-iteration-count:1;test">
                                        <div class="caroufredsel_wrapper" style="text-align: start; float: none; position: relative; inset: auto; z-index: auto; width: 1170px; height: 577.047px; margin: 0px; overflow: hidden;">
                                            <div class="dt-sc-carousel-wrapper dt_carousel" data-visible="3" data-scroll="1" data-auto="" data-animation="scroll" style="text-align: left; float: none; position: absolute; inset: 0px auto auto 0px; margin: 0px; width: 5070px; height: 577.047px;">
                                                <article id="post-104" class="blog-entry entry-default post-104 post type-post status-publish format-aside has-post-thumbnail hentry category-magazine category-news tag-blog tag-business post_format-post-format-aside" style="width: 370px;">
                                                    <div class="entry-thumb"> <a href="https://dtdental.wpengine.com/integer-sed-condimentum-lacus/"><img width="1170" height="795" src="<?= base_url() ?>/public/frontend/template/css/blog6.jpg" class="attachment-full size-full wp-post-image" alt="" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog6.jpg 1170w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog6-300x204.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog6-1024x696.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="https://dtdental.wpengine.com/type/aside/"></a> </div>
                                                        <div class="date "><strong>18 </strong>Jun 2015</div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="author "> <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/">ram</a> </div>
                                                            <div class="comments "><a class="comments" href="https://dtdental.wpengine.com/integer-sed-condimentum-lacus/#comments"><i class="fa fa-comments-o"></i> 0 </a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="https://dtdental.wpengine.com/integer-sed-condimentum-lacus/">Root Canal Treatment – RCT Prevention is better than cure</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Maecenas interdum turpis vitae consectetur porttitor. Donec vel sem in nulla fringilla pretium non tincidunt mauris. Integer vulputate mollis...</p>
                                                        </div>
                                                        <div class="entry-meta-data ">
                                                            <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/blog/">blog</a>, <a href="https://dtdental.wpengine.com/tag/business/">Business</a></p>
                                                            <p class="category "><i class="fa fa-sitemap"> </i><a href="https://dtdental.wpengine.com/category/magazine/">magazine</a>, <a href="https://dtdental.wpengine.com/category/news/">News</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article id="post-96" class="blog-entry entry-default post-96 post type-post status-publish format-image has-post-thumbnail hentry category-technical tag-news post_format-post-format-image" style="width: 370px;">
                                                    <div class="entry-thumb"> <a href="https://dtdental.wpengine.com/aenean-accumsan-ligula-diam/"><img width="1170" height="795" src="<?= base_url() ?>/public/frontend/template/css/blog4.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog4.jpg 1170w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog4-300x204.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog4-1024x696.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="https://dtdental.wpengine.com/type/image/"></a> </div>
                                                        <div class="date "><strong>18 </strong>Jun 2015</div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="author "> <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/">ram</a> </div>
                                                            <div class="comments "><a class="comments" href="https://dtdental.wpengine.com/aenean-accumsan-ligula-diam/#comments"><i class="fa fa-comments-o"></i> 0 </a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="https://dtdental.wpengine.com/aenean-accumsan-ligula-diam/">Tooth Extraction – the final destination</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus...</p>
                                                        </div>
                                                        <div class="entry-meta-data ">
                                                            <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/news/">news</a></p>
                                                            <p class="category "><i class="fa fa-sitemap"> </i><a href="https://dtdental.wpengine.com/category/technical/">Technical</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article id="post-102" class="blog-entry entry-default post-102 post type-post status-publish format-link has-post-thumbnail hentry category-news category-technical tag-news post_format-post-format-link" style="width: 370px;">
                                                    <div class="entry-thumb"> <a href="https://dtdental.wpengine.com/nam-sodales-tincidunt-nunc/"><img width="1170" height="795" src="<?= base_url() ?>/public/frontend/template/css/blog5.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog5.jpg 1170w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog5-300x204.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog5-1024x696.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="https://dtdental.wpengine.com/type/link/"></a> </div>
                                                        <div class="date "><strong>18 </strong>Jun 2015</div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="author "> <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/">ram</a> </div>
                                                            <div class="comments "><a class="comments" href="https://dtdental.wpengine.com/nam-sodales-tincidunt-nunc/#comments"><i class="fa fa-comments-o"></i> 0 </a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="https://dtdental.wpengine.com/nam-sodales-tincidunt-nunc/">Dental Hygiene-the dos and donts</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Duis vel orci erat. Aenean quis sem fringilla, scelerisque lectus et, vestibulum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris...</p>
                                                        </div>
                                                        <div class="entry-meta-data ">
                                                            <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/news/">news</a></p>
                                                            <p class="category "><i class="fa fa-sitemap"> </i><a href="https://dtdental.wpengine.com/category/news/">News</a>, <a href="https://dtdental.wpengine.com/category/technical/">Technical</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article id="post-106" class="blog-entry entry-default post-106 post type-post status-publish format-chat has-post-thumbnail hentry category-news category-technical tag-creative post_format-post-format-chat" style="width: 370px;">
                                                    <div class="entry-thumb"> <a href="https://dtdental.wpengine.com/quisque-egestas-rhoncus-mauris/"><img width="1170" height="795" src="<?= base_url() ?>/public/frontend/template/css/blog7.jpg" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog7.jpg 1170w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog7-300x204.jpg 300w, https://dtdental.wpenginepowered.com/wp-content/uploads/2016/12/blog7-1024x696.jpg 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></a>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="https://dtdental.wpengine.com/type/chat/"></a> </div>
                                                        <div class="date "><strong>18 </strong>Jun 2015</div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="author "> <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/">ram</a> </div>
                                                            <div class="comments "><a class="comments" href="https://dtdental.wpengine.com/quisque-egestas-rhoncus-mauris/#comments"><i class="fa fa-comments-o"></i> 0 </a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="https://dtdental.wpengine.com/quisque-egestas-rhoncus-mauris/">Quisque egestas rhoncus mauris</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Vestibulum a lacus at lectus tincidunt molestie et non metus. Sed ultrices ligula a urna ornare lobortis. In bibendum fringilla metus eget...</p>
                                                        </div>
                                                        <div class="entry-meta-data ">
                                                            <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/creative/">Creative</a></p>
                                                            <p class="category "><i class="fa fa-sitemap"> </i><a href="https://dtdental.wpengine.com/category/news/">News</a>, <a href="https://dtdental.wpengine.com/category/technical/">Technical</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article id="post-87" class="blog-entry entry-default post-87 post type-post status-publish format-gallery has-post-thumbnail hentry category-uncategorized tag-business post_format-post-format-gallery" style="width: 370px;">
                                                    <div class="entry-thumb">
                                                        <div class="bx-wrapper" style="max-width: 100%;">
                                                            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 250.047px;">
                                                                <ul class="entry-gallery-post-slider" style="width: 3215%; position: relative; left: -368px;">
                                                                    <li style="float: left; list-style: none; position: relative; width: 368px;" class="bx-clone" aria-hidden="true"><img src="<?= base_url() ?>/public/frontend/template/css/blog6.jpg" alt=""></li>
                                                                    <li style="float: left; list-style: none; position: relative; width: 368px;" aria-hidden="false"><img src="<?= base_url() ?>/public/frontend/template/css/blog9.jpg" alt=""></li>
                                                                    <li aria-hidden="true" style="float: left; list-style: none; position: relative; width: 368px;"><img src="<?= base_url() ?>/public/frontend/template/css/blog7.jpg" alt=""></li>
                                                                    <li style="float: left; list-style: none; position: relative; width: 368px;" aria-hidden="true"><img src="<?= base_url() ?>/public/frontend/template/css/blog6.jpg" alt=""></li>
                                                                    <li style="float: left; list-style: none; position: relative; width: 368px;" class="bx-clone" aria-hidden="true"><img src="<?= base_url() ?>/public/frontend/template/css/blog9.jpg" alt=""></li>
                                                                </ul>
                                                            </div>
                                                            <div class="bx-controls bx-has-controls-direction">
                                                                <div class="bx-controls-direction"><a class="bx-prev" href="https://dtdental.wpengine.com/home-page-1-2/">Prev</a><a class="bx-next" href="https://dtdental.wpengine.com/home-page-1-2/">Next</a></div>
                                                            </div>
                                                        </div>
                                                        <div class="entry-format hidden"> <a class="ico-format" href="https://dtdental.wpengine.com/type/gallery/"></a> </div>
                                                        <div class="date "><strong>18 </strong>Jun 2015</div>
                                                    </div>
                                                    <div class="entry-details">
                                                        <div class="entry-meta ">
                                                            <div class="author "> <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/">ram</a> </div>
                                                            <div class="comments "><a class="comments" href="https://dtdental.wpengine.com/donec-quis-ex-vel-tincidunt/#comments"><i class="fa fa-comments-o"></i> 0 </a> </div>
                                                        </div>
                                                        <div class="entry-title">
                                                            <h4><a href="https://dtdental.wpengine.com/donec-quis-ex-vel-tincidunt/">Dentures Realignment</a></h4>
                                                        </div>
                                                        <div class="entry-body">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus...</p>
                                                        </div>
                                                        <div class="entry-meta-data ">
                                                            <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/business/">Business</a></p>
                                                            <p class="category "><i class="fa fa-sitemap"> </i><a href="https://dtdental.wpengine.com/category/uncategorized/">Uncategorized</a></p>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="dt-carousel-pagination" style="display: block;"><a href="https://dtdental.wpengine.com/home-page-1-2/#" class="selected"><span>1</span></a><a href="https://dtdental.wpengine.com/home-page-1-2/#"><span>2</span></a><a href="https://dtdental.wpengine.com/home-page-1-2/#"><span>3</span></a><a href="https://dtdental.wpengine.com/home-page-1-2/#"><span>4</span></a><a href="https://dtdental.wpengine.com/home-page-1-2/#"><span>5</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid dt-sc-dark-bg wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1504354206930 vc_row-has-fill ult-vc-hide-row wpb_start_animation animated" data-rtl="false" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="true" style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px; padding-left: 351.5px; padding-right: 351.5px;">
                    <div class="upb_row_bg vcpb-vz-jquery" data-upb_br_animation="" data-parallax_sense="30" data-bg-override="0" data-bg-animation="left-animation" data-bg-animation-type="h" data-animation-repeat="repeat" style="background-size: cover; background-repeat: repeat; background-color: rgba(0, 0, 0, 0); background-image: url(&quot;https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/img13.jpg&quot;); background-attachment: scroll; min-width: 1903px; left: 0px; width: 1902px; background-position: 50% -125px;">
                        <div class="upb_bg_overlay" style="background-color:rgba(0,0,0,0.8);"></div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY" data-animation-delay="1" data-animation-duration="1" data-animation-iteration="1" style="opacity:1;-webkit-transition-delay: 1s; -moz-transition-delay: 1s; transition-delay: 1s;" data-opacity_start_effect="">
                                    <div class="dt-sc-newsletter-section type6 aligncenter animated flipInY" style="opacity:1;-webkit-animation-delay:1s;-webkit-animation-duration:1s;-webkit-animation-iteration-count:1; -moz-animation-delay:1s;-moz-animation-duration:1s;-moz-animation-iteration-count:1; animation-delay:1s;animation-duration:1s;animation-iteration-count:1;test">
                                        <h2>Get the <strong>Latest Updates</strong> From Us</h2>
                                        <p style="margin-bottom: 20px;">– Subscribe to our newsletter –</p>
                                        <form class="dt-sc-subscribe-frm" name="frmsubscribe" action="https://dtdental.wpengine.com/home-page-1-2/#" method="post"><input type="email" name="dt_mc_emailid" id="dt_mc_emailid" required="required" placeholder="Enter your email id"><input type="hidden" name="dt_mc_apikey" id="dt_mc_apikey" value=""><input type="hidden" name="dt_mc_listid" id="dt_mc_listid" value=""><input type="submit" name="mc_submit" value=""></form>
                                        <div class="dt_ajax_subscribe_msg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vc_row-full-width vc_clearfix"></div>
            </div>
        </section>
    </div>

</div>