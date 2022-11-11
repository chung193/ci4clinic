<style>
   .header-on-slider .main-title-section-wrapper {
      padding-top: 145px;
      display:block;
   }

   .breadcrumb{
      background-color: transparent;
   }

   #primary{
      padding-bottom:80px;
   }

   .breadcrumb .fa.default {
      display: inline-block;
      height: 14px;
      width: 1px;
      -webkit-transform: rotate(30deg);
      -moz-transform-origin: 0 0;
      -moz-transform: rotate(30deg);
      -ms-transform-origin: 0 0;
      -ms-transform: rotate(30deg);
      transform-origin: 0 0;
      transform: rotate(30deg);
      background: #343434;
      top: 3px;
      position: relative;
      margin: 0 5px 0 10px;
      padding:0;
   }

   .active a{
      background: #00bcd5;
      border-color: #00bcd5;
   }
</style>
<div id="main">
   <?php
   echo view('frontend/component/breadcrum', $test);
   ?>
   <div class="container">
      <section id="primary" class="content-full-width">
         <div id="post-164" class="post-164 page type-page status-publish hentry">
         </div>

         <div class="dt-sc-clear"></div>


         <div class="tpl-blog-holder apply-isotope" style="position: relative; height: 1256.06px;">

            <?php
               foreach ($post as $val) {
            ?>
            <div class="column dt-sc-one-third first" style="position: absolute; left: 0px; top: 0px;">
               <article id="post-1" class="blog-entry entry-default post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-technical tag-blog">

                  <div class="entry-thumb">
                     <a href="<?= base_url() . '/bai-viet/' . $val['slug'] ?>" title="<?= $val['title'] ?>">
                     <img width="1170" height="795" src="<?= base_url() . '/public/uploads/post/' . $val['img'] ?>" class="attachment-full size-full wp-post-image" alt="" loading="lazy" srcset="<?= base_url() . '/public/uploads/post/' . $val['img'] ?> 1170w, <?= base_url() . '/public/uploads/post/' . $val['img'] ?> 300w, <?= base_url() . '/public/uploads/post/' . $val['img'] ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></a>
                     <div class="entry-format hidden">
                        <a class="ico-format" href=""></a>
                     </div>
                     <?php 
                     $d = strtotime($val['createdat']);
                     ?>
                     <div class="date "><strong><?= date('d',$d)?> </strong><?= 'th.'.date('m',$d).' '.date('Y',$d) ?></div>
                  </div>


                  <div class="entry-details">

                     <div class="entry-meta ">
                        <!-- <div class="author ">
                           <span>by</span> <a href="https://dtdental.wpengine.com/author/ram/" title="View all posts by ram">ram</a>
                        </div> 

                        <div class="comments"><a href="https://dtdental.wpengine.com/integer-at-diam-gravida-fringilla-nibh-preti-purus/#comments"><i class="fa fa-comments-o"> </i> 1</a> </div>-->
                     </div>

                     <div class="entry-title">
                        <h4><a href="<?= base_url() . '/bai-viet/' . $val['slug'] ?>" title="<?= $val['title'] ?>"><?= $val['title'] ?></a></h4>
                     </div>

                     <div class="entry-body">
                        <p><?= $val['description'] ?></p>
                     </div>


                     <!-- <div class="entry-meta-data ">
                        <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/blog/" rel="tag">blog</a></p>
                        <p class=" category"><i class="fa fa-sitemap"> </i> <a href="https://dtdental.wpengine.com/category/news/" rel="category tag">News</a>, <a href="https://dtdental.wpengine.com/category/technical/" rel="category tag">Technical</a></p>
                     </div> -->



                  </div>

               </article>
            </div>

            <?php } ?>
             
         </div>

         <div class="pagination blog-pagination">
            <div class="column one pager_wrapper">
               <ul class="page-numbers">
                  <?= $pager_links ?>
               </ul>
            </div>
         </div>
         

      </section>
   </div>

</div>