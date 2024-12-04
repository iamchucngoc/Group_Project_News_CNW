<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chào mừng người dùng khách</title>
  <link rel="stylesheet" href="#">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ffeef8; /* Màu hồng nhạt hơn */
    }

    header {
      background-color: #d81b60; /* Màu hồng đậm */
      color: white;
      padding: 20px 0;
      text-align: center;
      border-bottom: 5px solid #f48fb1; /* Đường viền dưới cho header */
    }

    nav {
      margin: 20px 0;
      text-align: center;
    }

    nav a {
      margin: 0 15px;
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
      border-radius: 5px; /* Bo góc cho liên kết */
      padding: 5px 10px;
    }

    nav a:hover {
      background-color: #f48fb1; /* Đổi màu nền khi hover */
      color: #333; /* Đổi màu chữ khi hover */
    }

    .content {
      max-width: 1200px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 15px; /* Bo góc cho phần nội dung */
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #d81b60; /* Màu hồng đậm */
      margin-bottom: 20px;
      font-size: 28px; /* Kích thước lớn hơn cho tiêu đề */
    }

    .news-item {
      display: flex;
      border-bottom: 1px solid #ddd;
      padding: 15px 0;
      align-items: flex-start; /* Căn trên cho tính đồng nhất */
    }

    .news-item img {
      width: 200px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px; /* Bo góc cho hình ảnh */
      margin-right: 20px;
    }

    .news-item h2 {
      font-size: 24px;
      color: #333;
      margin: 0 0 10px 0; /* Khoảng cách dưới tiêu đề */
    }

    .news-item p {
      font-size: 16px;
      color: #555;
      margin: 0; /* Xóa margin bên trên và dưới */
      line-height: 1.5; /* Giãn cách dòng */
      text-align: justify; /* Căn đều cho đoạn văn */
    }

    footer {
      background-color: #d81b60; /* Màu hồng đậm */
      color: white;
      text-align: center;
      padding: 15px;
      position: relative; /* Để footer không bị cố định */
      margin-top: 20px; /* Khoảng cách giữa nội dung và footer */
      border-top: 5px solid #f48fb1; /* Đường viền trên cho footer */
    }

    footer p {
      margin: 0;
    }
  </style>
</head>

<body>
  <header>
    <h1>Chào mừng người dùng khách</h1>
    <nav>
      <a href="#">Tìm kiếm tin tức</a>
      <a href="http://localhost/php/tluNews/views/admin/login.php">Đăng nhập với tư cách là quản trị viên</a>
      <a href="#">Giới thiệu</a>
      <a href="#">Liên hệ</a>
    </nav>
  </header>

  <div class="content">
    <h2>Tin Tức Mới Nhất</h2>

    <div class="news-item">
      <img src="images/meo00.jpg" alt="News Image 1">
      <div>
        <h2><a href="#">Tiêu đề bài viết 1</a></h2>
        <p>Đây là đoạn mô tả ngắn về bài viết đầu tiên. Nó cung cấp cái nhìn tổng quan về nội dung bài viết.</p>
      </div>
    </div>

    <div class="news-item">
      <img src="images/meo01.jpg" alt="News Image 2">
      <div>
        <h2><a href="#">Tiêu đề bài viết 2</a></h2>
        <p>Đoạn mô tả ngắn về bài viết thứ hai. Đây là thông tin về một tin tức khác rất hấp dẫn.</p>
      </div>
    </div>

    <div class="news-item">
      <img src="images/meo02.jpg" alt="News Image 3">
      <div>
        <h2><a href="#">Tiêu đề bài viết 3</a></h2>
        <p>Thông tin ngắn gọn về bài viết thứ ba, với nội dung mới nhất và cập nhật nhất.</p>
      </div>
    </div>

    <div class="news-item">
      <img src="images/meo03.jpg" alt="News Image 4">
      <div>
        <h2><a href="#">Tiêu đề bài viết 4</a></h2>
        <p>Mô tả ngắn gọn về bài viết thứ tư, mang đến thông tin thú vị và bổ ích.</p>
      </div>
    </div>

    <div class="news-item">
      <img src="images/meo04.jpg" alt="News Image 5">
      <div>
        <h2><a href="#">Tiêu đề bài viết 5</a></h2>
        <p>Đây là mô tả cho bài viết thứ năm, nội dung hấp dẫn và đáng chú ý.</p>
      </div>
    </div>

    <div class="news-item">
      <img src="images/meo05.jpg" alt="News Image 6">
      <div>
        <h2><a href="#">Tiêu đề bài viết 6</a></h2>
        <p>Thông tin về bài viết thứ sáu, với những tin tức thú vị từ khắp nơi.</p>
      </div>
    </div>

    <div class="news-item">
      <img src="images/meo06.jpg" alt="News Image 7">
      <div>
        <h2><a href="#">Tiêu đề bài viết 7</a></h2>
        <p>Mô tả ngắn gọn cho bài viết thứ bảy, cung cấp những thông tin nổi bật.</p>
      </div>
    </div>



  <footer>
    <p>&copy; 2024 Trang web Tin Tức - Tất cả quyền được bảo lưu.</p>
  </footer>
</body>

</html>