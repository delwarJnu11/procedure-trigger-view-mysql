<nav class="bg-purple-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <div class="text-white text-xl font-bold">Brand</div>

      <!-- Hamburger Icon -->
      <button id="menuBtn" class="block sm:hidden text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>

      <!-- Navbar Links -->
      <div id="navLinks" class="hidden sm:flex flex-col sm:flex-row sm:items-center sm:space-x-6 mt-4 sm:mt-0">
        <a href="/" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Home</a>
        <a href="/products" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Products</a>
        <a href="/manufacturers" class="text-white hover:bg-blue-700 px-3 py-2 rounded">Manufacturers</a>
      </div>
    </div>
  </nav>