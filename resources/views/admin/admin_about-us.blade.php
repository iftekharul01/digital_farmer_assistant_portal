

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - About Us | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800\&display=swap" rel="stylesheet">
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

        textarea {
            min-height: 120px;
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
                <i class="fas fa-seedling"> Admin Panel
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-dashboard"> Dashboard</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"> Logout</a>
            </div>
        </nav>
    </header>

    <div class="content-container">
        <h1 class="page-title"><i class="fas fa-info-circle"> About Us Page Management</h1>

        <div class="admin-section">
            <h2 class="section-title">Company Information</h2>
            <form>
                <div class="form-group">
                    <label for="company\_name">Company Name</label>
                    <input type="text" id="company\_name" name="company\_name" value="Farmer Portal">
                </div>
                <div class="form-group">
                    <label for="mission">Mission Statement</label>
                    <textarea id="mission" name="mission">Connecting technology to every farmer's hand. Agriculture made smarter and accessible.</textarea>
                </div>
                <div class="form-group">
                    <label for="vision">Vision Statement</label>
                    <textarea id="vision" name="vision">To revolutionize farming through innovative technology solutions that empower farmers and increase agricultural productivity.</textarea>
                </div>
                <div class="form-group">
                    <label for="about\_description">About Description</label>
                    <textarea id="about\_description" name="about\_description">We are dedicated to providing farmers with the tools and knowledge they need to succeed. Our platform offers cutting-edge solutions for crop management, market insights, and weather forecasting.</textarea>
                </div>
                <button type="submit" class="btn-primary">Update Company Information</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Team Information</h2>
            <form>
                <div class="form-group">
                    <label for="team\_title">Team Section Title</label>
                    <input type="text" id="team\_title" name="team\_title" value="Meet Our Team">
                </div>
                <div class="form-group">
                    <label for="team\_description">Team Description</label>
                    <textarea id="team\_description" name="team\_description">Our dedicated team of agricultural experts and technology professionals work together to bring you the best farming solutions.</textarea>
                </div>
                <button type="submit" class="btn-primary">Update Team Information</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Contact Information</h2>
            <form>
                <div class="form-group">
                    <label for="address">Office Address</label>
                    <textarea id="address" name="address">123 Agriculture Street, Dhaka, Bangladesh</textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" value="+880 1234-567890">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="info@farmerportal.com">
                </div>
                <button type="submit" class="btn-primary">Update Contact Information</button>
            </form>
        </div>
    </div>
</body>
</html>
