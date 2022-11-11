<footer id="footer">
  <div class="footer-widgets">
    <div class="container">
      <div class="column dt-sc-one-third first">
        <aside id="text-3" class="widget widget_text">
          <div class="textwidget"><img src="<?= base_url().'/public/uploads/logo/'.$base['info']->logo?>" title="" alt="footer-logo" class="footer-logo-img">
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                  <div class="wpb_wrapper">
                    <div class="vc_empty_space" style="height: 43px"><span class="vc_empty_space_inner"></span></div>
                  </div>
                </div>
              </div>
            </div>
            <p class="footer_widget_section">
              <?= getenv('intro') ?>
            </p>
            <div class="vc_empty_space" style="height: 18px"><span class="vc_empty_space_inner"></span></div>
            <p class="highlight">Tin dùng bởi hơn <strong>5,000</strong> khách hàng</p>
          </div>
        </aside>
      </div>
      <div class="column dt-sc-one-third ">
        <aside id="text-4" class="widget widget_text">
          <h3 class="widgettitle">Thông <span class="last-word">Tin</span></h3>
          <div class="textwidget">
            <div class="column dt-sc-one-half first">
              <ul class="footer-bullet-list">
                <li><a href="<?= base_url() . '/gioi-thieu' ?>">Về chúng tôi</a></li>
                <li><a href="<?= base_url() . '/lien-he' ?>">Liên hệ</a></li>
                <li><a href="<?= base_url() . '/chinh-sach-doi-tra' ?>">Chính sách đổi trả</a></li>
                <li><a href="<?= base_url() . '/huong-dan-dat-hang' ?>">Hướng dẫn đặt hàng</a></li>
              </ul>
            </div>
            <div class="column dt-sc-one-half">
              <ul class="footer-bullet-list">
                <li><a href="<?= base_url() . '/danh-muc/tin-cong-nghe' ?>"> Tin công nghệ</a></li>
                <li><a href="<?= base_url() . '/danh-muc/tuyen-dung' ?>">Tuyển dụng</a></li>
                <li><a href="<?= base_url() . '/khuyen-mai' ?>"> Khuyến mại</a></li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
      <div class="column dt-sc-one-third ">
        <aside id="text-5" class="widget widget_text">
          <h3 class="widgettitle">Địa chỉ <span class="last-word">Liên hệ</span></h3>
          <div class="textwidget">
            <div class="dt-sc-contact-info  "><?= $base['info']->address ?></div>
          </div>
        </aside>
        <aside id="text-6" class="widget widget_text">
          <h3 class="widgettitle">Liên hệ <span class="last-word"> với chúng tôi</span></h3>
          <div class="textwidget">
            <div class="dt-sc-contact-info  ph-no"><a href="tel:<?= $base['info']->phone ?>"><?= $base['info']->phone ?></a></div>
            <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
            <ul class="dt-sc-sociable  rounded alignleft">
              <li> <a target="" class="fa fa-facebook" title="Facebook" href="<?= getenv('facebook') ?>" rel="noopener"> </a> </li>
              <li> <a target="" class="fa fa-twitter" title="Twitter" href="<?= getenv('twitter') ?>" rel="noopener"> </a> </li>
              <li> <a target="" class="fa fa-youtube" title="Google-plus" href="<?= getenv('youtube') ?>" rel="noopener"> </a> </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>

  <!-- <div class="footer-bottom">
    <div class="container">
      <div class="dt-sc-newsletter-section type6 ">
        <h2><strong> Newsletter </strong> Subscription</h2>
        <form class="dt-sc-subscribe-frm" name="frmsubscribe" action="https://dtdental.wpengine.com/home-page-1-2/#" method="post"><input type="email" name="dt_mc_emailid" id="dt_mc_emailid" required="required" placeholder="Email-id"><input type="hidden" name="dt_mc_apikey" id="dt_mc_apikey" value=""><input type="hidden" name="dt_mc_listid" id="dt_mc_listid" value=""><input type="submit" name="mc_submit" value=""></form>
        <div class="dt_ajax_subscribe_msg"></div>
      </div>
    </div>
  </div> -->

  <div class="footer-copyright dt-sc-dark-bg">
    <div class="container">
      <div class="vc-no-left-padding wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="dt-sc-hr-top-5 "> </div>Copyright © 2022

            Bsi Chính | <a target="_blank" title="" href="https://themeforest.net/user/designthemes"> Design </a>
          </div>
        </div>
      </div>
      <div class="alignright vc-no-right-padding wpb_column vc_column_container vc_col-sm-6">
        <div class="vc_column-inner ">
          <div class="wpb_wrapper">
            <div class="dt-sc-hr-top-5 "> </div>

            <!-- <ul id="menu-footer-menu" class="menu-links ">
              <li id="menu-item-8340" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8340"><a href="https://dtdental.wpengine.com/home-page-1-2/#">Terms of Use</a></li>
              <li id="menu-item-8341" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8341"><a href="https://dtdental.wpengine.com/home-page-1-2/#">Privacy Statement</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>