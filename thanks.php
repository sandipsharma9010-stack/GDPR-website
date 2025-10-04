<?php include_once('header.php'); ?>
  <section class="bg-gray-50 dark:bg-gray-900 flex items-center justify-center min-h-screen px-4">
    <div class="bg-white dark:bg-gray-800 shadow-xl rounded-2xl p-8 max-w-md w-full text-center">
      <!-- Success Icon -->
      <div class="flex justify-center mb-6">
        <div class="bg-green-100 text-green-600 rounded-full p-4">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-10 w-10"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </div>
      </div>

      <!-- Heading -->
      <h1 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white mb-2">
        Thank You!
      </h1>
      <p class="text-gray-600 dark:text-gray-300 mb-6">
        Your submission has been received successfully.  
        We’ll get back to you soon.
      </p>

      <!-- Button -->
      <a
        href="./index.php"
        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-6 rounded-lg transition-all duration-300"
      >
        Back to Home
      </a>

      
    </div>
  </section>

  <?php include_once('footer.php'); ?>
</html>
