<script>
   (function(body) {
      'use strict';
      body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js')
   })(document.body)
</script>
<script type="text/javascript">
   /* <![CDATA[ */
   var tribe_l10n_datatables = {
      "aria": {
         "sort_ascending": ": activate to sort column ascending",
         "sort_descending": ": activate to sort column descending"
      },
      "length_menu": "Show _MENU_ entries",
      "empty_table": "No data available in table",
      "info": "Showing _START_ to _END_ of _TOTAL_ entries",
      "info_empty": "Showing 0 to 0 of 0 entries",
      "info_filtered": "(filtered from _MAX_ total entries)",
      "zero_records": "No matching records found",
      "search": "Search:",
      "all_selected_text": "All items on this page were selected. ",
      "select_all_link": "Select all pages",
      "clear_selection": "Clear Selection.",
      "pagination": {
         "all": "All",
         "next": "Next",
         "previous": "Previous"
      },
      "select": {
         "rows": {
            "0": "",
            "_": ": Selected %d rows",
            "1": ": Selected 1 row"
         }
      },
      "datepicker": {
         "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
         "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
         "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
         "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
         "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
         "nextText": "Next",
         "prevText": "Prev",
         "currentText": "Today",
         "closeText": "Done"
      }
   }; /* ]]> */
</script>
<script type="text/html" id="wpb-modifications"></script>
<link href="<?= base_url() ?>/public/frontend/template/css/css(3)" rel="stylesheet" property="stylesheet" media="all" type="text/css">

<script type="text/javascript">
   (function() {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c
   })()
</script>
<script type="text/javascript">
   if (typeof revslider_showDoubleJqueryError === "undefined") {
      function revslider_showDoubleJqueryError(sliderID) {
         var err = "<div class='rs_error_message_box'>";
         err += "<div class='rs_error_message_oops'>Oops...</div>";
         err += "<div class='rs_error_message_content'>";
         err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
         err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
         err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
         err += "</div>";
         err += "</div>";
         var slider = document.getElementById(sliderID);
         slider.innerHTML = err;
         slider.style.display = "block"
      }
   }
