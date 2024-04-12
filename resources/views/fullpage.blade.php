<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
    </head>
    <body>
    
<!-- created a logic to render lock screen and open screen -->
@if (1==1)
  @include('lockscreen')
@else
  @include('openscreen')
@endif
