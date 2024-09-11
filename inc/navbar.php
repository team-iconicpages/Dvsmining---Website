<section class="text-center bg-cover bg-center bg-no-repeat relative">
      <!-- Video Background -->
      <video
        autoplay
        muted
        loop
        playsinline
        class="absolute inset-0 w-full h-full object-cover"
      >
        <source src="../assets/video/bg.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <!-- Overlay to ensure text is visible -->
      <div class="relative z-5">
        <!-- Navbar -->
        <nav
          class="bg-transparent p-4 mr-0 md:mr-36 ml-0 md:ml-36"
          data-aos="fade-down"
        >
          <div class="container mx-auto flex justify-between items-center">
            <div class="text-white font-bold text-xl">
              <img src="../assets/images/DVS_Logo.png" class="h-20" alt="" />
            </div>
            <ul class="hidden md:flex space-x-6">
              <li>
                <a
                  href="../public/home.php"
                  class="text-white hover:bg-orange-600 rounded-2xl py-2 px-3"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="../public/about.php"
                  class="text-white hover:bg-orange-600 rounded-2xl py-2 px-3"
                  >About</a
                >
              </li>
              <li>
                <a
                  href="../public/usp.php"
                  class="text-white hover:bg-orange-600 rounded-2xl py-2 px-3"
                  >Our USP</a
                >
              </li>
              <li>
                <a
                  href="../public/services.php"
                  class="text-white hover:bg-orange-600 rounded-2xl py-2 px-3"
                  >Services</a
                >
              </li>
              <li>
                <a
                  href="../public/contact.php"
                  class="text-white hover:bg-orange-600 rounded-2xl py-2 px-3"
                  >Contact</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="text-white bg-orange-600 hover:bg-orange-800 rounded-full py-3 px-4 font-bold"
                  >Enquire Now</a
                >
              </li>
            </ul>
            <div class="md:hidden">
              <button id="menu-toggle" class="text-white focus:outline-none">
                <svg
                  class="w-8 h-8"
                  fill="none"
                  stroke="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16m-7 6h7"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden bg-transparent p-4 md:hidden">
          <ul class="space-y-4" data-aos="fade-down">
            <li>
              <a
                href="../public/home.php"
                class="text-white font-bold hover:bg-orange-600 rounded-2xl py-2 text-center block"
                >Home</a
              >
            </li>
            <li>
              <a
                href="../public/about.php"
                class="text-white font-bold hover:bg-orange-600 rounded-2xl py-2 text-center block"
                >About</a
              >
            </li>
            <li>
              <a
                href="../public/services.php"
                class="text-white font-bold hover:bg-orange-600 rounded-2xl py-2 text-center block"
                >Services</a
              >
            </li>
            <li>
              <a
                href="../public/contact.php"
                class="text-white font-bold hover:bg-orange-600 rounded-2xl py-2 text-center block"
                >Contact</a
              >
            </li>
            <li>
              <a
                href="#"
                class="text-white bg-orange-600 hover:bg-orange-800 rounded-full py-3 px-4 font-bold"
                >Enquire Now</a
              >
            </li>
          </ul>
        </div>

        <!-- Hero Section -->
        <div class="p-2 h-screen">
          <div class="text-center mt-44 pr-6 md:pr-0  pl-6 md:pl-0">
            <h1
              class="text-3xl md:text-7xl font-bold text-white"
              data-aos="fade-up"
            >
              Digging Deeper For <span class="text-6xl md:text-7xl text-orange-500 mt-5 md:mt-0">Excellence</span>
            </h1>
            <p class="mt-4 text-white text-xl md:text-2xl" data-aos="fade-up">
              Driven by precision, innovative & a commitement to sustainable excellence.
            </p>
            <button
              class="mt-6 px-10 py-3 bg-orange-600 hover:bg-orange-800 text-white text-xl rounded-full shadow-lg"
              data-aos="fade-up"
            >
              Get Started
            </button>
          </div>
        </div>
      </div>
</section>


<script>
      // Animation On Scroll
      AOS.init();

      // Mobile Menu Toggle
      $(document).ready(function () {
          $("#menu-toggle").click(function () {
            $("#mobile-menu").toggle();
          });
        });
</script>
<script src="../assets/js/common.js"></script>