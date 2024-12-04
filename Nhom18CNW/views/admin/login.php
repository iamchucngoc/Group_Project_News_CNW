<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fce4ec; /* Màu nền hồng nhạt */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #ffffff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h1 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #d81b60; /* Màu hồng đậm */
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 5px;
      transition: border-color 0.3s;
    }

    .form-group input:focus {
      outline: none;
      border-color: #d81b60; /* Màu hồng khi focus */
    }

    .login-btn {
      width: 100%;
      padding: 10px;
      background-color: #d81b60; /* Màu hồng đậm cho nút */
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-btn:hover {
      background-color: #c2185b; /* Màu hồng đậm hơn khi hover */
    }

    .links {
      margin-top: 15px;
      text-align: center;
    }

    .links a {
      text-decoration: none;
      color: #d81b60; /* Màu hồng đậm cho liên kết */
      font-size: 14px;
    }

    .links a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h1>Admin Login</h1>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
    </form>
    <div class="links">
      <a href="#">Forgot Password?</a> | <a href="#">Sign Up</a>
    </div>
  </div>
</body>

</html>