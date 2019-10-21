<html lang="en">
<head>
    <title>User Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <link href="https://fonts.googleapis.com/css?family=Lato|Nunito:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/users/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('css/users/rates.css')}}">
    <link rel="stylesheet" href="{{asset('css/users/coins.css')}}">


{{--    <link rel="stylesheet" href="{{asset('css/users/trade.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/users/portfolio.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/users/trade.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/users/feed.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/users/explore.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/layouts/user-dashboard.css')}}">
    @stack('chart-scripts')    
</head>
<body>
<div class="container-fluid users-dashboard-container">
    <div class="row">
        <div class="sidebar">
            <ul class="sidebar-ul">
                <li class="sidebar-li">
                    <a href="{{route('users.dashboard')}}">
                        <span class="icon fa fa-dashcube"></span>
                        dashboard
                    </a>
                </li>
{{--                <li class="sidebar-li">--}}
{{--                    <a href="{{route('users.rates')}}">--}}
{{--                        <span class="icon fa fa-signal"></span>--}}
{{--                        Live Rates--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="sidebar-li">
                    <a href="{{route('users.coins')}}">
                        <span class="icon fa fa-dollar"></span>
                        Coins
                    </a>
                </li>
                <li class="sidebar-li">
                    <a href="{{route('users.portfolio')}}">
                        <span class="icon fa fa-user-md"></span>
                        Portfolio
                    </a>
                </li>
                <li class="sidebar-li">
                    <a href="{{route('users.trade')}}">
                        <span class="icon fa fa-money"></span>
                        Trade
                    </a>
                </li>
                <li class="sidebar-li">
                    <a href="{{route('users.explore')}}">
                        <span class="icon fa fa-first-order"></span>
                        Explore
                    </a>
                </li>
                <li class="sidebar-li">
                    <a href="{{route('users.feed')}}">
                        <span class="icon fa fa-newspaper-o"></span>
                        News Feed
                    </a>
            </ul>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
