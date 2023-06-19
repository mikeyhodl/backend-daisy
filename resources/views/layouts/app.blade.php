<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.0.2/dist/full.css" rel="stylesheet" type="text/css" />
  </head>
    <body data-theme="dark">
        @include('partials.header')
      

        <div class="content">
          @yield('content')
            <!-- Your page-specific content here -->
        </div>

        @include('partials.footer')
      <script src="https://cdn.tailwindcss.com"></script>

    </body>
</html>