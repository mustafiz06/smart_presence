<!-- resources/views/privacy.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Privacy Policy - SmartPresence Attendance Management System">
    
    <title>Privacy Policy - {{ config('app.name', 'SmartPresence') }}</title>
    
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700&display=fallback">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <style>
        /* ===== SMARTPRESENCE BRAND VARIABLES ===== */
        :root {
            --sp-primary: #1e3c72;
            --sp-primary-dark: #152a52;
            --sp-secondary: #2a5298;
            --sp-accent: #667eea;
            --sp-accent-light: #764ba2;
            --sp-success: #28a745;
            --sp-warning: #ffc107;
            --sp-danger: #dc3545;
            --sp-info: #17a2b8;
            --sp-light: #f8f9fa;
            --sp-dark: #343a40;
            --sp-gray: #6c757d;
            --sp-border: #dee2e6;
            --sp-shadow: 0 0.5rem 1rem rgba(0,0,0,.15);
            --sp-transition: all 0.3s ease;
        }
        
        [data-theme="dark"] {
            --sp-primary: #375a9a;
            --sp-primary-dark: #2a4575;
            --sp-secondary: #3a6bb8;
            --sp-accent: #7b8fd9;
            --sp-accent-light: #8f7dd9;
            --sp-success: #34ce57;
            --sp-warning: #ffc845;
            --sp-danger: #e54a5a;
            --sp-info: #2ab7c9;
            --sp-light: #2d3748;
            --sp-dark: #1a202c;
            --sp-gray: #a0aec0;
            --sp-border: #4a5568;
        }
        
        /* ===== GLOBAL STYLES ===== */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background: var(--sp-light);
            color: var(--sp-dark);
            line-height: 1.8;
            overflow-x: hidden;
        }
        
        [data-theme="dark"] body {
            background: #1a1a2e;
            color: #f8f9fa;
        }
        
        a { text-decoration: none; color: inherit; transition: var(--sp-transition); }
        a:hover { color: var(--sp-accent); }
        
        .container { max-width: 1200px; margin: 0 auto; padding: 0 1.5rem; }
        
        /* ===== HEADER ===== */
        .page-header {
            background: linear-gradient(135deg, var(--sp-primary) 0%, var(--sp-secondary) 50%, var(--sp-accent) 100%);
            padding: 6rem 0 4rem;
            position: relative;
            overflow: hidden;
        }
        
        .page-header::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.15) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .header-content {
            position: relative;
            z-index: 10;
            text-align: center;
            color: white;
        }
        
        .header-title {
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .header-subtitle {
            font-size: 1.125rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .breadcrumb-nav {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1.5rem;
            font-size: 0.875rem;
            opacity: 0.8;
        }
        
        .breadcrumb-nav a:hover {
            color: white;
            text-decoration: underline;
        }
        
        /* ===== NAVIGATION ===== */
        .top-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--sp-border);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        [data-theme="dark"] .top-nav {
            background: rgba(26, 26, 46, 0.95);
            border-bottom-color: #4a5568;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--sp-primary);
        }
        
        [data-theme="dark"] .nav-brand { color: #fff; }
        
        .brand-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-accent));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }
        
        .nav-links {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        
        .nav-link {
            color: var(--sp-gray);
            font-weight: 500;
            padding: 0.5rem 1rem;
        }
        
        .nav-link:hover { color: var(--sp-primary); }
        
        [data-theme="dark"] .nav-link { color: #cbd5e0; }
        [data-theme="dark"] .nav-link:hover { color: var(--sp-accent); }
        
        .btn-nav {
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary));
            color: white;
            padding: 0.6rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            transition: var(--sp-transition);
        }
        
        .btn-nav:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 60, 114, 0.4);
            color: white;
        }
        
        .theme-toggle {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(255,255,255,0.1);
            border: none;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--sp-transition);
        }
        
        .theme-toggle:hover {
            background: rgba(255,255,255,0.2);
            transform: rotate(180deg);
        }
        
        [data-theme="light"] .theme-toggle .fa-moon { display: none; }
        [data-theme="dark"] .theme-toggle .fa-sun { display: none; }
        
        /* ===== MAIN CONTENT ===== */
        .content-section {
            padding: 4rem 0;
        }
        
        .privacy-card {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            border: 1px solid var(--sp-border);
            margin-bottom: 2rem;
        }
        
        [data-theme="dark"] .privacy-card {
            background: #2d3748;
            border-color: #4a5568;
        }
        
        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--sp-primary);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        [data-theme="dark"] .section-title { color: #fff; }
        
        .section-title i {
            color: var(--sp-accent);
            font-size: 1.5rem;
        }
        
        .content-text {
            color: var(--sp-dark);
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }
        
        [data-theme="dark"] .content-text { color: #e2e8f0; }
        
        .content-text p {
            margin-bottom: 1rem;
        }
        
        .content-text ul, .content-text ol {
            margin-left: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .content-text li {
            margin-bottom: 0.5rem;
        }
        
        .content-text strong {
            color: var(--sp-primary);
            font-weight: 600;
        }
        
        [data-theme="dark"] .content-text strong { color: var(--sp-accent); }
        
        .info-box {
            background: rgba(102, 126, 234, 0.1);
            border-left: 4px solid var(--sp-accent);
            padding: 1.5rem;
            border-radius: 8px;
            margin: 1.5rem 0;
        }
        
        [data-theme="dark"] .info-box {
            background: rgba(123, 143, 217, 0.1);
        }
        
        .info-box-title {
            font-weight: 600;
            color: var(--sp-primary);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        [data-theme="dark"] .info-box-title { color: var(--sp-accent); }
        
        .table-container {
            overflow-x: auto;
            margin: 1.5rem 0;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }
        
        [data-theme="dark"] .data-table {
            background: #1a202c;
        }
        
        .data-table th,
        .data-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--sp-border);
        }
        
        [data-theme="dark"] .data-table th,
        [data-theme="dark"] .data-table td {
            border-bottom-color: #4a5568;
        }
        
        .data-table th {
            background: var(--sp-primary);
            color: white;
            font-weight: 600;
        }
        
        .data-table tr:last-child td {
            border-bottom: none;
        }
        
        .data-table tr:hover {
            background: rgba(102, 126, 234, 0.05);
        }
        
        [data-theme="dark"] .data-table tr:hover {
            background: rgba(123, 143, 217, 0.1);
        }
        
        /* ===== TABLE OF CONTENTS ===== */
        .toc-container {
            background: var(--sp-light);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid var(--sp-border);
        }
        
        [data-theme="dark"] .toc-container {
            background: #2d3748;
            border-color: #4a5568;
        }
        
        .toc-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--sp-primary);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        [data-theme="dark"] .toc-title { color: #fff; }
        
        .toc-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 0.75rem;
        }
        
        .toc-list li a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            background: white;
            border-radius: 8px;
            color: var(--sp-dark);
            transition: var(--sp-transition);
            border: 1px solid var(--sp-border);
        }
        
        [data-theme="dark"] .toc-list li a {
            background: #1a202c;
            border-color: #4a5568;
            color: #e2e8f0;
        }
        
        .toc-list li a:hover {
            background: var(--sp-accent);
            color: white;
            transform: translateX(5px);
        }
        
        .toc-list li a i {
            font-size: 0.875rem;
            color: var(--sp-accent);
        }
        
        .toc-list li a:hover i {
            color: white;
        }
        
        /* ===== CONTACT SECTION ===== */
        .contact-section {
            background: linear-gradient(135deg, var(--sp-primary) 0%, var(--sp-secondary) 100%);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            color: white;
            margin-top: 3rem;
        }
        
        .contact-title {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .contact-text {
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .contact-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }
        
        .btn-contact {
            background: white;
            color: var(--sp-primary);
            padding: 1rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--sp-transition);
        }
        
        .btn-contact:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: var(--sp-primary);
        }
        
        .btn-contact-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 1rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--sp-transition);
        }
        
        .btn-contact-outline:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-3px);
        }
        
        /* ===== FOOTER ===== */
        .footer {
            background: var(--sp-dark);
            color: #cbd5e0;
            padding: 3rem 0 1.5rem;
            margin-top: 4rem;
        }
        
        [data-theme="dark"] .footer {
            background: #0f172a;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
        }
        
        .footer-desc {
            font-size: 0.9rem;
            margin-bottom: 1rem;
            opacity: 0.9;
        }
        
        .github-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #24292f;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.875rem;
            transition: var(--sp-transition);
        }
        
        .github-badge:hover {
            background: #1a1e22;
            transform: translateY(-2px);
            color: white;
        }
        
        .footer-title {
            color: white;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li { margin-bottom: 0.5rem; }
        
        .footer-links a {
            color: #94a3b8;
            font-size: 0.9rem;
            transition: var(--sp-transition);
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 4px;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1.5rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            font-size: 0.85rem;
            opacity: 0.8;
        }
        
        .footer-bottom a {
            color: var(--sp-accent);
        }
        
        .footer-bottom a:hover { text-decoration: underline; }
        
        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .page-header {
                padding: 4rem 0 3rem;
            }
            
            .privacy-card {
                padding: 1.5rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .toc-list {
                grid-template-columns: 1fr;
            }
            
            .contact-section {
                padding: 2rem 1.5rem;
            }
            
            .contact-buttons {
                flex-direction: column;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
        
        /* ===== ANIMATIONS ===== */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s ease forwards;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        
        /* ===== BACK TO TOP ===== */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--sp-transition);
            box-shadow: 0 4px 14px rgba(30, 60, 114, 0.3);
            opacity: 0;
            visibility: hidden;
            z-index: 999;
        }
        
        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(30, 60, 114, 0.4);
        }
    </style>
