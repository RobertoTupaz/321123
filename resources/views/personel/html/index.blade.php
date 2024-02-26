<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @notifyCss
    @vite('resources/css/app.css')
</head>
<body>
    <div class="h-screen">
        <x-personel.background_main />
        <x-personel.header />
        
        @if (Auth::guard('user2')->user())
            <x-personel.menu_panel />
        @endif

        @yield('body')

        @if (Auth::guard('user2')->user())
            <x-personel.side_nav />
        @endif

        <x-notify::notify />
        @notifyJs
    </div>
</body>
</html>