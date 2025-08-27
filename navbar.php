<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Điều Hướng</title>
  <style>
    body { margin: 0; font-family: Arial, sans-serif; }
    .menu { background: #eee; padding: 12px 20px; display: flex; align-items: center; }
    .menu img { height: 45px; margin-right: 30px; }
    .menu ul { list-style: none; margin: 0; padding: 0; display: flex; }
    .menu li { margin-right: 18px; }
    .menu li a { text-decoration: none; color: #333; font-size: 15px; }
    .menu li.active a { font-weight: bold; color: #c00; }
  </style>
</head>
<body>

<nav class="menu">
  <a href="index.php" class="logo">
    <img src="https://dichvuviettel.com.vn/upload/data/config/2/682C88BF-4FDB-9A87-5DE2-EFB4086F18AF.png" alt="S-Invoice Logo">
  </a>
  <ul>
    <li><a href="index.php">Trang chủ</a></li>
    <li><a href="p/tinh-nang.php">Tính năng</a></li>
    <li><a href="p/tai-ve.php">Tải về</a></li>
    <li><a href="2021/02/hdsd-cac-buoc-cau-hinh-ky-hoa-don-dien-tu-sinvoice-bang-usb-viettel.php">Hỗ trợ</a></li>
    <li><a href="p/bang-gia-sinvoice.php">Bảng giá</a></li>
    <li><a href="p/mau-hoa-don-gtgt.php">Mẫu hóa đơn</a></li>
  </ul>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const currentPage = location.pathname.split("/").pop();
    document.querySelectorAll(".menu a").forEach(link => {
      if (link.getAttribute("href").endsWith(currentPage)) {
        link.parentElement.classList.add("active");
      }
    });
  });
</script>

</body>
</html>
