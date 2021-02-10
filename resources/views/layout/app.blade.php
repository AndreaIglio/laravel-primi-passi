
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <title>Laravel First Steps - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')

                @include('partials.navbar')
        @show

        <div class="container">
            @yield('content')
        </div>

        <footer>
            

            @yield('contact_form')
        </footer>
    </body>
</html>