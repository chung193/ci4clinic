<style>
   .header-on-slider .main-title-section-wrapper {
      padding-top: 145px;
      display: block;
   }

   .breadcrumb {
      background-color: transparent;
   }

   .entry-title,
   .entry-body {
      padding: 12px 30px 20px;
   }

   .main-title-section-wrapper {
      margin-bottom: 0
   }

   .entry-details {
      padding: 0 !important
   }

   #primary {
      width: 750px !important;
   }

   #secondary-left {
      width: 300px;
   }
</style>

<div id="main">
   <section class="main-title-section-wrapper default" style="background:url(https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/breadcrumb-bg.jpg) center center no-repeat;">
      <div class="container">
         <div class="main-title-section">
            <h1><?= $post->title ?></h1>
         </div>
         <div class="breadcrumb"><a href="<?= base_url() ?>">Trang chủ <span class="fa default"></span></a><a href="<?= base_url() . '/bai-viet/' . $post->slug ?>"><?= $post->title ?> </a></div>
      </div>
   </section>
   <div class="container">
      <section id="primary" class="page-with-sidebar with-both-sidebar">
         <article id="post-96" class="blog-entry single entry-default post-96 post type-post status-publish format-image has-post-thumbnail hentry category-technical tag-news post_format-post-format-image">



            <div class="entry-details">


               <div class="entry-title">
                  <h4><a href="<?= base_url() . '/bai-viet/' . $post->slug ?>" title="<?= $post->title ?>"><?= $post->title ?></a></h4>
               </div>

               <div class="entry-body">
                  <p><?= $post->description ?></p>
                  <br>

                  <?= $post->content ?>
                  <?php echo view('frontend/component/share');?>
                  <div class="fb-share-button" data-href="<?= base_url() . '/bai-viet/' . $post->slug ?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                  <div class="fb-comments" data-href="<?= base_url() . '/bai-viet/' . $post->slug ?>" data-width="100%" data-numposts="5"></div>
               </div>


               <!-- <div class="entry-meta-data">
                  <p class="tags "> <i class="fa fa-tag"> </i><a href="https://dtdental.wpengine.com/tag/news/" rel="tag">news</a></p>
                  <p class=" category"><i class="fa fa-sitemap"> </i> <a href="https://dtdental.wpengine.com/category/technical/" rel="category tag">Technical</a></p>
               </div> -->

            </div>
         
         </article>

         <div class="dt-sc-hr"></div>
         <div class="dt-sc-clear"></div>

      </section>

      <section id="secondary-left" class="secondary-sidebar secondary-has-both-sidebar">
         <div class="type19">
            <aside id="categories-2" class="widget widget_categories">
               <h3 class="widgettitle">Danh mục</h3>
               <ul>
                  <?php
                  foreach ($cat as $val) {
                  ?>
                     <li class="cat-item cat-item-30"><a href="<?= base_url().'/danh-muc/'.$val['slug'] ?>"><?= $val['title'] ?> <span>(<?= $val['num'] ?>)</span></a>
                     </li>
                  <?php } ?>

               </ul>

            </aside>
         </div>
      </section>

   </div>

</div>