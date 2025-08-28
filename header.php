<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Header S-Invoice</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      font-family: "Roboto", sans-serif;
    }

    /* ========== TOP BAR ========== */
    .top-bar {
      background-color: #d80000;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      padding: 8px 20px;
      gap: 20px;
      font-size: 14px;
    }

    .top-bar div {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .top-bar .divider {
      width: 1px;
      height: 18px;
      background-color: rgba(255, 255, 255, 0.6);
    }

    .top-bar a {
      color: #fff;
      text-decoration: none;
    }

    .social-icons {
      display: flex;
      gap: 6px;
    }

    .social-icons a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 30px;
      height: 30px;
      background: #fff;
      color: #000;
      border-radius: 4px;
      transition: 0.3s;
      font-size: 18px;
    }

    .social-icons a:hover {
      background: #b30000;
      color: #fff;
    }

    /* ========== NAVBAR ========== */
    .menu {
      background: #fff;
      padding: 0 200px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #eee;
      flex-wrap: nowrap;
      position: relative;
    }

    .menu img {
      height: 55px;
      flex-shrink: 0;
    }

    .menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 25px;
      flex-wrap: nowrap;
    }

    .menu li {
      position: relative;
    }

    .menu li a {
      text-decoration: none;
      color: #333;
      font-size: 17px;
      font-weight: 500;
      padding: 6px 12px;
      border-radius: 12px;
      transition: all 0.3s ease;
      white-space: nowrap;
    }

    .menu li a:hover,
    .menu li.active a {
      color: #d80000;
      border: 2.5px solid #d80000;
      background-color: rgba(216, 0, 0, 0.05);
    }

    /* Hamburger menu */
    .menu-toggle {
      display: none;
      font-size: 28px;
      cursor: pointer;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 1200px) {
      .menu {
        padding: 0 40px;
      }
    }

    @media (max-width: 1024px) {
      .menu {
        padding: 0 20px;
      }
    }

    @media (max-width: 768px) {
      .top-bar {
        display: none;
      }

      .menu {
        flex-wrap: wrap;
      }

      .menu ul {
        flex-direction: column;
        width: 100%;
        display: none;
        margin-top: 10px;
        background: #fff;
        border-top: 1px solid #eee;
        padding: 10px 0;
      }

      .menu li a {
        padding: 12px 20px;
        border-radius: 0;
      }

      .menu-toggle {
        display: block;
      }
    }

    @media (max-width: 480px) {
      .menu img {
        height: 45px;
      }
    }
  </style>
</head>

<body>

  <!-- TOP BAR -->
  <div class="top-bar">
    <div><i class="ri-phone-line"></i> 0868.56.8788</div>
    <div class="divider"></div>
    <div><i class="ri-file-list-3-line"></i> Hỗ trợ 24/24</div>
    <div class="divider"></div>
    <div><i class="ri-truck-line"></i> Khuyến mãi khủng</div>
    <div class="divider"></div>
    <div style="display: flex; align-items: center; gap: 6px;">
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
    <a href="index.php" class="logo">
      <img src="https://dichvuviettel.com.vn/upload/data/config/2/682C88BF-4FDB-9A87-5DE2-EFB4086F18AF.png" alt="S-Invoice Logo">
    </a>
    <i class="ri-menu-line menu-toggle"></i>
    <?php $base = '/sinvoice/'; ?>
    <ul>
      <li><a href="<?= $base ?>index.php">Trang chủ</a></li>
      <li><a href="<?= $base ?>p/bang-gia-sinvoice.php">Bảng giá</a></li>
      <li><a href="<?= $base ?>p/mau-hoa-don-gtgt.php">Mẫu hóa đơn</a></li>
      <li><a href="<?= $base ?>p/tinh-nang.php">Tính năng</a></li>
      <li><a href="<?= $base ?>p/tai-ve.php">Tải về</a></li>
      <li><a href="<?= $base ?>2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php">Hỗ trợ</a></li>
    </ul>
  </nav>

  <script>
    // Active menu
    document.addEventListener("DOMContentLoaded", () => {
      const currentUrl = location.pathname + location.hash;
      document.querySelectorAll(".menu a").forEach(link => {
        const linkUrl = new URL(link.href, location.origin);
        const linkFull = linkUrl.pathname + linkUrl.hash;
        if (linkFull === currentUrl) {
          link.parentElement.classList.add("active");
        }
      });
    });

    // Scroll với offset
    if (location.hash) {
      const element = document.querySelector(location.hash);
      if (element) {
        const offset = 80;
        const elementPosition = element.getBoundingClientRect().top + window.scrollY;
        window.scrollTo({
          top: elementPosition - offset,
          behavior: "smooth"
        });
      }
    }

    // Toggle mobile menu
    const menuToggle = document.querySelector(".menu-toggle");
    const menuUL = document.querySelector(".menu ul");
    menuToggle.addEventListener("click", () => {
      if (menuUL.style.display === "flex") {
        menuUL.style.display = "none";
      } else {
        menuUL.style.display = "flex";
        menuUL.style.flexDirection = "column";
      }
    });
  </script>

</body>

</html>
