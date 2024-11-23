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
            Create Course
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <h2 class="text-2xl font-bold mb-3">Create Product</h2>

    <form action="./course-save.php" method="post">
        <div class="flex items-center justify-between gap-5">
            <div class="w-full">
                <label for="name" class="block text-sm font-medium mb-2 dark:text-white">Course Title</label>
                <input type="text" name="title" id="title" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Basic Web Design">
            </div>
            <div class="w-full">
                <label for="price" class="block text-sm font-medium mb-2 dark:text-white">Short</label>
                <input type="text" name="short" id="short" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="BWD">
            </div>
            <div class="w-full">
                <label for="stock" class="block text-sm font-medium mb-2 dark:text-white">Fee</label>
                <input type="number" name="fee" id="fee" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="100000">
            </div>
        </div>
        <div class="w-full flex justify-end">
            <button type="submit" class="item-end ml-auto mt-5 mb-5 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 focus:outline-none focus:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                Create
            </button>
        </div>
    </form>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">#</th>
                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Title</th>
                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Sgort</th>
                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Fee</th>
                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Created At</th>
                                <th scope="col" class="text-center px-6 py-3  text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            <?php
                            $sql = 'SELECT * FROM courses';


                            $query = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($query)) :
                            ?>

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200"><?= $row['id'] ?></td>
                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= $row['title'] ?></td>
                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= $row['short'] ?></td>
                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= $row['fee'] ?></td>
                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200"><?= date("d M Y", strtotime($row['created_at'])) ?></td>
                                    <td class="text-center px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="inline-flex rounded-lg shadow-sm">
                                            <a href="./course-edit.php?row_id=<?= $row['id'] ?>" type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>

                                            </a>
                                            <a href="./course-delete.php?row_id=<?= $row['id'] ?>" type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-red-600 size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>

                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include("./template/footer.php") ?>