<style>
    .text_input {
        border: none;
        background: none;
        padding: 0;
        text-transform: uppercase;
        font-size: 12px;
        width: 220px;
        -webkit-appearance: none;
        margin-bottom: 0;
    }


    #livesearch {
        border: 0;
        width: 100%;
        /* border-radius: 5px; */
        position: absolute;
        left: 0px;
        top: 48px;
        background-color: white;
        z-index: 1000;
    }

    #livesearch p {
        margin: 0px;
    }

    .menu-item li a{
        text-transform: uppercase;
    }
</style>

<div id="menu-wrapper" class="menu-wrapper menu-active-with-icon menu-active-highlight">
    <div class="dt-menu-toggle" id="dt-menu-toggle">
        Danh mục <span class="dt-menu-toggle-icon"></span>
    </div>
    <nav id="main-menu" class="menu-header-menu-container">
        <ul class="menu">

            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-depth-0 with-box-shadow  menu-item-simple-parent ">
                <a href="<?= base_url() ?>">Trang chủ</a>
            </li>


            <?php
            

            foreach ($base['category'] as $val) {
                if(check_child_array($val['id'],$base['category'])){
                    echo '
                    <li id="menu-item-8287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0 with-box-shadow  menu-item-simple-parent ">
                        <a href="' . base_url() . '/danh-muc/' . $val['slug'] . '">' . $val['title'] . '</a>
                    <ul class="sub-menu ">
                 ';
                foreach ($base['category'] as $value) {
                    if ($value['parent_id'] == $val['id']) {
                            echo '<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-1">
                            <a href="' . base_url() . '/danh-muc/' . $value['slug'] . '">' . $value['title'] . '</a>
                            </li>';
                        }
                    }
                    echo '</ul>
                    <a class="dt-menu-expand" href="javascript:void(0)">+</a>
                   </li>';
                }else{
                    // echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-depth-0 with-box-shadow  menu-item-simple-parent "><a href="' . base_url() . '/danh-muc/' . $val['slug'] . '">' . $val['title'] . '</a></li>';
                }
            }
            

            foreach($base['pagecat'] as $val){
                if(check_child_array_page($val['id'],$base['page'])){
                    echo '
                    <li id="menu-item-8287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-depth-0 with-box-shadow  menu-item-simple-parent ">
                        <a href="#">' . $val['name'] . '</a>
                    <ul class="sub-menu ">
                    ';
                
                foreach ($base['page'] as $value) {
                    if ($value['cat_id'] == $val['id']) {
                            echo '<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-depth-1">
                            <a href="' . base_url() . '/' . $value['slug'] . '">' . $value['title'] . '</a>
                            </li>';
                        }
                    }
                    echo '</ul>
                    <a class="dt-menu-expand" href="javascript:void(0)">+</a>
                   </li>';
                }else{
                    // echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-depth-0 with-box-shadow  menu-item-simple-parent "><a href="' . base_url() . '/danh-muc/' . $val['slug'] . '">' . $val['title'] . '</a></li>';
                }
            }

            ?>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-depth-0 with-box-shadow  menu-item-simple-parent ">
                <a href="javascript:void(0)" data-toggle="modal"   data-target="#book"> 
                    <span class="book"><i class="fa fa-calendar" aria-hidden="true"></i>  &nbsp; Đặt lịch khám</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="menu-icons-wrapper">
        <div class="search">
            <a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-search"> </span> </a>
            <div class="top-menu-search-container">

                <form method="get" id="searchform" action="<?= base_url() ?>/search/">
                    <input id="s" name="s" type="text" onkeyup="showResult(this.value)" placeholder="Nhập từ khóa tìm kiếm" class="text_input" onblur="if(this.value==''){this.value='Nhập từ khóa tìm kiếm';}" onfocus="if(this.value =='Nhập từ khóa tìm kiếm') {this.value=''; }">
                    <a href="javascript:void(0)" class="dt-search-icon"> <span class="fa fa-close"> </span> </a>
                    <input name="submit" type="submit" value="Go">
                    <div id="livesearch"></div>
                </form>
            </div>
        </div>
    </div>

</div>