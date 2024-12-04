<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản Lý Tin Tức</title>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(to right, #fce4ec, #f8bbd0); /* Màu nền hồng nhạt */
      margin: 0;
      padding: 0;
      color: #333;
    }

    header {
      background: linear-gradient(135deg, #f48fb1, #ff6f61); /* Màu hồng đậm */
      color: white;
      padding: 20px 0;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    header h1 {
      font-size: 36px;
      margin: 0;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 30px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      font-size: 30px;
      margin-bottom: 20px;
      color: #d81b60; /* Màu hồng đậm */
    }

    .btn-submit {
      display: inline-block;
      padding: 12px 25px;
      background: linear-gradient(to right, #ff6f61, #f48fb1); /* Màu hồng nhẹ */
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      text-decoration: none;
      transition: transform 0.3s, background 0.3s;
    }

    .btn-submit:hover {
      background: linear-gradient(to right, #f48fb1, #d81b60); /* Đổi màu khi hover */
      transform: scale(1.05);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table thead {
      background: #d81b60; /* Màu hồng đậm cho header bảng */
      color: white;
    }

    table th,
    table td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table th {
      font-size: 18px;
      font-weight: bold;
    }

    table tbody tr:hover {
      background-color: #fce4ec; /* Màu nền nhẹ khi hover */
    }

    table img {
      border-radius: 8px;
      transition: transform 0.3s;
    }

    table img:hover {
      transform: scale(1.1);
    }

    table a {
      color: #d81b60; /* Màu hồng đậm cho liên kết */
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    table a:hover {
      color: #ff6f61; /* Màu hồng nhạt khi hover */
    }

    footer {
      background: linear-gradient(135deg, #f48fb1, #d81b60); /* Màu hồng đậm */
      color: white;
      text-align: center;
      padding: 20px;
      position: relative; /* Để footer không bị cố định */
      margin-top: 20px; /* Khoảng cách giữa nội dung và footer */
      box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
    }

    footer p {
      margin: 0;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <header>
    <h1>Danh Sách Tin Tức</h1>
  </header>

  <div class="container">
    <h2>Quản Lý Tin Tức</h2>
    <a href="http://localhost/php/tluNews/views/admin/news/add.php" class="btn-submit">Thêm Tin Tức Mới</a>

    <table>
      <thead>
        <tr>
          <th>Tiêu Đề</th>
          <th>Nội Dung</th>
          <th>Hình Ảnh</th>
          <th>Hành Động</th>
        </tr>
      </thead>
      <tbody>
        <?php if (is_array($newsList) && !empty($newsList)): ?>
          <?php foreach ($newsList as $news): ?>
            <tr>
              <td><?php echo htmlspecialchars($news['title']); ?></td>
              <td><?php echo htmlspecialchars($news['content']); ?></td>
              <td><img src="<?php echo htmlspecialchars($news['image']); ?>" alt="Hình ảnh tin tức" style="width: 100px; height: auto;" /></td>
              <td>
                <a href="http://localhost/php/tluNews/views/admin/news/edit.php?id=<?php echo $news['id']; ?>">Chỉnh Sửa</a> |
                <a href="http://localhost/php/tluNews/views/admin/news/delete.php?id=<?php echo $news['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4">Không có dữ liệu.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <footer>
    <p>&copy; 2024 Trang web Quản trị Tin Tức - Tất cả quyền được bảo lưu.</p>
  </footer>
</body>

</html>