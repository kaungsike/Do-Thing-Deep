<?php include("./src/template/header.php") ?>
<?php require_once("./sql-connection.php") ?>

<!-- Wrapper Container -->
<div class="flex flex-col lg:flex-row min-h-screen">

<?php

$id = $_GET['id'];

$sql = "select * from students where id='$id'";

$query = mysqli_query($con,$sql);

$student = mysqli_fetch_assoc($query);

?>


    <!-- Main Content -->
    <main class="flex-1 p-6 bg-gray-50">
        <!-- Profile Card -->
        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col md:flex-row items-center md:items-start">
            <!-- Profile Picture -->
            <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-orange-500">
                <img src="./profile.jpg" alt="User Avatar" class="w-full h-full object-cover">
            </div>

            <!-- Profile Info -->
            <div class="mt-4 md:mt-0 md:ml-6 flex-1 text-center md:text-left">
                <h2 class="text-3xl font-bold text-gray-900"><?=$student['name'] ?></h2>
                <p class="text-gray-500 mt-1"><?=$student['edu_mail'] ?></p>
                <p class="text-gray-700 mt-2">Blockchain Validator | Developer</p>
            </div>

            <!-- Buttons -->
            <div class="flex flex-col mt-4 md:mt-0 space-y-2">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-md hover:bg-orange-600">
                    Edit Profile
                </button>
                <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300">
                    View Projects
                </button>
            </div>
        </div>

        <!-- Stats Section -->
        <section class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-orange-500">24</p>
                <p class="text-gray-600 mt-2">Nodes</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-orange-500">120</p>
                <p class="text-gray-600 mt-2">Connections</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="text-4xl font-bold text-orange-500">5</p>
                <p class="text-gray-600 mt-2">Projects</p>
            </div>
        </section>
    </main>
</div>

<!-- Footer -->
<footer class="bg-white text-center py-4 text-gray-600 text-sm mt-6 lg:mt-0">
    &copy; 2024 OverProtocol. All rights reserved.
</footer>

<!-- Dropdown Script -->
<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Optional: Close dropdown if clicked outside
    document.addEventListener('click', (event) => {
        if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });
</script>


<?php include("./src/template/footer.php") ?>