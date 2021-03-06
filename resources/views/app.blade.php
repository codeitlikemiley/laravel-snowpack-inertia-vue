<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    @routes
   </head>
<body>
    <!-- can be improve with ziggy generate , for now we dont need it -->
    @inertia
    <!-- create blade directive to detech localhost:12321 -->
    @env('local')
        <script type="module" src="/_snowpack/hmr-client.js"></script>
        <script type="text/javascript">window.HMR_WEBSOCKET_URL="ws://localhost:12321";</script>
    @endenv
    <!-- we need to hash this -->
    <script src="/js/app.js" type="module"></script>
</body>
</html>
