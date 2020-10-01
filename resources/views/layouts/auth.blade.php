<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')

  <title>@yield('title') &mdash; Swarmed</title>

  @include('includes.style')
</head>

<body>

  <div id="app">

    @yield('content')

  </div>

  @include('includes.script')
</body>
</html>