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

        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="./student-list.php">
                Students List
            </a>
            <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
            Enrollment
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <h2 class="text-2xl font-bold mb-3">Create Enrollment</h2>

    <?php

    $id = $_GET['row_id'];

    $sql = "select * from students where id=$id";


    $query = mysqli_query($con, $sql);

    $student = mysqli_fetch_assoc($query);

    // print_r($row);

    $batchSql = "select * from batches";

    $batchQuery = mysqli_query($con, $batchSql);

    ?>

    <form action="./enroll-store.php" method="post">
        <div class="flex flex-col items-center justify-between gap-5">

            <div class="w-full flex items-start mt-5">
                <h3 class="text-xl ">Enroll for student <b><?= $student['name'] ?></b></h3>
            </div>

            <input type="text" class="hidden" name="student_id" value="<?= $id ?>">


            <div class="w-full">
                <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Course</label>
                <select name="batch_id" required id="hs-select-label" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <?php

                    ?>
                    <option selected="">Select Batch</option>
                    <?php while ($row = mysqli_fetch_assoc($batchQuery)) : ?>
                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                    <?php endwhile; ?>
                    <?php ?>
                </select>
            </div>


        </div>
        <div class="w-full flex justify-end">
            <button type="submit" class="item-end ml-auto mt-5 mb-5 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                Create
            </button>
        </div>
    </form>


</section>



<?php include("./template/footer.php") ?>