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
          <h2>GDPR and rest of the world</h2>
          <!-- <h6>New requirements for Data processors under the GDPR</h6> -->
          <p>
            Though EU GDPR is meant for EU citizens but the way it has been framed eventually every country who deals
            with EU business or EU citizens get impacted with that. Privacy has become new norm and businesses needs to
            change the way they work. So this is not only about privacy and security of personal information but
            business issue.
          </p>

          <!-- <p>As per Article 46 of GDPR</p> -->

          <p>United states is also moving with same intent and California becomes first state to enforce stringent
            privacy law. On 29 th June 2018 California has passed a digital privacy law granting consumers more control
            over and insight into the spread of their personal information online, creating one of the most significant
            regulations overseeing the data-collection practices of technology companies in the United States.</p>
          <p>India privacy law (DISHA) for health care data is similar to EU GDPR and is about to get enforced in INDIA.
            Enhanced protection of digital health data aims to protect the storage, use and transfer of digital health
            data and provides for e-health data privacy, confidentiality, security and standardization. The legislation
            ensures protection of digital health data of a data owner at every step, including at the time of
            generation, collection, storage and transmission of such e-health data.</p>

            <p>
          Rest of the world is also following same path , so it is important businesses changes the way they work.
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