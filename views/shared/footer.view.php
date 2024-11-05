<footer class="bg-gray-800 text-white py-8">
  <div class="container mx-auto px-4">
    <div class="flex flex-col md:flex-row justify-between">
      
      <!-- Column 1: About Section -->
      <div class="mb-6 md:mb-0">
        <h2 class="text-lg font-semibold">About Us</h2>
        <p class="mt-4 text-gray-400">
          We are dedicated to providing the best service with a focus on quality and customer satisfaction.
        </p>
      </div>
      
      <!-- Column 2: Quick Links -->
      <div class="mb-6 md:mb-0">
        <h2 class="text-lg font-semibold">Quick Links</h2>
        <ul class="mt-4 space-y-2">
          <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white">Services</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
        </ul>
      </div>
      
      <!-- Column 3: Contact Info -->
      <div>
        <h2 class="text-lg font-semibold">Contact Us</h2>
        <ul class="mt-4 text-gray-400 space-y-2">
          <li>Phone: +1 234 567 890</li>
          <li>Email: info@example.com</li>
          <li>Address: 1234 Street, City, Country</li>
        </ul>
      </div>
    </div>

    <!-- Bottom Section -->
    <div class="mt-8 border-t border-gray-700 pt-4 text-center text-gray-500">
      &copy; 2024 Your Company. All rights reserved.
    </div>
  </div>
</footer>

<script>
    // JavaScript to toggle the menu on mobile
    const menuBtn = document.getElementById("menuBtn");
    const navLinks = document.getElementById("navLinks");

    menuBtn.addEventListener("click", () => {
      navLinks.classList.toggle("hidden");
    });
  </script>
</body>
</html>
