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
    <x-applicant.backgound-main />
    <x-applicant.header />
    
    @if (Auth::guard('user1')->user())
        <x-applicant.menu_panel />
    @endif

    @yield('body')
    <x-applicant.logout />

    @if (Auth::guard('user1')->user())
        <script src="/js/navBar.js"></script>
        <x-applicant.side_nav />
    @endif

    <x-notify::notify />
    @notifyJs
</body>
</html>