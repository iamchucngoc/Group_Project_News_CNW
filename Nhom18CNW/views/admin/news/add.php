<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm Tin Tức Mới</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #fce4ec; /* Màu nền hồng nhạt */
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #343a40;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 16px;
      margin-bottom: 5px;
      color: #495057;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-group textarea {
      height: 150px;
    }

    .btn-submit {
      padding: 10px 20px;
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn-submit:hover {
      background-color: #e65c50; /* Màu hồng đậm hơn khi hover */
    }

    footer {
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      text-align: center;
      padding: 15px;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>

<body>
  <header>
    <h1>Thêm Tin Tức Mới</h1>
  </header>

  <div class="container">
    <h2>Nhập Thông Tin Tin Tức</h2>
    <form action="/admin/news/add" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Tiêu đề</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="content">Nội Dung</label>
        <textarea id="content" name="content" required></textarea>
      </div>
      <div class="form-group">
        <label for="category_id">Danh Mục</label>
        <select id="category_id" name="category_id">
          <option value="1">Kinh tế</option>
          <option value="2">Giải trí</option>
          <option value="3">Thể thao</option>
          <option value="4">Công nghệ</option>
          <option value="5">Giáo dục</option>
        </select>
      </div>

      <div class="form-group">
        <label for="image">Chọn ảnh</label>
        <input type="file" name="image" id="image" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn-submit">Thêm Tin Tức</button>
      </div>
    </form>
  </div>

  <footer>
    <p>&copy; 2024 Trang web Quản trị Tin Tức - Tất cả quyền được bảo lưu.</p>
  </footer>
</body>

</html>