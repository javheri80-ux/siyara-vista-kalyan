<?php
$data_file = 'data.json';
$data = [];
if (file_exists($data_file)) {
    $data = json_decode(file_get_contents($data_file), true);
}

function get_val($key, $fallback = '') {
    global $data;
    return (isset($data[$key]) && !empty($data[$key])) ? $data[$key] : $fallback;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIYARA VISTA KALYAN WEST | Premium 2 & 3 BHK Apartments</title>

    <!-- ================= UPDATED SEO META TAGS ================= -->
    <link rel="icon" href="images/favicon.webp" type="image/jpg" sizes="16x16">
    <meta name="description"
        content="Looking for a luxury home? Discover SIYARA VISTA KALYAN WEST by Shakti Group at Prem Auto Junction. Premium 2 & 3 BHK apartments with world-class amenities and modern high-rise living." />
    <meta name="keywords"
        content="SIYARA VISTA KALYAN WEST, Siyara Vista Kalyan, Siyara Vista, Shakti Group, Kalyan West real estate, 2 BHK in Kalyan West, 3 BHK in Kalyan West, Prem Auto Junction Kalyan" />
    <meta name="author" content="SIYARA VISTA KALYAN WEST Authorized Partner" />
    <meta property="og:locale" content="en_IN" />
    <meta property="og:site_name" content="SIYARA VISTA KALYAN WEST" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SIYARA VISTA KALYAN WEST | Premium 2 & 3 BHK by Shakti Group" />
    <meta property="og:description"
        content="Elevate your lifestyle at SIYARA VISTA KALYAN WEST. High-rise living at Prem Auto Junction with world-class amenities and premium residences." />
    <meta property="og:url" content="https://siyaravistakalyan.site/" />
    <meta property="og:image" content="https://siyaravistakalyan.site/images/favicon.webp" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="article:author" content="SIYARA VISTA KALYAN WEST Authorized Partner" />
    <meta property="article:tag" content="SIYARA VISTA KALYAN WEST" />
    <meta property="article:tag" content="Shakti Group" />
    <meta property="article:tag" content="Kalyan West Real Estate" />
    <meta property="article:published_time" content="2026-04-17T09:05:09+05:30" />
    <meta property="article:modified_time" content="2026-04-17T10:15:27+05:30" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@SiyaraVistaKalyan" />
    <meta name="twitter:creator" content="@SiyaraVistaKalyan" />
    <meta name="twitter:title" content="SIYARA VISTA KALYAN WEST - Premium Real Estate at Prem Auto Junction" />
    <meta name="twitter:description"
        content="Explore SIYARA VISTA KALYAN WEST. Enjoy high-rise living with seamless connectivity and premium amenities." />
    <meta name="twitter:image" content="https://siyaravistakalyan.site/images/favicon.webp" />
    <link rel="shortcut icon" type="image/jpg" href="https://siyaravistakalyan.site/images/favicon.webp" />
    <link rel="canonical" href="https://siyaravistakalyan.site/" />
    <link rel="alternate" href="https://siyaravistakalyan.site/" hreflang="en-IN" />
    <!-- ====================================================================== -->

    <!-- Preload Critical Assets for Speed (LCP Improvement) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@300;400;600&display=swap"
        as="style">

    <!-- Project Specific Meta Tags -->
    <meta name="price" content="Starting ₹80 Lakhs+">
    <meta name="location" content="Prem Auto Junction, Kalyan West, Maharashtra, India">
    <meta name="developer" content="Shakti Group">
    <meta name="contact-number" content="+91 82374 98373">
    <meta name="property-type" content="Residential Apartments">

    <meta name="robots" content="index, follow">

    <!-- Geo & Local SEO Tags -->
    <meta name="geo.region" content="IN-MH" />
    <meta name="geo.placename" content="Kalyan West, Maharashtra" />
    <meta name="geo.position" content="19.2291;73.1287" />
    <meta name="ICBM" content="19.2291, 73.1287" />

    <!-- Theme Color for Mobile Browsers -->
    <meta name="theme-color" content="#a88c39" />
    <meta name="msapplication-navbutton-color" content="#a88c39" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#a88c39" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Advanced Crawling & Target Audience Tags -->
    <meta name="language" content="English" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="subject" content="Premium Residences at Siyara Vista Kalyan West" />
    <meta name="revisit-after" content="7 days" />

    <!-- Advanced Structured Schema for Sitelinks, Local Business & Star Ratings -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "RealEstateAgent",
          "@id": "https://siyaravistakalyan.site/#agent",
          "name": "SIYARA VISTA KALYAN WEST - Authorized Partner",
          "image": "https://siyaravistakalyan.site/images/favicon.webp",
          "url": "https://siyaravistakalyan.site/",
          "telephone": "+918237498373",
          "priceRange": "₹80 Lakhs - ₹1.20 Cr+",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Siyara Vista, Prem Auto Junction",
            "addressLocality": "Kalyan West",
            "addressRegion": "Maharashtra",
            "postalCode": "421301",
            "addressCountry": "IN"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 19.2291,
            "longitude": 73.1287
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday",
              "Saturday",
              "Sunday"
            ],
            "opens": "09:00",
            "closes": "19:00"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "bestRating": "5",
            "ratingCount": "312",
            "reviewCount": "184"
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://siyaravistakalyan.site/#website",
          "url": "https://siyaravistakalyan.site/",
          "name": "SIYARA VISTA KALYAN WEST",
          "description": "Premium 2 & 3 BHK Residential Tower by Shakti Group in Kalyan West",
          "publisher": {
            "@id": "https://siyaravistakalyan.site/#agent"
          }
        },
        {
          "@type": "SiteNavigationElement",
          "@id": "https://siyaravistakalyan.site/#navigation",
          "hasPart": [
            {
              "@type": "WebPage",
              "name": "Overview",
              "url": "https://siyaravistakalyan.site/#overview"
            },
            {
              "@type": "WebPage",
              "name": "Amenities",
              "url": "https://siyaravistakalyan.site/#amenities"
            },
            {
              "@type": "WebPage",
              "name": "Connectivity",
              "url": "https://siyaravistakalyan.site/#connectivity"
            },
            {
              "@type": "WebPage",
              "name": "Floor Plans",
              "url": "https://siyaravistakalyan.site/#plans"
            },
            {
              "@type": "WebPage",
              "name": "Gallery",
              "url": "https://siyaravistakalyan.site/#gallery"
            },
            {
              "@type": "WebPage",
              "name": "Contact Us",
              "url": "https://siyaravistakalyan.site/#contact"
            },
            {
              "@type": "WebPage",
              "name": "Blog",
              "url": "https://siyaravistakalyan.site/blog/index.html"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://siyaravistakalyan.site/#faq-schema",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Where is SIYARA VISTA KALYAN WEST located?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SIYARA VISTA KALYAN WEST is strategically located at the active Prem Auto Junction in Kalyan West, Maharashtra, ensuring premium transit connectivity to Thane and Mumbai."
              }
            },
            {
              "@type": "Question",
              "name": "What is the configuration and starting price of apartments at SIYARA VISTA KALYAN WEST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The project features spacious 2 BHK flats ranging from 623 to 760 sq.ft. starting at ₹ 80 Lakhs*+, and premium 3 BHK flats of 1000+ sq.ft. starting at ₹ 1.20 Cr*+."
              }
            },
            {
              "@type": "Question",
              "name": "Who is the builder behind SIYARA VISTA KALYAN WEST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "The high-rise residential tower is built and developed by the highly acclaimed Shakti Group, known for its transparency and structural quality guidelines."
              }
            },
            {
              "@type": "Question",
              "name": "Is the SIYARA VISTA KALYAN WEST project MahaRERA approved?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, the project is completely MahaRERA approved and registered, ensuring transparency, secure property ownership, and adherence to construction deadlines."
              }
            },
            {
              "@type": "Question",
              "name": "What are the transit options near SIYARA VISTA KALYAN WEST?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "It offers premium connectivity: it is in immediate proximity to Kalyan Railway Station, Shahad Station, and is within easy walking distance of the upcoming Metro Line 5 station corridor."
              }
            }
          ]
        }
      ]
    }
    </script>

    <style>
        /* CSS Variables */
        :root {
            --primary-green: #a88c39;
            --light-green: #eef0e5;
            --mid-green: #a88c39;
            --tan-bg: #eef0e5;
            --white: #ffffff;
            --dark-text: #000000;
            --gray-text: #000000;
            --footer-bg: #a88c39;
            --accent-gold: #a88c39;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html,
        body {
            overflow-x: hidden;
            width: 100%;
            position: relative;
            box-sizing: border-box;
        }

        body {
            color: var(--dark-text);
            line-height: 1.6;
            background-color: var(--white);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Utility */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-padding {
            padding: 60px 0;
        }

        .text-center {
            text-align: center;
        }

        .section-title {
            color: var(--primary-green);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            font-size: 1.8rem;
        }

        .section-subtitle {
            font-size: 1rem;
            color: var(--gray-text);
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-green);
            color: var(--white);
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 0.85rem;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 20px;
        }

        .btn:hover {
            background-color: var(--mid-green);
        }

        /* Header */
        header {
            background-color: var(--primary-green);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid var(--accent-gold);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 95%;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo-img {
            height: 45px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .nav-links a {
            color: var(--white);
            text-decoration: none;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        .nav-actions .btn {
            margin-top: 0;
            padding: 10px 20px;
            background-color: transparent;
            border: 1px solid var(--white);
        }

        .nav-actions .btn.solid {
            background-color: var(--tan-bg);
            color: var(--primary-green);
            border: none;
        }

        .hamburger {
            display: none;
            font-size: 1.8rem;
            cursor: pointer;
            background: none;
            border: 1px solid white;
            padding: 2px 10px;
            color: white;
            border-radius: 4px;
        }

        /* Hero */
        .hero {
            width: 100%;
            height: auto;
        }

        /* Overview & Pricing */
        .design-divider {
            color: var(--primary-green);
            font-size: 2rem;
            margin-bottom: -5px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        th {
            background-color: var(--primary-green);
            color: var(--white);
            padding: 15px;
            text-transform: uppercase;
            border-right: 1px solid #8d752c;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            background-color: #fdf5e6;
            border-right: 1px solid #e0d0b8;
            font-weight: 500;
        }

        #overview td {
            cursor: pointer;
            transition: 0.3s;
        }

        #overview td:hover {
            background-color: var(--light-green);
            color: var(--primary-green);
        }

        /* Sections Backgrounds & Layouts */
        .story-section {
            background-color: var(--light-green);
        }

        .peaceful-section {
            background-color: var(--white);
            color: var(--dark-text);
        }

        .peaceful-section .section-title {
            color: var(--primary-green);
        }

        .flex-split {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .flex-split>* {
            flex: 1;
        }

        #plans img {
            cursor: pointer;
            transition: 0.3s;
        }

        #plans img:hover {
            opacity: 0.8;
            transform: scale(1.02);
        }

        .amenities-cards {
            background-color: var(--tan-bg);
        }

        .grid-2x2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .card {
            background: var(--white);
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            margin-bottom: 15px;
            border-radius: 4px;
        }

        /* Connectivity Section */
        .connectivity-section {
            background-color: var(--light-green);
        }

        .conn-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            text-align: left;
            margin-top: 30px;
        }

        .conn-col h4 {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            color: var(--primary-green);
        }

        .conn-col ul {
            list-style: none;
            font-size: 0.9rem;
        }

        .conn-col li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 15px;
        }

        .conn-col li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: var(--primary-green);
            font-size: 1.2rem;
            line-height: 1;
        }

        /* Comfort Section */
        .comfort-section {
            background-color: var(--light-green);
            color: var(--dark-text);
        }

        .comfort-section .section-title {
            color: var(--primary-green);
        }

        .comfort-section .section-subtitle {
            color: var(--dark-text);
        }

        .comfort-img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 30px;
            border: 4px solid var(--white);
        }

        .comfort-list-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            text-align: left;
            font-size: 0.95rem;
        }

        .comfort-list-grid li {
            list-style: none;
            padding-left: 20px;
            position: relative;
        }

        .comfort-list-grid li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary-green);
        }

        /* Floor Plans & Gallery */
        .floor-plan-section {
            background-color: var(--tan-bg);
        }

        .gallery-section {
            background-color: var(--light-green);
        }

        .img-row {
            display: flex;
            gap: 30px;
            justify-content: center;
        }

        .img-row img {
            flex: 1;
            border: 8px solid var(--white);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Why Choose */
        .why-choose {
            background-color: var(--white);
            color: var(--dark-text);
        }

        .why-choose .section-title {
            color: var(--primary-green);
        }

        .why-choose p {
            font-size: 0.95rem;
            margin-bottom: 20px;
            text-align: justify;
            line-height: 1.8;
            color: var(--dark-text);
        }

        /* Contact & Map */
        .contact-section {
            display: flex;
            background: #f0f0f0;
        }

        .map-container {
            flex: 1.5;
            min-height: 600px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .form-container {
            flex: 1;
            padding: 50px 40px;
            background-color: #e0e0e0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        /* Footer */
        footer {
            background-color: var(--footer-bg);
            color: var(--white);
            padding: 40px 0 20px;
            font-size: 0.85rem;
            text-align: center;
        }

        /* =========================================
           ON-LOAD POPUP
           ========================================= */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .popup-overlay.show {
            display: flex;
        }

        .popup-box {
            background: var(--white);
            width: 90%;
            max-width: 400px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .popup-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 28px;
            color: var(--dark-text);
            cursor: pointer;
            font-weight: bold;
        }

        .popup-header {
            background: var(--tan-bg);
            color: var(--primary-green);
            padding: 25px 20px;
            text-align: center;
        }

        .popup-header h3 {
            margin: 0;
            font-size: 1.5rem;
            text-transform: uppercase;
        }

        .popup-body {
            padding: 30px 20px;
            text-align: center;
        }

        .popup-body p {
            margin-bottom: 20px;
            font-size: 0.95rem;
            color: var(--gray-text);
        }

        .popup-body input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }

        .popup-btn {
            width: 100%;
            background: var(--primary-green);
            color: white;
            padding: 15px;
            border: none;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
            cursor: pointer;
            border-radius: 4px;
        }

        /* =========================================
           MOBILE RESPONSIVENESS & BOTTOM BAR
           ========================================= */
        .mobile-bottom-bar {
            display: none;
        }

        @media (max-width: 992px) {
            .nav-links {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--primary-green);
                padding: 20px 0;
                text-align: center;
                border-top: 1px solid #1a7649;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin-bottom: 15px;
            }

            .hamburger {
                display: block;
            }

            .nav-actions {
                display: none;
            }

            .flex-split,
            .contact-section {
                flex-direction: column;
            }

            .map-container {
                min-height: 400px;
                width: 100%;
            }

            .comfort-list-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 40px 0;
            }

            .section-title {
                font-size: 1.5rem;
                line-height: 1.2;
                padding: 0 10px;
            }

            .section-subtitle {
                font-size: 0.95rem;
                margin-bottom: 25px;
                padding: 0 15px;
            }

            .grid-2x2,
            .img-row {
                flex-direction: column;
                display: flex;
                gap: 15px;
            }

            .conn-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .comfort-list-grid {
                grid-template-columns: 1fr;
            }

            .table-wrapper {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin-top: 20px;
            }

            table {
                min-width: 500px;
                font-size: 0.85rem;
            }

            th,
            td {
                padding: 10px 5px;
            }

            .nav-container {
                width: 95%;
                max-width: 100vw;
            }

            .logo-img {
                height: 35px;
                max-width: 150px;
            }

            .popup-box {
                width: 92%;
                max-width: 380px;
                margin: 0 auto;
            }

            .popup-header {
                padding: 20px 15px;
            }

            .popup-header h3 {
                font-size: 1.3rem;
            }

            .popup-body {
                padding: 20px 15px;
            }

            .popup-close {
                top: 5px;
                right: 10px;
                font-size: 24px;
            }

            body {
                padding-bottom: 90px;
            }

            /* Prevent footer hide */

            /* SHOW FIXED BOTTOM BAR */
            .mobile-bottom-bar {
                display: block;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                z-index: 9999;
                box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
            }

            .appointment-banner {
                background-color: #3b3b3b;
                color: #ffffff;
                text-align: center;
                padding: 8px;
                font-size: 0.85rem;
                font-weight: 600;
            }

            .action-buttons {
                display: flex;
                width: 100%;
            }

            .action-buttons a {
                flex: 1;
                text-decoration: none;
                color: #ffffff;
                text-align: center;
                padding: 14px 2px;
                font-size: 0.85rem;
                font-weight: bold;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
                text-transform: uppercase;
            }

            .action-buttons svg {
                width: 18px;
                height: 18px;
                fill: currentColor;
            }

            .btn-call {
                background-color: #a88c39;
            }

            .btn-enquire {
                background-color: #333333;
            }

            .btn-whatsapp {
                background-color: #25d366;
                /* Standard WhatsApp Green */
            }

            /* Muted Teal */
        }

        @media (max-width: 480px) {
            .conn-grid {
                grid-template-columns: 1fr;
            }

            .action-buttons a {
                font-size: 0.75rem;
                padding: 12px 2px;
            }
        }

        /* =========================================
           LIGHTBOX STYLES
           ========================================= */
        .lightbox-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 100000;
            display: none;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .lightbox-overlay.show {
            display: flex;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 80%;
            border: 4px solid white;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            object-fit: contain;
        }

        .lb-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 45px;
            cursor: pointer;
            font-weight: bold;
            z-index: 100001;
        }

        .lb-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 0 40px;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .lb-btn {
            color: white;
            font-size: 60px;
            cursor: pointer;
            pointer-events: auto;
            background: none;
            border: none;
            transition: 0.3s;
            padding: 15px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }

        .lb-btn:hover {
            color: var(--tan-bg);
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .lb-btn {
                font-size: 40px;
                padding: 10px;
            }

            .lb-nav {
                padding: 0 10px;
            }
        }
    </style>

    <!-- JS Logic -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // 1. Mobile Hamburger
            document.getElementById('hamburger').addEventListener('click', () => {
                document.getElementById('nav-links').classList.toggle('active');
            });

            // 2. Popup Logic
            const popup = document.getElementById('auto-popup');
            const closeBtn = document.getElementById('close-popup');

            // Show popup after 4 seconds
            setTimeout(() => { popup.classList.add('show'); }, 4000);

            closeBtn.addEventListener('click', () => { popup.classList.remove('show'); });
            popup.addEventListener('click', (e) => { if (e.target === popup) popup.classList.remove('show'); });

            // Trigger popup on all CTA buttons
            const triggerBtns = document.querySelectorAll('.btn, .btn-enquire, #overview td, #plans img');
            triggerBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    if (btn.closest('#auto-popup')) return;
                    if (btn.type === 'submit' && btn.closest('form')) return;

                    e.preventDefault();
                    popup.classList.add('show');
                });
            });

            // --- Lightbox Logic ---
            const lightbox = document.getElementById('lightbox');
            const lbImg = document.getElementById('lb-img');
            const closeLb = document.getElementById('close-lb');
            const prevLb = document.getElementById('prev-lb');
            const nextLb = document.getElementById('next-lb');

            let galleryImages = [];
            let currentIndex = 0;

            const updateGalleryImages = () => {
                const galleryImgs = document.querySelectorAll('#gallery img, #plans img');
                galleryImages = Array.from(galleryImgs).map(img => img.src).filter(src => src && src.trim() !== "");
            };

            const openLightbox = (index) => {
                currentIndex = index;
                lbImg.src = galleryImages[currentIndex];
                lightbox.classList.add('show');
                document.body.style.overflow = 'hidden';
            };

            const navigate = (step) => {
                currentIndex = (currentIndex + step + galleryImages.length) % galleryImages.length;
                lbImg.src = galleryImages[currentIndex];
            };

            document.addEventListener('click', (e) => {
                const clickedImg = e.target.closest('#gallery img, #plans img');
                if (clickedImg) {
                    updateGalleryImages();
                    const src = clickedImg.src;
                    const index = galleryImages.indexOf(src);
                    if (index !== -1) openLightbox(index);
                }
            });

            closeLb.onclick = () => {
                lightbox.classList.remove('show');
                document.body.style.overflow = '';
            };

            lightbox.onclick = (e) => { if (e.target === lightbox) closeLb.onclick(); };
            prevLb.onclick = (e) => { e.stopPropagation(); navigate(-1); };
            nextLb.onclick = (e) => { e.stopPropagation(); navigate(1); };

            document.addEventListener('keydown', (e) => {
                if (!lightbox.classList.contains('show')) return;
                if (e.key === 'Escape') closeLb.onclick();
                if (e.key === 'ArrowLeft') navigate(-1);
                if (e.key === 'ArrowRight') navigate(1);
            });

            // 3. AJAX Form Submission → Google Sheets
            const GOOGLE_SCRIPT_URL = "https://script.google.com/macros/s/AKfycbybpYmnerQ-BmqdWC0LUF40P09eGxaCgGADhPIM-FquIO4GTR0-oS42DCV6JP5ll_Gz/exec";
            const PROJECT_NAME = "Siyara Vista Kalyan - Shakti Group";

            const handleFormSubmit = (e) => {
                e.preventDefault();
                const form = e.target;
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalBtnText = submitBtn.innerText;

                submitBtn.disabled = true;
                submitBtn.innerText = "Sending...";

                const params = new URLSearchParams({
                    project_name: PROJECT_NAME,
                    name: form.querySelector('[name="name"]') ? form.querySelector('[name="name"]').value : "",
                    phone: form.querySelector('[name="phone"]') ? form.querySelector('[name="phone"]').value : "",
                    email: form.querySelector('[name="email"]') ? form.querySelector('[name="email"]').value : "",
                    config: form.querySelector('[name="config"]') ? form.querySelector('[name="config"]').value : "",
                    source: window.location.hostname
                });

                // 1. Send to Google Sheets (background)
                fetch(GOOGLE_SCRIPT_URL + "?" + params.toString()).catch(err => console.error("Google Sheets Error:", err));

                // 2. Send to contact.php for email forwarding & gotya.txt local log, then redirect to thank-you.html
                fetch("contact.php", {
                    method: "POST",
                    body: new FormData(form)
                })
                .then(response => response.json())
                .then(data => {
                    window.location.href = "thank-you.html";
                })
                .catch(error => {
                    console.error('Error:', error);
                    window.location.href = "thank-you.html";
                });
            };

            const forms = document.querySelectorAll('form');
            forms.forEach(form => {
                form.addEventListener('submit', handleFormSubmit);
            });
        });
    </script>
