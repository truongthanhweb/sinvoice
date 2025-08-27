-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2025 lúc 05:09 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_gioithieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL,
  `isTop` enum('true','false') NOT NULL DEFAULT 'false',
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`, `isTop`, `CreatedAt`) VALUES
(1, 'Thức Ăn Thủy Sản ', 'true', '2025-01-09 03:08:08'),
(32, 'MAXONE', 'true', '2025-01-13 02:45:43'),
(33, 'COMOS', 'true', '2025-01-15 03:25:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_customer`
--

CREATE TABLE `contact_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact_customer`
--

INSERT INTO `contact_customer` (`id`, `name`, `address`, `email`, `phone`, `subject`, `content`, `created_at`) VALUES
(1, 'Long', 'test', 'test@gmail.com', '0321654987', 'tét', 'tét', '2025-04-24 06:39:02'),
(2, 'Long 1', 'thường tín, hà nội', 'long@gmail.com', '032165497', 'test', 'tôi cần hỗ trợ: hãy liên hệ tôi', '2025-04-24 06:40:13'),
(3, 'nguyễn thành logn', 'số 130, trung hòa, cầu giấy', 'nguyenvanthanhlong@gmail.com', '0321654987', 'tết này con sẽ về', 'tôi cần bạn tư vấn cho tôi liên hệ', '2025-04-24 06:48:43'),
(4, 'tuấn anh', 'trung hòa1', 'tuananh@gmail.com', '0321654978', 'teest', 'tôi cần tư vaasn', '2025-04-24 06:51:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `create_at`) VALUES
(1, 'KenNgx', '0328501599', 'kenngx9x@gmail.com', 'Hà Nội', '2025-01-16 17:04:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `managermeta`
--

CREATE TABLE `managermeta` (
  `MetaID` int(11) NOT NULL,
  `Meta_Type` enum('description','opengraphic-description','keywords') NOT NULL,
  `MetaContent` varchar(255) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `website_title` text NOT NULL DEFAULT 'Web Giới Thiệu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `managermeta`
--

INSERT INTO `managermeta` (`MetaID`, `Meta_Type`, `MetaContent`, `CreatedAt`, `website_title`) VALUES
(1, 'description', 'Trường Thành Web cung cấp dịch vụ Giảp Pháp website chuyên nghiệp, chuẩn SEO và trọn gói, giúp tăng thứ hạng tìm kiếm và thu hút khách hàng hiệu quả', '2025-01-16 03:04:15', 'Web Giới Thiệu'),
(2, 'opengraphic-description', 'Dịch vụ Giảp Pháp website chuyên nghiệp, chuẩn SEO - Trường Thành Web 1', '2025-01-16 03:04:46', 'Web Giới Thiệu'),
(3, 'keywords', 'Giảp Pháp website, dịch vụ thiết kế website, thiết kế website chuẩn SEO, thiết kế web chuyên nghiệp, làm website doanh nghiệp, thiết kế website trọn gói, Trường Thành Web, thiết kế website bán hàng, website giới thiệu doanh nghiệp', '2025-01-16 03:05:07', 'Web Giới Thiệu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(255) DEFAULT NULL,
  `news_content` text DEFAULT NULL,
  `new_summary` text NOT NULL,
  `news_author` varchar(255) DEFAULT NULL,
  `news_img` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_content`, `new_summary`, `news_author`, `news_img`, `slug`, `create_time`, `update_time`) VALUES
(15, 'BGF Group hân hoan chúc mừng Ngày Phụ Nữ Việt Nam 20/10/2024', '<h4>Nhân ngày đặc biệt này, BGF Group xin gửi những lời chúc tốt đẹp nhất đến tất cả các chị em phụ nữ – những người luôn là nguồn cảm hứng, sự sáng tạo và sức mạnh lớn lao trong cuộc sống.</h4><h4><img src=\"https://bgf.com.vn/wp-content/uploads/2024/11/f09f8cb8-bgf-group-han-hoan-chuc-mung-ngay-phu-nu-viet-nam-20-10-2024-f09f8cb8-8424.png\" alt=\" BGF Group hân hoan chúc mừng Ngày Phụ Nữ Việt Nam 20/10/2024 \"> Chúc tất cả các chị em phụ nữ luôn mạnh khỏe, hạnh phúc và thành công trong mọi lĩnh vực của cuộc sống.</h4><h4>Xin hãy luôn tỏa sáng và tiếp tục viết nên những câu chuyện đáng nhớ, truyền cảm hứng cho thế hệ mai sau! <img src=\"https://bgf.com.vn/wp-content/uploads/2024/11/f09f8cb8-bgf-group-han-hoan-chuc-mung-ngay-phu-nu-viet-nam-20-10-2024-f09f8cb8-8424-1.png\" alt=\" BGF Group hân hoan chúc mừng Ngày Phụ Nữ Việt Nam 20/10/2024 \"></h4><h4>BGF Group – Luôn đồng hành và tôn vinh phụ nữ Việt.</h4>', 'Nhân ngày đặc biệt này, BGF Group xin gửi những lời chúc tốt đẹp nhất đến tất cả các chị em phụ nữ – những người luôn là nguồn cảm hứng, sự sáng tạo và sức mạnh lớn lao trong cuộc sống.', 'admin', '68088fe9180e3.webp', 'bfg-group-han-hoan-chuc-mung-ngay-phu-nu-viet-nam', '2025-04-23 06:59:53', '2025-04-23 06:59:53'),
(16, 'NHÂN SỰ LÀ TÀI SẢN  ( ABBANK & BGF – BIGRFEED )', '<h4>Với phương châm “Nhân sự là tài sản”, BGF-BIGRFEED đã khẳng định tầm quan trọng của sức khỏe trong việc xây dựng một đội ngũ nhân viên vững mạnh và hiệu quả. Nhằm chăm sóc sức khỏe cho Cán bộ công nhân viên, BGF-BIGRFEED đã phối hợp cùng Ngân Hàng ABBANK tổ chức chương trình khám sức khỏe định kỳ.</h4><h4>Chương trình không chỉ mang lại cơ hội để Cán bộ công nhân viên kiểm tra sức khỏe toàn diện mà còn giúp họ nhận thức rõ hơn về tầm quan trọng của việc chăm sóc bản thân. Qua các buổi khám, nhân viên được tư vấn từ các bác sĩ chuyên môn về chế độ dinh dưỡng, lối sống lành mạnh và cách phòng ngừa bệnh tật.</h4><h4>Chăm sóc sức khỏe cho Cán bộ công nhân viên chính là một phần không thể thiếu trong chiến lược phát triển bền vững của BGF-BIGRFEED. Đầu tư vào sức khỏe nhân viên chính là đầu tư cho sự phát triển bền vững của doanh nghiệp. BGF-BIGRFEED cam kết sẽ tiếp tục duy trì các chương trình chăm sóc sức khỏe, tạo điều kiện tốt nhất cho mọi người, từ đó xây dựng một môi trường làm việc năng động và hiệu quả.</h4><h4>Chúng tôi xin gửi lời cảm ơn chân thành đến Ngân Hàng ABBANK Chi Nhánh Hưng Yên và Đơn vị Dai Ichi Life đã hỗ trợ tích cực cho chương trình này. Sự hợp tác và đồng hành của các bạn đã giúp chúng tôi thực hiện thành công mục tiêu chăm sóc sức khỏe cho toàn thể Cán bộ công nhân viên.</h4><h4>Ngoài ra, xin chân thành cảm ơn toàn thể Cán bộ công nhân viên BGF-BIGRFEED đã tham gia và thể hiện sự quan tâm đến sức khỏe của mình. Chính sự nỗ lực và tinh thần trách nhiệm của tất cả mọi người đã tạo nên thành công của chương trình này.</h4><h4>BGF-BIGRFEED cam kết sẽ tiếp tục duy trì các chương trình chăm sóc sức khỏe, góp phần xây dựng một môi trường làm việc năng động và hiệu quả. Xin chân thành cảm ơn!</h4>', 'Với phương châm “Nhân sự là tài sản”, BGF-BIGRFEED đã khẳng định tầm quan trọng của sức khỏe trong việc xây dựng một đội ngũ nhân viên vững mạnh và hiệu quả. Nhằm chăm sóc sức khỏe cho Cán bộ công nhân viên, BGF-BIGRFEED đã phối hợp cùng Ngân Hàng ABBANK tổ chức chương trình khám sức khỏe định kỳ.', 'admin', '6808904745116.png', 'nhan-su-la-tai-san', '2025-04-23 07:01:27', '2025-04-23 07:01:27'),
(18, 'test chỉnh sửa', '<p>test chỉnh sửa</p>', 'test chỉnh sửa', 'test chỉnh sửa', '68099bab5835b.png', 'test1', '2025-04-24 02:02:19', '2025-04-24 02:02:19'),
(19, 'test2', '<p>Nhập nội dung test2</p>', 'test2', 'test2', '6809edc4c1afd.png', 'test2', '2025-04-24 07:14:35', '2025-04-24 07:14:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_rate` int(11) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `product_album` text DEFAULT NULL,
  `product_pricesales` text DEFAULT NULL,
  `product_features` text DEFAULT NULL,
  `product_parameters` text DEFAULT NULL,
  `product_comment` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_services` text DEFAULT NULL,
  `outstanding_products` enum('true','false') DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `CategoryID`, `product_description`, `product_price`, `product_rate`, `product_img`, `product_album`, `product_pricesales`, `product_features`, `product_parameters`, `product_comment`, `create_at`, `update_at`, `product_services`, `outstanding_products`) VALUES
(48, 'HỖN HỢP ĐẶC BIỆT HEO CON TẬP ĂN TỪ 7KG – 20KG', 32, '<blockquote><ul><li><strong>HƯỚNG DẪN SỬ DỤNG VÀ BẢO QUẢN :</strong></li></ul></blockquote><p>Cho HEO CON ăn tự do</p><p>Không cần bổ sung bất cứ loại thức ăn nào khác</p><p>Cung cấp đủ nước sạch và mát.</p><p>Bảo quản nơi khô ráo, tránh ánh nắng mặt trời trực tiếp.</p><p>Thức ăn dành cho HEO CON TẬP ĂN TỪ 7KG – 20KG</p>', 0, NULL, '67fc959a85928.png', '67fc959a85cf7.webp,67fc959a85ec0.png,67fc959a860e6.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 04:56:58', '2025-04-14 04:56:58', '', 'true'),
(49, 'HỖN HỢP CHO CÁ CÓ VẨY GIAI ĐOẠN TRÊN 500G', 1, '<h4><strong>HỖN HỢP CHO CÁ CÓ VẨY GIAI ĐOẠN TRÊN 500G</strong></h4>', 0, NULL, '67fcb489e439f.webp', '67fcb489e4673.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:08:57', '2025-04-14 07:08:57', '', 'true'),
(50, 'HỖN HỢP GÀ TRẮNG TỪ 1 – 14 NGÀY TUỔI', 33, '<h3><strong>HỖN HỢP GÀ TRẮNG TỪ 1 – 14 NGÀY TUỔI</strong></h3>', 0, NULL, '67fcb59561e6c.webp', '67fcb59562057.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:13:25', '2025-04-14 07:13:25', '', 'true'),
(51, 'HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI', 32, '<p>HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI</p>', 0, NULL, '67fcb5e2ded8f.webp', '67fcb5e2defd6.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:14:42', '2025-04-14 07:14:42', '', 'true'),
(52, 'HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI', 33, '<p>HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI</p>', 0, NULL, '67fcb5ff53a84.webp', '67fcb5ff53d12.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:15:11', '2025-04-14 07:15:11', '', 'true'),
(53, 'HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI', 33, '<p>HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI</p>', 0, NULL, '67fcb6183c564.webp', '67fcb6183c8d5.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:15:36', '2025-04-14 07:15:36', '', 'false'),
(54, 'HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI', 33, '<p>HỖN HỢP GÀ THỊT LÔNG MÀU TỪ 1 – 21 NGÀY TUỔI</p>', 0, NULL, '67fcb99bed55a.webp', '67fcb99bed823.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:30:35', '2025-04-14 07:30:35', '', 'false'),
(55, 'HỖN HỢP CHO BÒ THỊT, BÒ VỖ BÉO', 32, '<h2><strong>HỖN HỢP CHO BÒ THỊT, BÒ VỖ BÉO</strong></h2>', 0, NULL, '67fcb9ebe3606.webp', '67fcb9ebe383d.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:31:55', '2025-04-14 07:31:55', '', 'false'),
(56, 'HỖN HỢP CHO VỊT, NGAN THỊT TỪ 1 NGÀY TUỔI – XUẤT BÁN', 32, '<h2><strong>HỖN HỢP CHO VỊT, NGAN THỊT TỪ 1 NGÀY TUỔI – XUẤT BÁN</strong></h2>', 0, NULL, '67fcba2df1b94.webp', '67fcba2df1e83.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:33:01', '2025-04-14 07:33:01', '', 'true'),
(57, 'HỖN HỢP CHO CÁ CÓ VẨY GIAI ĐOẠN 200 – 400G', 1, '<h2><strong>HỖN HỢP CHO CÁ CÓ VẨY GIAI ĐOẠN 200 – 400G</strong></h2>', 0, NULL, '67fcba76bfde4.webp', '67fcba76bffe6.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:34:14', '2025-04-14 07:34:14', '', 'true'),
(58, 'THỖN HỢP CHO CÁ CÓ VẨY GIAI ĐOẠN 10 – 20G', 1, '<h2><strong>THỖN HỢP CHO CÁ CÓ VẨY GIAI ĐOẠN 10 – 20G</strong></h2>', 0, NULL, '67fcba9ee5ba4.webp', '67fcba9ee5db0.webp', '0', '[{\"icon\":null,\"feature\":\"{\\\"icon\\\":null,\\\"feature\\\":\\\"\\\"}\"}]', '<p>Nhập Thông Số Kỹ Thuật</p>', NULL, '2025-04-14 07:34:54', '2025-04-14 07:34:54', '', 'true');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_summary` varchar(255) DEFAULT NULL,
  `project_content` varchar(255) DEFAULT NULL,
  `project_tag` varchar(255) DEFAULT NULL,
  `project_img` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `outstanding_project` enum('true','false') DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_summary`, `project_content`, `project_tag`, `project_img`, `create_at`, `update_at`, `outstanding_project`) VALUES
(18, 'Tủ bếp Laminate nhà chị Hiền', '<h2><strong>Tủ bếp Laminate nhà chị Hiền1</strong></h2>', '<p>Đã có thương hiệu trong lĩnh vực thời trang, những phụ kiện nhỏ như khăn cho tách cà phê, thậm chí cả hồ bơi của khách sạn cũng được lát gạch như một tấm chăn.</p><p>Khách sạn có sân bay riêng, dịch vụ hoàn hảo, chu đáo: wifi miễn phí, TV đính kèm iPad', 'DV', '67aa9fba63a21.jpg', '2025-02-11 00:54:18', '2025-02-12 02:52:33', 'true'),
(19, 'Thiết kế nội thất phòng ngủ chung cư', '<h2><strong>Thiết kế nội thất phòng ngủ chung cư</strong></h2>', '<p>&nbsp;</p><p><a href=\"https://noithat1.truongthanhweb.com/2024/09/10/thiet-ke-noi-that-phong-ngu-chung-cu/index.html\"><img src=\"https://noithat1.truongthanhweb.com/wp-content/uploads/2024/09/du-an2-1024x601.jpg\" alt=\"\" srcset=\"\r\n                       ', 'DV', '67aaa06f36a1a.jpg', '2025-02-11 00:57:19', '2025-02-11 00:57:19', 'true'),
(23, 'Tủ bếp Laminate nhà chị Hiền', '<p>Tủ bếp Laminate nhà chị Hiền</p>', '<p>Tủ bếp Laminate nhà chị Hiền</p>', 'DV', '67ac0f91708c4.jpg', '2025-02-12 03:03:45', '2025-02-12 03:03:45', 'false'),
(24, 'Tủ bếp Laminate nhà chị Hiền', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac0fa32fc35.jpg', '2025-02-12 03:04:03', '2025-02-12 03:04:03', 'false'),
(26, 'Tủ bếp Laminate nhà chị Hiền', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac10d30d86a.jpg', '2025-02-12 03:09:07', '2025-02-12 03:09:07', 'true'),
(27, 'Tủ bếp Laminate nhà chị Hiền 6', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac10e14729f.jpg', '2025-02-12 03:09:21', '2025-02-12 03:09:21', 'true');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `RateID` int(11) NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Comment` text DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_summary` varchar(255) DEFAULT NULL,
  `service_content` varchar(255) DEFAULT NULL,
  `service_tag` varchar(255) DEFAULT NULL,
  `service_img` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_summary`, `service_content`, `service_tag`, `service_img`, `create_at`, `update_at`) VALUES
(9, 'Nội thất decor', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'zxc', '67a9c134013e5.png', '2025-02-10 09:04:52', '2025-02-11 01:01:23'),
(10, 'Nội thất decord', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac0f3a244a4.png', '2025-02-12 03:02:18', '2025-02-12 03:02:18'),
(11, 'Nội thất decor 3', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac0f47d7e8a.jpg', '2025-02-12 03:02:31', '2025-02-12 03:02:31'),
(12, 'Nội thất decord 4', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac0f5615e31.jpg', '2025-02-12 03:02:46', '2025-02-12 03:02:46'),
(13, 'Nội thất decord 5', '<p>Mô tả ngắn</p>', '<p>Nhập nội dung</p>', 'DV', '67ac0f6249a9f.jpg', '2025-02-12 03:02:58', '2025-02-12 03:02:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag_service`
--

CREATE TABLE `tag_service` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tag_service`
--

INSERT INTO `tag_service` (`tag_id`, `tag_name`, `create_at`) VALUES
(9, 'Miễn Phí Vận Chuyển', '2025-02-13 10:00:54'),
(11, 'Đạt Tiêu Chuẩn Chất Lượng Cao', '2025-04-23 01:59:46'),
(12, 'Thân Thiện Với Môi Trường', '2025-04-23 02:01:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `youtube_videos`
--

CREATE TABLE `youtube_videos` (
  `id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `youtube_videos`
--

INSERT INTO `youtube_videos` (`id`, `video_url`, `title`, `status`, `created_at`) VALUES
(2, 'https://www.youtube.com/watch?v=5eYevf1PmcU', 'CAY - KHẮC HƯNG, JIMMII NGUYỄN | OFFICIAL MUSIC VIDEO', 1, '2025-04-24 02:27:56'),
(3, 'https://www.youtube.com/watch?v=tVl_wt4hRjA', 'ĐẠI THIÊN BỒNG x THAT GIRL x TALKING TO THE MOON | ALBUM TRACK REMIX TIK TOK 2024 | D2O MEDIA GROUP', 1, '2025-04-24 03:43:22'),
(4, 'https://www.youtube.com/watch?v=pHQimF6UH3o', ' XUẤT SƠN x CỐT TRUYỆN BI THƯƠNG x ĐÁY BIỂN | ALBUM TRACK REMIX HOT TIK TOK 2024 | D2O MEDIA GROUP', 1, '2025-04-24 03:43:39'),
(5, 'https://www.youtube.com/watch?v=YqHEoobgW0w', 'Ông Trump CẤM quan chức Mỹ tới đại lễ 30/4: Cú tát thẳng vào 50 năm hòa giải!?!', 1, '2025-04-24 03:51:11'),
(6, 'https://www.youtube.com/watch?v=tFQ0LcBfGQg', ' #986 Vụ Bùi Đình Khánh: M.A T.Ú.Y Tàn Phá Cơ Thể Khủng Khiếp Như Thế Nào?', 0, '2025-04-24 04:09:33'),
(8, 'https://www.youtube.com/watch?v=POYXRE88WzE', ' #986 Vụ Bùi Đình Khánh: M.A T.Ú.Y Tàn Phá Cơ Thể Khủng Khiếp Như Thế Nào?', 0, '2025-04-24 04:23:49'),
(12, 'https://www.youtube.com/watch?v=PUlawXzZAt0', 'acx', 0, '2025-04-24 04:55:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `contact_customer`
--
ALTER TABLE `contact_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `managermeta`
--
ALTER TABLE `managermeta`
  ADD PRIMARY KEY (`MetaID`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`RateID`),
  ADD KEY `news_id` (`news_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Chỉ mục cho bảng `tag_service`
--
ALTER TABLE `tag_service`
  ADD PRIMARY KEY (`tag_id`);

--
-- Chỉ mục cho bảng `youtube_videos`
--
ALTER TABLE `youtube_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `contact_customer`
--
ALTER TABLE `contact_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `managermeta`
--
ALTER TABLE `managermeta`
  MODIFY `MetaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `rate`
--
ALTER TABLE `rate`
  MODIFY `RateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tag_service`
--
ALTER TABLE `tag_service`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `youtube_videos`
--
ALTER TABLE `youtube_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `category` (`CategoryID`);

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
