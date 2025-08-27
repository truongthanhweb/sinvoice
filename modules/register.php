<?php
include __DIR__ . '/../config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tax_code = $_POST['tax_code'] ?? '';
    $username = $_POST['username'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    // Kiểm tra email đã tồn tại chưa
    $checkSql = "SELECT id FROM users WHERE email = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        echo "EMAIL_EXISTS"; // email đã có trong database
    } else {
        $sql = "INSERT INTO users (tax_code, username, phone, email)
                VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $tax_code, $username, $phone, $email);

        if ($stmt->execute()) {
            echo "OK"; // đăng ký thành công
        } else {
            echo "ERROR"; // lỗi khác
        }

        $stmt->close();
    }

    $checkStmt->close();
    $conn->close();
}
