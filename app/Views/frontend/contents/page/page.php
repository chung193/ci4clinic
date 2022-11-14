<style>
   .header-on-slider .main-title-section-wrapper {
      padding-top: 145px;
      display:block;
   }
   .breadcrumb{
      background-color: transparent;
   }

   .entry-title, .entry-body{
      padding: 12px 30px 20px;
   }
   .main-title-section-wrapper{
      margin-bottom:0
   }
</style>
<div id="main">
   <section class="main-title-section-wrapper default" style="background:url(https://dtdental.wpenginepowered.com/wp-content/uploads/2015/06/breadcrumb-bg.jpg) center center no-repeat;">
      <div class="container">
         <div class="main-title-section">
            <h1><?= $page->title ?></h1>
         </div>
         <div class="breadcrumb">
            <a href="<?= base_url() ?>">Trang chủ <span class="fa default"></span></a>
                        
            <a href="<?= base_url().'/'.$page->slug ?>"><?= $page->title ?></a>
         </div>
      </div>
   </section>
   <div class="container">
      <section id="primary" class="content-full-width">
         <article id="post-1" class="blog-entry single entry-default post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-news category-technical tag-blog">

            <div class="entry-thumb">
               <a href="<?= base_url().'/'.$page->slug ?>" title="<?= $page->title ?>">
                  <img width="1170" height="795" src="<?= base_url() . '/public/uploads/page/' . $page->img ?>" class="attachment-full size-full wp-post-image" alt="" 
                  srcset="<?= base_url() . '/public/uploads/page/' . $page->img ?> 1170w, <?= base_url() . '/public/uploads/page/' . $page->img ?> 300w, <?= base_url() . '/public/uploads/page/' . $page->img ?> 1024w" sizes="(max-width: 1170px) 100vw, 1170px"></a>
               <div class="entry-format ">
                  <a class="ico-format" href=""></a>
               </div>
               <?php 
                  $d = strtotime($page->createdat);
               ?>
               <div class="date "><strong><?= date('d',$d)?> </strong><?= 'th.'.date('m',$d).' '.date('Y',$d) ?></div>
            </div>



            <div class="entry-details">


               <div class="entry-meta">
                  <div class="author ">
                     <span>by</span> <a href="#" title="View all posts by ram">ram</a>
                  </div>
                  </div>
               </div>

               <div class="entry-title">
                  <h4><a href="<?= base_url().'/bai-viet/'.$page->slug ?>" title="<?= $page->title ?>"><?= $page->title ?></a></h4>
               </div>

               <div class="entry-body">
                  <div class="vc_row wpb_row vc_row-fluid">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <?= $page->content ?>
                                 </div>
                                 <?php echo view('frontend/component/share');?>
                                 <div class="fb-share-button" data-href="<?= base_url() . '/' . $page->slug ?>" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                                 <div class="fb-comments" data-href="<?= base_url() . '/' . $page->slug ?>" data-width="" data-numposts="5"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


            </div>

         </article>

         <div class="dt-sc-hr"></div>
         <div class="dt-sc-clear"></div>

         <!-- <section class="commententries">

            <div id="comments" class="comments-area">

               <h3>Comment ( 1 )</h3>


               <ul class="commentlist">
                  <li class="comment even thread-even depth-1" id="li-comment-1">
                     <article class="comment" id="comment-1">
                        <header class="comment-author"><img alt="" src="https://secure.gravatar.com/avatar/?s=450&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/?s=900&amp;d=mm&amp;r=g 2x" class="avatar avatar-450 photo avatar-default" height="450" width="450" loading="lazy"></header>
                        <section class="comment-details">
                           <div class="author-name">
                              <h3><a href="http://wedesignthemes.com/veda/" rel="external nofollow ugc" class="url">Mr WordPress</a></h3> <span class="commentmetadata"> / 11 Jun 2015</span>
                           </div>
                           <div class="comment-body">
                              <p>Hi, this is a comment.<br>
                                 To delete a comment, just log in and view the post's comments. There you will have the option to edit or delete them.</p>
                           </div>
                           <div class="reply"><a rel="nofollow" class="comment-reply-link" href="https://dtdental.wpengine.com/integer-at-diam-gravida-fringilla-nibh-preti-purus/?replytocom=1#respond" data-commentid="1" data-postid="1" data-belowelement="comment-1" data-respondelement="respond" data-replyto="Reply to Mr WordPress" aria-label="Reply to Mr WordPress">Reply</a> </div>
                        </section>
                     </article>
                  </li>
               </ul>




               <div id="respond" class="comment-respond">
                  <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/integer-at-diam-gravida-fringilla-nibh-preti-purus/#respond" style="display:none;">Cancel reply</a></small></h3>
                  <form action="https://dtdental.wpengine.com/wp-comments-post.php?wpe-comment-post=dtdental" method="post" id="commentform" class="comment-form" novalidate="">
                     <div class="column dt-sc-one-half first"><textarea id="comment" name="comment" cols="5" rows="3" placeholder="Comment"></textarea></div>
                     <div class="column dt-sc-one-half">
                        <p><input id="author" name="author" type="text" placeholder="Name" required=""></p>
                        <p> <input id="email" name="email" type="text" placeholder="Email" required=""> </p>
                     </div>
                     <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>
                     <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Comment"> <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                     </p>
                  </form>
               </div>


            </div> 
         </section>-->
      </section>
   </div>

</div>