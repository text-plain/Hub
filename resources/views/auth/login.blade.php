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
            background-color: #121212;
            font-family: Arial, sans-serif;
            color: #e0e0e0;
        }
        .login-container {
            width: 300px;
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .login-container img {
            width: 150px;
            height: 150px;
            margin-bottom: 20px;
            border-radius: 10%;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #444;
            background-color: #2c2c2c;
            color: #ffffff;
            outline: none;
            font-size: 16px;
        }
        .login-container input::placeholder {
            color: #888;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .login-container button:hover {
            background: linear-gradient(90deg, #4c00c8, #155efb);
            transform: scale(1.03);
            box-shadow: 0px 4px 15px rgba(100, 100, 255, 0.4);
        }
        .login-container button:active {
            transform: scale(0.97);
        }
        .login-container .signup-link {
            margin-top: 15px;
            font-size: 14px;
            color: #aaa;
        }
        .login-container .signup-link a {
            color: #4a90e2;
            text-decoration: none;
        }
        .login-container .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="login-container">
    <img src="{{asset("logo.png")}}" alt="Logo">
    <h2>Input key</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Input your key" required>

        <button type="submit">LOGIN</button>
    </form>
    <div class="signup-link">
        Don't know your key? Contact <a href="https://t.me/Noirlegacy">@Noirlegacy</a>
    </div>
</div>
</body>
</html>
