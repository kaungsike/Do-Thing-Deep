<?php include("./src/template/header.php") ?>


<main class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <div class="flex justify-center mb-4">
            <div class="w-16 h-16 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-8 w-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <h2 class="text-center text-2xl font-bold text-gray-800">Login Failed</h2>
        <p class="text-center text-gray-600 mt-2">
            Oops! We couldn't verify your credentials. Please try again or contact support.
        </p>
        <div class="mt-6 w-full flex">
            <a href="./asdffdsa.php"
                class="w-full flex-grow text-center px-4 py-2 text-white bg-orange-500 rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-400">
                Retry Login
            </a>
        </div>
        <p class="mt-4 text-sm text-center text-gray-600">
            Need help? <a href="#" class="text-orange-500 hover:underline">Contact Support</a>
        </p>
    </div>
</main>


<?php include("./src/template/footer.php") ?>