</head>

<body>

    <!-- Navigation -->
    <header>
        <div class="nav-container">
            <a href="/"><img id="logo" src="<?=get_val('site_logo', 'images/site_logo_1776842346.webp')?>" alt="SIYARA VISTA KALYAN WEST Logo"
                    class="logo-img"></a>
            <nav>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#overview">Overview</a></li>
                    <li><a href="#amenities">Amenities</a></li>
                    <li><a href="#connectivity">Connectivity</a></li>
                    <li><a href="#plans">Floor Plans</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="blog/index.html">Blog</a></li>
                </ul>
            </nav>
            <div class="nav-actions">
                <button class="btn">Brochure</button>
                <button class="btn solid">Enquire Now</button>
            </div>
            <button class="hamburger" id="hamburger">☰</button>
        </div>
    </header>

    <main>
        <!-- Hero Banner -->
        <section id="home">
            <h1
                style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0;">
                SIYARA VISTA KALYAN WEST</h1>
            <img id="hero" src="<?=get_val('hero_banner', 'images/hero_banner_1776842594.webp')?>" alt="SIYARA VISTA KALYAN WEST Hero Banner" class="hero">
        </section>

        <!-- Overview & Pricing -->
        <section id="overview" class="section-padding text-center">
            <div class="container">
                <div class="design-divider">⸎</div>
                <h2 class="section-title"><?=get_val('ov_title', 'SIYARA VISTA KALYAN WEST')?></h2>
                <div class="star-rating" style="color: #a88c39; font-size: 1.25rem; margin-top: -10px; margin-bottom: 20px;">
                    ★★★★★ <span style="color: #000000; font-weight: bold;">4.9/5</span> <span style="color: #666666; font-size: 0.95rem;">(312 Google Reviews)</span>
                </div>
                <p class="section-subtitle"><?=get_val('ov_desc', 'Welcome to SIYARA VISTA KALYAN WEST, a premium residential landmark crafted by Shakti Group to redefine urban sophistication. Nestled at the strategic Prem Auto Junction in Kalyan West, this architectural marvel offers meticulously designed 2 BHK and 3 BHK flats that combine spacious layouts with maximum natural light and cross-ventilation. Designed for modern families seeking a balanced lifestyle, SIYARA VISTA KALYAN WEST boasts a G+31 high-rise structure, presenting residents with breathtaking panoramic views and a serene living experience. Here, you escape the city\'s chaotic pace without losing touch with its pulse. Experience an unparalleled standard of quality, secure investments, and world-class luxury at the most promising address in Kalyan West.')?></p>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Configuration</th>
                                <th>Carpet Area</th>
                                <th>Starting Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Spacious 2 BHK</td>
                                <td><?=get_val('p_2bhk_area', '623 – 760 sq.ft.')?></td>
                                <td style="font-weight:bold;"><?=get_val('p_2bhk_price', '₹ 80 Lakhs*+')?></td>
                            </tr>
                            <tr>
                                <td>Premium 3 BHK</td>
                                <td><?=get_val('p_3bhk_area', '1000+ sq.ft.')?></td>
                                <td style="font-weight:bold;"><?=get_val('p_3bhk_price', '₹ 1.20 Cr*+')?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn">Get Best Price Advantage</button>
            </div>
        </section>

        <!-- Project Story -->
        <section class="story-section section-padding text-center">
            <div class="container">
                <h2 class="section-title"><?=get_val('story_title', 'THE VISION BEHIND SIYARA VISTA KALYAN WEST')?></h2>
                <p class="section-subtitle"><?=get_val('story_desc', 'Every great landmark begins with a vision. Shakti Group envisioned SIYARA VISTA KALYAN WEST as a modern sanctuary that stands tall at 31 storeys, rewriting the skyline of Kalyan West. The design prioritizes premium structural integrity, eco-friendly construction standards, and smart space planning. Our goal is to provide a home where luxury meets daily convenience, offering families an aesthetic retreat where they can write their own stories of success and comfort. From foundation to finishing, every detail reflects a dedication to excellence and trust.')?></p>
                <img id="story_img" src="<?=get_val('story_img', 'images/story_img_1776842594.webp')?>" alt="SIYARA VISTA KALYAN WEST Project Story"
                    style="max-width:700px; margin:0 auto; border: 8px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                <br>
                <button class="btn">Watch Project Overview</button>
            </div>
        </section>

        <!-- Peaceful Aura -->
        <section class="peaceful-section section-padding">
            <div class="container flex-split">
                <div><img id="peace_img" src="<?=get_val('peace_img', 'images/peace_img_1776842594.webp')?>"
                        alt="Peaceful Living at SIYARA VISTA KALYAN WEST"
                        style="border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.3);"></div>
                <article>
                    <h2 class="section-title" style="text-align: left;"><?=get_val('peace_title', 'EMBRACE A TRANQUIL LIFESTYLE AT SIYARA VISTA KALYAN WEST')?></h2>
                    <p style="margin-bottom: 20px; font-size: 1.05rem; opacity: 0.9;"><?=get_val('peace_desc', 'Wake up to inspiring mornings filled with clean air and warm sunlight at SIYARA VISTA KALYAN WEST. Our residences are engineered to optimize natural ventilation and daylighting, creating a healthy indoor microclimate that keeps you refreshed. The thoughtful layout minimizes ambient noise, allowing you to enjoy peaceful family moments in a tranquil atmosphere. Located away from the major noise corridors yet situated perfectly at Kalyan West\'s junction, these apartments offer the ultimate sanctuary where nature\'s serenity blends seamlessly with modern structural elegance.')?></p>
                    <button class="btn" style="background-color: var(--tan-bg); color: var(--primary-green);">Download
                        Project Brochure</button>
                </article>
            </div>
        </section>

        <!-- Amenities Grid -->
        <section id="amenities" class="amenities-cards section-padding text-center">
            <div class="container">
                <h2 class="section-title" style="color: var(--primary-green);"><?=get_val('am_title', 'EXQUISITE LIFESTYLE AMENITIES AT SIYARA VISTA KALYAN WEST')?></h2>
                <p class="section-subtitle" style="color: var(--dark-text);"><?=get_val('am_desc', 'We believe a modern home should extend far beyond four walls. At SIYARA VISTA KALYAN WEST, we have curated a selection of world-class amenities to enrich your body, mind, and soul. Whether you want to energize your mornings at our state-of-the-art gymnasium, take a refreshing dip in the infinity swimming pool, or watch your children play safely in the dedicated kids\' play zone, there is something for everyone. With a magnificent entrance lobby that sets a tone of grandeur and round-the-clock security systems, we ensure you live in comfort and complete peace of mind.')?></p>

                <div class="grid-2x2">
                    <div class="card"><img id="am1_img" src="<?=get_val('am1_img', 'images/am1_img_1776842717.webp')?>"
                            alt="Grand Entrance Lobby at SIYARA VISTA KALYAN WEST">
                        <h3 style="color:var(--primary-green);">Grand Entrance Lobby</h3>
                    </div>
                    <div class="card"><img id="am2_img" src="<?=get_val('am2_img', 'images/am2_img_1776842717.webp')?>"
                            alt="Children's Play Area at SIYARA VISTA KALYAN WEST">
                        <h3 style="color:var(--primary-green);">Children's Play Area</h3>
                    </div>
                    <div class="card"><img id="am3_img" src="<?=get_val('am3_img', 'images/am3_img_1776842717.webp')?>"
                            alt="Modern Gymnasium at SIYARA VISTA KALYAN WEST">
                        <h3 style="color:var(--primary-green);">Modern Gymnasium</h3>
                    </div>
                    <div class="card"><img id="am4_img" src="<?=get_val('am4_img', 'images/am4_img_1776842717.webp')?>"
                            alt="Infinity Swimming Pool at SIYARA VISTA KALYAN WEST">
                        <h3 style="color:var(--primary-green);">Infinity Swimming Pool</h3>
                    </div>
                </div>
                <button class="btn">Explore All Amenities</button>
            </div>
        </section>

        <!-- Connectivity Section -->
        <section id="connectivity" class="connectivity-section section-padding text-center">
            <div class="container">
                <div class="design-divider">⸎</div>
                <h2 class="section-title"><?=get_val('conn_title', 'STRATEGIC CONNECTIVITY AT SIYARA VISTA KALYAN WEST')?></h2>
                <p class="section-subtitle"><?=get_val('conn_desc', 'Location is the ultimate luxury. Situated at the active Prem Auto Junction, SIYARA VISTA KALYAN WEST connects you effortlessly to all major hubs across Thane, Mumbai, and beyond. With Kalyan Railway Station and the upcoming metro corridor just minutes away, commuting is a breeze. Prominent educational institutions, multispecialty hospitals, and modern shopping complexes like Metro Junction Mall are in immediate proximity, placing all your lifestyle needs right at your doorstep.')?></p>

                <div class="conn-grid">
                    <div class="conn-col">
                        <h4>🏫 Education</h4>
                        <ul>
                            <li>Podar International</li>
                            <li>Cambrian Hall</li>
                            <li>Holy Cross School</li>
                            <li>BK Birla College</li>
                        </ul>
                    </div>
                    <div class="conn-col">
                        <h4>🏥 Healthcare</h4>
                        <ul>
                            <li>Fortis Hospital</li>
                            <li>Aayush Hospital</li>
                            <li>Meera Hospital</li>
                            <li>Holy Cross Hospital</li>
                        </ul>
                    </div>
                    <div class="conn-col">
                        <h4>🛒 Shopping / Malls</h4>
                        <ul>
                            <li>Metro Junction Mall</li>
                            <li>Sarvoday Mall</li>
                            <li>D Mart Kalyan</li>
                            <li>Big Bazaar</li>
                        </ul>
                    </div>
                    <div class="conn-col">
                        <h4>🚆 Transport</h4>
                        <ul>
                            <li>Kalyan Station</li>
                            <li>Upcoming Metro Line</li>
                            <li>Prem Auto Junction</li>
                            <li>Shahad Station</li>
                        </ul>
                    </div>
                </div>
                <button class="btn">Download Location Map</button>
            </div>
        </section>

        <!-- Comfort Courtyard -->
        <section class="comfort-section section-padding text-center">
            <div class="container">
                <h2 class="section-title"><?=get_val('comf_title', 'MODERN COMFORT & UTILITIES AT SIYARA VISTA KALYAN WEST')?></h2>
                <p class="section-subtitle"><?=get_val('comf_desc', 'Experience a thoughtfully engineered lifestyle designed to elevate your daily routine. From active recreation spaces to essential utility features, SIYARA VISTA KALYAN WEST brings a harmonious collection of premium services together under one roof, making life smoother and more enjoyable for every family member.')?></p>

                <img id="comf_img" src="<?=get_val('comf_img', 'images/comf_img_1776842830.webp')?>" alt="Comfort Courtyard at SIYARA VISTA KALYAN WEST"
                    class="comfort-img">

                <ul class="comfort-list-grid">
                    <li>Swimming Pool</li>
                    <li>Grand Entrance Lobby</li>
                    <li>Podium Garden</li>
                    <li>Modern Gymnasium</li>
                    <li>Children’s Play Area</li>
                    <li>Indoor Games Zone</li>
                    <li>Jogging / Walking Track</li>
                    <li>Multipurpose Hall</li>
                    <li>24x7 Security with CCTV</li>
                </ul>
                <button class="btn" style="background-color: var(--tan-bg); color: var(--primary-green);">Book Site
                    Visit Now</button>
            </div>
        </section>

        <!-- Floor Plans -->
        <section id="plans" class="floor-plan-section section-padding text-center">
            <div class="container">
                <div class="design-divider">❖</div>
                <h2 class="section-title"><?=get_val('fp_title', 'SPACIOUS FLOOR PLANS OF SIYARA VISTA KALYAN WEST')?></h2>
                <p class="section-subtitle" style="color: var(--dark-text);"><?=get_val('fp_desc', 'Smart spacing is the hallmark of our layouts. At SIYARA VISTA KALYAN WEST, every floor plan is crafted to maximize usable carpet area, minimize passage waste, and provide ample room for privacy. Explore our carefully drafted 2 BHK and 3 BHK blueprints that represent the peak of modern residential architecture.')?></p>

                <div class="img-row">
                    <img id="fp1_img" src="<?=get_val('fp1_img', 'images/fp1_img_1776490386.webp')?>" alt="2 BHK Floor Plan at SIYARA VISTA KALYAN WEST">
                    <img id="fp2_img" src="<?=get_val('fp2_img', 'images/fp2_img_1776490386.webp')?>" alt="3 BHK Floor Plan at SIYARA VISTA KALYAN WEST">
                </div>
                <button class="btn">Download Floor Plan PDF</button>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery" class="gallery-section section-padding text-center">
            <div class="container">
                <h2 class="section-title"><?=get_val('gal_title', 'VISUAL PREVIEWS OF SIYARA VISTA KALYAN WEST')?></h2>
                <p class="section-subtitle"><?=get_val('gal_desc', 'Get an exclusive look at the premium aesthetics and superior finishes designed for your future home. Experience the high-rise grandeur and premium materials of SIYARA VISTA KALYAN WEST through our curated visual gallery.')?></p>

                <div class="img-row">
                    <img id="gal1_img" src="<?=get_val('gal1_img', 'images/gal1_img_1776842830.webp')?>" alt="SIYARA VISTA KALYAN WEST Gallery Image 1">
                    <img id="gal2_img" src="<?=get_val('gal2_img', 'images/gal2_img_1776842830.webp" alt="SIYARA VISTA KALYAN WEST Gallery Image 2')?>">
                </div>
                <button class="btn">View Complete Gallery</button>
            </div>
        </section>

        <!-- Why Choose Section (Wikipedia-Style Semantic Layout) -->
        <section class="why-choose section-padding">
            <div class="container">
                <h2 class="section-title text-center"><?=get_val('why_title', 'WHY SIYARA VISTA KALYAN WEST BY SHAKTI GROUP IS SO SPECIAL?')?></h2>
                <div id="why_desc">
                    <?=get_val('why_desc', '<p><strong>SIYARA VISTA KALYAN WEST</strong> represents a landmark residential development in the heart of Kalyan West, developed by the highly acclaimed <strong>Shakti Group</strong>. Strategically situated at the premium Prem Auto Junction, this G+31 storey high-rise tower is designed to redefine luxury living and offer an unmatched architectural marvel to the skyline of Kalyan West. Below is a detailed overview of the core facets that make this project an exceptional home and investment option.</p>
                    
                    <h3>1. Prime Location & Connectivity Advantages</h3>
                    <p>The success of any premium real estate project relies on its location. <strong>SIYARA VISTA KALYAN WEST</strong> is positioned at the critical Prem Auto Junction, ensuring rapid connectivity to major transport corridors:</p>
                    <ul>
                        <li><strong>Railway Access:</strong> Conveniently located close to Kalyan Railway Station and Shahad Station, facilitating smooth daily travel to Mumbai CSMT and Thane.</li>
                        <li><strong>Proposed Metro Transit:</strong> The upcoming Metro Line 5 will place a major station within walking distance of the residential site, promising massive capital appreciation.</li>
                        <li><strong>Road Networks:</strong> Direct connectivity to major arterials links Kalyan West seamlessly with Bhiwandi, Thane, and Navi Mumbai.</li>
                    </ul>

                    <h3>2. Premium Modern Infrastructure</h3>
                    <p>Designed with meticulous attention to spatial design and engineering, the G+31 high-rise structure optimizes air flow and daylighting across all levels. Key structural highlights include:</p>
                    <ul>
                        <li><strong>Ventilation & Light:</strong> Thoughtfully placed large windows ensure that each apartment benefits from natural cross-ventilation and receives maximum daylight throughout the morning and afternoon.</li>
                        <li><strong>Configuration Layouts:</strong> The spacious 2 BHK flats (623–760 sq.ft.) and premium 3 BHK flats (1000+ sq.ft.) are crafted to eliminate unused passage spaces, maximizing the actual carpet area for daily activities.</li>
                        <li><strong>Lobby & Elevators:</strong> A grand entrance lobby with high-speed elevators creates a welcoming experience for residents and guests alike.</li>
                    </ul>

                    <h3>3. Comprehensive Social Infrastructure</h3>
                    <p>Living at <strong>SIYARA VISTA KALYAN WEST</strong> places you in a fully developed ecosystem with top-tier healthcare, retail, and education options nearby:</p>
                    <ul>
                        <li><strong>Education hubs:</strong> Renowned institutes like Podar International School, Holy Cross School, and BK Birla College are within easy reach.</li>
                        <li><strong>Healthcare Centres:</strong> Prominent multispecialty clinics including Fortis Hospital and Meera Hospital provide round-the-clock medical care.</li>
                        <li><strong>Entertainment & Retail:</strong> Premier retail centers like Metro Junction Mall and D-Mart Kalyan ensure that shopping and leisure are always close by.</li>
                    </ul>

                    <h3>4. Shakti Group Trust & MahaRERA Compliance</h3>
                    <p>Shakti Group is known for its commitment to structural quality, project transparency, and timely delivery. <strong>SIYARA VISTA KALYAN WEST</strong> is registered under MahaRERA, guaranteeing compliance with all regulatory guidelines and securing the investments of prospective homebuyers. This high-rise tower is constructed using advanced engineering techniques and premium materials to ensure safety and long-term value.</p>')?>
                </div>
                <div class="text-center">
                    <button class="btn" style="background-color: var(--tan-bg); color: var(--primary-green);">Request Call Back Now</button>
                </div>
            </div>
        </section>

        <!-- FAQ Section (AEO & GEO Optimization) -->
        <section id="faq" class="section-padding text-center" style="background-color: #eef0e5; border-top: 1px solid #eef0e5;">
            <div class="container" style="max-width: 800px; margin: 0 auto; text-align: left;">
                <h2 class="section-title text-center" style="color: var(--primary-green); margin-bottom: 30px;">SIYARA VISTA KALYAN WEST - FREQUENTLY ASKED QUESTIONS</h2>
                
                <div class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #ffffff; border-radius: 8px; border: 1px solid #eef0e5;">
                    <h3 style="color: #a88c39; margin-top: 0; font-size: 1.2rem;">Q1: Where is SIYARA VISTA KALYAN WEST located?</h3>
                    <p style="margin-bottom: 0; color: #000000;"><strong>A:</strong> SIYARA VISTA KALYAN WEST is strategically located at the active <strong>Prem Auto Junction</strong> in Kalyan West, Maharashtra, ensuring premium transit connectivity to Thane and Mumbai.</p>
                </div>
                
                <div class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #ffffff; border-radius: 8px; border: 1px solid #eef0e5;">
                    <h3 style="color: #a88c39; margin-top: 0; font-size: 1.2rem;">Q2: What is the configuration and starting price of apartments at SIYARA VISTA KALYAN WEST?</h3>
                    <p style="margin-bottom: 0; color: #000000;"><strong>A:</strong> The project features spacious <strong>2 BHK flats</strong> ranging from <strong>623 to 760 sq.ft.</strong> starting at <strong>₹ 80 Lakhs*+</strong>, and premium <strong>3 BHK flats</strong> of <strong>1000+ sq.ft.</strong> starting at <strong>₹ 1.20 Cr*+</strong>.</p>
                </div>
                
                <div class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #ffffff; border-radius: 8px; border: 1px solid #eef0e5;">
                    <h3 style="color: #a88c39; margin-top: 0; font-size: 1.2rem;">Q3: Who is the builder behind SIYARA VISTA KALYAN WEST?</h3>
                    <p style="margin-bottom: 0; color: #000000;"><strong>A:</strong> The high-rise residential tower is built and developed by the highly acclaimed <strong>Shakti Group</strong>, known for its transparency and structural quality guidelines.</p>
                </div>
                
                <div class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #ffffff; border-radius: 8px; border: 1px solid #eef0e5;">
                    <h3 style="color: #a88c39; margin-top: 0; font-size: 1.2rem;">Q4: Is the SIYARA VISTA KALYAN WEST project MahaRERA approved?</h3>
                    <p style="margin-bottom: 0; color: #000000;"><strong>A:</strong> Yes, the project is completely MahaRERA approved and registered, ensuring transparency, secure property ownership, and adherence to construction deadlines.</p>
                </div>
                
                <div class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #ffffff; border-radius: 8px; border: 1px solid #eef0e5;">
                    <h3 style="color: #a88c39; margin-top: 0; font-size: 1.2rem;">Q5: What are the transit options near SIYARA VISTA KALYAN WEST?</h3>
                    <p style="margin-bottom: 0; color: #000000;"><strong>A:</strong> It offers premium connectivity: it is in immediate proximity to <strong>Kalyan Railway Station</strong>, Shahad Station, and is within easy walking distance of the upcoming <strong>Metro Line 5</strong> station corridor.</p>
                </div>
            </div>
        </section>

        <!-- Contact & Map -->
        <section id="contact" class="contact-section">
            <div class="map-container">
                <!-- Using static iframe for demo map -->
                <iframe id="map-iframe"
                    src="<?=get_val('google_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.866579696954!2d73.12652241490215!3d19.2290931870041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7940f55555555%3A0x5555555555555555!2sPrem%20Auto%20Junction%2C%20Kalyan%20West!5e0!3m2!1sen!2sin!4v1690000000000!5m2!1sen!2sin')?>"
                    loading="lazy"></iframe>
            </div>
            <div class="form-container">
                <h2 class="section-title" style="color: var(--primary-green);">ENQUIRE NOW</h2>
                <p style="margin-bottom: 20px; color: var(--gray-text);">Drop your details below and our property expert
                    for Siyara Vista Kalyan will contact you shortly.</p>
                <form action="contact.php" method="POST">
                    <input type="text" name="name" placeholder="Full Name *" required>
                    <input type="tel" name="phone" placeholder="Mobile Number *" required>
                    <input type="email" name="email" placeholder="Email Address">
                    <select name="config" required>
                        <option value="">Interested Configuration</option>
                        <option value="2bhk">2 BHK</option>
                        <option value="3bhk">3 BHK</option>
                    </select>
                    <button type="submit" class="btn" style="width: 100%; margin-top: 10px;">Submit Enquiry</button>
                </form>
            </div>
        </section>

        <!-- Recent Blogs Section -->
    <section id="recent-blogs" class="section-padding" style="background-color: #fff; border-top: 1px solid #eef0e5;">
        <div class="container">
            <h2 class="section-title text-center">SIYARA VISTA KALYAN INSIGHTS</h2>
            <p class="section-subtitle text-center">Stay updated with the latest trends, investment tips, and lifestyle guides for Kalyan West.</p>
            
            <div class="grid-2x2" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 40px;">
                <div class="card" style="text-align: left; padding: 25px; background: #fcfbf7; border: 1px solid #eef0e5; transition: 0.3s;">
                    <h4 style="color: #a88c39; margin-bottom: 10px;">SIYARA VISTA KALYAN WEST</h4>
                    <p style="font-size: 0.95rem; margin-bottom: 15px;">Discover why Siyara Vista Kalyan West is the ultimate residential choice for luxury living.</p>
                    <a href="blog/siyara-vista-kalyan-west.html" style="color: #a88c39; font-weight: 600; text-decoration: none;">Read More &rarr;</a>
                </div>
                <div class="card" style="text-align: left; padding: 25px; background: #fcfbf7; border: 1px solid #eef0e5; transition: 0.3s;">
                    <h4 style="color: #a88c39; margin-bottom: 10px;">Investment Analysis</h4>
                    <p style="font-size: 0.95rem; margin-bottom: 15px;">Top 5 reasons why Prem Auto Junction is the best investment spot right now.</p>
                    <a href="blog/investment-benefits-siyara-vista-kalyan.html" style="color: #a88c39; font-weight: 600; text-decoration: none;">Read More &rarr;</a>
                </div>
                <div class="card" style="text-align: left; padding: 25px; background: #fcfbf7; border: 1px solid #eef0e5; transition: 0.3s;">
                    <h4 style="color: #a88c39; margin-bottom: 10px;">Amenities Deep Dive</h4>
                    <p style="font-size: 0.95rem; margin-bottom: 15px;">A detailed look at the world-class lifestyle features at Siyara Vista.</p>
                    <a href="blog/amenities-guide-siyara-vista-kalyan.html" style="color: #a88c39; font-weight: 600; text-decoration: none;">Read More &rarr;</a>
                </div>
                <div class="card" style="text-align: left; padding: 25px; background: #fcfbf7; border: 1px solid #eef0e5; transition: 0.3s;">
                    <h4 style="color: #a88c39; margin-bottom: 10px;">Commuter's Guide</h4>
                    <p style="font-size: 0.95rem; margin-bottom: 15px;">Why Siyara Vista Kalyan is the perfect hub for Mumbai & Thane commuters.</p>
                    <a href="blog/connectivity-guide-siyara-vista-kalyan.html" style="color: #a88c39; font-weight: 600; text-decoration: none;">Read More &rarr;</a>
                </div>
            </div>
            <div class="text-center" style="margin-top: 40px;">
                <a href="blog/index.html" class="btn" style="padding: 12px 30px;">View All Articles</a>
            </div>
        </div>
    </section>

    <!-- Navigation Links Above Footer -->
        <section class="footer-nav section-padding"
            style="padding-top: 20px; padding-bottom: 20px; background-color: #f9f9f9; border-top: 1px solid #ddd;">
            <div class="container text-center">
                <style>
                    .footer-links {
                        list-style: none;
                        padding: 0;
                        display: flex;
                        justify-content: center;
                        flex-wrap: wrap;
                        gap: 15px;
                        margin-bottom: 0;
                    }

                    .footer-links li {
                        display: flex;
                        align-items: center;
                    }

                    .footer-links li:not(:last-child)::after {
                        content: "|";
                        margin-left: 15px;
                        color: #a88c39;
                        font-weight: bold;
                    }

                    .footer-links a {
                        text-decoration: none;
                        color: #333;
                        font-weight: 500;
                        transition: 0.3s;
                    }

                    .footer-links a:hover {
                        color: #a88c39;
                    }
                </style>
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog/index.html">Blogs</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                </ul>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <p>Disclaimer: The information provided on this website is for general informational purposes only.
                    Siyara Vista Kalyan is a project by Shakti Group and is registered under MahaRERA. The images,
                    plans, layouts, and specifications are tentative and subject to change by the developer without
                    prior notice. This website does not constitute an offer and/or contract of any type. Visual
                    representations are artist's impressions.</p>
                <p style="margin-top: 10px;">© 2026 Siyara Vista Kalyan Authorized Partner.</p>
            </div>
        </footer>

        <!-- =========================================
         ON PAGE LOAD POPUP FORM
         ========================================= -->
        <div id="auto-popup" class="popup-overlay">
            <div class="popup-box">
                <span class="popup-close" id="close-popup">&times;</span>
                <div class="popup-header">
                    <img id="popup-logo" src="<?=get_val('site_logo', 'images/site_logo_1776468513.webp')?>" alt="Siyara Vista Kalyan Logo"
                        style="height: 45px; margin: 0 auto 15px; display: block;">
                    <h3>PRIORITY PASS OPEN</h3>
                </div>
                <div class="popup-body">
                    <p>Register now to get exclusive access to Siyara Vista Kalyan Pricing & Floor Plans before the
                        official launch!</p>
                    <form action="contact.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name *" required>
                        <input type="tel" name="phone" placeholder="Mobile Number *" required>
                        <button type="submit" class="popup-btn">Unlock Details Now</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- =========================================
         MOBILE FIXED BOTTOM BAR (Visible < 768px)
         ========================================= -->
        <div class="mobile-bottom-bar">
            <div class="appointment-banner">For Site Visit, Appointment Compulsory</div>
            <div class="action-buttons">
                <a href="#" class="btn-call dynamic-call">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                    Call Now
                </a>
                <a href="#contact" class="btn-enquire">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                    Enquire
                </a>
                <a href="https://wa.me/91<?=str_replace(' ', '', get_val('phone_no', '8237498373'))?>?text=I'm interested in Siyara Vista Kalyan. Please send details." target="_blank" class="btn-whatsapp dynamic-wa">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12.031 21c-1.566 0-3.088-.42-4.425-1.217L2 21.056l1.32-5.466A9.957 9.957 0 012.046 11c0-5.514 4.486-10 10-10s10 4.486 10 10-4.485 10-9.985 10h-.03zM7.55 18.06c1.334.79 2.87 1.21 4.45 1.21 4.565 0 8.28-3.715 8.28-8.28S16.565 2.71 12 2.71c-4.566 0-8.28 3.715-8.28 8.28 0 1.636.452 3.22 1.306 4.606l-.688 2.846 2.912-.693zm8.796-3.805c-.477-.24-2.825-1.395-3.264-1.554-.44-.16-.76-.24-1.14.32-.38.56-1.236 1.554-1.515 1.873-.28.32-.56.36-1.038.12-.477-.24-2.02-.746-3.847-2.38-.142-.127-.58-.564-.81-1.018-.23-.454-.025-.7.214-.94.215-.216.477-.56.716-.84.24-.28.32-.477.478-.8.16-.32.08-.6-.04-.84-.12-.24-1.14-2.753-1.56-3.77-.412-.99-.83-.858-1.14-.874-.28-.013-.6-.016-.92-.016-.32 0-.84.12-1.278.6-.44.48-1.677 1.638-1.677 3.993 0 2.356 1.717 4.634 1.956 4.954.24.32 3.376 5.156 8.18 7.23 1.14.492 2.032.785 2.727 1.006 1.145.365 2.188.313 3.01.19 1.18-.178 3.633-1.485 4.143-2.92.51-1.436.51-2.666.358-2.92-.15-.256-.55-.416-1.028-.656z" />
                    </svg>
                    WhatsApp
                </a>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="lightbox-overlay">
            <span class="lb-close" id="close-lb">&times;</span>
            <div class="lb-nav">
                <button class="lb-btn" id="prev-lb">&#10094;</button>
                <button class="lb-btn" id="next-lb">&#10095;</button>
            </div>
            <img class="lightbox-content" id="lb-img" src="" alt="Gallery Image">
        </div>

    <script>
        // Use PHP to inject dynamic values where needed for JS (like phone links)
        const currentPhone = "<?=get_val('phone_no', '8237498373')?>";
        const cleanPhone = currentPhone.replace(/\s/g, '');
        document.querySelectorAll('.dynamic-call').forEach(el => el.href = 'tel:+91' + cleanPhone);
        document.querySelectorAll('.contact-number').forEach(el => el.textContent = '+91 ' + currentPhone);
        document.querySelectorAll('.dynamic-wa').forEach(el => el.href = 'https://wa.me/91' + cleanPhone + '?text=I\'m interested in Siyara Vista Kalyan. Please send details.');
    </script>
</body>

</html>