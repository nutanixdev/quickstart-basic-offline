<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <link href="/css/master.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
            background-color: #005495;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .task-header {
            color: #D0D0D0;
        }

    </style>
</head>
<body id="app-layout">
    <div id="calmgb" class="calm-background"></div>
    <div class="container">
        <div class="row text-center task-header">
            <h2>Task Manager v12.0</h2>
        </div>
    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>
