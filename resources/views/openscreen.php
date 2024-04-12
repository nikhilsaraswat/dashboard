<div class="grid grid-cols-12 h-screen w-screen">
        <aside class="col-span-2 h-screen bg-neutral-100 shadow-r-2xl flex flex-col items-center text-center p-8 h-screen">
        <?php
    require('leftsidemenu.php')
    ?>
        </aside>
        <main class="col-span-10 h-screen px-8 pb-8">
        <?php
    require('maincontent.php')
    ?>
        </main>
    </div>