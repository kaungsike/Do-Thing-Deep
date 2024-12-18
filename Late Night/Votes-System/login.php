<?php include("./src/template/header.php") ?>
<!-- Main Container -->
<div class="flex items-center justify-center min-h-screen bg-white">
    <!-- Form Card -->
    <div class="bg-gray-50 shadow-lg rounded-lg p-8 w-full max-w-md">
        <!-- Title -->
        <h1 class="text-2xl font-bold text-gray-900 mb-6 text-center">
            Welcome Back to <span class="text-orange-500">OverProtocol</span>
        </h1>

        <!-- Login Form -->
        <form action="login-save.php" method="POST" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email address"
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
                <label class="inline-flex items-center">
                    <input type="checkbox" class="text-orange-500 focus:ring-orange-500">
                    <span class="ml-2 text-gray-700 text-sm">Remember me</span>
                </label>
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
            <a href="#" class="text-orange-500 hover:underline">Register</a>
        </p>
    </div>
</div>

<?php include("./src/template/footer.php") ?>