<?php
include __DIR__ . '/config/db_connection.php';
// Câu lệnh SQL
$sql = "SELECT product_id, product_name, product_description, product_price,outstanding_products FROM products";
$resultproducts = $conn->query($sql);
?>
<!DOCTYPE html>
<html data-page-items='multiple' data-page-type='homepage' dir='ltr' lang='vi'>
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta content='width=device-width,initial-scale=1' name='viewport' />
  <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
  <meta content='IE=edge' http-equiv='X-UA-Compatible' />
  <meta content='#f7f7f7' name='theme-color' />
  <meta content='#f7f7f7' name='msapplication-navbutton-color' />
  <meta content='#f7f7f7' name='msapplication-TileColor' />
  <meta content='black' name='apple-mobile-web-app-status-bar-style' />
  <meta content='yes' name='mobile-web-app-capable' />
  <meta content='yes' name='apple-mobile-web-app-capable' />
  <meta content='no' name='msapplication-tap-highlight' />
  <meta content='' name='msapplication-square310x310logo' />
  <link href='favicon.ico' rel='icon shortcut' type='image/x-icon' />
  <link href='#' rel='icon' sizes='192x192' />
  <link href='#' rel='apple-touch-icon' />
  <link href='https://1.bp.blogspot.com/' rel='preconnect' />
  <link href='https://2.bp.blogspot.com/' rel='preconnect' />
  <link href='https://3.bp.blogspot.com/' rel='preconnect' />
  <link href='https://4.bp.blogspot.com/' rel='preconnect' />
  <link href='https://www.blogger.com/' rel='preconnect' />
  <link href='https://cdn.jsdelivr.net/' rel='preconnect' />
  <link href='https://cdnjs.cloudflare.com/' rel='preconnect' />
  <link href='index.php' rel='canonical' />
  <link href='index40aa.php?m=1' media='only screen and (max-width: 640px)' rel='alternate' />
  <link href='index40aa.php?m=1' media='handheld' rel='alternate' />
  <title>
    Hóa đơn điện tử S-Invoice
  </title>
  <meta content='Hóa đơn điện tử S-Invoice | Hỗ trợ 100% thủ tục thông báo phát hành hóa đơn | Lưu trữ miễn phí trong 10 năm' name='description' />
  <!-- ROBOTS -->
  <meta content='index,follow' name='robots' />
  <meta content='index,follow' name='Googlebot' />
  <!-- OPEN GRAPH -->
  <meta content='summary' name='twitter:card' />
  <meta content='' name='twitter:site' />
  <meta content='' name='twitter:creator' />
  <meta content='summary_large_image' name='twitter:card' />
  <meta content='' property='fb:app_id' />
  <meta content='' property='og:site_name' />
  <meta content='website' property='og:type' />
  <meta content='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiQyQqhgLXSlcCceWfNRBasrZQ8DvhEesiEe-91MknOWxUZ36Y4yFje930hlrYxw_K_HNHT8-EwEUwDCK7pNPttI7M0r3Kf0YoWe6MPd2PNodEZ9rHqs8iI7fCUd6uIqVh5Z_G8WP9yMx0anFLxPMjsRuWz02DsnxZzL7dj99RVTuFjDa2atVpsb0vRKEzy/w1200-h630-p-k-no-nu/mua-mot-tang-bon-uu-dai-nam-2025-anh-zalo.webp' property='og:image' />
  <meta content='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizqrGElTn6Y3H1HdfU8JVFcnOtre0xZ-E5VUEq89qFe4g-_JEhkl5Zn2KhiI4zQB6CRJS1B7Cs-Wv6wswRd7-7uBmbHzJNOfduvHV4tjC-g8bn8mplvcIVjSidqhO1og99GoNaEfqvJXtRRSyHuLJiJcCweqIhqgn7ROUrod2PILrdUSTLIrlNbq59rrUw/w1200-h630-p-k-no-nu/goi-hoa-don-dien-tu-sinvoice-dai-tra.webp' property='og:image' />
  <meta content='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizqrGElTn6Y3H1HdfU8JVFcnOtre0xZ-E5VUEq89qFe4g-_JEhkl5Zn2KhiI4zQB6CRJS1B7Cs-Wv6wswRd7-7uBmbHzJNOfduvHV4tjC-g8bn8mplvcIVjSidqhO1og99GoNaEfqvJXtRRSyHuLJiJcCweqIhqgn7ROUrod2PILrdUSTLIrlNbq59rrUw/w1200-h630-p-k-no-nu/goi-hoa-don-dien-tu-sinvoice-dai-tra.webp' property='og:image' />
  <meta content='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjr9WFA4pCQ_ChL_PBjRRmlR3MXKklzkqkeBWgLgLX5LZMDcsnrRNobXu76xl8c_ZpTUG8u-jTozHUOkFQiNWZsXxoZms9bBz8DfNTeAWB0ccMof-vLZ-fMffGzxTvnfEUEGN5F_ml6BA939q1AA81vWX6JfuhxvAO6iWR_Tenz2DcEAvPmAEo-Yzw9uFt1/w1200-h630-p-k-no-nu/hoa-don-dien-tu-tu-may-tinh-tien-pos365.webp' property='og:image' />
  <meta content='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgh7pa0GtBRVl7vTWib1SetAm8boub83byY5p_l7k5k4Wev2bs_VCWTm3fzPhJr_rknrDslpWwvdm2oE20qeYwRNbwO5T-DeynSqHI4jPb3JCSjQcnGqNR3IcE8tuqDx8MsndqEob7rH1BGwFwayVhZyrsCTvoZlxVBTcoWerivQUh-x-JjfG8_YT97n5zZ/w1200-h630-p-k-no-nu/HOA-DON-DIEN-TU-KHOI-TAO-TU-MAY-TINH-TIEN-LA-GI.webp' property='og:image' />
  <meta content='1200' property='og:image:width' />
  <meta content='630' property='og:image:height' />
  <meta content='https://www.sinvoice.vn/' property='og:url' />
  <meta content='Hóa đơn điện tử S-Invoice' property='og:title' />
  <meta content='Hóa đơn điện tử S-Invoice | Hỗ trợ 100% thủ tục thông báo phát hành hóa đơn | Lưu trữ miễn phí trong 10 năm' property='og:description' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBBc4.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2' rel='preload' type='font/woff2' />
  <link as='font' crossorigin='' href='http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2' rel='preload' type='font/woff2' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css' rel='stylesheet' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' rel='stylesheet' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css' rel='stylesheet' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.min.css' rel='stylesheet' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css' rel='stylesheet' />
  <link href='./cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css' rel='stylesheet' />
  <script src='./ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <!--[if lt IE 9]><script src="/w/resources/lib/html5shiv/html5shiv.js"></script><![endif]-->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Section Top menu và Toggle menu (mobile) -->
  <div class='menu-area navbar-fixed-top section' id='header'>
    <?php
    // include 'topflag.html';
    include 'header.php';
    ?>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12'>
          <!-- <div class='flex-align' style='margin-top: 10px'> -->
          <!-- <ul class='quick_action nav flex flex-right'>
              <li>
                <a href='tel:+84866531668' title='Liên hệ mua hàng - 0866531668'>Liên hệ mua hàng: 0866531668</a>
              </li>
              <li class='noiDungHoTro'>
                <p class='level hidden'>Liên hệ mua hàng</p>
                <a data-target='#form-order' data-toggle='modal' href='#' style='text-align: center;'>Đăng ký</a>
              </li>
              <li>
                <a alt='Đăng nhập HDDT v2.0' href='https://vinvoice.viettel.vn/account/login' rel='nofollow noopener' target='_blank' title='Đăng nhập'>Đăng nhập</a>
              </li>
            </ul> -->

          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!--Section Banner Tin tức-->
  <!-- Section Banners -->
  <!-- Section Toggle secondary menu -->
  <!--Submenu Hỗ trợ-->
  <!--Submenu Mẫu hóa đơn-->
  <!--Submenu Bảng giá-->
  <!-- Section content Thủ tục, Văn bản, Câu hỏi thường gặp và Mẫu hóa đơn-->
  <!-- Section Banner lớn -->
  <div class='slider-area grd-bg section' id='slider'>
    <div class='carousel slide carousel-fade' id='carousel-example-generic'>
      <div aria-label='Slide Hóa đơn điện tử S-Invoice' class='carousel-inner' role='listbox'>
        <div class='item active' role='option'>
          <img alt='Khuyến mãi: Mua chữ ký số tặng hóa đơn điện tử Viettel' class='img-responsive' src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhWMR0d-VU4xUSXd0JXu6fSGvON8rVIxw-FnJFWXIPsLoVm_xC8udWeRnKLT0b69BDdnD1a3YOozqcWtEDeleGrV5ST26ZUdWXRYDNuUs9t7CdrLY-C5LgJaT6ylRLOVrIbStNEpAm06BluhNuv2DRdSSuS9TCAvRSin5_9o0SHW-pun_lyZUYShW1wbHBK/s16000/mua-mot-tang-bon-uu-dai-nam-2025.webp' />
          <a class='btn bannerBtn' data-toggle='modal' href='2024/11/sieu-uu-dai-mua-mot-tang-bon-chu-ky-so-viettel-hoa-don-dien-tu-viettel.php' target='_blank'>Tìm hiểu thêm <i class='zmdi zmdi-play-circle'></i></a>
        </div>
        <div class='item' role='option'>
          <img alt='Hóa đơn điện tử S-Invoice - Hóa đơn khởi tạo từ máy tính tiền' class='img-responsive' src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiJPSZ3DH78u2CLmr9iF8JmSCM64o3SY0SIpfpNdHgpSRldFOD0jtQ8ovKHjHChviMkikkoGx2iYse0Rkor3lrmVm8hWAfRmP903J9onCUCaMTshKIVww43Ct_H0ufQVG8mNvgWDtXSfCNlHiht7SYevpH_7cWDvNFEqk6XoWfIbzBCE-by9CVYZyJZ_pJO/s16000/banner-hoa-don-may-tinh-tien-2025.webp' />
          <a class='btn bannerBtn2' data-toggle='modal' href='2024/05/hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-la-gi.php' target='_blank'>Xem thêm...<i class='zmdi zmdi-play-circle'></i></a>
        </div>
        <div class='item' role='option'>
          <img alt='Hóa đơn điện tử S-Invoice - Tặng 20% khi mua thêm hóa đơn' class='img-responsive' src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgq7aMzcNL9Nqa0ZYw_f6WpixY74jzHJsw57NVBtrQLXufMwlqSDdvzBABBjHMI8jlEBGCWj7Zbhhvp98C4yWD1u7PLQlFG3OQw1THgsdpDKc142XC5cKJ5J1p78Ace6ENwZS2AQevYZgLGOoViUsTZoEXohMXILR5b0InOTPz8skBOV1_0yRy_8jxXIkIO/s16000/tang-20ptr-khi-mua-them-hoa-don-dien-tu-viettel-2025.webp' />
          <a class='btn bannerBtn2' data-toggle='modal' href='2023/11/khuyen-mai-tang-20-phan-tram-khi-mua-them-hoa-don-dien-tu-viettel.php' target='_blank'>Tìm hiểu thêm <i class='zmdi zmdi-play-circle'></i></a>
        </div>
      </div>
      <ol class='carousel-indicators'>
        <li class='active' data-slide-to='0' data-target='#carousel-example-generic'></li>
        <li data-slide-to='1' data-target='#carousel-example-generic'></li>
        <li data-slide-to='2' data-target='#carousel-example-generic'></li>
      </ol>
    </div>
  </div>
  <!-- Section Dịch vụ Hóa đơn điện tử S-Invoice -->
  <div class='pricing-area section-big section' id='pricing'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 text-center'>
          <div class='section-title'>
            <h1 class='entry-title'>
              <strong>Dịch vụ Hóa đơn điện tử S-Invoice</strong>
            </h1>
            <p>
              Dịch vụ hóa đơn điện tử S-Invoice của Viettel cung cấp giải pháp quản lý hóa đơn trên nền điện tử cho doanh nghiệp. Hóa đơn được khởi tạo, lập, gửi, nhận, lưu trữ và quản lý bằng phương tiện điện tử; được ký bằng chữ ký điện tử (ký số), có giá trị về mặt pháp lý như hóa đơn giấy thông thường; có thể chuyển đổi thành hóa đơn giấy khi có nhu cầu.
            </p>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='home-services'>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='ms-icon-feature'>
              <div class='ms-icon-feature-icon'>
                <span class='ms-icon ms-icon-lg'>
                  <i class='zmdi zmdi-time-restore'></i>
                </span>
              </div>
              <div class='ms-icon-feature-content'>
                <h2 class='subtitle'>
                  <strong>Tiết kiệm thời gian</strong>
                </h2>
                <p style='text-align:center'>Người mua tức thời nhận được hóa đơn, rút ngắn thời gian thu nợ</p>
              </div>
            </div>
          </div>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='ms-icon-feature'>
              <div class='ms-icon-feature-icon'>
                <span class='ms-icon ms-icon-lg'>
                  <i class='zmdi zmdi-money'></i>
                </span>
              </div>
              <div class='ms-icon-feature-content'>
                <h2 class='subtitle'>
                  <strong>Tiết kiệm chi phí</strong>
                </h2>
                <p style='text-align:center'>Tiết kiệm 90% chi phí in ấn, vận chuyển, lưu trữ và bảo quản <a href='2024/05/goi-1k-hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-viettel.php' target='_blank' title='Hóa đơn điện tử Sinvoice'>hóa đơn</a></p>
              </div>
            </div>
          </div>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='ms-icon-feature'>
              <div class='ms-icon-feature-icon'>
                <span class='ms-icon ms-icon-lg'>
                  <i class='zmdi zmdi-shield-security'></i>
                </span>
              </div>
              <div class='ms-icon-feature-content'>
                <h2 class='subtitle'>
                  <strong>An toàn tuyệt đối</strong>
                </h2>
                <p style='text-align:center'>Không xảy ra cháy, hỏng, mất hóa đơn. Tăng độ tin cậy cho hóa đơn của doanh nghiệp</p>
              </div>
            </div>
          </div>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class='ms-icon-feature'>
              <div class='ms-icon-feature-icon'>
                <span class='ms-icon ms-icon-lg'>
                  <i class='zmdi zmdi-palette'></i>
                </span>
              </div>
              <div class='ms-icon-feature-content'>
                <h2 class='subtitle'>
                  <strong>Giải pháp thông minh</strong>
                </h2>
                <p style='text-align:center'>Phát hành, quản ký, báo cáo <a href='2024/04/goi-300-hoa-don-dien-tu-cho-ho-kinh-doanh.php' target='_blank' title='Hóa đơn điện tử Sinvoice'>hóa đơn</a> mọi lúc mọi nơi qua Mobile, Website, Desktop</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='container'>
      <div class='row' id='banggia'>
        <div class='col-md-12'>
          <div class='section-title text-center'>
            <h2><a href='p/bang-gia-sinvoice.php' target='_blank' title='Bảng giá hóa đơn điện tử S-Invoice'>Bảng giá hóa đơn điện tử S-Invoice</a></h2>
            <p>Áp dụng đối với doanh nghiệp/hộ kinh doanh sử dụng HĐĐT, chứng từ điện tử theo Thông tư 78/2021/TT-BTC. <br />Chi tiết liên hệ <span class='color-primary'>0866531668</span>. (Bảng giá đã bao gồm 10% VAT)</p>
          </div>
        </div>
      </div>
      <div class='row'>
        <?php
        while ($row = $resultproducts->fetch_assoc()):
          $featuredClass = $row['outstanding_products'] ? 'featured' : '';
        ?>
          <div class='col-md-3 col-sm-6 col-xs-12'>
            <div class="price-item noiDungHoTro<?php echo $featuredClass ? ' ' . $featuredClass : ''; ?>">
              <div class='info'>
                <p class='level'><?php echo $row['product_name']; ?></p>
                <p class='price'>
                  <span class='dollar'>VNĐ</span>
                  <span class='number'><?php echo number_format($row['product_price'] / 1000, 0, ',', '.'); ?></span><span>.000</span>
                </p>
              </div>
              <div class='features'>
                <ul>
                  <?php
                  // Giải mã JSON thành mảng
                  $features = json_decode($row['product_description'], true);

                  if (is_array($features)) {
                    foreach ($features as $feature) {
                      echo "<li><p>" . htmlspecialchars($feature) . "</p></li>";
                    }
                  }
                  ?>
                </ul>
              </div>
              <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
            </div>
          </div>
        <?php endwhile ?>

        <!-- <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT500</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>583</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 500 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item featured noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT1000</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>913</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 1.000 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT2000</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>1.375</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 2.000 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-12'>
          <div class='section-title text-center'>
            <p></p>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT3000</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>1.936</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 3.000 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT5000</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>2.937</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 5.000 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item featured noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT10000</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>4.862</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 10.000 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
        <div class='col-md-3 col-sm-6 col-xs-12'>
          <div class='price-item noiDungHoTro'>
            <div class='info'>
              <p class='level'>DT20000</p>
              <p class='price'>
                <span class='dollar'>VNĐ</span>
                <span class='number'>8.294</span>
                <span>.000</span>
              </p>
            </div>
            <div class='features'>
              <ul>
                <li>
                  <p>Số lượng: 20.000 hóa đơn
                  </p>
                </li>
                <li>
                  <p>Tặng chữ ký số HSM 6 tháng
                  </p>
                </li>
                <li>
                  <p>Hỗ trợ gửi TBPH lên CQThuế
                  </p>
                </li>
                <li>
                  <p>Không giới hạn thời gian
                  </p>
                </li>
                <li>
                  <p>Không thu phí duy trì</p>
                </li>
              </ul>
            </div>
            <a class='btn' data-target='#form-order' data-toggle='modal' href='#'>Đăng ký</a>
          </div>
        </div>
      </div> -->
        <div class='row'>
          <div class='col-md-12'>
            <div class='section-title text-center'>
              <h3 class='color-warning subtitle'>
                PHÍ KHỞI TẠO BAN ĐẦU: 500.000đ/MST
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section Ưu điểm -->
    <div class='service-area section-big section' id='service'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-12 text-center'>
            <div class='section-title'>
              <h2>Ưu điểm của Hóa đơn điện tử S-Invoice</h2>
              <p>Hóa đơn điện tử S-Invoice là sự lựa chọn hàng đầu của hầu hết các doanh nghiệp/tổ chức.
              </p>
            </div>
          </div>
        </div>
        <div class='row' style='width: 85%; margin: 0 auto'>
          <div class='home-services'>
            <div class='col-md-4 col-sm-6 col-xs-12'>
              <div class='ms-icon-feature'>
                <div class='ms-icon-feature-icon'>
                  <span class='ms-icon ms-icon-lg'>
                    <i class='zmdi zmdi-star'></i>
                  </span>
                </div>
                <div class='ms-icon-feature-content'>
                  <h2 class='subtitle'>
                    <strong>Thương hiệu uy tín</strong>
                  </h2>
                  <p style='text-align:center'>Viettel là Tập đoàn Viễn thông và Công nghệ thông tin lớn nhất Việt Nam, cam kết đồng hành lâu dài cùng doanh nghiệp.</p>
                </div>
              </div>
            </div>
            <div class='col-md-4 col-sm-6 col-xs-12'>
              <div class='ms-icon-feature'>
                <div class='ms-icon-feature-icon'>
                  <span class='ms-icon ms-icon-lg'>
                    <i class='zmdi zmdi-dns'></i>
                  </span>
                </div>
                <div class='ms-icon-feature-content'>
                  <h2 class='subtitle'>
                    <strong>Hạ tầng mạng lớn, bảo mật</strong>
                  </h2>
                  <p style='text-align:center'>Doanh nghiệp có thể phát hành hàng triệu hóa đơn/ngày, hệ thống S-Invoice sử dụng công nghệ bảo mật nhiều lớp, an toàn tuyệt đối...</p>
                </div>
              </div>
            </div>
            <div class='col-md-4 col-sm-6 col-xs-12'>
              <div class='ms-icon-feature'>
                <div class='ms-icon-feature-icon'>
                  <span class='ms-icon ms-icon-lg'>
                    <i class='zmdi zmdi-time-restore'></i>
                  </span>
                </div>
                <div class='ms-icon-feature-content'>
                  <h2 class='subtitle'>
                    <strong>Triển khai nhanh, chất lượng</strong>
                  </h2>
                  <p style='text-align:center'>Khởi tạo tài khoản cho Doanh nghiệp ngay sau khi ký hợp đồng. Viettel có các Trung tâm CNTT trên khắp 63 tỉnh/Tp, sẵn sàng triển khai, tích hợp khi có yêu cầu, hỗ trợ 24/7.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='row' style='width: 75%; margin: 25px auto'>
          <div class='home-services'>
            <div class='col-md-6 col-sm-6 col-xs-12'>
              <div class='ms-icon-feature'>
                <div class='ms-icon-feature-icon'>
                  <span class='ms-icon ms-icon-lg'>
                    <i class='zmdi zmdi-sun'></i>
                  </span>
                </div>
                <div class='ms-icon-feature-content'>
                  <h2 class='subtitle'>
                    <strong>Hệ thống thông minh, linh hoạt</strong>
                  </h2>
                  <p style='text-align:center'>Doanh nghiệp có thể mở rộng phù hợp với nhiều loại hóa đơn đặc thù; đáp ứng da dạng các loại hình Doanh nghiệp từ nhỏ đến lớn. Khả năng tích hợp với đa dạng các phần mềm kế toán, bán hàng, quản lý doanh nghiệp.</p>
                </div>
              </div>
            </div>
            <div class='col-md-6 col-sm-6 col-xs-12'>
              <div class='ms-icon-feature'>
                <div class='ms-icon-feature-icon'>
                  <span class='ms-icon ms-icon-lg'>
                    <i class='zmdi zmdi-widgets'></i>
                  </span>
                </div>
                <div class='ms-icon-feature-content'>
                  <h2 class='subtitle'>
                    <strong>Sử dụng đồng bộ nhiều dịch vụ</strong>
                  </h2>
                  <p style='text-align:center'>Doanh nghiệp có cơ hội dùng nhiều dịch vụ đồng bộ trên hạ tầng của Viettel như: Chữ ký số, Tin nhắn thương hiệu, Email server, <a href='https://www.mysign.vn/' target='_blank' title='Chữ ký số từ xa MYSIGN'>MYSIGN</a>...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section Liên hệ -->
    <div class='contact-area section-big section' id='contact'>
      <div class='container' id='contact'>
        <div class='row'>
          <div class='col-md-12 text-center'>
            <div class='section-title'>
              <h2>Liên hệ</h2>
              <p>
                Vui lòng để lại thông tin, Nhân viên Viettel sẽ liên hệ quý khách trong thời gian sớm nhất!
              </p>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-6 pb-20'>
            <div class='address'>
              <meta content='Hóa đơn điện tử S-Invoice' itemprop='name' />
              <meta content='https://1.bp.blogspot.com/-9avPAj2Ujyg/X5BAH6ATaOI/AAAAAAAAAAU/uiUMlVvilf0rb-UId7UATvJPfroTcnrBACLcBGAsYHQ/s16000/logo.png' itemprop='image' />
              <link href='./1.bp.blogspot.com/-9avPAj2Ujyg/X5BAH6ATaOI/AAAAAAAAAAU/uiUMlVvilf0rb-UId7UATvJPfroTcnrBACLcBGAsYHQ/s16000/logo.png' itempro='logo' />
              <h3 class='subtitle' itemprop='brand' style='padding-left: 18px'>
                <strong>
                  <a href='index.php' itempro='url'>Hóa đơn điện tử S-Invoice</a>
                </strong>
              </h3>
              <div class='address-box clearfix'>
                <div class='col-md-12'>
                  <p><span class='ms-icon-sm ms-icon-small'>
                      <i class='zmdi zmdi-star'></i>
                    </span> Phòng bán hàng Khách hàng doanh nghiệp - Viettel Telecom</p>
                </div>
              </div>
              <div class='address-box clearfix' itemprop='address'>
                <div class='col-md-12'>
                  <p><span class='ms-icon-sm ms-icon-small'>
                      <i class='zmdi zmdi-pin'></i>
                    </span> 285 Cách Mạng Tháng Tám, Phường 12, Quận 10, TPHCM</p>
                </div>
              </div>
              <div class='address-box clearfix'>
                <div class='col-md-6' itemprop='telephone'>
                  <p><span class='ms-icon-sm ms-icon-small'>
                      <i class='zmdi zmdi-phone'></i>
                    </span> 0866 531 668</p>
                </div>
                <div class='col-md-6' itemprop='email'>
                  <p><span class='ms-icon-sm ms-icon-small'>
                      <i class='zmdi zmdi-email'></i>
                    </span><img alt='Mail Hóa đơn điện tử S-Invoice' src='./blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhIao1FN-yADRnxnc5FrlqXD2TVjqOw3L-CHKqgMov/w200-h20/hoadondientu-at-sinvoice-vn.png' title='Mail Hóa đơn điện tử S-Invoice' width='80%' /></p>
                </div>
              </div>
              <div class='address-box clearfix'>
                <div class='col-md-6'>
                  <img alt='QR-Zalo Sinvoice' src='./blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjl3rMn8bGB1dyK73p1voXoheRsPb9_mD_aI6t7FRp/s320/zalo-sinvoice-qr.png' />
                </div>
                <div class='col-md-6'>
                  <img alt='QR-Messenger Sinvoice' src='./blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhfvf7e4yGnbu2n0wlkSHeba3bG3PINdC435qlYSSy/s300/ma-qr-messenger.png' />
                </div>
              </div>
              <div class='address-box clearfix'>
                <div class='col-md-12 noiDungHoTro' style='text-align:center'>
                  <p class='level hidden'>Liên hệ hỗ trợ</p>
                  <a class='btn' data-target='#form-order' data-toggle='modal' href='#' style='text-align: center'>Hoặc Để lại thông tin</a>
                </div>
              </div>
            </div>
          </div>
          <div class='col-md-6 pb-20'>
            <div class='address'>
              <div class='address-box clearfix'>
                <iframe allowfullscreen='' aria-hidden='false' frameborder='0' height='300' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4367362294784!2d106.6801643!3d10.777823999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fbdcb91c223%3A0x3b59a40d30fa03fb!2sS-Invoice!5e0!3m2!1svi!2s!4v1689739875552!5m2!1svi!2s' style='border:0;' tabindex='0' title='GG maps' width='600'></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section Tin tức mới nhất -->
    <!-- <div class='testimonial-area section-big section' id='testimonial'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 text-center'>
          <div class='section-title'>
            <h2>Tin tức</h2>
          </div>
        </div>
      </div>
      <div class='col-md-12'>
        <div class='testimonial-list'>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php' title='Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel'>
                    <img alt='Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgnfXxohujHFQO1lUTzFBZHzvaQCqDYDlYKoUgjvqI-CJNQ0YKKNbYf8015T_TRdLgLFiIAaaiHaKkCXpbOv-6MMVCqw_IW6vf-HpSjpNVZrPAxdZaz3r7rLZdqxJgGLk8bLEvqQYRaaLYKp4Yfy6vzKHmEnaE2jxeQQ_GeKAqzQH50oTakRPnmMK9sbZiq/s16000/logo_500_300.webp' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php' title='Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel'>
                    Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    Để lập được hóa đơn điện tử, người dùng phải sử dụng chữ ký số để ký lên hóa đơn. Trong bài hướng dẫn này, S-Invocie sẽ hướng dẫ...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2021/02/hdsd-danh-sach-cac-loi-thuong-gap-tren-he-thong-hoa-don-dien-tu-viettel.php' title='Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice'>
                    <img alt='Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgnfXxohujHFQO1lUTzFBZHzvaQCqDYDlYKoUgjvqI-CJNQ0YKKNbYf8015T_TRdLgLFiIAaaiHaKkCXpbOv-6MMVCqw_IW6vf-HpSjpNVZrPAxdZaz3r7rLZdqxJgGLk8bLEvqQYRaaLYKp4Yfy6vzKHmEnaE2jxeQQ_GeKAqzQH50oTakRPnmMK9sbZiq/s16000/logo_500_300.webp' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2021/02/hdsd-danh-sach-cac-loi-thuong-gap-tren-he-thong-hoa-don-dien-tu-viettel.php' title='Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice'>
                    Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    1. &#8220;Không thể kết nối đến USB-TOKEN. Yêu cầu cắm USB-TOKEN hoặc cài đặt phần mềm ký số của Viettel&#8221; Mô tả ...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2021/02/hdsd-danh-sach-cac-loi-thuong-gap-tren-he-thong-hoa-don-dien-tu-viettel.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2020/11/hdsd-cac-buoc-cau-hinh-gui-mail-hoa-don-dien-tu-cho-nguoi-mua-bang-gmail-hotmail-yahoo.php' title='Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail'>
                    <img alt='Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail' class='lazyload' data-src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2020/11/hdsd-cac-buoc-cau-hinh-gui-mail-hoa-don-dien-tu-cho-nguoi-mua-bang-gmail-hotmail-yahoo.php' title='Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail'>
                    Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    Kể từ ngày 31/05/2022, Google Mail thay đổi chính sách bảo mật dẫn đến các bước cấu hình bên dưới không còn hiệu lực nữa. Quý ...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2020/11/hdsd-cac-buoc-cau-hinh-gui-mail-hoa-don-dien-tu-cho-nguoi-mua-bang-gmail-hotmail-yahoo.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2020/11/hdsd-cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu-sinvoice.php' title='Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice'>
                    <img alt='Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiRECRi60eOyS82s8Q7HVm42K5AYeVAOhRgPXJAji2nCRb8nBHgNfUAo5Ok2Nt0kpki3nSKtM44HTScb21xMLvMcmrwfdh7o1R7LLHftQJwzs6NJFGMrvHEc3Ps6bbPI2OO7gccK3hQ_z1d/s16000/cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu.jpg' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2020/11/hdsd-cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu-sinvoice.php' title='Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice'>
                    Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    [Hóa đơn điện tử S-Invoice] - Sai sót trong quá trình sử dụng hóa đơn điện tử là không thể tránh khỏi. Khi phát hiện s...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2020/11/hdsd-cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu-sinvoice.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2020/11/cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb.php' title='Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel'>
                    <img alt='Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgWyP8q8MRAAk2ksuFf72nX4ip_kU3Kg_2PoTIK7TAHl82IiTr_O_iQmMLZZGdPxBSFg8QBQA8CFsPP2Hu8K1oyXpiv2-x41xfjK4BoEGhgp5d9ea86PfqhaHNcsRwAIFoed_NkQVt_0K8P/d/thumnail.jpg' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2020/11/cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb.php' title='Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel'>
                    Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    [Hóa đơn điện tử S-Invoice] - Khi đăng ký Hóa đơn điện tử của Viettel, khách hàng sẽ được tặng miễn phí chứng thư số HSM chỉ ký trê...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2020/11/cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2023/02/goi-500-chung-tu-thue-tncn-dien-tu-cua-viettel.php' title='Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp'>
                    <img alt='Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh3JV-nk48uut3HJ80N1DMnZZdmh9A4EyVtAWopXI_yQIjBY-C_yfus3EFcO_c4ztyMHrQpHJ8FC1xu4msvPM7KPr7a2yEz63pkiEuEayHDQiRyCJtZxgfhutDG45asBvVY4dHJU5jck15iMm9wEO2O-JuqNBJcyQt_cqBgrJWNc8FvB_4R5cnmhKFq-w/s16000/mau-03-tncn-chung-tu-khau-tru-thue-tncn-nd123-viettel-cung-cap.webp' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2023/02/goi-500-chung-tu-thue-tncn-dien-tu-cua-viettel.php' title='Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp'>
                    Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    Gói 500 chứn...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2023/02/goi-500-chung-tu-thue-tncn-dien-tu-cua-viettel.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2024/05/goi-1k-hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-viettel.php' title='Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền'>
                    <img alt='Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh3RbQ99ODaN8y0Hscdtw9YMymScYFT_p5lOd66Bt4Luw3JlOy51yytqg3zlSELhcIZmBT1pBUPJoZp64v4gTbxHqbGkEwm1IUbWBnu1kupELKHdpSs8i8-4QySVkmp2Hw_nZa1DxLChPgn/s16000/033R020.png' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2024/05/goi-1k-hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-viettel.php' title='Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền'>
                    Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    Gói hóa đơn ...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2024/05/goi-1k-hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-viettel.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2020/11/hdsd-chuyen-doi-hoa-don-dien-tu-sinvoice-sang-hoa-don-giay.php' title='Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy'>
                    <img alt='Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9vsZ3dxaY2CJTY4X55T1DCHmqNwpzhp1OX2eAHx7TtJgnUw2Da_etrubUxd4zG_wdi-OOe64bDGuNkEZ2kUgFtovGJebnNL3xRgNu6Q9tqG9q8y-frBtLQ9_OUr30iO7DnqoEBnd1tAhN/s16000/huong-dan-in-hoa-don-chuyen-doi-s-invoice-BANNER.jpg' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2020/11/hdsd-chuyen-doi-hoa-don-dien-tu-sinvoice-sang-hoa-don-giay.php' title='Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy'>
                    Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    [Hóa đơn điện tử S-Invoice] - Ngày nay, việc sử dụng hóa đơn điện tử thay cho hóa đơn giấy được nhiều doanh nghiệp lựa...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2020/11/hdsd-chuyen-doi-hoa-don-dien-tu-sinvoice-sang-hoa-don-giay.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2024/01/hdsd-xoa-bo-hoac-khoi-phuc-hoa-don-dien-tu-sinvoice.php' title='[VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice'>
                    <img alt='[VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice' class='lazyload' data-src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2024/01/hdsd-xoa-bo-hoac-khoi-phuc-hoa-don-dien-tu-sinvoice.php' title='[VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice'>
                    [VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    [Hóa đơn điện tử S-Invoice] - Trong video dưới đây, Sinvoice xin hướng dẫn quý khách hàng cách xóa bỏ hóa đơn lập sai và...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2024/01/hdsd-xoa-bo-hoac-khoi-phuc-hoa-don-dien-tu-sinvoice.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
          <div class='single-testimonial'>
            <article class='card'>
              <div class='card-header pd-0'>
                <div class='featured-image'>
                  <a class='flex' href='2020/07/03-cach-kiem-tra-thoi-han-chu-ky-so.php' title='03 cách kiểm tra thời hạn chữ ký số Viettel-CA'>
                    <img alt='03 cách kiểm tra thời hạn chữ ký số Viettel-CA' class='lazyload' data-src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEifHxv72CaRl5HTATCbX3DyNetLmh7UmNnJNeX0TjMU9RZ3KoBy773DdSnmn1qEB4vu_MIVmJE-MXEk8O9SJoZgOsK62Rj2NEWy_lykXw85U5-Ohvig6sswEV5FAuUvNwrXbRUmZAZ9hc4L/d/cach-kiem-tra-thoi-han-chu-ky-so.png' src='data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=' />
                  </a>
                </div>
              </div>
              <div class='card-body'>
                <div class='card-title'>
                  <a class='flex' href='2020/07/03-cach-kiem-tra-thoi-han-chu-ky-so.php' title='03 cách kiểm tra thời hạn chữ ký số Viettel-CA'>
                    03 cách kiểm tra thời hạn chữ ký số Viettel-CA
                  </a>
                </div>
                <div class='clearfix'></div>
                <div>
                  <p>
                    [Chữ ký số Viettel-CA] - Hiện nay, chữ ký số hay còn gọi là &quot;chữ ký điện tử&quot; đã trở nên phổ biến và thông dụng trong ...[...]</p>
                </div>
              </div>
              <div class='card-footer text-center'>
                <a class='btn' href='2020/07/03-cach-kiem-tra-thoi-han-chu-ky-so.php#more' title='Đọc thêm'>
                  Đọc thêm
                </a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- Section Why choose us (Không hiển thị) -->
    <div class='why-choose-area section-big no-items section' id='why-choose'>
    </div>
    <!-- Section Nhận mail báo giá (Không hiển thị) -->
    <div class='subscribe-area section-big no-items section' id='subscribe'>
    </div>
    <!-- Section Danh sách KH (Không hiển thị) -->
    <div class='client-area section-big no-items section' id='client'>
    </div>
    <div class=''>
      <div class=''>
        <!-- Section menu Main-1 -->
        <!-- Section BlogSearch và Tiêu điểm -->
        <!-- Section Sidebar 2-->
        <!-- Section Main-2 -->
      </div>
    </div>
    <!-- Section Footer -->
    <footer class='footer-area section' id='footer' name='Chân trang'>
      <div class='container'>
        <footer class='footer'>
          <div class='container'>
            <div class='foot-contact'>
              <div class='title_footer'>Liên hệ</div>
              <ul class='hot_line'>
                <li>
                  <a href='https://www.sinvoice.com.vn/' target='_blank'>Hóa đơn điện tử S-Invoice</a>
                </li>
                <li>
                  <p class='email'>Địa chỉ: 285 Cách Mạng Tháng Tám, P.12, Q.10, Tp.HCM</p>
                </li>
                <li>
                  <p class='email'>Hotline bán hàng: 0866531668</p>
                </li>
                <li>
                  <p class='email'>Hotline CSKH: 18008000 nhánh 1</p>
                </li>
                <li>
                  <p class='email'>eMail: <img alt='Mail Hóa đơn điện tử S-Invoice' src='./blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg8qpGLee4LWMcheXSMhfJ6aoZ_PA2rsvHKCWX3L3T/s320/hoadondientu-at-sinvoice-vn.png-trang.png' title='Mail Hóa đơn điện tử S-Invoice' width='45%' /></p>
                </li>
                <li>
                  <p class='email'>Website: <a href='index.php'>www.sinvoice.vn</a>
                  </p>
                </li>
              </ul>
            </div>
            <div class='foot-links'>
              <div class='title_footer'>Hỗ trợ</div>
              <ul class='hot_line'>
                <li>
                  <a class='email' href='p/thu-tuc-dang-ky-sinvoice.php'>Thủ tục đăng ký</a>
                </li>
                <li>
                  <a class='email' href='p/van-ban-phap-ly-sinvoice.php'>Văn bản pháp lý</a>
                </li>
                <li>
                  <a class='email' href='2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php'>Hướng dẫn sử dụng</a>
                </li>
                <li>
                  <a class='email' href='p/cau-hoi-thuong-gap-sinvoice.php'>Câu hỏi thường gặp</a>
                </li>
                <li>
                  <a class='email' href='2020/11/dieu-khoan-su-dung-dich-vu-hoa-don-dien-tu.php'>Điều khoản sử dụng</a>
                </li>
                <li>
                  <a class='email' href='p/dang-ky-lam-dai-ly.php'>Đăng ký làm đại lý</a>
                </li>
              </ul>
            </div>
            <div class='foot-social footer_icon'>
              <a class='email' href='https://www.viettelsolutions.com.vn/' style='text-align:left; display: block; padding-bottom:10px' target='_blank' title='Viettel Solutions'><img alt='Hóa đơn điện tử S-Invoice' height='88' loading='lazy' src='./blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhed6RoFz3j8A-J2RGbkolkTfxuGV4ioJUI-J6nOtW/s320/Viettel-Master-Vietnamese-Logo-RGB-vientrang-v2.png' width='146' /></a>
              <p class='email'>Cơ quan chủ quản: Tập đoàn Công nghiệp - Viễn thông Quân đội. Giấy phép số: 144/GP - BC do Bộ thông tin - Truyền thông cấp ngày 18/04/2007.</p>
              <ul class='social-links'>
                <li>
                  <a href='https://www.facebook.com/vietteltelecom' rel='nofollow noopener' target='_blank'>
                    <i class='fa fa-facebook'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fa fa-twitter'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fa fa-google-plus'></i>
                  </a>
                </li>
                <li>
                  <a href='https://www.youtube.com/@viettelchamsockhachhang8012' rel='nofollow noopener' target='_blank'>
                    <i class='fa fa-youtube'></i>
                  </a>
                </li>
                <li>
                  <a href='#'>
                    <i class='fa fa-pinterest'></i>
                  </a>
                </li>
              </ul>
              <p class='email'>&#169;S-Invoice 2018. All rights reserved.</p>
            </div>
          </div>
        </footer>
      </div>
    </footer>
    <div class='modal fade' id='form-order' role='dialog' tabindex='-1'>
      <div class='modal-dialog' role='document'>
        <form id="registerForm" action="modules/contracts.php" method="POST" class="modal-content">
          <div class='modal-header'>
            <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'>&times;</span>
            </button>
            <h4 class='modal-title'>Đăng ký</h4>
          </div>
          <div class='modal-body'>
            <div class='form-row'>
              <div class='form-group col-md-12'>
                <p><em> Vui lòng để lại thông tin, Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất! </em></p>
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group col-md-6'>
                <label for='for-tax'>
                  <i aria-hidden='true' class='fa fa-print'></i> MST</label>
                <input class='form-control' id='for-tax' name='tax_code' pattern='^\d{10,13}$' placeholder='Nhập mã số thuế...' required='' type='text' value='' />
              </div>
              <div class='form-group col-md-6'>
                <label for='for-name'>
                  <i aria-hidden='true' class='fa fa-user'></i> Họ tên</label>
                <input class='form-control' id='for-name' name='username' placeholder='Nhập tên của bạn...' required='' type='text' value='' />
              </div>
            </div>
            <div class='form-row'>
              <div class='form-group col-md-6'>
                <label for='for-phone'>
                  <i aria-hidden='true' class='fa fa-phone'></i> Điện thoại</label>
                <input class='form-control' id='for-phone' name='phone' pattern='^\d{10}$' placeholder='Nhập số điện thoại...' required='' type='text' value='' />
              </div>
              <div class='form-group col-md-6'>
                <label for='for-email'>
                  <i aria-hidden='true' class='fa fa-envelope'></i> Email</label>
                <input class='form-control' id='for-email' name='email' pattern='[\-a-zA-Z0-9~!$%^&*_=+\}\{&#39;?]+(\.[\-a-zA-Z0-9~!$%^&*_=+\}\{&#39;?]+)*@[a-zA-Z0-9_][\-a-zA-Z0-9_]*(\.[\-a-zA-Z0-9_]+)*\.[cC][oO][mM](:[0-9]{1,5})?' placeholder='Nhập địa chỉ email...' required='' type='email' value='' />
              </div>
            </div>
          </div>
          <div class='modal-footer'>
            <button class='btn btn-default' data-dismiss='modal' type='button'>Đóng</button>
            <button class='btn btn-primary' type='submit'>Đăng ký</button>
          </div>
        </form>
      </div>
    </div>
    <iframe class='hidden' height='0' name='hidden_iframe' width='0'></iframe>
    <script>
      var data = {
        view: {
          isHomepage: "true",
          isArchive: "",
          isPost: "",
          isPage: "",
          isSearch: "",
          isLabelSearch: "",
          isSearchQuery: "",
          isMultipleItems: "true",
          isSingleItem: "",
          isMobile: ""
        },
        blog: {
          blogId: "8243747611808165490",
          postId: "",
          pageId: "",
          pageName: "",
          searchqueryescaped: "",
          homepageUrl: "https://www.sinvoice.vn/",
          url: "https://www.sinvoice.vn/",
          analyticsAccountNumber: "",
          clientid: "",
          searchindex: 500
        },
        messages: {
          home: "Trang chủ",
          linkCopiedToClipboard: "Đã sao chép đường liên kết vào bảng nhớ tạm!",
          share: "Chia sẻ",
          shareheader: "Chia sẻ nội dung này qua",
          copy: "Sao chép liên kết",
          facebook: "Chia sẻ với Facebook",
          twitter: "Chia sẻ với X",
          pinterest: "Chia sẻ với Pinterest",
          linkedin: "Chia sẻ với Linkedin",
          email: "Gửi bài qua Email",
          close: "Đóng"
        }
      }
    </script>
    <!-- //ngăn không load lại trang -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#registerForm").on("submit", function(e) {
          e.preventDefault(); // chặn submit mặc định

          $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: $(this).serialize(),
            success: function(response) {
              if (response.trim() === "OK") {
                alert("✅ Đăng ký thành công!");
                $("#registerForm")[0].reset(); // reset form
              } else {
                alert("❌ Đăng ký thất bại,!");
              }
            },
            error: function() {
              alert("⚠️ Có lỗi xảy ra khi gửi form.");
            }
          });
        });
      });
    </script>
    <script>
      // <![CDATA[ 
      var url = window.location.href,
        uri = window.location.toString(),
        rel = document.querySelector('link[rel="canonical"]').getAttribute('href'),
        fb1 = url.substring(0, url.indexOf('?fbclid')),
        fb2 = url.substring(0, url.indexOf('&fbclid')),
        gi1 = url.substring(0, url.indexOf('?gidzl')),
        gi2 = url.substring(0, url.indexOf('&gidzl')),
        m1 = url.substring(0, url.indexOf('?m=1')),
        m2 = url.substring(0, url.indexOf('&m=1'))
      if ((uri.length - fb1.length) > 0) {
        window.history.replaceState({}, document.title, fb1)
      }
      if ((uri.length - fb2.length) > 0) {
        window.history.replaceState({}, document.title, fb2)
      }
      if ((uri.length - gi1.length) > 0) {
        window.history.replaceState({}, document.title, gi1)
      }
      if ((uri.length - gi2.length) > 0) {
        window.history.replaceState({}, document.title, gi2)
      }

      function appendChildHead(name, type) {
        if (type == 'css') {
          var fileref = document.createElement('link')
          fileref.setAttribute('rel', 'stylesheet')
          fileref.setAttribute('href', name)
        } else if (type == 'js') {
          var fileref = document.createElement('script')
          fileref.setAttribute('type', 'text/javascript')
          fileref.setAttribute('async', '')
          fileref.setAttribute('src', name)
        }
        if (typeof fileref != 'undefined') {
          document.getElementsByTagName('head')[0].appendChild(fileref)
        }
      }

      function appendChildBody(name, type) {
        if (type == 'js') var src = document.createElement('script');
        src.setAttribute('async', '');
        src.setAttribute('src', name)
        if (typeof src != 'undefined') document.getElementsByTagName('body')[0].appendChild(src)
      }
      window.addEventListener('load', function() {
        if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone|webOS)/i) === null ||
          window.navigator.pointerEnabled && navigator.maxTouchPoints > 1) {
          document.documentElement.setAttribute('data-view-type', 'desktop')
          if ((uri.length - m1.length) > 0) {
            window.history.replaceState({}, document.title, m1)
          }
          if ((uri.length - m2.length) > 0) {
            window.history.replaceState({}, document.title, m2)
          }
          var _a = document.querySelectorAll('a')
          for (var i = 0; i < _a.length; i++) {
            var _b = _a[i].getAttribute('href')
            if (_b != null) {
              if (_b.indexOf('?m=1') != -1) _a[i].setAttribute('href', _b.substr(0, _b.indexOf('?m=1')))
              if (_b.indexOf('&m=1') != -1) _a[i].setAttribute('href', _b.substr(0, _b.indexOf('&m=1')))
            }
          }
        } else {
          document.documentElement.setAttribute('data-view-type', 'mobile')
        }
        $(window).on('scroll', function() {
          var menu_area = $('.menu-area')
          if ($(window).scrollTop() > 200) menu_area.addClass('sticky-menu')
          else menu_area.removeClass('sticky-menu')
        })
        $(document).on('click', '.navbar-collapse.in', function(e) {
          if ($(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle') $(this).collapse('hide')
        })
        $('body').scrollspy({
          target: '.navbar-collapse',
          offset: 195
        })
        $('a.smooth_scroll').on('click', function(e) {
          e.preventDefault()
          var anchor = $(this)
          $('html,body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
          }, 1000)
        })
        $('.portfolio').mixItUp()
        $('.work-popup').magnificPopup({
          type: 'image',
          gallery: {
            enabled: true
          },
          zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
              return element.find('img')
            }
          }
        })
        $('.testimonial-list').owlCarousel({
          lazyLoad: false,
          pagination: false,
          navigation: false,
          items: 3,
          autoPlay: true,
          itemsDesktop: [1199, 2],
          itemsDesktopSmall: [980, 1],
          itemsTablet: [768, 1],
          itemsMobile: [479, 1],
        })
        $('.owl-client').owlCarousel({
          items: 5,
          autoPlay: true,
          itemsDesktop: [1199, 5],
          itemsDesktopSmall: [980, 4],
          itemsTablet: [768, 3],
          itemsMobile: [479, 2],
          pagination: false,
          navigation: false,
          autoHeight: true,
        })

        // Get the form.
        var form = $('form[name="form_order"]'),
          form2 = $('form[name="contact_form"]')
        $('[data-target="#form-order"]').click(function() {
          var name = $(this).parent('.noiDungHoTro').find('p.level').text()
          $(form).find('.modal-title').php('Nội dung: <strong>' + name + '</strong>')
          $(form).find('input[type=hidden]').attr('value', name)
        })
        // Set up an event listener for the contact form.
        $(form).on('submit', function(e) {
          var captcha_response = grecaptcha.getResponse()
          if (captcha_response.length == 0) {
            $('.error-message').php('<p style="margin-bottom:1.3rem;color:#d93025;">Vui lòng chọn hộp kiểm này nếu bạn muốn tiếp tục.</p>')
            return false;
          }
          alert('Yêu cầu của bạn đã được gửi đi. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất. Trân trọng!')
          setTimeout(function() {
            $(form)[0].reset()
          }, 3000)
          $('#form-order').modal('hide')
          return true;
        })
        $(form2).on('submit', function(e) {
          alert('Yêu cầu của bạn đã được gửi đi. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất. Trân trọng!')
          return true
        })
        $('#for-select').on('change', function() {
          var text = $('#for-select :selected').text()
          if (text != '') $(form2).find('input[type=hidden]').attr('value', text)
        })
        // Home Page Slider Settings
        $('#carousel-example-generic').carousel({
          interval: 6000,
          cycle: true
        })
      })
      // ]]> 
    </script>
    <!-- Thay data:view.isSingleItem thành data:view.isPost nếu chỉ hiển thị trong post -->
    <script asysn='asysn' defer='defer' src='./cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script asysn='asysn' defer='defer' src='./cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.js'></script>
    <script asysn='asysn' defer='defer' src='./cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js'></script>
    <script asysn='asysn' defer='defer' src='./cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
    <script asysn='asysn' defer='defer' src='./cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js'></script>
    <script asysn='asysn' defer='defer' src='#'></script>
    <script asysn='asysn' defer='defer' src='./cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js'></script>
    <script asyns='' defer='defer' src='./cdn.jsdelivr.net/gh/thietkeblogspot/js/contact-buttons-widget.min.js'></script>
    <script async='async' defer='defer' src='./www.google.com/recaptcha/api.js'></script>
    <script>
      //<![CDATA[
      var url = window.location.href,
        uri = window.location.toString(),
        rel = document.querySelector('link[rel="canonical"]').getAttribute('href'),
        fb1 = url.substring(0, url.indexOf('?fbclid')),
        fb2 = url.substring(0, url.indexOf('&fbclid')),
        gi1 = url.substring(0, url.indexOf('?gidzl')),
        gi2 = url.substring(0, url.indexOf('&gidzl')),
        m1 = url.substring(0, url.indexOf('?m=1')),
        m2 = url.substring(0, url.indexOf('&m=1')),
        dv_tt = '₫',
        strn = 'sale',
        stock = "out-of-stock",
        strc = '0',
        thumb_url = './blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg8WrpwoxRJ7oj2N9fek0Dnu8O7EIZwN5rVlmxPfzV/s16000/safe_image.png'
      if ((uri.length - fb1.length) > 0) {
        window.history.replaceState({}, document.title, fb1)
      }
      if ((uri.length - fb2.length) > 0) {
        window.history.replaceState({}, document.title, fb2)
      }
      if ((uri.length - gi1.length) > 0) {
        window.history.replaceState({}, document.title, gi1)
      }
      if ((uri.length - gi2.length) > 0) {
        window.history.replaceState({}, document.title, gi2)
      }

      function loadCSS(filename, filetype) {
        if (filetype == 'css') {
          var fileref = document.createElement('link')
          fileref.setAttribute('rel', 'stylesheet')
          fileref.setAttribute('href', filename)
        } else if (filetype == 'js') {
          var fileref = document.createElement('script')
          fileref.setAttribute('type', 'text/javascript')
          fileref.setAttribute('async', '')
          fileref.setAttribute('src', filename)
        }
        if (typeof fileref != 'undefined') {
          document.getElementsByTagName('head')[0].appendChild(fileref)
        }
      }
      var _widget_settings = {
        positions: 'bottom right',
        support: {
          staff: {
            name: 'Chăm sóc khách hàng',
            image: 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh7tKkNpgTVEELAiBo7IICiGKDNlq-MJM0gznciTpYgiHPjGcoEx4jeF3Wj-VCaED4SFVijzBrKqfyT5yO2bCkApmDgq69bxZ4jrXx9q7vFMEUfgTmiopeyA_9PJBXWWy6Kt-tk-OCttD0B/s16000/cc.png',
            messages: 'Không biết chúng tôi có thể hỗ trợ gì cho anh/chị không ạ?'
          }
        },
        buttons: {
          contact: {
            visible: 'true',
            id: 'https://www.sinvoice.vn/#contact',
            messages: 'Liên hệ'
          },
          email: {
            visible: 'true',
            id: 'hoadondientu@sinvoice.vn',
            messages: 'Gửi email'
          },
          call: {
            visible: 'true',
            id: '+84866531668',
            messages: 'Gọi điện'
          },
          sms: {
            visible: 'true',
            id: '0866531668',
            messages: 'Nhắn tin'
          },
          viber: {
            visible: 'false',
            id: 'sinvoice',
            messages: 'Chat Viber'
          },
          telegram: {
            visible: 'false',
            id: 'sinvoice',
            messages: 'Chat Telegram'
          },
          zalo: {
            visible: 'true',
            id: '0866531668',
            messages: 'Chat Zalo'
          },
          facebook: {
            visible: 'true',
            id: 'sinvoicevn',
            messages: 'Chat Facebook'
          }
        }
      }

      function check_out(e) {
        e.preventDefault()
        var $this = $(this)
        $this.addClass('adding')
        var product_name = 'Giao hàng ' + $this.parents('.card').find('.title-wrapper a').text()
        $('.modal--header ._mht').php(product_name)
        $('.modal--body #productname').attr('value', product_name)
        setTimeout(function() {
          $this.removeClass('adding')
        }, 500)
      }

      function modal_open(e) {
        var target = '#' + $('.modal--target').attr('id')
        e.preventDefault()
        if ($(this).is('a')) {
          target = $(this).attr('href')
        } else {
          target = $(this).attr('data-target')
        }
        $(target).show()
        $(target).find('.modal--confirm').fadeIn('slow', function() {
          $(this).addClass('show')
        })
        $('.modal--close').click(function() {
          var $this = $(this)
          $this.parents('.modal--confirm').removeClass('show')
          setTimeout(function() {
            $this.parents('.modal--target').removeAttr('style')
          }, 200)
        })
        $(document).on('keyup', function(k) {
          if (k.keyCode == 27) {
            target = $('.modal--confirm.show')
            var parent = $(target).parent()
            setTimeout(function() {
              $(target).remove()
            }, 200)
          }
        })
      }
      window.addEventListener('load', function() {
        if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone|webOS)/i) === null ||
          window.navigator.pointerEnabled && navigator.maxTouchPoints > 1) {
          document.documentElement.setAttribute('data-view-type', 'desktop')
          if ((uri.length - m1.length) > 0) {
            window.history.replaceState({}, document.title, m1)
          }
          if ((uri.length - m2.length) > 0) {
            window.history.replaceState({}, document.title, m2)
          }
          var _a = document.querySelectorAll('a')
          for (var i = 0; i < _a.length; i++) {
            var _b = _a[i].getAttribute('href')
            if (_b != null) {
              if (_b.indexOf('?m=1') != -1) _a[i].setAttribute('href', _b.substr(0, _b.indexOf('?m=1')))
              if (_b.indexOf('&m=1') != -1) _a[i].setAttribute('href', _b.substr(0, _b.indexOf('&m=1')))
            }
          }
        } else {
          document.documentElement.setAttribute('data-view-type', 'mobile')
        }
        loadCSS('./cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', 'css')
        loadCSS('./cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', 'css')
        $('.modal--icon.modal--close').append('<svg height="21px" tabindex="0" viewBox="0 0 24 24" width="21px"><path fill="#707070" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path></svg>')
        $('input.input-qty').each(function() {
          var $this = $(this),
            qty = $this.parent().find('.is-form'),
            min = Number($this.attr('min')),
            max = Number($this.attr('max'))
          if (min == 0) {
            var d = 0
          } else d = min
          $(qty).on('click', function() {
            if ($(this).hasClass('minus')) {
              if (d > min) d += -1
            } else if ($(this).hasClass('plus')) {
              var x = Number($this.val()) + 1
              if (x <= max) d += 1
            }
            $this.attr('value', d).val(d)
          })
        })
        if ([data.view.isHomepage, data.view.isPost].includes('true')) {
          var _feeds = 0

          function _cate() {
            if (_feeds == 0) {
              _feeds = 1
              var cate = $('.products-list'),
                cate_blog = $('.archive')
              if (cate.length != '') {
                $(cate).each(function(i) {
                  var r = Number($(cate[i]).attr('data-item')),
                    attr = $(cate[i]).attr('data-category'),
                    cate_type = $(cate[i]).attr('data-type')
                  if (typeof attr !== typeof undefined && attr !== false) var cate_name = $(cate[i]).attr('data-category')
                  if (cate_type == 'label posts') var cate_url = '/feeds/posts/default/-/' + cate_name + '?alt=json-in-script&max-results=' + r
                  else if (cate_type == 'recent posts') cate_url = '/feeds/posts/default?alt=json-in-script&max-results=' + r
                  else if (cate_type == 'random posts') cate_url = 'feeds/posts/summary615d?alt=json-in-script&amp;max-results=0'
                  else if (cate_type == 'related posts') cate_url = '/feeds/posts/summary/-/' + cate_name + '?alt=json-in-script&max-results=0'

                  function feed_entry(e) {
                    if (e.feed.entry) {
                      for (var t = 0; t < e.feed.entry.length; t++) {
                        var start_rating = '',
                          contents = '',
                          entry = e.feed.entry[t],
                          post_id = entry.id.$t.replace('tag:blogger.com,1999:blog-' + data.blog.blogId + '.post-', ''),
                          post_title = entry.title.$t
                        for (var a = 0; a < entry.link.length; a++) {
                          if (entry.link[a].rel == 'alternate') {
                            var post_url = entry.link[a].href
                            break
                          }
                        }
                        if ('media$thumbnail' in entry) {
                          var post_thumb = entry.media$thumbnail.url.replace('s72-c', 's1600')
                        } else {
                          var st = entry.content.$t,
                            at = st.indexOf("<img"),
                            bt = st.indexOf('src="', at),
                            ct = st.indexOf('"', bt + 5),
                            dt = st.substr(bt + 5, ct - bt - 5)
                          if (at != -1 && bt != -1 && ct != -1 && dt != "") {
                            post_thumb = dt
                          } else {
                            post_thumb = thumb_url
                          }
                        }
                        var thumb_show = '<img class="img-fluid" alt="' + post_title + '" src=' + post_thumb + '>'
                        if ('category' in entry) {
                          var listlabel = '',
                            price = entry.category[0].term
                          for (var k = 0; k < entry.category.length; k++) {
                            listlabel += entry.category[k].term
                            var strsc = listlabel.indexOf(strc),
                              strnt = listlabel.indexOf(stock),
                              strsa = listlabel.indexOf(strn),
                              no_price = listlabel.slice(strsc, Number(strsc) + strc),
                              cate_sale = listlabel.slice(strsa, Number(strsa) + strn.length),
                              cate_stock = listlabel.slice(strnt, Number(strnt) + stock.length)
                            if (no_price) {
                              if (cate_sale == strn) {
                                var price_sale = entry.category[1].term
                                var price_wrapper = '<div class="price-wrapper w-50"><span class="gia-ban"><ins>' + price + '</ins><label class="dvt">' + dv_tt + '</label></span><br><span class="gia-giam"><del>' + price_sale + '</del><label class="dvt">' + dv_tt + '</label></span></div>'
                              } else {
                                price_wrapper = '<div class="price-wrapper w-50"><span class="gia-ban"><ins>' + price + '</ins><label class="dvt">' + dv_tt + '</label></span></div>'
                              }
                              if (cate_stock != stock) {
                                var button_wrapper = '<div class="button-wrapper w-50 text-right"><button aria-label="' + data.messages.quickbuy + '" class="button quick-buy modal--open" data-target="#order" value=' + post_id + '>' + data.messages.quickbuy + '</button></div>'
                              } else {
                                button_wrapper = '<div class="button-wrapper w-50 text-right"><button class="button quick-buy modal--open" disabled="disabled" value=' + post_id + '>' + data.messages.outstock + '</button></div>'
                              }
                            } else {
                              price_wrapper = '<div class="price-wrapper w-50"><span class="bolder">' + data.messages.contact + '</span></div>'
                              button_wrapper = '<div class="button-wrapper w-50 text-right"><a class="button order" href="tel:0913997967">0913.997.967</a></div>'
                            }
                          }
                        }
                        if ('thr$total' in entry) {
                          var numcm = Number(entry.thr$total.$t)
                          if (numcm < 3) {
                            start_rating = '<div class="star-rating"><span style="width:60%">Rated 3.00 out of 5</span></div>'
                          } else if ([3, 4, 5].includes(numcm)) {
                            start_rating = '<div class="star-rating"><span style="width:70%">Rated 3.50 out of 5</span></div>'
                          } else if ([6, 7, 8].includes(numcm)) {
                            start_rating = '<div class="star-rating"><span style="width:80%">Rated 4.00 out of 5</span></div>'
                          } else if ([9, 10, 11].includes(numcm)) {
                            start_rating = '<div class="star-rating"><span style="width:90%">Rated 4.50 out of 5</span></div>'
                          } else if (numcm > 11) {
                            start_rating = '<div class="star-rating"><span style="width:100%">Rated 5.00 out of 5</span></div>'
                          }
                        } else {
                          start_rating = ''
                        }
                        $(cate[i]).find('.spinner').removeClass('spinner')
                        $(cate[i]).find('.row.contents').append('<div class="col-md-3 pb-4"><article class="card"><div class="card-header pd-0"><div class="image-cover"><a class="flex" href=' + post_url + ' title="' + post_title + '">' + thumb_show + '</a></div></div><div class="card-body"><div class="title-wrapper"><a href=' + post_url + ' title="' + post_title + '">' + post_title + '</a></div><div class="rating-wrapper flex align-center">' + start_rating + '</div></div><div class="card-footer flex align-center">' + price_wrapper + button_wrapper + '</div></article></div>')
                      }
                    }
                    if (data.view.isHomepage == 'true') {
                      $(cate[i]).find('.row.contents').slick({
                        slidesToScroll: 1,
                        autoplay: true,
                        arrows: false,
                        dots: false,
                        autoplaySpeed: 4000,
                        responsive: [{
                            breakpoint: 1920,
                            settings: {
                              slidesToShow: 4
                            }
                          },
                          {
                            breakpoint: 769,
                            settings: {
                              slidesToShow: 2
                            }
                          },
                          {
                            breakpoint: 550,
                            settings: {
                              slidesToShow: 1
                            }
                          }
                        ]
                      })
                    }
                  }
                  if (cate_type == 'random posts') {
                    $.get(cate_url, function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t
                        if (a < r) r = a
                        let arr = []
                        do {
                          let num = Math.floor(Math.random() * a)
                          arr.push(num)
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index
                          })
                        } while (arr.length < r)
                        arr.forEach(function(m) {
                          m += 1
                          $.ajax({
                            type: 'GET',
                            url: '/feeds/posts/default',
                            data: {
                              'alt': 'json',
                              'start-index': m,
                              'max-results': 1
                            },
                            dataType: 'jsonp',
                            success: feed_entry
                          })
                        })
                      }
                    }, 'jsonp')
                  } else if (cate_type == 'related posts') {
                    $.get(cate_url, function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t
                        if (a < r) r = a
                        let arr = []
                        do {
                          let num = Math.floor(Math.random() * a)
                          arr.push(num)
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index
                          })
                        } while (arr.length < r)
                        arr.forEach(function(m) {
                          m += 1
                          $.ajax({
                            type: 'GET',
                            url: '/feeds/posts/default/-/' + cate_name,
                            data: {
                              'alt': 'json',
                              'start-index': m,
                              'max-results': 1
                            },
                            dataType: 'jsonp',
                            success: feed_entry
                          })
                        })
                      }
                    }, 'jsonp')
                  } else {
                    $.ajax({
                      type: 'GET',
                      url: cate_url,
                      data: {
                        'alt': 'json',
                        'max-results': r
                      },
                      dataType: 'jsonp',
                      success: feed_entry
                    })
                  }
                })
              }
              if (cate_blog.length != '') {
                $(cate_blog).each(function(i) {
                  var r = Number($(cate_blog[i]).attr('data-item')),
                    attr = $(cate_blog[i]).attr('data-category'),
                    cate_type = $(cate_blog[i]).attr('data-type')
                  if (typeof attr !== typeof undefined && attr !== false) var cate_name = $(cate_blog[i]).attr('data-category')
                  if (cate_type == 'recent posts') var cate_url = 'feeds/posts/default'
                  else if (cate_type == 'label posts') cate_url = '/feeds/posts/default/-/' + cate_name
                  else if (cate_type == 'random posts') cate_url = 'feeds/posts/summary615d?alt=json-in-script&amp;max-results=0'
                  else if (cate_type == 'related posts') cate_url = '/feeds/posts/summary/-/' + cate_name + '?alt=json-in-script&max-results=0'

                  function get_data(e) {
                    if (e.feed.entry) {
                      for (var t = 0; t < e.feed.entry.length; t++) {
                        var entry = e.feed.entry[t],
                          entry_title = entry.title.$t
                        for (var a = 0; a < entry.link.length; a++) {
                          if (entry.link[a].rel == 'alternate') {
                            var entry_url = entry.link[a].href
                            break
                          }
                        }
                        if ('media$thumbnail' in entry) {
                          var entry_thumb = entry.media$thumbnail.url.replace('s72-c', 's1600')
                        } else {
                          var st = entry.content.$t,
                            at = st.indexOf("<img"),
                            bt = st.indexOf('src="', at),
                            ct = st.indexOf('"', bt + 5),
                            dt = st.substr(bt + 5, ct - bt - 5)
                          if (at != -1 && bt != -1 && ct != -1 && dt != "") {
                            entry_thumb = dt
                          } else {
                            entry_thumb = thumb_url
                          }
                        }
                        if ('content' in entry) {
                          var post_snippet = entry.content.$t,
                            snippets = 100,
                            summary = '',
                            re = /<\S[^>]*>/g,
                            post_snippet = post_snippet.replace(re, "")
                          if (post_snippet.length < snippets) {
                            summary = post_snippet
                          } else {
                            post_snippet = post_snippet.substring(0, snippets)
                            var quoteEnd = post_snippet.lastIndexOf(' '),
                              entry_summary = post_snippet.substring(0, quoteEnd)
                          }
                        } else {
                          entry_summary = ''
                        }
                        $(cate_blog[i]).find('.spinner').removeClass('spinner')
                        $(cate_blog[i]).find('.row.contents').append('<div class="col-md-3 pb-4"><article class="card"><div class="card-header pd-0"><div class="featured-image"><a  href=' + entry_url + ' title="' + entry_title + '"><img src=' + entry_thumb + ' title="' + entry_title + '" alt="' + entry_title + '"></a></div></div><div class="card-body"><div class="entry-title mb-10"><a href=' + entry_url + ' title="' + entry_title + '">' + entry_title + '</a></div><div class="entry-summary">' + entry_summary + '[...]</div></div><div class="card-footer text-center"><a class="button" href=' + entry_url + ' title="' + entry_title + '">Đọc thêm</a></div></article></div>')
                      }
                    }
                    if (data.view.isHomepage == 'true') {
                      $(cate_blog[i]).find('.row.contents').slick({
                        slidesToScroll: 1,
                        autoplay: true,
                        arrows: false,
                        dots: false,
                        autoplaySpeed: 4000,
                        responsive: [{
                            breakpoint: 1920,
                            settings: {
                              slidesToShow: 4
                            }
                          },
                          {
                            breakpoint: 769,
                            settings: {
                              slidesToShow: 2
                            }
                          },
                          {
                            breakpoint: 550,
                            settings: {
                              slidesToShow: 1
                            }
                          }
                        ]
                      })
                    }
                  }
                  if (cate_type == 'random posts') {
                    $.get(cate_url, function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t
                        if (a < r) r = a
                        let arr = []
                        do {
                          let num = Math.floor(Math.random() * a)
                          arr.push(num)
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index
                          })
                        } while (arr.length < r)
                        arr.forEach(function(m) {
                          m += 1
                          $.ajax({
                            type: 'GET',
                            url: '/feeds/posts/default',
                            data: {
                              'alt': 'json',
                              'start-index': m,
                              'max-results': 1
                            },
                            dataType: 'jsonp',
                            success: get_data
                          })
                        })
                      }
                    }, 'jsonp')
                  } else if (cate_type == 'related posts') {
                    $.get(cate_url, function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t
                        if (a < r) r = a
                        let arr = []
                        do {
                          let num = Math.floor(Math.random() * a)
                          arr.push(num)
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index
                          })
                        } while (arr.length < r)
                        arr.forEach(function(m) {
                          m += 1
                          $.ajax({
                            type: 'GET',
                            url: '/feeds/posts/default/-/' + cate_name,
                            data: {
                              'alt': 'json',
                              'start-index': m,
                              'max-results': 1
                            },
                            dataType: 'jsonp',
                            success: get_data
                          })
                        })
                      }
                    }, 'jsonp')
                  } else {
                    $.ajax({
                      type: 'GET',
                      url: cate_url,
                      data: {
                        'alt': 'json',
                        'max-results': r
                      },
                      dataType: 'jsonp',
                      success: get_data
                    })
                  }
                })
              }
            }
          }
          var is_load = 0

          function loadpl() {
            if (is_load == 0) {
              is_load = 1
              loadCSS('./cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', 'css')
              var an = document.createElement('script')
              an.async = true;
              an.src = './cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'
              var sc = document.getElementsByTagName('script')[0]
              sc.parentNode.insertBefore(an, sc)
            }
          }
          $(window).scroll(function() {
            loadpl();
            _cate()
          })
          $(window).mousemove(function() {
            loadpl();
            _cate()
          })
          setTimeout(function() {
            loadpl()
          }, 3000)
          setTimeout(function() {
            _cate()
          }, 1000)
        }
        $(document).off('click', '.modal--open', modal_open).on('click', '.modal--open', modal_open)
        $(document).off('click', 'button.quick-buy', modal_open).on('click', 'button.quick-buy', check_out)
        $(function() {
          $.fn.scrollToTop = function() {
            $(this).hide(), "0" != $(window).scrollTop() && $(this).fadeIn("slow")
            var o = $(this)
            $(window).scroll(function() {
              "0" == $(window).scrollTop() ? $(o).fadeOut("slow") : $(o).fadeIn("slow")
            }), $(this).click(function() {
              $("html,body").animate({
                scrollTop: 0
              }, "slow")
            })
          }
        }), $(function() {
          $(".MD-StoTop").scrollToTop()
        })

      })
      //]]>
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async='async' src='https://www.googletagmanager.com/gtag/js?id=UA-182978106-1'>
    </script>
    <style type='text/css'>
      body {
        overflow: hidden;
      }
    </style>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-182978106-1');
    </script>
