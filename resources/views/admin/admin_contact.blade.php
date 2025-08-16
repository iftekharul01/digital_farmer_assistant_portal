<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Contact Page | Farmer Portal</title>
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

        .contact-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .contact-table th,
        .contact-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .contact-table th {
            background: #f8f9fa;
            font-weight: 600;
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
        <h1 class="page-title"><i class="fas fa-envelope"></i> Contact Page Management</h1>

        <div class="admin-section">
            <h2 class="section-title">Contact Information Settings</h2>
            <form>
                <div class="form-group">
                    <label for="contact_title">Page Title</label>
                    <input type="text" id="contact_title" name="contact_title" value="Contact Us">
                </div>
                <div class="form-group">
                    <label for="contact_subtitle">Page Subtitle</label>
                    <input type="text" id="contact_subtitle" name="contact_subtitle" value="Get in touch with our agricultural experts">
                </div>
                <div class="form-group">
                    <label for="office_address">Office Address</label>
                    <textarea id="office_address" name="office_address">123 Agriculture Street, Dhaka-1000, Bangladesh</textarea>
                </div>
                <div class="form-group">
                    <label for="phone_primary">Primary Phone</label>
                    <input type="text" id="phone_primary" name="phone_primary" value="+880 1234-567890">
                </div>
                <div class="form-group">
                    <label for="phone_secondary">Secondary Phone</label>
                    <input type="text" id="phone_secondary" name="phone_secondary" value="+880 1234-567891">
                </div>
                <div class="form-group">
                    <label for="email_primary">Primary Email</label>
                    <input type="email" id="email_primary" name="email_primary" value="info@farmerportal.com">
                </div>
                <div class="form-group">
                    <label for="email_support">Support Email</label>
                    <input type="email" id="email_support" name="email_support" value="support@farmerportal.com">
                </div>
                <div class="form-group">
                    <label for="working_hours">Working Hours</label>
                    <input type="text" id="working_hours" name="working_hours" value="Sunday - Thursday: 9:00 AM - 6:00 PM">
                </div>
                <button type="submit" class="btn-primary">Update Contact Information</button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Contact Form Messages</h2>
            <table class="contact-table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-01-15</td>
                        <td>John Doe</td>
                        <td>john@email.com</td>
                        <td>Crop Disease Inquiry</td>
                        <td>New</td>
                        <td>
                            <button class="btn-primary" style="padding: 6px 12px; font-size: 0.9rem;">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-01-14</td>
                        <td>Jane Smith</td>
                        <td>jane@email.com</td>
                        <td>Market Price Question</td>
                        <td>Replied</td>
                        <td>
                            <button class="btn-primary" style="padding: 6px 12px; font-size: 0.9rem;">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2024-01-13</td>
                        <td>Ahmed Ali</td>
                        <td>ahmed@email.com</td>
                        <td>Weather Forecast Issue</td>
                        <td>In Progress</td>
                        <td>
                            <button class="btn-primary" style="padding: 6px 12px; font-size: 0.9rem;">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="admin-section">
            <h2 class="section-title">Social Media Links</h2>
            <form>
                <div class="form-group">
                    <label for="facebook_url">Facebook URL</label>
                    <input type="url" id="facebook_url" name="facebook_url" value="https://facebook.com/farmerportal">
                </div>
                <div class="form-group">
                    <label for="twitter_url">Twitter URL</label>
                    <input type="url" id="twitter_url" name="twitter_url" value="https://twitter.com/farmerportal">
                </div>
                <div class="form-group">
                    <label for="linkedin_url">LinkedIn URL</label>
                    <input type="url" id="linkedin_url" name="linkedin_url" value="https://linkedin.com/company/farmerportal">
                </div>
                <div class="form-group">
                    <label for="youtube_url">YouTube URL</label>
                    <input type="url" id="youtube_url" name="youtube_url" value="https://youtube.com/farmerportal">
                </div>
                <button type="submit" class="btn-primary">Update Social Media Links</button>
            </form>
        </div>
    </div>
</body>
</html>
