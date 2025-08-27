<?php
include __DIR__ . '/../config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $tax_code = $_POST['tax_code'] ?? '';

    // Thêm dữ liệu vào bảng contact_customer
    $sql = "INSERT INTO contact_customer (name, email, phone, tax_code)
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $phone, $tax_code);

    if ($stmt->execute()) {
        echo "OK"; // thêm thành công
    } else {
        echo "ERROR"; // lỗi khác
    }

    $stmt->close();
    $conn->close();
}
