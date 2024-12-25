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
        <h3 class="text-2xl font-bold mb-4">Add New Student</h3>
        <hr class="mb-4 border-orange-500">
        <div class="form-control w-full max-w-[1200px] p-[50px] mx-auto">
            <form action="./asdffdsa-add-student-save.php" method="post" class="flex flex-col gap-10">
                <div class="w-full flex items-center justify-between gap-10">
                    <label for="" class="flex items-center w-[50%]">Name
                        <input type="text" placeholder="" name="name" class="input ml-3 input-bordered flex-grow" />
                    </label>
                    <label class="flex items-center w-[50%]" for="">EDU mail
                        <input type="email" placeholder="" name="edu_mail" class="input ml-3 input-bordered flex-grow" />
                    </label>
                </div>
                <button class="border border-orange-500 text-white bg-orange-500 w-[450px] py-3 items-end ml-auto mt-5 rounded-lg">Add</button>
            </form>
        </div>
    </div>
</main>


<?php include("./src/template/footer.php") ?>