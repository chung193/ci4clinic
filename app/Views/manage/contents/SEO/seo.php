
<div class="col-md-4">
  <div class="card card-outline card-info">

    <div class="card-header">
      <h3 class="card-title">
        SEO (Meta Data)
      </h3>
    </div>

    <div class="card-body">

      <div class="seo-block bg-white">

        <div class="form-group">
          <label for="exampleInputEmail1">Thẻ tiêu đề (meta title)</label>
          <input type="text" name="meta_title" class="form-control" 
          <?php 
            if(isset($seo)){
              echo 'value="'.$seo->meta_title.'"';
            }
          ?>
          id="exampleInputEmail1" placeholder="meta title">
        </div>

        <!-- <div class="form-group">
          <label for="exampleInputEmail1">type</label>
          <input type="content_type" class="form-control" value="post" disabled="disabled" id="exampleInputEmail1" placeholder="meta title">
        </div> -->

        <div class="form-group">
          <label>Thẻ mô tả (meta description)</label>
          <textarea class="form-control" name="meta_description" rows="3" placeholder="Enter ..."><?php 
            if(isset($seo)){
              echo $seo->meta_description;
            }
          ?></textarea>
        </div>

      </div>
    </div>
  </div>
</div>