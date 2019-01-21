<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="csrf-token" content="">
    <link rel="shortcut icon" href="{{ asset('user/asset/images/icon.png') }}" />
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="{{ asset('js/admin.js') }}" defer></script>
  </head>
  <body>
    <div id="admin">
      <admin></admin>
    </div>
  </body>
</html>
