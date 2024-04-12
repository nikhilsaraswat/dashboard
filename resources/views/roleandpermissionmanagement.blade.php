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
    <div class="grid grid-cols-12">
        <aside class="col-span-2 bg-neutral-100 shadow-r-2xl flex flex-col items-center text-center p-8 h-screen">
    @include('leftsidemenu');
        </aside>
        <main class="col-span-10 px-8 pb-8">
    @include('maincontentrole');
        </main>
    </div>