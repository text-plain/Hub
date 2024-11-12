<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
        }
        .login-container {
            width: 300px;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .login-container img {
            width: 50px;
            height: 50px;
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #ccc;
            outline: none;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(90deg, #4a90e2, #8e44ad);
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            margin-top: 20px;
        }
        .login-container button:hover {
            opacity: 0.9;
        }
        .login-container .signup-link {
            margin-top: 15px;
            font-size: 14px;
            color: #666;
        }
        .login-container .signup-link a {
            color: #4a90e2;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="login-container">
    <img src="https://via.placeholder.com/50" alt="Logo">
    <h2>Input key</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Input your key" required>

        <button type="submit">LOGIN</button>
    </form>
    <div class="signup-link">
        Don't know your key? Contact <a href="#">@Noirlegacy</a>
    </div>
</div>
</body>
</html>
