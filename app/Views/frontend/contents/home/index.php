<?php
// print_r($dichvu); die();
?>

<div id="main">
    <div class="container">
        <section id="primary" class="content-full-width">
            <div class="page type-page status-publish hentry">
                
                <?php echo view('frontend/component/section/service', $test)?>
                
                <?php echo view('frontend/component/section/solution', $test)?>

                <?php echo view('frontend/component/section/wehave', $test)?>
                

                <?php echo view('frontend/component/section/video', $test)?>

                <?php echo view('frontend/component/section/team', $test)?>

                <?php echo view('frontend/component/section/system', $test)?>

                <?php echo view('frontend/component/section/post', $test)?>

                <?php echo view('frontend/component/section/sub', $test)?>

                <div class="vc_row-full-width vc_clearfix"></div>
            </div>
        </section>
    </div>

</div>


<?php echo view('frontend/component/modal_book'); ?>