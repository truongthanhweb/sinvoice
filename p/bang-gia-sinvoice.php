<?php
include __DIR__ . '../../config/db_connection.php';

// Lấy dữ liệu sản phẩm từ DB
$sql = "SELECT product_id, product_name, product_price, stock_quantity, product_features 
        FROM products 
        ORDER BY product_id ASC";
$resultproducts = $conn->query($sql);
?>
<!DOCTYPE html>
<html data-page-items="single" data-page-type="page" dir="ltr" lang="vi">
<!-- Added by HTTrack -->
<meta
  http-equiv="content-type"
  content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta content="width=device-width,initial-scale=1" name="viewport" />
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <meta content="#f7f7f7" name="theme-color" />
  <meta content="#f7f7f7" name="msapplication-navbutton-color" />
  <meta content="#f7f7f7" name="msapplication-TileColor" />
  <meta content="black" name="apple-mobile-web-app-status-bar-style" />
  <meta content="yes" name="mobile-web-app-capable" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta content="no" name="msapplication-tap-highlight" />
  <meta content="" name="msapplication-square310x310logo" />
  <link href="../favicon.ico" rel="icon shortcut" type="image/x-icon" />
  <link href="#" rel="icon" sizes="192x192" />
  <link href="#" rel="apple-touch-icon" />
  <link href="https://1.bp.blogspot.com/" rel="preconnect" />
  <link href="https://2.bp.blogspot.com/" rel="preconnect" />
  <link href="https://3.bp.blogspot.com/" rel="preconnect" />
  <link href="https://4.bp.blogspot.com/" rel="preconnect" />
  <link href="https://www.blogger.com/" rel="preconnect" />
  <link href="https://cdn.jsdelivr.net/" rel="preconnect" />
  <link href="https://cdnjs.cloudflare.com/" rel="preconnect" />
  <link href="bang-gia-sinvoice.php" rel="canonical" />
  <link
    href="bang-gia-sinvoice40aa.php?m=1"
    media="only screen and (max-width: 640px)"
    rel="alternate" />
  <link
    href="bang-gia-sinvoice40aa.php?m=1"
    media="handheld"
    rel="alternate" />
  <title>Bảng giá Sinvoice</title>
  <meta
    content="Trân trọng gửi đến quý khách hàng bảng giá dịch vụ Hóa đơn điện tử S-Invoice | Các gói hóa đơn điện tử | Phí thiết kế hóa đớn | Phí khởi tạo hóa đơn"
    name="description" />
  <!-- ROBOTS -->
  <meta content="noarchive,follow" name="robots" />
  <meta content="noarchive,follow" name="Googlebot" />
  <!-- OPEN GRAPH -->
  <meta content="summary" name="twitter:card" />
  <meta content="" name="twitter:site" />
  <meta content="" name="twitter:creator" />
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="" property="fb:app_id" />
  <meta content="" property="og:site_name" />
  <meta content="" property="article:publisher" />
  <meta content="article" property="og:type" />
  <meta content="1200" property="og:image:width" />
  <meta content="630" property="og:image:height" />
  <meta
    content="https://www.sinvoice.vn/p/bang-gia-sinvoice.php"
    property="og:url" />
  <meta content="Bảng giá Sinvoice" property="og:title" />
  <meta
    content="Trân trọng gửi đến quý khách hàng bảng giá dịch vụ Hóa đơn điện tử S-Invoice | Các gói hóa đơn điện tử | Phí thiết kế hóa đớn | Phí khởi tạo hóa đơn"
    property="og:description" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBBc4.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    as="font"
    crossorigin=""
    href="http://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2"
    rel="preload"
    type="font/woff2" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
    rel="stylesheet" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.css"
    rel="stylesheet" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.transitions.min.css"
    rel="stylesheet" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css"
    rel="stylesheet" />
  <link
    href="../cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
    rel="stylesheet" />
  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--[if lt IE 9
      ]><script src="/w/resources/lib/html5shiv/html5shiv.js"></script
    ><![endif]-->
  <style>
    /* <![CDATA[ */
    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format("woff2");
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
        U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format("woff2");
      unicode-range: U+0370-03FF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format("woff2");
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format("woff2");
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
        U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: local("Roboto"), local("Roboto-Regular"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
        U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format("woff2");
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
        U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format("woff2");
      unicode-range: U+0370-03FF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format("woff2");
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format("woff2");
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
        U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: local("Roboto Medium"), local("Roboto-Medium"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
        U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format("woff2");
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
        U+A640-A69F, U+FE2E-FE2F;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format("woff2");
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format("woff2");
      unicode-range: U+1F00-1FFF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format("woff2");
      unicode-range: U+0370-03FF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format("woff2");
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format("woff2");
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
        U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: local("Roboto Bold"), local("Roboto-Bold"),
        url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
        U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
        U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* ]]> */
  </style>
  <style>
    /* <![CDATA[ */
    .has-svg-icon:before {
      background-size: 100%;
      content: "";
      display: inline-block;
      vertical-align: middle;
      width: 24px;
      height: 24px;
    }

    .reset-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 24 24' width='24px'%3E%3Cpath fill='%23707070' d='M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .copy-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'%3E%3Cpath fill='%23707070' d='M3.9,12C3.9,10.29 5.29,8.9 7,8.9H11V7H7A5,5 0 0,0 2,12A5,5 0 0,0 7,17H11V15.1H7C5.29,15.1 3.9,13.71 3.9,12M8,13H16V11H8V13M17,7H13V8.9H17C18.71,8.9 20.1,10.29 20.1,12C20.1,13.71 18.71,15.1 17,15.1H13V17H17A5,5 0 0,0 22,12A5,5 0 0,0 17,7Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .facbook-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 24 24' width='24px'%3E%3Cpath fill='%233b5998' d='M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .twitter-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 24 24' width='24px'%3E%3Cpath fill='%231da1f2' d='M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .pinterest-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 24 24' width='24px'%3E%3Cpath fill='%23e60023' d='M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H9.29C9.69,20.33 10.19,19.38 10.39,18.64L11.05,16.34C11.36,16.95 12.28,17.45 13.22,17.45C16.17,17.45 18.22,14.78 18.22,11.45C18.22,8.28 15.64,5.89 12.3,5.89C8.14,5.89 5.97,8.67 5.97,11.72C5.97,13.14 6.69,14.89 7.91,15.45C8.08,15.56 8.19,15.5 8.19,15.34L8.47,14.28C8.5,14.14 8.5,14.06 8.41,14C7.97,13.45 7.69,12.61 7.69,11.78C7.69,9.64 9.3,7.61 12.03,7.61C14.42,7.61 16.08,9.19 16.08,11.5C16.08,14.11 14.75,15.95 13.03,15.95C12.05,15.95 11.39,15.11 11.55,14.17C11.83,13.03 12.39,11.83 12.39,11C12.39,10.22 12,9.61 11.16,9.61C10.22,9.61 9.39,10.61 9.39,11.95C9.39,12.83 9.66,13.39 9.66,13.39L8.55,18.17C8.39,19 8.47,20.25 8.55,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .linkedin-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg height='24px' viewBox='0 0 24 24' width='24px' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%230077B5' d='M 20 2 L 4 2 C 2.898438 2 2 2.898438 2 4 L 2 20 C 2 21.101563 2.898438 22 4 22 L 20 22 C 21.101563 22 22 21.101563 22 20 L 22 4 C 22 2.898438 21.101563 2 20 2 Z M 8.101563 18 L 5 18 L 5 9.398438 L 8.101563 9.398438 Z M 6.5 8.398438 C 5.601563 8.398438 5 7.800781 5 7 C 5 6.199219 5.601563 5.601563 6.601563 5.601563 C 7.5 5.601563 8.101563 6.199219 8.101563 7 C 8.101563 7.800781 7.5 8.398438 6.5 8.398438 Z M 19 18 L 15.898438 18 L 15.898438 13.300781 C 15.898438 12 15.101563 11.699219 14.800781 11.699219 C 14.5 11.699219 13.5 11.898438 13.5 13.300781 C 13.5 13.5 13.5 18 13.5 18 L 10.398438 18 L 10.398438 9.398438 L 13.5 9.398438 L 13.5 10.601563 C 13.898438 9.898438 14.699219 9.398438 16.199219 9.398438 C 17.699219 9.398438 18.898438 10.601563 18.898438 13.300781 L 18.898438 18 Z '%3E%3C/path%3E%3C/svg%3E");
    }

    .email-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 24 24' width='24px'%3E%3Cpath fill='%23fb8f3d' d='M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z'%3E%3C/path%3E%3C/svg%3E");
    }

    .angle-left-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 608 1280' width='24px'%3E%3Cpath fill='%23212529' d='M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z'%3E%3C/path%3E%3C/svg%3E%0A");
    }

    .angle-right-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 0 608 1280' width='24px'%3E%3Cg transform='translate(608 0) scale(-1 1)'%3E%3Cpath fill='%23212529' d='M595 288q0 13-10 23L192 704l393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10L23 727q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
    }

    .comment-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='%23707070' viewBox='0 0 24 24'%3E%3Cpath d='M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.11 18 22 17.11 22 16V4C22 2.9 21.11 2 20 2M20 16H6L4 18V4H20M17 11H15V9H17M13 11H11V9H13M9 11H7V9H9'/%3E%3C/svg%3E");
    }

    .share-icon:before {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='%23707070' viewBox='0 0 24 24'%3E%3Cpath d='M18,16.08C17.24,16.08 16.56,16.38 16.04,16.85L8.91,12.7C8.96,12.47 9,12.24 9,12C9,11.76 8.96,11.53 8.91,11.3L15.96,7.19C16.5,7.69 17.21,8 18,8A3,3 0 0,0 21,5A3,3 0 0,0 18,2A3,3 0 0,0 15,5C15,5.24 15.04,5.47 15.09,5.7L8.04,9.81C7.5,9.31 6.79,9 6,9A3,3 0 0,0 3,12A3,3 0 0,0 6,15C6.79,15 7.5,14.69 8.04,14.19L15.16,18.34C15.11,18.55 15.08,18.77 15.08,19C15.08,20.61 16.39,21.91 18,21.91C19.61,21.91 20.92,20.61 20.92,19A2.92,2.92 0 0,0 18,16.08Z'/%3E%3C/svg%3E");
    }

    /* ]]> */
  </style>
  <style>
    /* <![CDATA[ */
    :root {
      --black: #212529;
      --blue: rgb(26, 115, 232);
      --cyan: #17a2b8;
      --dark: #343a40;
      --gray50: rgb(154, 160, 166);
      --gray60: #999;
      --gray90: #e5e5e5;
      --green: #28a745;
      --indigo: #6610f2;
      --purple: #6f42c1;
      --pink: #e83e8c;
      --red: #dc3545;
      --orange: #fd7e14;
      --yellow: #ffc107;
      --teal: #20c997;
      --tomato: #ff6347;
      --primary: #007bff;
      --secondary: #DB562B;
      --success: #0f9d58;
      --info: #17a2b8;
      --danger: #dc3545;
      --light: #f8f9fa;
      --hover: #007bc7;
      --warning: #ffc107;
      --white: #fff
    }

    * {
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
      text-rendering: geometricPrecision
    }

    body,
    input,
    button,
    textarea,
    pre,
    form {
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    body:not(.overflow) {
      overflow-y: auto
    }

    svg {
      vertical-align: text-bottom;
      fill: hsl(0, 0%, 53.3%)
    }

    a {
      color: #333
    }

    a:hover {
      color: #ea0a2a !important
    }

    a,
    a:hover {
      text-decoration: none
    }

    iframe,
    img {
      border: none
    }

    iframe {
      width: 100%
    }

    img {
      max-width: 100%;
      height: auto
    }

    [data-view-type=mobile] a:hover {
      cursor: default;
      outline: none
    }

    [data-view-type=desktop] .has-hover:hover {
      cursor: pointer
    }

    .overlay {
      background: rgba(0, 0, 0, 0.502);
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      z-index: 8;
      transition: opacity .05s cubic-bezier(0.4, 0.0, 0.2, 1);
      opacity: 1
    }

    .flex {
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex
    }

    .align-center {
      -webkit-align-items: center;
      align-items: center
    }

    .flex-align {
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center
    }

    .flex-center {
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      justify-content: center
    }

    .flex-row {
      -js-display: flex;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex-pack: justify;
      justify-content: space-between;
      width: 100%
    }

    .flex-grow {
      -ms-flex: 1;
      flex: 1;
      -ms-flex-negative: 1;
      -ms-flex-preferred-size: auto !important
    }

    .flex-left {
      margin-right: auto
    }

    .flex-right {
      margin-left: auto
    }

    .hidden,
    span.blog-admin,
    [data-allow-comments="false"] a.comment-reply,
    .modal--target {
      display: none
    }

    .spinner,
    .loading {
      position: relative
    }

    .spinner:before {
      content: '';
      box-sizing: border-box;
      position: absolute;
      top: calc(50% - 15px);
      left: calc(50% - 15px);
      width: 34px;
      height: 34px;
      border-radius: 50%;
      border: 2px solid #999;
      border-right-color: transparent;
      animation: spinner .9s linear infinite;
      -webkit-animation: spinner .9s ease-in-out infinite
    }

    .loading:before {
      position: absolute;
      z-index: 99;
      pointer-events: none;
      top: calc(50% - 15px);
      left: calc(50% - 15px);
      content: '';
      border-top: 2px solid rgba(0, 0, 0, 0.1) !important;
      border-right: 2px solid rgba(0, 0, 0, 0.1) !important;
      border-bottom: 2px solid rgba(0, 0, 0, 0.1) !important;
      opacity: .8;
      border-left: 2px solid #fff;
      animation: spin .6s infinite linear;
      border-radius: 50%;
      width: 30px;
      height: 30px
    }

    @keyframes spinner {
      to {
        transform: rotate(360deg)
      }
    }

    @-webkit-keyframes spinner {
      to {
        -webkit-transform: rotate(360deg)
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    @-webkit-keyframes spin {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    html,
    body {
      height: 100%
    }

    body {
      width: 100%;
      margin-top: 85px
    }

    .subtitle {
      font-size: 20px;
      text-transform: uppercase;
      margin-bottom: 15px;
      text-align: center
    }

    p {
      font-size: 1.1em
    }

    a {
      text-decoration: none;
      transition: all 0.3s;
      -webkit-transition: all 0.3s
    }

    a:hover {
      color: #fff;
      text-decoration: none
    }

    a:focus {
      outline: none;
      text-decoration: none
    }

    ul,
    li {
      margin: 0;
      padding: 0
    }

    fieldset {
      border: 0 none;
      margin: 0 auto;
      padding: 0
    }

    .btn.active.focus,
    .btn.active:focus,
    .btn.focus,
    .btn.focus:active,
    .btn:active:focus,
    .btn:focus {
      outline: none
    }

    .btn,
    input[type='submit'] {
      display: inline-block;
      background: transparent;
      padding: 10px 25px;
      border-radius: 25px;
      transition: 0.3s;
      -moz-transition: 0.3s;
      -webkit-transition: 0.3s;
      letter-spacing: 1px;
      border: none;
      text-transform: uppercase;
      font-weight: 600;
      color: #fff;
      background-color: #ea0a2a
    }

    .btn:hover,
    input[type="submit"]:hover {
      color: #fff !important;
      background: #696969
    }

    .btn.btn-reverse {
      background: #7c0
    }

    .btn.btn-reverse:hover {
      color: #333;
      background-color: #fff
    }

    .btn.btn-white {
      color: #333;
      background-color: #fff
    }

    .btn.btn-white:hover {
      color: #fff;
      background: #7c4
    }

    .btn.btn-lg {
      height: 50px;
      padding: 0 30px;
      font-size: 20px;
      font-weight: bold;
      line-height: 50px;
      border-radius: 7px
    }

    .section-big {
      padding: 0px 0
    }

    .section-small {
      padding: 50px 0
    }

    .section-title {
      margin: 20px auto;
      max-width: 800px;
      margin-bottom: 30px
    }

    .section-title.white h2 {
      color: #fff
    }

    .section-title h2 {
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 25px;
      line-height: 30px;
      margin-top: 0
    }

    .section-title p {
      margin-top: 25px
    }

    .center {
      text-align: center
    }

    #preloader {
      position: fixed;
      left: 0;
      top: 0;
      z-index: 99999;
      width: 100%;
      height: 100%;
      overflow: visible;
      background-image: url(../cdn.jsdelivr.net/gh/thietkeblogspot/images/preloader.gif);
      background-position: center center;
      background-repeat: no-repeat;
      background-color: #fff
    }

    .table {
      display: table;
      width: 100%;
      height: 100%;
      position: relative;
      z-index: 1
    }

    .table-cell {
      display: table-cell;
      text-align: center;
      vertical-align: middle
    }

    img {
      max-width: 100%
    }

    .space {
      height: 30px
    }

    .menu-area {
      background: #fff
    }

    .sticky-menu {
      border-bottom: 1px solid #eaeaea
    }

    .sticky-menu .mainmenu {
      margin-top: 0
    }

    .navbar {
      margin-bottom: 0;
      border: 0
    }

    .nav>li>a {
      font-size: 1.1em
    }

    .nav>li>a:hover,
    .nav>li>a:active,
    .nav>li>a:focus {
      background: none;
      border-bottom: 5px solid #ea0a2a;
      color: #ea0a2a;
    }

    .navbar_right li.active a {
      border-bottom: 5px solid #ea0a2a;
      color: #ea0a2a;
      font-weight: bold
    }

    .navbar-toggle .icon-bar {
      background: #ea0a2a
    }

    .slider-area {
      background: #ea0a2a;
      min-height: auto
    }

    .slider-area .carousel,
    .slider-area .carousel-inner,
    .slider-area .item {
      height: 100%
    }

    @media (min-width:992px) {
      .slider-area {
        height: auto
      }
    }

    .intro-text {
      text-align: left;
      color: #fff
    }

    .intro-text h1 {
      color: inherit;
      font-size: 47px;
      font-weight: 600;
      line-height: 50px;
      margin-bottom: 20px;
      margin-top: 10px
    }

    .intro-text p {
      font-size: 24px;
      color: inherit
    }

    .line-through {
      text-decoration: line-through
    }

    .intro-text ul {
      font-size: 1.2em;
      color: inherit;
      list-style-type: none
    }

    .intro-text .btn {
      margin-top: 30px
    }

    @media(max-width:991px) {
      .intro-text {
        margin: 80px auto;
        text-align: center
      }

      .hero-overlay h2 {
        margin-top: 0;
        font-size: 1.5em
      }
    }

    #carousel-example-generic .animated {
      animation-delay: .5s
    }

    .hero-boxes {
      padding-top: 50px
    }

    .hero-box {
      background: #f5f5f5;
      background-color: #288feb;
      text-align: center;
      position: relative;
      margin-top: 30px;
      padding: 50px;
      border-radius: 10px
    }

    .hero-box img {}

    .hero-overlay {
      position: absolute;
      padding: 30px;
      left: 0;
      top: 0;
      width: 100%;
      height: 0;
      background-color: #f45e58;
      color: #fff;
      border-radius: 10px;
      opacity: 0;
      transition: 0.5s cubic-bezier(0.250, 0.250, 0.115, 1.445)
    }

    .hero-overlay h2 {
      color: #fff
    }

    .hero-box:hover .hero-overlay {
      opacity: 1;
      height: 100%
    }

    .price-item {
      padding: 0 15px 30px;
      margin: 0;
      text-align: center;
      position: relative;
      transition: 0.3s ease-out;
      background-color: #f5f5f5;
      border-radius: 10px
    }

    .price-item ul {
      margin-left: 0;
      list-style: none;
      padding-left: 0
    }

    .price-item .info {
      border-radius: 10px 10px 0 0
    }

    .price-item.featured .info {
      background: #ea0a2a;
      margin-left: -15px;
      margin-right: -15px
    }

    .price-item p.level {
      font-size: 22px;
      padding-top: 15px;
      letter-spacing: 1px
    }

    .price-item p.desc {
      font-size: 12px;
      margin-bottom: 0
    }

    .price-item p.price {
      font-size: 14px;
      margin: 0;
      padding-bottom: 10px;
      color: #333
    }

    .price-item p.price .dollar {
      font-size: 22px;
      position: relative;
      top: -30px
    }

    .price-item p.price .number {
      font-size: 50px;
      font-weight: 700
    }

    .price-item .features {
      margin: 10px 0
    }

    .price-item.featured p.level,
    .price-item.featured p.price {
      color: #fff
    }

    .price-item .features li {
      padding: 2px 0
    }

    .price-item a.btn {
      display: inline-block
    }

    .action-area {
      color: #fff;
      position: relative;
      background: #288feb
    }

    .action-area h2 {
      color: #fff;
      margin: 0
    }

    .service-area {
      padding-bottom: 0px
    }

    .home-services .service-box {
      -webkit-transform: translateZ(0);
      text-align: center;
      transition: 0.3s ease-out;
      margin-bottom: 50px
    }

    .service-box p {
      text-align: left
    }

    .home-services .service-box i:before {
      font-size: 40px;
      display: block;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both
    }

    .home-services .service-box .read_service {
      text-decoration: none
    }

    .home-services .service-box .read_service:before {
      margin-left: -100%;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transition: all 0.5s;
      transition: all 0.5s;
      -webkit-transform: translateZ(0)
    }

    .home-services .service-box i.fa {
      color: #288feb;
      margin-top: 15px;
      margin-bottom: 25px
    }

    .home-services .service-box h3 {
      position: relative;
      margin-top: 30px
    }

    .home-services .service-box:hover i.fa:before {
      -webkit-backface-visibility: visible;
      -ms-backface-visibility: visible;
      backface-visibility: visible;
      -webkit-animation-name: flip;
      animation-name: flip
    }

    .home-services .service-box:hover .read_service:before {
      opacity: 1;
      filter: alpha(opacity=100);
      margin-left: 0%
    }

    .testimonial-area {
      position: relative;
      background-color: #fcebee
    }

    .testimonial-area .section-title h2,
    .testimonial-area .section-title p {
      color: #000
    }

    .testimonial-content {
      text-align: right
    }

    .single-testimonial {
      background-color: #fff;
      padding: 30px;
      margin: 15px;
      border-radius: 20px;
      overflow: hidden
    }

    .ratings i.fa {
      color: #f45e58
    }

    .ratings {
      margin-bottom: 20px
    }

    i.fa.fa-quote-left {
      color: #288feb
    }

    .single-testimonial i.fa {
      font-size: 20px;
      display: inline-block;
      float: left;
      margin-right: 10px
    }

    .testimonial-area .subtitle,
    .testimonial-area h2 {
      margin-top: 0
    }

    .single-testimonial p {
      line-height: 25px
    }

    .single-testimonial h4 {
      margin-top: 40px;
      margin-bottom: 5px;
      font-weight: 500;
      letter-spacing: 1px
    }

    .single-testimonial .desg {
      font-size: 14px
    }

    .owl-theme .owl-controls {
      margin-top: 30px
    }

    .owl-theme .owl-controls .owl-page span {
      display: block;
      width: 20px;
      height: 5px;
      margin: 5px 7px;
      filter: Alpha(Opacity=50);
      opacity: .5;
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
      background: #333
    }

    .owl-theme .owl-controls .owl-buttons div {
      font-size: 25px;
      background: none;
      padding: 5px
    }

    .why-choose-area .container {
      max-width: 1000px
    }

    .choose-box {
      margin-bottom: 30px
    }

    .why-choose-area img {
      width: 100%;
      border-radius: 10px
    }

    .choose-box i.fa {
      position: relative;
      font-size: 30px;
      width: 60px
    }

    .choose-box.left {
      text-align: right
    }

    .choose-box.left i.fa {
      float: right
    }

    .choose-box.right {
      text-align: left
    }

    .choose-box.right i.fa {
      float: left
    }

    .choose-content {
      overflow: hidden
    }

    .choose-content h3 {
      margin-top: 0;
      position: relative
    }

    .subscribe-area {
      background-color: #288feb;
      color: #fff
    }

    .subscribe-box {
      text-align: center;
      position: relative
    }

    .subscribe-box h2 {
      font-size: 40px;
      margin-top: 0;
      margin-bottom: 30px;
      color: #fff
    }

    .subscribe-box p {
      font-size: 20px;
      margin-bottom: 20px
    }

    .newsletter-form {
      max-width: 700px;
      margin: auto
    }

    .newsletter-form input {
      display: inline-block;
      height: 50px;
      width: 100%;
      padding: 5px 10px;
      background-color: #fff;
      border-radius: 5px
    }

    .newsletter-form .btn {
      height: 50px;
      padding: 0 30px;
      font-size: 20px;
      font-weight: bold;
      border: none;
      position: relative;
      display: inline-block;
      margin-top: 20px;
      transition: 0.3s;
      -moz-transition: 0.3s;
      -webkit-transition: 0.3s
    }

    .newsletter-form .btn i.fa {
      margin-right: 20px
    }

    .subscribe-area .error {
      text-align: left
    }

    .mailchimp-alerts {
      display: block;
      width: 100%;
      text-align: left
    }

    .mailchimp-alerts div {
      background: #f5f5f5;
      margin-top: 15px;
      line-height: 30px;
      display: none;
      padding: 0 20px;
      position: relative
    }

    .mailchimp-alerts div:before {
      position: absolute;
      content: '';
      left: 17px;
      top: -7px;
      width: 15px;
      height: 15px;
      transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      -moz-transform: rotate(45deg);
      -webkit-transform: rotate(45deg)
    }

    .mailchimp-submitting {}

    .mailchimp-success {
      color: green
    }

    .mailchimp-error {
      color: red
    }

    .client-area {
      padding-bottom: 0
    }

    .owl-client {}

    .owl-client .item {
      margin: 0 7px
    }

    .owl-client .item img {
      width: auto;
      max-width: 100%;
      padding: 0 15px
    }

    .form-row {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      margin-right: -15px;
      margin-left: -15px;
    }

    .success {
      background: #fff none repeat scroll 0 0;
      color: #50B948;
      font-weight: 700;
      padding: 20px;
      text-align: center
    }

    .error {
      background: #fff none repeat scroll 0 0;
      color: #ff0000;
      font-weight: 700;
      padding: 20px;
      text-align: center
    }

    .contact-info {
      margin-bottom: 30px
    }

    .pb-20 {
      padding-bottom: 20px
    }

    .address {
      background: #f5f5f5;
      padding: 20px;
      border-radius: 10px
    }

    .address h3 {
      margin-top: 0
    }

    .address-box {
      margin-bottom: 10px
    }

    .address-box a:hover {
      color: #f45e58
    }

    .address-box p,
    .address-box p a {
      color: inherit;
      margin: 0
    }

    .social-links {
      overflow: hidden;
      margin-top: 20px
    }

    .social-links li {
      list-style: none;
      float: left;
      margin-right: 10px
    }

    .social-links li a i {
      width: 55px;
      height: 45px;
      line-height: 45px;
      text-align: center;
      transition: 0.3s;
      -moz-transition: 0.3s;
      -webkit-transition: 0.3s;
      color: #fff;
      background-color: #288feb;
      font-size: 25px;
      border-radius: 5px
    }

    .social-links li a:hover i {
      background-color: #f45e58
    }

    .footer-area {
      background: #596164;
      text-align: center;
      height: auto;
      position: absoluted
    }

    .footer-area p {
      margin: 0;
      line-height: 18px
    }

    .quick_action a {
      display: -webkit-flex !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -webkit-align-items: center;
      -ms-flex-align: center;
      align-items: center;
      justify-content: center;
      border-radius: 20px;
      font-size: 13px !important;
      height: 32px;
      color: #fff !important;
    }

    @media only screen and (max-width: 767px) {
      .quick_action a {
        font-size: 11px !important;
      }
    }

    .footer .address p,
    .footer .email,
    .footer ul li a {
      color: #fff;
      font-weight: 300;
      font-size: small;
    }

    .header .top_search .form-group {
      margin-bottom: 0
    }

    .fixed-header {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 9;
      background-color: #fff;
      width: 100%;
      border-bottom: 1px solid #eaeaea
    }

    @media (min-width:768px) {
      .header {
        padding-bottom: 0;

        .navbar_right li.active a {
          border-bottom: 3px solid #ea0a2a;
          color: #ea0a2a;
          font-weight: bold;
        }
      }

      .header .logo {
        padding-top: 25px
      }

      .header .logo img {
        max-height: 60px
      }

      .header_right .main_menu,
      .header_right .top_menu {
        float: right
      }

      .header_right .main_menu {
        width: 100%
      }

      .header_right .top_menu {
        padding-right: 7px
      }

      .top_search a {
        display: block
      }

      .top_search .quick_search {
        display: none;
        left: -185px;
        position: absolute;
        top: 14px;
        z-index: 9
      }
    }

    .header .logo {
      left: 15px;
      position: absolute;
      top: 55px;
      width: auto
    }

    .header .logo img {
      max-height: 40px
    }

    .header .top_menu {
      font-size: 12px;
      text-align: right
    }

    .header .top_menu>li:not(.top_phone) {
      padding: 9px 0
    }

    .top_search a {
      display: none !important
    }

    .top_search .quick_search {
      display: block;
      padding: 12px 15px
    }
    }

    .footer .foot-contact,
    .footer .foot-links,
    .footer .foot-social {
      position: relative;
      min-height: 1px
    }

    @media (max-width:520px) {
      .header .logo {
        top: 50px;
      }

      .header .top_menu:after,
      .header .top_menu:before {
        content: " ";
        display: table
      }

      .header .top_menu:after {
        clear: both
      }

      .header .top_menu .top_phone {
        display: block;
        text-align: right
      }

      .header .top_menu .top_phone.top_cskh {
        display: none;
        text-align: right
      }

      .header .top_menu .top_auth {
        float: left
      }

      .header .top_menu .top_lang {
        float: right
      }
    }

    .footer {
      color: #fff;
      padding: 20px 0
    }

    @media (min-width:768px) {
      .footer .foot-contact {
        float: left;
        padding-left: 0;
        padding-right: 15px;
        width: 33.33333%
      }

      .footer .foot-links {
        float: left;
        padding-left: 60px;
        padding-right: 0;
        width: 33.33333%;
        text-align: left;
      }

      .footer .foot-social {
        float: left;
        padding-left: 20px;
        padding-right: 0;
        width: 33.33333%;
        top: 0px;
      }
    }

    .footer .title2 {
      font-size: 18px;
      font-weight: 700
    }

    .footer .title_footer {
      font-size: 18px;
      font-weight: 500;
      margin-bottom: 20px;
      text-align: left
    }

    .footer .tit {
      margin-top: 15px;
      margin-bottom: 0
    }

    .footer .hot_line {
      font-size: 14px;
      margin-bottom: 20px;
      text-align: left;
      color: #fff
    }

    .footer .address p {
      margin: 14px 0
    }

    .footer .address .des {
      margin-bottom: -16px
    }

    .footer ul li {
      list-style: none;
      margin-bottom: 12px
    }

    .footer ul li a:hover {
      color: #22a0e4
    }

    .footer .footer_icon a:last-child {
      margin-right: 0
    }

    .footer .footer_icon i {
      color: #ffffff;
      font-size: 25px
    }

    .footer .footer_icon a {
      display: inline-block;
      margin-right: 5px
    }

    .footer .footer_icon p {
      width: 100%;
      text-align: left;
      color: #FFF;
      font-weight: 700
    }

    .footer .icon_all {
      width: 100%
    }

    .footer .footer_icon .title_footer {
      margin-bottom: 20px
    }

    #back-to-top {
      display: none;
      position: fixed;
      bottom: 100px;
      right: 25px;
      width: 50px;
      height: 50px;
      background: rgba(0, 0, 0, .6);
      border-radius: 50%;
      text-align: center;
      cursor: pointer;
      z-index: 9;
      font-weight: 300;

      .quick_action li:first-child {
        margin-right: 15px
      }

      #back-to-top i {
        font-size: 26px;
        line-height: 43px;
        color: #a1a1a1
      }
    }

    .footer .container a {
      color: #fff
    }

    .quick_action li:first-child a {
      background: #ea0a2a;
      margin-right: 5px;
      border-color: #696969
    }

    .quick_action li:nth-child(2) a {
      background: #696969;
      margin-right: 5px;
      border-color: #ea0a2a
    }

    .quick_action li:last-child a {
      background: #ea0a2a;
      border-color: #696969
    }

    .secondary-menu {
      background: #d2edf7;
      font-weight: bold
    }

    .secondary-menu a,
    .main-menu a {
      font-size: 1.2em !important;
    }

    .secondary-menu .navbar-nav li.active a,
    .main-menu .navbar-nav li.active a,
    .nav_custom_menu li.active a {
      border-bottom: 4px solid #ea0a2a;
      color: #ea0a2a !important;
      font-weight: bold
    }

    .search-form {
      position: relative
    }

    .search-form input[type=search] {
      padding-left: 34px
    }

    .search-form button[type=submit] {
      background: transparent;
      padding: 0;
      border: 0;
      outline: 0;
      position: absolute;
      top: 0;
      width: 34px;
      height: 34px;
    }

    .list-group {
      padding-right: 10px;
      border-right: 1px solid #b9c1c9
    }

    .list-group a:not(:hover):not(:focus) {
      color: #202224
    }

    .list-group a:hover,
    .list-group a:focus,
    .list-group li.active a {
      color: #4990e2 !important;
    }

    .list-group a:hover:before,
    .list-group li.active a:before {
      content: "»"
    }

    .list-group ul li {
      padding: 12px 0;
      border-bottom: 1px solid #efefef;
      list-style: none;
    }

    .table-doc-wrapper {
      margin-top: 25px
    }

    .accordion-item.panel {
      -webkit-box-shadow: none;
      box-shadow: none;
    }

    .accordion-item {
      margin-bottom: 5px;
      border-radius: 0;
    }

    .accordion-item h2 {
      margin: 0;
      padding: 12px 24px;
      background-color: #e7e8ea;
    }

    .accordion-item .accordion-link,
    .accordion-item h2 a {
      font-weight: 400;
      color: #333;
      display: table;
      width: 100%;
    }

    .accordion-item .panel-title {
      display: table-cell;
      vertical-align: middle;
      float: none;
      padding: 0;
      font-size: 16px;
      line-height: 1.3;
    }

    .accordion-item .panel-instruction {
      display: table-cell;
      vertical-align: middle;
      text-align: right;
      font-size: 14px;
      color: #96989d;
    }

    .accordion-item .panel-collapse h2 {
      margin: 0;
      padding: 10px;
      background-color: white;
      font-size: 16px;
    }

    .list_text_content .list_one {
      padding-bottom: 20px;
      font-weight: 400;
    }

    .list_text_content .text_top {
      font-size: 18px;
    }

    .text_top a:not(:hover) {
      color: #333
    }

    .btn-download {
      border: 1px solid transparent;
      display: inline-block;
      font-weight: 400;
      margin-bottom: 0;
      text-align: center;
      touch-action: manipulation;
      -moz-user-select: none;
      user-select: none;
      border-radius: 30px;
      -webkit-box-shadow: 1px 1px 1px #888;
      box-shadow: 1px 1px 1px #888;
      padding: 5px 20px;
    }

    .btn-download:not(:hover):not(:focus):not(:active) {
      background: #ea0a2a;
      color: #fff !important
    }

    .btn-download:hover,
    .btn-download:focus,
    .btn-download:active {
      background: #696969;
      color: #fff !important
    }

    .box_new:not(:last-child) {
      margin-bottom: 15px;
      padding-bottom: 15px;
      border-bottom: 1px solid #ddd
    }

    .box_new:last-child {
      margin-bottom: 15px
    }

    /*Edited 07/11/2021*/
    .full-screen-me {
      height: 200mm
    }

    .color-primary {
      color: #ea0a2a
    }

    .icon-play {
      font-size: 90px;
      color: #fff;
      top: 50%;
      left: 50%;
      position: absolute;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }

    .icon-play:hover {
      color: red
    }

    .img-responsive {
      padding-top: 5px
    }

    .ms-icon-feature .ms-icon-feature-icon {
      text-align: center;
      vertical-align: middle;
      padding: 10px 20px;
    }

    .ms-icon.ms-icon-lg {
      width: 80px;
      height: 80px;
      line-height: 80px;
      font-size: 40px;
      border-radius: 40px;
    }

    .ms-icon {
      width: 40px;
      height: 40px;
      font-size: 18px;
      background-color: #ffffff;
      color: #d80d0d;
      border-radius: 2px;
      border: 3px solid #ea0a2a;
      display: inline-block;
      margin: 0 5px 5px 0;
      text-align: center;
      line-height: 2.2;
    }

    //small ms icon

    .ms-icon-feature-sm .ms-icon-feature-icon-sm {
      vertical-align: middle;
      padding-right: 20px;
    }

    .ms-icon-sm.ms-icon-small {
      width: 30px;
      height: 30px;
      line-height: 30px;
      font-size: 17px;
      border-radius: 15px;
    }

    .ms-icon-sm {
      width: 15px;
      height: 15px;
      font-size: 10px;
      background-color: #ffffff;
      color: #d80d0d;
      border-radius: 2px;
      border: 1px solid #ea0a2a;
      display: inline-block;
      margin: 0 3px 3px 0;
      text-align: center;
      line-height: 1.1;
    }

    /*Edited 30/10/2020 */
    .quotComments {
      background: none 0% 0% / 42px 42px rgb(255, 253, 201);
      border-radius: 4px;
      border: 1px dashed red;
      color: #4c4c4c;
      font-family: inherit;
      font-stretch: inherit;
      line-height: 21px;
      margin-bottom: 20px;
      margin-top: 15px;
      padding: 10px;
      text-align: justify;
      vertical-align: baseline;
    }

    .color-warning {
      color: #f87606;
    }

    .divPostBody {
      font-size: medium;
      text-align: justify;
    }

    .ulPostBody {
      margin-left: 20px;
      font-size: 1.1em
    }

    .navbar-brand {
      height: 15px
    }

    .textRight {
      text-align: right
    }

    .card {
      background-color: #ffffff;
      border: none;
      -webkit-transition: .2s;
      -moz-transition: .2s;
      transition: .2s
    }

    .card-header.pd-0 {
      padding: 0;
      border: 0;
      border-radius: unset
    }

    .card-body {
      background: #fff;
      padding: 13px
    }

    .card-title {
      font-size: medium;
      font-weight: 700
    }

    .flex {
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex
    }

    .featured-image {
      position: relative;
      overflow: hidden
    }

    .featured-image a {
      background: #fcebee;
      display: flex;
      position: relative;
      padding-bottom: 62.5%;
      width: 100%;
      height: 100%;
      color: inherit
    }

    .featured-image img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -o-object-fit: cover;
      object-fit: cover;
      -webkit-animation: fadeInImages 0.5s ease;
      animation: fadeInImages 0.5s ease
    }

    [data-view-type=desktop] .featured-image a {
      transition: transform .5s ease-out .1s
    }

    [data-view-type=desktop] .featured-image:hover .social-icons {
      text-align: right;
    }

    .social-icons a {
      background: #fff;
      box-shadow: 0 0 21px 0 rgba(0, 0, 0, 0.05);
      width: 40px;
      height: 40px;
      display: inline-block;
      text-align: center;
      line-height: 50px;
      margin: 0 0.3rem;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .text-blue {
      color: #21b6ff !important;
      color: var(--text-blue) !important;
    }

    .entry-title {
      font-size: 30px;
      font-weight: 700
    }

    .entry-subtitle {
      font-size: 1.3em
    }

    .table-bordered {
      text-align: center
    }

    .table-bordered th,
    td {
      text-align: center;
      vertical-align: middle
    }

    .table-bordered thead {
      background-color: #ea0a29;
      color: white;
    }

    .col-num {
      width: 5%;
      text-align: center;
      vertical-align: middle
    }

    .col-id {
      width: 12%;
      text-align: center;
      vertical-align: middle
    }

    .col-date {
      width: 12%;
      text-align: center;
      vertical-align: middle
    }

    .col-comp {
      width: 15%;
      text-align: center;
      vertical-align: middle
    }

    .col-save {
      width: 10%;
      text-align: center;
      vertical-align: middle
    }


    //CSS Comments
    #comment-editor {
      min-height: 89.5px
    }

    .thread-locked-alert {
      background-color: #f2f6fb;
      margin: 20px 0 0;
      padding: 15px;
      position: relative;
      border: 1px solid #dadce0;
      border-radius: 3px;
      overflow-x: hidden
    }

    .comment {
      list-style-type: none;
      position: relative
    }

    .comment-replybox-single>.commentForm,
    .comment:not(:last-child),
    #comments .loadmore,
    #comments .showless,
    .calcel-reply {
      margin-bottom: 15px
    }

    .comment>.avatar-image-container {
      position: absolute;
      height: 35px;
      width: 35px
    }

    .comment-replies .avatar-image-container {
      height: 30px;
      width: 30px
    }

    .comment .avatar-image-container img {
      border-radius: 50%;
      height: 100%;
      width: 100%
    }

    .avatar-image-container img {
      background: url(../blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEifmQfLokTY-KuNcqzpVjGpLkOmKPOkNdYBnRKugws/s1600/no-image.png) no-repeat center
    }

    .avatar-image-container span {
      bottom: 15px;
      position: absolute;
      right: -6px;
      display: inline-block;
      height: 15px;
      width: 15px
    }

    .comment-replies .avatar-image-container span {
      bottom: 13px
    }

    .comment-replies .avatar-image-container svg {
      width: 13px;
      height: 13px
    }

    .comment .comment-block {
      margin: 0 0 0 45px
    }

    .comment-replies .comment-block {
      margin: 0 0 0 40px
    }

    .comment .comment-replies {
      margin: 15px 0 0 40px
    }

    .comment .view-replies {
      margin: 10px 0 0 45px
    }

    .comment .view-replies>span {
      font-size: 15px;
      font-weight: bolder;
      color: #1a73e8
    }

    .comment .comment-replybox-single {
      margin: 15px 0 0 45px
    }

    .comment .comment-header>.user {
      color: #2d2d2d;
      font-style: normal;
      font-weight: normal
    }

    .comment .comment-header>.user>a,
    .comment .comment-header>span a {
      color: #1a73e8
    }

    .comment .comment-header>span {
      line-height: 1.4
    }

    .comment .comment-actions {
      display: flex;
      align-items: center;
      font-size: 12px;
      font-weight: normal;
      text-transform: uppercase;
      position: relative;
      padding-top: 5px
    }

    .comment .reactions-iframe {
      width: 85px;
      height: 20px;
      position: relative
    }

    .comment .reactions-iframe>iframe {
      position: absolute;
      left: -10px;
      top: -2px;
      height: 20px;
      width: 96px
    }

    .comment .comment-actions a {
      color: #2d2d2d;
      opacity: .8
    }

    .comment .continue {
      display: none
    }

    .comment .continue a.comment-reply {
      font-size: 13px;
      color: #2d2d2d;
      text-transform: uppercase
    }

    .comment .comment-actions a.comment-reply,
    .comment .comment-actions span.blog-admin {
      padding-right: 10px
    }

    .postAComment {
      margin: 20px 0;
      font-weight: normal
    }

    .comment-form.spinner {
      height: 93px
    }

    .comments .comments-content .loadmore.loaded {
      max-height: 0;
      opacity: 0;
      overflow: hidden
    }

    #comments .loadmore>a,
    #comments .showless>a {
      color: #2d2d2d
    }

    .comment-thread.inline-thread.hidden {
      display: block
    }

    //Edited 07/11/2021

    .ms-icon-feature .ms-icon-feature-icon {
      display: table-cell;
      vertical-align: middle;
      padding-right: 20px;
    }

    .ms-icon.ms-icon-lg {
      width: 80px;
      height: 80px;
      line-height: 80px;
      font-size: 40px;
      border-radius: 40px;
    }

    .item .bannerBtn {
      position: absolute;
      top: 81%;
      left: 81%;
      height: auto
    }

    .item .bannerBtn2 {
      position: absolute;
      top: 66%;
      left: 64%;
      height: auto
    }

    @media only screen and (max-width: 767px) {
      .item .bannerBtn {
        position: static;
        display: block;
        font-size: 11px;
      }

      .item .bannerBtn2 {
        position: static;
        display: block;
        font-size: 11px;
      }
    }

    //GG Sign-In

    .g-signin,
    .g-signout {
      display: inline-block;
    }

    .abcRioButton {
      -webkit-border-radius: 1px;
      border-radius: 1px;
      -webkit-box-shadow 0 2px 4px 0px rgba(0, 0, 0, .25): ;
      box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .25);
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: background-color .218s, border-color .218s, box-shadow .218s;
      transition: background-color .218s, border-color .218s, box-shadow .218s;
      -webkit-user-select: none;
      -webkit-appearance: none;
      background-color: #fff;
      background-image: none;
      color: #262626;
      cursor: pointer;
      outline: none;
      overflow: hidden;
      position: relative;
      text-align: center;
      vertical-align: middle;
      white-space: nowrap;
      height: 36px;
      width: 120px;
    }

    .abcRioButtonBlue {
      background-color: #4285f4;
      border: none;
      color: #fff;
    }

    .abcRioButtonContentWrapper {
      height: 100%;
      width: 100%;
    }

    .abcRioButtonBlue .abcRioButtonContentWrapper {
      border: 1px solid transparent;
    }

    .abcRioButtonIcon {
      float: left;
    }

    .abcRioButtonBlue .abcRioButtonIcon {
      background-color: #fff;
      -webkit-border-radius: 1px;
      border-radius: 1px;
    }

    .abcRioButtonBlue .abcRioButtonIcon {
      padding: 8px;
    }

    .abcRioButtonIconImage {
      width: 18px;
      height: 18px;
    }

    .abcRioButtonSvg {
      display: block;
      height: auto;
      width: auto;
      min-width: auto;
    }

    .abcRioButtonContents {
      font-family: Roboto, arial, sans-serif;
      font-size: 13px;
      line-height: 34px;
      font-weight: 500;
      letter-spacing: .21px;
      margin-left: 6px;
      margin-right: 6px;
      vertical-align: top;
    }

    /*]]>*/
  </style>
  <style>
    /* <![CDATA[ */
    @media only screen and (min-width:992px) and (max-width:1200px) {
      .home-services .service-box {
        padding: 30px 15px
      }
    }

    @media only screen and (min-width:768px) and (max-width:991px) {
      .caption h1 {
        font-size: 35px
      }

      .service-box,
      .team-member,
      .price-item,
      .single-news {
        margin-bottom: 30px
      }

      .portfolio-caption h4 {
        margin-top: 80px
      }

      .testimonial-item i.fa {
        margin-top: 20px
      }

      .contact-info,
      .video-area .accordion {
        margin-top: 30px
      }

      .action-area .btn {
        margin-top: 15px
      }

      .tab-margin-bottom {
        margin-bottom: 50px
      }

      .choose-box i.fa {
        width: 50px;
        padding: 5px 0
      }

      .choose-box.left i.fa {
        text-align: right
      }

      .choose-box.right i.fa {
        text-align: left
      }

      .testimonial-content {
        margin-bottom: 30px;
        text-align: left
      }
    }

    @media only screen and (max-width:767px) {

      body,
      p {
        line-height: 25px
      }

      h4 {}

      .section-big {
        padding: 50px 0
      }

      .section-title {
        margin-bottom: 50px
      }

      .section-title h2 {
        line-height: 30px
      }

      .intro-text {
        padding: 0 15px
      }

      .intro-text h1 {
        font-size: 40px;
        line-height: 50px;
        margin-bottom: 10px
      }

      .action-area h2,
      .intro-text h2 {
        font-size: 20px
      }

      .btn,
      input[type='submit'] {
        margin-bottom: 0;
        padding: 8px 20px
      }

      img {
        max-width: 97%
      }

      .skill-area {
        padding-top: 0
      }

      .navbar-toggle {
        margin-right: 0
      }

      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse {
        background: #fff
      }

      .navbar {
        min-height: 0
      }

      .mainmenu .navbar-nav {
        margin: 0
      }

      .mainmenu .navbar-nav li {
        float: none;
        display: block
      }

      .mainmenu .navbar-nav li a {
        padding: 11px 15px;
        color: inherit
      }

      .navbar-fixed-bottom .navbar-collapse,
      .navbar-fixed-top .navbar-collapse {
        max-height: 420px
      }

      .navbar-toggle {}

      a.about-button {
        margin-top: 0
      }

      .about-text h2,
      .single-service h2,
      .testimonial-item h2,
      .follow-me h2 {
        font-size: 22px
      }

      .home-services .service-box {
        margin-bottom: 30px
      }

      .work-items .item {
        margin-left: 0;
        margin-right: 0;
        margin-bottom: 15px
      }

      .price-item,
      .team-member,
      .single-news {
        margin-bottom: 30px
      }

      .filters li {
        margin: 0 10px
      }

      .section-title h2 {
        font-size: 30px
      }

      .contact-info,
      .video-area .accordion {
        margin-top: 30px
      }

      .action-area .btn {
        margin-top: 15px
      }

      .price-item p.level {
        margin-bottom: 60px
      }

      .price-item p.price {
        padding-bottom: 20px
      }

      .price-item a.btn {
        display: inline-block
      }

      .fun-fact {
        margin-bottom: 50px
      }

      .choose-box.left {
        text-align: left
      }

      .choose-box.left i.fa {
        float: left
      }

      .testimonial-content {
        margin-bottom: 30px;
        text-align: left
      }

      .why-choose-area img {
        width: 100%;
        margin-bottom: 30px
      }
    }

    @media only screen and (max-width:480px) {
      .social-links li {
        margin-bottom: 10px
      }

      .section-big {
        padding: 0 0;
      }
    }

    .btn {
      list-style: none;
      text-align: center;
      margin: 5px !important;
      padding: 10px 20px !important;
      font-size: 14px;
      clear: both;
      display: inline-block;
      text-decoration: none !important;
      color: #FFF !important
    }

    .btn ul {
      margin: 0;
      padding: 0
    }

    .btn li {
      display: inline;
      margin: 5px;
      padding: 0;
      list-style: none;
    }

    .demo,
    .download {
      padding: 12px 15px !important;
      color: #fff !important;
      font-weight: 700;
      font-size: 14px;
      font-family: Open Sans, sans-serif;
      text-align: center;
      text-transform: uppercase;
      border-radius: 3px;
      opacity: .95;
      border: 0;
      letter-spacing: 2px;
      transition: all .2s ease-out
    }

    .demo {
      background-color: #3498DB;
    }

    .download {
      background-color: #1ABC84;
    }

    .demo:hover {
      background-color: #60B8F4;
      color: #fff;
      border-bottom: 2px solid #3498DB;
      opacity: 1;
    }

    .download:hover {
      background-color: #49DDAA;
      color: #fff;
      border-bottom: 2px solid #1ABC84;
      opacity: 1;
    }

    .demo:before {
      content: &#39;
      \f135&#39;
      ;
      display: inline-block;
      font-weight: normal;
      vertical-align: top;
      margin-right: 10px;
      width: 16px;
      height: 16px;
      line-height: 24px;
      font-family: fontawesome;
      transition: all 0.5s ease-out;
    }

    .download:before {
      content: &#39;
      \f019&#39;
      ;
      display: inline-block;
      font-weight: normal;
      vertical-align: top;
      margin-right: 10px;
      width: 16px;
      height: 16px;
      line-height: 24px;
      font-family: fontawesome;
      transition: all 0.5s ease-out;
    }

    #header-image-2 {
      margin-top: 100px;
      /* chỉnh bằng chiều cao thực tế của header */
      position: relative;
      /* giữ layer bình thường */
      z-index: 0;
      /* thấp hơn header */
    }


    body {
      text-align: center;
    }

    .modal.fade .modal-dialog {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
      transform: none !important;
    }

    .modal:before {
      content: '';
      display: inline-block;
      height: 100%;
      vertical-align: middle;
      margin-right: -4px;
    }

    .modal-dialog {
      width: auto !important;
      max-width: 600px;
    }

    @media (max-width: 767px) {
      .modal-dialog {
        max-width: 90%;
        margin: 0 auto;
      }
    }
  </style>
