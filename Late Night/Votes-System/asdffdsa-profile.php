<?php include("./src/template/header.php") ?>


<!-- Main Content -->
<div class="container mx-auto mt-8 px-4">
    <!-- Dashboard -->
    <section class="mb-8">
        <h2 class="text-xl font-semibold mb-4 text-center md:text-left">Dashboard</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Total Students -->
            <div class="bg-orange-100 p-4 rounded shadow text-center">
                <h3 class="text-lg font-medium">Total Students</h3>
                <p class="text-2xl font-bold">150</p>
            </div>
            <!-- Votes Cast -->
            <div class="bg-orange-100 p-4 rounded shadow text-center">
                <h3 class="text-lg font-medium">Votes Cast</h3>
                <p class="text-2xl font-bold">120</p>
            </div>
            <!-- Remaining Votes -->
            <div class="bg-orange-100 p-4 rounded shadow text-center">
                <h3 class="text-lg font-medium">Remaining Votes</h3>
                <p class="text-2xl font-bold">30</p>
            </div>
        </div>
    </section>

    <!-- Manage Students -->
    <section>
        <h2 class="text-xl font-semibold mb-4 text-center md:text-left">Manage Students</h2>
        <div class="mb-4 flex justify-center md:justify-start">
            <button class="bg-orange-500 text-white px-4 py-2 rounded shadow hover:bg-orange-600">
                Add New Student
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded shadow text-sm">
                <thead class="bg-orange-500 text-white">
                    <tr>
                        <th class="py-2 px-4 border">ID</th>
                        <th class="py-2 px-4 border">Name</th>
                        <th class="py-2 px-4 border">Email</th>
                        <th class="py-2 px-4 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border text-center">1</td>
                        <td class="py-2 px-4 border">John Doe</td>
                        <td class="py-2 px-4 border">john.doe@example.com</td>
                        <td class="py-2 px-4 border text-center">
                            <button class="text-blue-500 hover:underline">Edit</button> |
                            <button class="text-red-500 hover:underline">Delete</button>
                        </td>
                    </tr>
                    <!-- More rows -->
                </tbody>
            </table>
        </div>
    </section>
</div>



<?php include("./src/template/footer.php") ?>