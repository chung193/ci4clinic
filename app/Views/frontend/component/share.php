
<style>
    .action{margin: 30px 0 30px 0;padding:0}
    .action div{padding:0}
    .action .book, .action .hotline-share{padding: 15px; background: #00bcd5;color:white;border-radius: 5px;width:auto}
    .action .book:hover, .action .hotline-share:hover{background: #00ac4f;}
    .action .hotline-share{

    }

    .action .book{
        
    }
</style>
<div class="action">
        <a href="tel:0123456789" class="hotline-share" ><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;Hotline: 0123456789</a>
        <a href="#" data-toggle="modal" class="book"  data-target="#book"> <i class="fa fa-calendar" aria-hidden="true"></i>  &nbsp; Đặt lịch khám</a>
</div>

<?php echo view('frontend/component/modal_book');?>