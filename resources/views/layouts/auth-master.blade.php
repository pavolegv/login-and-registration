@include('layouts.partials.header')
<body class="text-center">
    @include('layouts.partials.navbar')
    <div class="container mt-4">
    <main class="form-signin">
        @yield('content')
    </main>
    </div>
</body>
@include('layouts.partials.footer')
</html>
