@include('layouts.partials.header')
<body>
    
    @include('layouts.partials.navbar')

    <main class="container">
        @yield('content')
    </main>

  </body>

@include('layouts.partials.footer')
</html>