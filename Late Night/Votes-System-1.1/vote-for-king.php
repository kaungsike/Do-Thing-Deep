<?php include("./src/template/header.php") ?>

<?php require_once("./sql-connection.php") ?>

<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-blue-700">King Voting</h1>
    <nav>
      <ul class="hidden md:flex items-center space-x-6">
        <li><a href="#" class="hover:text-blue-700">Home</a></li>
        <li><a href="#" class="hover:text-blue-700">About</a></li>
        <li><a href="#" class="hover:text-blue-700">Contact</a></li>
        <li>
          <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Sign Up</button>
        </li>
      </ul>
      <button id="mobile-menu-button" class="block md:hidden text-blue-700 text-2xl focus:outline-none">
        ☰
      </button>
    </nav>
  </header>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white shadow">
    <ul class="flex flex-col items-center space-y-4 py-4">
      <li><a href="#" class="hover:text-blue-700">Home</a></li>
      <li><a href="#" class="hover:text-blue-700">About</a></li>
      <li><a href="#" class="hover:text-blue-700">Contact</a></li>
      <li>
        <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Sign Up</button>
      </li>
    </ul>
  </div>

  <!-- Hero Section -->
  <section class="text-center py-10 bg-blue-50">
    <h2 class="text-3xl font-bold mb-4">Vote for Your Favorite King</h2>
    <p class="text-gray-600 max-w-xl mx-auto">
      Select your favorite king from the list below and cast your vote. The most voted candidate will be crowned as the King!
    </p>
  </section>

  <!-- Candidates Grid -->
  <section class="py-10 px-4">
    <div class="max-w-7xl mx-auto">
      <h3 class="text-2xl font-bold mb-6 text-center">Candidates</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <!-- Candidate Card Template -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/150" alt="Candidate" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-lg">Candidate 1</h4>
            <p class="text-sm text-gray-600">"Inspire others with great leadership."</p>
            <button class="bg-blue-700 text-white w-full mt-4 py-2 rounded hover:bg-blue-800">
              Vote
            </button>
          </div>
        </div>
        <!-- Duplicate the above card for 10 candidates -->
        <!-- Example for Candidate 2 -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <img src="https://via.placeholder.com/150" alt="Candidate" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-bold text-lg">Candidate 2</h4>
            <p class="text-sm text-gray-600">"Dedication to success and growth."</p>
            <button class="bg-blue-700 text-white w-full mt-4 py-2 rounded hover:bg-blue-800">
              Vote
            </button>
          </div>
        </div>
        <!-- Repeat similar cards for 10 candidates -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-4">
    <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row justify-between items-center">
      <p>&copy; 2023 King Voting App. All rights reserved.</p>
      <div class="flex space-x-4 mt-4 sm:mt-0">
        <a href="#" class="hover:text-blue-400">Discord</a>
        <a href="#" class="hover:text-blue-400">YouTube</a>
        <a href="#" class="hover:text-blue-400">Facebook</a>
        <a href="#" class="hover:text-blue-400">Contact</a>
      </div>
    </div>
  </footer>

  <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>


<?php include("./src/template/footer.php") ?>