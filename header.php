<?php
// Xác định trang hiện tại
$current_page = $_GET['current_page'] ?? 'index';

// Cấu hình title cho từng trang
$page_titles = [
    'index'      => 'Trang chủ | S-Invoice',
    'bang-gia'   => 'Bảng giá | S-Invoice',
    'mau-hoa-don'=> 'Mẫu hóa đơn | S-Invoice',
    'tinh-nang'  => 'Tính năng | S-Invoice',
    'tai-ve'     => 'Tải về | S-Invoice',
    'ho-tro'     => 'Hỗ trợ | S-Invoice',
];

$title = $page_titles[$current_page] ?? 'S-Invoice';

// Đường dẫn gốc
$base = '/sinvoice/';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($title) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
  <style>
    body { margin: 0; font-family: "Roboto", sans-serif; }

    /* ===== TOP BAR ===== */
    .top-bar {
      background:#d80000;color:#fff;display:flex;align-items:center;justify-content:center;
      flex-wrap:wrap;padding:8px 20px;gap:20px;font-size:14px;
    }
    .top-bar div { display:flex;align-items:center;gap:6px; }
    .top-bar .divider { width:1px;height:18px;background:rgba(255,255,255,0.6); }
    .top-bar a { color:#fff;text-decoration:none; }
    .social-icons { display:flex;gap:6px; }
    .social-icons a {
      display:flex;align-items:center;justify-content:center;width:30px;height:30px;
      background:#fff;color:#000;border-radius:4px;transition:.3s;font-size:18px;
    }
    .social-icons a:hover { background:#b30000;color:#fff; }

    /* ===== NAVBAR ===== */
    .menu {
      background:#fff;
      padding:0 40px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      border-bottom:1px solid #eee;
      flex-wrap:nowrap;
    }
    .menu .logo img { margin:5px;height:55px;flex-shrink:0; }

    .menu-center {
      flex:1;
      display:flex;
      justify-content:center;
    }

    .menu ul {
      list-style:none;margin:0;padding:0;
      display:flex;gap:25px;flex-wrap:nowrap;justify-content:center;
    }
    .menu li { position:relative; }
    .menu li a {
      text-decoration:none;color:#333;font-size:17px;font-weight:500;
      padding:6px 12px;border-radius:12px;transition:all .3s ease;white-space:nowrap;
    }
    .menu li a:hover,
    .menu li.active a {
      color:#d80000;border:2.5px solid #d80000;background:rgba(216,0,0,0.05);
    }

    .menu-toggle {
      display:none;
      font-size:28px;
      cursor:pointer;
      margin-left:15px;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width:1024px){.menu{padding:0 20px;}}
    @media (max-width:768px){
      .top-bar{display:none;}
      .menu{flex-wrap:wrap;}
      .menu-center{width:100%;order:3;}
      .menu ul{
        flex-direction:column;width:100%;display:none;
        margin-top:10px;background:#fff;border-top:1px solid #eee;padding:10px 0;
      }
      .menu li a{padding:12px 20px;border-radius:0;}
      .menu-toggle{display:block;}
    }
    @media (max-width:480px){.menu .logo img{height:45px;}}
  </style>
</head>

<body>

  <!-- TOP BAR -->
  <div class="top-bar">
    <div><i class="ri-phone-line"></i> 0586.89.9444</div>
    <div class="divider"></div>
    <div><i class="ri-file-list-3-line"></i> Hỗ trợ 24/24</div>
    <div class="divider"></div>
    <div><i class="ri-truck-line"></i> Khuyến mãi khủng</div>
    <div class="divider"></div>
    <div style="display:flex;align-items:center;gap:6px;">
      Follow Us:
      <div class="social-icons">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-twitter-fill"></i></a>
        <a href="#"><i class="ri-linkedin-fill"></i></a>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="menu">
    <!-- Logo trái -->
    <a href="<?= $base ?>index.php?current_page=index" class="logo">
      <img src="<?= $base ?>vninvoice.png" alt="S-Invoice Logo">
    </a>

    <!-- Menu giữa -->
    <div class="menu-center">
      <ul>
        <li class="<?= $current_page == 'index' ? 'active' : '' ?>">
          <a href="<?= $base ?>index.php?current_page=index">Trang chủ</a>
        </li>
        <li class="<?= $current_page == 'bang-gia' ? 'active' : '' ?>">
          <a href="<?= $base ?>p/bang-gia-sinvoice.php?current_page=bang-gia">Bảng giá</a>
        </li>
        <li class="<?= $current_page == 'mau-hoa-don' ? 'active' : '' ?>">
          <a href="<?= $base ?>p/mau-hoa-don-gtgt.php?current_page=mau-hoa-don">Mẫu hóa đơn</a>
        </li>
        <li class="<?= $current_page == 'tinh-nang' ? 'active' : '' ?>">
          <a href="<?= $base ?>p/tinh-nang.php?current_page=tinh-nang">Tính năng</a>
        </li>
        <li class="<?= $current_page == 'tai-ve' ? 'active' : '' ?>">
          <a href="<?= $base ?>p/tai-ve.php?current_page=tai-ve">Tải về</a>
        </li>
        <li class="<?= $current_page == 'ho-tro' ? 'active' : '' ?>">
          <a href="<?= $base ?>2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php?current_page=ho-tro">Hỗ trợ</a>
        </li>
      </ul>
    </div>

    <!-- Toggle mobile bên phải -->
    <i class="ri-menu-line menu-toggle"></i>
  </nav>

  <script>
    // Toggle menu mobile
    const menuToggle = document.querySelector(".menu-toggle");
    const menuUL = document.querySelector(".menu ul");
    menuToggle.addEventListener("click", () => {
      menuUL.style.display = menuUL.style.display === "flex" ? "none" : "flex";
      menuUL.style.flexDirection = "column";
    });
  </script>

</body>
</html>
