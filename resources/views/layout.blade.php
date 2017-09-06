<!DOCTYPE html>
<html>
    <head>
        <title>Budget</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,300i" />
        <link rel="stylesheet" href="/style.css" />
    </head>
    <body>
        @if (Auth::check())
            <div class="navigation">
                <ul>
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="/reports">Reports</a>
                    </li>
                    <li>
                        <a href="/budgets">Budgets</a>
                    </li>
                    <li>
                        <a href="/tags">Tags</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="/settings">Settings</a>
                    </li>
                    <li>
                        <a href="/logout">Log out</a>
                    </li>
                </ul>
            </div>
        @endif
        <div class="body">
            @yield('body')
        </div>
    </body>
</html>