</head>

<body>
  <!-- Section Top menu và Toggle menu (mobile) -->
  <div class="menu-area navbar-fixed-top section" id="header">
    <?php
    include '../header.php';
    ?>
  </div>
  <!--Section Banner Tin tức-->
  <style>
    #header-image-2 img {
      width: 100%;
      height: 30vh;
      /* hoặc auto nếu muốn giữ nguyên tỷ lệ */
      object-fit: cover;
      display: block;
      /* tránh khoảng trắng thừa */
      padding: 0px 250px 0px 250px;
    }
  </style>
  <!-- Section Banners -->
  <div class="header-image section" id="header-image-2">
    <div>
      <img
        alt="Hóa đơn điện tử S-Invoice"
        border="0"
        class="img-responsive"
        height="302"
        loading="lazy"
        src="../Bannerinvoice.jpg"
        width="1600" />
    </div>
  </div>
  <!-- Section Toggle secondary menu -->
  <!--Submenu Hỗ trợ-->
  <!--Submenu Mẫu hóa đơn-->
  <!--Submenu Bảng giá-->
  <div class="main-menu section" id="main-menu-bang-gia">
    <div class="container">
      <div class="row">
        <nav class="navbar">
          <div class="navbar-header">
            <button
              aria-expanded="false"
              class="navbar-toggle collapsed normal button_menu"
              data-target="#nav_main3"
              data-toggle="collapse"
              type="button">
              Vui lòng chọn...<span
                class="glyphicon glyphicon-menu-down"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="nav_main3">
            <ul
              class="nav navbar-nav navbar-right col-md-12 col-sm-12 text-center">
              <li class="col-md-4 col-xs-12 col-sm-4 active">
                <a href="bang-gia-sinvoice.php" title="Bảng giá Sinvoice">Bảng giá hóa đơn điện tử</a>
              </li>
              <li class="col-md-4 col-xs-12 col-sm-4">
                <a href="bang-gia-viettel-ca.php" title="Bảng giá Viettel-CA">Bảng giá chữ ký số</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- Section content Thủ tục, Văn bản, Câu hỏi thường gặp và Mẫu hóa đơn-->
  <!-- Section Banner lớn -->
  <!-- Section Dịch vụ Hóa đơn điện tử S-Invoice -->
  <!-- Section Ưu điểm -->
  <!-- Section Liên hệ -->
  <!-- Section Tin tức mới nhất -->
  <!-- Section Why choose us (Không hiển thị) -->
  <!-- Section Nhận mail báo giá (Không hiển thị) -->
  <!-- Section Danh sách KH (Không hiển thị) -->
  <div class="container">
    <div class="row">
      <!-- Section menu Main-1 -->
      <div class="col-md-8 section" id="main-1">
        <div class="widget Blog" data-version="2" id="Blog1">
          <div class="main_top" style="margin-top: 20px">
            <script type="application/ld+json">
              {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": {
                  "@type": "ListItem",
                  "position": "1",
                  "name": "Bảng giá dịch vụ Hóa đơn điện tử S-Invoice",
                  "item": "https://www.sinvoice.vn/p/bang-gia-sinvoice.php"
                }
              }
            </script>
            <script type="application/ld+json">
              {
                "@context": "http://schema.org",
                "@type": "Article",
                "mainEntityOfPage": {
                  "@type": "WebPage",
                  "@id": "https://www.sinvoice.vn/p/bang-gia-sinvoice.php"
                },
                "headline": "Bảng giá dịch vụ Hóa đơn điện tử S-Invoice",
                "description": "Trân trọng gửi đến quý khách hàng bảng giá dịch vụ Hóa đơn điện tử S-Invoice | Các gói hóa đơn điện tử | Phí thiết kế hóa đớn | Phí khởi tạo hóa đơn",
                "image": {
                  "@type": "ImageObject",
                  "url": "https://1.bp.blogspot.com/-56itrXj57rc/X6FtiMfKs0I/AAAAAAAAAIo/cjBwJBKUZcI9mPC93vZRHel31n3-DFvWgCLcBGAsYHQ/s16000/banner-sinvoice-bang-gia.png",
                  "width": 720,
                  "height": 480
                },
                "datePublished": "",
                "dateModified": "",
                "author": {
                  "@type": "Person",
                  "name": "Văn Tài"
                },
                "publisher": {
                  "@type": "Organization",
                  "name": "Hóa đơn điện tử S-Invoice",
                  "logo": {
                    "@type": "ImageObject",
                    "url": "https://1.bp.blogspot.com/-9avPAj2Ujyg/X5BAH6ATaOI/AAAAAAAAAAU/uiUMlVvilf0rb-UId7UATvJPfroTcnrBACLcBGAsYHQ/s16000/logo.png"
                  }
                }
              }
            </script>
            <h1 class="entry-title">
              Bảng giá dịch vụ Hóa đơn điện tử S-Invoice
            </h1>
            <div class="divPostBody">
              <p>
                Lời đầu tiên,
                <strong>Tập đoàn Công nghiệp - Viễn thông Quân đội
                  (Viettel)</strong>
                xin chân thành cảm ơn Quý khách hàng đã quan tâm đến dịch vụ
                của chúng tôi. Viettel trân trọng gửi đến Quý khách hàng báo
                giá dịch vụ &#8220;Hóa đơn điện tử S-Invoice&#8221; như sau:
              </p>
              <h2 class="entry-subtitle" id="daitra">
                <strong>1. Hóa đơn điện tử đại trà.</strong>
              </h2>
              <p>
                <strong><em>Hóa đơn điện tử đại trà</em></strong> bao gồm các
                loại hóa đơn sử dụng phổ biến như: hóa đơn giá trị gia tăng,
                hóa đơn bán hàng, phiếu xuất kho kiêm vận chuyển nội bộ, chứng
                từ khấu trừ Thuế TNCN điện tử, biên lai điện tử...
              </p>
              <p class="textRight">
                <strong>
                  <em>Đơn vị tính: VNĐ</em>
                </strong>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="column-width: 250px; vertical-align: middle">
                        <strong>Tên gói cước</strong>
                      </th>
                      <th style="column-width: 240px; vertical-align: middle">
                        <strong>Số lượng</strong>
                      </th>
                      <th style="column-width: 240px; vertical-align: middle">
                        <strong>Đơn giá</strong>
                      </th>
                      <th style="column-width: 240px; vertical-align: middle">
                        <strong>Giá bán</strong>
                      </th>
                      <th>
                        <strong>Ghi chú</strong>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if ($resultproducts && $resultproducts->num_rows > 0) {
                      $rowIndex = 0;
                      while ($row = $resultproducts->fetch_assoc()) {
                        $rowIndex++;

                        echo "<tr>";
                        echo "<td><strong>" . htmlspecialchars($row['product_name']) . "</strong></td>";
                        echo "<td>" . number_format($row['stock_quantity'] ?? 0, 0, ',', '.') . "</td>";
                        echo "<td>" . number_format($row['product_features'], 0, ',', '.') . "</td>";
                        echo "<td>" . number_format(($row['product_price'] ?? 0), 0, ',', '.') . "</td>";

                        // Chỉ hiển thị cột "mô tả/ưu đãi" 1 lần (rowspan)
                        if ($rowIndex == 1) {
                          echo '<td rowspan="' . $resultproducts->num_rows . '">';
                          echo '<ul class="ulPostBody" style="text-align: left">';
                          echo '<li>Phí khởi tạo <span class="color-warning">500.000đ/tài khoản</span>, chỉ áp dụng cho khách hàng đăng ký lần đầu;</li>';
                          echo '<li>Miễn phí chữ ký số HSM ký HDDT trong 6 tháng;</li>';
                          echo '<li><a href="../2023/11/khuyen-mai-tang-20-phan-tram-khi-mua-them-hoa-don-dien-tu-viettel.php" target="_blank" title="Tặng thêm 20% khi khách hàng mua thêm hóa đơn">Tặng thêm 20% khi khách hàng mua thêm hóa đơn</a> hoặc giảm giá bán cho Khách hàng mua thêm trên 50.000 hóa đơn.</li>';
                          echo '<li>Miễn phí thiết kế mẫu hóa đơn;</li>';
                          echo '<li>Hỗ trợ 100% thủ tục thông báo phát hành hóa đơn</li>';
                          echo '</ul>';
                          echo '</td>';
                        }

                        echo "</tr>";
                      }

                      // Hàng cuối cùng: đăng ký
                      echo '<tr>';
                      echo '<td class="text-center noiDungHoTro" colspan="5">';
                      echo '<p class="level hidden">Đăng ký HDDT đại trà</p>';
                      echo '<a class="btn" data-target="#form-order" data-toggle="modal" href="#">Đăng ký Online</a>';
                      echo '</td>';
                      echo '</tr>';
                    } else {
                      echo "<tr><td colspan='5' class='text-center'>Chưa có sản phẩm</td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <p>
                <strong>Lưu ý:</strong>
              </p>
              <ul class="ulPostBody">
                <li>Giá bán trên đã bao gồm <strong>VAT 10%</strong>;</li>
                <li>
                  Gói hóa đơn điện tử không giới hạn thời gian sử dụng, chỉ
                  giới hạn theo số lượng hóa đơn đã đăng ký. Khi sử dụng hết
                  số hóa đơn, khách hàng có thể mua thêm;
                </li>
                <li>
                  <strong>Phí khởi tạo:</strong> là phí khai báo tài khoản,
                  phí duy trì và lưu trữ hóa đơn điện tử trên hệ thống trong
                  10 năm. Chỉ thu phí lần đầu khởi tạo tài khoản;
                </li>
                <li>Giá trên chưa bao gồm giá chữ ký số;</li>
                <li>
                  Giá trên áp dụng cho việc dùng chung với các phần mềm mà
                  Viettel đã kết nối như:
                  <strong>SAP, Micro, Basys, ACCOS, Microsoft Dynamic, FAST,
                    Bravo&#8230;</strong><a
                    class="color-warning"
                    href="../2021/02/hdsd-danh-sach-phan-mem-tich-hop-thanh-cong-tren-hoa-don-dien-tu-viettel.php"
                    target="_blank"
                    title="Danh sách phầm mềm tích hợp thành công với hóa đơn điện tử Viettel"><strong>Tìm hiểu thêm</strong></a>
                </li>
                <li>
                  Chi tiết vui lòng liên hệ hotline bán hàng
                  <span class="color-primary">0866531668</span> để được tư
                  vấn.
                </li>
              </ul>
              <h2 class="entry-subtitle" id="maytinhtien">
                <strong>2. Hóa đơn điện tử khởi tạo từ máy tính tiền.</strong>
              </h2>
              <p>
                <strong><em>Hoá đơn điện tử khởi tạo từ máy tính tiền</em></strong>
                là hoá đơn điện tử có mã của cơ quan thuế được khởi tạo từ máy
                tính tiền, theo quy định tại Điều 89 Luật Quản lý thuế ngày 13
                tháng 6 năm 2019, Điều 11 Nghị định số 123/2020/NĐ-CP, Điều 1
                Nghị định số 41/2022/NĐ-CP và Điều 8 Thông tư số
                78/2021/TT-BTC. Hóa đơn điện tử khởi tạo từ máy tính tiền bao
                gồm: hóa đơn giá trị gia tăng khởi tạo từ máy tính tiền, hóa
                đơn bán hàng khởi tạo từ máy tính tiền, hóa đơn khác khởi tạo
                từ máy tính tiền.
                <a
                  class="color-warning"
                  href="../2024/05/hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-la-gi.php"
                  target="_blank"
                  title="Hóa đơn điện tử khởi tạo từ máy tính tiền là gì?"><strong>Tìm hiểu thêm</strong></a>
              </p>
              <p class="textRight">
                <strong>
                  <em>Đơn vị tính: VNĐ</em>
                </strong>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="column-width: 250px; vertical-align: middle">
                        <strong>Tên gói cước</strong>
                      </th>
                      <th style="column-width: 240px; vertical-align: middle">
                        <strong>Số lượng</strong>
                      </th>
                      <th style="column-width: 240px; vertical-align: middle">
                        <strong>Đơn giá</strong>
                      </th>
                      <th style="column-width: 240px; vertical-align: middle">
                        <strong>Giá bán</strong>
                      </th>
                      <th>
                        <strong>Ghi chú</strong>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <strong>MTT 500</strong>
                      </td>
                      <td>500</td>
                      <td>616</td>
                      <td>308.000</td>
                      <td rowspan="12">
                        <ul class="ulPostBody" style="text-align: left">
                          <li>
                            Phí khởi tạo
                            <span class="color-warning">500.000đ/tài khoản</span>, chỉ áp dụng cho khách hàng đăng ký lần đầu;
                          </li>
                          <li>
                            Miễn phí chữ ký số HSM ký HDDT trong 6 tháng;
                          </li>
                          <li>
                            Miễn phí tích hợp với trên 50 phần mềm máy tính
                            tiền mà Viettel đã kết nối;
                          </li>
                          <li>Miễn phí thiết kế mẫu hóa đơn;</li>
                          <li>
                            Hỗ trợ 100% thủ tục thông báo phát hành hóa đơn.
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 1.000</strong>
                      </td>
                      <td>1.000</td>
                      <td>506</td>
                      <td>506.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 2.000</strong>
                      </td>
                      <td>2.000</td>
                      <td>440</td>
                      <td>880.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 3.000</strong>
                      </td>
                      <td>3.000</td>
                      <td>385</td>
                      <td>1.155.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 5.000</strong>
                      </td>
                      <td>5.000</td>
                      <td>286</td>
                      <td>1.430.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 10.000</strong>
                      </td>
                      <td>10.000</td>
                      <td>220</td>
                      <td>2.200.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 20.000</strong>
                      </td>
                      <td>20.000</td>
                      <td>198</td>
                      <td>3.960.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 30.000</strong>
                      </td>
                      <td>30.000</td>
                      <td>187</td>
                      <td>5.610.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 50.000</strong>
                      </td>
                      <td>50.000</td>
                      <td>165</td>
                      <td>8.250.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 70.000</strong>
                      </td>
                      <td>70.000</td>
                      <td>154</td>
                      <td>10.780.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 90.000</strong>
                      </td>
                      <td>90.000</td>
                      <td>143</td>
                      <td>12.870.000</td>
                    </tr>
                    <tr>
                      <td>
                        <strong>MTT 100.000</strong>
                      </td>
                      <td>100.000</td>
                      <td>132</td>
                      <td>13.200.000</td>
                    </tr>
                    <tr>
                      <td class="text-center noiDungHoTro" colspan="5">
                        <p class="level hidden">Đăng ký HDDT MTT</p>
                        <a
                          class="btn"
                          data-target="#form-order"
                          data-toggle="modal"
                          href="#">Đăng ký Online</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p>
                <strong>Lưu ý:</strong>
              </p>
              <ul class="ulPostBody">
                <li>Giá bán trên đã bao gồm <strong>VAT 10%</strong>;</li>
                <li>
                  Gói hóa đơn điện tử khởi tạo từ máy tính tiền không giới hạn
                  thời gian sử dụng, chỉ giới hạn theo số lượng hóa đơn đã
                  đăng ký. Khi sử dụng hết số hóa đơn, khách hàng có thể mua
                  thêm;
                </li>
                <li>
                  <strong>Phí khởi tạo:</strong> là phí khai báo tài khoản,
                  phí duy trì và lưu trữ hóa đơn điện tử trên hệ thống trong
                  10 năm. Chỉ thu phí lần đầu khởi tạo tài khoản;
                </li>
                <li>Giá trên chưa bao gồm giá chữ ký số;</li>
                <li>
                  Giá trên áp dụng cho việc dùng chung với các phần mềm mà
                  Viettel đã kết nối như:
                  <strong>SAPO, POS365, KiotViet, PanCake, POSAPP, IPOS...</strong><a
                    class="color-warning"
                    href="../2021/02/hdsd-danh-sach-phan-mem-tich-hop-thanh-cong-tren-hoa-don-dien-tu-viettel.php"
                    target="_blank"
                    title="Danh sách phầm mềm tích hợp thành công với hóa đơn điện tử Viettel"><strong>Tìm hiểu thêm</strong></a>
                </li>
                <li>
                  Chi tiết vui lòng liên hệ hotline bán hàng
                  <span class="color-primary">0866531668</span> để được tư
                  vấn.
                </li>
              </ul>
              <h2 class="entry-subtitle">
                <strong>3. Chi phí phát sinh khi đăng ký dịch vụ S-Invoice</strong>
              </h2>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        <strong>Mô tả</strong>
                      </th>
                      <th style="column-width: 300px">
                        <strong>Giá</strong>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-align: left">
                        Khởi tạo hệ thống lần đầu, lưu trữ hóa đơn trong 10
                        năm
                      </td>
                      <td>
                        <strong>500.000đ</strong>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left">
                        Khách hàng chọn các mẫu hóa đơn mặc định của Viettel
                        và <span style="color: red">không</span> có chỉnh sửa,
                        thay đổi các trường dữ liệu trên hóa đơn
                      </td>
                      <td>
                        <strong>Miễn phí</strong>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left">
                        Khách hàng lựa chọn các mẫu hóa đơn mặc định của
                        Viettel và <span style="color: red">thay đổi</span> vị
                        trí hiển thị các trường dữ liệu có sẵn (Không thêm
                        trường dữ liệu mới)
                      </td>
                      <td>
                        <strong>Miễn phí</strong>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left">
                        Xây dựng mẫu hóa đơn đặc thù, bổ sung thêm các trường
                        dữ liệu, chỉnh sửa/thiết kế mới logo, hình nền...
                      </td>
                      <td>
                        <strong>500.000đ</strong>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left">
                        Phí tích hợp phần mềm kết xuất hóa đơn của Khách hàng
                        và hệ thống hóa đơn điện tử Viettel
                      </td>
                      <td>
                        <strong>Khảo sát thực tế</strong>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left">
                        Phí tích hợp thẳng giữa phần mềm kế toàn của Khách
                        hàng(FAST, BRAVO, EFFECT...) và phần mềm hóa đơn điện
                        tử Viettel
                      </td>
                      <td>
                        <strong>Khảo sát thực tế</strong>
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align: left">
                        Doanh nghiệp sử dụng hệ thống nghiệp vụ phức tạp, đặc
                        thù, chuyên dụng
                      </td>
                      <td>
                        <strong>Khảo sát thực tế</strong>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <h2 class="entry-subtitle">
                <strong>4. Thủ tục đăng ký Dịch vụ Hóa đơn điện tử
                  S-Invoice</strong>
              </h2>
              <p>
                - Để đăng ký dịch vụ Hóa đơn điện tử S-Invoice, hồ sơ Khách
                hàng cần chuẩn bị gồm có:
              </p>
              <ol class="ulPostBody">
                <li>
                  Bản sao hợp lệ giấy phép đăng ký kinh doanh hoặc quyết định
                  thành lập;
                </li>
                <li>
                  Bản sao chứng minh thư hoặc hộ chiếu của người đại diện pháp
                  lý (chấp nhận bản photo đóng dấu của tổ chức/doanh nghiệp đó
                  nếu có bản gốc để đối chiếu);
                </li>
                <li>
                  Phiếu yêu cầu (PYC) cung cấp dịch vụ<strong> </strong>Hóa
                  đơn điện tử: Mẫu PYC cung cấp dịch vụ HĐĐT nhân viên Viettel
                  gửi cho khách hàng
                </li>
                <li>
                  Nếu người đại diện của tổ chức/doanh nghiệp ủy quyền cho
                  người khác đại diện cho hợp đồng: Giấy ủy quyền được đóng
                  dấu, ký tên người đại diện tổ chức/doanh nghiệp, chứng minh
                  thư hoặc hộ chiếu của người đại diện hợp đồng.
                </li>
              </ol>
              <div class="quotComments">
                <em
                  style="
                      border: 0px;
                      color: red;
                      font-family: inherit;
                      font-stretch: inherit;
                      font-variant: inherit;
                      font-weight: inherit;
                      line-height: inherit;
                      margin: 0px;
                      padding: 0px;
                      vertical-align: baseline;
                    ">
                  <p>
                    <strong>Thông tin thanh toán: </strong>
                  </p>
                  <ul class="ulPostBody">
                    <li><strong>Số tài khoản:</strong> 0514100062201</li>
                    <li>
                      <strong>Mở tại:</strong> Ngân hàng TMCP Quân đội (MB) -
                      Chi nhánh Điện Biên Phủ - Thành phố Hà Nội
                    </li>
                    <li>
                      <strong>Đơn vị thụ hưởng:</strong> Tập đoàn Công nghiệp
                      - Viễn thông Quân đội (VIETTEL)
                    </li>
                  </ul>
                  <p>
                    <strong>Mọi thông tin chi tiết vui lòng liên hệ hotline bán
                      hàng 0866531668. Trân trọng!</strong>
                  </p>
                </em>
              </div>
            </div>
          </div>
          <div class="main_top" style="margin-top: 20px">
            <div id="content"></div>
          </div>
        </div>
      </div>
      <!-- Section BlogSearch và Tiêu điểm -->
      <div class="col-md-4 col-xs-12 section" id="sidebar-1">
        <div class="form-group widget">
          <form
            action="https://www.sinvoice.vn/search"
            class="search-form"
            role="search"
            style="margin-top: 20px"
            target="_top">
            <input
              aria-label="Tìm kiếm blog này"
              autocomplete="off"
              class="form-control"
              name="q"
              placeholder="Nhập từ khóa cần tìm..."
              type="search"
              value="" />
            <button
              aria-label="Tìm kiếm"
              class="search-action"
              type="submit"
              value="Tìm kiếm">
              <label class="glyphicon glyphicon-search"></label>
            </button>
          </form>
        </div>
        <div class="widget PopularPosts" data-version="2" id="PopularPosts1">
          <h3 class="title">Tiêu điểm</h3>
          <div class="widget-content">
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php"
                    title="Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel">
                    <img
                      alt="Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel"
                      class="lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgnfXxohujHFQO1lUTzFBZHzvaQCqDYDlYKoUgjvqI-CJNQ0YKKNbYf8015T_TRdLgLFiIAaaiHaKkCXpbOv-6MMVCqw_IW6vf-HpSjpNVZrPAxdZaz3r7rLZdqxJgGLk8bLEvqQYRaaLYKp4Yfy6vzKHmEnaE2jxeQQ_GeKAqzQH50oTakRPnmMK9sbZiq/s16000/logo_500_300.webp"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php"
                    title="Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB token Viettel">
                    <div class="title_new">
                      Các bước cấu hình ký hóa đơn điện tử S-Invoice bằng USB
                      token Viettel
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2021/02/hdsd-danh-sach-cac-loi-thuong-gap-tren-he-thong-hoa-don-dien-tu-viettel.php"
                    title="Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice">
                    <img
                      alt="Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice"
                      class="lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgnfXxohujHFQO1lUTzFBZHzvaQCqDYDlYKoUgjvqI-CJNQ0YKKNbYf8015T_TRdLgLFiIAaaiHaKkCXpbOv-6MMVCqw_IW6vf-HpSjpNVZrPAxdZaz3r7rLZdqxJgGLk8bLEvqQYRaaLYKp4Yfy6vzKHmEnaE2jxeQQ_GeKAqzQH50oTakRPnmMK9sbZiq/s16000/logo_500_300.webp"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2021/02/hdsd-danh-sach-cac-loi-thuong-gap-tren-he-thong-hoa-don-dien-tu-viettel.php"
                    title="Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện tử S-Invoice">
                    <div class="title_new">
                      Danh sách các lỗi thường gặp trên hệ thống Hóa đơn điện
                      tử S-Invoice
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2020/11/hdsd-cac-buoc-cau-hinh-gui-mail-hoa-don-dien-tu-cho-nguoi-mua-bang-gmail-hotmail-yahoo.php"
                    title="Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail">
                    <img
                      alt="Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail"
                      class="img-responsive lazyload"
                      data-src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2020/11/hdsd-cac-buoc-cau-hinh-gui-mail-hoa-don-dien-tu-cho-nguoi-mua-bang-gmail-hotmail-yahoo.php"
                    title="Các bước cấu hình gửi mail hóa đơn điện tử cho người mua hàng bằng Gmail, Yahoo, Hotmail">
                    <div class="title_new">
                      Các bước cấu hình gửi mail hóa đơn điện tử cho người mua
                      hàng bằng Gmail, Yahoo, Hotmail
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2020/11/hdsd-cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu-sinvoice.php"
                    title="Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice">
                    <img
                      alt="Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice"
                      class="img-responsive lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiRECRi60eOyS82s8Q7HVm42K5AYeVAOhRgPXJAji2nCRb8nBHgNfUAo5Ok2Nt0kpki3nSKtM44HTScb21xMLvMcmrwfdh7o1R7LLHftQJwzs6NJFGMrvHEc3Ps6bbPI2OO7gccK3hQ_z1d/s16000/cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu.jpg"
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2020/11/hdsd-cach-lap-bien-ban-dieu-chinh-hoa-don-dien-tu-sinvoice.php"
                    title="Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice">
                    <div class="title_new">
                      Cách lập biên bản điều chỉnh hóa đơn điện tử S-Invoice
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2020/11/cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb.php"
                    title="Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel">
                    <img
                      alt="Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel"
                      class="img-responsive lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgWyP8q8MRAAk2ksuFf72nX4ip_kU3Kg_2PoTIK7TAHl82IiTr_O_iQmMLZZGdPxBSFg8QBQA8CFsPP2Hu8K1oyXpiv2-x41xfjK4BoEGhgp5d9ea86PfqhaHNcsRwAIFoed_NkQVt_0K8P/d/thumnail.jpg"
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2020/11/cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb.php"
                    title="Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token Viettel">
                    <div class="title_new">
                      Cấu hình ký hóa đơn điện tử Sinvoice bằng USB token
                      Viettel
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2023/02/goi-500-chung-tu-thue-tncn-dien-tu-cua-viettel.php"
                    title="Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp">
                    <img
                      alt="Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp"
                      class="img-responsive lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh3JV-nk48uut3HJ80N1DMnZZdmh9A4EyVtAWopXI_yQIjBY-C_yfus3EFcO_c4ztyMHrQpHJ8FC1xu4msvPM7KPr7a2yEz63pkiEuEayHDQiRyCJtZxgfhutDG45asBvVY4dHJU5jck15iMm9wEO2O-JuqNBJcyQt_cqBgrJWNc8FvB_4R5cnmhKFq-w/s16000/mau-03-tncn-chung-tu-khau-tru-thue-tncn-nd123-viettel-cung-cap.webp"
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2023/02/goi-500-chung-tu-thue-tncn-dien-tu-cua-viettel.php"
                    title="Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung cấp">
                    <div class="title_new">
                      Gói 500 chứng từ khấu trừ Thuế TNCN điện tử Viettel cung
                      cấp
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2024/05/goi-1k-hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-viettel.php"
                    title="Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền">
                    <img
                      alt="Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền"
                      class="img-responsive lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh3RbQ99ODaN8y0Hscdtw9YMymScYFT_p5lOd66Bt4Luw3JlOy51yytqg3zlSELhcIZmBT1pBUPJoZp64v4gTbxHqbGkEwm1IUbWBnu1kupELKHdpSs8i8-4QySVkmp2Hw_nZa1DxLChPgn/s16000/033R020.png"
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2024/05/goi-1k-hoa-don-dien-tu-khoi-tao-tu-may-tinh-tien-viettel.php"
                    title="Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền">
                    <div class="title_new">
                      Gói 1000 hóa đơn điện tử khởi tạo từ máy tính tiền
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2020/11/hdsd-chuyen-doi-hoa-don-dien-tu-sinvoice-sang-hoa-don-giay.php"
                    title="Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy">
                    <img
                      alt="Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy"
                      class="img-responsive lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9vsZ3dxaY2CJTY4X55T1DCHmqNwpzhp1OX2eAHx7TtJgnUw2Da_etrubUxd4zG_wdi-OOe64bDGuNkEZ2kUgFtovGJebnNL3xRgNu6Q9tqG9q8y-frBtLQ9_OUr30iO7DnqoEBnd1tAhN/s16000/huong-dan-in-hoa-don-chuyen-doi-s-invoice-BANNER.jpg"
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2020/11/hdsd-chuyen-doi-hoa-don-dien-tu-sinvoice-sang-hoa-don-giay.php"
                    title="Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa đơn giấy">
                    <div class="title_new">
                      Hướng dẫn chuyển đổi hóa đơn điện tử S-Invoice thành hóa
                      đơn giấy
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2024/01/hdsd-xoa-bo-hoac-khoi-phuc-hoa-don-dien-tu-sinvoice.php"
                    title="[VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice">
                    <img
                      alt="[VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice"
                      class="img-responsive lazyload"
                      data-src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2024/01/hdsd-xoa-bo-hoac-khoi-phuc-hoa-don-dien-tu-sinvoice.php"
                    title="[VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện tử Sinvoice">
                    <div class="title_new">
                      [VIDEO] Hướng dẫn xóa bỏ và khôi phục lại hóa đơn điện
                      tử Sinvoice
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="box_new">
              <div class="row">
                <div class="col-md-4 col-sm-4 featured-image">
                  <a
                    href="../2020/09/tim-hieu-ve-chu-ky-so-server-hsm-cua.php"
                    title="Tìm hiểu về chữ ký số server HSM của Viettel">
                    <img
                      alt="Tìm hiểu về chữ ký số server HSM của Viettel"
                      class="img-responsive lazyload"
                      data-src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi1L9oQSzrVdJ571j19ZPQF2BB0A5o87QtVqE0PoXeKuFKYCfxDkoKRoE8cs60wbXc9Q0agxIryrEKKWN3rp6iS0S0ngoCxB5voOf7CtR6g7Fms4Y9n7j1RkQL4b6IsUixy2WcV3PVVA0yq/s16000/chu-ky-so-server-hsm-viettel.jpg"
                      loading="lazy"
                      src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" />
                  </a>
                </div>
                <div class="col-md-8 col-sm-8">
                  <a
                    href="../2020/09/tim-hieu-ve-chu-ky-so-server-hsm-cua.php"
                    title="Tìm hiểu về chữ ký số server HSM của Viettel">
                    <div class="title_new">
                      Tìm hiểu về chữ ký số server HSM của Viettel
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                <p class='email'>Địa chỉ: Tòa nhà The Light ,Đ. Tố Hữu, P. Trung Văn, Q. Nam Từ Liêm, Hà Nội</p>
              </li>
              <li>
                <p class='email'>Hotline bán hàng: 0866531668</p>
              </li>
              <li>
                <p class='email'>Hotline CSKH: 18008000 nhánh 1</p>
              </li>
              <li>
                <p class='email'>eMail: <img alt='Mail Hóa đơn điện tử S-Invoice' src='../blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg8qpGLee4LWMcheXSMhfJ6aoZ_PA2rsvHKCWX3L3T/s320/hoadondientu-at-sinvoice-vn.png-trang.png' title='Mail Hóa đơn điện tử S-Invoice' width='45%' /></p>
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
            <a class='email' href='https://www.viettelsolutions.com.vn/' style='text-align:left; display: block; padding-bottom:10px' target='_blank' title='Viettel Solutions'><img alt='Hóa đơn điện tử S-Invoice' height='88' loading='lazy' src='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgrfdjAWfdT1uVfw9TIVbBqN8lyozwdYzLAYDSledSGsK58J7ywRNMYvqctVSNOicjzj4vQn4JxecNnqMAuPmbdZ3gSYOpCopKt73TS_tIhLEIh2mHEJdKhKdidnALynefVrD3v4vhNDFDGZK_7rib7_Ut_99mywjxI30vokNRefU8V5cbUKkufvckf5Q/s1600/logo3.png' width='146' /></a>
            <p class='email'>Cơ quan chủ quản: Tập đoàn Công nghiệp - Viễn thông Quân đội. Giấy phép số: 144/GP - BC do Bộ thông tin - Truyền thông cấp ngày 18/04/2007.</p>
            <p class='email'>&#169;S-Invoice 2018. All rights reserved.</p>
          </div>
        </div>
      </footer>
    </div>
  </footer>
  <div class="modal fade" id="form-order" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
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
  <iframe class="hidden" height="0" name="hidden_iframe" width="0"></iframe>
  <script>
    var data = {
      view: {
        isHomepage: "",
        isArchive: "",
        isPost: "",
        isPage: "true",
        isSearch: "",
        isLabelSearch: "",
        isSearchQuery: "",
        isMultipleItems: "",
        isSingleItem: "true",
        isMobile: "",
      },
      blog: {
        blogId: "8243747611808165490",
        postId: "",
        pageId: "3831676352191386635",
        pageName: "Bảng giá Sinvoice",
        searchqueryescaped: "",
        homepageUrl: "https://www.sinvoice.vn/",
        url: "https://www.sinvoice.vn/p/bang-gia-sinvoice.php",
        analyticsAccountNumber: "",
        clientid: "",
        searchindex: 500,
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
        close: "Đóng",
      },
    };
  </script>
  <script>
    // <![CDATA[
    var url = window.location.href,
      uri = window.location.toString(),
      rel = document
      .querySelector('link[rel="canonical"]')
      .getAttribute("href"),
      fb1 = url.substring(0, url.indexOf("?fbclid")),
      fb2 = url.substring(0, url.indexOf("&fbclid")),
      gi1 = url.substring(0, url.indexOf("?gidzl")),
      gi2 = url.substring(0, url.indexOf("&gidzl")),
      m1 = url.substring(0, url.indexOf("?m=1")),
      m2 = url.substring(0, url.indexOf("&m=1"));
    if (uri.length - fb1.length > 0) {
      window.history.replaceState({}, document.title, fb1);
    }
    if (uri.length - fb2.length > 0) {
      window.history.replaceState({}, document.title, fb2);
    }
    if (uri.length - gi1.length > 0) {
      window.history.replaceState({}, document.title, gi1);
    }
    if (uri.length - gi2.length > 0) {
      window.history.replaceState({}, document.title, gi2);
    }

    function appendChildHead(name, type) {
      if (type == "css") {
        var fileref = document.createElement("link");
        fileref.setAttribute("rel", "stylesheet");
        fileref.setAttribute("href", name);
      } else if (type == "js") {
        var fileref = document.createElement("script");
        fileref.setAttribute("type", "text/javascript");
        fileref.setAttribute("async", "");
        fileref.setAttribute("src", name);
      }
      if (typeof fileref != "undefined") {
        document.getElementsByTagName("head")[0].appendChild(fileref);
      }
    }

    function appendChildBody(name, type) {
      if (type == "js") var src = document.createElement("script");
      src.setAttribute("async", "");
      src.setAttribute("src", name);
      if (typeof src != "undefined")
        document.getElementsByTagName("body")[0].appendChild(src);
    }
    window.addEventListener("load", function() {
      if (
        navigator.userAgent.match(
          /(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone|webOS)/i
        ) === null ||
        (window.navigator.pointerEnabled && navigator.maxTouchPoints > 1)
      ) {
        document.documentElement.setAttribute("data-view-type", "desktop");
        if (uri.length - m1.length > 0) {
          window.history.replaceState({}, document.title, m1);
        }
        if (uri.length - m2.length > 0) {
          window.history.replaceState({}, document.title, m2);
        }
        var _a = document.querySelectorAll("a");
        for (var i = 0; i < _a.length; i++) {
          var _b = _a[i].getAttribute("href");
          if (_b != null) {
            if (_b.indexOf("?m=1") != -1)
              _a[i].setAttribute("href", _b.substr(0, _b.indexOf("?m=1")));
            if (_b.indexOf("&m=1") != -1)
              _a[i].setAttribute("href", _b.substr(0, _b.indexOf("&m=1")));
          }
        }
      } else {
        document.documentElement.setAttribute("data-view-type", "mobile");
      }
      $(window).on("scroll", function() {
        var menu_area = $(".menu-area");
        if ($(window).scrollTop() > 200) menu_area.addClass("sticky-menu");
        else menu_area.removeClass("sticky-menu");
      });
      $(document).on("click", ".navbar-collapse.in", function(e) {
        if (
          $(e.target).is("a") &&
          $(e.target).attr("class") != "dropdown-toggle"
        )
          $(this).collapse("hide");
      });
      $("body").scrollspy({
        target: ".navbar-collapse",
        offset: 195,
      });
      $("a.smooth_scroll").on("click", function(e) {
        e.preventDefault();
        var anchor = $(this);
        $("html,body")
          .stop()
          .animate({
              scrollTop: $(anchor.attr("href")).offset().top - 50
            },
            1000
          );
      });
      $(".portfolio").mixItUp();
      $(".work-popup").magnificPopup({
        type: "image",
        gallery: {
          enabled: true
        },
        zoom: {
          enabled: true,
          duration: 300,
          opener: function(element) {
            return element.find("img");
          },
        },
      });
      $(".testimonial-list").owlCarousel({
        lazyLoad: false,
        pagination: false,
        navigation: false,
        items: 3,
        autoPlay: true,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 1],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
      });
      $(".owl-client").owlCarousel({
        items: 5,
        autoPlay: true,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [980, 4],
        itemsTablet: [768, 3],
        itemsMobile: [479, 2],
        pagination: false,
        navigation: false,
        autoHeight: true,
      });

      // Get the form.
      var form = $('form[name="form_order"]'),
        form2 = $('form[name="contact_form"]');
      $('[data-target="#form-order"]').click(function() {
        var name = $(this).parent(".noiDungHoTro").find("p.level").text();
        $(form)
          .find(".modal-title")
          .php("Nội dung: <strong>" + name + "</strong>");
        $(form).find("input[type=hidden]").attr("value", name);
      });
      // Set up an event listener for the contact form.
      $(form).on("submit", function(e) {
        var captcha_response = grecaptcha.getResponse();
        if (captcha_response.length == 0) {
          $(".error-message").php(
            '<p style="margin-bottom:1.3rem;color:#d93025;">Vui lòng chọn hộp kiểm này nếu bạn muốn tiếp tục.</p>'
          );
          return false;
        }
        alert(
          "Yêu cầu của bạn đã được gửi đi. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất. Trân trọng!"
        );
        setTimeout(function() {
          $(form)[0].reset();
        }, 3000);
        $("#form-order").modal("hide");
        return true;
      });
      $(form2).on("submit", function(e) {
        alert(
          "Yêu cầu của bạn đã được gửi đi. Chúng tôi sẽ liên hệ bạn trong thời gian sớm nhất. Trân trọng!"
        );
        return true;
      });
      $("#for-select").on("change", function() {
        var text = $("#for-select :selected").text();
        if (text != "")
          $(form2).find("input[type=hidden]").attr("value", text);
      });
      // Home Page Slider Settings
      $("#carousel-example-generic").carousel({
        interval: 6000,
        cycle: true,
      });
    });
    // ]]>
  </script>
  <script>
    // <![CDATA[
    window.addEventListener("load", function() {
      var is_load = 0;

      function append_fancybox() {
        if (is_load == 0) {
          is_load = 1;
          appendChildHead(
            "../cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css",
            "css"
          );
          appendChildHead(
            "../cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js",
            "js"
          );
        }
      }
      window.addEventListener("scroll", function() {
        append_fancybox();
      });
      window.addEventListener("mousemove", function() {
        append_fancybox();
      });
      setTimeout(function() {
        append_fancybox();
      }, 3000);
      $(".separator a,.tr-caption-container a")
        .attr("data-fancybox", "gallery")
        .removeAttr("imageanchor style");
      $(".tr-caption-container").each(function() {
        var caption = $(this).find(".tr-caption").text();
        $(this).find("a").attr("data-caption", caption);
      });
    });
    //]]>
  </script>
  <!-- Thay data:view.isSingleItem thành data:view.isPost nếu chỉ hiển thị trong post -->
  <script
    asysn="asysn"
    defer="defer"
    src="../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script
    asysn="asysn"
    defer="defer"
    src="../cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.min.js"></script>
  <script
    asysn="asysn"
    defer="defer"
    src="../cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
  <script
    asysn="asysn"
    defer="defer"
    src="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script
    asysn="asysn"
    defer="defer"
    src="../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
  <script asysn="asysn" defer="defer" src="#"></script>
  <script
    asysn="asysn"
    defer="defer"
    src="../cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"></script>
  <script
    asyns=""
    defer="defer"
    src="../cdn.jsdelivr.net/gh/thietkeblogspot/js/contact-buttons-widget.min.js"></script>
  <script
    async="async"
    defer="defer"
    src="../www.google.com/recaptcha/api.js"></script>
  <script>
    //<![CDATA[
    var url = window.location.href,
      uri = window.location.toString(),
      rel = document
      .querySelector('link[rel="canonical"]')
      .getAttribute("href"),
      fb1 = url.substring(0, url.indexOf("?fbclid")),
      fb2 = url.substring(0, url.indexOf("&fbclid")),
      gi1 = url.substring(0, url.indexOf("?gidzl")),
      gi2 = url.substring(0, url.indexOf("&gidzl")),
      m1 = url.substring(0, url.indexOf("?m=1")),
      m2 = url.substring(0, url.indexOf("&m=1")),
      dv_tt = "₫",
      strn = "sale",
      stock = "out-of-stock",
      strc = "0",
      thumb_url =
      "../blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg8WrpwoxRJ7oj2N9fek0Dnu8O7EIZwN5rVlmxPfzV/s16000/safe_image.png";
    if (uri.length - fb1.length > 0) {
      window.history.replaceState({}, document.title, fb1);
    }
    if (uri.length - fb2.length > 0) {
      window.history.replaceState({}, document.title, fb2);
    }
    if (uri.length - gi1.length > 0) {
      window.history.replaceState({}, document.title, gi1);
    }
    if (uri.length - gi2.length > 0) {
      window.history.replaceState({}, document.title, gi2);
    }

    function loadCSS(filename, filetype) {
      if (filetype == "css") {
        var fileref = document.createElement("link");
        fileref.setAttribute("rel", "stylesheet");
        fileref.setAttribute("href", filename);
      } else if (filetype == "js") {
        var fileref = document.createElement("script");
        fileref.setAttribute("type", "text/javascript");
        fileref.setAttribute("async", "");
        fileref.setAttribute("src", filename);
      }
      if (typeof fileref != "undefined") {
        document.getElementsByTagName("head")[0].appendChild(fileref);
      }
    }
    var _widget_settings = {
      positions: "bottom right",
      support: {
        staff: {
          name: "Chăm sóc khách hàng",
          image: "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh7tKkNpgTVEELAiBo7IICiGKDNlq-MJM0gznciTpYgiHPjGcoEx4jeF3Wj-VCaED4SFVijzBrKqfyT5yO2bCkApmDgq69bxZ4jrXx9q7vFMEUfgTmiopeyA_9PJBXWWy6Kt-tk-OCttD0B/s16000/cc.png",
          messages: "Không biết chúng tôi có thể hỗ trợ gì cho anh/chị không ạ?",
        },
      },
      buttons: {
        contact: {
          visible: "true",
          id: "https://www.sinvoice.vn/#contact",
          messages: "Liên hệ",
        },
        email: {
          visible: "true",
          id: "hoadondientu@sinvoice.vn",
          messages: "Gửi email",
        },
        call: {
          visible: "true",
          id: "+84866531668",
          messages: "Gọi điện"
        },
        sms: {
          visible: "true",
          id: "0866531668",
          messages: "Nhắn tin"
        },
        viber: {
          visible: "false",
          id: "sinvoice",
          messages: "Chat Viber"
        },
        telegram: {
          visible: "false",
          id: "sinvoice",
          messages: "Chat Telegram",
        },
        zalo: {
          visible: "true",
          id: "0866531668",
          messages: "Chat Zalo"
        },
        facebook: {
          visible: "true",
          id: "sinvoicevn",
          messages: "Chat Facebook",
        },
      },
    };

    function check_out(e) {
      e.preventDefault();
      var $this = $(this);
      $this.addClass("adding");
      var product_name =
        "Giao hàng " + $this.parents(".card").find(".title-wrapper a").text();
      $(".modal--header ._mht").php(product_name);
      $(".modal--body #productname").attr("value", product_name);
      setTimeout(function() {
        $this.removeClass("adding");
      }, 500);
    }

    function modal_open(e) {
      var target = "#" + $(".modal--target").attr("id");
      e.preventDefault();
      if ($(this).is("a")) {
        target = $(this).attr("href");
      } else {
        target = $(this).attr("data-target");
      }
      $(target).show();
      $(target)
        .find(".modal--confirm")
        .fadeIn("slow", function() {
          $(this).addClass("show");
        });
      $(".modal--close").click(function() {
        var $this = $(this);
        $this.parents(".modal--confirm").removeClass("show");
        setTimeout(function() {
          $this.parents(".modal--target").removeAttr("style");
        }, 200);
      });
      $(document).on("keyup", function(k) {
        if (k.keyCode == 27) {
          target = $(".modal--confirm.show");
          var parent = $(target).parent();
          setTimeout(function() {
            $(target).remove();
          }, 200);
        }
      });
    }
    window.addEventListener("load", function() {
      if (
        navigator.userAgent.match(
          /(iPhone|iPod|iPad|Android|BlackBerry|Windows Phone|webOS)/i
        ) === null ||
        (window.navigator.pointerEnabled && navigator.maxTouchPoints > 1)
      ) {
        document.documentElement.setAttribute("data-view-type", "desktop");
        if (uri.length - m1.length > 0) {
          window.history.replaceState({}, document.title, m1);
        }
        if (uri.length - m2.length > 0) {
          window.history.replaceState({}, document.title, m2);
        }
        var _a = document.querySelectorAll("a");
        for (var i = 0; i < _a.length; i++) {
          var _b = _a[i].getAttribute("href");
          if (_b != null) {
            if (_b.indexOf("?m=1") != -1)
              _a[i].setAttribute("href", _b.substr(0, _b.indexOf("?m=1")));
            if (_b.indexOf("&m=1") != -1)
              _a[i].setAttribute("href", _b.substr(0, _b.indexOf("&m=1")));
          }
        }
      } else {
        document.documentElement.setAttribute("data-view-type", "mobile");
      }
      loadCSS(
        "../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css",
        "css"
      );
      loadCSS(
        "../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css",
        "css"
      );
      $(".modal--icon.modal--close").append(
        '<svg height="21px" tabindex="0" viewBox="0 0 24 24" width="21px"><path fill="#707070" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path></svg>'
      );
      $("input.input-qty").each(function() {
        var $this = $(this),
          qty = $this.parent().find(".is-form"),
          min = Number($this.attr("min")),
          max = Number($this.attr("max"));
        if (min == 0) {
          var d = 0;
        } else d = min;
        $(qty).on("click", function() {
          if ($(this).hasClass("minus")) {
            if (d > min) d += -1;
          } else if ($(this).hasClass("plus")) {
            var x = Number($this.val()) + 1;
            if (x <= max) d += 1;
          }
          $this.attr("value", d).val(d);
        });
      });
      if ([data.view.isHomepage, data.view.isPost].includes("true")) {
        var _feeds = 0;

        function _cate() {
          if (_feeds == 0) {
            _feeds = 1;
            var cate = $(".products-list"),
              cate_blog = $(".archive");
            if (cate.length != "") {
              $(cate).each(function(i) {
                var r = Number($(cate[i]).attr("data-item")),
                  attr = $(cate[i]).attr("data-category"),
                  cate_type = $(cate[i]).attr("data-type");
                if (typeof attr !== typeof undefined && attr !== false)
                  var cate_name = $(cate[i]).attr("data-category");
                if (cate_type == "label posts")
                  var cate_url =
                    "/feeds/posts/default/-/" +
                    cate_name +
                    "?alt=json-in-script&max-results=" +
                    r;
                else if (cate_type == "recent posts")
                  cate_url =
                  "/feeds/posts/default?alt=json-in-script&max-results=" +
                  r;
                else if (cate_type == "random posts")
                  cate_url =
                  "../feeds/posts/summary615d?alt=json-in-script&amp;max-results=0";
                else if (cate_type == "related posts")
                  cate_url =
                  "/feeds/posts/summary/-/" +
                  cate_name +
                  "?alt=json-in-script&max-results=0";

                function feed_entry(e) {
                  if (e.feed.entry) {
                    for (var t = 0; t < e.feed.entry.length; t++) {
                      var start_rating = "",
                        contents = "",
                        entry = e.feed.entry[t],
                        post_id = entry.id.$t.replace(
                          "tag:blogger.com,1999:blog-" +
                          data.blog.blogId +
                          ".post-",
                          ""
                        ),
                        post_title = entry.title.$t;
                      for (var a = 0; a < entry.link.length; a++) {
                        if (entry.link[a].rel == "alternate") {
                          var post_url = entry.link[a].href;
                          break;
                        }
                      }
                      if ("media$thumbnail" in entry) {
                        var post_thumb = entry.media$thumbnail.url.replace(
                          "s72-c",
                          "s1600"
                        );
                      } else {
                        var st = entry.content.$t,
                          at = st.indexOf("<img"),
                          bt = st.indexOf('src="', at),
                          ct = st.indexOf('"', bt + 5),
                          dt = st.substr(bt + 5, ct - bt - 5);
                        if (at != -1 && bt != -1 && ct != -1 && dt != "") {
                          post_thumb = dt;
                        } else {
                          post_thumb = thumb_url;
                        }
                      }
                      var thumb_show =
                        '<img class="img-fluid" alt="' +
                        post_title +
                        '" src=' +
                        post_thumb +
                        ">";
                      if ("category" in entry) {
                        var listlabel = "",
                          price = entry.category[0].term;
                        for (var k = 0; k < entry.category.length; k++) {
                          listlabel += entry.category[k].term;
                          var strsc = listlabel.indexOf(strc),
                            strnt = listlabel.indexOf(stock),
                            strsa = listlabel.indexOf(strn),
                            no_price = listlabel.slice(
                              strsc,
                              Number(strsc) + strc
                            ),
                            cate_sale = listlabel.slice(
                              strsa,
                              Number(strsa) + strn.length
                            ),
                            cate_stock = listlabel.slice(
                              strnt,
                              Number(strnt) + stock.length
                            );
                          if (no_price) {
                            if (cate_sale == strn) {
                              var price_sale = entry.category[1].term;
                              var price_wrapper =
                                '<div class="price-wrapper w-50"><span class="gia-ban"><ins>' +
                                price +
                                '</ins><label class="dvt">' +
                                dv_tt +
                                '</label></span><br><span class="gia-giam"><del>' +
                                price_sale +
                                '</del><label class="dvt">' +
                                dv_tt +
                                "</label></span></div>";
                            } else {
                              price_wrapper =
                                '<div class="price-wrapper w-50"><span class="gia-ban"><ins>' +
                                price +
                                '</ins><label class="dvt">' +
                                dv_tt +
                                "</label></span></div>";
                            }
                            if (cate_stock != stock) {
                              var button_wrapper =
                                '<div class="button-wrapper w-50 text-right"><button aria-label="' +
                                data.messages.quickbuy +
                                '" class="button quick-buy modal--open" data-target="#order" value=' +
                                post_id +
                                ">" +
                                data.messages.quickbuy +
                                "</button></div>";
                            } else {
                              button_wrapper =
                                '<div class="button-wrapper w-50 text-right"><button class="button quick-buy modal--open" disabled="disabled" value=' +
                                post_id +
                                ">" +
                                data.messages.outstock +
                                "</button></div>";
                            }
                          } else {
                            price_wrapper =
                              '<div class="price-wrapper w-50"><span class="bolder">' +
                              data.messages.contact +
                              "</span></div>";
                            button_wrapper =
                              '<div class="button-wrapper w-50 text-right"><a class="button order" href="tel:0913997967">0913.997.967</a></div>';
                          }
                        }
                      }
                      if ("thr$total" in entry) {
                        var numcm = Number(entry.thr$total.$t);
                        if (numcm < 3) {
                          start_rating =
                            '<div class="star-rating"><span style="width:60%">Rated 3.00 out of 5</span></div>';
                        } else if ([3, 4, 5].includes(numcm)) {
                          start_rating =
                            '<div class="star-rating"><span style="width:70%">Rated 3.50 out of 5</span></div>';
                        } else if ([6, 7, 8].includes(numcm)) {
                          start_rating =
                            '<div class="star-rating"><span style="width:80%">Rated 4.00 out of 5</span></div>';
                        } else if ([9, 10, 11].includes(numcm)) {
                          start_rating =
                            '<div class="star-rating"><span style="width:90%">Rated 4.50 out of 5</span></div>';
                        } else if (numcm > 11) {
                          start_rating =
                            '<div class="star-rating"><span style="width:100%">Rated 5.00 out of 5</span></div>';
                        }
                      } else {
                        start_rating = "";
                      }
                      $(cate[i]).find(".spinner").removeClass("spinner");
                      $(cate[i])
                        .find(".row.contents")
                        .append(
                          '<div class="col-md-3 pb-4"><article class="card"><div class="card-header pd-0"><div class="image-cover"><a class="flex" href=' +
                          post_url +
                          ' title="' +
                          post_title +
                          '">' +
                          thumb_show +
                          '</a></div></div><div class="card-body"><div class="title-wrapper"><a href=' +
                          post_url +
                          ' title="' +
                          post_title +
                          '">' +
                          post_title +
                          '</a></div><div class="rating-wrapper flex align-center">' +
                          start_rating +
                          '</div></div><div class="card-footer flex align-center">' +
                          price_wrapper +
                          button_wrapper +
                          "</div></article></div>"
                        );
                    }
                  }
                  if (data.view.isHomepage == "true") {
                    $(cate[i])
                      .find(".row.contents")
                      .slick({
                        slidesToScroll: 1,
                        autoplay: true,
                        arrows: false,
                        dots: false,
                        autoplaySpeed: 4000,
                        responsive: [{
                            breakpoint: 1920,
                            settings: {
                              slidesToShow: 4,
                            },
                          },
                          {
                            breakpoint: 769,
                            settings: {
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 550,
                            settings: {
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                  }
                }
                if (cate_type == "random posts") {
                  $.get(
                    cate_url,
                    function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t;
                        if (a < r) r = a;
                        let arr = [];
                        do {
                          let num = Math.floor(Math.random() * a);
                          arr.push(num);
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index;
                          });
                        } while (arr.length < r);
                        arr.forEach(function(m) {
                          m += 1;
                          $.ajax({
                            type: "GET",
                            url: "/feeds/posts/default",
                            data: {
                              alt: "json",
                              "start-index": m,
                              "max-results": 1,
                            },
                            dataType: "jsonp",
                            success: feed_entry,
                          });
                        });
                      }
                    },
                    "jsonp"
                  );
                } else if (cate_type == "related posts") {
                  $.get(
                    cate_url,
                    function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t;
                        if (a < r) r = a;
                        let arr = [];
                        do {
                          let num = Math.floor(Math.random() * a);
                          arr.push(num);
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index;
                          });
                        } while (arr.length < r);
                        arr.forEach(function(m) {
                          m += 1;
                          $.ajax({
                            type: "GET",
                            url: "/feeds/posts/default/-/" + cate_name,
                            data: {
                              alt: "json",
                              "start-index": m,
                              "max-results": 1,
                            },
                            dataType: "jsonp",
                            success: feed_entry,
                          });
                        });
                      }
                    },
                    "jsonp"
                  );
                } else {
                  $.ajax({
                    type: "GET",
                    url: cate_url,
                    data: {
                      alt: "json",
                      "max-results": r
                    },
                    dataType: "jsonp",
                    success: feed_entry,
                  });
                }
              });
            }
            if (cate_blog.length != "") {
              $(cate_blog).each(function(i) {
                var r = Number($(cate_blog[i]).attr("data-item")),
                  attr = $(cate_blog[i]).attr("data-category"),
                  cate_type = $(cate_blog[i]).attr("data-type");
                if (typeof attr !== typeof undefined && attr !== false)
                  var cate_name = $(cate_blog[i]).attr("data-category");
                if (cate_type == "recent posts")
                  var cate_url = "../feeds/posts/default";
                else if (cate_type == "label posts")
                  cate_url = "/feeds/posts/default/-/" + cate_name;
                else if (cate_type == "random posts")
                  cate_url =
                  "../feeds/posts/summary615d?alt=json-in-script&amp;max-results=0";
                else if (cate_type == "related posts")
                  cate_url =
                  "/feeds/posts/summary/-/" +
                  cate_name +
                  "?alt=json-in-script&max-results=0";

                function get_data(e) {
                  if (e.feed.entry) {
                    for (var t = 0; t < e.feed.entry.length; t++) {
                      var entry = e.feed.entry[t],
                        entry_title = entry.title.$t;
                      for (var a = 0; a < entry.link.length; a++) {
                        if (entry.link[a].rel == "alternate") {
                          var entry_url = entry.link[a].href;
                          break;
                        }
                      }
                      if ("media$thumbnail" in entry) {
                        var entry_thumb = entry.media$thumbnail.url.replace(
                          "s72-c",
                          "s1600"
                        );
                      } else {
                        var st = entry.content.$t,
                          at = st.indexOf("<img"),
                          bt = st.indexOf('src="', at),
                          ct = st.indexOf('"', bt + 5),
                          dt = st.substr(bt + 5, ct - bt - 5);
                        if (at != -1 && bt != -1 && ct != -1 && dt != "") {
                          entry_thumb = dt;
                        } else {
                          entry_thumb = thumb_url;
                        }
                      }
                      if ("content" in entry) {
                        var post_snippet = entry.content.$t,
                          snippets = 100,
                          summary = "",
                          re = /<\S[^>]*>/g,
                          post_snippet = post_snippet.replace(re, "");
                        if (post_snippet.length < snippets) {
                          summary = post_snippet;
                        } else {
                          post_snippet = post_snippet.substring(0, snippets);
                          var quoteEnd = post_snippet.lastIndexOf(" "),
                            entry_summary = post_snippet.substring(
                              0,
                              quoteEnd
                            );
                        }
                      } else {
                        entry_summary = "";
                      }
                      $(cate_blog[i]).find(".spinner").removeClass("spinner");
                      $(cate_blog[i])
                        .find(".row.contents")
                        .append(
                          '<div class="col-md-3 pb-4"><article class="card"><div class="card-header pd-0"><div class="featured-image"><a  href=' +
                          entry_url +
                          ' title="' +
                          entry_title +
                          '"><img src=' +
                          entry_thumb +
                          ' title="' +
                          entry_title +
                          '" alt="' +
                          entry_title +
                          '"></a></div></div><div class="card-body"><div class="entry-title mb-10"><a href=' +
                          entry_url +
                          ' title="' +
                          entry_title +
                          '">' +
                          entry_title +
                          '</a></div><div class="entry-summary">' +
                          entry_summary +
                          '[...]</div></div><div class="card-footer text-center"><a class="button" href=' +
                          entry_url +
                          ' title="' +
                          entry_title +
                          '">Đọc thêm</a></div></article></div>'
                        );
                    }
                  }
                  if (data.view.isHomepage == "true") {
                    $(cate_blog[i])
                      .find(".row.contents")
                      .slick({
                        slidesToScroll: 1,
                        autoplay: true,
                        arrows: false,
                        dots: false,
                        autoplaySpeed: 4000,
                        responsive: [{
                            breakpoint: 1920,
                            settings: {
                              slidesToShow: 4,
                            },
                          },
                          {
                            breakpoint: 769,
                            settings: {
                              slidesToShow: 2,
                            },
                          },
                          {
                            breakpoint: 550,
                            settings: {
                              slidesToShow: 1,
                            },
                          },
                        ],
                      });
                  }
                }
                if (cate_type == "random posts") {
                  $.get(
                    cate_url,
                    function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t;
                        if (a < r) r = a;
                        let arr = [];
                        do {
                          let num = Math.floor(Math.random() * a);
                          arr.push(num);
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index;
                          });
                        } while (arr.length < r);
                        arr.forEach(function(m) {
                          m += 1;
                          $.ajax({
                            type: "GET",
                            url: "/feeds/posts/default",
                            data: {
                              alt: "json",
                              "start-index": m,
                              "max-results": 1,
                            },
                            dataType: "jsonp",
                            success: get_data,
                          });
                        });
                      }
                    },
                    "jsonp"
                  );
                } else if (cate_type == "related posts") {
                  $.get(
                    cate_url,
                    function(data) {
                      if (data.feed) {
                        var a = data.feed.openSearch$totalResults.$t;
                        if (a < r) r = a;
                        let arr = [];
                        do {
                          let num = Math.floor(Math.random() * a);
                          arr.push(num);
                          arr = arr.filter((item, index) => {
                            return arr.indexOf(item) === index;
                          });
                        } while (arr.length < r);
                        arr.forEach(function(m) {
                          m += 1;
                          $.ajax({
                            type: "GET",
                            url: "/feeds/posts/default/-/" + cate_name,
                            data: {
                              alt: "json",
                              "start-index": m,
                              "max-results": 1,
                            },
                            dataType: "jsonp",
                            success: get_data,
                          });
                        });
                      }
                    },
                    "jsonp"
                  );
                } else {
                  $.ajax({
                    type: "GET",
                    url: cate_url,
                    data: {
                      alt: "json",
                      "max-results": r
                    },
                    dataType: "jsonp",
                    success: get_data,
                  });
                }
              });
            }
          }
        }
        var is_load = 0;

        function loadpl() {
          if (is_load == 0) {
            is_load = 1;
            loadCSS(
              "../cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css",
              "css"
            );
            var an = document.createElement("script");
            an.async = true;
            an.src =
              "../cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js";
            var sc = document.getElementsByTagName("script")[0];
            sc.parentNode.insertBefore(an, sc);
          }
        }
        $(window).scroll(function() {
          loadpl();
          _cate();
        });
        $(window).mousemove(function() {
          loadpl();
          _cate();
        });
        setTimeout(function() {
          loadpl();
        }, 3000);
        setTimeout(function() {
          _cate();
        }, 1000);
      }
      $(document)
        .off("click", ".modal--open", modal_open)
        .on("click", ".modal--open", modal_open);
      $(document)
        .off("click", "button.quick-buy", modal_open)
        .on("click", "button.quick-buy", check_out);
      $(function() {
          $.fn.scrollToTop = function() {
            $(this).hide(),
              "0" != $(window).scrollTop() && $(this).fadeIn("slow");
            var o = $(this);
            $(window).scroll(function() {
                "0" == $(window).scrollTop() ?
                  $(o).fadeOut("slow") :
                  $(o).fadeIn("slow");
              }),
              $(this).click(function() {
                $("html,body").animate({
                  scrollTop: 0
                }, "slow");
              });
          };
        }),
        $(function() {
          $(".MD-StoTop").scrollToTop();
        });
    });
    //]]>
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script
    async="async"
    src="https://www.googletagmanager.com/gtag/js?id=UA-182978106-1"></script>
  <style type="text/css">
    body {
      overflow: hidden;
    }
  </style>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-182978106-1");
  </script>
</body>

</html>