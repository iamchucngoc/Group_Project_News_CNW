<?php
include_once "../../../models/News.php";
// Nhận ID gửi lên
$id = $_GET['id'];

$newModel = new News();
$new = $newModel->getNews($id);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chỉnh Sửa Tin Tức</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fce4ec; /* Màu nền hồng nhạt */
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #ff6f61; /* Màu hồng nhạt */
      color: white;
      padding: 15px 0;
      text-align: center;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 16px;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
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

    .form-group img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <header>
    <h1>Sửa Tin Tức</h1>
  </header>

  <div class="container">
    <h2>Sửa Thông Tin Tin Tức</h2>
    <form action="/admin/news/edit?id=<?php echo $new['id']; ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Tiêu đề</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($new['title']); ?>">
      </div>
      <div class="form-group">
        <label for="content">Nội Dung</label>
        <textarea id="content" name="content"><?php echo htmlspecialchars($new['content']); ?></textarea>
      </div>
      <div class="form-group">
        <label for="category_id">Danh Mục</label>
        <select id="category_id" name="category_id">
          <option value="1" <?php echo ($new['category_id'] == 1) ? 'selected' : ''; ?>>Kinh tế</option>
          <option value="2" <?php echo ($new['category_id'] == 2) ? 'selected' : ''; ?>>Giải trí</option>
          <option value="3" <?php echo ($new['category_id'] == 3) ? 'selected' : ''; ?>>Thể thao</option>
          <option value="4" <?php echo ($new['category_id'] == 4) ? 'selected' : ''; ?>>Công nghệ</option>
          <option value="5" <?php echo ($new['category_id'] == 5) ? 'selected' : ''; ?>>Giáo dục</option>
        </select>
      </div>
      <div class="form-group">
        <label for="image">Chọn ảnh</label>
        <img src="<?php echo htmlspecialchars($new['image']); ?>" alt="Hình ảnh tin tức" />
        <input type="file" name="image" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn-submit">Sửa Tin Tức</button>
      </div>
    </form>
  </div>

  <footer>
    <p>&copy; 2024 Trang web Quản trị Tin Tức - Tất cả quyền được bảo lưu.</p>
  </footer>
</body>

</html>