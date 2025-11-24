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
          <h2>GDPR and business discontinuity</h2>
          <!-- <h6>New requirements for Data processors under the GDPR</h6> -->
          <p>
            First effect of GDPR compliance for Indian companies is business discontinuity. As it is getting difficult
            to approach EU data subjects for anything , Indian companies need to find a legal way to approach EU data
            subjects.
          </p>

          <!-- <p>As per Article 46 of GDPR</p> -->

          <p>Issue is what to use and when to use. Options left are either consent or legitimate interest as legal basis
            for business activity. Law says legal basis needs to be setup before taking business activity on floor i.e.
            before you pick your phone and ready to send mail you need to ascertain Legal basis.</p>
          <!-- <h6>In addition, all processors are required to:</h6> -->

          <p>If one uses consent then "'consent' of the data subject means any freely given, specific, informed and
            unambiguous indication of the data subject's wishes by which he or she, by a statement or by a clear
            affirmative action, signifies agreement to the processing of personal data relating to him or her"
          </p>

          <p>If one uses legitimate interest then Balance the interests of yours with interests of data subject. Assess
            whether the yours interest is overridden by fundamental rights and interests of the data subject. It is
            important to look at the impact on data subjects, the way the data is being processed and the reasonable
            expectations of data subjects. Remember that the rights of the individual are paramount to that of yours.
          </p>
          <p>If these two options are left to ascertain legal basis then how to use them ? how to redefine email so it
            becomes GDPR compliant? How to approach your clients now? How to deal if your prospective client invoke
            right to be forgotten?</p>

          <p>
            Do <a href="contact.php"><strong>contact us</strong> if you wish to have GDPR compliance solution for your
              business and help your organization Stay One Step Ahead !</a>
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
            Connect with us today and take the first step toward seamless GDPR compliance and stronger data protection
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