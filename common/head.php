<?php
// Dynamic page variables - can be set in individual pages
$page_title = isset($page_title) ? $page_title : 'Lawanya Derma & Aesthetic Clinic - Best Skin, Hair, Laser & Weight Loss Treatment';
$page_description = isset($page_description) ? $page_description : 'Leading dermatology and aesthetic clinic offering advanced skin treatments, hair restoration, laser procedures, weight loss programs and OPD services in professional healthcare environment.';
$page_keywords = isset($page_keywords) ? $page_keywords : 'dermatology, skin treatment, hair restoration, laser treatment, weight loss, aesthetic clinic, OPD services, derma clinic';
$page_url = isset($page_url) ? $page_url : 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$page_image = isset($page_image) ? $page_image : 'https://' . $_SERVER['HTTP_HOST'] . '../assets/logo/logo.jpeg';
$base_url = "http://localhost/lawanya/";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="author" content="Lawanya Derma & Aesthetic Clinic">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($page_url); ?>">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_url); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Lawanya Derma & Aesthetic Clinic">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/logo/logo.jpeg">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/logo/logo.jpeg">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/logo/logo.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/logo/logo.jpeg">

    <!-- Bootstrap 5 CSS (Latest Version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Structured Data for Medical Business -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalBusiness",
            "name": "Lawanya Derma & Aesthetic Clinic",
            "description": "Leading dermatology and aesthetic clinic offering advanced skin treatments, hair restoration, laser procedures, weight loss programs and OPD services.",
            "url": "<?php echo htmlspecialchars($page_url); ?>",
            "logo": "<?php echo htmlspecialchars($page_image); ?>",
            "image": "<?php echo htmlspecialchars($page_image); ?>",
            "medicalSpecialty": [
                "Dermatology",
                "Aesthetic Medicine",
                "Hair Restoration",
                "Laser Therapy",
                "Weight Management"
            ],
            "serviceType": [
                "Skin Treatment",
                "Hair Care",
                "Laser Treatment",
                "Weight Loss",
                "OPD Services"
            ],
            "priceRange": "$$",
            "telephone": "+91 70421 79159",
            "email": "lawanyaderma@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "328/1 Part-A, Pul Pahladpur, Suraj Kund Road, Near MCD Toll Tax",
                "addressLocality": "New Delhi",
                "addressRegion": "Delhi",
                "postalCode": "110044",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "28.4595",
                "longitude": "77.2250"
            },
            "openingHours": [
                "Mo-Sa 09:00-20:00",
                "Su 10:00-18:00"
            ],
            "sameAs": [
                "https://www.facebook.com/lawanyaclinic",
                "https://www.instagram.com/lawanyaclinic",
                "https://wa.me/917042179159"
            ]
        }
    </script>

    <!-- Google Analytics (Replace with your tracking ID) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_TRACKING_ID');
    </script> -->

    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" as="style">
</head>