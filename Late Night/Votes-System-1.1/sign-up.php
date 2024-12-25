<?php include("./src/template/header.php") ?>


<div class="flex flex-grow items-center justify-center bg-white">
    <div class="bg-gray-50 rounded-lg p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
            Register to <span class="text-orange-500">Vote Me</span>
        </h1>

        <form action="sign-up-save.php" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Your full name"
                    class="w-full border-gray-300rounded-md focus:ring-orange-500 px-3 py-2.5 outline-none focus:border-orange-500">
            </div>

            <div class="flex items-center justify-between gap-5">
                <div class="w-1/2">
                    <label for="name" class="block text-gray-700 font-medium mb-1">Year</label>
                    <select name="year" class="select outline-none w-full">
                        <option disabled selected>Select year</option>
                        <option value="1">First</option>
                        <option  value="2">Second</option>
                        <option  value="3">Third</option>
                        <option  value="4">Forth</option>
                        <option  value="5">Fifth</option>
                    </select>
                </div>
                <div class="w-1/2">
                    <label for="name" class="block text-gray-700 font-medium mb-1">Semester</label>
                    <select name="semester" class="select outline-none w-full">
                        <option disabled selected>Select semester</option>
                        <option value="1">First</option>
                        <option value="2">Second</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="name" class="block text-gray-700 font-medium mb-1">Gender</label>
                <select name="gender" class="select outline-none w-full">
                    <option disabled selected>Select gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>


            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email address"
                    class=" px-3 py-2.5 outline-none w-full border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class=" px-3 py-2.5 outline-none w-full border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div>
                <label for="confirm-password" class="block text-gray-700 font-medium mb-1">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password"
                    class=" px-3 py-2.5 outline-none w-full border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
            </div>
            <input id="unique_key" type="text" class="hidden" name="unique_key">
            <button id="submitBtn" type="submit"
                class="w-full bg-orange-500 text-white font-semibold py-2 rounded-md hover:bg-orange-600 transition duration-200">
                Register
            </button>
        </form>
        <p class="text-center text-gray-600 text-sm mt-4">
            Already have an account?
            <a href="./login.php" class="text-orange-500 hover:underline">Login</a>
        </p>
    </div>
</div>

<script>
    console.log("local", localStorage.getItem("uniqueKey"));
    console.log("session", sessionStorage.getItem("uniqueKey"));

    document.getElementById("submitBtn").addEventListener("click", () => document.getElementById("unique_key").value = localStorage.getItem("uniqueKey"));
</script>

<?php include("./src/template/footer.php") ?>