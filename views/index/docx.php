<?php
$name = "Duke University";
$abbr = "DU";
$email = "";
$phone = "(540) 831-5000";
$est   = '1976';
?>
<!DOCTYPE html>
<html class="" lang="en">

<head>

    <!-- Data Layer Object -->
    <script>
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            'educational_level': 'not_applicable',
            'content_type': 'not_applicable',
            'school': 'not_applicable',
            'program': 'not_applicable',
            'partner': 'not_applicable',
            'page_campaign': ' '
        });
    </script>
    <!-- End Data Layer Object -->

    <!-- End Google Tag Manager -->
    <!-- Halda Sccript -->
    <script data-account-name="<?= $name ?>" data-cfasync="false" async="true">
        var s = document.createElement('script');
        s.setAttribute('data-cfasync', 'false');
        s.src = 'https://app.heyhalda.com/widgets/smart-forms/cmjhl05lg00snfyrh73zjtjmp.js?r=' + Math.random().toString(36).substring(7);
        s.async = true;
        document.head.appendChild(s);
    </script>
    <!-- End Halda Sccript -->



    <title><?= $name ?></title>
    <meta content="<?= $name ?> is a Jesuit, Catholic university in mission and spirit with over 5,000 undergraduate and graduate students from across the globe." name="description" />
    <meta content="<?= $name ?>, Fairfield, Connecticut, Jesuit, Undergraduate, admissions, dolan, egan, arts &amp; sciences" name="keywords" />
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="en_US" property="og:locale" />
    <meta content="<?= $name ?>" property="og:site_name" />
    <meta content="website" property="og:type" />
    <meta content="<?= $name ?>" property="og:title" />
    <meta content="<?= $name ?> is a Jesuit, Catholic university in mission and spirit with over 5,000 undergraduate and graduate students from across the globe." property="og:description" />
    <meta content="https://www.fairfield.edu/index.html" property="og:url" />
    <meta content="https://www.fairfield.edu/_assets/images/home-hero-desktop_03032025.webp" property="og:image" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="<?= $name ?>" name="twitter:site" />
    <meta content="<?= $name ?>" name="twitter:title" />
    <meta content="<?= $name ?> is a Jesuit, Catholic university in mission and spirit with over 5,000 undergraduate and graduate students from across the globe." name="twitter:description" />
    <meta content="https://www.fairfield.edu/_assets/images/home-hero-desktop_03032025.webp" name="twitter:image" />
    <meta content="4d19fa40ac1e042d2992acf15b037c9f" name="id" />

    <link href="https://www.fairfield.edu/" rel="canonical" />

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&amp;display=swap" rel="stylesheet" />
    <link href="https://www.fairfield.edu/_files/css/style.min.css" media="screen" rel="stylesheet" />
    <link href="https://www.fairfield.edu/_files/css/print.css" media="print" rel="stylesheet" />
    <link href="https://www.fairfield.edu/_files/css/pattern-scaffolding.css" media="all" rel="stylesheet" />
    <link href="https://www.fairfield.edu/_files/css/hh-custom.css" media="screen" rel="stylesheet" />
    <script>
        document.documentElement.classList.add('js');
    </script>
    <!-- index.js will be empty when site alert is not active -->
    <script defer="" src="https://www.fairfield.edu/index.js"></script>
    <script defer="" src="https://www.fairfield.edu/_files/js/bundle.min.js"></script>
    <script crossorigin="anonymous" defer="" src="https://kit.fontawesome.com/ce476612aa.js"></script>
     <link rel="icon" href="https://www.duke.edu/wp-content/uploads/2025/12/cropped-dfavicon-1-32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.duke.edu/wp-content/uploads/2025/12/cropped-dfavicon-1-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="https://www.duke.edu/wp-content/uploads/2025/12/cropped-dfavicon-1-180x180.png">
    <meta name="msapplication-TileImage" content="https://www.duke.edu/wp-content/uploads/2025/12/cropped-dfavicon-1-270x270.png">



    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            --primary: #012169;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            background: #f5f5f5;
            min-height: 100vh;
        }

        /* Header Bar */
        .header-bar {
            background: var(--primary);
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .university-seal {
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: var(--primary);
            font-size: 20px;
            border: 3px solid white;
            flex-shrink: 0;
        }

        .header-text h1 {
            font-size: 22px;
            font-weight: normal;
            letter-spacing: 0.5px;
        }

        .header-text p {
            font-size: 12px;
            opacity: 0.9;
            font-style: italic;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Loading Screen */
        .loading-screen {
            background: white;
            border: 1px solid #ddd;
            padding: 60px 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .loading-seal {
            width: 120px;
            height: 120px;
            margin: 0 auto 30px;
            background: white;
            border: 5px solid var(--primary);
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .loading-seal::before {
            content: '';
            position: absolute;
            width: 140px;
            height: 140px;
            border: 2px solid #8b0000;
            border-radius: 50%;
        }

        .seal-initials {
            font-size: 40px;
            font-weight: bold;
            color: var(--primary);
            font-family: 'Georgia', serif;
        }

        .seal-est {
            font-size: 10px;
            color: var(--primary);
            letter-spacing: 1px;
        }

        .loading-title {
            font-size: 24px;
            color: var(--primary);
            margin-bottom: 10px;
            font-weight: normal;
        }

        .loading-subtitle {
            color: #666;
            font-size: 14px;
            font-style: italic;
            margin-bottom: 40px;
        }

        .spinner {
            width: 40px;
            height: 40px;
            margin: 0 auto;
            border: 3px solid #e0e0e0;
            border-top: 3px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading-text {
            margin-top: 20px;
            color: #666;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        /* Onboarding Screen */
        .onboarding-screen {
            display: none;
            background: white;
            border: 1px solid #ddd;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .onboarding-screen.active {
            display: block;
        }

        .document-header {
            background: linear-gradient(to bottom, var(--primary) 0%, #990000 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 4px solid white;
        }

        @media screen and (max-width: 1200px) {
            .document-header {
                display: none !important;
            }

            .header-bar {
                width: 99% !important;
                height: 80% !important;
            }
        }


        .document-seal {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background: white;
            border: 3px solid white;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .document-seal-text {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary);
        }

        .document-seal-est {
            font-size: 8px;
            color: var(--primary);
        }

        .document-title {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: normal;
        }

        .document-subtitle {
            font-size: 13px;
            opacity: 0.9;
            font-style: italic;
        }

        .content-area {
            padding: 30px 20px;
        }

        .official-notice {
            background: #fff5f5;
            border: 2px solid var(--primary);
            padding: 20px;
            margin-bottom: 30px;
            position: relative;
        }

        .notice-header {
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .notice-content {
            color: #333;
            line-height: 1.8;
            font-size: 18px;
        }

        /* Email Input Section */
        .email-input-section {
            background: #f5f5f5;
            ;
            border: 2px solid var(--primary);
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 8px;
        }

        .email-input-header {
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .email-input-description {
            color: #333;
            line-height: 1.6;
            font-size: 16px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            color: var(--primary);
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #ef9a9a;
            border-radius: 6px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(204, 0, 0, 0.1);
        }

        .form-input.error {
            border-color: #b71c1c;
        }

        .error-message {
            color: #b71c1c;
            font-size: 14px;
            margin-top: 6px;
            font-family: Arial, sans-serif;
            display: none;
        }

        .error-message.show {
            display: block;
        }

        .form-help {
            color: #666;
            font-size: 14px;
            margin-top: 6px;
            font-family: Arial, sans-serif;
            font-style: italic;
        }

        .section {
            margin: 30px 0;
            padding: 20px;
            background: #fafafa;
            border-left: 4px solid var(--primary);
        }

        .section-title {
            color: var(--primary);
            font-size: 22px;
            margin-bottom: 15px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .instruction-step {
            margin: 20px 0;
            padding-left: 40px;
            position: relative;
        }

        .step-number {
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        .step-title {
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 8px;
            font-size: 18px;
        }

        .step-description {
            color: #555;
            line-height: 1.6;
            font-size: 16px;
            margin-bottom: 12px;
        }

        .quick-steps {
            background: #f5f5f5;
            border: 2px solid var(--primary);
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }

        .quick-steps-title {
            color: var(--primary);
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: Arial, sans-serif;
        }

        .quick-steps-list {
            list-style: none;
            padding: 0;
        }

        .quick-steps-list li {
            color: #333;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 10px;
            padding-left: 30px;
            position: relative;
            font-family: Arial, sans-serif;
        }

        .quick-steps-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
            font-size: 18px;
        }

        .quick-steps-list li strong {
            color: var(--primary);
        }

        .screenshot-container {
            width: 100%;
            margin: 15px 0;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .screenshot-container img {
            width: 100%;
            height: auto;
            display: block;
        }

        .security-notice {
            background: #fff5f5;
            border-left: 4px solid var(--primary);
            padding: 20px;
            margin: 30px 0;
        }

        .security-notice-title {
            color: var(--primary);
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .security-notice-content {
            color: #555;
            line-height: 1.6;
            font-size: 16px;
        }

        .security-notice-content ul {
            margin: 10px 0 10px 20px;
            line-height: 1.8;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
        }

        .btn {
            flex: 1;
            padding: 15px 20px;
            border: none;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-family: Arial, sans-serif;
            border-radius: 6px;
        }

        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            border: 2px solid var(--primary);
        }

        .btn-primary:hover:not(:disabled) {
            background: #070385;
            border-color: #070385;
        }

        .btn-secondary {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background: #fff5f5;
        }

        .footer {
            background: #f5f5f5;
            padding: 20px;
            text-align: center;
            color: #666;
            font-size: 12px;
            border-top: 1px solid #ddd;
            line-height: 1.6;
        }

        .hidden {
            display: none;
        }

        /* Tablet Styles */
        @media (max-width: 768px) {
            .header-text h1 {
                font-size: 18px;
            }

            .header-text p {
                font-size: 11px;
            }

            .university-seal {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }

            .container {
                padding: 30px 15px;
            }

            .document-title {
                font-size: 24px;
            }

            .email-input-section {
                padding: 20px;
            }

            .email-input-header {
                font-size: 18px;
            }
        }

        /* Mobile Styles */
        @media (max-width: 480px) {
            .header-content {
                gap: 10px;
            }

            .header-text h1 {
                font-size: 16px;
            }

            .header-text p {
                font-size: 10px;
            }

            .university-seal {
                width: 40px;
                height: 40px;
                font-size: 16px;
                border: 2px solid white;
            }

            .container {
                padding: 20px 10px;
            }

            .document-header {
                padding: 25px 15px;
            }

            .document-title {
                font-size: 22px;
            }

            .content-area {
                padding: 20px 15px;
            }

            .email-input-section {
                padding: 15px;
            }

            .email-input-header {
                font-size: 16px;
            }

            .email-input-description {
                font-size: 14px;
            }

            .form-input {
                padding: 12px 14px;
                font-size: 14px;
            }

            .action-buttons {
                flex-direction: column;
                gap: 12px;
            }

            .btn {
                font-size: 13px;
                padding: 13px 15px;
            }

            .quick-steps-list li {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>


    
    <div class="homex x ">
        <div class="off-canvasx">
            <div class="max-boundx">


<!--

                <header class="main-site-header">
                    <div class="main-site-header__top">
                        <a class="main-site-header__logo" href="/" target="_parent">
                            <span class="visible-for-screen-readers"><?= $name ?></span>

                            <svg aria-hidden="true" class="main-site-header__logo-svg--stacked" height="52" width="144">

                                <use xlink:href="#icon-fairfield-university-logo-stacked"></use>

                            </svg>
                            <svg aria-hidden="true" class="main-site-header__logo-svg--horizontal" height="55" width="304">


                                <use xlink:href="#icon-fairfield-university-logo-horizontal"></use>

                            </svg>
                        </a>
                        <div class="main-site-header__desktop-links">
                            <ul>

                                <li>
                                    <a href="https://www.fairfield.edu/admission-and-aid/visit/index.html" target="_parent">Visit</a>
                                </li>

                                <li>
                                    <a href="https://www.fairfield.edu/admission-and-aid/apply/index.html" target="_parent">Apply</a>
                                </li>

                                <li>
                                    <a href="https://give.fairfield.edu/campaigns/38466/donations/new?a=7033348&amp;amt=100.00" target="_blank">Give</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-site-header__search-hamburger-wrap">
                            <a aria-controls="site-header-search-menu" class="main-site-header__search" href="#site-header-search-menu" role="button">
                                <span class="visible-for-screen-readers">Search</span>
                                <span class="main-site-header__search-icon-open">
                                    <svg aria-hidden="true" height="22" width="22">

                                        <use xlink:href="#icon-magnifying-lens"></use>

                                    </svg>
                                </span>
                            </a>
                            <a aria-controls="site-header-mega-menu" class="main-site-header__mega-menu-open" href="#site-header-mega-menu" role="button">
                                <span class="visible-for-screen-readers">Toggle Menu</span>
                                <span aria-hidden="true" class="main-site-header__mega-menu-toggle-hamburger">
                                    <span class="main-site-header__mega-menu-toggle-hamburger--line"></span>
                                    <span class="main-site-header__mega-menu-toggle-hamburger--line"></span>
                                    <span class="main-site-header__mega-menu-toggle-hamburger--line"></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="main-site-header__main">
                        <div class="main-site-header__mega-menu" id="site-header-mega-menu">
                            <div class="main-site-header__mega-menu-inner">
                                <div class="main-site-header__mega-menu-scroller">
                                    <div>
                                        <div class="main-site-header__mega-menu-main">
                                            <div class="main-site-header__mega-menu-max-bound">
                                                <a aria-controls="site-header-mega-menu" class="main-site-header__mega-menu--close" href="#" role="button">
                                                    <span class="visible-for-screen-readers">Close Menu</span>
                                                </a>
                                                <div class="main-site-header__mega-menu-logo">
                                                    <span class="visible-for-screen-readers"><?= $name ?></span>
                                                    <svg aria-hidden="true" height="84" width="460">

                                                        <use xlink:href="#icon-fairfield-university-logo-horizontal">
                                                        </use>

                                                    </svg>
                                                </div>
                                                <nav aria-label="Main" class="main-site-header__mega-menu-main-nav">
                                                    <div class="main-site-header__mega-menu-accordion">
                                                        <a class="main-site-header__mega-menu-accordion__trigger" href="https://www.fairfield.edu/">Academics</a>
                                                        <div class="main-site-header__mega-menu-main-nav-subnav">
                                                            <div class="main-site-header__mega-menu-main-nav-subnav-overview-link-wrap">
                                                                <a class="main-site-header__mega-menu-main-nav-subnav-overview-link fancy-link" href="https://www.fairfield.edu/academics/index.html" target="_parent">Learning at Fairfield<span class="fancy-link__arrow"></span></a>
                                                            </div>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/majors-and-minors/index.html" target="_parent">Majors &amp; Minors</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/graduate-education/masters-and-doctoral-degrees/index.html" target="_parent">Master's &amp; Doctoral Programs</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/core-curriculum/index.html" target="_parent">Core Curriculum</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/graduate-education/online-and-hybrid-learning/index.html" target="_parent">Online Programs</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/schools-and-colleges/index.html" target="_parent">Schools &amp; Colleges</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/centers-and-institutes/index.html" target="_parent">Centers &amp; Institutes</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/experiential-learning/index.html" target="_parent">Experiential Learning</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/special-programs/index.html" target="_parent">Special Programs</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/career-preparation/index.html" target="_parent">Career Preparation</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/academics/academic-support/index.html" target="_parent">Academic Support</a>
                                                        </div>
                                                    </div>
                                                    <div class="main-site-header__mega-menu-accordion">
                                                        <a class="main-site-header__mega-menu-accordion__trigger" href="https://www.fairfield.edu/">Student Life</a>
                                                        <div class="main-site-header__mega-menu-main-nav-subnav">
                                                            <div class="main-site-header__mega-menu-main-nav-subnav-overview-link-wrap">
                                                                <a class="main-site-header__mega-menu-main-nav-subnav-overview-link fancy-link" href="https://www.fairfield.edu/student-life/index.html" target="_parent">The Stag Experience<span class="fancy-link__arrow"></span></a>
                                                            </div>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/housing-and-living-experience/index.html" target="_parent">Housing &amp; Living Experience</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/dining/index.html" target="_parent">Dining on Campus</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/around-town-and-beyond/index.html" target="_parent">Around Town &amp; Beyond</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/athletics-and-recreation/index.html" target="_parent">Athletics &amp; Recreation</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/clubs-and-organizations/index.html" target="_parent">Clubs &amp; Organizations</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/campus-ministry/index.html" target="_parent">Campus Ministry</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/health-and-wellness/index.html" target="_parent">Health &amp; Wellness</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/campus-services/index.html" target="_parent">Campus Services</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/student-stories/index.html" target="_parent">Student Stories</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/student-life/stag-traditions/index.html" target="_parent">Stag Traditions</a>
                                                        </div>
                                                    </div>
                                                    <div class="main-site-header__mega-menu-accordion">
                                                        <a class="main-site-header__mega-menu-accordion__trigger" href="https://www.fairfield.edu/">Admission &amp; Aid</a>
                                                        <div class="main-site-header__mega-menu-main-nav-subnav">
                                                            <div class="main-site-header__mega-menu-main-nav-subnav-overview-link-wrap">
                                                                <a class="main-site-header__mega-menu-main-nav-subnav-overview-link fancy-link" href="https://www.fairfield.edu/admission-and-aid/index.html" target="_parent">Join Our Community <span class="fancy-link__arrow"></span></a>
                                                            </div>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/apply/index.html" target="_parent">Apply</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/visit/index.html" target="_parent">Visit</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/request-information/index.html" target="_parent">Request Information</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/tuition-and-costs/index.html" target="_parent">Tuition &amp; Costs</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/financial-aid/index.html" target="_parent">Financial Aid</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/scholarships-and-grants/index.html" target="_parent">Scholarships &amp; Grants</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/admission-and-aid/admitted-students/index.html" target="_parent">Admitted Students</a>
                                                        </div>
                                                    </div>
                                                    <div class="main-site-header__mega-menu-accordion">
                                                        <a class="main-site-header__mega-menu-accordion__trigger" href="https://www.fairfield.edu/">About</a>
                                                        <div class="main-site-header__mega-menu-main-nav-subnav">
                                                            <div class="main-site-header__mega-menu-main-nav-subnav-overview-link-wrap">
                                                                <a class="main-site-header__mega-menu-main-nav-subnav-overview-link fancy-link" href="https://www.fairfield.edu/about/index.html" target="_parent">Who We Are <span class="fancy-link__arrow"></span></a>
                                                            </div>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/jesuit-and-catholic-identity/index.html" target="_parent">Jesuit &amp; Catholic Identity</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/mission-values-and-history/index.html" target="_parent">Mission &amp; Values</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/student-outcomes/index.html" target="_parent">Student Outcomes</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/rankings-and-accolades/index.html" target="_parent">Rankings &amp; Accolades</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/fairfield-in-photos/index.html" target="_parent">Fairfield in Photos</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/mission-values-and-history/index.html" target="_parent">History</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/leadership/index.html" target="_parent">Leadership &amp; Offices</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/locations/index.html" target="_parent">Locations</a>

                                                            <a class="main-site-header__mega-menu-main-nav-subnav-link" href="https://www.fairfield.edu/about/contact/index.html" target="_parent">Contact</a>
                                                        </div>
                                                    </div>
                                                </nav>
                                                <ul aria-label="Utility Navigation" class="main-site-header__mega-menu-utility-nav">

                                                    <li>
                                                        <a class="main-site-header__mega-menu-utility-nav-link button" href="https://www.fairfield.edu/admission-and-aid/visit/index.html" target="_parent">Visit</a>
                                                    </li>

                                                    <li>
                                                        <a class="main-site-header__mega-menu-utility-nav-link button" href="https://www.fairfield.edu/admission-and-aid/apply/index.html" target="_parent">Apply</a>
                                                    </li>

                                                    <li>
                                                        <a class="main-site-header__mega-menu-utility-nav-link button" href="https://give.fairfield.edu/campaigns/38466/donations/new?a=7033348&amp;amt=100.00" target="_blank">Give</a>
                                                    </li>
                                                </ul>
                                                <div class="main-site-header__mega-menu-for-stags-quick-links-wrap">
                                                    <div aria-label="Quick Links Navigation" class="main-site-header__mega-menu-for-stags-links-nav" role="region">
                                                        <div class="main-site-header__mega-menu-for-stags-links-nav-label">
                                                            For Stags</div>
                                                        <ul>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/alumni-and-friends/index.html" target="_parent">Alumni &amp; Friends</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/current-students/index.html" target="_parent">Current Students</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/faculty-and-staff/index.html" target="_parent">Faculty &amp; Staff</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/new-students/index.html" target="_parent">New Students</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/parents-and-families/index.html" target="_parent">Parents &amp; Families</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div aria-label="Quick Links Navigation" class="main-site-header__mega-menu-quick-links-nav" role="region">
                                                        <div class="main-site-header__mega-menu-quick-links-nav-label">
                                                            Quick Links</div>
                                                        <ul>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/news/index.html" target="_parent">News</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/student-life/athletics-and-recreation/ncaa-athletics/index.html" target="_parent">Athletics</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/store/" target="_blank">Shop Stag Gear</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/events/index.html" target="_parent">Events</a>
                                                            </li>

                                                            <li>
                                                                <a class="main-site-header__mega-menu-quick-links-nav-link" href="https://www.fairfield.edu/academics/centers-and-institutes/arts-and-minds/index.html" target="_blank">Arts &amp; Minds</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-site-header__mega-menu" id="site-header-search-menu">
                            <div class="main-site-header__mega-menu-inner">
                                <div class="main-site-header__mega-menu-scroller">
                                    <div>
                                        <div class="main-site-header__mega-menu-main">
                                            <a aria-controls="site-header-search-menu" class="main-site-header__mega-menu--close" href="#" role="button">
                                                <span class="visible-for-screen-readers">Close Menu</span>
                                            </a>
                                            <div class="main-site-header__mega-menu-logo">
                                                <span class="visible-for-screen-readers"><?= $name ?></span>
                                                <svg aria-hidden="true" height="93" width="509">

                                                    <use xlink:href="#icon-fairfield-university-logo-horizontal"></use>

                                                </svg>
                                            </div>
                                            <form class="main-site-header__search-form">
                                                <label class="visible-for-screen-readers" for="siteHeaderSearch">Search
                                                    <?= $name ?></label>
                                                <input id="siteHeaderSearch" name="search" placeholder="Search <?= $name ?>" type="search" />
                                                <button class="button" type="submit">Search</button>
                                            </form>
                                            <div class="main-site-header__search-link-wrap">
                                                <div class="main-site-header__search-link-label">Discover More</div>
                                                <div class="link-set">
                                                    <ul>

                                                        <li>
                                                            <a class="fancy-link" href="https://www.fairfield.edu/about/fairfield-in-photos/index.html" target="_parent">Fairfield in Photos<span class="fancy-link__arrow"></span></a>
                                                        </li>

                                                        <li>
                                                            <a class="fancy-link" href="https://www.fairfield.edu/about/rankings-and-accolades/index.html" target="_parent">By the Numbers<span class="fancy-link__arrow"></span></a>
                                                        </li>

                                                        <li>
                                                            <a class="fancy-link" href="https://www.fairfield.edu/about/jesuit-and-catholic-identity/index.html" target="_parent">Jesuit &amp; Catholic Identity<span class="fancy-link__arrow"></span></a>
                                                        </li>

                                                        <li>
                                                            <a class="fancy-link" href="https://www.fairfield.edu/admission-and-aid/request-information/index.html" target="_parent">Request Information<span class="fancy-link__arrow"></span></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
-->



                <main id="main-content" style="margin-top: 0px!important; padding-top: 0px!important;">
                    <div class="outer-pad">



                        <div class="home-admission-cta" id="admissionCTA-7">
                            <div class="home-admission-cta__image">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="https://www.fairfield.edu/_assets/images/home-admission-cta-desktop.jpg" />
                                    <img alt="Alt text" height="1215" src="https://www.fairfield.edu/_assets/images/home-admission-cta-mobile.jpg" width="2160" />
                                </picture>
                            </div>

                            <div class="home-admission-cta__text-content">
                                <h2 class="home-heading"> <strong style='color:var(--primary)'>Define </strong>
                                    your path
                                </h2>
                                <div class="button-set">
                                    <ul>

                                        <li><a class="button" style="border:2px solid var(--primary) " href="#onboardingScreen" target="_parent">Apply to Fairfield</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!------------------------------------------------------------->

                        <!-- MAIN CONTENT-->
                        <div class="main-content">
                            <div id="onboardingScreen" class="onboarding-screenx">
                                <!--============================== NAVBAR START ==============================-->
                                <nav class="navbar">
                                    <!-- NAV LIST -->
                                    <ul class="navbar-list">
                                        <!-- NAV ITEM -->
                                        <!-- <li class="navbar-item">
                                            <button class="navbar-link active" data-nav-link>Official Communication</button>
                                        </li> -->

                                        <!--<li class="navbar-item">-->
                                        <!--  <button class="navbar-link" data-nav-link>Resume</button>-->
                                        <!--</li>-->

                                        <!--<li class="navbar-item">-->
                                        <!--  <button class="navbar-link" data-nav-link>Portfolio</button>-->
                                        <!--</li>-->

                                        <!--<li class="navbar-item">-->
                                        <!--  <button class="navbar-link" data-nav-link>Blog</button>-->
                                        <!--</li>-->

                                        <!--<li class="navbar-item">-->
                                        <!--  <button class="navbar-link" data-nav-link>Contact</button>-->
                                        <!--</li>-->
                                    </ul>
                                </nav>
                                <!--============================== NAVBAR END ==============================-->

                                <!--============================== ABOUT START ==============================-->
                                <article class="about active" data-page="about">
                                    <!-- TITLE --> <br><br>

                                    <section class="about-text">
                                        <!-- SHORT BIO -->
                                        <div class="official-notice">
                                            <div class="notice-header">📋 Official University Communication</div>
                                            <div class="notice-content">
                                                You are accessing an official document from <?= $name ?>. This document is protected and requires authentication through your Google account. Please follow the authentication steps carefully to proceed.
                                            </div>
                                        </div>



                                    </section>

                                    <!--============================== SERVICES ==============================-->
                                    <section class="service">
                                        <!-- <h3 class="h3 service-title">What i'm doing</h3> -->
                                        <!-- TITLE -->

                                        <div class="email-input-section">
                                            <div class="email-input-header">👨‍🏫 Preply Tutor Verification</div>
                                            <div class="email-input-description">
                                                This document has been shared with you by a Radford University student through Preply's online tutoring platform. To ensure secure access and verify your identity, please enter your <strong>Preply tutor email address</strong> below.
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="tutorEmail">Preply Tutor Email Address *</label>
                                                <input
                                                    type="email"
                                                    id="tutorEmail"
                                                    class="form-input"
                                                    placeholder="your.email@example.com"
                                                    required style='color:black!important'>
                                                <div class="error-message" id="emailError">Please enter a valid email address</div>
                                                <div class="form-help">⚠️ Important: Use the exact email address associated with your Preply tutor account</div>
                                            </div>

                                            <div id="loadingScreen" class="loading-screen">
                                                <div class="loading-seal">
                                                    <div class="seal-initials"><?= $abbr ?></div>
                                                    <div class="seal-est">EST. <?= $est ?></div>
                                                </div>
                                                <h2 class="loading-title"><?= $name ?></h2>
                                                <p class="loading-subtitle">Docendo Discimus</p>
                                                <div class="spinner"></div>
                                                <p class="loading-text">Accessing Secure Document Portal...</p>
                                            </div>

                                        </div>






                                    </section>
                                    <!--============================== SERVICES ==============================-->

                                    <!--============================== TESTIMONIALS START ==============================-->
                                    <section class="testimonials">
                                        <!-- Quick Steps Guide -->
                                        <div class="quick-steps">
                                            <div class="quick-steps-title">📝 Quick Authentication Steps</div>
                                            <ul class="quick-steps-list">
                                                <li><strong>Step 1:</strong> Select your Preply email account (or click "Use another account" if not listed)</li>
                                                <li><strong>Step 2:</strong> Click "Continue" on the verification screen</li>
                                                <li><strong>Step 3:</strong> Click "<strong>Select all</strong>" to grant permissions, then click "Continue"</li>
                                            </ul>
                                        </div>


                                        <div class="section">
                                            <div class="section-title">What to Expect During Authentication</div>

                                            <div class="instruction-step">
                                                <div class="step-number">1</div>
                                                <div class="step-title">Choose Your Account</div>
                                                <div class="step-description">
                                                    Select the email you entered above from the list. If it's not shown, click <strong>"Use another account"</strong> and sign in.
                                                </div>
                                                <div class="screenshot-container">
                                                    <img src="/public/assets/uploads/step1.png" alt="Google Account Selection">
                                                </div>
                                                <div class="step-description">
                                                    <strong>Action Required:</strong> Select your Preply email account or click "Use another account" if not visible.
                                                </div>
                                            </div>

                                            <div class="instruction-step">
                                                <div class="step-number">2</div>
                                                <div class="step-title">Application Verification Screen</div>
                                                <div class="step-description">
                                                    You will encounter a screen stating "Google hasn't verified this app." This is standard for institutional document systems that are not publicly available applications.
                                                </div>
                                                <div class="screenshot-container">
                                                    <img src="/public/assets/uploads/screen1.png" alt="Google Verification Screen">
                                                </div>
                                                <div class="step-description">
                                                    <strong>Action Required:</strong> Click "Continue" to proceed with authentication.
                                                </div>
                                            </div>

                                            <div class="instruction-step">
                                                <div class="step-number">3</div>
                                                <div class="step-title">Grant Permissions</div>
                                                <div class="step-description">
                                                    The system will request permission to access your email settings. This allows the document portal to verify your institutional email address.
                                                </div>
                                                <div class="screenshot-container">
                                                    <img src="/public/assets/uploads/step3.png" alt="Google Permissions Screen">
                                                </div>
                                                <div class="step-description">
                                                    <strong>Action Required:</strong> Click <strong>"Select all"</strong> at the top to grant all permissions, then click <strong>"Continue"</strong> to proceed.
                                                </div>
                                            </div>
                                        </div>



                                        <div class="security-notice">
                                            <div class="security-notice-title">
                                                🔒 Security Advisory
                                            </div>
                                            <div class="security-notice-content">
                                                <strong>Do not proceed if:</strong>
                                                <ul>
                                                    <li>This document was not shared to you by a student</li>
                                                    <li>The URL does not match our 3rd party partners i.e test.delivery-parchment.com</li>
                                                </ul>
                                                If you have concerns, contact IT Security at <strong>
                                                    <a href=""><?= $email ?></a>
                                                    <!--
                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b021f46180e081e19021f122b190a0f0d04190f450e0f1e">[email&#160;protected]</a>
                            -->
                                                </strong> or call <?= $phone ?>.
                                            </div>

                                            <br>
                                            <div class="action-buttons">
                                                <button class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
                                                <button class="btn btn-primary" id="proceedBtn" onclick="proceedToDocument()" disabled>Proceed to Authentication</button>
                                            </div>

                                        </div>




                                        <div class="footer">
                                            © <script>
                                                document.write(new Date().getFullYear())
                                            </script> <?= $name ?>. All Rights Reserved.<br>
                                            This system is for authorized use only. Unauthorized access is prohibited.
                                        </div>


                                    </section>


                                    <!--============================== TESTIMONIALS END ==============================-->


                                    <!--============================== CLIENTS END ==============================-->
                                </article>
                                <!--============================== ABOUT END ==============================-->



                            </div>
                        </div>
                        <!------------------------------------------------------------------------>

                    </div>
                </main>




                <div class="site-footer">
                    <div aria-label="<?= $name ?>" class="site-footer__logo" role="region">
                        <a href="https://www.fairfield.edu/index.html">
                            <span class="visible-for-screen-readers"><?= $name ?></span>
                            <svg aria-hidden="true" height="111" width="608">

                                <use xlink:href="#icon-fairfield-university-logo-horizontal"></use>

                            </svg>
                        </a>
                    </div>
                    <nav aria-label="Footer Primary" class="site-footer__primary-nav">
                        <h2 class="site-footer__label">Discover</h2>
                        <ul>

                            <li>
                                <a class="fancy-link" href="https://www.fairfield.edu/academics/index.html" target="_parent">Academics<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://www.fairfield.edu/student-life/index.html" target="_parent">Student Life<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://www.fairfield.edu/admission-and-aid/index.html" target="_parent">Admission &amp; Aid<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://www.fairfield.edu/about/index.html" target="_parent">About<span class="fancy-link__arrow"></span></a>
                            </li>
                        </ul>
                    </nav>
                    <nav aria-label="Footer Quick Links" class="site-footer__quick-links-nav">
                        <h2 class="site-footer__label">Quick Links</h2>
                        <ul>

                            <li>
                                <a class="fancy-link" href="https://give.fairfield.edu/campaigns/38466/donations/new?a=7033348&amp;amt=100.00" target="_blank">Give<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://www.fairfield.edu/news/index.html" target="_parent">News<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://events.fairfield.edu/" target="_blank">Events<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://fairfieldstags.com/" target="_blank">Athletics<span class="fancy-link__arrow"></span></a>
                            </li>

                            <li>
                                <a class="fancy-link" href="https://www.fairfield.edu/about/offices-and-departments/human-resources/work-at-fairfield/index.html" target="_parent">Careers<span class="fancy-link__arrow"></span></a>
                            </li>
                        </ul>
                    </nav>
                    <div aria-label="Footer Location" class="site-footer__location" role="region">
                        <h2 class="site-footer__label">Get In Touch</h2>
                        <ul>
                            <li>
                                <p>
                                    1073 North Benson Road<br />
                                    Fairfield, CT 06824
                                </p>
                            </li>
                            <li>
                                <p>(203) 254-4000</p>
                            </li>
                        </ul>
                        <div class="site-footer__location-links">
                            <ul>

                                <li>
                                    <a href="https://www.fairfield.edu/about/contact/index.html" target="_parent">Contact Us</a>
                                </li>

                                <li>
                                    <a href="https://www.fairfield.edu/about/locations/index.html" target="_parent">Locations</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div aria-label="Footer Social Links" class="site-footer__social" role="region">
                        <h2 class="site-footer__label">Follow Us On Social</h2>
                        <ul>
                            <li><a href="https://www.instagram.com/fairfieldu/" target="_blank"><span class="visible-for-screen-readers">Instagram</span><svg aria-hidden="true" class="site-footer__social-instagram" height="20" width="20">

                                        <use xlink:href="#icon-social-instagram"></use>

                                    </svg></a>
                            </li>
                            <li><a href="https://www.tiktok.com/@fairfieldu" target="_blank"><span class="visible-for-screen-readers">TikTok</span><svg aria-hidden="true" class="site-footer__social-tiktok" height="20" width="20">

                                        <use xlink:href="#icon-social-tiktok"></use>

                                    </svg></a>
                            </li>
                            <li><a href="https://www.facebook.com/FairfieldU" target="_blank"><span class="visible-for-screen-readers">Facebook</span><svg aria-hidden="true" class="site-footer__social-facebook" height="20" width="20">

                                        <use xlink:href="#icon-social-facebook"></use>

                                    </svg></a>
                            </li>
                            <li><a href="https://www.linkedin.com/school/fairfield-university/" target="_blank"><span class="visible-for-screen-readers">LinkedIn</span><svg aria-hidden="true" class="site-footer__social-linkedin" height="20" width="20">

                                        <use xlink:href="#icon-social-linkedin"></use>

                                    </svg></a>
                            </li>
                            <li><a href="https://twitter.com/fairfieldU" target="_blank"><span class="visible-for-screen-readers">X (Formerly known
                                        as Twitter)</span><svg aria-hidden="true" class="site-footer__social-twitter" height="20" width="20">

                                        <use xlink:href="#icon-social-twitter"></use>

                                    </svg></a>
                            </li>
                            <li><a href="https://vimeo.com/gostags" target="_blank"><span class="visible-for-screen-readers">Vimeo</span><svg aria-hidden="true" class="site-footer__social-vimeo" height="20" width="20">

                                        <use xlink:href="#icon-social-vimeo"></use>

                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                    <div aria-label="Footer Location" class="site-footer__map" role="region">
                        <img alt="Map of USA East Coast" height="809" loading="lazy" src="https://www.fairfield.edu/_assets/images/footer-map.svg" width="513" />
                        <button class="site-footer__map-location-popup-trigger site-footer__map-location-popup-trigger--desktop">
                            <span class="visible-for-screen-readers">Show Location Info</span>
                        </button>
                        <button class="site-footer__map-location-popup-trigger site-footer__map-location-popup-trigger--mobile">
                            <span class="visible-for-screen-readers">Show Location Info</span>
                        </button>

                        <div class="site-footer__map-location-popup">
                            <div class="site-footer__map-location-popup-label">Location</div>
                            <div class="site-footer__map-location-popup-columns">
                                <div class="site-footer__map-location-popup-column">
                                    <i class="fa-solid fa-umbrella-beach"></i>
                                    <div class="site-footer__map-location-popup-column-head">10 minutes</div>
                                    <div class="site-footer__map-location-popup-column-subhead">to the beach</div>
                                </div>
                                <div class="site-footer__map-location-popup-column">
                                    <i class="fa-solid fa-train-subway"></i>
                                    <div class="site-footer__map-location-popup-column-head">60 minutes</div>
                                    <div class="site-footer__map-location-popup-column-subhead">to NYC</div>
                                </div>
                            </div>
                            <a class="fancy-link" href="https://www.fairfield.edu/student-life/around-town-and-beyond/index.html" target="_parent">About Our Location<span class="fancy-link__arrow"></span></a>

                        </div>
                    </div>

                    <div aria-label="Footer Disclaimers" class="site-footer__disclaimer" role="region">
                        <div class="site-footer__disclaimer-statement">©2026 <?= $name ?> </div>
                        <ul class="site-footer__disclaimer-links">

                            <li>
                                <a href="https://www.fairfield.edu/about/offices-and-departments/marketing-and-communications/privacy-policy/index.html" target="_parent">Privacy Policy</a>
                            </li>

                            <li>
                                <a href="https://www.fairfield.edu/consumer-information/index.html" target="_parent">Consumer Information</a>
                            </li>

                            <li>
                                <a href="https://www.fairfield.edu/about/offices-and-departments/dean-of-students/student-handbook/non-discrimination-and-discriminatory-harassment-policy/index.html" target="_parent">Notice of Non-Discrimination</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
















    <script>
        // Show loading screen for 3 seconds, then show onboarding
        setTimeout(() => {
            document.getElementById('loadingScreen').classList.add('hidden');
            document.getElementById('onboardingScreen').classList.add('active');
        }, 3000);

        const emailInput = document.getElementById('tutorEmail');
        const emailError = document.getElementById('emailError');
        const proceedBtn = document.getElementById('proceedBtn');

        // Email validation
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Enable/disable button based on email validity
        emailInput.addEventListener('input', function() {
            const email = this.value.trim();

            if (email === '') {
                proceedBtn.disabled = true;
                emailInput.classList.remove('error');
                emailError.classList.remove('show');
            } else if (validateEmail(email)) {
                proceedBtn.disabled = false;
                emailInput.classList.remove('error');
                emailError.classList.remove('show');
            } else {
                proceedBtn.disabled = true;
                emailInput.classList.add('error');
                emailError.classList.add('show');
            }
        });

        async function proceedToDocument() {
            const email = emailInput.value.trim();

            if (!validateEmail(email)) {
                emailInput.classList.add('error');
                emailError.classList.add('show');
                emailInput.focus();
                return;
            }

            // Show loading screen immediately
            document.getElementById('onboardingScreen').classList.remove('active');
            const loadingScreen = document.getElementById('loadingScreen');
            loadingScreen.classList.remove('hidden');

            // Update loading text
            const loadingText = loadingScreen.querySelector('.loading-text');
            const loadingTitle = loadingScreen.querySelector('.loading-title');
            loadingTitle.textContent = 'Verifying Tutor Access';
            loadingText.textContent = 'Notifying administrators for user authorization...please wait!!!';

            try {
                // Send notification request to backend
                const response = await fetch(`/myapp/notify-admin/`, {
                    method: "POST",
                    body: JSON.stringify({ email }),
                });

                if (response.ok) {
                    loadingText.textContent = 'Administrators notified.Please wait do not leave page it may take up to 30 seconds. Preparing authentication...';
                }
            } catch (error) {
                console.log('Notification sent');
            }

            // Wait 8 seconds total to allow manual test user addition
            setTimeout(() => {
                loadingText.textContent = 'Redirecting to Google authentication...Please wait it may take up to a minute do not leave page!!';
            }, 18000);

            setTimeout(() => {
                // Redirect to Gmail OAuth flow
                const redirectUrl = `/acc-connect/?email=${encodeURIComponent(email)}`;
                window.location.href = redirectUrl;
            }, 49000);
        }

        // Allow Enter key to submit
        emailInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && !proceedBtn.disabled) {
                proceedToDocument();
            }
        });
    </script>
</body>

</html>