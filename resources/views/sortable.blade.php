<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">
  <title>8001-cri-sortable</title>
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<div id="wrapper">

<div id="input_form">
    @include('layouts.registrations')  /* registrations.blade.phpを読み込む */
</div>

<div id="drag-area">
    @include('layouts.drags')   /* ←drags.blade.phpを読み込みます */
</div>

</div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
  <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
