<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  
  <title>@yield('title', 'E-Commerce') &mdash; Swarmed</title>

  @include('includes.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">

      @include('includes.partials._topnav')

      <div class="main-sidebar">
        @include('includes.partials._sidebar')
      </div>

      <div class="main-content">
        @yield('content')
      </div>

      <footer class="main-footer">
        @include('includes.partials._footer')
      </footer>
      
    </div>
  </div>

  @include('includes.script')
</body>
</html>
