<?php include("./src/template/header.php") ?>
<?php include("./src/template/nav.php") ?>


<!-- <header class="bg-orange-500 text-white py-6 px-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">Voting System</h1>
        <button class="bg-white text-orange-500 px-4 py-2 rounded hover:bg-gray-100">Contact Us</button>
    </div>
</header> -->

<main class="min-h-screen">

<section class="text-center py-12 bg-white shadow-md">
    <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Vote for Your King & Queen</h2>
    <p class="text-gray-600 mb-6">Make your choice and crown the next King and Queen of the university!</p>
    <button class="bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600 transition">Start Voting</button>
  </section>

  <!-- Voting Section -->
  <section class="container mx-auto px-4 py-10">
    <h3 class="text-3xl font-bold text-center mb-8 text-gray-800">Candidates</h3>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Candidate Card -->
      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <img src="./k.jpg" alt="Candidate" class="w-32 h-32 mx-auto rounded-full mb-4">
        <h4 class="text-xl font-bold text-gray-800">John Doe</h4>
        <p class="text-gray-500 mb-4">King Candidate</p>
        <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">Vote King</button>
      </div>

      <!-- Candidate Card -->
      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <img src="./k.jpg" alt="Candidate" class="w-32 h-32 mx-auto rounded-full mb-4">
        <h4 class="text-xl font-bold text-gray-800">Jane Smith</h4>
        <p class="text-gray-500 mb-4">Queen Candidate</p>
        <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">Vote Queen</button>
      </div>

      <!-- Additional Candidate Cards -->
      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <img src="./q.jpg" alt="Candidate" class="w-32 h-32 mx-auto rounded-full mb-4">
        <h4 class="text-xl font-bold text-gray-800">Alex Johnson</h4>
        <p class="text-gray-500 mb-4">King Candidate</p>
        <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">Vote King</button>
      </div>

      <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <img src="./q.jpg" alt="Candidate" class="w-32 h-32 mx-auto rounded-full mb-4">
        <h4 class="text-xl font-bold text-gray-800">Emily Davis</h4>
        <p class="text-gray-500 mb-4">Queen Candidate</p>
        <button class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">Vote Queen</button>
      </div>
    </div>
  </section>

  <!-- Results Section -->
  <section class="bg-gray-100 py-12">
    <div class="container mx-auto px-4 text-center">
      <h3 class="text-2xl font-bold text-gray-800 mb-4">Current Results</h3>
      <p class="text-gray-600 mb-6">See who’s leading in the race for King and Queen.</p>
      <button class="bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600 transition">View Results</button>
    </div>
  </section>

</main>

<?php include("./src/template/footer.php") ?>