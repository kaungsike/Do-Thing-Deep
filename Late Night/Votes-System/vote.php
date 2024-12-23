<?php include("./src/template/header.php") ?>

<?php require_once("./sql-connection.php") ?>

<div class="flex flex-col gap-10 md:flex-row h-screen">
  <aside class="bg-orange-100 text-black rounded-r-3xl w-[300px]  h-20 md:h-full flex md:flex-col items-center md:items-start pr-5">
    <div class="flex items-center ml-5 mt-5 justify-center md:justify-start space-x-2 mb-4 md:mb-8">
      <img src="./k.jpg" alt="Profile" class="rounded-full h-12 w-12">
      <div>
        <h1 class="text-lg font-bold">Juan Dela Cruz</h1>
        <a href="#" class="text-sm">kaungsike9@gmail.com</a>
      </div>
    </div>
    <nav class="hidden md:block w-full">
      <ul class="space-y-4">
        <li><a href="#" class="block px-5 py-2 rounded hover:bg-orange-500 hover:text-white duration-150 rounded-r-full">Dashboard</a></li>
        <li><a href="./vote.php" class="block px-5 py-2 rounded bg-orange-500 hover:bg-orange-100 hover:text-black text-white duration-150 rounded-r-full">Vote</a></li>
        <li><a href="#" class="block px-5 py-2 rounded hover:bg-orange-500 hover:text-white duration-150 rounded-r-full">Voters Guideline</a></li>
        <li><a href="#" class="block px-5 py-2 rounded hover:bg-orange-500 hover:text-white duration-150 rounded-r-full">Settings</a></li>
      </ul>
    </nav>
  </aside>

  <main class="overflow-y-auto p-4 w-full flex flex-col gap-5">
    <h1 class="xl:text-2xl text-orange-500 font-bold">
      YOU MAY NOW CAST YOUR VOTES!
    </h1>


    <div class="border border-black w-full flex-grow">


      <div class="border border-black xl:w-[250px] p-3 rounded-xl xl:h-[350px] gap-4 flex flex-col items-center justify-between">
        <div class="avatar">
          <div class="w-24 rounded-full">
            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
          </div>
        </div>

        <div class="w-full flex-grow flex flex-col items-center">
          <p class="text-xl font-bold">Su Su</p>
          <p>NO. 1</p>
          <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor minima nostrum.</p>
          <div class="flex items-center w-full justify-evenly mt-auto">
            <button class="btn btn-outline hover:bg-orange-500 hover:border-orange-500 w-full">Vote</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>


<?php include("./src/template/footer.php") ?>