<?php
include 'config/db_connection.php';

$product_id = intval($_GET['id']);
$sql = "DELETE FROM products WHERE product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $product_id);

if ($stmt->execute()) {
    // Xoá thành công thì chuyển về index
    header('Location: index.php');
    exit;
} else {
    echo "Không thể xoá sản phẩm.";
}

$stmt->close();
$conn->close();
