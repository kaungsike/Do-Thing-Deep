<?php include('./src/template/header.php') ?>


<main class="p-[200px]">
        <div class="border border-gray-300 w-[400px] mx-auto p-7 rounded">
            <form action="./src/components/user-login.php" class="flex flex-col gap-4">
                <label for="" class="">
                    Student Id
                    <input name="student_id"  type="text" placeholder="examlpe : 2223 CST - 43 " class="input mt-2 input-bordered w-full max-w-xs" />
                </label>

                <label for="">
                    University Enter Id
                    <input name="uni_enter_id" type="text" placeholder="example : 1543" class="mt-2 input input-bordered w-full max-w-xs" />
                </label>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </main>

<?php include('./src/template/footer.php') ?>