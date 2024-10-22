        <?php include("./template/header.php") ?>
        <?php include("./template/side-bar.php") ?>




        <section class="bg-gray-100 p-16 rounded-lg">

            <ol class="flex items-center whitespace-nowrap mb-3">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                        Home
                    </a>
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>

                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                    Area Calculator
                </li>
            </ol>
            <hr class="border-gray-500 mb-7">

            <form action="./area.php" method="post">
                <div class="mb-3">
                    <label for="width" class="block text-sm font-medium mb-2 dark:text-white">Width</label>
                    <input  name="width" type="number" id="width" class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                </div>
                <div class="mb-5">
                    <label for="breadth" class="block text-sm font-medium mb-2 dark:text-white">Breadth</label>
                    <input  type="number" name="breadth" id="breadth" class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                </div>
                <button name="calcBtn" type="submit" class="w-full justify-center py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                    Calculate
                </button>
            </form>
        </section>

        <?php include("./template/footer.php") ?> 
