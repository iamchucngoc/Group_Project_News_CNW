<?php
require_once 'models/News.php';

class NewsController {
    private $newsModel;

    public function __construct() {
        $this->newsModel = new News(); // Khởi tạo mô hình News
    }

    public function index() {
        $news = $this->newsModel->getAllNews(); // Sử dụng phương thức không tĩnh
        include 'views/admin/news/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $this->newsModel->addNews((object) ['title' => $title, 'content' => $content, 'image' => $image]); // Sử dụng phương thức không tĩnh
            header("Location: index.php?controller=news&action=index");
            exit; // Thêm exit sau header để dừng thực thi
        }
        include 'views/admin/news/add.php';
    }

    public function edit() {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_POST['image'];
            $this->newsModel->updateNews((object) ['id' => $id, 'title' => $title, 'content' => $content, 'image' => $image]); // Sử dụng phương thức không tĩnh
            header("Location: index.php?controller=news&action=index");
            exit; // Thêm exit
        }
        $news = $this->newsModel->getNews($id); // Sử dụng phương thức không tĩnh
        include 'views/admin/news/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        $this->newsModel->deleteNews($id); // Sử dụng phương thức không tĩnh
        header("Location: index.php?controller=news&action=index");
        exit; // Thêm exit
    }
}
?>