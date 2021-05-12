<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Customers</title>
</head>
<body>
<div class="container">
    {{--  Blade's syntax to add file to html  --}}
    @include('partials.addContactForm')
    {{--   contact will change so we use @yield  --}}
    @yield('contacts')
</div>
</body>
</html>
