<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="content"
        style="background: rgb(144,173,245);
    background: linear-gradient(180deg, rgba(144,173,245,1) 0%, rgba(234,240,255,1) 50%, rgba(144,173,245,1) 100%);">
        <section class="menu container">
            @include('navbar')
        </section>

        @yield('content')
    </div>

    @stack('scriptku')
</body>

</html>
