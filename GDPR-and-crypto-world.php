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
          <h2>GDPR and Crypto world</h2>
          <!-- <h6>New requirements for Data processors under the GDPR</h6> -->
          <p>
            GDPR have huge impact on Crypto Exchanges. Due to easy acceptance and support from local government crypto
            exchanges across the world are moving towards European Union and as seen in practice exchanges have huge
            subscriber base thus carry huge PII and SPII information.
          </p>

          <!-- <h5>HR and recruitment</h5> -->

          <p>It is imperative for exchanges to get their business compliant for GDPR and address data subject rights in
            correct way through their public platforms . Unlike other social mediums subscribers of Crypto Exchanges
            spend more time on those apps for trading purpose thus Exchanges who can prove compliance to their users
            will attract more footfall then others .</p>
          <!-- <h5>Fund Raising</h5> -->

          <p>It is important for exchanges to understand the implications of GDPR as they use Vendors for certain
            processes and PI information of their subscribers moves to their vendors as well causing bigger risk of
            breach in future .
          </p>

          <!-- <h5>Website /portal/software</h5> -->

          <p>Being controller of their processes it is responsibility of Exchanges to ensure their vendors are also
            compliant .
          </p>
         <p>The Key Question is ARE YOU READY?</p>
          <p>
            Do <a href="contact.php"><strong>contact us</strong> for more information on how GDPR Consultants offerings can help your organization Stay One Step Ahead !</a>
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