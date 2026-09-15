<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Campus System - Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
        }

        .login-container {
            width: 400px;
            max-width: 90%;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .logo {
            width: 75px;
            height: 75px;
            margin: 0 auto 15px;
            border-radius: 50%;
            background: #1e3c72;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            color: #1e3c72;
            font-size: 27px;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #333;
            font-weight: bold;
            font-size: 14px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 13px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 15px;
            outline: none;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #2a5298;
            box-shadow: 0 0 5px rgba(42, 82, 152, 0.25);
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #555;
        }

        .remember input {
            width: auto;
        }

        .login-button {
            width: 100%;
            padding: 13px;
            background: #1e3c72;
            color: white;
            border: none;
            border-radius: 7px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-button:hover {
            background: #2a5298;
        }

        .forgot {
            text-align: center;
            margin-top: 18px;
        }

        .forgot a {
            color: #2a5298;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot a:hover {
            text-decoration: underline;
        }

        .register {
            text-align: center;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 14px;
        }

        .register a {
            color: #1e3c72;
            font-weight: bold;
            text-decoration: none;
        }

        .register a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 22px;
            }

            h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">
            CS
        </div>

        <h1>Campus System</h1>

        <p class="subtitle">
            Campus Event Information System
        </p>

        <form action="login.php" method="POST">

            <div class="form-group">
                <label for="email">Email Address</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >
            </div>

            <div class="form-group">
                <label for="role">Login As</label>

                <select id="role" name="role" required>
                    <option value="">Select role</option>
                    <option value="student">Student</option>
                    <option value="faculty">Faculty</option>
                    <option value="admin">Administrator</option>
                </select>
            </div>

            <label class="remember">
                <input type="checkbox" name="remember">
                Remember me
            </label>

            <button type="submit" class="login-button">
                Login
            </button>

        </form>

        <div class="forgot">
            <a href="#">Forgot Password?</a>
        </div>

        <div class="register">
            Don't have an account?
            <a href="register.php">Create Account</a>
        </div>

    </div>

</body>
</html>