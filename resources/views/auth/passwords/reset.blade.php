<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel=icon href=/images/favicon.ico>
    <link rel="stylesheet" href="/css/master.css">

    <title>Stocky | Ultimate Inventory With POS</title>
  </head>

  <body class="text-left">
    <noscript>
      <strong>
        We're sorry Closed</strong
      >
    </noscript>

    <!-- built files will be auto injected -->
    <div class="loading_wrap" id="loading_wrap">
      <div class="loader_logo">
      <img src="/images/logo-2.png" class="" alt="logo" />

      </div>

      <div class="loading"></div>
    </div>
    <div id="login">
        <reset-component token="{{$token}}"></reset-component>
      </div>

      <script src="/js/login.min.js"></script>
  </body>
</html>

    