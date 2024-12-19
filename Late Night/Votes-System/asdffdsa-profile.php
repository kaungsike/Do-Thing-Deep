<?php include("./src/template/header.php") ?>


<main class="container mx-auto py-8 px-4 min-h-screen">

    <?php include("./src/template/side-bar.php") ?>

    <!-- 
    <li class="bg-orange-100 hover:scale-105 duration-150 px-4 py-2  rounded-lg text-orange-500 active:text-orange-600 active:bg-orange-200 select-none">
                    
                    </li> -->

    <!-- Dashboard Info -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-orange-100 text-orange-600 p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Total Students</h2>
            <p class="text-3xl font-bold">150</p>
        </div>
        <div class="bg-orange-100 text-orange-600 p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Votes Cast</h2>
            <p class="text-3xl font-bold">120</p>
        </div>
        <div class="bg-orange-100 text-orange-600 p-4 rounded-lg shadow">
            <h2 class="text-lg font-semibold">Remaining Votes</h2>
            <p class="text-3xl font-bold">30</p>
        </div>
    </div>

    <div class="w-full mb-5">
        <label for="my-drawer" class="btn hover:bg-orange-400 bg-orange-500 drawer-button text-white">
            Menu
        </label>
    </div>

</main>



<?php include("./src/template/footer.php") ?>