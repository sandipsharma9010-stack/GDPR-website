<?php include_once('header.php'); ?>





<main>
  <!-- ======================  
 Page Hero 
====================== -->

  <section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 {=$class}" aria-label="Page hero section">
    <div class="main-container">
      <!-- Hero content -->
      <div class="text-center space-y-2 pb-14 lg:pb-[72px]">
        <span data-ns-animate data-delay="0.1"
          class="hero-badge text-tagline-1 inline-block text-secondary dark:text-accent">
          <a href="./index.html"
            class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-300">Home</a>
          <span class="mx-2">-</span>
          <a href="#" class="hover:text-primary-500 dark:hover:text-primary-400 transition-colors duration-300">GDPR</a>
        </span>
        <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">GDPR</h1>
      </div>
    </div>
  </section>

  <!-- =========================
GDPR Details
===========================-->
  <section class="pt-[100px] pb-[200px]">
    <div class="main-container">
      <div class="space-y-[70px]">
        <!-- gdrp  -->
        <div data-ns-animate data-delay="0.3" class="space-y-3">
          <h2>GDPR and Software Development</h2>
          <p>
            Software development companies in India are facing heat of GDPR compliance . Initially thought to be Law of
            EU now leaving great impact on companies in India. First problem will be business discontinuity as companies
            in EU cannot work with companies in India who are not GDPR compliant .
          </p>

          <!-- <p>As per Article 46 of GDPR</p> -->

          <p>Confusion among third party service provider are they feel they are out of this as they donot work directly
            with end clients. But as per SCC (standard contractual clauses ) everyone in supply chain is liable thus
            require GDPR compliance.</p>

          <p>Second big challenge will be restructuring of their software/APP as per Law as they are the faces who
            capture personal information at first stage. Restructure / re alignment will be daunting tasks for many
            companies who may have delivered their product long before May 25 2018.</p>

          <p>Looking at all these it is certain that cost of operation will increase though new opportunities will also
            enable companies to do more business or move into territories they may not have worked till now.</p>

          <p>You can see from this example that structural changes are required in business processing and IT controls
            are only small part of that.</p>


          <p>
            Do <a href="contact.php"><strong>contact us</strong></a> for more information on how GDPR Consultants
            offerings can help your organization Stay One Step Ahead !
          </p>


        </div>

      </div>
  </section>

  <!-- =========================
CTA v1 section
===========================-->
  <section class="py-[50px] md:py-20 lg:py-28 dark:bg-background-6 bg-white" aria-label="Use Case Overview">
        <div class="main-container">
            <div class="flex flex-col lg:flex-row items-center justify-between">

                <!-- Left Content -->
                <div
                    class="xl:max-w-[1150px] lg:max-w-[1176px] max-[1000px]:max-w-[1000px] w-full space-y-5 text-center lg:text-left">
                    <span data-ns-animate data-delay="0.3" class="badge badge-green hidden">{=$badge-text}</span>
                    <div class="space-y-3">
                        <h4 data-ns-animate data-delay="0.4"
                            class="text-secondary dark:text-accent text-heading-4 sm:text-heading-4 lg:text-heading-2">
                            Secure compliance starts with a
                            <span class="text-primary-500 {=$span-class}">conversation.</span>
                        </h4>
                        <p data-ns-animate data-delay="0.5">
                            Connect with us today and take the first step toward seamless GDPR compliance and stronger
                            data protection
                            for your business.
                        </p>
                    </div>
                </div>

                <!-- Right Button -->
                <div class="w-full lg:w-auto pt-6 lg:pt-0 flex justify-center lg:justify-end">
                    <a href="contact.php"><button type="submit"
                            class="btn btn-md btn-primary h-12 w-full sm:w-[200px] lg:w-auto hover:btn-secondary dark:hover:btn-white">
                            <span>Get started</span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </section>

</main>
<!-- =========================
Footer v3
===========================-->



<?php include_once('footer.php'); ?>

</body>

</html>