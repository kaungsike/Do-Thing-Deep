<nav class="fixed top-0 left-0 right-0 bg-white/70 backdrop-blur-lg shadow-md z-50">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-black text-lg font-bold">Let Make a <span class="font-extrabold">Vote</span></a>
        <!-- Hamburger Menu (Mobile) -->
        <label class="btn btn-circle md:hidden lg:hidden xl:hidden swap swap-rotate">
            <input id="menu-toggle" type="checkbox" />
            <!-- Hamburger icon -->
            <svg
                class="swap-off fill-current"
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>
            <!-- Close icon -->
            <svg
                class="swap-on fill-current"
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 512 512">
                <polygon
                    points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
            </svg>
        </label>
        <!-- Navigation Links -->
        <ul id="nav-links" class="hidden md:flex space-x-6">
            <li><a href="#" class="text-black hover:text-gray-500">Docs ↗</a></li>
            <li><a href="./vote-for-king.php" class="text-black hover:text-gray-500">King</a></li>
            <li><a href="#" class="text-black hover:text-gray-500">Queen</a></li>
        </ul>
        <!-- Contact Us Button -->
        <a href="./sign-up.php" class="hidden md:inline bg-orange-100 hover:bg-orange-200 text-orange-600 font-semibold px-4 py-2 rounded-full">
            Sign Up
        </a>
    </div>


    <!-- for phone view __ -->
    <div
        id="mobile-menu"
        class="max-h-0 overflow-hidden transition-[max-height] duration-300 ease-in-out bg-white px-4">
        <ul class="flex flex-col space-y-4 px-4 py-4">
            <li><a href="#" class="text-black hover:text-gray-500">About Over</a></li>
            <li><a href="#" class="text-black hover:text-gray-500">OverFlex</a></li>
            <li><a href="#" class="text-black hover:text-gray-500">OverScape</a></li>
            <li><a href="#" class="text-black hover:text-gray-500">Docs ↗</a></li>
        </ul>
        <a href="./sign-up.php" class="mb-3 inline-block text-center w-full bg-orange-100 hover:bg-orange-200 text-orange-600 font-semibold px-4 py-2 rounded-full">
            Sign Up
        </a>
    </div>
</nav>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('change', () => {
        if (menuToggle.checked) {
            mobileMenu.style.maxHeight = `${mobileMenu.scrollHeight}px`;
        } else {
            mobileMenu.style.maxHeight = '0';
        }
    });
</script>
