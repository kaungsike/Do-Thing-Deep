<?php include("./template/header.php") ?>

<?php include("./template/side-bar.php") ?>



<section class="bg-gray-100 p-16 rounded-lg">

    <ol class="flex items-center whitespace-nowrap mb-3">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="./index.php">
                Home
            </a>
            <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
            </svg>
        </li>
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="./index.php">
                Area Calculator
            </a>
        </li>
        <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
        </svg>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
            Record Lists
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <section>
        <div class="w-full m-3 overflow-y-scroll">
            <?php
            $fileName = 'record.txt';

            if (!file_exists($fileName)) {
                touch($fileName);
            }


            $fileStream  = fopen($fileName, 'r');
            while (!feof($fileStream)) :
            ?>

                <p class="w-full rounded bg-white text-center mb-3 py-2 ">
                    <?= fgets($fileStream); ?>
                </p>

            <?php endwhile; ?>



        </div>
    </section>

</section>
<?php include("./template/footer.php") ?>