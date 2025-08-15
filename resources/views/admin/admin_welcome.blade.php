<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Welcome Page | Farmer Portal</title>
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

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
        }

        textarea {
            min-height: 120px;
        }

        input:focus, textarea:focus, select:focus {
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

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .hero-preview {
            background: linear-gradient(135deg, var(--primary-green), #0aa51c);
            color: white;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            margin-top: 20px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .feature-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            border: 2px solid #e0e0e0;
        }

        .feature-card input {
            margin-top: 10px;
        }

        .image-upload {
            background: #f8f9fa;
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 40px;
            text-align: center;
            color: #666;
            cursor: pointer;
        }

        .image-upload:hover {
            border-color: var(--primary-green);
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
        <h1 class="page-title"><i class="fas fa-home"></i> Welcome Page Management</h1>

        <div class="admin-section">
            <h2 class="section-title">Hero Section</h2>
            <form>
                <div class="form-group">
                    <label for="hero_title">Main Title</label>
                    <input type="text" id="hero_title" name="hero_title" value="Welcome to Digital Farmer Assistant Portal">
                </div>
                <div class="form-group">
                    <label for="hero_subtitle">Subtitle</label>
                    <input type="text" id="hero_subtitle" name="hero_subtitle" value="Empowering Bangladesh Farmers with Technology">
                </div>
                <div class="form-group">
                    <label for="hero_description">Description</label>
                    <textarea id="hero_description" name="hero_description">Your trusted partner in modern agriculture. Get expert advice, weather updates, market prices, and more to maximize your farming success.</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="primary_button_text">Primary Button Text</label>
                        <input type="text" id="primary_button_text" name="primary_button_text" value="Get Started">
                    </div>
                    <div class="form-group">
                        <label for="primary_button_link">Primary Button Link</label>
                        <input type="text" id="primary_button_link" name="primary_button_link" value="/signup">
                    </div>
                </div>
                <div class="form-group">
                    <label>Hero Background Image</label>
                    <div class="image-upload">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <p>Click to upload hero background image</p>
                        <input type="file" style="display: none;" accept="image/*">
                    </div>
                </div>
                <button type="submit" class="btn-primary">Update Hero Section</button>
            </form>
            
            <div class="hero-preview">
                <h1 style="font-size: 2.5rem; margin-bottom: 10px;">Welcome to Digital Farmer Assistant Portal</h1>
                <h2 style="font-size: 1.5rem; margin-bottom: 20px; opacity: 0.9;">Empowering Bangladesh Farmers with Technology</h2>
                <p style="font-size: 1.1rem; margin-bottom: 30px; opacity: 0.8;">Your trusted partner in modern agriculture. Get expert advice, weather updates, market prices, and more to maximize your farming success.</p>
                <button style="background: white; color: var(--primary-green); padding: 15px 30px; border: none; border-radius: 8px; font-weight: 600; font-size: 1rem;">Get Started</button>
            </div>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Features Section</h2>
            <form>
                <div class="form-group">
                    <label for="features_title">Section Title</label>
                    <input type="text" id="features_title" name="features_title" value="Our Services">
                </div>
                <div class="form-group">
                    <label for="features_subtitle">Section Subtitle</label>
                    <input type="text" id="features_subtitle" name="features_subtitle" value="Everything you need for successful farming">
                </div>
                
                <div class="feature-grid">
                    <div class="feature-card">
                        <i class="fas fa-stethoscope" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 15px;"></i>
                        <h3>Crop Doctor</h3>
                        <input type="text" placeholder="Feature description" value="AI-powered crop disease diagnosis">
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-chart-line" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 15px;"></i>
                        <h3>Market Prices</h3>
                        <input type="text" placeholder="Feature description" value="Real-time market price updates">
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-cloud-sun" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 15px;"></i>
                        <h3>Weather Forecast</h3>
                        <input type="text" placeholder="Feature description" value="Accurate weather predictions">
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-play-circle" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 15px;"></i>
                        <h3>Tutorials</h3>
                        <input type="text" placeholder="Feature description" value="Step-by-step farming guides">
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-newspaper" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 15px;"></i>
                        <h3>News & Subsidies</h3>
                        <input type="text" placeholder="Feature description" value="Latest agricultural news and subsidies">
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-users" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 15px;"></i>
                        <h3>Expert Support</h3>
                        <input type="text" placeholder="Feature description" value="Connect with agricultural experts">
                    </div>
                </div>
                
                <button type="submit" class="btn-primary" style="margin-top: 20px;">Update Features</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Statistics Section</h2>
            <form>
                <div class="form-group">
                    <label for="stats_title">Section Title</label>
                    <input type="text" id="stats_title" name="stats_title" value="Our Impact">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="registered_farmers">Registered Farmers</label>
                        <input type="number" id="registered_farmers" name="registered_farmers" value="50000">
                    </div>
                    <div class="form-group">
                        <label for="crop_diagnoses">Crop Diagnoses</label>
                        <input type="number" id="crop_diagnoses" name="crop_diagnoses" value="25000">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="tutorial_views">Tutorial Views</label>
                        <input type="number" id="tutorial_views" name="tutorial_views" value="100000">
                    </div>
                    <div class="form-group">
                        <label for="success_stories">Success Stories</label>
                        <input type="number" id="success_stories" name="success_stories" value="500">
                    </div>
                </div>
                <button type="submit" class="btn-primary">Update Statistics</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Call-to-Action Section</h2>
            <form>
                <div class="form-group">
                    <label for="cta_title">CTA Title</label>
                    <input type="text" id="cta_title" name="cta_title" value="Ready to Transform Your Farming?">
                </div>
                <div class="form-group">
                    <label for="cta_description">CTA Description</label>
                    <textarea id="cta_description" name="cta_description">Join thousands of farmers who are already benefiting from our platform. Sign up today and start your journey towards smarter farming.</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="cta_button_text">Button Text</label>
                        <input type="text" id="cta_button_text" name="cta_button_text" value="Join Now">
                    </div>
                    <div class="form-group">
                        <label for="cta_button_link">Button Link</label>
                        <input type="text" id="cta_button_link" name="cta_button_link" value="/signup">
                    </div>
                </div>
                <button type="submit" class="btn-primary">Update Call-to-Action</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">SEO Settings</h2>
            <form>
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" value="Digital Farmer Assistant Portal - Smart Farming Solutions">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea id="meta_description" name="meta_description">Empower your farming with AI-powered crop diagnosis, real-time market prices, weather forecasts, and expert tutorials. Join thousands of farmers in Bangladesh.</textarea>
                </div>
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" id="meta_keywords" name="meta_keywords" value="farming, agriculture, crop diagnosis, market prices, weather, tutorials, Bangladesh">
                </div>
                <button type="submit" class="btn-primary">Update SEO Settings</button>
            </form>
        </div>
    </div>
</body>
</html>
