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
                            <h2 class="text-uppercase">Tin tức <strong>mới nhất</strong></h2>
                            <p>Mẹo hay bảo vệ sức khỏe của bạn.</p>
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
                        <div class="caroufredsel_wrapper">

                            <div class=" owl-carousel owl-theme">

                                <?php
                                foreach ($tintuc as $val) { ?>

                                    <article class="blog-entry entry-default post-104 post type-post status-publish format-aside has-post-thumbnail hentry category-magazine category-news tag-blog tag-business post_format-post-format-aside">
                                        <div class="entry-thumb" style="height:250px; width:100%; overflow:hidden">
                                            <a href="<?= base_url() . '/bai-viet/' . $val['slug'] ?>" title="<?= $val['title'] ?>">
                                                <img style="width:100%" src="<?= base_url() . '/public/uploads/post/' . $val['img'] ?>" class="attachment-full size-full wp-post-image" alt="" srcset="<?= base_url() . '/public/uploads/post/' . $val['img'] ?> 1170w, 
                                                            <?= base_url() . '/public/uploads/post/' . $val['img'] ?> 300w, 
                                                            <?= base_url() . '/public/uploads/post/' . $val['img'] ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px">
                                            </a>
                                            <div class="entry-format hidden"> <a class="ico-format" href="<?= base_url() . '/bai-viet/' . $val['slug'] ?>" title="<?= $val['title'] ?>"></a> </div>
                                            <?php
                                            $d = strtotime($val['createdat']);
                                            ?>
                                            <div class="date "><strong><?= date('d', $d) ?> </strong><?= 'th.' . date('m', $d) . ' ' . date('Y', $d) ?></div>
                                        </div>
                                        <div class="entry-details">
                                            <!-- <div class="entry-meta ">
                                                            <div class="author "> <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/">ram</a> </div>
                                                            <div class="comments "><a class="comments" href="https://dtdental.wpengine.com/integer-sed-condimentum-lacus/#comments"><i class="fa fa-comments-o"></i> 0 </a> </div>
                                                        </div> -->
                                            <div class="entry-title">
                                                <h4><a href="<?= base_url() . '/bai-viet/' . $val['slug'] ?>" title="<?= $val['title'] ?>"><?= $val['title'] ?></a></h4>
                                            </div>
                                            <div class="entry-body">
                                                <p><?= $val['description'] ?></p>
                                            </div>
                                            <!-- <div class="entry-meta-data ">
                                                            <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/blog/">blog</a>, <a href="https://dtdental.wpengine.com/tag/business/">Business</a></p>
                                                            <p class="category "><i class="fa fa-sitemap"> </i><a href="https://dtdental.wpengine.com/category/magazine/">magazine</a>, <a href="https://dtdental.wpengine.com/category/news/">News</a></p>
                                                        </div> -->
                                        </div>
                                    </article>

                                <?php } ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>