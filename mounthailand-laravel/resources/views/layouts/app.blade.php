<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Mounthailand Coffee - Premium Grade 1 Robusta coffee from Temanggung, Central Java, Indonesia. Medium+ roast, rich aroma, and authentic chocolate notes.">
    <meta name="keywords"
        content="Mounthailand Coffee, Robusta Temanggung, Indonesian Coffee, Premium Coffee Beans, Medium Roast, Artisan Coffee">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://instagram.com/mounthailand_coffee.tmng">
    <meta property="og:title" content="Mounthailand Coffee | Premium Artisan Robusta Temanggung">
    <meta property="og:description"
        content="Premium Grade 1 Robusta coffee from Temanggung, Indonesia. Medium+ roast, rich aroma, and authentic taste.">
    <meta property="og:image" content="{{ asset('assets/products/product powder.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Mounthailand Coffee | Premium Artisan Robusta Temanggung">
    <meta property="twitter:description"
        content="Premium Grade 1 Robusta coffee from Temanggung, Indonesia. Medium+ roast, rich aroma, and authentic taste.">

    <title>@yield('title', 'Mounthailand Coffee | Premium Artisan Robusta Temanggung')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/logo/logocoffee.jpeg') }}">

    <!-- Vite Assets (Tailwind CSS + Custom Styles + JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>

</html>
