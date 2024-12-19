<?php include("./src/template/header.php") ?>
<?php require_once("./sql-connection.php") ?>

<main class="container mx-auto py-8 px-4 min-h-screen">
<?php include("./src/template/side-bar.php") ?>


    <div class="w-full mb-5">
        <label for="my-drawer" class="btn hover:bg-orange-400 bg-orange-500 drawer-button text-white">
            Menu
        </label>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-700">Manage Students</h2>
            <button class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">Add New Student</button>
        </div>

        <?php

        $sql = "select * from students";

        $query = mysqli_query($con, $sql);

        // print_r(mysqli_fetch_assoc($query));

        ?>

        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-orange-500 text-white">
                    <th class="border border-gray-200 px-4 py-2">ID</th>
                    <th class="border border-gray-200 px-4 py-2">Name</th>
                    <th class="border border-gray-200 px-4 py-2">Email</th>
                    <th class="border border-gray-200 px-4 py-2">Password</th>
                    <th class="border border-gray-200 px-4 py-2">Votes</th>
                    <th class="border border-gray-200 px-4 py-2">Year</th>
                    <th class="border border-gray-200 px-4 py-2">Semester</th>
                    <th class="border border-gray-200 px-4 py-2">Gender</th>

                    <th class="border border-gray-200 px-4 py-2">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($students = mysqli_fetch_assoc($query)) : ?>
                    <tr class="text-center">
                        <td class="border border-gray-200 px-4 py-2"><?= $students['id'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $students['name'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $students['edu_mail'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $students['password'] ?></td>

                        <td class="border border-gray-200 px-4 py-2"><?= $students['votes'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $students['years'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $students['semseters'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $students['gender'] ?></td>

                        <td class="border border-gray-200 px-4 py-2">
                            <button class="text-blue-600 hover:underline">Edit</button> |
                            <button class="text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</main>


<?php include("./src/template/footer.php") ?>