<?php include("./src/template/header.php") ?>

<?php require_once("./sql-connection.php") ?>

<div class="flex flex-col md:flex-row h-screen">
    <!-- Sidebar -->
    <aside class="bg-orange-50 text-black rounded-r-xl w-[300px]  h-20 md:h-full flex md:flex-col items-center md:items-start p-4">
        <div class="flex items-center justify-center md:justify-start space-x-2 mb-4 md:mb-8">
            <img src="./k.jpg" alt="Profile" class="rounded-full h-12 w-12">
            <div>
                <h1 class="text-lg font-bold">Juan Dela Cruz</h1>
                <a href="#" class="text-sm">kaungsike9@gmail.com</a>
            </div>
        </div>
        <nav class="hidden md:block w-full">
            <ul class="space-y-4">
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">Dashboard</a></li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">Vote</a></li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">Voters Guideline</a></li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">Settings</a></li>
                <li><a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">Log out</a></li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-4">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold">Profile</h2>
            <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Edit</button>
        </header>

        <!-- Profile Section -->
        <section class="bg-white shadow rounded-lg p-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Profile Picture -->
            <div class="text-center">
                <img src="https://via.placeholder.com/100" alt="Profile" class="rounded-full mx-auto mb-4">
                <div class="space-x-4">
                    <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Upload</button>
                    <button class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">Remove</button>
                </div>
            </div>

            <!-- Editable Profile Information -->
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-bold mb-1">First Name</label>
                    <input type="text" value="Juan" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Middle Name</label>
                    <input type="text" value="Salazar" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Last Name</label>
                    <input type="text" value="Dela Cruz" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
            </div>
        </section>

        <!-- Additional Details -->
        <section class="mt-8 bg-white shadow rounded-lg p-6">
            <h3 class="text-lg font-bold mb-4">Details</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Birthday -->
                <div>
                    <label class="block text-sm font-bold mb-1">Birthday</label>
                    <input type="text" value="January 1, 2000" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Contact Number -->
                <div>
                    <label class="block text-sm font-bold mb-1">Contact Number</label>
                    <input type="text" value="+63 912 345 6789" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Email -->
                <div>
                    <label class="block text-sm font-bold mb-1">Email</label>
                    <input type="email" value="juan.delacruz@email.com" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <!-- Organization -->
                <div>
                    <label class="block text-sm font-bold mb-1">Organization</label>
                    <input type="text" value="System Development" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
            </div>

            <!-- Address -->
            <h4 class="text-lg font-bold mt-8 mb-4">Current Address</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold mb-1">Province</label>
                    <input type="text" value="Pangasinan" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">Barangay</label>
                    <input type="text" value="Mayombo" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div>
                    <label class="block text-sm font-bold mb-1">City/Municipality</label>
                    <input type="text" value="Dagupan City" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
                </div>
            </div>
        </section>
    </main>
</div>


<?php include("./src/template/footer.php") ?>