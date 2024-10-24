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
            Results
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <?php


    $width = $_POST['width'];
    $breadth = $_POST['breadth'];


    $area = $width * $breadth;

    $fileName = 'record.txt';

    if (!file_exists($fileName)) {
        touch($fileName);
    }


    $fileString = fopen($fileName, 'a');

    fwrite($fileString, "$width * $breadth = $area \n");


    fclose($fileString);


    // echo $area;

    ?>

    <p class="text-3xl text-center mb-5">
        <?= $area ?> sqrt
    </p>


    <a href="./index.php" type="button" class="w-full justify-center mt-8 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
        Calculate Again
    </a>
    <a href="./record-list.php" type="button" class="w-full justify-center mt-8 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-500 text-white hover:bg-gray-600 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
        Records
    </a>


</section>

<?php include("./template/footer.php") ?>