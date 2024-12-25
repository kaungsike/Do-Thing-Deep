<?php include("./src/template/header.php") ?>
<!-- Main Container -->
<div class="flex items-center justify-center min-h-screen bg-white">
    <!-- Form Card -->
    <div class="bg-gray-50 shadow-lg rounded-lg p-8 w-full max-w-md">
        <!-- Title -->
        <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
            Welcome Back to <br> Let Make a <span class="text-orange-500">Vote</span>
        </h1>

        <!-- Login Form -->
        <form action="login-save.php" method="POST" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">EDU mail</label>
                <input type="email" id="email" name="edu_mail" placeholder="Your email address"
                    class=" px-3 py-2.5 outline-none w-full border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                    class=" px-3 py-2.5 outline-none w-full border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500">
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <a href="#" class="text-orange-500 text-sm hover:underline">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-orange-500 text-white font-semibold py-2 rounded-md hover:bg-orange-600 transition duration-200">
                Login
            </button>
        </form>

        <!-- Footer -->
        <p class="text-center text-gray-600 text-sm mt-4">
            Don't have an account?
            <a href="./sign-up.php" class="text-orange-500 hover:underline">Register</a>
        </p>
    </div>
</div>

<?php include("./src/template/footer.php") ?>