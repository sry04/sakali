<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="csrf-token" content="">
    <link rel="shortcut icon" href="<?php echo e(asset('user/asset/images/icon.png')); ?>" />
    <!-- <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> -->
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/admin.js')); ?>" defer></script>
  </head>
  <body>
    <div id="admin">
      <admin></admin>
    </div>
  </body>
</html>
