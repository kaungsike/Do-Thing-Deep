<?php include("./template/header.php") ?>
<?php include("./template/side-bar.php") ?>

<?php
$sql = 'SELECT *,students.id as student_id,gender.id as gender_table_id,nationality.id as nationality_table_id FROM students LEFT JOIN nationality ON nationality.id = students.nationality_id LEFT JOIN gender ON gender.id = students.gender_id';


$totalSearchSql = "SELECT count(id) as student_total FROM students";

$totalStudentSql = "SELECT count(id) as student_total FROM students";

$totalQuery = mysqli_query($con, $totalStudentSql);

$totalRow = mysqli_fetch_assoc($totalQuery);

var_dump(isset($_GET['q']));

if (isset($_GET['q'])) {

    $q = $_GET['q'];

    $sql .= " WHERE name LIKE '%$q%'";
    $totalSearchSql .= " WHERE name LIKE '%$q%'";
}

$recordPerPage = 5;

$rowCountQuery = mysqli_query($con, $totalSearchSql);

$countRow = mysqli_fetch_assoc($rowCountQuery);

$totalRecord = $countRow['student_total'];

$totalPages = ceil($totalRecord / $recordPerPage);

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

$offset = ($currentPage - 1) * $recordPerPage;


$sql .= " LIMIT $offset,$recordPerPage";

$query = mysqli_query($con, $sql);

// echo "<pre>";

// print_r(mysqli_fetch_assoc($query));


// die();

?>

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
            Student Information
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <h2 class="text-2xl font-bold mb-3"> Student Information</h2>

    <div class="mb-5 mt-5 w-full flex justify-between">
        <a href="./student-create.php" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
            Add New
        </a>

        <div>
            <form action="./student-list.php?q=" method="get">
                <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
                <div class="flex rounded-lg shadow-sm">
                    <input value="<?= isset($_GET['q']) ? $_GET['q'] : '' ?>" required type="text" id="" name="q" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                    <button type="submit" class=" bg-neutral-800 w-[2.875rem] h-[2.875rem] shrink-0 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent  text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php if (isset($_GET['q']) && $_GET['q'] != null) : ?>
        <div class="w-full text-center mb-5 mt-3 flex justify-between bg-gray-200 p-4 rounded-xl items-center">
            <p>Showing result search by '<?= $_GET['q'] ?>'</p>

            <a href="./student-list.php" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                Clear <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </a>


        </div>
    <?php endif; ?>

    <div>
        <?php if ($_GET['q']) : ?>

            <p type="button" class="w-full text-center py-3 px-4 gap-x-2 text-sm font-medium rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                Total Search Students <?= isset($totalRecord) ? $totalRecord : '' ?>
            </p>

        <?php else : ?>

            <p type="button" class="w-full text-center py-3 px-4 gap-x-2 text-sm font-medium rounded-lg border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                Total Students <?= isset($totalRow['student_total']) ? $countRow['student_total'] : '' ?>
            </p>

        <?php endif; ?>
    </div>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">

                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">#</th>

                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>

                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Age</th>

                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Nationality</th>

                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Gender</th>

                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Pocket Money</th>

                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                            <?php while ($row = mysqli_fetch_assoc($query)) : ?>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"><?= $row['student_id'] ?></td>

                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= $row['name'] ?></td>

                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= ((new DateTime())->diff(new DateTime($row['date_of_birth']))->y) ?></td>

                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= $row['nation'] ?></td>

                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= $row['type'] ?></td>

                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        $ <?= $row['pocket_money'] ?>
                                    </td>

                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="inline-flex rounded-lg shadow-sm">
                                            <a href="./student-edit.php?row_id=<?=$row['student_id'] ?>" type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </a>

                                            <a href="./student-delete.php?row_id=<?= $row['student_id'] ?>" type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-red-600 size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>

                                            </a>

                                            <a  href="./enroll-create.php?row_id=<?= $row['student_id'] ?>" type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-green-500 size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                                </svg>


                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>


                            <?php

                            if ($query->num_rows == 0) :

                            ?>

                                <tr class="mt-5 p-5">
                                    <td colspan="7" class="mt-5 text-center w-full">There is no student</td>
                                </tr>

                            <?php endif; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex items-center justify-center mt-5">
        <!-- Pagination -->
        <nav class="flex justify-center items-center gap-x-1" aria-label="Pagination">
            <button type="button" class="mb-5 min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-white focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Previous">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <div class="flex items-center gap-x-1 overflow-x-scroll w-[610px]">

            <?php

                $href = "./student-list.php?";

                if(isset($_GET['q']) && $_GET['q'] != null) {
                    $href .= "q={$_GET['q']}&";
                }

            ?>


                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>

                    <a href="<?=$href; ?>page=<?=$i ?>" type="button" class="<?= $currentPage == $i ? 'bg-white border-gray-400' : '' ?>  min-h-[38px] min-w-[38px] flex justify-center items-center border  text-gray-800 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:focus:bg-white/10" aria-current="page">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>



            </div>
            <button type="button" class="mb-5 min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg border border-transparent text-gray-800 hover:bg-white focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:border-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-label="Next">
                <span class="sr-only">Next</span>
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </button>
        </nav>
        <!-- End Pagination -->
    </div>

</section>



<?php include("./template/footer.php") ?>