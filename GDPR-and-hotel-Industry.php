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
          <h2>GDPR and Hotel Industry</h2>
          <p>
            With the evolvement of GDPR one of the major industry which needs huge structural changes are hospitality
            sector. This is due to massive personal information including child information they carry due to their
            business model.
          </p>

          <!-- <p>As per Article 46 of GDPR</p> -->

          <p>One needs to understand that GDPR is not only data or privacy issues but an business issue hence
            restricting of all processing activities are required to avoid non compliance.</p>

          <p>For example : One processing activity of any business is Business Development. The way it needs to be
            carried on is either by email or voice calling . Both of these activities are in breach of law unless
            restructured in GDPR framework . For this one needs to cleanse their data to make sure they have right legal
            basis (consent or legitimate interest) for all data sets . In case consent is difficult to get then
            appropriate LIA (Legitimate interest assessment ) needs to be conducted before processing (i.e. using that
            database). More importantly consents or communications should clearly state data subject rights and should
            be in GDPR framework.</p>
          <p>Once you have legitimate database then that become treasure and security of data base require stringent
            organization and IT control. Business owners must know the implications of breach of data which can easily
            happen in current IT control regime they follow.</p>

          <p>You can see from this example that structural changes are required in business processing and IT controls
            are only small part of that.</p>

          
          <p>One need to work on principal of data minimization (article 5 of GDPR) where in you may need to prove
            requirement of every PI information you may hold about an individual . As per law you should not collect any
            PI or SPII information which is not required in your process . Do note HSBC back office stopped take Gender
            information as they were unable to prove requirement of gender information in their process.</p>

          <p>This way all processing activities are required a great overhaul to be compliant with GDPR which is
            becoming standard norm across the globe. 16th July 2018 TRAI guidelines also emphasize on data of individual
            and suggested similar norms as suggested in EU GDPR.</p>
          <p>India is also expecting their privacy law any time and such a major overhaul in business activities will
            take time , so it is important for large businesses to relook how they are operating and better to start
            change now.</p>


            <p>
            Do <a href="contact.php"><strong>contact us</strong></a> if you wish to have GDPR compliance solution for your business and help your organization Stay One Step Ahead !
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