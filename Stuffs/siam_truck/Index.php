<?php

$errors = [];
$message = '';
if ($_POST) {
    if (!$_POST['hovaten']) {
        $errors['hovaten'] = 'OK';
    }

    if (empty($errors)) {
        ksort($_POST);
        $values = array_values($_POST);
        file_put_contents('./#contact.csv', implode(",", $values) . "\r\n", FILE_APPEND) or die("Unable to open file!");
        $message = 'Xong cmnr';
    }
}

?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siam Truck</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top tNavBar">
        <div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="/"><img src="/assets/logo.png" alt="Siam Truck">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tel:0909202699"><img src="assets/hotline.png"> <span>HOTLINE: 0909 20 26 99</span></a>
                    </li>
                    <li><a href="#"><img src="assets/gmail.png"> <span>NHẬN TƯ VẤN NGAY</span></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <section class="" id="s1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <form id="tRegisterForm" method="POST">
                        <?php if ($message): ?>
                            <div><?php echo $message; ?></div>
                        <?php endif; ?>
                        <div class="form-group">

                            <input type="text" class="form-control" name="hovaten" placeholder="Họ và tên*" required>
                            <?php if (!empty($errors['hovaten'])): ?>
                           <?php echo $errors['hovaten'] ?>
<?php endif; ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại*">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ*">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-default btn-golden">ĐĂNG KÝ NGAY</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" id="tQuote">
                    <h1 style="margin-top: 5px;">DRIVE YOUR DREAM</h1>
                    <span>Xe tải Thái Lan đầu tiên Việt Nam</span>
                </div>
            </div>
            <div class="row" style="margin-top: 50vh;">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase" style="font-size: 27.06px; color: #fff;font-weight: bold;">SIAM TRUCK
                        MANG LẠI GÌ CHO TÀI XẾ VIỆT</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 tPromoBox text-center">
                    <img src="assets/promo1.jpg" class="img-responsive tPromoBoxImage" alt="Image">
                    <div class="tPromoBoxTitle">
                        <h4 class="text-uppercase">Xe tải thái lan <br /> đầu tiên việt nam</h4>
                    </div>
                    <div class="tPromoBoxBody text-justify">
                        <p>Xe tải nhẹ đầu tiên tại Việt Nam, động cơ bền bỉ, tiết kiệm nhiên liệu, tiêu chuẩn xe con,
                            trang bị nhiều tiện ích hiện đại.</p>
                    </div>
                </div>
                <div class="col-md-4 tPromoBox text-center">
                    <img src="assets/promo2.jpg" class="img-responsive tPromoBoxImage" alt="Image">
                    <div class="tPromoBoxTitle">
                        <h4 class="text-uppercase">Mức giá cả phải chăng</h4>
                    </div>
                    <div class="tPromoBoxBody text-justify">
                        <p>Dòng xe nội địa Thái Lan, được sản xuất theo công nghệ hàng đầu, Siam Truck có mức giá phù
                            hợp với người tiêu dùng Việt Nam trong phân khúc xe tải nhẹ.</p>
                    </div>
                </div>
                <div class="col-md-4 tPromoBox text-center">
                    <img src="assets/promo3.jpg" class="img-responsive tPromoBoxImage" alt="Image">
                    <div class="tPromoBoxTitle">
                        <h4 class="text-uppercase">Nội thất sang trọng</h4>
                    </div>
                    <div class="tPromoBoxBody text-justify">
                        <p>Bố trí nội - ngoại thất theo kiểu xe du lịch, ốp gỗ sang trọng với cấu tạo chắc chắn. Khoang
                            capo mở dễ dàng, thuận tiện cho việc bảo dưỡng, sửa chữa, thay thế.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="" id="s3" style="margin-top: -335px">
        <div class="container">
            
        </div>
    </section> -->
    <section class="" id="s4">
        <div class="container" id="tSiam"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="tFeatureBox">
                        <div class="tFeatureBoxBody">
                            <img src="assets/feature1.png" alt="" class="img-responsive tFeatureBoxImage">
                            <h4 class="tFeatureBoxTitle">HỆ THỐNG GIẢI TRÍ HIỆN ĐẠI</h4>
                            <div class="gapSolid"></div>
                            <div class="tFeatureBoxContent">
                                <p>Trang bị các cổng USB, CD, radio … nhằm mang đến cảm giác thoải mái nhất cho tài xế.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tFeatureBox">
                        <div class="tFeatureBoxBody">
                            <img src="assets/feature2.png" alt="" class="img-responsive tFeatureBoxImage">
                            <h4 class="tFeatureBoxTitle">HỆ THỐNG CAMERA TRƯỚC SAU & ĐA ĐIỂM</h4>
                            <div class="gapSolid"></div>
                            <div class="tFeatureBoxContent">
                                <p>Hỗ trợ tài xế trong việc quan sát, di chuyển, đậu đỗ xe trong nội đô, ngõ hẻm.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tFeatureBox">
                        <div class="tFeatureBoxBody">
                            <img src="assets/feature3.png" alt="" class="img-responsive tFeatureBoxImage">
                            <h4 class="tFeatureBoxTitle">HỆ THỐNG TRỢ LÁI</h4>
                            <div class="gapSolid"></div>
                            <div class="tFeatureBoxContent">
                                <p>Được trang bị hệ thống trợ lái điện, giúp cho việc điều khiển vô lăng dễ dàng, êm và
                                    nhẹ.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tFeatureBox">
                        <div class="tFeatureBoxBody">
                            <img src="assets/feature4.png" alt="" class="img-responsive tFeatureBoxImage">
                            <h4 class="tFeatureBoxTitle">HỆ THỐNG GIẢM SỐC</h4>
                            <div class="gapSolid"></div>
                            <div class="tFeatureBoxContent">
                                <p>Sử dụng 6 lá nhíp đàn hồi giúp xe giảm xóc tốt, hoạt động ổn định trong nhiều điều
                                    kiện vận tải.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tFeatureBox">
                        <div class="tFeatureBoxBody">
                            <img src="assets/feature5.png" alt="" class="img-responsive tFeatureBoxImage">
                            <h4 class="tFeatureBoxTitle">HỆ THỐNG CHIẾU SÁNG</h4>
                            <div class="gapSolid"></div>
                            <div class="tFeatureBoxContent">
                                <p>Xe được trang bị đèn model tiên tiến và công nghệ đèn sương mù kiểu mắt liếc cao cấp,
                                    thuận tiện di chuyển trong điều kiện thiếu sáng sáng, đường quanh co.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="tFeatureBox">
                        <div class="tFeatureBoxBody">
                            <img src="assets/feature6.png" alt="" class="img-responsive tFeatureBoxImage">
                            <h4 class="tFeatureBoxTitle">HỆ THỐNG LÀM MÁT</h4>
                            <div class="gapSolid"></div>
                            <div class="tFeatureBoxContent">
                                <p>Hệ thống làm mát động cơ với két nước làm mát lớn, giúp động cơ giữ nhiệt độ hoạt
                                    động ổn định trong nhiều giờ liên tục.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="" id="s5"></section> -->
    <section class="" id="s6">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="tQuestion">
                        <p>Bạn chọn mua xe 1 đời hay dành cả đời để mua xe?</p>
                        <h3>LIÊN HỆ ĐỂ ĐƯỢC TƯ VẤN</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" id="s7">
        <div class="container">
            <div class="row">
                <div class="col-md-6 tAbilityBox">
                    <div class="text-center tAbilityBoxImage">
                        <img src="assets/truck1.jpg" class="img-responsive" alt="Image">
                    </div>
                    <div class="media tAbilityBoxMedia">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="assets/flag.png" alt="thailand-flag">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">KHẢ NĂNG BẺ LÁI VỚI VÒNG QUAY HẸP</h4>
                            Phù hợp với việc di chuyển trong thành phố
                            ngõ hẹp và đông người vào giờ cao điểm
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tAbilityBox">
                    <div class="text-center tAbilityBoxImage">
                        <img src="assets/truck2.jpg" class="img-responsive" alt="Image" style="padding-top: 40px;">
                    </div>
                    <div class="media tAbilityBoxMedia">
                        <div class="media-left">
                            <a href="#  ">
                                <img class="media-object" src="assets/flag.png" alt="thailand-flag">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">HỆ THỐNG HỖ TRỢ KHỞI HÀNH NGANG DỐC</h4>
                            Xe tự động giữ chân phanh trong thời gian di chuyển từ chân phanh sang chân ga, giúp xe
                            không bị trượt dốc khi khởi hành, nâng cao tính năng an toàn cho xe.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tPromoRow">
                <div class="col-md-12 hidden-xs text-center">
                    <img src="assets/arrows.png" alt="" style="display: inline-block; margin-bottom: -25px;" />
                </div>
                <div class="col-md-4 col-sm-4 tPromo">
                    <img src="assets/promo4.jpg" class="img-responsive" alt="Image">
                </div>
                <div class="col-md-4 col-sm-4 tPromo">
                    <img src="assets/promo5.jpg" class="img-responsive" alt="Image">
                </div>
                <div class="col-md-4 col-sm-4 tPromo">
                    <img src="assets/promo6.jpg" class="img-responsive" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <section class="" id="s8">
        <div class="container">
            <div class="row tFrameSystem">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="gapSolidBig"></div>
                    <h1 class="tTitle">HỆ THỐNG KHUNG SƯỜN</h1>
                    <p class="tParagraph"><strong>Khung sườn xe được làm từ thép chất lượng cao, mang lại sự cứng cáp,
                            bền bỉ</strong></p>
                    <div class="divider div-transparent" style="margin-top: 35px; margin-bottom: 35px"></div>
                </div>
            </div>
            <div class="row tWarrantyPolicy">
                <div class="col-md-12 text-center ">
                    <img src="assets/guarantee.jpg" class="img-responsive" alt="Image"
                        style="width: 100%;height: auto;">
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="" id="s9"></section> -->
    <section class="" id="s11">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="tTitle">CHÍNH SÁCH TRẢ GÓP KHI MUA HÀNG</h1>
                    <p class="tParagraph"><strong>Điền vào bảng dưới đây để dự toán chi phí mua xe Siam Truck trả góp từ
                            Công ty Ô tô An
                            Phước</strong></p>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <form id="tCalculator">
                            <div class="form-group col-md-6">
                                <label for="ipPrice">Giá xe:</label>
                                <input type="text" class="form-control" id="ipPrice" onkeyup="FormatNumber(this)"
                                    placeholder="Nhập giá xe (VNĐ)">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ipPrice">Lãi suất (% tháng):</label>
                                <input type="text" class="form-control" id="ipInterestRate" placeholder="0.8"
                                    value="0.8">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ipPrice">Số tiền trả trước (VNĐ):</label>
                                <input type="text" class="form-control" id="ipPrepaid" onkeyup="FormatNumber(this)"
                                    placeholder="Số tiền trả trước (VNĐ) tối thiểu 30% giá xe">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ipPrice">Thời hạn vay:</label>
                                <input type="text" class="form-control" id="ipTenor" onkeyup="FormatNumber(this)"
                                    value="12" placeholder="Chọn thời hạn vay">
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-light-red" id="btnCalculate">TÍNH TIỀN</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="tResult"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 tInstallment">
                    <ul class="tInstallmentProcess">
                        <li>
                            <h4>QUY TRÌNH VAY MUA XE TẢI TRẢ GÓP</h4>
                        </li>
                        <li><strong><ins>Bước 1:</ins></strong> Xem xe và quyết định chọn mua.</li>
                        <li><strong><ins>Bước 2:</ins></strong> An Phước hỗ trợ liên hệ NH tư vấn và nộp hồ sơ vay vốn
                            theo yêu cầu..</li>
                        <li><strong><ins>Bước 3:</ins></strong> Ngân hàng thẩm định hồ sơ vay vốn. Nếu hồ sơ được duyệt
                            cho vay thì ngân hàng sẽ ra thông báo cho vay. KH nộp thông báo cho vay và khoản tiền vốn tự
                            có (20-30% giá trị xe) cho bên An Phước.</li>
                        <li><strong><ins>Bước 4:</ins></strong> Xuất hoá đơn và gửi hồ sơ cho KH đi làm thủ tục nộp thuế
                            trước bạ, bấm biển số, đăng kiểm xe…</li>
                        <li><strong><ins>Bước 5:</ins></strong> Khi đã có giấy hẹn ngày lấy Carvet xe, KH lên ngân hàng
                            để ký hợp đồng tín dụng & hợp đồng bảo hiểm vật chất xe. Khi hoàn thành các bước trên, ngân
                            hàng sẽ chuyển tiền cho An Phước và cấp cho khách hàng chứng nhận đi đường dùng thay Carvet
                            xe.</li>
                        <li><strong><ins>Bước 6:</ins></strong> Khi chúng tôi nhận được giải ngân số tiền còn lại từ
                            ngân hàng, KH đến nhận xe về.</li>
                        <li><strong><ins>Bước 7:</ins></strong> KH& Ngân hàng đi nhận Carvet xe bản gốc theo giấy hẹn.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-md-offset-3 text-center" style="margin-top: 25px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="1349" height="495" src="https://www.youtube.com/embed/7oSOVY9Cl48"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <iframe width="1349" height="495" src="https://www.youtube.com/embed/7oSOVY9Cl48"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <p style="margin: 10px auto;"><strong>Xem ngay Video trải nghiệm Siam Truck</strong></p>
                </div>
            </div>
        </div>
    </section>
    <div class="divider div-transparent" style="margin-top: 0;"></div>
    <section id="s12">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="tTitleYellow">THỜI GIAN KHUYẾN MÃI CÒN</h1>
                    <div class="counting-container" data-end="2019-07-10T10:00:00">
                        <div class="counting">
                            <div class="counting-numbers">
                                <div class="counting-digit day1">0</div>
                                <div class="counting-digit day2">0</div>
                                <div class="counting-haicham">:</div>
                            </div>
                            <div class="counting-unit">Ngay</div>
                        </div>
                        <div class="counting">
                            <div class="counting-numbers">
                                <div class="counting-digit hour1">0</div>
                                <div class="counting-digit hour2">0</div>
                                <div class="counting-haicham">:</div>
                            </div>
                            <div class="counting-unit">Gio</div>
                        </div>

                        <div class="counting">
                            <div class="counting-numbers">
                                <div class="counting-digit min1">0</div>
                                <div class="counting-digit min2">0</div>
                                <div class="counting-haicham">:</div>
                            </div>
                            <div class="counting-unit">Phut</div>
                        </div>

                        <div class="counting">
                            <div class="counting-numbers">
                                <div class="counting-digit sec1">0</div>
                                <div class="counting-digit sec2">0</div>

                                <div class="counting-haicham" style="opacity: 0;">:</div>
                            </div>
                            <div class="counting-unit">Ngay</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <p>
                        <span style="font-size: 24.9px; font-weight: bold;">CHỈ DUY NHẤT HÔM NAY,</span>
                        <br>
                        <span style="font-size: 21.96px;">Sở hữu ô tô Siam Truck</span>
                        <br>
                        <span style="font-size: 21.96px;">Với mức giá</span> <span
                            style="font-size: 21.96px; color: #f0e221;">ƯU
                            ĐÃI</span>
                        <br>
                        <button type="button" class="btn btn-golden" style="font-size: 12.71px; margin: 25px auto;">GỌI
                            NGAY ĐỂ ĐƯỢC HỖ TRỢ</button>
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/qr.jpg" class="img-responsive" alt="Image"
                        style="display: inline-block; margin-right: 10px; vertical-align: top;">
                    <div style="display: inline-block; width: 160px;">
                        <img src="assets/qr-arrow.png" alt="Image" style="display: block; padding-top: 5px;">
                        <span style="font-size: 24.9px; padding: 2px;">Hoặc quét mã <br>QR Code</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center tHotline"><img src="assets/hotline.png"> <span>HOTLINE: 0909 20 26
                        99</span></div>
                <div class="col-md-8 text-center">
                    <span>Công Ty Ô tô An Phước - Đại lộ Bình Dương (QL13),<br> Khu phố Bình Đức 2, Phường Bình Hòa, Thị
                        xã
                        Thuận An, Tỉnh Bình Dương</span>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
    crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>