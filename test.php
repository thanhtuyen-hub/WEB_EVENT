<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Khu liên hợp thể thao Nguyễn Tri Phương</title>
    <link rel="stylesheet" type="text/css" href="./event-management.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57"/>
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png"/>
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png"/>
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png"/>
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png"/>
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png"/>
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png"/>
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png"/>
    <link rel="icon" type="image/png" sizes="192x192" href="./favicon/android-icon-192x192.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png"/>
    <link rel="manifest" href="/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff" />
    <script src="./scripts/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <div id="overlay-wrapper"></div>
    <!-- HEADER -->
    <!-- <?php include "./header/admin-managerial-header.php"; ?> -->
    <!-- BODY -->
    <div class="schedule-body">
      <div class="schedule-body-content">
        <div class="schedule-top">
          <p>Danh sách sự kiện</p>
          <div class="filter">
            <label for="filter" class="filter-btn" title="Filter"></label>
            <input type="checkbox" id="filter">
            <div class="filter-form">              
              <div class="filter-schedule-date">
                <p>Khoảng thời gian</p>
                <div id="filter-schedule-date-options">
                  <div class="date">
                    <p>Ngày bắt đầu</p>
                    <input type="date" id="start-date" name="start-date">
                  </div>
                  <p id="to">đến</p>
                  <div class="date">
                    <p>Ngày kết thúc</p>
                    <input type="date" id="end-date" name="end-date">
                  </div>
                </div>
              </div>
              <hr>
              <div class="filter-action">
                <a id="btn-filter-reset" href="#">Đặt lại</a>
                <div class="right-part">
                  <a id="btn-filter-cancel" href="./sport-court-schedules-management.php?court_type_id=0">Hủy</a>
                  <a id="btn-filter-confirm" href="#">Xác nhận</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="search">
          <img src="./image/sport-court-schedules-management-img/search.svg" alt="search-icon">
          <input
            type="search"
            id="search-input"
            name="search-input"
            placeholder="Tìm kiếm sự kiện"
            required
          />        
        </div>
        <div id="schedule-body-menu">
          <ul>
            <h3 class="all">Tất cả (9)</h3>
          </ul>
          <div id="action">
            <a id="insert" href="?option=view_insert_court_schedule">
              <img src="./image/sport-court-schedules-management-img/insert.svg" alt="insert icon">
              <p>Thêm</p>
            </a>
            <a id="update" href="#">
              <img src="./image/sport-court-schedules-management-img/update.svg" alt="update icon">
              <p>Sửa</p>
            </a>
            <a id="delete" href="#">
              <img src="./image/sport-court-schedules-management-img/delete.svg" alt="delete icon">
              <p>Xóa</p>
            </a>
          </div>
        </div>
        <div class="court-schedule-table">
          <table>
            <thead> 
              <tr>
                <th><input type='checkbox' name='court_schedule_id_0' id='court_schedule_id_0'></th>
                <th>Mã sự kiện<span class=''></span></th>
                <th style="max-width: 200px;">Tên sự kiện<span class=''></span></th>
                <th>Ngày bắt đầu<span class=''></span></th>
                <th>Ngày kết thúc<span class=''></span></th>
                <th>Mô tả sự kiện<span class=''></span></th>
                <th>Hình ảnh sự kiện<span class=''></span></th>
                <th>Tỷ lệ ưu đãi<span class=''></span></th>
                <th>Qùa ưu đãi<span class=''></span></th>
                <th>Trạng thái<span class=''></span></th>
                <th style="padding-right: 3rem;">Thao tác<span class=''></span></th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td><input type='checkbox' name='court_schedule_id_1'></td>
              <td>1</td>
              <td>Giai thi đầu quốc tế 2023 toàn quốc gia</td>
              <td>2024/01/02</td>
              <td>2024/01/02</td>
              <td>Trải nghiệm của tôi khi xem trực tiếp trận đấu bóng đá tại sân vận động thật tuyệt</td>
              <td><img class="img-event" src="./image/event-management-img/bong-da.png" alt="Hình ảnh"></td>
              <td>20%</td>
              <td>0</td>
              <td><a class="still-valid" href="">Còn hạn</a></td>  
              <td class='btn-view'>
                <a>
                  <img src='./image/sport-court-schedules-management-img/eye.svg' alt='eye icon'>
                  <p>Xem</p>
                </a>
              </td>
            </tr>

            
            <td><input type='checkbox' name='court_schedule_id_1'></td>
              <td>1</td>
              <td>Giai thi đầu quốc tế 2023 toàn quốc gia</td>
              <td>2024/01/02</td>
              <td>2024/01/02</td>
              <td>Trải nghiệm của tôi khi xem trực tiếp trận đấu bóng đá tại sân vận động thật tuyệt</td>
              <td><img class="img-event" src="./image/event-management-img/bong-da.png" alt="Hình ảnh"></td>
              <td>20%</td>
              <td>0</td>
              <td><a class="still-valid" href="">Còn hạn</a></td>  
              <td class='btn-view'>
                <a>
                  <img src='./image/sport-court-schedules-management-img/eye.svg' alt='eye icon'>
                  <p>Xem</p>
                </a>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- FOOTER -->
    <!-- <?php include "./footer/footer.php"; ?> -->
    <script type="text/javascript" src="./scripts/event-management.js" language="javascript"></script>

    <!-- FORM XEM THÔNG TIN SỰ KIỆN -->
    <form id="form-view" action="" method="post" enctype="multipart/form-data">
      <div class="form-header">
        <p>Thông tin sự kiện</p>
        <a href="?option=court_schedule_exit">
          <img src="./image/sport-court-schedules-management-img/close.svg" alt="close">
        </a>
      </div>
      <div class="form-body">
        <div class="form-body-content">
          <p class="form-body-title">Thông tin chung</p>
          <div class="form-row">
            <p>Mã sự kiện :</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không nhập'>
            </div>
          </div>
          <div class="form-row">
            <p>Tên sự kiện :</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không nhập'>
            </div>
          </div>
          <div class="form-row">
            <p>Mô tả sự kiện :</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không nhập'>
            </div>
          </div>
          <div class="form-row">
            <p>Hình ảnh sự kiện </p>
            <div class="input">
              <img src="./image/event-management-img/bong-da.png" alt="">
            </div>
          </div>
          <hr>
          <p class="form-body-title">Tỷ lệ và quà ưu dãi</p>
          <div class="form-row">
            <p>Tỷ lệ ưu đãi</p>
            <div class="input">
              <select>
                <option value='5%'>5%</option>
                <option value='10%'>10%</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <p>Quà ưu đãi</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không nhập'>
            </div>
          </div>
          <hr>
          <p class="form-body-title">Thông tin khác</p>
          <div class="form-row">
            <p>Trạng thái :</p>
            <div class="input">
             <a class="still-valid" href="">Còn hạn</a>
            </div>
          </div>
          <div class="form-row">
            <p>Ngày thêm :</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không nhập'>
            </div>
          </div>
          <div class="form-row">
            <p>Ngày cập nhật :</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không nhập'>
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="button-group">
          <a class="form-button" id="form-update" href="">
            <img src="./image/sport-court-schedules-management-img/form-edit.svg" alt="update icon">
            <p>Sửa</p>
          </a>
          <a class="form-button" id="form-delete" href="">
            <img src="./image/sport-court-schedules-management-img/form-delete.svg" alt="delete icon">
            <p>Xóa</p>
          </a>
        </div>
      </div>
    </form>

    <!-- FORM CHỈNH SỬA THÔNG TIN SỰ KIỆN -->
    <form id="form-edit" action="" method="post" enctype="multipart/form-data">
    <div class="form-header">
        <p>Thông tin sự kiện</p>
        <a href="?option=court_schedule_exit">
          <img src="./image/sport-court-schedules-management-img/close.svg" alt="close">
        </a>
      </div>
      <div class="form-body">
        <div class="form-body-content">
          <p class="form-body-title">Thông tin chung</p>
          <div class="form-row">
            <p>Mã sự kiện :</p>
            <div class="input">
              <input type='text' name='' placeholder='Nhập mã sự kiện'>
            </div>
          </div>
          <div class="form-row">
            <p>Tên sự kiện :</p>
            <div class="input">
              <input type='text' name='' placeholder='Nhập tên sự kiện'>
            </div>
          </div>
          <div class="form-row">
            <p>Mô tả sự kiện :</p>
            <div class="input" >
              <input type='text' name='' placeholder='Nhập mô tả sự kiện'>
            </div>
          </div>
          <div class="form-row">
              <p>Hình ảnh sự kiện</p>
              <div class="input">
                  <input type="file" id="event-image" name="event-image" accept="image/*">
              </div>
          </div>
          <hr>
          <p class="form-body-title">Tỷ lệ và quà ưu dãi</p>
          <div class="form-row">
            <p>Tỷ lệ ưu đãi</p>
            <div class="input">
              <select>
                <option value=''>Chọn tỉ lệ ưu đãi</option>
                <option value='10%'>10%</option>
                <option value='10%'>10%</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <p>Quà ưu đãi</p>
            <div class="input" >
              <input type='text' name='' placeholder='Nhập quà ưu đãi'>
            </div>
          </div>
          <hr>
          <p class="form-body-title">Thông tin khác</p>
          <div class="form-row">
          <p>Trạng thái :</p>
            <div class="input" >
              <select>
                <option value=''>Còn hạn</option>
                <option value=''>Hết hạn</option>
              </select>
            </div>          
          </div>
          <div class="form-row">
            <p>Ngày thêm:</p>
            <div class="input">
                <input type="date" id="added-date" name="added-date">
            </div>
          </div>
          <div class="form-row">
            <p>Ngày cập nhật :</p>
            <div class="input" >
              <input type="date" id="added-date" name="added-date">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="button-group">
          <a class="form-button" id="form-cancel" href="">
            <img src="./image/sport-court-schedules-management-img/form-edit.svg" alt="update icon">
            <p>Hủy</p>
          </a>
          <a class="form-button" id="form-save" href="">
            <img src="./image/sport-court-schedules-management-img/form-delete.svg" alt="delete icon">
            <p>Lưu</p>
          </a>
        </div>
      </div>
    </form>

    <!-- FORM THÊM SỰ KIỆN -->
    <form id="form-insert" action="./controllers/court-schedule-controller.php?option=insert_court_schedule" method="post" enctype="multipart/form-data">
    <div class="form-header">
        <p>Thông tin sự kiện</p>
        <a href="?option=court_schedule_exit">
          <img src="./image/sport-court-schedules-management-img/close.svg" alt="close">
        </a>
      </div>
      <div class="form-body">
        <div class="form-body-content">
          <p class="form-body-title">Thông tin chung</p>
          <div class="form-row">
            <p>Mã sự kiện :</p>
            <div class="input" style="pointer-events: none;">
              <input type='text' name='' placeholder='Không được nhập vào ô này'>
            </div>
          </div>
          <div class="form-row">
            <p>Tên sự kiện :</p>
            <div class="input">
              <input type='text' name='' placeholder='Nhập tên sự kiện'>
            </div>
          </div>
          <div class="form-row">
            <p>Mô tả sự kiện :</p>
            <div class="input" >
              <input type='text' name='' placeholder='Nhập mô tả sự kiện'>
            </div>
          </div>
          <div class="form-row">
              <p>Hình ảnh sự kiện</p>
              <div class="input">
                  <input type="file" id="event-image" name="event-image" accept="image/*">
              </div>
          </div>
          <hr>
          <p class="form-body-title">Tỷ lệ và quà ưu dãi</p>
          <div class="form-row">
            <p>Tỷ lệ ưu đãi</p>
            <div class="input">
              <select>
                <option value=''>Chọn tỉ lệ ưu đãi</option>
                <option value='10%'>10%</option>
                <option value='10%'>10%</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <p>Quà ưu đãi</p>
            <div class="input" >
              <input type='text' name='' placeholder='Nhập quà ưu đãi'>
            </div>
          </div>
          <hr>
          <p class="form-body-title">Thông tin khác</p>
          <div class="form-row">
          <p>Trạng thái :</p>
            <div class="input" >
              <select>
                <option value=''>Còn hạn</option>
                <option value=''>Hết hạn</option>
              </select>
            </div>          
          </div>
          <div class="form-row">
            <p>Ngày thêm:</p>
            <div class="input">
                <input type="date" id="added-date" name="added-date">
            </div>
          </div>
          <div class="form-row">
            <p>Ngày cập nhật :</p>
            <div class="input" >
              <input type="date" id="added-date" name="added-date">
            </div>
          </div>
        </div>
      </div>
      <div class="form-footer">
        <div class="button-group">
          <a class="form-button" id="form-cancel" href="">
            <img src="./image/sport-court-schedules-management-img/form-edit.svg" alt="update icon">
            <p>Hủy</p>
          </a>
          <a class="form-button" id="form-save" href="">
            <img src="./image/sport-court-schedules-management-img/form-delete.svg" alt="delete icon">
            <p>Lưu</p>
          </a>
        </div>
      </div>
    </form>
    
  </body>
</html>