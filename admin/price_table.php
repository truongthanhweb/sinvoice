<!-- PHP -->
<?php
include 'config/db_connection.php';
if (isset($_GET['current_page'])) {
    switch ($_GET['current_page']) {
        case 'delete_price':
            include 'delete_price.php';
            exit; // Trả JSON, không render HTML

        case 'add_price':
            include 'add_price.php';
            exit; // Nếu muốn hiển thị form add riêng

        case 'edit_price':
            include 'edit_price.php';
            exit; // Nếu muốn hiển thị form edit riêng
    }
}
// $img_path = 'https://id.truongthanhweb.com/admin/assets/img/' . 'assets/img/' . $_SESSION['username'];
// Số bản ghi hiển thị mỗi trang
$records_per_page = 10;

// Xác định trang hiện tại (nếu không có, mặc định là trang 1)
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Tính toán giá trị OFFSET
$offset = ($current_page - 1) * $records_per_page;

// Kiểm tra từ khóa tìm kiếm
$search_keyword = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['search_keyword'])) {
    $search_keyword = trim($_POST['search_keyword']);
}

// Lấy tổng số bản ghi
if (!empty($search_keyword)) {
    // Nếu có tìm kiếm
    $total_records_sql = "SELECT COUNT(*) AS total FROM products WHERE product_name LIKE ?";
    $stmt = $conn->prepare($total_records_sql);
    $search_param = '%' . $search_keyword . '%';
    $stmt->bind_param('s', $search_param);
    $stmt->execute();
    $result = $stmt->get_result();
    $total_records = $result->fetch_assoc()['total'];
    $stmt->close();

    // Truy vấn lấy dữ liệu phân trang với tìm kiếm
    $sql = "SELECT * FROM products WHERE product_name LIKE ? ORDER BY create_time DESC LIMIT ? OFFSET ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sii', $search_param, $records_per_page, $offset);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
} else {
    // Nếu không có tìm kiếm
    $total_records_sql = "SELECT COUNT(*) AS total FROM products";
    $result = $conn->query($total_records_sql);
    $total_records = $result->fetch_assoc()['total'];

    // Truy vấn lấy dữ liệu phân trang
    $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT $records_per_page OFFSET $offset";
    $result = $conn->query($sql);
}


// Tính tổng số trang
$total_pages = ceil($total_records / $records_per_page);

