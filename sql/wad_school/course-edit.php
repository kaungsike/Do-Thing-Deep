

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
            Edit Product
        </li>
    </ol>
    <hr class="border-gray-500 mb-7">

    <h2 class="text-2xl font-bold mb-3">Edit Product</h2>

    <?php

        $id = $_GET['row_id'];

        $sql = "SELECT * FROM courses WHERE id=$id";

        $query = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($query);

    ?>

    <form action="./course-update.php" method="post">
        <div class="flex items-center justify-between gap-5">
        <input type="text" hidden name="id" id="" value="<?=$row['id'] ?>" required>
            <div class="w-full">
                <label for="name" class="block text-sm font-medium mb-2 dark:text-white">Title</label>
                <input type="text" value="<?=$row['title'] ?>" name="title" id="name" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Apple">
            </div>
            <div class="w-full">
                <label for="price" class="block text-sm font-medium mb-2 dark:text-white">Short</label>
                <input type="text" name="short" value="<?=$row['short'] ?>"  id="price" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="300">
            </div>
            <div class="w-full">
                <label for="stock" class="block text-sm font-medium mb-2 dark:text-white">Fee</label>
                <input type="number" name="fee" value="<?=$row['fee'] ?>"  id="stock" required class="outline-none py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="20">
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
