<!doctype html>
<html>
<head>
  <title>
    {{-- Yield the title if it exists, otherwise default to 'Project-3' --}}
    @yield('title','Project-3')
  </title>

  <meta charset='utf-8'>
  <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="/css/theme.css" rel="stylesheet">
  {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

  </head>
  <body>

    <!-- Add logo to page -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="navbar-brand" href="/"> <img alt="Learn4Ever" src="/img/logo.png"></a>
        </div>
      </div>
    </div>

    <!-- Entire content in container -->
    <div class="container theme-showcase" role="main">

      <!-- Navigation bar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">Project-3 Developer's Best Friend</a>
          </div>
          <div>
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="lorem-ipsum">Lorem-Ipsum Paragraph Generator</a></li>
              <li><a href="usergenerator">Random User Generator</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Add content from child Blade -->
      <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')

      </section>

      <footer>
        &copy; {{ date('Y') }}
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

  </body>
  </html>
