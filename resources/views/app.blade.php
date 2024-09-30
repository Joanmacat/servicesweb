<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Discover a range of services at Andorraconnect.com for info on companies, businesses, health, opportunities, real estate in Andorra. Contact us for help in our website!">
        <link rel="canonical" href="https://andorraconnect.com" />


        <title>Andorra Connect - Contact business, health, services, real estate</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-J0XK0LF9SG"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J0XK0LF9SG');
        </script>
        <!-- Scripts ADS -->
        <script type='text/javascript' src='//pl24546771.cpmrevenuegate.com/55/ca/89/55ca89e775004ff65fa86687e73b4af2.js'></script>
        <script async="async" data-cfasync="false" src="//pl24546785.cpmrevenuegate.com/58d870d61b8e35bb07ee5873e747efc4/invoke.js"></script>
        <div id="container-58d870d61b8e35bb07ee5873e747efc4"></div>
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    </head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