</head>
<body>

    <!-- Top Navigation -->
    <nav class="top-nav">
        <div class="container nav-container">
            <a href="{{ url('/') }}" class="nav-brand">
                <div class="brand-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <span>{{ config('app.name', 'SmartPresence') }}</span>
            </a>
            
            <div class="nav-links">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
                <a href="{{ url('/#features') }}" class="nav-link">Features</a>
                <a href="{{ url('/#pricing') }}" class="nav-link">Pricing</a>
                <a href="{{ url('/#contact') }}" class="nav-link">Contact</a>
                <button class="theme-toggle" id="themeToggle" title="Toggle dark mode">
                    <i class="fas fa-sun"></i>
                    <i class="fas fa-moon"></i>
                </button>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-nav">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-nav">
                            <i class="fas fa-sign-in-alt"></i> Sign In
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container header-content fade-in">
            <h1 class="header-title">
                <i class="fas fa-shield-alt"></i> Privacy Policy
            </h1>
            <p class="header-subtitle">
                Your privacy is important to us. This policy explains how SmartPresence collects, uses, and protects your personal information.
            </p>
            <div class="breadcrumb-nav">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Privacy Policy</span>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="content-section">
        <div class="container">
            
            <!-- Table of Contents -->
            <div class="toc-container fade-in delay-1">
                <h2 class="toc-title">
                    <i class="fas fa-list"></i> Table of Contents
                </h2>
                <ul class="toc-list">
                    <li><a href="#introduction"><i class="fas fa-chevron-right"></i> Introduction</a></li>
                    <li><a href="#information-collected"><i class="fas fa-chevron-right"></i> Information We Collect</a></li>
                    <li><a href="#how-we-use"><i class="fas fa-chevron-right"></i> How We Use Information</a></li>
                    <li><a href="#data-security"><i class="fas fa-chevron-right"></i> Data Security</a></li>
                    <li><a href="#third-party"><i class="fas fa-chevron-right"></i> Third-Party Services</a></li>
                    <li><a href="#your-rights"><i class="fas fa-chevron-right"></i> Your Rights</a></li>
                    <li><a href="#cookies"><i class="fas fa-chevron-right"></i> Cookies & Tracking</a></li>
                    <li><a href="#data-retention"><i class="fas fa-chevron-right"></i> Data Retention</a></li>
                    <li><a href="#children"><i class="fas fa-chevron-right"></i> Children's Privacy</a></li>
                    <li><a href="#changes"><i class="fas fa-chevron-right"></i> Policy Changes</a></li>
                    <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Introduction -->
            <div class="privacy-card fade-in delay-2" id="introduction">
                <h2 class="section-title">
                    <i class="fas fa-info-circle"></i> 1. Introduction
                </h2>
                <div class="content-text">
                    <p>
                        Welcome to <strong>SmartPresence</strong> ("we", "our", or "us"). We are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our attendance management services.
                    </p>
                    <p>
                        By using SmartPresence, you agree to the collection and use of information in accordance with this policy. If you do not agree with our policies and practices, please do not use our services.
                    </p>
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fas fa-calendar"></i> Last Updated
                        </div>
                        <p style="margin: 0;">{{ date('F d, Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Information We Collect -->
            <div class="privacy-card fade-in delay-3" id="information-collected">
                <h2 class="section-title">
                    <i class="fas fa-database"></i> 2. Information We Collect
                </h2>
                <div class="content-text">
                    <p>We collect several types of information to provide and improve our services:</p>
                    
                    <h3 style="font-size: 1.25rem; margin: 1.5rem 0 1rem; color: var(--sp-primary);">
                        <i class="fas fa-user"></i> Personal Information
                    </h3>
                    <ul>
                        <li>Name and contact information (email, phone number)</li>
                        <li>Employee ID and organizational details</li>
                        <li>Department and position information</li>
                        <li>Profile photographs (optional)</li>
                        <li>Payment and billing information</li>
                    </ul>

                    <h3 style="font-size: 1.25rem; margin: 1.5rem 0 1rem; color: var(--sp-primary);">
                        <i class="fas fa-clock"></i> Attendance Data
                    </h3>
                    <ul>
                        <li>Check-in and check-out timestamps</li>
                        <li>Location data (if GPS tracking is enabled)</li>
                        <li>IP addresses and device information</li>
                        <li>Work hours and break times</li>
                        <li>Leave requests and approval history</li>
                    </ul>

                    <h3 style="font-size: 1.25rem; margin: 1.5rem 0 1rem; color: var(--sp-primary);">
                        <i class="fas fa-mobile-alt"></i> Device Information
                    </h3>
                    <ul>
                        <li>Device type and operating system</li>
                        <li>Browser type and version</li>
                        <li>Unique device identifiers</li>
                        <li>Network information</li>
                    </ul>
                </div>
            </div>

            <!-- How We Use Information -->
            <div class="privacy-card fade-in" id="how-we-use">
                <h2 class="section-title">
                    <i class="fas fa-cogs"></i> 3. How We Use Your Information
                </h2>
                <div class="content-text">
                    <p>We use the collected information for the following purposes:</p>
                    
                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Purpose</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Service Delivery</strong></td>
                                    <td>To provide, maintain, and improve our attendance tracking services</td>
                                </tr>
                                <tr>
                                    <td><strong>Communication</strong></td>
                                    <td>To send you updates, security alerts, and support messages</td>
                                </tr>
                                <tr>
                                    <td><strong>Analytics</strong></td>
                                    <td>To understand usage patterns and improve user experience</td>
                                </tr>
                                <tr>
                                    <td><strong>Security</strong></td>
                                    <td>To detect and prevent fraud, abuse, and security incidents</td>
                                </tr>
                                <tr>
                                    <td><strong>Compliance</strong></td>
                                    <td>To comply with legal obligations and enforce our terms</td>
                                </tr>
                                <tr>
                                    <td><strong>Payroll Integration</strong></td>
                                    <td>To generate reports for payroll processing (with consent)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Data Security -->
            <div class="privacy-card fade-in" id="data-security">
                <h2 class="section-title">
                    <i class="fas fa-lock"></i> 4. Data Security
                </h2>
                <div class="content-text">
                    <p>
                        We implement appropriate technical and organizational measures to protect your personal information:
                    </p>
                    <ul>
                        <li><strong>Encryption:</strong> All data is encrypted in transit using SSL/TLS and at rest using AES-256</li>
                        <li><strong>Access Control:</strong> Role-based access control limits data access to authorized personnel only</li>
                        <li><strong>Regular Audits:</strong> Security audits and penetration testing are conducted regularly</li>
                        <li><strong>Data Backups:</strong> Regular backups ensure data recovery in case of incidents</li>
                        <li><strong>Secure Infrastructure:</strong> Hosted on secure cloud infrastructure with industry certifications</li>
                    </ul>
                    <div class="info-box">
                        <div class="info-box-title">
                            <i class="fas fa-exclamation-triangle"></i> Important Note
                        </div>
                        <p style="margin: 0;">
                            While we strive to protect your information, no method of transmission over the Internet is 100% secure. We cannot guarantee absolute security but commit to industry best practices.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Third-Party Services -->
            <div class="privacy-card fade-in" id="third-party">
                <h2 class="section-title">
                    <i class="fas fa-users"></i> 5. Third-Party Services
                </h2>
                <div class="content-text">
                    <p>
                        We may share your information with third parties in the following circumstances:
                    </p>
                    <ul>
                        <li><strong>Service Providers:</strong> Cloud hosting, email delivery, and payment processing partners</li>
                        <li><strong>Legal Requirements:</strong> When required by law or to protect our rights</li>
                        <li><strong>Business Transfers:</strong> In connection with mergers, acquisitions, or asset sales</li>
                        <li><strong>With Consent:</strong> When you explicitly consent to data sharing</li>
                    </ul>
                    <p>
                        We do not sell, trade, or rent your personal information to third parties for marketing purposes.
                    </p>
                </div>
            </div>

            <!-- Your Rights -->
            <div class="privacy-card fade-in" id="your-rights">
                <h2 class="section-title">
                    <i class="fas fa-user-shield"></i> 6. Your Rights
                </h2>
                <div class="content-text">
                    <p>You have the following rights regarding your personal data:</p>
                    <ul>
                        <li><strong>Access:</strong> Request a copy of your personal information</li>
                        <li><strong>Correction:</strong> Request correction of inaccurate or incomplete data</li>
                        <li><strong>Deletion:</strong> Request deletion of your personal information</li>
                        <li><strong>Portability:</strong> Request transfer of your data to another service</li>
                        <li><strong>Opt-Out:</strong> Opt-out of marketing communications</li>
                        <li><strong>Restriction:</strong> Request restriction of data processing</li>
                    </ul>
                    <p>
                        To exercise these rights, please contact us at <a href="mailto:privacy@smartpresence.com" style="color: var(--sp-accent);">privacy@smartpresence.com</a>
                    </p>
                </div>
            </div>

            <!-- Cookies & Tracking -->
            <div class="privacy-card fade-in" id="cookies">
                <h2 class="section-title">
                    <i class="fas fa-cookie-bite"></i> 7. Cookies & Tracking Technologies
                </h2>
                <div class="content-text">
                    <p>We use cookies and similar technologies to enhance your experience:</p>
                    
                    <div class="table-container">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Cookie Type</th>
                                    <th>Purpose</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Essential</strong></td>
                                    <td>Required for basic functionality</td>
                                    <td>Session</td>
                                </tr>
                                <tr>
                                    <td><strong>Preference</strong></td>
                                    <td>Remember your settings and preferences</td>
                                    <td>1 year</td>
                                </tr>
                                <tr>
                                    <td><strong>Analytics</strong></td>
                                    <td>Understand how you use our services</td>
                                    <td>2 years</td>
                                </tr>
                                <tr>
                                    <td><strong>Security</strong></td>
                                    <td>Detect and prevent security threats</td>
                                    <td>Session</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>
                        You can control cookies through your browser settings. However, disabling certain cookies may affect functionality.
                    </p>
                </div>
            </div>

            <!-- Data Retention -->
            <div class="privacy-card fade-in" id="data-retention">
                <h2 class="section-title">
                    <i class="fas fa-archive"></i> 8. Data Retention
                </h2>
                <div class="content-text">
                    <p>We retain your personal information for as long as necessary to:</p>
                    <ul>
                        <li>Provide our services to you</li>
                        <li>Comply with legal obligations</li>
                        <li>Resolve disputes</li>
                        <li>Enforce our agreements</li>
                    </ul>
                    <p>
                        <strong>Specific retention periods:</strong>
                    </p>
                    <ul>
                        <li>Active account data: While your account is active + 3 years</li>
                        <li>Attendance records: 7 years (for compliance purposes)</li>
                        <li>Deleted accounts: 30 days (grace period for recovery)</li>
                        <li>Analytics data: 2 years (anonymized)</li>
                    </ul>
                </div>
            </div>

            <!-- Children's Privacy -->
            <div class="privacy-card fade-in" id="children">
                <h2 class="section-title">
                    <i class="fas fa-child"></i> 9. Children's Privacy
                </h2>
                <div class="content-text">
                    <p>
                        SmartPresence is not intended for children under 16 years of age. We do not knowingly collect personal information from children under 16. If we become aware that we have collected such information, we will take steps to delete it promptly.
                    </p>
                    <p>
                        If you believe a child under 16 has provided us with personal information, please contact us immediately at <a href="mailto:privacy@smartpresence.com" style="color: var(--sp-accent);">privacy@smartpresence.com</a>
                    </p>
                </div>
            </div>

            <!-- Policy Changes -->
            <div class="privacy-card fade-in" id="changes">
                <h2 class="section-title">
                    <i class="fas fa-edit"></i> 10. Changes to This Policy
                </h2>
                <div class="content-text">
                    <p>
                        We may update this Privacy Policy from time to time. We will notify you of any changes by:
                    </p>
                    <ul>
                        <li>Posting the new policy on this page</li>
                        <li>Updating the "Last Updated" date</li>
                        <li>Sending email notification for significant changes</li>
                    </ul>
                    <p>
                        Your continued use of SmartPresence after changes constitutes acceptance of the updated policy.
                    </p>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="contact-section fade-in" id="contact">
                <h2 class="contact-title">
                    <i class="fas fa-envelope"></i> Contact Us
                </h2>
                <p class="contact-text">
                    If you have any questions about this Privacy Policy or our data practices, please don't hesitate to contact us.
                </p>
                <div class="contact-buttons">
                    <a href="mailto:privacy@smartpresence.com" class="btn-contact">
                        <i class="fas fa-envelope"></i> Email Us
                    </a>
                    <a href="tel:+8801234567890" class="btn-contact-outline">
                        <i class="fas fa-phone"></i> Call Us
                    </a>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <!-- Brand -->
                <div>
                    <div class="footer-brand">
                        <div class="brand-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <span>{{ config('app.name', 'SmartPresence') }}</span>
                    </div>
                    <p class="footer-desc">
                        Intelligent attendance management for modern teams in Bangladesh and beyond.
                    </p>
                    <a href="https://github.com/mustafiz06" target="_blank" class="github-badge">
                        <i class="fab fa-github"></i>
                        <span>mustafiz06</span>
                    </a>
                </div>

                <!-- Quick Links -->
                <div>
                    <h5 class="footer-title">Product</h5>
                    <ul class="footer-links">
                        <li><a href="{{ url('/#features') }}">Features</a></li>
                        <li><a href="{{ url('/#pricing') }}">Pricing</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">Changelog</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h5 class="footer-title">Company</h5>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="{{ url('/#contact') }}">Contact</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h5 class="footer-title">Legal</h5>
                    <ul class="footer-links">
                        <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('/terms') }}">Terms of Service</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">GDPR Compliance</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <span>Made with <i class="fas fa-heart text-danger"></i> in Bangladesh</span>
                <div>
                    &copy; {{ date('Y') }} SmartPresence. 
                    Developed by <a href="https://github.com/mustafiz06" target="_blank">Mustafizur Rahman</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    
    <script>
        // ===== THEME TOGGLE =====
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        
        const savedTheme = localStorage.getItem('theme');
        const osPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        
        if (savedTheme === 'dark' || (!savedTheme && osPrefersDark)) {
            html.setAttribute('data-theme', 'dark');
        }
        
        themeToggle.addEventListener('click', () => {
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });

        // ===== BACK TO TOP =====
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(targetId);
                    if (target) {
                        const headerOffset = 100;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

        // ===== ANIMATION ON SCROLL =====
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });

        // ===== PRINT FUNCTIONALITY =====
        function printPolicy() {
            window.print();
        }

        // ===== DOWNLOAD PDF (Optional) =====
        function downloadPDF() {
            Swal.fire({
                title: 'Download Privacy Policy',
                text: 'Your PDF download will start shortly...',
                icon: 'info',
                timer: 2000,
                showConfirmButton: false
            });
        }
    </script>
</body>
</html>