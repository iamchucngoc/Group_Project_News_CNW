<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Route: Hiển thị danh sách tin tức
if ($requestUri === '/admin/news') {
    require_once __DIR__ . '/controllers/NewsController.php';
    $controller = new NewsController();
    $controller->index();
} 
// Route: Xóa tin tức với id
elseif (preg_match('/^\/admin\/news\/delete\?id=(\d+)$/', $requestUri, $matches)) {
    $id = $matches[1]; // Lấy id từ route động
    require_once __DIR__ . '/controllers/NewsController.php';
    $controller = new NewsController();
    $controller->delete(); // Gọi phương thức delete
} 
// Route: Thêm tin tức
else if($requestUri === '/admin/news/add'){
    require_once __DIR__ . '/controllers/NewsController.php';
    $controller = new NewsController();
    $controller->add(); // Gọi phương thức add
} 
// Route: Sửa tin tức
elseif (preg_match('/^\/admin\/news\/edit\?id=(\d+)$/', $requestUri, $matches)) {
    $id = $matches[1]; // Lấy id từ route động
    require_once __DIR__ . '/controllers/NewsController.php';
    $controller = new NewsController();
    $controller->edit(); // Gọi phương thức edit
} 
// Route mặc định
else {
    require_once 'views/admin/dashboard.php';
}
?>