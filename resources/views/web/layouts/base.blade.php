<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jaime Sares - Backend Developer</title>
    <meta name="description" content="Freelance, Backend Developer, amante de Laravel, PHP y APIs...">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @yield('content')

    @include('web.layouts.footer')
    <script src="/js/app.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-70404357-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>