<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Home Page | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0bd429;
            --text-dark: #1f2f1f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f9fa;
            font-family: 'Manrope', sans-serif;
        }

        .admin-header {
            background: var(--primary-green);
            color: white;
            padding: 15px 0;
        }

        .admin-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .admin-logo {
            font-size: 1.3rem;
            font-weight: 800;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .nav-links a:hover {
            background: rgba(255,255,255,0.1);
        }

        .content-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 30px;
        }

        .admin-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-green);
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: #0aa51c;
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <nav class="admin-nav">
            <div class="admin-logo">
                <i class="fas fa-seedling"></i> Admin Panel
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-dashboard"></i> Dashboard</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </nav>
    </header>

    <div class="content-container">
        <h1 class="page-title"><i class="fas fa-home"></i> Home Page Management</h1>

        <div class="admin-section">
            <h2 class="section-title">Hero Section</h2>
            <form>
                <div class="form-group">
                    <label for="hero_title">Hero Title</label>
                    <input type="text" id="hero_title" name="hero_title" value="Empowering Farmers With Smart Technology">
                </div>
                <div class="form-group">
                    <label for="hero_subtitle">Hero Subtitle</label>
                    <textarea id="hero_subtitle" name="hero_subtitle" rows="3">Your one-stop solution for crop health, market insights, weather updates, and government support. All in one place, just for you.</textarea>
                </div>
                <button type="submit" class="btn-primary">Update Hero Section</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Features Section</h2>
            <form>
                <div class="form-group">
                    <label for="feature1_title">Feature 1 Title</label>
                    <input type="text" id="feature1_title" name="feature1_title" value="Smarter Farming">
                </div>
                <div class="form-group">
                    <label for="feature1_desc">Feature 1 Description</label>
                    <textarea id="feature1_desc" name="feature1_desc" rows="2">Detect diseases instantly with AI and take actionable steps to protect your crops effectively.</textarea>
                </div>
                <div class="form-group">
                    <label for="feature2_title">Feature 2 Title</label>
                    <input type="text" id="feature2_title" name="feature2_title" value="Live Weather Tracking">
                </div>
                <div class="form-group">
                    <label for="feature2_desc">Feature 2 Description</label>
                    <textarea id="feature2_desc" name="feature2_desc" rows="2">Check localized forecasts to better plan seeding, harvesting, and irrigation schedules.</textarea>
                </div>
                <button type="submit" class="btn-primary">Update Features</button>
            </form>
        </div>
    </div>
</body>
</html>
