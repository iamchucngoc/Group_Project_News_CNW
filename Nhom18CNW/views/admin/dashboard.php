<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bảng Điều Khiển Quản Trị</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fce4ec; /* Màu nền hồng nhạt */
    }

    header {
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    nav {
      background-color: #343a40;
      color: white;
      padding: 10px;
      text-align: center;
    }

    nav a {
      margin: 0 15px;
      color: #ffffff;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #ffc107; /* Màu vàng khi hover */
    }

    .container {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .welcome {
      text-align: center;
      margin-bottom: 30px;
    }

    .welcome h2 {
      font-size: 28px;
      color: #333;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 20px;
    }

    .card {
      background-color: #f9cfdc; /* Màu hồng nhạt */
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s;
      text-align: center;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card h3 {
      color: #ff6f61; /* Màu hồng nhạt cho tiêu đề */
      font-size: 24px;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 18px;
      color: #555;
    }

    .btn-add {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      font-size: 16px;
      text-decoration: none;
      border-radius: 5px;
      text-align: center;
      transition: background-color 0.3s;
    }

    .btn-add:hover {
      background-color: #e65c50; /* Màu hồng đậm hơn khi hover */
    }

    footer {
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <header>
    <h1>Bảng Điều Khiển Quản Trị</h1>
  </header>

  <nav>
    <a href="http://localhost/php/Nhom18CNW/views/home/index.php">Người dùng khách</a>
    <a href="http://localhost/php/Nhom18CNW/views/admin/news">Quản lý Tin tức</a>
    <a href="http://localhost/php/Nhom18CNW/views/home/index.php">Đăng xuất</a>
    <a href="#">Quản lý người dùng</a>
    <a href="#">Cài đặt</a>
  
  </nav>

  <div class="container">
    <div class="welcome">
      <h2>Chào mừng, Quản trị viên</h2>
    </div>

    <div class="stats-grid">
      <div class="card">
        <h3>Số lượng Tin Tức</h3>
        <p>110 bài viết</p>
      </div>

      <div class="card">
        <h3>Số lượng Người Dùng</h3>
        <p>2550 người dùng</p>
      </div>

      <div class="card">
        <h3>Bài Viết Chờ Duyệt</h3>
        <p>50 bài viết</p>
      </div>

      <div class="card">
        <h3>Số Bình Luận</h3>
        <p>10 bình luận</p>
      </div>
    </div>

    <a href="http://localhost/php/Nhom18CNW/views/admin/news/add.php" class="btn-add">Thêm Tin Tức Mới</a>
  </div>

  <footer>
    <p>&copy; 2024 Trang web Quản trị Tin Tức - Tất cả quyền được bảo lưu.</p>
  </footer>
</body>

</html>