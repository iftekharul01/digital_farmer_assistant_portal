<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0bd429;
            --green-soft-bg: #f1fff4;
            --text-dark: #1f2f1f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f1fff4 0%, #eafce9 100%);
            font-family: 'Manrope', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .admin-login-container {
            max-width: 400px;
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 8px 40px rgba(11,212,41,0.15);
            padding: 40px;
            text-align: center;
        }

        .admin-logo {
            font-size: 48px;
            color: var(--primary-green);
            margin-bottom: 20px;
        }

        .admin-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .admin-subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 14px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-green);
        }

        .admin-btn {
            width: 100%;
            background: linear-gradient(90deg, #0bd429 60%, #12c027 100%);
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            border: none;
            border-radius: 12px;
            padding: 14px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .admin-btn:hover {
            transform: translateY(-2px);
        }

        .error-message {
            background: #fee;
            border: 1px solid #fcc;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #c33;
        }

        .success-message {
            background: #e8f5e8;
            border: 1px solid #4caf50;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #2e7d32;
        }

        .register-link {
            margin-top: 20px;
            color: #666;
        }

        .register-link a {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="admin-login-container">
        <div class="admin-logo">
            <i class="fas fa-user-cog"></i>
        </div>
        <h1 class="admin-title">Admin Panel</h1>
        <p class="admin-subtitle">Farmer Portal Administration</p>

        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="error-message">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="login">Username or Email</label>
                <input type="text" id="login" name="login" value="{{ old('login') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="admin-btn">Login to Admin Panel</button>
        </form>

        <div class="register-link">
            Don't have admin account? <a href="{{ route('admin.register') }}">Register here</a>
        </div>
    </div>
</body>
</html>
