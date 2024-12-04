<!-- Xử lý hiển thị danh sách tin tức và chi tiết tin tức. -->
<?php
require_once 'models/News.php';

class HomeController {
    public function index() {
        $news = News::getAll();
        include 'views/home/index.php';
    }
    
    public function detail($id) {
        $news = News::getById($id);
        include 'views/news/detail.php';
    }
    
    public function search() {
        $keyword = $_POST['keyword'] ?? '';
        $news = News::search($keyword); // Bạn cần thêm phương thức search vào News.php
        include 'views/home/index.php'; // Hoặc tạo một view riêng cho tìm kiếm
    }

    
}
?>
