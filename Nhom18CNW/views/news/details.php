<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi Tiết Tin Tức</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #fce4ec; /* Màu nền hồng nhạt */
      color: #333;
    }

    header {
      background-color: #f06292; /* Màu hồng nhẹ */
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    nav {
      margin: 15px 0;
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

    .content {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .news-detail {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .news-detail img {
      width: 100%;
      max-width: 800px;
      height: auto;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .news-detail h1 {
      font-size: 28px;
      color: #d81b60; /* Màu hồng đậm cho tiêu đề */
      margin: 10px 0;
      text-align: center;
    }

    .news-detail p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
      text-align: justify;
      margin: 10px 0;
    }

    .info {
      margin-top: 20px;
      font-size: 14px;
      color: #6c757d;
      border-top: 2px solid #f06292; /* Màu hồng cho đường viền */
      padding-top: 10px;
      width: 100%;
      text-align: left;
    }

    .info span {
      margin-right: 15px;
    }

    footer {
      background-color: #f06292; /* Màu hồng nhẹ */
      color: white;
      text-align: center;
      padding: 15px;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <header>
    <h1>Chi Tiết Tin Tức</h1>
    <nav>
      <a href="#">Trang chủ</a>
      <a href="#">Tin tức</a>
      <a href="#">Giới thiệu</a>
      <a href="#">Liên hệ</a>
    </nav>
  </header>

  <div class="content">
    <div class="news-detail">
      <img src="#" alt="Hình ảnh tin tức">
      <h1>Tiêu đề bài viết</h1>
      <p>Đây là nội dung chi tiết của bài viết tin tức. Nội dung này có thể dài và có thể bao gồm nhiều đoạn văn, hình ảnh, và các thông tin bổ sung. Nội dung bài viết có thể giải thích về sự kiện, vấn đề xã hội, công nghệ, v.v.</p>
      <p>Thêm nội dung chi tiết của bài viết ở đây. Có thể bao gồm các đoạn văn dài, trích dẫn, thông tin phân tích, v.v. Nội dung này sẽ cung cấp cái nhìn sâu sắc hơn cho người đọc về chủ đề mà bài viết đề cập.</p>

      <div class="info">
        <span><strong>Ngày đăng:</strong> 02/12/2024</span>
        <span><strong>Danh mục:</strong> Công nghệ</span>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 Trang web Tin Tức - Tất cả quyền được bảo lưu.</p>
  </footer>
</body>

</html>