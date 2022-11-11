<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php
  $router = service('router');
  $controller  = $router->controllerName();
  $seo = $base['seo'];
  if ($controller == '\App\Controllers\frontend\Home' || $controller == '\App\Controllers\frontend\Customer') {
  ?>
    <!-- Title and description -->
    <title><?= $seo['site_title']['value'] ?></title>
    <!-- Basic and Helper page needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#d3122a">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="<?= $seo['site_title']['value'] ?>">
    <!-- Helpers -->
    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $seo['site_title']['value'] ?>">
    <meta property="og:description" content="<?= $seo['site_description']['value'] ?>">
    <meta property="og:url" content="<?= current_url(); ?>">
    <meta property="og:site_name" content="<?= $seo['site_metatitle']['value'] ?>">
    <meta name="twitter:card" content="<?= $seo['site_description']['value'] ?>">
    <meta name="twitter:title" content="<?= $seo['site_title']['value'] ?>">
    <meta name="twitter:description" content="<?= $seo['site_description']['value'] ?>">
  <?php } else {
  ?>
    <!-- Title and description -->
    <title><?= $seo->meta_title ?></title>
    <!-- Basic and Helper page needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#d3122a">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="<?= $seo->meta_title ?>">
    <!-- Helpers -->
    <!-- /snippets/social-meta-tags.liquid -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $seo->meta_title ?>">
    <meta property="og:description" content="<?= $seo->meta_description ?>">
    <meta property="og:url" content="<?= current_url(); ?>">
    <meta property="og:site_name" content="<?= $seo->meta_title ?>">
    <meta name="twitter:card" content="<?= $seo->meta_description ?>">
    <meta name="twitter:title" content="<?= $seo->meta_title ?>">
    <meta name="twitter:description" content="<?= $seo->meta_description ?>">
  <?php } ?>

  <?php $info = $base['info']; ?>
  <link rel="icon" type="image/x-icon" href="<?= base_url() . '/public/uploads/favicon/' . $info->favicon ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <link rel="stylesheet" id="wpacu-combined-css-head-1" href="<?= base_url() ?>/public/frontend/template/css/head.css" type="text/css" media="all">
  <link rel="stylesheet" id="ls-google-fonts-css" href="<?= base_url() ?>/public/frontend/template/css/css" type="text/css" media="all">
  <style id="wp-block-library-theme-inline-css" type="text/css">
    .wp-block-audio figcaption {
      color: #555;
      font-size: 13px;
      text-align: center
    }

    .is-dark-theme .wp-block-audio figcaption {
      color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-code {
      border: 1px solid #ccc;
      border-radius: 4px;
      font-family: Menlo, Consolas, monaco, monospace;
      padding: .8em 1em
    }

    .wp-block-embed figcaption {
      color: #555;
      font-size: 13px;
      text-align: center
    }

    .is-dark-theme .wp-block-embed figcaption {
      color: hsla(0, 0%, 100%, .65)
    }

    .blocks-gallery-caption {
      color: #555;
      font-size: 13px;
      text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
      color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-image figcaption {
      color: #555;
      font-size: 13px;
      text-align: center
    }

    .is-dark-theme .wp-block-image figcaption {
      color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-pullquote {
      border-top: 4px solid;
      border-bottom: 4px solid;
      margin-bottom: 1.75em;
      color: currentColor
    }

    .wp-block-pullquote__citation,
    .wp-block-pullquote cite,
    .wp-block-pullquote footer {
      color: currentColor;
      text-transform: uppercase;
      font-size: .8125em;
      font-style: normal
    }

    .wp-block-quote {
      border-left: .25em solid;
      margin: 0 0 1.75em;
      padding-left: 1em
    }

    .wp-block-quote cite,
    .wp-block-quote footer {
      color: currentColor;
      font-size: .8125em;
      position: relative;
      font-style: normal
    }

    .wp-block-quote.has-text-align-right {
      border-left: none;
      border-right: .25em solid;
      padding-left: 0;
      padding-right: 1em
    }

    .wp-block-quote.has-text-align-center {
      border: none;
      padding-left: 0
    }

    .wp-block-quote.is-large,
    .wp-block-quote.is-style-large,
    .wp-block-quote.is-style-plain {
      border: none
    }

    .wp-block-search .wp-block-search__label {
      font-weight: 700
    }

    :where(.wp-block-group.has-background) {
      padding: 1.25em 2.375em
    }

    .wp-block-separator.has-css-opacity {
      opacity: .4
    }

    .wp-block-separator {
      border: none;
      border-bottom: 2px solid;
      margin-left: auto;
      margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
      opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
      width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
      border-bottom: none;
      height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
      height: 2px
    }

    .wp-block-table thead {
      border-bottom: 3px solid
    }

    .wp-block-table tfoot {
      border-top: 3px solid
    }

    .wp-block-table td,
    .wp-block-table th {
      padding: .5em;
      border: 1px solid;
      word-break: normal
    }

    .wp-block-table figcaption {
      color: #555;
      font-size: 13px;
      text-align: center
    }

    .is-dark-theme .wp-block-table figcaption {
      color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-video figcaption {
      color: #555;
      font-size: 13px;
      text-align: center
    }

    .is-dark-theme .wp-block-video figcaption {
      color: hsla(0, 0%, 100%, .65)
    }

    .wp-block-template-part.has-background {
      padding: 1.25em 2.375em;
      margin-top: 0;
      margin-bottom: 0
    }
  </style>
  <style id="global-styles-inline-css" type="text/css">
    body {
      --wp--preset--color--black: #000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--color--primary: #00bcd5;
      --wp--preset--color--secondary: #00a0b4;
      --wp--preset--color--tertiary: #aceefe;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
      --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
      --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
      --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
      --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
      --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
      --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
      --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
      --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important
    }
  </style>
  <link rel="stylesheet" id="bp-parent-css-css" href="<?= base_url() ?>/public/frontend/template/css/bp-parent-css-vfecf2622944055f8fd4ee16768585cea8d74fdd8.css" type="text/css" media="screen">
  <link rel="stylesheet" id="tribe-events-calendar-pro-mobile-style-css" href="<?= base_url() ?>/public/frontend/template/css/tribe-events-pro-full-mobile.min.css" type="text/css" media="only screen and (max-width: 768px)">
  <link rel="stylesheet" id="jquery-ui-datepicker-css" href="<?= base_url() ?>/public/frontend/template/css/jquery-ui.css" type="text/css" media="all">
  <link rel="stylesheet" id="ultimate-google-fonts-css" href="<?= base_url() ?>/public/frontend/template/css/css(1)" type="text/css" media="all">
  <link rel="stylesheet" id="dental-skin-css" href="<?= base_url() ?>/public/frontend/template/css/dental-skin-v505f772db551f3820d20e02ae4f4c14d14604cf8.css" type="text/css" media="all">
  <link rel="stylesheet" id="dental-fonts-css" href="<?= base_url() ?>/public/frontend/template/css/css(2)" type="text/css" media="all">
  <style id="dental-combined-inline-css" type="text/css">
    body,
    .layout-boxed .inner-wrapper {
      background-color: #ffff
    }

    #logo .logo-title>h1 a {
      color: #ffff
    }

    .extend-bg-fullwidth-left:after,
    .extend-bg-fullwidth-right:after {
      background:
    }

    .top-bar a,
    .dt-sc-dark-bg.top-bar a {
      color:
    }

    #main-menu>ul.menu>li.current_page_item>a,
    #main-menu>ul.menu>li.current_page_ancestor>a,
    #main-menu>ul.menu>li.current-menu-item>a,
    #main-menu>ul.menu>li.current-menu-ancestor>a,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current_page_item,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current_page_ancestor,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current-menu-item,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current-menu-ancestor,
    .left-header #main-menu>ul.menu>li.current_page_item>a,
    .menu-active-highlight-with-arrow #main-menu>ul.menu>li.current_page_item>a,
    .menu-active-highlight-with-arrow #main-menu>ul.menu>li.current_page_ancestor>a,
    .menu-active-highlight-with-arrow #main-menu>ul.menu>li.current-menu-item>a,
    .menu-active-highlight-with-arrow #main-menu>ul.menu>li.current-menu-ancestor>a {
      background-color:
    }

    .menu-active-highlight-grey #main-menu>ul.menu>li.current_page_item>a:before,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current_page_ancestor>a:before,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current-menu-item>a:before,
    .menu-active-highlight-grey #main-menu>ul.menu>li.current-menu-ancestor>a:before {
      background-color:
    }

    .top-bar {
      color: #343434;
      background-color: #eee
    }

    .top-bar a:hover,
    .dt-sc-dark-bg.top-bar a:hover {
      color: #343434
    }

    #main-menu ul.menu>li>a {
      color: #343434
    }

    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current_page_item>a:before,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current_page_ancestor>a:before,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current-menu-item>a:before,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current-menu-ancestor>a:before,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current_page_item>a:after,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current_page_ancestor>a:after,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current-menu-item>a:after,
    .menu-active-highlight.menu-active-with-icon #main-menu>ul.menu>li.current-menu-ancestor>a:after {
      background-color: #fff
    }

    .menu-active-highlight #main-menu>ul.menu>li.current_page_item>a,
    .menu-active-highlight #main-menu>ul.menu>li.current_page_ancestor>a,
    .menu-active-highlight #main-menu>ul.menu>li.current-menu-item>a,
    .menu-active-highlight #main-menu>ul.menu>li.current-menu-ancestor>a {
      color: #fff
    }

    .footer-widgets,
    .footer-bottom {
      background-color: rgba(246, 249, 249, 1)
    }

    .footer-widgets,
    #footer,
    .footer-copyright {
      color: #959595
    }

    .footer-widgets a,
    #footer a {
      color: #959595
    }

    #footer h3 {
      color: #343434
    }

    .footer-copyright.dt-sc-dark-bg {
      background: rgba(52, 52, 52, 1)
    }

    #main-menu .megamenu-child-container>ul.sub-menu>li>a,
    #main-menu .megamenu-child-container>ul.sub-menu>li>.nolink-menu {
      color:
    }

    #main-menu .megamenu-child-container>ul.sub-menu>li>a:hover {
      color:
    }

    #main-menu .megamenu-child-container>ul.sub-menu>li.current_page_item>a,
    #main-menu .megamenu-child-container>ul.sub-menu>li.current_page_ancestor>a,
    #main-menu .megamenu-child-container>ul.sub-menu>li.current-menu-item>a,
    #main-menu .megamenu-child-container>ul.sub-menu>li.current-menu-ancestor>a {
      color:
    }

    #main-menu .megamenu-child-container ul.sub-menu>li>ul>li>a,
    #main-menu ul li.menu-item-simple-parent ul>li>a {
      color:
    }

    h1,
    .dt-sc-counter.type1 .dt-sc-counter-number,
    .dt-sc-portfolio-sorting a,
    .dt-sc-testimonial .dt-sc-testimonial-author cite,
    .dt-sc-pr-tb-col.minimal .dt-sc-price p,
    .dt-sc-pr-tb-col.minimal .dt-sc-price h6 span,
    .dt-sc-testimonial.special-testimonial-carousel blockquote,
    .dt-sc-pr-tb-col .dt-sc-tb-title,
    .dt-sc-pr-tb-col .dt-sc-tb-content,
    .dt-sc-pr-tb-col .dt-sc-tb-content li,
    .dt-sc-bar-text,
    .dt-sc-counter.type3 .dt-sc-counter-number,
    .dt-sc-newsletter-section.type2 .dt-sc-subscribe-frm input[type="submit"],
    .dt-sc-timeline .dt-sc-timeline-content h2 span,
    .dt-sc-model-sorting a,
    .dt-sc-icon-box.type9 .icon-content h4,
    .dt-sc-icon-box.type9 .icon-content h4 span,
    .dt-sc-menu-sorting a,
    .dt-sc-menu .image-overlay .price,
    .dt-sc-menu .menu-categories a,
    .dt-sc-pr-tb-col .dt-sc-price h6,
    ul.products li .onsale {
      font-family: Roboto, sans-serif
    }

    h2 {
      font-family: Roboto, sans-serif
    }

    h3,
    .dt-sc-testimonial.type1 blockquote,
    .blog-entry.entry-date-left .entry-date,
    .dt-sc-ribbon-title,
    .dt-sc-testimonial.type1 .dt-sc-testimonial-author cite {
      font-family: Roboto, sans-serif
    }

    h4,
    .blog-entry .entry-meta,
    .dt-sc-button {
      font-family: Roboto, sans-serif
    }

    h5 {
      font-family: Roboto, sans-serif
    }

    h6 {
      font-family: Roboto, sans-serif
    }

    h1 {
      font-size: 30px;
      font-weight: 300;
      letter-spacing: 0
    }

    h2 {
      font-size: 24px;
      font-weight: 300;
      letter-spacing: 0
    }

    h3 {
      font-size: 18px;
      font-weight: 300;
      letter-spacing: 0
    }

    h4 {
      font-size: 16px;
      font-weight: 300;
      letter-spacing: 0
    }

    h5 {
      font-size: 14px;
      font-weight: 300;
      letter-spacing: 0
    }

    h6 {
      font-size: 13px;
      font-weight: 300;
      letter-spacing: 0
    }

    body {
      font-size: 16px;
      line-height: 30px
    }

    body,
    .blog-entry.blog-medium-style .entry-meta,
    .dt-sc-event-image-caption .dt-sc-image-content h3,
    .dt-sc-events-list .dt-sc-event-title h5,
    .dt-sc-team.type2 .dt-sc-team-details h4,
    .dt-sc-team.type2 .dt-sc-team-details h5,
    .dt-sc-contact-info.type5 h6,
    .dt-sc-sponsors .dt-sc-one-third h3,
    .dt-sc-testimonial.type5 .dt-sc-testimonial-author cite,
    .dt-sc-counter.type3 h4,
    .dt-sc-contact-info.type2 h6,
    .woocommerce ul.products li.product .onsale,
    #footer .mailchimp-form input[type="email"],
    .dt-sc-icon-box.type5 .icon-content h5,
    .main-header #searchform input[type="text"],
    .dt-sc-testimonial.type1 .dt-sc-testimonial-author cite small,
    .dt-sc-pr-tb-col.type2 .dt-sc-tb-content li,
    .dt-sc-team.rounded .dt-sc-team-details h5,
    .megamenu-child-container>ul.sub-menu>li>a .menu-item-description,
    .menu-item-description {
      font-family: Roboto, sans-serif
    }

    #main-menu ul.menu>li>a,
    .left-header #main-menu>ul.menu>li>a {
      font-size: 16px;
      font-weight: 400;
      letter-spacing: 0
    }

    #main-menu ul.menu>li>a,
    .dt-sc-pr-tb-col .dt-sc-tb-title h5,
    .dt-sc-timeline .dt-sc-timeline-content h2,
    .dt-sc-icon-box.type3 .icon-content h4,
    .dt-sc-popular-procedures .details h3,
    .dt-sc-popular-procedures .details .duration,
    .dt-sc-popular-procedures .details .price,
    .dt-sc-counter.type2 .dt-sc-counter-number,
    .dt-sc-counter.type2 h4,
    .dt-sc-testimonial.type4 .dt-sc-testimonial-author cite {
      font-family: Roboto, sans-serif
    }

    .app-btn .wpb_single_image.vc_align_left {
      float: left;
      margin-right: 20px
    }

    option {
      padding: 6px
    }
  </style>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.min.js" id="jquery-core-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery-migrate.min.js" id="jquery-migrate-js"></script>
  <script type="text/javascript" id="layerslider-utils-js-extra">
    /* 
															<![CDATA[ */
    var LS_Meta = {
      "v": "6.11.2",
      "fixGSAP": "1"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/layerslider-utils-vaab2826867a6b3153a6841dde82c4328bb9516d9.js" id="layerslider-utils-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/layerslider-vfeb5ecfbf5885d2dde9bff0448f479cfdf3fabc2.js" id="layerslider-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/layerslider-transitions-vbaed7aead591672d5c02081315f57b3b4c5bcc05.js" id="layerslider-transitions-js"></script>
  <script type="text/javascript" id="bp-confirm-js-extra">
    /* 
															<![CDATA[ */
    var BP_Confirm = {
      "are_you_sure": "Are you sure?"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/confirm.min.js" id="bp-confirm-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/widget-members.min.js" id="bp-widget-members-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery-query.min.js" id="bp-jquery-query-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery-cookie.min.js" id="bp-jquery-cookie-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery-scroll-to.min.js" id="bp-jquery-scroll-to-js"></script>
  <script type="text/javascript" id="bp-legacy-js-js-extra">
    /* 
															<![CDATA[ */
    var BP_DTheme = {
      "accepted": "Accepted",
      "close": "Close",
      "comments": "comments",
      "leave_group_confirm": "Are you sure you want to leave this group?",
      "mark_as_fav": "Favorite",
      "my_favs": "My Favorites",
      "rejected": "Rejected",
      "remove_fav": "Remove Favorite",
      "show_all": "Show all",
      "show_all_comments": "Show all comments for this thread",
      "show_x_comments": "Show all comments (%d)",
      "unsaved_changes": "Your profile has unsaved changes. If you leave the page, the changes will be lost.",
      "view": "View",
      "store_filter_settings": ""
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/buddypress.min.js" id="bp-legacy-js-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/rbtools.min.js" id="tp-tools-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/rs6.min.js" id="revmin-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.blockUI.min.js" id="jquery-blockui-js"></script>
  <script type="text/javascript" id="wc-add-to-cart-js-extra">
    /* 
															<![CDATA[ */
    var wc_add_to_cart_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
      "i18n_view_cart": "View cart",
      "cart_url": "https:\/\/dtdental.wpengine.com\/cart\/",
      "is_cart": "",
      "cart_redirect_after_add": "no"
    };
    /* ]]> */
  </script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/add-to-cart.min.js" id="wc-add-to-cart-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/vc_woocommerce-add-to-cart-js-v5c24d00d10b9b98c113abf068d033626881bacd7.js" id="vc_woocommerce-add-to-cart-js-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/core.min.js" id="jquery-ui-core-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/ultimate.min.js" id="ultimate-script-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/ultimate_bg.min.js" id="ultimate-row-bg-js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/modernizr-custom-vd07d740953aa28decae3a0db1cedea4bd461ee8e.js" id="modernizr-custom-js"></script>
  <link rel="canonical" href="https://dtdental.wpengine.com/home-page-1-2/">
  <script type="text/javascript">
    var ajaxurl = 'https://dtdental.wpengine.com/wp-admin/admin-ajax.php'
  </script>
  <meta name="tec-api-version" content="v1">
  <meta name="tec-api-origin" content="https://dtdental.wpengine.com">
  <link rel="https://theeventscalendar.com/" href="https://dtdental.wpengine.com/wp-json/tribe/events/v1/">
  <script type="text/javascript">
    var jQueryMigrateHelperHasSentDowngrade = !1;
    window.onerror = function(msg, url, line, col, error) {
      if (jQueryMigrateHelperHasSentDowngrade) {
        return !0
      }
      var xhr = new XMLHttpRequest();
      var nonce = '5f2eba30c8';
      var jQueryFunctions = ['andSelf', 'browser', 'live', 'boxModel', 'support.boxModel', 'size', 'swap', 'clean', 'sub', ];
      var match_pattern = /\)\.(.+?) is not a function/;
      var erroredFunction = msg.match(match_pattern);
      if (typeof erroredFunction !== 'object' || typeof erroredFunction[1] === "undefined" || -1 === jQueryFunctions.indexOf(erroredFunction[1])) {
        return !0
      }
      jQueryMigrateHelperHasSentDowngrade = !0;
      xhr.open('POST', 'https://dtdental.wpengine.com/wp-admin/admin-ajax.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
        var response, reload = !1;
        if (200 === xhr.status) {
          try {
            response = JSON.parse(xhr.response);
            reload = response.data.reload
          } catch (e) {
            reload = !1
          }
        }
        if (reload) {
          location.reload()
        }
      };
      xhr.send(encodeURI('action=jquery-migrate-downgrade-version&_wpnonce=' + nonce));
      return !0
    }
  </script>
  <noscript>
    <style>
      .woocommerce-product-gallery {
        opacity: 1 !important
      }
    </style>
  </noscript>
  <script type="text/javascript">
    function setREVStartSize(e) {
      window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
      window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
      try {
        var pw = document.getElementById(e.c).parentNode.offsetWidth,
          newh;
        pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
        e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
        e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
        e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
        e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
        e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
        e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
        e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
        if (e.layout === "fullscreen" || e.l === "fullscreen") newh = Math.max(e.mh, window.RSIH);
        else {
          e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
          for (var i in e.rl)
            if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
          e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
          e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
          for (var i in e.rl)
            if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];
          var nl = new Array(e.rl.length),
            ix = 0,
            sl;
          e.tabw = e.tabhide >= pw ? 0 : e.tabw;
          e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
          e.tabh = e.tabhide >= pw ? 0 : e.tabh;
          e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
          for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
          sl = nl[0];
          for (var i in nl)
            if (sl > nl[i] && nl[i] > 0) {
              sl = nl[i];
              ix = i
            }
          var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
          newh = (e.gh[ix] * m) + (e.tabh + e.thumbh)
        }
        if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
        document.getElementById(e.c).height = newh + "px";
        window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }"
      } catch (e) {
        console.log("Failure at Presize of Slider:" + e)
      }
    }
  </script>
  <style type="text/css" data-type="vc_custom-css">
    .header-on-slider .main-title-section-wrapper {
      display: none
    }
  </style>
  <style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1484638563134 {
      margin-top: 8% !important;
      margin-bottom: 4% !important
    }

    .vc_custom_1504352993928 {
      padding-top: 37px !important;
      padding-bottom: 78px !important;
      background-image: url(https://dtdental.wpenginepowered.com/wp-content/uploads/2016/11/fullwidthimg1.png?id=8780) !important
    }

    .vc_custom_1484308126005 {
      margin-top: 8% !important;
      padding-bottom: 5% !important
    }

    .vc_custom_1504353491679 {
      margin-bottom: 10% !important;
      padding-top: 72px !important;
      padding-bottom: 40px !important
    }

    .vc_custom_1504353922513 {
      padding-top: 3% !important;
      padding-bottom: 3% !important
    }

    .vc_custom_1484640677021 {
      padding-top: 8% !important;
      padding-bottom: 4% !important
    }

    .vc_custom_1504354206930 {
      margin-top: 4% !important;
      padding-top: 12% !important;
      padding-bottom: 13% !important;
      background-position: 0 0 !important;
      background-repeat: no-repeat !important
    }

    .vc_custom_1484303874743 {
      margin-bottom: 30px !important
    }

    .vc_custom_1482394283794 {
      margin-bottom: 5px !important
    }

    .vc_custom_1466401553262 {
      padding-right: 15% !important
    }

    .vc_custom_1484116995053 {
      padding-top: 8% !important;
      padding-bottom: 8% !important
    }

    .vc_custom_1484118530848 {
      margin-top: 0px !important;
      margin-right: 0px !important;
      margin-bottom: 0px !important;
      margin-left: 0px !important;
      padding-top: 0px !important;
      padding-right: 0px !important;
      padding-bottom: 0px !important;
      padding-left: 0px !important
    }

    .vc_custom_1484027781243 {
      padding-left: 5% !important
    }

    .vc_custom_1483336365462 {
      padding-right: 10% !important
    }

    .vc_custom_1480329658251 {
      margin-bottom: 25px !important
    }

    .vc_custom_1483336303353 {
      margin-bottom: 25px !important;
      padding-top: 25px !important;
      padding-bottom: 25px !important
    }

    .vc_custom_1480329670916 {
      margin-bottom: 25px !important
    }

    .vc_custom_1483336380844 {
      margin-bottom: 25px !important;
      padding-top: 25px !important;
      padding-bottom: 25px !important
    }

    .vc_custom_1480329683351 {
      margin-bottom: 25px !important
    }

    .vc_custom_1483336405481 {
      margin-bottom: 25px !important;
      padding-top: 25px !important;
      padding-bottom: 25px !important
    }
  </style>
  <noscript>
    <style>
      .wpb_animate_when_almost_visible {
        opacity: 1
      }
    </style>
  </noscript>
  <style>
    #rev_slider_3_1_wrapper {
      height: 1000px
    }
  </style>
  <style>
    #rev_slider_3_1_wrapper .metis.tparrows {
      background: #ffffff;
      padding: 10px;
      transition: all 0.3s;
      -webkit-transition: all 0.3s;
      width: 60px;
      height: 60px;
      box-sizing: border-box;
    }

    #rev_slider_3_1_wrapper .metis.tparrows:hover {
      background: rgba(255, 255, 255, 0.75);
    }

    #rev_slider_3_1_wrapper .metis.tparrows:before {
      color: #000000;
      transition: all 0.3s;
      -webkit-transition: all 0.3s;
    }

    #rev_slider_3_1_wrapper .metis.tparrows:hover:before {
      transform: scale(1.5);
    }
  </style>
  <style></style>
  <style>
    .spacer-63691ac0c2b96 {
      height: 40px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0c2b96 {
        height: 40px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0c2b96 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0c2b96 {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0c2b96 {
        height: 40px
      }
    }

    .spacer-63691ac0c53f4 {
      height: 70px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0c53f4 {
        height: 50px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0c53f4 {
        height: 50px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0c53f4 {
        height: 30px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0c53f4 {
        height: 30px
      }
    }

    .spacer-63691ac0c665d {
      height: 5px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0c665d {
        height: 5px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0c665d {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0c665d {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0c665d {
        height: 5px
      }
    }

    .spacer-63691ac0c6711 {
      height: 35px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0c6711 {
        height: 35px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0c6711 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0c6711 {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0c6711 {
        height: 35px
      }
    }

    .spacer-63691ac0c6d66 {
      height: 55px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0c6d66 {
        height: 55px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0c6d66 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0c6d66 {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0c6d66 {
        height: 55px
      }
    }

    .spacer-63691ac0c787f {
      height: 70px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0c787f {
        height: 50px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0c787f {
        height: 50px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0c787f {
        height: 30px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0c787f {
        height: 30px
      }
    }

    .spacer-63691ac0cca90 {
      height: 40px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cca90 {
        height: 40px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cca90 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cca90 {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cca90 {
        height: 40px
      }
    }

    .spacer-63691ac0cd08e {
      height: 10px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd08e {
        height: 10px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd08e {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd08e {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd08e {
        height: 10px
      }
    }

    .spacer-63691ac0cd0a1 {
      height: 10px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd0a1 {
        height: 10px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd0a1 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd0a1 {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd0a1 {
        height: 10px
      }
    }

    .spacer-63691ac0cd0b0 {
      height: 10px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd0b0 {
        height: 10px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd0b0 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd0b0 {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd0b0 {
        height: 10px
      }
    }

    .spacer-63691ac0cd289 {
      height: 70px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd289 {
        height: 50px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd289 {
        height: 50px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd289 {
        height: 30px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd289 {
        height: 30px
      }
    }

    .spacer-63691ac0cd62c {
      height: 100px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd62c {
        height: 100px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd62c {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd62c {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd62c {
        height: 100px
      }
    }

    .spacer-63691ac0cd914 {
      height: 150px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd914 {
        height: px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd914 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd914 {
        height: 40px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd914 {
        height: 20px
      }
    }

    .spacer-63691ac0cd9e6 {
      height: 150px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0cd9e6 {
        height: px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0cd9e6 {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0cd9e6 {
        height: 40px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0cd9e6 {
        height: 20px
      }
    }

    .spacer-63691ac0d088c {
      height: 40px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0d088c {
        height: 40px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0d088c {
        height: px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0d088c {
        height: px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0d088c {
        height: 40px
      }
    }

    .spacer-63691ac0d35b9 {
      height: 70px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0d35b9 {
        height: 50px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0d35b9 {
        height: 50px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0d35b9 {
        height: 30px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0d35b9 {
        height: 30px
      }
    }

    .spacer-63691ac0d412c {
      height: 60px
    }

    @media (max-width: 1199px) {
      .spacer-63691ac0d412c {
        height: 50px
      }
    }

    @media (max-width: 991px) {
      .spacer-63691ac0d412c {
        height: 50px
      }
    }

    @media (max-width: 767px) {
      .spacer-63691ac0d412c {
        height: 30px
      }
    }

    @media (max-width: 479px) {
      .spacer-63691ac0d412c {
        height: 30px
      }
    }

    #toTop {
        background-size: 50px 50px;
    }

    #logo a {
      height: 80px;
  }
  </style>
  <style>
    #ult-carousel-120304627063691ac0d08c6 .slick-slide {
      margin: 0 15px;
    }
  </style>
  <style>
    /** Ultimate: Media Responsive **/
    #Info-list-wrap-1867 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-1867 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-6533 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-6533 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-7030 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-7030 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-1105 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-1105 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-8564 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-8564 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-1984 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-1984 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    .uvc-heading.ultimate-heading-719063691ac0cd6ea h5 {
      font-size: 30px;
    }

    .uvc-heading.ultimate-heading-719063691ac0cd6ea .uvc-sub-heading {
      font-size: 54px;
    }

    @media (max-width: 1199px) {}

    @media (max-width: 991px) {}

    @media (max-width: 767px) {}

    @media (max-width: 479px) {}

    /** Ultimate: Media Responsive - **/
  </style>
  <style id="fit-vids-style">
    .fluid-width-video-wrapper {
      width: 100%;
      position: relative;
      padding: 0;
    }

    .fluid-width-video-wrapper iframe,
    .fluid-width-video-wrapper object,
    .fluid-width-video-wrapper embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
  <style>
    /** Ultimate: CountDown Responsive **/
    #Info-list-wrap-1867 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-1867 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-6533 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-6533 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-7030 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-7030 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-1105 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-1105 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-8564 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-8564 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    #Info-list-wrap-1984 h3 {
      font-size: 20px;
      line-height: 50px;
    }

    #Info-list-wrap-1984 .icon_description_text {
      font-size: 13px;
      line-height: 24px;
    }

    .uvc-heading.ultimate-heading-719063691ac0cd6ea h5 {
      font-size: 30px;
    }

    .uvc-heading.ultimate-heading-719063691ac0cd6ea .uvc-sub-heading {
      font-size: 54px;
    }

    @media (min-width: 1824px) {}

    @media (max-width: 1199px) {}

    @media (max-width: 991px) {}

    @media (max-width: 767px) {}

    @media (max-width: 479px) {}

    /** Ultimate: Tooltipster Responsive - **/
  </style>
</head>