<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" integrity="sha512-hUhvpC5f8cgc04OZb55j0KNGh4eh7dLxd/dPSJ5VyzqDWxsayYbojWyl5Tkcgrmb/RVKCRJI1jNlRbVP4WWC4w==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/locale/zh-tw.min.js" integrity="sha512-2n88JfMhTbm2TPaHV4U5A1vgTX9317dzZ3AWG6Q1YDb5d7/fTOAquQr4Iaprl7wW84EYqpoofQLKIYhqTz4eLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.9/index.global.min.js" integrity="sha512-XcSx5820pzZbdZYdvoBBKzuOivQv7oQMd+7JuUHh0jhMwqsWHOf+yRfZRxCtV0ySEKWtKblijTdl9pvODcmD7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            moment.locale({{ str_replace('_', '-', strtolower(app()->getLocale())) }});
        </script>
        {!! $calendar->calendar() !!}
        {!! $calendar->script() !!}
    </body>
</html>