</script>
<link rel="stylesheet" id="vc_animate-css-css" href="<?= base_url() ?>/public/frontend/template/css/animate.min.css" type="text/css" media="all">
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.selectBox.min.js" id="jquery-selectBox-js"></script>
<script type="text/javascript" id="jquery-yith-wcwl-js-extra">
   /* <![CDATA[ */
   var yith_wcwl_l10n = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "redirect_to_cart": "no",
      "multi_wishlist": "",
      "hide_add_button": "1",
      "enable_ajax_loading": "",
      "ajax_loader_url": "https:\/\/dtdental.wpengine.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
      "remove_from_wishlist_after_add_to_cart": "1",
      "is_wishlist_responsive": "1",
      "time_to_close_prettyphoto": "3000",
      "fragments_index_glue": ".",
      "reload_on_found_variation": "1",
      "labels": {
         "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
         "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
      },
      "actions": {
         "add_to_wishlist_action": "add_to_wishlist",
         "remove_from_wishlist_action": "remove_from_wishlist",
         "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
         "load_mobile_action": "load_mobile",
         "delete_item_action": "delete_item",
         "save_title_action": "save_title",
         "save_privacy_action": "save_privacy",
         "load_fragments": "load_fragments"
      }
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.yith-wcwl.js" id="jquery-yith-wcwl-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/comment-reply.min.js" id="comment-reply-js"></script>
<script type="text/javascript" id="contact-form-7-js-extra">
   /* <![CDATA[ */
   var wpcf7 = {
      "apiSettings": {
         "root": "https:\/\/dtdental.wpengine.com\/wp-json\/contact-form-7\/v1",
         "namespace": "contact-form-7\/v1"
      },
      "cached": "1"
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/contact-form-7-v11a2ff34f9c743e6cf5f16d3b8e83b3e3e6c6ff8.js" id="contact-form-7-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.tabs.min.js" id="dt-sc-tabs-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-sc-tiptip-v521daef313298b7906f02abd7693c2ee54c87331.js" id="dt-sc-tiptip-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-sc-inview-v57155fece0280eb4dad4bb43b62c00665ad088c6.js" id="dt-sc-inview-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.animateNumber.min.js" id="dt-sc-animatenum-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-sc-donutchart-v0c2f72af021c089a2e35b20ee38aa02553545fdf.js" id="dt-sc-donutchart-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-sc-toggle-click-v0a628fa0bb1f2a5e76085665218b5235b4ea71f6.js" id="dt-sc-toggle-click-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-sc-script-v8c535fa1824f7ffba5be09ecf24598a0011af4cd.js" id="dt-sc-script-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-doctor-addon-v85acd233516ccde381045356b4991d52a34c5bfe.js" id="dt-doctor-addon-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dt-fbpixel-script-v1f25bd8c6e762d303db59d9ce03e6be78e845624.js" id="dt-fbpixel-script-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/js.cookie.min.js" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
   /* <![CDATA[ */
   var woocommerce_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/woocommerce.min.js" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
   /* <![CDATA[ */
   var wc_cart_fragments_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
      "cart_hash_key": "wc_cart_hash_44b1d3091d5f7ac7603f6ea7cef25b9e",
      "fragment_name": "wc_fragments_44b1d3091d5f7ac7603f6ea7cef25b9e",
      "request_timeout": "5000"
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/cart-fragments.min.js" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.prettyPhoto.min.js" id="prettyPhoto-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.ui.totop.min.js" id="ui-totop-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.isotope.min.js" id="jquery-isotope-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.smartresize.min.js" id="jquery-smartresize-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.caroufredsel.min.js" id="jquery-caroufredsel-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.debouncedresize.min.js" id="jquery-debouncedresize-js"></script>

<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.touchswipe.min.js" id="jquery-touchswipe-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.parallax.min.js" id="jquery-parallax-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.downcount.min.js" id="jquery-downcount-js"></script>
<script type="text/javascript" id="jquery-nicescroll-js-extra">
   /* <![CDATA[ */
   var dttheme_urls = {
      "theme_base_url": "https:\/\/dtdental.wpengine.com\/wp-content\/themes\/dental",
      "framework_base_url": "https:\/\/dtdental.wpengine.com\/wp-content\/themes\/dental\/framework\/",
      "ajaxurl": "https:\/\/dtdental.wpengine.com\/wp-admin\/admin-ajax.php",
      "url": "https:\/\/dtdental.wpengine.com",
      "stickynav": "enable",
      "stickyele": ".main-header-wrapper",
      "isRTL": "",
      "loadingbar": "enable",
      "nicescroll": "disable",
      "reserve_nonce": "f0b49c2c9f"
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.nicescroll.min.js" id="jquery-nicescroll-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.bxslider.min.js" id="jquery-bxslider-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.fitvids.min.js" id="jquery-fitvids-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.sticky.min.js" id="jquery-sticky-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.simplesidebar.min.js" id="jquery-simplesidebar-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.classie.min.js" id="jquery-classie-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.placeholder.min.js" id="jquery-placeholder-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.visualNav.min.js" id="visualnav-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/datepicker.min.js" id="jquery-ui-datepicker-js"></script>
<script type="text/javascript" id="jquery-ui-datepicker-js-after">
   jQuery(function(jQuery) {
      jQuery.datepicker.setDefaults({
         "closeText": "Close",
         "currentText": "Today",
         "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
         "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
         "nextText": "Next",
         "prevText": "Previous",
         "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
         "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
         "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
         "dateFormat": "MM d, yy",
         "firstDay": 1,
         "isRTL": !1
      })
   })
</script>
<script type="text/javascript" id="dental-reservation-js-extra">
   /* <![CDATA[ */
   var dtAppointmentCustom = {
      "plugin_url": "https:\/\/dtdental.wpengine.com\/wp-content\/plugins\/nas\/content\/live\/dtdental\/wp-content\/themes\/dental\/framework\/",
      "eraptdatepicker": "Please Select Service and Date"
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dental-reservation-v1495461fb92ea0bcb247b8fdc3de86fe58dbfaaf.js" id="dental-reservation-js"></script>
<script type="text/javascript" id="pace-js-extra">
   /* <![CDATA[ */
   var paceOptions = {
      "restartOnRequestAfter": "false",
      "restartOnPushState": "false"
   };
   /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/pace.min.js" id="pace-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dental-jqcustom-v48a88655ffe8d921edd10d37aae0d6c9d1b7c9da.js" id="dental-jqcustom-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.magnific-popup.min.js" id="jquery-magnific-popup-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/jquery.cookie.min.js" id="jquery-cookie-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/dental-jqcpanel-v659df984cddd5504698eb31ffa91cb75b79bf84d.js" id="dental-jqcpanel-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/js_composer_front.min.js" id="wpb_composer_front_js-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/vc-waypoints.min.js" id="vc_waypoints-js"></script>
<script type="text/javascript" src="<?= base_url() ?>/public/frontend/template/css/vhparallax.min.js" id="jquery.vhparallax-js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<a href="https://dtdental.wpengine.com/home-page-1-2/#" id="toTop" style="display: inline;"><span id="toTopHover"></span>To Top</a>
<div id="lbdictex_find_popup" class="lbexpopup hidden" style="position: absolute; top: 0px; left: 0px;">
   <div class="lbexpopup_top">
      <h2 class="fl popup_title">&nbsp;</h2>
      <ul>
         <li><a class="close_main popup_close" href="https://dtdental.wpengine.com/home-page-1-2/#">&nbsp;</a></li>
      </ul>
      <div class="clr"></div>
   </div>
   <div class="popup_details"></div>
   <div class="popup_powered">abc</div>
</div>
<div id="lbdictex_ask_mark" class="hidden" style="position: absolute; top: 0px; left: 0px;">
   <a class="lbdictex_ask_select" href="https://dtdental.wpengine.com/home-page-1-2/#">&nbsp;</a>
</div>
<script>
   jQuery('.carousel').carousel();
   function showResult(str) {
  if (str.length==0) {
      // var ele = document.getElementById("livesearch");
      // removeAllChildNodes(ele);
      document.getElementById("livesearch").innerHTML="";
      document.getElementById("livesearch").style.border="0px";
      document.getElementById("livesearch").style.padding="0px";
      return;
  }
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {

          var response = this.responseText;
          response = response.replace(/\\n/g, "\\n")  
             .replace(/\\'/g, "\\'")
             .replace(/\\"/g, '\\"')
             .replace(/\\&/g, "\\&")
             .replace(/\\r/g, "\\r")
             .replace(/\\t/g, "\\t")
             .replace(/\\b/g, "\\b")
             .replace(/\\f/g, "\\f");
          // remove non-printable and other non-valid JSON chars
          response = response.replace(/[\u0000-\u0019]+/g,""); 
          response = JSON.parse(response);
          
          if(typeof(response) == 'object'){
              response.forEach(showitem, removeAllChildNodes(document.getElementById("livesearch")));
          }else{
                  if(typeof(response) == 'string'){
                      shownotfound(response, removeAllChildNodes(document.getElementById("livesearch")));
                  }
          }
      }
  }
  xmlhttp.open("GET","<?= base_url()?>/livesearch/"+str,true);
  xmlhttp.send();
  }
  function shownotfound(response){
      const a = document.createElement('p');
      var linkText = document.createTextNode(response);
      a.appendChild(linkText);
      document.getElementById("livesearch").appendChild(a);
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      document.getElementById("livesearch").style.padding="10px";
  }

  function showitem(item, index){
      var base_url = '<?= base_url()?>';
      const a = document.createElement('a');
      var linkText = document.createTextNode(item.title);
      a.appendChild(linkText);
      a.title = item.title;
      a.href = base_url+'/bai-viet/'+item.slug;
      document.getElementById("livesearch").appendChild(a);
      document.getElementById("livesearch").style.border="1px solid #e5e5e5";
      document.getElementById("livesearch").style.padding="10px";
  }

  function removeAllChildNodes(parent) {
      while (parent.firstChild) {
          parent.removeChild(parent.firstChild);
      }
  }

  x=document.getElementsByClassName("toc-title");  // Find the elements
  for(var i = 0; i < x.length; i++){
    x[i].innerText="Mục lục";    // Change the content
  }
</script>