$conn->close();
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Quản Lý Báo Giá</title>
    <link rel="stylesheet" href="./css/bootstrap1.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="icon" type="image/ico" href="https://truongthanhweb.com/wp-content/uploads/sites/208/2020/06/favicon.ico">
    <link rel="stylesheet" href="./css/style1.css">
    <style>
        .table-responsive {
            margin-top: 20px;
        }

        .pagination {
            margin: 20px;
        }

        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-link {
            color: #007bff;
        }

        .page-link:hover {
            color: #0056b3;
        }

        .news-content-preview {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #007bff;
            /* xanh biển */
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="crm_body_bg">
    <?php
    $currentPage = 'price_table';
    include('./includes/sidebar.php');
    ?>
    <section class="main_content dashboard_part">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area">
                            <div class="search_inner"></div>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="././img/client_img-1.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Xin Chào </p>
                                        <h5><?php echo $_SESSION['fullname']; ?></h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="../profile/index.php">Thông Tin Cá Nhân</a>
                                        <a href="#">Cài Đặt</a>
                                        <a href="../logout.php">Đăng Xuất</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content_iner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_header_title">
                                        <h3>Quản Lý Báo giá</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dashboard_breadcam text-end">
                                        <p><a href="../index.php">Dashboard</a> <i class="fas fa-caret-right"></i> Bảng Báo giá</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form action="" method="POST">
                                                <div class="search_field">
                                                    <input type="text" name="search_keyword" placeholder="Tìm kiếm bài viết..." value="<?php echo isset($_POST['search_keyword']) ? htmlspecialchars($_POST['search_keyword']) : ''; ?>">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ms-2">
                                        <a href="price_table.php?current_page=add_price" class="btn_1">THÊM BẢNG GIÁ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th>STT</th>
                                                <th>Tên Bảng Giá</th>
                                                <th>Giá Tiền</th>
                                                <th>Mô Tả</th>
                                                <th>Số Lượng</th>
                                                <th>Đơn Giá</th>
                                                <th>Bảng Giá HOT</th>
                                                <th>Ngày Tạo</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result->num_rows > 0) {
                                                $stt = $offset + 1;
                                                while ($row = $result->fetch_assoc()) {
                                                    // // Xử lý nội dung: loại bỏ HTML và rút ngắn
                                                    // $content_preview = strip_tags($row['product_name']);
                                                    // $content_preview = mb_substr($content_preview, 0, 100, 'UTF-8');
                                                    // if (mb_strlen($row['product_name'], 'UTF-8') > 100) {
                                                    //     $content_preview .= '...';
                                                    // }
                                                    $features = json_decode($row['product_description'], true);

                                                    echo "<tr class='text-center'>";
                                                    echo "<th scope='row'>" . $stt . "</th>";
                                                    echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                                                    echo "<td>" . htmlspecialchars($row['product_price']) . "</td>";
                                                    echo "<td>" . htmlspecialchars($row['product_description']) . "</td>";
                                                    echo "<td>" . htmlspecialchars($row['stock_quantity']) . "</td>";
                                                    echo "<td>" . htmlspecialchars($row['product_features']) . "</td>";
                                                    echo "<td>
                                                            <label class='switch'>
                                                                <input type='checkbox' class='toggle-outstanding' data-id='" . $row['product_id'] . "' " . ($row['outstanding_products'] === 'true' ? 'checked' : '') . ">
                                                                <span class='slider round'></span>
                                                            </label>
                                                        </td>";

                                                    echo "<td>" . htmlspecialchars($row['create_at']) . "</td>";
                                                    echo "<td>
                                                        <a href='price_table.php?current_page=edit_price&id=" . urlencode($row['product_id']) . "' class='btn btn-primary text-white btn-sm'>
                                                            <i class='fa-solid fa-pen-to-square'></i>
                                                        </a>
                                                        <a href='delete_price.php?id=" . urlencode($row['product_id']) . "' class='btn btn-danger text-white btn-sm delete-btn' data-id='" . urlencode($row['product_id']) . "'>
                                                            <i class='fa-solid fa-trash'></i>
                                                        </a>
                                                    </td>";
                                                    echo "</tr>";
                                                    $stt++;
                                                }
                                            } else {
                                                echo "<tr><td colspan='9' class='text-center'>Không có bài viết nào.</td></tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <div class="pagination">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-center">
                                                <?php if ($current_page > 1): ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?page=<?php echo $current_page - 1; ?>&search_keyword=<?php echo urlencode($search_keyword); ?>">« Trước</a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php for ($page = 1; $page <= $total_pages; $page++): ?>
                                                    <li class="page-item <?php echo ($page == $current_page) ? 'active' : ''; ?>">
                                                        <a class="page-link" href="?page=<?php echo $page; ?>&search_keyword=<?php echo urlencode($search_keyword); ?>"><?php echo $page; ?></a>
                                                    </li>
                                                <?php endfor; ?>

                                                <?php if ($current_page < $total_pages): ?>
                                                    <li class="page-item">
                                                        <a class="page-link" href="?page=<?php echo $current_page + 1; ?>&search_keyword=<?php echo urlencode($search_keyword); ?>">Sau »</a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./js/jquery1-3.4.1.min.js"></script>
    <script src="./js/popper1.min.js"></script>
    <script src="./js/bootstrap1.min.js"></script>
    <script src="./js/metisMenu.js"></script>
    <script src="./vendors/count_up/jquery.waypoints.min.js"></script>
    <script src="./vendors/chartlist/Chart.min.js"></script>
    <script src="./vendors/count_up/jquery.counterup.min.js"></script>
    <script src="./vendors/swiper_slider/js/swiper.min.js"></script>
    <script src="./vendors/niceselect/js/jquery.nice-select.min.js"></script>
    <script src="./vendors/owl_carousel/js/owl.carousel.min.js"></script>
    <script src="./vendors/gijgo/gijgo.min.js"></script>
    <script src="./vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="./vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="./vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="./vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="./vendors/datatable/js/jszip.min.js"></script>
    <script src="./vendors/datatable/js/pdfmake.min.js"></script>
    <script src="./vendors/datatable/js/vfs_fonts.js"></script>
    <script src="./vendors/datatable/js/buttons.php5.min.js"></script>
    <script src="./vendors/datatable/js/buttons.print.min.js"></script>
    <script src="./js/chart.min.js"></script>
    <script src="./vendors/progressbar/jquery.barfiller.js"></script>
    <script src="./vendors/tagsinput/tagsinput.js"></script>
    <script src="./vendors/text_editor/summernote-bs4.js"></script>
    <script src="./vendors/apex_chart/apexcharts.js"></script>
    <script src="./js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Xử lý sự kiện nhấp vào nút xóa
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Ngăn chặn hành động mặc định của liên kết

                    const productId = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Bạn có chắc?',
                        text: "Hành động này sẽ xóa báo giá này vĩnh viễn!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Xóa',
                        cancelButtonText: 'Hủy'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Gửi yêu cầu xóa đến server bằng AJAX
                            $.ajax({
                                url: 'delete_price.php?id=<?php echo $productId; ?>',
                                method: 'POST',
                                dataType: 'json', // bắt buộc
                                data: {
                                    id: productId
                                },
                                success: function(response) {
                                    if (response.success) {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Thành công!',
                                            text: response.message,
                                            timer: 2000,
                                            showConfirmButton: false
                                        }).then(() => location.reload());
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Lỗi!',
                                            text: response.message || 'Không thể xóa sản phẩm.'
                                        });
                                    }
                                },
                                error: function() {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Lỗi!',
                                        text: 'Có lỗi kết nối đến server.'
                                    });
                                }
                            });

                        }
                    });
                });
            });
        });
    </script>
    <script>
        document.addEventListener('change', function(e) {
            if (e.target.classList.contains('toggle-outstanding')) {
                const id = e.target.getAttribute('data-id');
                const status = e.target.checked ? 'true' : 'false';

                fetch('toggle_hot.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            id,
                            status
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (!data.success) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Lỗi!',
                                text: data.message || 'Không thể cập nhật.'
                            });
                            // rollback trạng thái
                            e.target.checked = !e.target.checked;
                        } else {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: data.message,
                                timer: 1500,
                                showConfirmButton: false
                            });
                        }
                    })
                    .catch(() => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Lỗi kết nối server'
                        });
                        e.target.checked = !e.target.checked;
                    });
            }
        });
    </script>
</body>

</html>