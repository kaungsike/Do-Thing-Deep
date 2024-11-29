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
            <a href="./student-list.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
                Students List
            </a>
            <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
            </svg>
        </li>

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
            Edit Student
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <h2 class="text-2xl font-bold mb-3">Edit Student</h2>

    <?php
    $id = $_GET['row_id'];

    $sql = "SELECT * FROM students where id=$id";

    $query = mysqli_query($con, $sql);

    $student = mysqli_fetch_assoc($query);


    ?>


    <form action="./student-update.php?row_id=<?= $id ?>" method="post">
        <div class="flex flex-col items-center justify-between gap-5">
            <div class="w-full">
                <label for="name" class="block text-sm font-medium mb-2 dark:text-white">Name</label>
                <input value="<?= $student['name'] ?>" type="text" name="name" id="name" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Special Web Design">
            </div>

            <div class="w-full">
                <label for="price" class="block text-sm font-medium mb-2 dark:text-white">Date of birth</label>
                <input value="<?= $student['date_of_birth'] ?>" type="date" name="date_of_birth" id="date_of_birth" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
            </div>

            <div class="w-full">
                <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Nationality</label>
                <select name="nationality_id" required id="hs-select-label" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <?php

                    $sql2 = "SELECT * FROM nationality";

                    $query2 = mysqli_query($con, $sql2);

                    ?>
                    <option>Select Courses</option>
                    <?php while ($nationality = mysqli_fetch_assoc($query2)) : ?>
                        <option <?= $nationality['id'] == $student['nationality_id'] ? 'selected' : '' ?> value="<?= $nationality['id'] ?>"><?= $nationality['nation'] ?></option>
                    <?php endwhile; ?>
                    <?php ?>
                </select>
            </div>

            <div class="flex w-full flex-col gap-y-3">
                <label for="">Gender</label>

                <?php

                $sql3 = "SELECT * FROM gender";

                $query3 = mysqli_query($con, $sql3);

                ?>

                <?php while ($gender = mysqli_fetch_assoc($query3)): ?>

                    <div class="flex">
                        <input
                        <?=$gender['id']==$student['gender_id']? 'selected' : "" ?>
                        type="radio" name="hs-radio-vertical-group" class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-radio-vertical-group-1" checked="">
                        <label for="hs-radio-vertical-group-1" class="text-sm text-gray-500 ms-2 dark:text-neutral-400"><?=$gender['type'] ?></label>
                    </div>


                <?php endwhile; ?>
            </div>


            <div class="w-full">
                <label for="pocket_money" class="block text-sm font-medium mb-2 dark:text-white">Pocket Money</label>
                <input value="<?= $student['pocket_money'] ?>" type="number" name="pocket_money" id="pocket_money" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="1500">
            </div>

        </div>
        <div class="w-full flex justify-end">
            <button type="submit" class="item-end ml-auto mt-5 mb-5 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                Update
            </button>
        </div>
    </form>

</section>



<?php include("./template/footer.php") ?>