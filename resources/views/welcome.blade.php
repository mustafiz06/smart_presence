<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="SmartPresence - Intelligent Attendance Management System for modern workplaces in Bangladesh and beyond">
    <meta name="keywords" content="attendance, employee management, HR software, time tracking, leave management, Bangladesh">
    <meta name="author" content="Mustafizur Rahman">
    
    <title>{{ config('app.name', 'SmartPresence') }} - Intelligent Attendance Management</title>
    
    <!-- Google Font: Source Sans Pro (AdminLTE Default) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700&display=fallback">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
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
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        [data-theme="dark"] body {
            background: #1a1a2e;
            color: #f8f9fa;
        }
        
        a { text-decoration: none; color: inherit; transition: var(--sp-transition); }
        a:hover { color: var(--sp-accent); }
        
        .container-fluid { max-width: 1400px; margin: 0 auto; }
        
        /* ===== NAVBAR ===== */
        .navbar-sp {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--sp-border);
            box-shadow: var(--sp-shadow);
            padding: 0.75rem 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            transition: var(--sp-transition);
        }
        
        [data-theme="dark"] .navbar-sp {
            background: rgba(26, 26, 46, 0.95);
            border-bottom-color: #4a5568;
        }
        
        .navbar-sp.scrolled {
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--sp-primary);
        }
        
        [data-theme="dark"] .navbar-brand { color: #fff; }
        
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
            box-shadow: 0 4px 12px rgba(30, 60, 114, 0.3);
        }
        
        .navbar-nav .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            color: var(--sp-gray);
            position: relative;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--sp-primary);
        }
        
        [data-theme="dark"] .navbar-nav .nav-link { color: #cbd5e0; }
        [data-theme="dark"] .navbar-nav .nav-link:hover { color: var(--sp-accent); }
        
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--sp-accent);
            transition: var(--sp-transition);
            transform: translateX(-50%);
        }
        
        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 70%;
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.25rem 0.5rem;
            font-size: 1.25rem;
        }
        
        .btn-sp {
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary));
            border: none;
            color: white;
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            border-radius: 8px;
            transition: var(--sp-transition);
            box-shadow: 0 4px 14px rgba(30, 60, 114, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-sp:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 60, 114, 0.4);
            color: white;
        }
        
        .btn-sp-outline {
            background: transparent;
            border: 2px solid var(--sp-primary);
            color: var(--sp-primary);
            font-weight: 600;
            padding: 0.6rem 1.5rem;
            border-radius: 8px;
            transition: var(--sp-transition);
        }
        
        .btn-sp-outline:hover {
            background: var(--sp-primary);
            color: white;
            transform: translateY(-2px);
        }
        
        [data-theme="dark"] .btn-sp-outline {
            border-color: var(--sp-accent);
            color: var(--sp-accent);
        }
        
        [data-theme="dark"] .btn-sp-outline:hover {
            background: var(--sp-accent);
            color: white;
        }
        
        /* ===== HERO SECTION ===== */
        .hero-section {
            background: linear-gradient(135deg, var(--sp-primary) 0%, var(--sp-secondary) 50%, var(--sp-accent) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            padding-top: 70px;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(42, 82, 152, 0.15) 0%, transparent 50%),
                url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 10;
        }
        
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 255, 255, 0.15);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-size: 0.875rem;
            color: white;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-bottom: 1.5rem;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4); }
            50% { box-shadow: 0 0 0 10px rgba(255, 255, 255, 0); }
        }
        
        .hero-title {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: white;
        }
        
        .hero-title span {
            background: linear-gradient(135deg, #ffd700, #ffa500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero-description {
            font-size: 1.125rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 2rem;
            max-width: 550px;
        }
        
        .hero-cta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2.5rem;
        }
        
        .hero-trust {
            display: flex;
            align-items: center;
            gap: 1rem;
            color: rgba(255, 255, 255, 0.85);
            font-size: 0.9rem;
        }
        
        .avatar-stack {
            display: flex;
            margin-left: -0.5rem;
        }
        
        .avatar-stack img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 2px solid white;
            margin-left: -0.5rem;
            transition: transform 0.2s;
        }
        
        .avatar-stack img:hover {
            transform: scale(1.1) translateY(-2px);
            z-index: 10;
        }
        
        .avatar-stack img:first-child { margin-left: 0; }
        
        /* ===== DASHBOARD PREVIEW ===== */
        .dashboard-preview {
            background: #1e293b;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
            border: 1px solid #334155;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .browser-bar {
            background: #334155;
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 1px solid #475569;
        }
        
        .browser-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .browser-dot.red { background: #ef4444; }
        .browser-dot.yellow { background: #f59e0b; }
        .browser-dot.green { background: #22c55e; }
        
        .dashboard-content {
            padding: 1.5rem;
        }
        
        .mini-stat {
            background: #334155;
            border-radius: 12px;
            padding: 1rem;
            text-align: center;
            transition: transform 0.2s;
        }
        
        .mini-stat:hover { transform: scale(1.05); }
        
        .mini-stat .value {
            font-size: 1.5rem;
            font-weight: 600;
            color: #60a5fa;
        }
        
        .mini-stat .label {
            font-size: 0.75rem;
            color: #94a3b8;
        }
        
        .chart-placeholder {
            background: linear-gradient(135deg, #334155, #475569);
            border-radius: 12px;
            padding: 1rem;
            margin: 1rem 0;
            height: 120px;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
            gap: 0.5rem;
        }
        
        .chart-bar {
            width: 12%;
            background: linear-gradient(to top, var(--sp-accent), var(--sp-primary));
            border-radius: 4px 4px 0 0;
            transition: height 0.5s ease;
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            background: rgba(255,255,255,0.05);
            border-radius: 8px;
            margin-bottom: 0.5rem;
        }
        
        .activity-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            flex-shrink: 0;
        }
        
        .activity-dot.success { background: #22c55e; }
        .activity-dot.warning { background: #f59e0b; }
        
        .activity-info { flex: 1; font-size: 0.85rem; }
        .activity-time { font-size: 0.75rem; color: #94a3b8; }
        
        /* ===== FEATURES SECTION ===== */
        .features-section {
            padding: 5rem 0;
            background: white;
        }
        
        [data-theme="dark"] .features-section {
            background: #1a1a2e;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--sp-primary);
        }
        
        [data-theme="dark"] .section-title { color: #fff; }
        
        .section-subtitle {
            color: var(--sp-gray);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: var(--sp-transition);
            border: 1px solid var(--sp-border);
            height: 100%;
            text-align: center;
        }
        
        [data-theme="dark"] .feature-card {
            background: #2d3748;
            border-color: #4a5568;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            border-color: var(--sp-accent);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.75rem;
            color: white;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
        }
        
        .feature-icon.primary { background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary)); }
        .feature-icon.success { background: linear-gradient(135deg, var(--sp-success), #20c997); }
        .feature-icon.warning { background: linear-gradient(135deg, var(--sp-warning), #fd7e14); }
        .feature-icon.info { background: linear-gradient(135deg, var(--sp-accent), var(--sp-accent-light)); }
        
        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--sp-dark);
        }
        
        [data-theme="dark"] .feature-title { color: #fff; }
        
        .feature-desc {
            color: var(--sp-gray);
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        /* ===== STATS SECTION ===== */
        .stats-section {
            padding: 4rem 0;
            background: var(--sp-light);
        }
        
        [data-theme="dark"] .stats-section {
            background: #16213e;
        }
        
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: var(--sp-transition);
            border: 1px solid var(--sp-border);
        }
        
        [data-theme="dark"] .stat-card {
            background: #2d3748;
            border-color: #4a5568;
        }
        
        .stat-card:hover {
            transform: translateY(-4px);
            border-color: var(--sp-accent);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--sp-primary);
            margin-bottom: 0.25rem;
            line-height: 1;
        }
        
        [data-theme="dark"] .stat-number { color: var(--sp-accent); }
        
        .stat-label {
            color: var(--sp-gray);
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        /* ===== HOW IT WORKS ===== */
        .steps-section {
            padding: 5rem 0;
            background: white;
        }
        
        [data-theme="dark"] .steps-section {
            background: #1a1a2e;
        }
        
        .step-card {
            text-align: center;
            padding: 1.5rem;
            position: relative;
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary));
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            box-shadow: 0 8px 20px rgba(30, 60, 114, 0.3);
            position: relative;
            z-index: 2;
        }
        
        .step-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--sp-dark);
        }
        
        [data-theme="dark"] .step-title { color: #fff; }
        
        .step-desc {
            color: var(--sp-gray);
            font-size: 0.95rem;
        }
        
        .step-connector {
            position: absolute;
            top: 30px;
            left: 50%;
            right: -50%;
            height: 2px;
            background: linear-gradient(90deg, var(--sp-primary), var(--sp-accent));
            z-index: 1;
        }
        
        @media (max-width: 991px) {
            .step-connector { display: none; }
        }
        
        /* ===== PRICING SECTION ===== */
        .pricing-section {
            padding: 5rem 0;
            background: var(--sp-light);
        }
        
        [data-theme="dark"] .pricing-section {
            background: #16213e;
        }
        
        .pricing-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem 2rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: var(--sp-transition);
            border: 1px solid var(--sp-border);
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        [data-theme="dark"] .pricing-card {
            background: #2d3748;
            border-color: #4a5568;
        }
        
        .pricing-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .pricing-card.popular {
            border: 2px solid var(--sp-accent);
            transform: scale(1.05);
        }
        
        [data-theme="dark"] .pricing-card.popular {
            border-color: var(--sp-accent);
        }
        
        .pricing-card.popular:hover {
            transform: scale(1.05) translateY(-8px);
        }
        
        .popular-badge {
            position: absolute;
            top: 1rem;
            right: -2rem;
            background: linear-gradient(135deg, var(--sp-warning), #fd7e14);
            color: white;
            padding: 0.25rem 2.5rem;
            font-size: 0.75rem;
            font-weight: 600;
            transform: rotate(45deg);
        }
        
        .pricing-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--sp-border);
        }
        
        .pricing-plan-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--sp-primary);
            margin-bottom: 0.5rem;
        }
        
        [data-theme="dark"] .pricing-plan-name { color: #fff; }
        
        .pricing-price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--sp-accent);
            line-height: 1;
        }
        
        .pricing-currency {
            font-size: 1.5rem;
            vertical-align: super;
        }
        
        .pricing-period {
            font-size: 0.875rem;
            color: var(--sp-gray);
            margin-top: 0.5rem;
        }
        
        .pricing-users {
            font-size: 0.875rem;
            color: var(--sp-gray);
            background: rgba(102, 126, 234, 0.1);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            display: inline-block;
            margin-top: 0.75rem;
        }
        
        .pricing-features {
            list-style: none;
            margin-bottom: 2rem;
        }
        
        .pricing-features li {
            padding: 0.75rem 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--sp-dark);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        [data-theme="dark"] .pricing-features li {
            color: #fff;
            border-bottom-color: rgba(255,255,255,0.05);
        }
        
        .pricing-features li:last-child {
            border-bottom: none;
        }
        
        .pricing-features li i {
            color: var(--sp-success);
            font-size: 1rem;
        }
        
        .pricing-features li.disabled {
            color: var(--sp-gray);
            text-decoration: line-through;
        }
        
        .pricing-features li.disabled i {
            color: var(--sp-gray);
        }
        
        .pricing-btn {
            width: 100%;
            padding: 1rem;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            transition: var(--sp-transition);
            display: inline-block;
        }
        
        .pricing-btn-primary {
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary));
            color: white;
            border: none;
        }
        
        .pricing-btn-primary:hover {
            box-shadow: 0 8px 25px rgba(30, 60, 114, 0.4);
            transform: translateY(-2px);
            color: white;
        }
        
        .pricing-btn-outline {
            background: transparent;
            border: 2px solid var(--sp-primary);
            color: var(--sp-primary);
        }
        
        .pricing-btn-outline:hover {
            background: var(--sp-primary);
            color: white;
            transform: translateY(-2px);
        }
        
        [data-theme="dark"] .pricing-btn-outline {
            border-color: var(--sp-accent);
            color: var(--sp-accent);
        }
        
        [data-theme="dark"] .pricing-btn-outline:hover {
            background: var(--sp-accent);
            color: white;
        }
        
        .enterprise-card {
            background: linear-gradient(135deg, var(--sp-primary), var(--sp-secondary));
            color: white;
            grid-column: 1 / -1;
            text-align: center;
            padding: 3rem 2rem;
            border-radius: 20px;
            margin-top: 2rem;
        }
        
        .enterprise-card h3 {
            font-size: 1.75rem;
            margin-bottom: 1rem;
        }
        
        .enterprise-card p {
            opacity: 0.9;
            margin-bottom: 1.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .enterprise-btn {
            background: white;
            color: var(--sp-primary);
            padding: 1rem 2.5rem;
            border-radius: 10px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--sp-transition);
        }
        
        .enterprise-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: var(--sp-primary);
        }
        
        /* ===== CTA SECTION ===== */
        .cta-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, var(--sp-primary) 0%, var(--sp-secondary) 100%);
            text-align: center;
            color: white;
        }
        
        .cta-title {
            font-size: clamp(1.75rem, 4vw, 2.5rem);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .cta-description {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .btn-light-sp {
            background: white;
            color: var(--sp-primary);
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 10px;
            transition: var(--sp-transition);
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-light-sp:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            color: var(--sp-primary);
        }
        
        .btn-outline-light-sp {
            background: transparent;
            border: 2px solid white;
            color: white;
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 10px;
            transition: var(--sp-transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-outline-light-sp:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-3px);
        }
        
        .cta-note {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        /* ===== FOOTER ===== */
        .footer {
            background: var(--sp-dark);
            color: #cbd5e0;
            padding: 3rem 0 1.5rem;
        }
        
        [data-theme="dark"] .footer {
            background: #0f172a;
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
            padding: 0;
            margin: 0;
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
        
        .social-links {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }
        
        .social-link {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--sp-transition);
        }
        
        .social-link:hover {
            background: var(--sp-accent);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1.5rem;
            margin-top: 2rem;
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
            margin: 0 0.25rem;
        }
        
        .footer-bottom a:hover { text-decoration: underline; }
        
        /* ===== THEME TOGGLE ===== */
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
        
        /* ===== RESPONSIVE UTILITIES ===== */
        @media (max-width: 991px) {
            .hero-section {
                padding-top: 80px;
                text-align: center;
            }
            
            .hero-content { margin: 0 auto; }
            .hero-cta { justify-content: center; }
            .hero-trust { justify-content: center; }
            .dashboard-preview {
                max-width: 400px;
                margin: 2rem auto 0;
            }
            .step-connector { display: none; }
            .pricing-card.popular {
                transform: scale(1);
            }
            .pricing-card.popular:hover {
                transform: translateY(-8px);
            }
        }
        
        @media (max-width: 767px) {
            .navbar-nav {
                background: white;
                padding: 1rem;
                border-radius: 12px;
                box-shadow: var(--sp-shadow);
                margin-top: 1rem;
            }
            
            [data-theme="dark"] .navbar-nav {
                background: #2d3748;
            }
            
            .hero-title { font-size: 2rem; }
            .hero-description { font-size: 1rem; }
            .feature-card { margin-bottom: 1rem; }
            .stat-card { margin-bottom: 1rem; }
            .pricing-card { padding: 1.5rem 1rem; }
            .pricing-price { font-size: 2.5rem; }
        }
        
        /* ===== ANIMATIONS ===== */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }
        
        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* ===== LOADING STATE ===== */
        .loading-skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 8px;
        }
        
        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-sp navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <div class="brand-icon">
                    <i class="fas fa-fingerprint"></i>
                </div>
                <span>{{ config('app.name', 'SmartPresence') }}</span>
            </a>
            
            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Nav Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    
                    <!-- Theme Toggle -->
                    <li class="nav-item">
                        <button class="theme-toggle" id="themeToggle" title="Toggle dark mode">
                            <i class="fas fa-sun"></i>
                            <i class="fas fa-moon"></i>
                        </button>
                    </li>
                    
                    <!-- Auth Buttons -->
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="btn btn-sp btn-sm">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn btn-sp-outline btn-sm">
                                    <i class="fas fa-sign-in-alt"></i> Sign In
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="btn btn-sp btn-sm">
                                        <i class="fas fa-rocket"></i> Get Started
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-fluid px-4">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="hero-content text-center text-lg-start">
                        <!-- Badge -->
                        <div class="hero-badge">
                            <span class="w-2 h-2 rounded-circle bg-success"></span>
                            Now with AI-Powered Analytics
                        </div>
                        
                        <!-- Heading -->
                        <h1 class="hero-title animate__animated animate__fadeInUp">
                            Intelligent Attendance<br>
                            <span>Management System</span>
                        </h1>
                        
                        <!-- Description -->
                        <p class="hero-description animate__animated animate__fadeInUp animate__delay-1s">
                            Streamline employee attendance tracking, leave management, and reporting with <strong>SmartPresence</strong>. 
                            Built for modern teams in Bangladesh and beyond.
                        </p>
                        
                        <!-- CTA Buttons -->
                        <div class="hero-cta animate__animated animate__fadeInUp animate__delay-2s">
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light-sp">
                                <i class="fas fa-rocket"></i> Start Free Trial
                            </a>
                            @endif
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-outline-light-sp">
                                <i class="fas fa-sign-in-alt"></i> Sign In
                            </a>
                            @endif
                        </div>
                        
                        <!-- Trust Indicators -->
                        <div class="hero-trust animate__animated animate__fadeInUp animate__delay-3s">
                            <div class="avatar-stack">
                                <img src="https://i.pravatar.cc/40?img=1" alt="User">
                                <img src="https://i.pravatar.cc/40?img=2" alt="User">
                                <img src="https://i.pravatar.cc/40?img=3" alt="User">
                                <img src="https://i.pravatar.cc/40?img=4" alt="User">
                            </div>
                            <div>
                                <div class="fw-semibold">2,000+ Companies</div>
                                <div class="small">Trust SmartPresence</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Content - Dashboard Preview -->
                <div class="col-lg-6 col-12">
                    <div class="dashboard-preview animate-float" style="animation-delay: -1s;">
                        <!-- Browser Header -->
                        <div class="browser-bar">
                            <div class="browser-dot red"></div>
                            <div class="browser-dot yellow"></div>
                            <div class="browser-dot green"></div>
                            <div class="ms-3 small text-muted">app.smartpresence.com</div>
                        </div>
                        
                        <!-- Dashboard Content -->
                        <div class="dashboard-content">
                            <!-- Stats Row -->
                            <div class="row g-3 mb-4">
                                <div class="col-4">
                                    <div class="mini-stat">
                                        <div class="value text-success">94%</div>
                                        <div class="label">Present</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mini-stat">
                                        <div class="value text-info">12</div>
                                        <div class="label">On Leave</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mini-stat">
                                        <div class="value text-warning">5</div>
                                        <div class="label">Pending</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Chart Placeholder -->
                            <div class="chart-placeholder">
                                <div class="chart-bar" style="height: 60%"></div>
                                <div class="chart-bar" style="height: 80%"></div>
                                <div class="chart-bar" style="height: 45%"></div>
                                <div class="chart-bar" style="height: 90%"></div>
                                <div class="chart-bar" style="height: 70%"></div>
                                <div class="chart-bar" style="height: 85%"></div>
                                <div class="chart-bar" style="height: 55%"></div>
                            </div>
                            
                            <!-- Recent Activity -->
                            <div class="small">
                                <div class="activity-item">
                                    <span class="activity-dot success"></span>
                                    <div class="activity-info">Sarah checked in • 9:02 AM</div>
                                    <span class="activity-time text-success">On time</span>
                                </div>
                                <div class="activity-item">
                                    <span class="activity-dot warning"></span>
                                    <div class="activity-info">Mike checked in • 9:18 AM</div>
                                    <span class="activity-time text-warning">Late</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container-fluid px-4">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Everything You Need for<br><span style="color: var(--sp-accent);">Effortless Attendance</span></h2>
                <p class="section-subtitle">Powerful features designed to simplify time tracking and boost productivity.</p>
            </div>
            
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="feature-card">
                        <div class="feature-icon primary">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="feature-title">One-Click Check-In</h3>
                        <p class="feature-desc">
                            Employees can check in/out instantly from any device with optional geolocation & IP verification.
                        </p>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="feature-card">
                        <div class="feature-icon success">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3 class="feature-title">Smart Leave Management</h3>
                        <p class="feature-desc">
                            Streamlined leave requests with automated approval workflows and real-time balance tracking.
                        </p>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="feature-card">
                        <div class="feature-icon info">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="feature-title">Real-Time Analytics</h3>
                        <p class="feature-desc">
                            Visual dashboards with attendance trends, punctuality reports, and exportable data for payroll.
                        </p>
                    </div>
                </div>
                
                <!-- Feature 4 -->
                <div class="col-md-6 col-lg-3 animate-on-scroll">
                    <div class="feature-card">
                        <div class="feature-icon warning">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3 class="feature-title">Mobile-First Design</h3>
                        <p class="feature-desc">
                            Fully responsive AdminLTE interface that works seamlessly on desktop, tablet, and mobile.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container-fluid px-4">
            <div class="row g-4 justify-content-center">
                <div class="col-md-3 col-6 animate-on-scroll">
                    <div class="stat-card">
                        <div class="stat-number" data-count="99.9">0</div>
                        <div class="stat-label">Uptime SLA</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 animate-on-scroll">
                    <div class="stat-card">
                        <div class="stat-number" data-count="50000">0</div>
                        <div class="stat-label">Daily Check-ins</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 animate-on-scroll">
                    <div class="stat-card">
                        <div class="stat-number" data-count="150">0</div>
                        <div class="stat-label">Countries</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 animate-on-scroll">
                    <div class="stat-card">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="steps-section">
        <div class="container-fluid px-4">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Get Started in <span style="color: var(--sp-accent);">3 Simple Steps</span></h2>
                <p class="section-subtitle">No complex setup. Start managing attendance in minutes.</p>
            </div>
            
            <div class="row g-4 justify-content-center position-relative">
                <!-- Step 1 -->
                <div class="col-md-4 text-center step-card animate-on-scroll">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Create Account</h3>
                    <p class="step-desc">Sign up and customize your organization settings, departments, and working hours.</p>
                    <div class="step-connector d-none d-md-block"></div>
                </div>
                
                <!-- Step 2 -->
                <div class="col-md-4 text-center step-card animate-on-scroll">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Invite Your Team</h3>
                    <p class="step-desc">Add employees via CSV import or individual invites. Assign roles instantly.</p>
                    <div class="step-connector d-none d-md-block"></div>
                </div>
                
                <!-- Step 3 -->
                <div class="col-md-4 text-center step-card animate-on-scroll">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Start Tracking</h3>
                    <p class="step-desc">Your team can now check in/out, request leaves, and get real-time insights.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing-section">
        <div class="container-fluid px-4">
            <div class="section-header animate-on-scroll">
                <h2 class="section-title">Simple, Transparent <span style="color: var(--sp-accent);">Pricing</span></h2>
                <p class="section-subtitle">Choose the perfect plan for your team. All prices are per user/month in BDT.</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Basic Plan -->
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3 class="pricing-plan-name">Basic</h3>
                            <div class="pricing-price">
                                <span class="pricing-currency">৳</span>10
                            </div>
                            <div class="pricing-period">per user/month</div>
                            <div class="pricing-users">Up to 20 Users</div>
                        </div>
                        
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> Basic Check-in/Check-out</li>
                            <li><i class="fas fa-check-circle"></i> Attendance Reports</li>
                            <li><i class="fas fa-check-circle"></i> Email Support</li>
                            <li><i class="fas fa-check-circle"></i> Mobile Access</li>
                            <li class="disabled"><i class="fas fa-times-circle"></i> GPS Tracking</li>
                            <li class="disabled"><i class="fas fa-times-circle"></i> Leave Management</li>
                            <li class="disabled"><i class="fas fa-times-circle"></i> Advanced Analytics</li>
                        </ul>
                        
                        <a href="{{ route('register') }}" class="pricing-btn pricing-btn-outline">
                            <i class="fas fa-rocket"></i> Get Started
                        </a>
                    </div>
                </div>
                
                <!-- Professional Plan (Popular) -->
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="pricing-card popular">
                        <div class="popular-badge">POPULAR</div>
                        <div class="pricing-header">
                            <h3 class="pricing-plan-name">Professional</h3>
                            <div class="pricing-price">
                                <span class="pricing-currency">৳</span>20
                            </div>
                            <div class="pricing-period">per user/month</div>
                            <div class="pricing-users">Up to 20 Users</div>
                        </div>
                        
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> Everything in Basic</li>
                            <li><i class="fas fa-check-circle"></i> GPS Location Tracking</li>
                            <li><i class="fas fa-check-circle"></i> Geo-fencing</li>
                            <li><i class="fas fa-check-circle"></i> Priority Support</li>
                            <li><i class="fas fa-check-circle"></i> Basic Leave Management</li>
                            <li class="disabled"><i class="fas fa-times-circle"></i> Advanced Analytics</li>
                            <li class="disabled"><i class="fas fa-times-circle"></i> Payroll Integration</li>
                        </ul>
                        
                        <a href="{{ route('register') }}" class="pricing-btn pricing-btn-primary">
                            <i class="fas fa-rocket"></i> Get Started
                        </a>
                    </div>
                </div>
                
                <!-- Enterprise Plan -->
                <div class="col-md-6 col-lg-4 animate-on-scroll">
                    <div class="pricing-card">
                        <div class="pricing-header">
                            <h3 class="pricing-plan-name">Enterprise</h3>
                            <div class="pricing-price">
                                <span class="pricing-currency">৳</span>35
                            </div>
                            <div class="pricing-period">per user/month</div>
                            <div class="pricing-users">Up to 20 Users</div>
                        </div>
                        
                        <ul class="pricing-features">
                            <li><i class="fas fa-check-circle"></i> Everything in Professional</li>
                            <li><i class="fas fa-check-circle"></i> Full Leave Management</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Analytics & Reports</li>
                            <li><i class="fas fa-check-circle"></i> Payroll Integration</li>
                            <li><i class="fas fa-check-circle"></i> Dedicated Account Manager</li>
                            <li><i class="fas fa-check-circle"></i> 24/7 Priority Support</li>
                            <li><i class="fas fa-check-circle"></i> Custom Integrations</li>
                        </ul>
                        
                        <a href="{{ route('register') }}" class="pricing-btn pricing-btn-outline">
                            <i class="fas fa-rocket"></i> Get Started
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Enterprise Large Team -->
            <div class="enterprise-card animate-on-scroll">
                <h3><i class="fas fa-building"></i> Need More Than 20 Users?</h3>
                <p>Get custom pricing for teams up to 50+ users with volume discounts and enterprise features.</p>
                <a href="mailto:sales@smartpresence.com" class="enterprise-btn">
                    <i class="fas fa-envelope"></i> Contact Sales
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container-fluid px-4">
            <h2 class="cta-title animate__animated animate__fadeInUp">Ready to Transform Your Attendance Management?</h2>
            <p class="cta-description animate__animated animate__fadeInUp animate__delay-1s">
                Join thousands of companies who trust SmartPresence to streamline their workforce management.
            </p>
            <div class="cta-buttons animate__animated animate__fadeInUp animate__delay-2s">
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn-light-sp">
                    <i class="fas fa-rocket"></i> Start Free Trial
                </a>
                @endif
                <a href="#contact" class="btn-outline-light-sp">
                    <i class="fas fa-calendar"></i> Schedule Demo
                </a>
            </div>
            <p class="cta-note animate__animated animate__fadeInUp animate__delay-3s">
                ✓ No credit card required &nbsp; • &nbsp; ✓ 14-day free trial &nbsp; • &nbsp; ✓ Cancel anytime
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">
        <div class="container-fluid px-4">
            <div class="row">
                <!-- Brand & Info -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-brand">
                        <div class="brand-icon">
                            <i class="fas fa-fingerprint"></i>
                        </div>
                        <span>{{ config('app.name', 'SmartPresence') }}</span>
                    </div>
                    <p class="footer-desc">Intelligent attendance management for modern teams in Bangladesh and beyond.</p>
                    <a href="https://github.com/mustafiz06" target="_blank" class="github-badge">
                        <i class="fab fa-github"></i>
                        <span>mustafiz06</span>
                    </a>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="footer-title">Product</h5>
                    <ul class="footer-links">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#">Integrations</a></li>
                        <li><a href="#">Changelog</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5 class="footer-title">Company</h5>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Social & Legal -->
                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Connect</h5>
                    <div class="social-links mb-3">
                        <a href="https://github.com/mustafiz06" target="_blank" class="social-link" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <p class="small mb-0">
                        &copy; {{ date('Y') }} SmartPresence<br>
                        Developed by <a href="https://github.com/mustafiz06" target="_blank" style="color: var(--sp-accent);">Mustafizur Rahman</a>
                    </p>
                </div>
            </div>
            
            <!-- Bottom Bar -->
            <div class="footer-bottom">
                <span>Made with <i class="fas fa-heart text-danger"></i> in Bangladesh</span>
                <div>
                    <a href="#">Privacy Policy</a> • 
                    <a href="#">Terms of Service</a> • 
                    <a href="#">Cookie Settings</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="btn-sp position-fixed bottom-4 end-4" style="display: none; z-index: 1040;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
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
            
            animateChartBars();
        });
        
        // ===== NAVBAR SCROLL EFFECT =====
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar-sp');
            const backToTop = document.getElementById('backToTop');
            
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            
            if (window.scrollY > 400) {
                backToTop.style.display = 'flex';
            } else {
                backToTop.style.display = 'none';
            }
        });
        
        // ===== BACK TO TOP =====
        document.getElementById('backToTop').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // ===== ANIMATE ON SCROLL =====
        const animateOnScrollElements = document.querySelectorAll('.animate-on-scroll');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    if (entry.target.querySelector('.stat-number')) {
                        animateStats(entry.target);
                    }
                    
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        animateOnScrollElements.forEach(el => observer.observe(el));
        
        // ===== ANIMATE STATS =====
        function animateStats(element) {
            const statNumbers = element.querySelectorAll('.stat-number[data-count]');
            
            statNumbers.forEach(stat => {
                const target = parseFloat(stat.dataset.count);
                const isPercent = stat.textContent.includes('%');
                const isPlus = stat.textContent.includes('+');
                const duration = 2000;
                const steps = 60;
                const increment = target / steps;
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + (isPercent ? '%' : '') + (isPlus ? '+' : '');
                        clearInterval(timer);
                    } else {
                        stat.textContent = Math.floor(current) + (isPercent ? '%' : '') + (isPlus ? '+' : '');
                    }
                }, duration / steps);
            });
        }
        
        // ===== ANIMATE CHART BARS =====
        function animateChartBars() {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach((bar, index) => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 100 * index);
            });
        }
        
        document.addEventListener('DOMContentLoaded', () => {
            animateChartBars();
            
            if (typeof PushMenu !== 'undefined') {
                $('[data-widget="pushmenu"]').PushMenu('init');
            }
        });
        
        // ===== HOVER EFFECTS FOR FEATURE CARDS =====
        document.querySelectorAll('.feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.borderColor = 'var(--sp-accent)';
            });
            card.addEventListener('mouseleave', function() {
                this.style.borderColor = 'var(--sp-border)';
            });
        });
        
        // ===== CSRF TOKEN FOR AJAX =====
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        // ===== DEMO: SIMULATE CHECK-IN =====
        function simulateCheckIn() {
            Swal.fire({
                title: 'Check-In Successful!',
                html: `
                    <div class="text-start">
                        <p><strong>Time:</strong> ${new Date().toLocaleTimeString()}</p>
                        <p><strong>Location:</strong> Dhaka, Bangladesh</p>
                        <p><strong>Status:</strong> <span class="text-success">On Time</span></p>
                    </div>
                `,
                icon: 'success',
                confirmButtonText: 'Great!',
                confirmButtonColor: 'var(--sp-primary)'
            });
        }
        
        window.simulateCheckIn = simulateCheckIn;
    </script>
</body>
</html>