</body><!--<head><style type='text/css'>@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmZiArmlw.woff2)format('woff2');unicode-range:U+0460-052F,U+1C80-1C8A,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmQiArmlw.woff2)format('woff2');unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmYiArmlw.woff2)format('woff2');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmXiArmlw.woff2)format('woff2');unicode-range:U+0370-0377,U+037A-037F,U+0384-038A,U+038C,U+038E-03A1,U+03A3-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVnoiArmlw.woff2)format('woff2');unicode-range:U+0302-0303,U+0305,U+0307-0308,U+0310,U+0312,U+0315,U+031A,U+0326-0327,U+032C,U+032F-0330,U+0332-0333,U+0338,U+033A,U+0346,U+034D,U+0391-03A1,U+03A3-03A9,U+03B1-03C9,U+03D1,U+03D5-03D6,U+03F0-03F1,U+03F4-03F5,U+2016-2017,U+2034-2038,U+203C,U+2040,U+2043,U+2047,U+2050,U+2057,U+205F,U+2070-2071,U+2074-208E,U+2090-209C,U+20D0-20DC,U+20E1,U+20E5-20EF,U+2100-2112,U+2114-2115,U+2117-2121,U+2123-214F,U+2190,U+2192,U+2194-21AE,U+21B0-21E5,U+21F1-21F2,U+21F4-2211,U+2213-2214,U+2216-22FF,U+2308-230B,U+2310,U+2319,U+231C-2321,U+2336-237A,U+237C,U+2395,U+239B-23B7,U+23D0,U+23DC-23E1,U+2474-2475,U+25AF,U+25B3,U+25B7,U+25BD,U+25C1,U+25CA,U+25CC,U+25FB,U+266D-266F,U+27C0-27FF,U+2900-2AFF,U+2B0E-2B11,U+2B30-2B4C,U+2BFE,U+3030,U+FF5B,U+FF5D,U+1D400-1D7FF,U+1EE00-1EEFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVn6iArmlw.woff2)format('woff2');unicode-range:U+0001-000C,U+000E-001F,U+007F-009F,U+20DD-20E0,U+20E2-20E4,U+2150-218F,U+2190,U+2192,U+2194-2199,U+21AF,U+21E6-21F0,U+21F3,U+2218-2219,U+2299,U+22C4-22C6,U+2300-243F,U+2440-244A,U+2460-24FF,U+25A0-27BF,U+2800-28FF,U+2921-2922,U+2981,U+29BF,U+29EB,U+2B00-2BFF,U+4DC0-4DFF,U+FFF9-FFFB,U+10140-1018E,U+10190-1019C,U+101A0,U+101D0-101FD,U+102E0-102FB,U+10E60-10E7E,U+1D2C0-1D2D3,U+1D2E0-1D37F,U+1F000-1F0FF,U+1F100-1F1AD,U+1F1E6-1F1FF,U+1F30D-1F30F,U+1F315,U+1F31C,U+1F31E,U+1F320-1F32C,U+1F336,U+1F378,U+1F37D,U+1F382,U+1F393-1F39F,U+1F3A7-1F3A8,U+1F3AC-1F3AF,U+1F3C2,U+1F3C4-1F3C6,U+1F3CA-1F3CE,U+1F3D4-1F3E0,U+1F3ED,U+1F3F1-1F3F3,U+1F3F5-1F3F7,U+1F408,U+1F415,U+1F41F,U+1F426,U+1F43F,U+1F441-1F442,U+1F444,U+1F446-1F449,U+1F44C-1F44E,U+1F453,U+1F46A,U+1F47D,U+1F4A3,U+1F4B0,U+1F4B3,U+1F4B9,U+1F4BB,U+1F4BF,U+1F4C8-1F4CB,U+1F4D6,U+1F4DA,U+1F4DF,U+1F4E3-1F4E6,U+1F4EA-1F4ED,U+1F4F7,U+1F4F9-1F4FB,U+1F4FD-1F4FE,U+1F503,U+1F507-1F50B,U+1F50D,U+1F512-1F513,U+1F53E-1F54A,U+1F54F-1F5FA,U+1F610,U+1F650-1F67F,U+1F687,U+1F68D,U+1F691,U+1F694,U+1F698,U+1F6AD,U+1F6B2,U+1F6B9-1F6BA,U+1F6BC,U+1F6C6-1F6CF,U+1F6D3-1F6D7,U+1F6E0-1F6EA,U+1F6F0-1F6F3,U+1F6F7-1F6FC,U+1F700-1F7FF,U+1F800-1F80B,U+1F810-1F847,U+1F850-1F859,U+1F860-1F887,U+1F890-1F8AD,U+1F8B0-1F8BB,U+1F8C0-1F8C1,U+1F900-1F90B,U+1F93B,U+1F946,U+1F984,U+1F996,U+1F9E9,U+1FA00-1FA6F,U+1FA70-1FA7C,U+1FA80-1FA89,U+1FA8F-1FAC6,U+1FACE-1FADC,U+1FADF-1FAE9,U+1FAF0-1FAF8,U+1FB00-1FBFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmbiArmlw.woff2)format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmaiArmlw.woff2)format('woff2');unicode-range:U+0100-02BA,U+02BD-02C5,U+02C7-02CC,U+02CE-02D7,U+02DD-02FF,U+0304,U+0308,U+0329,U+1D00-1DBF,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-stretch:100%;font-display:swap;src:url(//fonts.gstatic.com/s/roboto/v48/KFOMCnqEu92Fr1ME7kSn66aGLdTylUAMQXC89YmC2DPNWubEbVmUiAo.woff2)format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;}</style>
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>

</head>
<body>
<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2422103421-widgets.js"></script>
<script type='text/javascript'>
window['__wavt'] = 'AOuZoY5T79cmnNR7CELO7fcoBFACYipF1Q:1755616231557';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d8243747611808165490','//www.sinvoice.vn/','8243747611808165490');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '8243747611808165490', 'title': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'url': 'https://www.sinvoice.vn/', 'canonicalUrl': 'https://www.sinvoice.vn/', 'homepageUrl': 'https://www.sinvoice.vn/', 'searchUrl': 'https://www.sinvoice.vn/search', 'canonicalHomepageUrl': 'https://www.sinvoice.vn/', 'blogspotFaviconUrl': 'https://www.sinvoice.vn/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': true, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'vi', 'localeUnderscoreDelimited': 'vi', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice - Atom\x22 href\x3d\x22https://www.sinvoice.vn/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice - RSS\x22 href\x3d\x22https://www.sinvoice.vn/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/8243747611808165490/posts/default\x22 /\x3e\n', 'meTag': '\x3clink rel\x3d\x22me\x22 href\x3d\x22https://www.blogger.com/profile/02264579707873986017\x22 /\x3e\n', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/df31f371d64631dc', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'interstitialAccepted': false, 'sharing': {'platforms': [{'name': 'Nh\u1eadn \u0111\u01b0\u1eddng li\xean k\u1ebft', 'key': 'link', 'shareMessage': 'Nh\u1eadn \u0111\u01b0\u1eddng li\xean k\u1ebft', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Chia s\u1ebb v\u1edbi Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'X', 'key': 'twitter', 'shareMessage': 'Chia s\u1ebb v\u1edbi X', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Chia s\u1ebb v\u1edbi Pinterest', 'target': 'pinterest'}, {'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27vi\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': '\u0110\u1ecdc th\xeam', 'pageType': 'index', 'pageName': '', 'pageTitle': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'metaDescription': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice | H\u1ed7 tr\u1ee3 100% th\u1ee7 t\u1ee5c th\xf4ng b\xe1o ph\xe1t h\xe0nh h\xf3a \u0111\u01a1n | L\u01b0u tr\u1eef mi\u1ec5n ph\xed trong 10 n\u0103m'}}, {'name': 'features', 'data': {}}, {'name': 'messages', 'data': {'edit': 'Ch\u1ec9nh s\u1eeda', 'linkCopiedToClipboard': '\u0110\xe3 sao ch\xe9p \u0111\u01b0\u1eddng li\xean k\u1ebft v\xe0o b\u1ea3ng nh\u1edb t\u1ea1m!', 'ok': 'Ok', 'postLink': 'Li\xean k\u1ebft b\xe0i \u0111\u0103ng'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'T\xf9y ch\u1ec9nh', 'isResponsive': true, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'description': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice | H\u1ed7 tr\u1ee3 100% th\u1ee7 t\u1ee5c th\xf4ng b\xe1o ph\xe1t h\xe0nh h\xf3a \u0111\u01a1n | L\u01b0u tr\u1eef mi\u1ec5n ph\xed trong 10 n\u0103m', 'url': 'https://www.sinvoice.vn/', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': true, 'isArchive': false, 'isLabelSearch': false}}, {'name': 'widgets', 'data': [{'title': 'Menu', 'type': 'HTML', 'sectionId': 'header', 'id': 'HTML1'}, {'title': 'Banner', 'type': 'HTML', 'sectionId': 'header-image-tin-tuc', 'id': 'HTML142'}, {'title': 'Page banners', 'type': 'HTML', 'sectionId': 'header-image-2', 'id': 'HTML2'}, {'title': 'Menu 1', 'type': 'HTML', 'sectionId': 'main-menu', 'id': 'HTML4'}, {'title': 'Menu 1', 'type': 'HTML', 'sectionId': 'main-menu-mau', 'id': 'HTML44'}, {'title': 'Menu 1', 'type': 'HTML', 'sectionId': 'main-menu-bang-gia', 'id': 'HTML59'}, {'title': 'M\u1eabu h\xf3a \u0111\u01a1n GTGT', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML45'}, {'title': 'M\u1eabu h\xf3a \u0111\u01a1n B\xe1n h\xe0ng', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML46'}, {'title': 'M\u1eabu h\xf3a \u0111\u01a1n theo ng\xe0nh', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML47'}, {'title': 'PXK ki\xeam v\u1eadn chuy\u1ec3n n\u1ed9i b\u1ed9', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML48'}, {'title': 'Th\u1ee7 t\u1ee5c \u0111\u0103ng k\xfd', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML15'}, {'title': 'V\u0103n b\u1ea3n ph\xe1p l\xfd', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML16'}, {'title': 'C\xe2u h\u1ecfi th\u01b0\u1eddng g\u1eb7p Sinvoice', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML17'}, {'title': 'Tra c\u1ee9u h\xf3a \u0111\u01a1n', 'type': 'HTML', 'sectionId': 'content-register', 'id': 'HTML49'}, {'title': 'Slider', 'type': 'HTML', 'sectionId': 'slider', 'id': 'HTML5'}, {'title': 'D\u1ecbch v\u1ee5 H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'type': 'HTML', 'sectionId': 'pricing', 'id': 'HTML7'}, {'title': 'B\u1ea3ng gi\xe1 d\u1ecbch v\u1ee5 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'type': 'HTML', 'sectionId': 'pricing', 'id': 'HTML8'}, {'title': 'Instant Setup', 'type': 'HTML', 'sectionId': 'service', 'id': 'HTML6'}, {'title': 'Contact Us', 'type': 'HTML', 'sectionId': 'contact', 'id': 'HTML13'}, {'title': 'Testimonials', 'type': 'PopularPosts', 'sectionId': 'testimonial', 'id': 'PopularPosts3', 'posts': [{'title': 'C\xe1c b\u01b0\u1edbc c\u1ea5u h\xecnh k\xfd h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice b\u1eb1ng USB token Viettel', 'id': 4037834531788994869}, {'title': 'Danh s\xe1ch c\xe1c l\u1ed7i th\u01b0\u1eddng g\u1eb7p tr\xean h\u1ec7 th\u1ed1ng H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'id': 127588574643958352}, {'title': 'C\xe1c b\u01b0\u1edbc c\u1ea5u h\xecnh g\u1eedi mail h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed cho ng\u01b0\u1eddi mua h\xe0ng b\u1eb1ng Gmail, Yahoo, Hotmail', 'id': 4660380960816121266}, {'title': 'C\xe1ch l\u1eadp bi\xean b\u1ea3n \u0111i\u1ec1u ch\u1ec9nh h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'id': 9111414425531320957}, {'title': 'C\u1ea5u h\xecnh k\xfd h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed Sinvoice b\u1eb1ng USB token Viettel', 'id': 294291847184222266}, {'title': 'G\xf3i 500 ch\u1ee9ng t\u1eeb kh\u1ea5u tr\u1eeb Thu\u1ebf TNCN \u0111i\u1ec7n t\u1eed Viettel cung c\u1ea5p', 'id': 3312758321226570714}, {'title': 'G\xf3i 1000 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed kh\u1edfi t\u1ea1o t\u1eeb m\xe1y t\xednh ti\u1ec1n', 'id': 2536054750461989675}, {'title': 'H\u01b0\u1edbng d\u1eabn chuy\u1ec3n \u0111\u1ed5i h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice th\xe0nh h\xf3a \u0111\u01a1n gi\u1ea5y', 'id': 331578944806037205}, {'title': '[VIDEO] H\u01b0\u1edbng d\u1eabn x\xf3a b\u1ecf v\xe0 kh\xf4i ph\u1ee5c l\u1ea1i h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed Sinvoice', 'id': 8451072648409455349}, {'title': '03 c\xe1ch ki\u1ec3m tra th\u1eddi h\u1ea1n ch\u1eef k\xfd s\u1ed1 Viettel-CA', 'id': 4811346622030466927}]}, {'title': 'B\xe0i \u0111\u0103ng tr\xean Blog', 'type': 'Blog', 'sectionId': 'main-1', 'id': 'Blog1', 'posts': [{'id': '5937700225305072322', 'title': 'Mua m\u1ed9t t\u1eb7ng b\u1ed1n - Si\xeau \u01b0u \u0111\xe3i khi mua USB token Viettel', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiQyQqhgLXSlcCceWfNRBasrZQ8DvhEesiEe-91MknOWxUZ36Y4yFje930hlrYxw_K_HNHT8-EwEUwDCK7pNPttI7M0r3Kf0YoWe6MPd2PNodEZ9rHqs8iI7fCUd6uIqVh5Z_G8WP9yMx0anFLxPMjsRuWz02DsnxZzL7dj99RVTuFjDa2atVpsb0vRKEzy/s16000/mua-mot-tang-bon-uu-dai-nam-2025-anh-zalo.webp', 'showInlineAds': false}, {'id': '6066503495452110229', 'title': 'G\xf3i 1000 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed \u0111\u1ea1i tr\xe0', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizqrGElTn6Y3H1HdfU8JVFcnOtre0xZ-E5VUEq89qFe4g-_JEhkl5Zn2KhiI4zQB6CRJS1B7Cs-Wv6wswRd7-7uBmbHzJNOfduvHV4tjC-g8bn8mplvcIVjSidqhO1og99GoNaEfqvJXtRRSyHuLJiJcCweqIhqgn7ROUrod2PILrdUSTLIrlNbq59rrUw/s16000/goi-hoa-don-dien-tu-sinvoice-dai-tra.webp', 'showInlineAds': false}, {'id': '2282573007417621557', 'title': 'G\xf3i 300 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed \u0111\u1ea1i tr\xe0', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizqrGElTn6Y3H1HdfU8JVFcnOtre0xZ-E5VUEq89qFe4g-_JEhkl5Zn2KhiI4zQB6CRJS1B7Cs-Wv6wswRd7-7uBmbHzJNOfduvHV4tjC-g8bn8mplvcIVjSidqhO1og99GoNaEfqvJXtRRSyHuLJiJcCweqIhqgn7ROUrod2PILrdUSTLIrlNbq59rrUw/s16000/goi-hoa-don-dien-tu-sinvoice-dai-tra.webp', 'showInlineAds': false}, {'id': '6523769686416506118', 'title': 'Viettel h\u1ee3p t\xe1c c\xf9ng POS365 tri\u1ec3n khai ho\xe1 \u0111\u01a1n \u0111i\u1ec7n t\u1eed kh\u1edfi t\u1ea1o t\u1eeb m\xe1y t\xednh ti\u1ec1n', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjr9WFA4pCQ_ChL_PBjRRmlR3MXKklzkqkeBWgLgLX5LZMDcsnrRNobXu76xl8c_ZpTUG8u-jTozHUOkFQiNWZsXxoZms9bBz8DfNTeAWB0ccMof-vLZ-fMffGzxTvnfEUEGN5F_ml6BA939q1AA81vWX6JfuhxvAO6iWR_Tenz2DcEAvPmAEo-Yzw9uFt1/s16000/hoa-don-dien-tu-tu-may-tinh-tien-pos365.webp', 'showInlineAds': false}, {'id': '1575106405432023285', 'title': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed kh\u1edfi t\u1ea1o t\u1eeb m\xe1y t\xednh ti\u1ec1n l\xe0 g\xec?', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgh7pa0GtBRVl7vTWib1SetAm8boub83byY5p_l7k5k4Wev2bs_VCWTm3fzPhJr_rknrDslpWwvdm2oE20qeYwRNbwO5T-DeynSqHI4jPb3JCSjQcnGqNR3IcE8tuqDx8MsndqEob7rH1BGwFwayVhZyrsCTvoZlxVBTcoWerivQUh-x-JjfG8_YT97n5zZ/s16000/HOA-DON-DIEN-TU-KHOI-TAO-TU-MAY-TINH-TIEN-LA-GI.webp', 'showInlineAds': false}], 'headerByline': {'regionName': 'header1', 'items': [{'name': 'share', 'label': ''}, {'name': 'author', 'label': 'B\u1edfi'}, {'name': 'timestamp', 'label': 'v\xe0o'}]}, 'footerBylines': [{'regionName': 'footer1', 'items': [{'name': 'comments', 'label': 'comments'}, {'name': 'icons', 'label': ''}]}, {'regionName': 'footer2', 'items': [{'name': 'labels', 'label': '-'}]}], 'allBylineItems': [{'name': 'share', 'label': ''}, {'name': 'author', 'label': 'B\u1edfi'}, {'name': 'timestamp', 'label': 'v\xe0o'}, {'name': 'comments', 'label': 'comments'}, {'name': 'icons', 'label': ''}, {'name': 'labels', 'label': '-'}]}, {'title': 'T\xecm ki\u1ebfm', 'type': 'BlogSearch', 'sectionId': 'sidebar-1', 'id': 'BlogSearch1'}, {'title': 'Ti\xeau \u0111i\u1ec3m', 'type': 'PopularPosts', 'sectionId': 'sidebar-1', 'id': 'PopularPosts1', 'posts': [{'title': 'C\xe1c b\u01b0\u1edbc c\u1ea5u h\xecnh k\xfd h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice b\u1eb1ng USB token Viettel', 'id': 4037834531788994869}, {'title': 'Danh s\xe1ch c\xe1c l\u1ed7i th\u01b0\u1eddng g\u1eb7p tr\xean h\u1ec7 th\u1ed1ng H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'id': 127588574643958352}, {'title': 'C\xe1c b\u01b0\u1edbc c\u1ea5u h\xecnh g\u1eedi mail h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed cho ng\u01b0\u1eddi mua h\xe0ng b\u1eb1ng Gmail, Yahoo, Hotmail', 'id': 4660380960816121266}, {'title': 'C\xe1ch l\u1eadp bi\xean b\u1ea3n \u0111i\u1ec1u ch\u1ec9nh h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice', 'id': 9111414425531320957}, {'title': 'C\u1ea5u h\xecnh k\xfd h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed Sinvoice b\u1eb1ng USB token Viettel', 'id': 294291847184222266}, {'title': 'G\xf3i 500 ch\u1ee9ng t\u1eeb kh\u1ea5u tr\u1eeb Thu\u1ebf TNCN \u0111i\u1ec7n t\u1eed Viettel cung c\u1ea5p', 'id': 3312758321226570714}, {'title': 'G\xf3i 1000 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed kh\u1edfi t\u1ea1o t\u1eeb m\xe1y t\xednh ti\u1ec1n', 'id': 2536054750461989675}, {'title': 'H\u01b0\u1edbng d\u1eabn chuy\u1ec3n \u0111\u1ed5i h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed S-Invoice th\xe0nh h\xf3a \u0111\u01a1n gi\u1ea5y', 'id': 331578944806037205}, {'title': '[VIDEO] H\u01b0\u1edbng d\u1eabn x\xf3a b\u1ecf v\xe0 kh\xf4i ph\u1ee5c l\u1ea1i h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed Sinvoice', 'id': 8451072648409455349}, {'title': '03 c\xe1ch ki\u1ec3m tra th\u1eddi h\u1ea1n ch\u1eef k\xfd s\u1ed1 Viettel-CA', 'id': 4811346622030466927}]}, {'title': 'T\xecm ki\u1ebfm h\u01b0\u1edbng d\u1eabn', 'type': 'BlogSearch', 'sectionId': 'sidebar-2', 'id': 'BlogSearch2'}, {'title': 'Link list 1', 'type': 'LinkList', 'sectionId': 'sidebar-2', 'id': 'LinkList2'}, {'title': 'B\xe0i \u0111\u0103ng tr\xean Blog', 'type': 'Blog', 'sectionId': 'main-2', 'id': 'Blog2', 'posts': [{'id': '5937700225305072322', 'title': 'Mua m\u1ed9t t\u1eb7ng b\u1ed1n - Si\xeau \u01b0u \u0111\xe3i khi mua USB token Viettel', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiQyQqhgLXSlcCceWfNRBasrZQ8DvhEesiEe-91MknOWxUZ36Y4yFje930hlrYxw_K_HNHT8-EwEUwDCK7pNPttI7M0r3Kf0YoWe6MPd2PNodEZ9rHqs8iI7fCUd6uIqVh5Z_G8WP9yMx0anFLxPMjsRuWz02DsnxZzL7dj99RVTuFjDa2atVpsb0vRKEzy/s16000/mua-mot-tang-bon-uu-dai-nam-2025-anh-zalo.webp', 'showInlineAds': false}, {'id': '6066503495452110229', 'title': 'G\xf3i 1000 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed \u0111\u1ea1i tr\xe0', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizqrGElTn6Y3H1HdfU8JVFcnOtre0xZ-E5VUEq89qFe4g-_JEhkl5Zn2KhiI4zQB6CRJS1B7Cs-Wv6wswRd7-7uBmbHzJNOfduvHV4tjC-g8bn8mplvcIVjSidqhO1og99GoNaEfqvJXtRRSyHuLJiJcCweqIhqgn7ROUrod2PILrdUSTLIrlNbq59rrUw/s16000/goi-hoa-don-dien-tu-sinvoice-dai-tra.webp', 'showInlineAds': false}, {'id': '2282573007417621557', 'title': 'G\xf3i 300 h\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed \u0111\u1ea1i tr\xe0', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEizqrGElTn6Y3H1HdfU8JVFcnOtre0xZ-E5VUEq89qFe4g-_JEhkl5Zn2KhiI4zQB6CRJS1B7Cs-Wv6wswRd7-7uBmbHzJNOfduvHV4tjC-g8bn8mplvcIVjSidqhO1og99GoNaEfqvJXtRRSyHuLJiJcCweqIhqgn7ROUrod2PILrdUSTLIrlNbq59rrUw/s16000/goi-hoa-don-dien-tu-sinvoice-dai-tra.webp', 'showInlineAds': false}, {'id': '6523769686416506118', 'title': 'Viettel h\u1ee3p t\xe1c c\xf9ng POS365 tri\u1ec3n khai ho\xe1 \u0111\u01a1n \u0111i\u1ec7n t\u1eed kh\u1edfi t\u1ea1o t\u1eeb m\xe1y t\xednh ti\u1ec1n', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjr9WFA4pCQ_ChL_PBjRRmlR3MXKklzkqkeBWgLgLX5LZMDcsnrRNobXu76xl8c_ZpTUG8u-jTozHUOkFQiNWZsXxoZms9bBz8DfNTeAWB0ccMof-vLZ-fMffGzxTvnfEUEGN5F_ml6BA939q1AA81vWX6JfuhxvAO6iWR_Tenz2DcEAvPmAEo-Yzw9uFt1/s16000/hoa-don-dien-tu-tu-may-tinh-tien-pos365.webp', 'showInlineAds': false}, {'id': '1575106405432023285', 'title': 'H\xf3a \u0111\u01a1n \u0111i\u1ec7n t\u1eed kh\u1edfi t\u1ea1o t\u1eeb m\xe1y t\xednh ti\u1ec1n l\xe0 g\xec?', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgh7pa0GtBRVl7vTWib1SetAm8boub83byY5p_l7k5k4Wev2bs_VCWTm3fzPhJr_rknrDslpWwvdm2oE20qeYwRNbwO5T-DeynSqHI4jPb3JCSjQcnGqNR3IcE8tuqDx8MsndqEob7rH1BGwFwayVhZyrsCTvoZlxVBTcoWerivQUh-x-JjfG8_YT97n5zZ/s16000/HOA-DON-DIEN-TU-KHOI-TAO-TU-MAY-TINH-TIEN-LA-GI.webp', 'showInlineAds': false}], 'footerBylines': [{'regionName': 'footer1', 'items': [{'name': 'author', 'label': 'B\u1edfi'}, {'name': 'timestamp', 'label': 'v\xe0o'}, {'name': 'comments', 'label': 'nh\u1eadn x\xe9t'}, {'name': 'icons', 'label': ''}, {'name': 'share', 'label': ''}]}, {'regionName': 'footer2', 'items': [{'name': 'labels', 'label': '-'}]}], 'allBylineItems': [{'name': 'author', 'label': 'B\u1edfi'}, {'name': 'timestamp', 'label': 'v\xe0o'}, {'name': 'comments', 'label': 'nh\u1eadn x\xe9t'}, {'name': 'icons', 'label': ''}, {'name': 'share', 'label': ''}, {'name': 'labels', 'label': '-'}]}, {'title': 'Copyright', 'type': 'HTML', 'sectionId': 'footer', 'id': 'HTML31'}]}]);
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'header', document.getElementById('HTML1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML142', 'header-image-tin-tuc', document.getElementById('HTML142'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'header-image-2', document.getElementById('HTML2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML4', 'main-menu', document.getElementById('HTML4'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML44', 'main-menu-mau', document.getElementById('HTML44'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML59', 'main-menu-bang-gia', document.getElementById('HTML59'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML45', 'content-register', document.getElementById('HTML45'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML46', 'content-register', document.getElementById('HTML46'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML47', 'content-register', document.getElementById('HTML47'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML48', 'content-register', document.getElementById('HTML48'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML15', 'content-register', document.getElementById('HTML15'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML16', 'content-register', document.getElementById('HTML16'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML17', 'content-register', document.getElementById('HTML17'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML49', 'content-register', document.getElementById('HTML49'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML5', 'slider', document.getElementById('HTML5'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML7', 'pricing', document.getElementById('HTML7'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML8', 'pricing', document.getElementById('HTML8'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML6', 'service', document.getElementById('HTML6'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML13', 'contact', document.getElementById('HTML13'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts3', 'testimonial', document.getElementById('PopularPosts3'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main-1', document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/3789099744-lbx__vi.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/123180807-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogSearchView', new _WidgetInfo('BlogSearch1', 'sidebar-1', document.getElementById('BlogSearch1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'sidebar-1', document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogSearchView', new _WidgetInfo('BlogSearch2', 'sidebar-2', document.getElementById('BlogSearch2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList2', 'sidebar-2', document.getElementById('LinkList2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog2', 'main-2', document.getElementById('Blog2'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/3789099744-lbx__vi.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/123180807-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML31', 'footer', document.getElementById('HTML31'), {}, 'displayModeFull'));
</script>
</body>-->

</html>