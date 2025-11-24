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
          <h2>GDPR and certifications</h2>
          <!-- <h6>New requirements for Data processors under the GDPR</h6> -->
          <p>
            There is confusion among people that certain certifications like ISO 27001 means GDPR. GDPR is compliance
            and as of today there is no certification which can prove companies are GDPR compliant.
          </p>

          <!-- <p>As per Article 46 of GDPR</p> -->

          <p>it’s important to remember that ISO 27001 covers a very specific area of data security. And while this
            certification can be valuable from a GDPR perspective, it shouldn’t be viewed as an ‘automatic passport’ to
            full GDPR compliance.</p>
          <!-- <h6>In addition, all processors are required to:</h6> -->

          <p>In its Article 32, the GDPR states that organizations “…shall implement appropriate technical and
            organizational measures to ensure a level of security appropriate to the risk…” It also mandates other
            security-related points. As the leading international standard and certification for information security,
            ISO 27001 is an ideal choice of a framework to support GDPR compliance. It’s important to remember that ISO
            27001 covers a very specific area viz data security. Data security is less than 5% of the work organisations
            will have to perform to bring themselves into compliance with GDPR. And while this certification can be
            valuable from a GDPR perspective, it shouldn’t be viewed as an ‘automatic passport’ to full GDPR compliance.
          </p>

          <p>In crux GDPR consists of 99 Articles. As we’ve seen, just one of those covers technical and organisational
            data security measures. In other words, there’s much more to full GDPR compliance than ensuring your
            information security management system is up to level.
          </p>

          <p>
            Do <a href="contact.php"><strong>contact us</strong> for more information on how GDPR Consultants offerings can help your organization Stay One Step Ahead !.</a>
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