<style>
    .modal-body label{
        font-size:12px;
    }

    .modal-body input{
        font-size:14px
    }

    .modal-body h2{
        color: rgba(0,188,213,.9);
    }
    .modal-body .btn-primary{
        background-color: rgba(0,188,213,.9); border-color: rgba(0,188,213,.9);
    }
    .modal-body input[type="text"]{
        padding-left:10px;
    }
</style>
<div class="modal fade " id="book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none">
        <a href="#" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
            <div class="row pl-3 pr-3 pb-4">
                <div class="col-12 col-md-6">
                    <h2><strong>LƯU Ý:</strong></h2>
                    <ul>
                        <li>Lịch hẹn chỉ có hiệu lực khi Quý khách được xác nhận chính thức từ Bệnh viện thông qua điện thoại.</li>
                        <li>Quý khách sử dụng dịch vụ đặt hẹn trực tuyến, vui lòng đặt hẹn ít nhất 24h trước khi đến khám.</li>
                        <li>Quý khách vui lòng cung cấp thông tin chính xác để được hỗ trợ nhanh nhất.</li>
                        <li>Trường hợp khẩn cấp hay có triệu chứng nguy hiểm, vui lòng liên hệ trực tiếp cơ sở y tế để kịp thời xử lý.</li>
                    </ul>
                    <?php echo view('frontend/component/hotline', $test)?>
                </div>
                <div class="col-12 col-md-6">
                <h2><strong>ĐẶT LỊCH KHÁM BỆNH</strong></h2>
                <form method="post" action="<?= base_url().'/book' ?>">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Họ tên</label>
                        <input type="text" class="form-control mb-0" name="name" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Số điện thoại</label>
                        <input type="text" class="form-control mb-0"  name="phone" id="recipient-name">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Ngày hẹn</label></label>
                                <input type="datetime-local"  name="date" class="form-control mb-0" id="recipient-name">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Chọn cơ sở</label>
                        <select class="form-control"  name="location" id="exampleFormControlSelect1">
                            <?php 
                                foreach($base['location'] as $val){
                            ?>
                             <option value=<?= $val['id']?>><?= $val['address'] ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Mô tả triệu chứng</label>
                        <textarea class="form-control" id="message-text" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 mt-0">Đặt lịch hẹn</button>

                    </form>
                </div>
            </div>

      </div>
    </div>
  </div>
</div>