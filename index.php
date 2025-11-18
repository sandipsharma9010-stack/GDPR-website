<?php $page = "index"; ?>
<?php include_once('header.php'); ?>
<section data-ns-animate data-offset="0"
  class="relative overflow-hidden pt-[200px] 2xl:pt-[250px] pb-16 lg:pb-[100px] bg-background-3 dark:bg-background-5">
  <!-- BG Dot -->
  <div data-ns-animate data-delay="1" data-duration="2" data-spring data-offset="0"
    class="absolute animate-pulse -z-0 max-md:w-full top-[10%] lg:top-[12%] left-1/2 -translate-x-1/2">
    <img src="images/gradient/hero-dot-bg.png" alt="Hero background" class="w-full h-full object-cover" />
  </div>

  <!-- column background -->
  <div class="absolute -z-0 left-[50%] -translate-x-1/2 top-5 h-full main-container flex justify-between gap-[239px]">
    <div data-hero-line
      class="w-px bg-gradient-to-b from-stroke-1 to-stroke-1/30 dark:from-stroke-5 dark:to-stroke-5/30 h-0"></div>
    <div data-hero-line
      class="w-px bg-gradient-to-b from-stroke-1 to-stroke-1/30 dark:from-stroke-5 dark:to-stroke-5/30 h-0"></div>
    <div data-hero-line
      class="w-px bg-gradient-to-b from-stroke-1 to-stroke-1/30 dark:from-stroke-5 dark:to-stroke-5/30 h-0"></div>
    <div data-hero-line
      class="w-px bg-gradient-to-b from-stroke-1 to-stroke-1/30 dark:from-stroke-5 dark:to-stroke-5/30 h-0"></div>
    <div data-hero-line
      class="w-px bg-gradient-to-b from-stroke-1 to-stroke-1/30 dark:from-stroke-5 dark:to-stroke-5/30 h-0"></div>
    <div data-hero-line
      class="w-px bg-gradient-to-b from-stroke-1 to-stroke-1/30 dark:from-stroke-5 dark:to-stroke-5/30 h-0"></div>
  </div>

  <!-- Content -->
  <div class="main-container flex flex-col items-center text-center relative z-20">
    <!-- Decorative Hero Assets -->
    <figure data-ns-animate data-delay="0.1" data-duration="2" data-spring
      class="absolute -top-[12%] sm:-top-[15%] lg:-top-[5%] -left-[3%] lg:-left-[1%] min-[1535px]:!-left-[10%] min-[1735px]:!-left-[16%] w-[150px] sm:w-[200px] lg:w-[220px] xl:w-[350px] 2xl:w-fit rotate-[-7deg]">
      <img src="images/home-page-1/home1.svg" alt="Hero asset 1"
        class="w-full h-full object-cover dark:hidden inline-block rounded-2xl" />
      <img src="images/home-page-1/home1.svg" alt="Hero asset 1"
        class="w-full h-full object-cover hidden dark:inline-block" />
    </figure>
    <figure data-ns-animate data-delay="0.2" data-duration="2" data-spring
      class="absolute md:bottom-[67%] lg:bottom-[52%] xl:bottom-[30%] min-[1535px]:!bottom-[18%] min-[1735px]:!bottom-[18%] md:left-[1%] lg:left-[2%] min-[1535px]:!-left-[5%] min-[1735px]:!-left-[12.5%] hidden md:block md:w-[140px] lg:w-[180px] xl:w-[250px] 2xl:w-[275px] rotate-[11deg]">
      <img src="images/home-page-1/Home2.svg" alt="Hero asset 2"
        class="w-full h-full object-cover dark:hidden inline-block shadow-none outline-0" />
      <img src="images/home-page-1/Home2.svg" alt="Hero asset 2"
        class="w-full h-full object-cover hidden dark:inline-block shadow-none outline-0" />
    </figure>
    <figure data-ns-animate data-delay="0.1" data-duration="2" data-spring
      class="absolute -top-[12%] sm:-top-[14%] lg:-top-[1.4%] xl:top-[5%] 2xl:top-[1%] right-[4%] lg:right-[2%] xl:right-[3%] 2xl:-right-[8.0%] w-[120px] md:w-[140px] lg:w-[170px] xl:w-[200px] 2xl:w-[280px] rotate-[4deg]">
      <img src="images/home-page-1/Home3.svg " alt="Hero asset 3"
        class="w-full h-full object-cover dark:hidden inline-block rounded-2xl" />
      <img src="images/home-page-1/Home3.svg" alt="Hero asset 3"
        class="w-full h-full object-cover hidden dark:inline-block rounded-2xl" />
    </figure>
    <figure data-ns-animate data-delay="0.2" data-duration="2" data-spring
      class="absolute md:bottom-[67%] lg:bottom-[57%] xl:bottom-[41%] 2xl:bottom-[20%] right-[4%] lg:right-[1%] xl:-right-[1%] min-[1535px]:!-right-[12%] min-[1735px]:!-right-[18%] hidden md:block md:w-[140px] lg:w-[180px] xl:w-[250px] 2xl:w-fit rotate-[-7deg]">
      <img src="images/home-page-1/home4.svg" alt="Hero asset 4"
        class="w-full h-full object-cover dark:hidden inline-block rounded-2xl" />
      <img src="images/home-page-1/home4.svg" alt="Hero asset 4"
        class="w-full h-full object-cover hidden dark:inline-block rounded-2xl" />
    </figure>

    <span class="badge badge-green mb-5 opacity-0" data-ns-animate data-delay="0.05">
      AI Enable Privacy Automation Suite
    </span>
    <h1 class="font-medium mb-4 opacity-0" data-ns-animate data-delay="0.1">
      Data Privacy <span class="text-primary-500">Automation</span>
      <br class="hidden md:block" />
      Solutions
    </h1>
    <p class="max-w-[700px] mb-7 md:mb-10 lg:mb-14" data-ns-animate data-delay="0.2">
      GDPR Consultants’ Data Privacy Automation Solutions is a complete suite of tools designed to simplify GDPR
      compliance. From consent management and rights handling to impact assessments, third-party oversight, and cookie
      compliance — everything you need in one platform.
    </p>
    <ul class="flex flex-col md:flex-row gap-4 mb-9 md:mb-11 lg:mb-14 max-md:w-full md:w-auto mx-auto md:mx-0">
      <li data-ns-animate data-delay="0.3" data-direction="left" data-offset="50">
        <a href="contact.php"
          class="btn btn-primary hover:btn-white-dark dark:hover:btn-white btn-lg md:btn-xl w-full md:w-auto mx-auto md:mx-0">
          <span>Get started</span>
        </a>
      </li>
      <!-- <li data-ns-animate data-delay="0.5" data-direction="left" data-offset="50">
        <a href="contact.php"
          class="btn btn-white hover:btn-primary dark:btn-white-dark btn-lg md:btn-xl w-full md:w-auto mx-auto md:mx-0">
          <span>Free trial</span>
        </a>
      </li> -->
    </ul>

    <!-- Avatars and Trust Indicator -->
    <!-- <div class="flex max-[375px]:flex-col items-center justify-center gap-4 mb-20 lg:mb-[100px]">
      <div class="flex -space-x-3.5">
        <img data-ns-animate data-delay="0.2" data-direction="right" data-offset="50"
          class="inline-block size-12 rounded-full ring-2 ring-white dark:ring-black bg-ns-green"
          src="images/avatar/avatar-1.png" alt="Avatar 1" />
        <img data-ns-animate data-delay="0.3" data-direction="right" data-offset="50"
          class="inline-block size-12 rounded-full ring-2 ring-white dark:ring-black bg-ns-green"
          src="images/avatar/avatar-2.png" alt="Avatar 2" />
        <img data-ns-animate data-delay="0.4" data-direction="right" data-offset="50"
          class="inline-block size-12 rounded-full ring-2 ring-white dark:ring-black bg-ns-green"
          src="images/avatar/avatar-3.png" alt="Avatar 3" />
        <div data-ns-animate data-delay="0.5" data-direction="right" data-offset="50"
          class="inline-flex items-center justify-center size-12 rounded-full ring-2 ring-white dark:ring-black text-secondary/80 bg-ns-green text-tagline-3 font-medium">
          99+
        </div>
      </div> -->
    <!-- <div data-ns-animate data-delay="0.6" data-direction="right" data-offset="50"
        class="text-left max-[375px]:text-center">
        <p class="text-tagline-2 font-medium block text-secondary dark:text-accent">
          Trusted by 20k+
        </p>
        <p class="text-tagline-3">Customers across the globe</p>
      </div> -->
  </div>

  <!-- Client Logos -->
  <div data-ns-animate data-instant="true" data-delay="0.6"
    class="relative xl:w-[1100px] lg:w-[1024px] md:w-[908px] sm:w-[640px] w-[375px] mx-auto">
    <div
      class="absolute left-0 top-0 h-full w-[30%] bg-gradient-to-r from-background-3 to-transparent dark:from-background-5 z-40">
    </div>
    <div
      class="absolute right-0 top-0 h-full w-[30%] bg-gradient-to-l from-background-3 to-transparent dark:from-background-5 z-40">
    </div>
    <div class="logos-marquee-container">
      <div class="flex items-center justify-center gap-8">
        <figure class="w-28 md:w-36 ml-8">
          <img src="images/icons/1.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/1.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/2.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/2.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/3.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/3.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/4.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/4.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/5.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/5.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/6.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/6.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/7.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/7.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/8.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/8.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
        <figure class="w-28 md:w-36">
          <img src="images/icons/9.svg" alt="Client logo" class="lg:w-auto inline-block dark:hidden" />
          <img src="images/icons/9.svg" alt="Client logo" class="lg:w-auto hidden dark:inline-block" />
        </figure>
      </div>
    </div>
  </div>
  </div>
</section>

<!--===============================
 About Section 
===================================-->
<section data-ns-animate data-delay="0.3"
  class="bg-white dark:bg-background-6 pt-20 lg:pt-[88px] xl:pt-[100px] sm:pb-36 pb-14 xl:pb-[176px] overflow-hidden">
  <div class="main-container">
    <!-- TabBar small screen -->
    <div
      class="tab-mobile flex items-center justify-start flex-wrap lg:hidden gap-4 mb-14 lg:mb-[72px] sm:max-w-[500px] sm:mx-auto">
      <button
        class="px-3.5 py-2 min-w-16 cursor-pointer text-tagline-2 font-medium text-secondary/60 dark:text-accent/60 border border-stroke-2 dark:border-stroke-7 rounded-full dark:bg-background-7">
        CMP
      </button>
      <button
        class="px-3.5 py-2 min-w-16 cursor-pointer text-tagline-2 font-medium text-secondary/60 dark:text-accent/60 border border-stroke-2 dark:border-stroke-7 rounded-full dark:bg-background-7">
        DSRGM
      </button>
      <button
        class="px-3.5 py-2 min-w-16 cursor-pointer text-tagline-2 font-medium text-secondary/60 dark:text-accent/60 border border-stroke-2 dark:border-stroke-7 rounded-full dark:bg-background-7">
        DPIA
      </button>
      <button
        class="px-3.5 py-2 min-w-16 cursor-pointer text-tagline-2 font-medium text-secondary/60 dark:text-accent/60 border border-stroke-2 dark:border-stroke-7 rounded-full dark:bg-background-7 text-nowrap">
        DPTPA
      </button>

      <button
        class="px-3.5 py-2 min-w-16 cursor-pointer text-tagline-2 font-medium text-secondary/60 dark:text-accent/60 border border-stroke-2 dark:border-stroke-7 rounded-full dark:bg-background-7 text-nowrap">
        CCM
      </button>
    </div>

    <!-- TabBar large screen -->
    <div role="tablist" class="tab-bar hidden lg:flex justify-center items-center  mb-14 lg:mb-[72px] relative">
      <!-- active-tab-bar  -->
      <div class="active-tab-bar"></div>

      <button
        class="py-3 dark:bg-background-6  cursor-pointer focus-visible:outline-0 px-10 -mb-px data-[state=selected]:text-secondary text-secondary/60 ">
        <span class="text-tagline-1 dark:text-white font-medium">CMP</span>
      </button>

      <button
        class="py-3 dark:bg-background-6 cursor-pointer focus-visible:outline-0 px-10 -mb-px data-[state=selected]:text-secondary text-secondary/60 ">
        <span class="text-tagline-1 dark:text-white font-medium">DSRGM </span>
      </button>
      <button
        class="py-3 dark:bg-background-6 cursor-pointer focus-visible:outline-0 px-10 -mb-px data-[state=selected]:text-secondary text-secondary/60 ">
        <span class="text-tagline-1 dark:text-white font-medium">DPIA </span>
      </button>
      <button
        class="py-3 dark:bg-background-6 cursor-pointer focus-visible:outline-0 px-10 -mb-px data-[state=selected]:text-secondary text-secondary/60">
        <span class="text-tagline-1 dark:text-white font-medium">DPTPA </span>
      </button>
      <button
        class="py-3 dark:bg-background-6 cursor-pointer focus-visible:outline-0 px-10 -mb-px data-[state=selected]:text-secondary text-secondary/60">
        <span class="text-tagline-1 dark:text-white font-medium">CCM</span>
      </button>
    </div>
    <!-- Tab Content-1 -->
    <div class="tab-content" data-display="flex">
      <div class="flex flex-col justify-between lg:flex-row items-start gap-y-14 gap-x-24 w-full">
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <span class="badge badge-green mb-3.5 xl:mb-5"> About </span>
          <h2 class="mb-3 lg:text-heading-2 text-heading-4">
            Consent Management <br class="hidden lg:block" />

            <span class="text-primary-500">Platform</span>
          </h2>
          <p class="mb-6 xl:mb-8 lg:max-w-[478px]">
            A core module of Data Privacy Automation Solutions that helps you capture, track, and manage lawful user
            consent with full transparency.
          </p>
          <h6>Key Features:</h6>
          <ul class="space-y-1.5 mb-7 xl:mb-14">
            <li class="flex items-center gap-4 list-none py-2">
              <!-- <span class="ns-shape-6 text-[36px] text-secondary dark:text-white"></span> -->
              <img src="images/home-page-1/1b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/1.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />

              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Granular Consent Tracking
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Capture and manage multi-level consent.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/2b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/2.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Easy Withdrawal Support
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Enable seamless consent revocation.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/3b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/3.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Audit-Ready Logs
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Maintain verifiable records for regulators.
                </p>
              </div>
            </li>
          </ul>
          <div>
            <a href="./consent-management-tool.php"
              class="btn btn-white btn-lg md:btn-xl dark:btn-transparent hover:btn-primary w-full md:w-auto">
              <span>Learn More</span>
            </a>
          </div>
        </div>
        <!-- About Image -->
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <div class="flex items-center justify-center">
            <figure class="lg:inline-block">
              <img src="images/home-page-1/consent.svg" alt="Happy man using phone" class="w-fit object-cover" />
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!-- Tab Content-2 -->
    <div class="tab-content hidden" data-display="flex">
      <div class="flex flex-col lg:flex-row items-start w-full gap-x-24 gap-y-16">
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <span class="badge badge-green mb-5"> About </span>
          <h2 class="mb-3">
            Data Subject Rights &
            <span class="text-primary-500 inline-block">Grievance Management.</span>
          </h2>

          <p class="mb-8 lg:max-w-[478px]">
            Part of the Data Privacy Automation Solutions suite, DSRGM helps organizations process rights requests and
            resolve grievances transparently and on time.
          </p>

          <h6>Key Features:</h6>
          <ul class="space-y-1.5 mb-7 md:mb-14">
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/4b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/4.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Streamlined Rights Requests
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Handle DSARs for access, rectification, erasure, etc.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/5b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/5.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Timely Redressal Workflow
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Meet GDPR’s one-month resolution timelines.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/6b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/6.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Automated Case Tracking
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Track and resolve requests seamlessly.
                </p>
              </div>
            </li>
          </ul>
          <div>
            <a href="./data-protection-third-party.php"
              class="btn btn-white btn-lg md:btn-xl dark:btn-transparent hover:btn-primary w-full md:w-auto">
              <span>Learn More</span>
            </a>
          </div>
        </div>
        <!-- About Image -->
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <div class="flex items-center justify-center">
            <figure class="tab-item-image">
              <img src="images/home-page-1/consent.svg" alt="Happy man using phone" />
            </figure>
          </div>
        </div>
      </div>
    </div>
    <!-- Tab Content-3 -->
    <div class="tab-content hidden" data-display="flex">
      <div class="flex flex-col lg:flex-row items-start w-full gap-x-24 gap-y-16">
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <span class="badge badge-green mb-5"> About </span>
          <h2 class="mb-3">
            Data Protection Impact

            <span class="text-primary-500">Assessment.</span>
          </h2>
          <p class="mb-8 lg:max-w-[478px]">
            With GDPR Consultants’ Data Privacy Automation Solutions, conduct structured DPIAs to identify, assess, and
            mitigate data risks.
          </p>
          <h6>Key Features:</h6>
          <ul class="space-y-1.5 mb-7 md:mb-14">
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/7b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/7.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Risk Identification Matrix
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Spot high-risk processing.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/8b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/8.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Mitigation Planning Tools
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Document and address risks.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/9b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/9.svg" alt="Icon" class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Regulator-Ready Reports
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Generate compliant DPIA outputs.
                </p>
              </div>
            </li>
          </ul>
          <div>
            <a href="./data-subject-rights-and-grievance-management.php"
              class="btn btn-white btn-lg md:btn-xl dark:btn-transparent hover:btn-primary w-full md:w-auto">
              <span>Learn More</span>
            </a>
          </div>
        </div>
        <!-- About Image -->
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <figure class="tab-item-image">
            <img src="images/home-page-1/consent.svg" alt="Happy man using phone" />
          </figure>
        </div>
      </div>
    </div>
    <!-- Tab Content-4 -->
    <div class="tab-content hidden" data-display="flex">
      <div class="flex flex-col lg:flex-row items-start w-full gap-y-16 gap-x-24">
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <span class="badge badge-green mb-5"> About </span>
          <h2 class="mb-3">
            Data Protection Third Party

            <span class="text-primary-500">Assessment!</span>
          </h2>
          <p class="mb-8 lg:max-w-[478px]">
            Ensure your vendors and partners meet GDPR obligations with DPTPA, a critical part of the Data Privacy
            Automation Solutions suite.
          </p>
          <h6>Key Features:</h6>
          <ul class="space-y-1.5 mb-7 md:mb-14">
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/10b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/10.svg" alt="Icon"
                class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Vendor Risk Evaluation
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Assess third-party GDPR readiness.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/11b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/11.svg" alt="Icon"
                class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Contractual Safeguard Checks
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Verify data protection clauses.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/12b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/12.svg" alt="Icon"
                class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Continuous Monitoring
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Continuous Monitoring
                </p>
              </div>
            </li>
          </ul>
          <div>
            <a href="./data-protection-impact-assessment.php"
              class="btn btn-white btn-lg md:btn-xl dark:btn-transparent hover:btn-primary w-full md:w-auto">
              <span>Learn More</span>
            </a>
          </div>
        </div>
        <!-- About Image -->
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <figure class="tab-item-image">
            <img src="images/home-page-1/consent.svg" alt="Happy man using phone" />
          </figure>
        </div>
      </div>
    </div>






    <div class="tab-content hidden" data-display="flex">
      <div class="flex flex-col lg:flex-row items-start w-full gap-y-16 gap-x-24">
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <span class="badge badge-green mb-5"> About </span>
          <h2 class="mb-3">
            Cookie Consent

            <span class="text-primary-500">Manager</span>
          </h2>
          <p class="mb-8 lg:max-w-[478px]">
            Description: GDPR Consultants’ Data Privacy Automation Solutions includes CCM for compliant cookie banners,
            consent tracking, and ePrivacy alignment — with preferences instantly updated across analytics and ad
            platforms via integrations and webhooks.
          </p>
          <h6>Key Features:</h6>
          <ul class="space-y-1.5 mb-7 md:mb-14">
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/13b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/13.svg" alt="Icon"
                class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Customizable Consent Banners
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Align banners with brand identity.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/14b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/14.svg" alt="Icon"
                class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Granular Cookie Categories
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Allow detailed user preferences.
                </p>
              </div>
            </li>
            <li class="flex items-center gap-4 list-none py-2">
              <img src="images/home-page-1/15b.svg" alt="Icon" class="w-[36px] h-[36px] object-cover dark:hidden" />
              <img src="images/home-page-1/15.svg" alt="Icon"
                class="w-[36px] h-[36px] object-cover hidden dark:block" />
              <div>
                <strong class="text-tagline-1 font-medium text-secondary dark:text-accent">Real-Time Consent Updates
                </strong>
                <p class="text-secondary/60 text-tagline-2 font-normal dark:text-accent/60">
                  Instantly reflect user changes.
                </p>
              </div>
            </li>
          </ul>
          <div>
            <a href="./cookie-consent-management.php"
              class="btn btn-white btn-lg md:btn-xl dark:btn-transparent hover:btn-primary w-full md:w-auto">
              <span>Learn More</span>
            </a>
          </div>
        </div>
        <!-- About Image -->
        <div class="flex-1 lg:max-w-full sm:max-w-[500px] sm:mx-auto">
          <figure class="tab-item-image">
            <img src="images/home-page-1/consent.svg" alt="Happy man using phone" />
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="pb-[200px] pt-[100px]" aria-label="Features">
  <div class="main-container">
    <div class="space-y-[70px]">
      <!-- feature heading  -->
      <div class="space-y-3 text-center">
        <h2 data-ns-animate data-delay="0.3" class="max-w-[814px] mx-auto">
          Is Your Organization’s Data Privacy Program AI Ready?
        </h2>
        <p data-ns-animate data-delay="0.4" class="max-w-[734px] mx-auto">
          Introducing the <strong>Data Privacy Automation Suite — </strong> designed for seamless use with any AI agent
          framework. Transform your privacy management with intelligent automation that responsibly collects data,
          supports compliance decisions, and programmatically enforces policies at the pace of automation.
        </p>

        <!-- <h4 data-ns-animate data-delay="0.3" class="max-w-[814px] mx-auto">
          Why Choose AI-Enabled Privacy Automation?
        </h4> -->
      </div>

      <!-- feature cards  -->
      <!-- 1st row cards  -->
      <div class="flex flex-col sm:flex-row items-center justify-center gap-y-8 sm:gap-x-8">
        <!-- card one  -->
        <div data-ns-animate data-delay="0.5" class="space-y-3">
          <!-- card img  -->
          <div class="max-w-[409px] w-full rounded-[20px] bg-white dark:bg-background-5 p-2.5">
            <figure class="overflow-hidden p-4 bg-background-3 dark:bg-background-7 rounded-2xl">
              <img src="images/home-page-9/aI-driven.svg" alt="Fast and secure cloud upload feature"
                class="w-full h-full object-cover dark:hidden" loading="lazy" />
              <img src="images/home-page-9/aI-driven.svg" alt="Fast and secure cloud upload feature"
                class="w-full h-full object-cover hidden dark:block" loading="lazy" />
            </figure>
          </div>

          <!-- card content  -->
          <div class="space-y-1">
            <h3 class="text-heading-5">AI-Driven Risk Decisions</h3>
            <p>Evaluate privacy and compliance risks in real time using AI agents.</p>
          </div>
        </div>

        <!-- card two  -->
        <div data-ns-animate data-delay="0.6" class="space-y-3">
          <!-- card img  -->
          <div class="max-w-[409px] w-full rounded-[20px] bg-white dark:bg-background-5 p-2.5">
            <figure class="overflow-hidden p-4 bg-background-3 dark:bg-background-7 rounded-2xl">
              <img src="images/home-page-9/AI-Enable-Consent.svg" alt="Automated workflows feature"
                class="w-full h-full object-cover dark:hidden" loading="lazy" />
              <img src="images/home-page-9/AI-Enable-Consent.svg" alt="Automated workflows feature"
                class="w-full h-full object-cover hidden dark:block" loading="lazy" />
            </figure>
          </div>

          <!-- card content  -->
          <div class="space-y-1">
            <h3 class="text-heading-5">Programmatic Enforcement </h3>
            <p>Automatically enforce policies and data subject rights across systems and platforms.</p>
          </div>
        </div>

        <!-- card three  -->
        <div data-ns-animate data-delay="0.7" class="space-y-3">
          <!-- card img  -->
          <div class="max-w-[409px] w-full rounded-[20px] bg-white dark:bg-background-5 p-2.5">
            <figure class="overflow-hidden p-4 bg-background-3 dark:bg-background-7 rounded-2xl">
              <img src="images/home-page-9/accelerate.svg" alt="Smart search and AI insights feature"
                class="w-full h-full object-cover dark:hidden" loading="lazy" />
              <img src="images/home-page-9/accelerate.svg" alt="Smart search and AI insights feature"
                class="w-full h-full object-cover hidden dark:block" loading="lazy" />
            </figure>
          </div>

          <!-- card content  -->
          <div class="space-y-1">
            <h3 class="text-heading-5">Accelerate Innovation</h3>
            <p>Scale privacy programs without slowing down business growth.</p>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<section class="py-20 lg:py-[0px] bg-background-3 dark:bg-background-5 overflow-hidden">
  <div class="main-container flex flex-col lg:flex-row justify-between gap-12 items-center">
    <div>
      <span data-ns-animate data-delay="0.1" class="badge badge-green mb-5">
        Reasons to select us
      </span>
      <h2 data-ns-animate data-delay="0.2" class="mb-3">
        AI Agent Enabled

        <br class="hidden lg:block" />
        Platform
      </h2>
      <p data-ns-animate data-delay="0.3" class="lg:max-w-[536px]">
        Unlock the future of privacy with AI Agent Enabled Platform where compliance meets intelligence.
      </p>
      <!-- <ul class="space-y-1 mt-8 lg:mt-14">
        <li data-ns-animate data-delay="0.4" class="flex items-center gap-4 list-none py-2">
          <span class="ns-shape-8 text-[36px] text-secondary dark:text-accent"> </span>
          <strong class="text-tagline-1 font-medium text-secondary dark:text-accent"
            >A version for offline use is available.</strong
          >
        </li>
        <li data-ns-animate data-delay="0.5" class="flex items-center gap-4 list-none py-2">
          <span class="ns-shape-9 text-[36px] text-secondary dark:text-accent"> </span>

          <strong class="text-tagline-1 font-medium text-secondary dark:text-accent"
            >Designed to be both scalable and secure.</strong
          >
        </li>
        <li data-ns-animate data-delay="0.6" class="flex items-center gap-4 list-none py-2">
          <span class="ns-shape-12 text-[36px] text-secondary dark:text-accent"> </span>

          <strong class="text-tagline-1 font-medium text-secondary dark:text-accent"
            >Feature powered by artificial intelligence.</strong
          >
        </li>
        <li data-ns-animate data-delay="0.7" class="flex items-center gap-4 list-none py-2">
          <span class="ns-shape-21 text-[36px] text-secondary dark:text-accent"> </span>

          <strong class="text-tagline-1 font-medium text-secondary dark:text-accent"
            >It offers both scalability and robust security.</strong
          >
        </li>
      </ul> -->
    </div>
    <div class="relative">

      <video src="video/Chatbot-ai.mp4" controls class="w-[1100px] h-[600px] rounded-lg shadow-lg">
        Your browser does not support the video tag.
      </video>
      <!-- <figure
        data-ns-animate
        data-delay="0.2"
        data-direction="up"
        data-offset="150"
        class="rounded-[20px] max-w-[735px] w-full h-full object-cover"
      >
        <img
          src="images/home-page-7/transaction-ring.png"
          alt="transaction-statistics"
          class="block dark:hidden size-full object-cover"
        />
        <img
          src="images/home-page-7/transaction-ring-dark.png"
          alt="transaction-statistics"
          class="hidden dark:block size-full object-cover"
        />
      </figure>
      <figure
        data-ns-animate
        data-delay="0.5"
        data-direction="right"
        data-offset="100"
        data-spring="true"
        data-duration="2"
        class="rounded-[20px] overflow-hidden absolute top-[15%] right-6 md:right-0 max-w-[140px] md:max-w-[253px] lg:max-w-[200px] xl:max-w-[253px] w-full"
      >
        <img
          src="images/home-page-25/transaction-chart.svg"
          alt="features"
          class="w-full h-full object-cover inline-block dark:hidden"
        />
        <img
          src="images/home-page-25/transaction-chart-dark.svg"
          alt="features"
          class="w-full h-full object-cover hidden dark:block"
        />
      </figure>
      <div
        data-ns-animate
        data-delay="1.3"
        data-direction="up"
        data-offset="100"
        data-spring="true"
        data-duration="2"
        class="absolute top-[20%] right-0 xl:-right-[4%] w-[92px] z-10"
      >
        <div
          class="text-heading-6 md:text-heading-5 font-normal flex items-center justify-center -rotate-[14deg] py-1 px-2 bg-ns-yellow rounded-[8px]"
        >
          <span
            data-counter
            data-number="20"
            data-speed="2000"
            data-delay="1"
            data-interval="200"
            data-rooms="2"
            >20</span
          >%
        </div>
      </div>
      <figure
        data-ns-animate
        data-delay="0.7"
        data-direction="right"
        data-offset="100"
        data-spring="true"
        data-duration="2"
        class="rounded-[20px] overflow-hidden absolute bottom-0 sm:bottom-10 md:bottom-[10%] right-0 shadow-3 max-w-[200px] sm:max-w-[320px] md:max-w-[395px] w-full"
      >
        <img
          src="images/home-page-26/profit-chart.png"
          alt="features"
          class="w-full h-full dark:hidden"
        />
        <img
          src="images/home-page-9/select-us-img-02-dark.png"
          alt="features"
          class="w-full h-full hidden dark:block"
        />
      </figure> -->
    </div>
  </div>
</section>

<!-- =========================
How it works section
===========================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div data-ns-animate data-delay="0.1"
    class="2xl:max-w-[1440px] max-w-[1290px] mx-5 text-center xl:mx-auto rounded-4xl py-16 lg:py-28 -z-0 bg-secondary dark:bg-background-8 overflow-hidden relative">
    <!-- background image  -->
    <div data-ns-animate data-delay="0.3" data-duration="2" data-spring data-direction="right" data-offset="50"
      class="absolute max-[400px]:-right-[32%] max-[400px]:-top-[20%] -top-[31%] -right-[40%] sm:-right-[20%] md:-right-[28%] lg:-right-[20%] xl:-right-[12%] max-w-[530px] rotate-90 md:rotate-[108deg] select-none pointer-events-none">
      <img src="images/gradient/gradient-16.png" alt="how-to-work" class="w-full h-full object-cover" />
    </div>
    <!-- Gradient  -->
    <div
      class="absolute bg-(image:--color-gradient-5) blur-[85px] -rotate-[50deg] z-10 left-[28%] -top-[22%] w-[108px] h-[982px]">
    </div>
    <div
      class="absolute bg-(image:--color-gradient-5) blur-[85px] -rotate-45 z-10 right-[8%] -top-[22%] w-[108px] h-[982px]">
    </div>

    <!-- Getting Started -->
    <span data-ns-animate data-delay="0.3" class="badge badge-blur mb-3.5 md:mb-5 text-ns-yellow">How it works</span>
    <h2 data-ns-animate data-delay="0.4"
      class="text-white text-center font-normal mb-16 md:mb-[70px] max-[400px]:!max-w-[250px] max-[400px]:mx-auto max-md:max-w-[300px] max-md:mx-auto">
      How GDPR Consultants Works
      <br class="hidden md:block" />
      <!-- <span class="text-primary-500">installation manual.</span> -->
    </h2>

    <!-- Content -->
    <div
      class="flex flex-wrap items-start justify-center text-center md:text-left gap-y-10 gap-x-8 px-6 md:px-8 xl:px-10 mx-auto">
      <div class="max-w-[375px]" data-ns-animate data-duration="0.5" data-delay="0.5">
        <img src="images/home-page-1/16.svg" alt="Icon"
          class="w-[36px] h-[36px] object-cover mx-auto md:mx-0 dark:hidden" />
        <img src="images/home-page-1/16.svg" alt="Icon"
          class="w-[36px] h-[36px] object-cover mx-auto md:mx-0 hidden dark:block" />
        <h3 class="text-heading-6 md:text-heading-5 font-normal mt-4 mb-2 text-white">
          Centralize Compliance Data
        </h3>
        <p class="text-tagline-1 text-accent/60">
          Manage GDPR activities in one dashboard.
        </p>
      </div>

      <div class="max-w-[375px]" data-ns-animate data-duration="0.5" data-delay="0.6">
        <img src="images/home-page-1/17.svg" alt="Icon"
          class="w-[36px] h-[36px] object-cover mx-auto md:mx-0 dark:hidden" />
        <img src="images/home-page-1/17.svg" alt="Icon"
          class="w-[36px] h-[36px] object-cover mx-auto md:mx-0 hidden dark:block" />
        <h3 class="text-heading-6 md:text-heading-5 font-normal mt-4 mb-2 text-white">
          Automate Compliance Processes
        </h3>
        <p class="text-tagline-1 text-accent/60">
          Streamline consent, rights, DPIAs, and vendor checks with AI-enabled workflows and webhook triggers.
        </p>
      </div>

      <div class="max-w-[375px]" data-ns-animate data-duration="0.5" data-delay="0.7">
        <img src="images/home-page-1/18.svg" alt="Icon"
          class="w-[36px] h-[36px] object-cover mx-auto md:mx-0 dark:hidden" />
        <img src="images/home-page-1/18.svg" alt="Icon"
          class="w-[36px] h-[36px] object-cover mx-auto md:mx-0 hidden dark:block" />
        <h3 class="text-heading-6 md:text-heading-5 font-normal mt-4 mb-2 text-white">
          Generate Audit-Ready Reports
        </h3>
        <p class="text-tagline-1 text-accent/60">
          Stay prepared for regulators anytime.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- =========================
Services section
===========================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
  <div class="main-container">
    <div class="text-center space-y-3 mb-14 md:mb-[70px]">
      <span data-ns-animate data-delay="0.3" class="badge badge-green mb-3.5 md:mb-5">
        Key features of our tools (360 solution)
      </span>
      <h2 data-ns-animate data-delay="0.4">
        Data Privacy Automation Solutions <br class="hidden md:block" />
        – 360°
        <span class="text-primary-500 inline-block">Coverage.</span>
      </h2>
      <p data-ns-animate data-delay="0.5" class="lg:max-w-[650px] mx-auto">
        GDPR Consultants’ suite gives you a holistic GDPR toolkit with automation-driven consent, rights management,
        DPIAs, third-party reviews, and cookie compliance — all designed for interoperability via integrations,
        webhooks, and open APIs.
      </p>
    </div>

    <!-- services -->
    <div class="grid grid-cols-12 gap-y-8 md:gap-[42px] sm:gap-6 mb-10 md:mb-14">
      <!-- services card-1 -->
      <div data-ns-animate data-delay="0.6" class="col-span-12 lg:col-span-6 sm:col-span-6">
        <div
          class="bg-white dark:bg-background-6 flex flex-col md:flex-row items-center gap-8 rounded-[20px] py-8 lg:py-14 px-5 md:px-8 overflow-hidden">
          <div class="w-full md:w-1/2 lg:w-auto">
            <div class="inline-block mb-4 lg:mb-6">
              <span class="ns-shape-9 text-[52px] text-secondary dark:text-white"></span>
            </div>
            <h3 class="font-normal text-heading-6 xl:text-heading-5 md:text-heading-6 mb-2">
              Unified Platform
            </h3>
            <p class="max-w-[275px] mb-6 md:mb-11">
              Manage all GDPR tasks in one suite.
            </p>


          </div>
          <figure class="w-full md:w-1/2 lg:max-w-[260px] overflow-hidden">
            <img src="images/home-page-1/unified.svg" alt="service-1"
              class="w-full h-auto object-cover dark:hidden inline-block rounded-[12px]" />
            <img src="images/home-page-1/unified.svg" alt="service-1"
              class="w-full h-auto object-cover dark:inline-block hidden rounded-[12px]" />
          </figure>
        </div>
      </div>
      <!-- services card-2 -->
      <div data-ns-animate data-delay="0.7" class="col-span-12 lg:col-span-6 sm:col-span-6">
        <div
          class="bg-white dark:bg-background-6 flex flex-col md:flex-row items-center gap-8 rounded-[20px] py-8 lg:py-14 px-5 md:px-8 overflow-hidden">
          <div class="w-full md:w-1/2 lg:w-auto">
            <div class="inline-block mb-4 md:mb-6">
              <span class="ns-shape-2 text-[52px] text-secondary dark:text-white"></span>
            </div>
            <h3 class="font-normal text-heading-6 xl:text-heading-5 md:text-heading-6 mb-2">
              Seamless Integration
            </h3>
            <p class="max-w-[275px] mb-6 md:mb-11">
              Connect with HR, CRM, and IT systems in real time.
            </p>


          </div>
          <figure class="w-full md:w-1/2 lg:max-w-[253px] rounded-[10px] overflow-hidden">
            <img src="images/home-page-1/seamless.svg" alt="service-1"
              class="w-full h-auto object-cover dark:hidden inline-block rounded-[10px]" />
            <img src="images/home-page-1/seamless.svg" alt="service-1"
              class="w-full h-auto object-cover dark:inline-block hidden rounded-[10px]" />
          </figure>
        </div>
      </div>


      <!-- services card-1 -->
      <div data-ns-animate data-delay="0.6" class="col-span-12 lg:col-span-6 sm:col-span-6">
        <div
          class="bg-white dark:bg-background-6 flex flex-col md:flex-row items-center gap-8 rounded-[20px] py-8 lg:py-14 px-5 md:px-8 overflow-hidden">
          <div class="w-full md:w-1/2 lg:w-auto">
            <div class="inline-block mb-4 lg:mb-6">
              <span class="ns-shape-9 text-[52px] text-secondary dark:text-white"></span>
            </div>
            <h3 class="font-normal text-heading-6 xl:text-heading-5 md:text-heading-6 mb-2">
              Audit Readiness
            </h3>
            <p class="max-w-[275px] mb-6 md:mb-11">
              Generate regulator-ready reports instantly.
            </p>


          </div>
          <figure class="w-full md:w-1/2 lg:max-w-[260px] overflow-hidden">
            <img src="images/home-page-1/audit.svg" alt="service-1"
              class="w-full h-auto object-cover dark:hidden inline-block rounded-[12px]" />
            <img src="images/home-page-1/audit.svg" alt="service-1"
              class="w-full h-auto object-cover dark:inline-block hidden rounded-[12px]" />
          </figure>
        </div>
      </div>
      <!-- services card-2 -->
      <div data-ns-animate data-delay="0.7" class="col-span-12 lg:col-span-6 sm:col-span-6">
        <div
          class="bg-white dark:bg-background-6 flex flex-col md:flex-row items-center gap-8 rounded-[20px] py-8 lg:py-14 px-5 md:px-8 overflow-hidden">
          <div class="w-full md:w-1/2 lg:w-auto">
            <div class="inline-block mb-4 md:mb-6">
              <span class="ns-shape-2 text-[52px] text-secondary dark:text-white"></span>
            </div>
            <h3 class="font-normal text-heading-6 xl:text-heading-5 md:text-heading-6 mb-2">
              Scalable Design
            </h3>
            <p class="max-w-[275px] mb-6 md:mb-11">
              Built for SMEs and enterprises.
            </p>


          </div>
          <figure class="w-full md:w-1/2 lg:max-w-[253px] rounded-[10px] overflow-hidden">
            <img src="images/home-page-1/scalable.svg" alt="service-1"
              class="w-full h-auto object-cover dark:hidden inline-block rounded-[10px]" />
            <img src="images/home-page-1/scalable.svg" alt="service-1"
              class="w-full h-auto object-cover dark:inline-block hidden rounded-[10px]" />
          </figure>
        </div>
      </div>



      <!-- services card-1 -->
      <div data-ns-animate data-delay="0.6" class="col-span-12 lg:col-span-6 sm:col-span-6">
        <div
          class="bg-white dark:bg-background-6 flex flex-col md:flex-row items-center gap-8 rounded-[20px] py-8 lg:py-14 px-5 md:px-8 overflow-hidden">
          <div class="w-full md:w-1/2 lg:w-auto">
            <div class="inline-block mb-4 lg:mb-6">
              <span class="ns-shape-9 text-[52px] text-secondary dark:text-white"></span>
            </div>
            <h3 class="font-normal text-heading-6 xl:text-heading-5 md:text-heading-6 mb-2">
              End-to-End Coverage
            </h3>
            <p class="max-w-[275px] mb-6 md:mb-11">
              Covers every GDPR obligation.
            </p>


          </div>
          <figure class="w-full md:w-1/2 lg:max-w-[260px] overflow-hidden">
            <img src="images/home-page-1/end-to-end.svg" alt="service-1"
              class="w-full h-auto object-cover dark:hidden inline-block rounded-[12px]" />
            <img src="images/home-page-1/end-to-end.svg" alt="service-1"
              class="w-full h-auto object-cover dark:inline-block hidden rounded-[12px]" />
          </figure>
        </div>
      </div>
      <!-- services card-2 -->
      <div data-ns-animate data-delay="0.7" class="col-span-12 lg:col-span-6 sm:col-span-6">
        <div
          class="bg-white dark:bg-background-6 flex flex-col md:flex-row items-center gap-8 rounded-[20px] py-8 lg:py-14 px-5 md:px-8 overflow-hidden">
          <div class="w-full md:w-1/2 lg:w-auto">
            <div class="inline-block mb-4 md:mb-6">
              <span class="ns-shape-2 text-[52px] text-secondary dark:text-white"></span>
            </div>
            <h3 class="font-normal text-heading-6 xl:text-heading-5 md:text-heading-6 mb-2">
              API-First Architecture
            </h3>
            <p class="max-w-[275px] mb-6 md:mb-11">
              Use our open APIs to extend data privacy automation to any interface.
            </p>


          </div>
          <figure class="w-full md:w-1/2 lg:max-w-[253px] rounded-[10px] overflow-hidden">
            <img src="images/home-page-1/aii-first.svg" alt="service-1"
              class="w-full h-auto object-cover dark:hidden inline-block rounded-[10px]" />
            <img src="images/home-page-1/aii-first.svg" alt="service-1"
              class="w-full h-auto object-cover dark:inline-block hidden rounded-[10px]" />
          </figure>
        </div>
      </div>
      <!-- services card-3 -->

    </div>


  </div>
</section>







<section
  class="relative md:pt-[10px] lg:pt-[50px]  pb-14 py-14  bg-background-3 dark:bg-background-6 max-sm:pt-10 max-sm:pb-10">
  <div class="main-container flex flex-col gap-[70px]">
    <div class="grid grid-cols-12 max-sm:gap-y-[42px] max-sm:gap-x-0 gap-[42px]">
      <div data-ns-animate data-delay="0.3" class="col-span-12 relative z-10">
        <div class="absolute top-0 left-0 right-0 bottom-0 -z-10 rounded-[20px] overflow-hidden">
          <img src="images/home-page-2/about-bg.png" alt=" about bg" class="w-full h-full object-cover" />
        </div>
        <div
          class="max-sm:py-8 py-14 px-6 max-sm:px-5 md:px-11 grid max-sm:grid-cols-1 grid-cols-2 max-sm:gap-10 gap-5">
          <div class="max-w-[500px] about-content">
            <h5 class="text-accent mb-8 max-sm:text-heading-6">
              Why Choose GDPR Consultants
            </h5>
            <p class="text-white">With GDPR Consultants’ Data Privacy Automation Solutions, you get trusted expertise,
              automation-first
              tools, and scalable compliance tailored to your business — built with an API-first design that powers
              integrations and webhooks at scale.</p>

          </div>
          <div>
            <ul class="max-sm:space-y-3 space-y-5">
              <li class="flex items-center max-sm:gap-2.5 gap-2">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                    fill="#FCFCFC" fill-opacity="0.17" />
                  <path d="M14.125 7.375L8.875 12.6248L6.25 10" stroke="" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-accent" />
                </svg>
                <span class="text-accent max-sm:text-tagline-2">Holistic Compliance Approach – Cover every GDPR
                  requirement.</span>
              </li>
              <li class="flex items-center max-sm:gap-2.5 gap-2">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                    fill="#FCFCFC" fill-opacity="0.17" />
                  <path d="M14.125 7.375L8.875 12.6248L6.25 10" stroke="" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-accent" />
                </svg>
                <span class="text-accent max-sm:text-tagline-2">Automation First – Reduce manual effort with smart
                  workflows.</span>
              </li>
              <li class="flex items-center max-sm:gap-2.5 gap-2">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                    fill="#FCFCFC" fill-opacity="0.17" />
                  <path d="M14.125 7.375L8.875 12.6248L6.25 10" stroke="" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-accent" />
                </svg>
                <span class="text-accent max-sm:text-tagline-2">User-Centric Design – Simple, intuitive, transparent
                  tools.</span>
              </li>
              <li class="flex items-center max-sm:gap-2.5 gap-2">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                    fill="#FCFCFC" fill-opacity="0.17" />
                  <path d="M14.125 7.375L8.875 12.6248L6.25 10" stroke="" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-accent" />
                </svg>
                <span class="text-accent max-sm:text-tagline-2">Regulator-Ready Outputs – Align documentation with
                  GDPR.</span>
              </li>

              <li class="flex items-center max-sm:gap-2.5 gap-2">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                    fill="#FCFCFC" fill-opacity="0.17" />
                  <path d="M14.125 7.375L8.875 12.6248L6.25 10" stroke="" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-accent" />
                </svg>
                <span class="text-accent max-sm:text-tagline-2">Customizable Solutions – Adaptable for every
                  organization.</span>
              </li>

              <li class="flex items-center max-sm:gap-2.5 gap-2">
                <svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                    fill="#FCFCFC" fill-opacity="0.17" />
                  <path d="M14.125 7.375L8.875 12.6248L6.25 10" stroke="" stroke-linecap="round" stroke-linejoin="round"
                    class="stroke-accent" />
                </svg>
                <span class="text-accent max-sm:text-tagline-2">Proven Expertise – Backed by compliance and tech
                  specialists.</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
FAQ section
===========================-->
<section class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
  <div class="main-container">
    <div class="text-center space-y-3 mb-14 md:mb-[70px]">
      <span data-ns-animate data-delay="0.1" class="badge badge-green mb-3.5 md:mb-5"> FAQ's</span>
      <h2 data-ns-animate data-delay="0.2">
        Commonly
        <span class="text-primary-500 inline-block">asked</span>
        questions
      </h2>
      <!-- <p data-ns-animate data-delay="0.3" class="lg:max-w-[620px] mx-auto">
        By offering concise and informative responses, this section helps users find solutions
        without the need to contact customer support, saving time
      </p> -->
    </div>

    <!-- faq items -->
    <div data-ns-animate data-delay="0.4" class="accordion max-w-[850px] w-full space-y-4 mx-auto">
      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item active-accordion">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800 ">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            1. What is the role of the Consent Management Tool in GDPR compliance?
          </span>
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="16" height="16"
              class="transition-colors duration-300 stroke-secondary dark:stroke-white">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>

        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              The Consent Management Tool helps organizations obtain, track, and manage valid consent from data
              subjects. It ensures consent is freely given, informed, specific, and can be easily withdrawn, in line
              with GDPR Articles 6, 7, and 21.
            </p>
          </div>
        </div>
      </div>
      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white ">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            2. How does Data Subject Rights and Grievance Management support GDPR obligations?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              The Data Subject Rights and Grievance Management platform provides mechanisms for data subjects to raise
              complaints, request access, or exercise other rights. It assists organizations in responding within
              statutory timelines, supporting GDPR’s accountability, transparency, and data subject empowerment
              principles.
            </p>
          </div>
        </div>
      </div>
      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            3. Why is a Data Protection Impact Assessment (DPIA) necessary?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              A DPIA is required for processing that may pose high risks to individuals’ rights and freedoms (such as
              large-scale profiling or use of sensitive data). The process helps identify risks, assess their impact,
              and document mitigation steps, ensuring compliance with GDPR Articles 35 and 36.
            </p>
          </div>
        </div>
      </div>
      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            4. When should the Data Protection Third Party tool be used?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Data Protection Third Party assessments should be carried out before engaging any processors, vendors, or
              partners who handle personal data. This tool ensures proper contractual and technical safeguards are in
              place, in line with GDPR Articles 28 and 46 for third-party risk management.
            </p>
          </div>
        </div>
      </div>

      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            5. What does Cookie Consent Management do under GDPR?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Cookie Consent Management allows websites to capture, store, and manage user consent for cookies and
              similar technologies. It gives users granular choices (e.g., strictly necessary vs. marketing cookies) and
              allows consent withdrawal at any time, satisfying GDPR Articles 6, 7, and Recital 30.
            </p>
          </div>
        </div>
      </div>

      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            6. How do these tools collectively strengthen GDPR accountability?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Together, these tools ensure organizations comply with GDPR’s accountability principle (Article 5(2)),
              offering audit-ready records for consent, grievances, risk assessments, third-party due diligence, and
              cookie compliance.
            </p>
          </div>
        </div>
      </div>

      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            7. Do these tools support data subject rights like access, rectification, and erasure?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Yes. The Consent Management Tool and Data Subject Rights and Grievance Management platform facilitate the
              processing of Data Subject Access Requests (DSARs) and enable fast, compliant responses to rectification
              or erasure requests within the GDPR’s one-month timeline (Articles 12–23).
            </p>
          </div>
        </div>
      </div>

      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            8. How do these tools reduce the risk of GDPR fines?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Automating compliance tasks like consent tracking, third-party reviews, cookie management, and grievance
              resolution with these tools helps minimize the errors and delays that can result in regulatory fines under
              Articles 83 and 84.
            </p>
          </div>
        </div>
      </div>

      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            9. Are these tools suitable for both small and large organizations?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Yes. The tools are scalable—SMEs can use them for simplified compliance, while large enterprises can
              integrate them with governance, risk, and compliance (GRC) systems for organization-wide GDPR adherence.
            </p>
          </div>
        </div>
      </div>

      <div class="dark:bg-background-6 !important bg-white rounded-[20px] px-6 sm:px-8 accordion-item">
        <button class="dark:bg-background-6 !important accordion-action flex items-center cursor-pointer justify-between sm:pt-8 pt-5 sm:pb-8 pb-5 w-full 
         rounded-xl transition-colors duration-300 
         bg-white dark:bg-gray-800">
          <span
            class="dark:text-white flex-1 text-left sm:text-heading-6 text-tagline-1 font-normal text-secondary p-2">
            10. Can these tools integrate with existing IT or legal compliance frameworks?
          </span>
          <!-- =========================
Accordian Icon
===========================-->
          <span class="sm:ml-auto ml-2.5 block accordion-arrow">
            <svg class="transition-colors duration-300 stroke-secondary dark:stroke-white"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="16"
              height="16">
              <path stroke-opacity="0.8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </span>

        </button>
        <div class="accordion-content">
          <div class="border-t border-t-stroke-2 dark:border-t-stroke-6 sm:pt-6 pt-5 sm:pb-8 pb-5">
            <p>
              Absolutely. These tools can be integrated with HR, CRM, marketing automation, and vendor management
              platforms, making GDPR compliance seamless across various business functions.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<!-- =========================
Timeline Integration section
===========================-->
<section class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
  <div
    class="max-w-[1464px] mx-5 2xl:mx-auto sm:border-[12px] border-8 bg-background-3 dark:bg-background-5 border-white dark:border-[#1F252F] rounded-[20px] py-10 xl:py-[120px] px-2.5 sm:px-5 xl:px-[50px] relative overflow-hidden">
    <!-- background image  -->
    <div data-ns-animate data-delay="0.7" data-direction="up"
      class="absolute max-[400px]:-top-[20%] max-[400px]:rotate-[73deg] max-[400px]:-right-[70%] -top-[20%] sm:-top-[24%] md:-top-[30%] lg:-top-[44%] -right-[54%] min-[550px]:-right-[20%] md:-right-[28%] lg:-right-[20%] xl:-right-[18%] max-w-[420px] md:max-w-[700px] xl:max-w-[900px] 2xl:max-w-[1080px] rotate-90 md:rotate-[6deg] pointer-events-none select-none">
      <img src="images/gradient/gradient-36.png" alt="Timeline integration vector background"
        class="w-full h-full object-cover" />
    </div>

    <div class="text-center mb-14 md:mb-20 lg:mb-32 2xl:mb-[183px]">
      <span data-ns-animate data-delay="0.1" class="badge badge-green mb-3.5 md:mb-5">
        Privacy Suite
      </span>
      <h2 data-ns-animate data-delay="0.2" class="mb-3">
        Data Protection, compliance, and ​<br>
        <span class="text-primary-500 inline-block">governance product suit</span>
      </h2>
      <!-- <p data-ns-animate data-delay="0.3" class="lg:max-w-[560px] mx-auto">
        With concepts in hand, we meticulously design, refining every detail to align with your
        vision and objectives.
      </p> -->
      <div class="relative z-30">
        <div data-ns-animate data-delay="0.4"
          class="sm:py-10 py-6 z-10 relative mt-14 2xl:mt-[70px] sm:px-[60px] px-10 font-normal sm:text-heading-5 text-heading-6 rounded-[365px] bg-ns-green inline-block">
          Consent Governance Platform
        </div>

        <!-- timeline svg  -->
        <div class="absolute top-2/3 -z-0 left-1/2 -translate-x-[50%] hidden lg:block">
          <svg width="880" height="275" viewBox="0 0 880 275" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="stroke-stroke-3 dark:stroke-stroke-8">
            <g clip-path="url(#clip0_6586_24283)">
              <path d="M439.672 0.5L440.359 274.499" id="svg-one" class="invisible" />
              <path
                d="M439.672 129.969V129.969C439.672 146.249 426.474 159.446 410.194 159.446H40.6719C18.5805 159.446 0.671875 177.355 0.671875 199.446V273.969"
                id="svg-two" class="invisible" />
              <path
                d="M440.328 129.969V129.969C440.328 146.249 453.526 159.446 469.806 159.446H839.328C861.42 159.446 879.328 177.355 879.328 199.446V273.969"
                id="svg-three" class="invisible" />
            </g>
            <defs>
              <clipPath id="clip0_6586_24283">
                <rect width="878.656" height="273.999" fill="white" transform="translate(0.671875 0.5)" />
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>
    </div>

    <div class="grid relative z-30 grid-cols-12 gap-6">
      <!-- Trading exchanges, -->
      <div data-ns-animate data-delay="1.2"
        class="col-span-12 md:col-span-6 lg:col-span-4 bg-background-1 dark:bg-background-7 rounded-[20px] p-8">
        <h3 class="font-normal sm:text-heading-5 text-heading-6 mb-4">SECURITY​ Data Discovery​</h3>
        <ul class="sm:ml-6 ml-4 sm:space-y-6 space-y-4">
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Structured Data​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Unstructured Data​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Semi-Structured Data​
          </li>
        </ul>
        <p class="font-normal mt-4 mb-4"><strong>Risk Remediation</strong>​​</p>


        <ul class="sm:ml-6 ml-4 sm:space-y-6 space-y-4">
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Red Action​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Archival
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Deletion
          </li>
        </ul>
      </div>

      <!-- Progress and evolution, -->
      <div data-ns-animate data-delay="1.3"
        class="col-span-12 md:col-span-6 lg:col-span-4 bg-secondary dark:bg-accent rounded-[20px] p-8">
        <h3 class="sm:text-heading-5 text-heading-6 font-normal text-accent dark:text-secondary mb-4">
          PRIVACY
        </h3>
        <ul class="sm:ml-6 ml-4 sm:space-y-6 space-y-4">
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            Data Subject Request​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            Consent Management​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            Record of Processing Activity​
          </li>

          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            Privacy Impact Assessment​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            Third-party Risk Management
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            Right to be forgotten​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-accent dark:text-secondary">
            ADMT
          </li>
        </ul>
      </div>

      <!-- Growth recognized. -->
      <div data-ns-animate data-delay="1.4"
        class="col-span-12 md:col-span-6 lg:col-span-4 bg-background-1 dark:bg-background-7 rounded-[20px] p-8">
        <h3 class="font-normal sm:text-heading-5 text-heading-6 mb-4">GOVERNANCE</h3>
        <ul class="sm:ml-6 ml-4 sm:space-y-6 space-y-4">
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Labelling​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Cataloging​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Retention​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Life Cycle
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Access​
          </li>
          <li class="text-tagline-2 sm:text-tagline-1 font-normal list-disc text-secondary/60 dark:text-accent/60">
            Residency​
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- =========================
Testimonail section
===========================-->
<!-- <section class="sm:pb-28 pb-20 sm:pt-14 pt-10 md:pb-32 md:pt-16 lg:pb-[100px] lg:pt-[88px] xl:pb-[200px] xl:pt-[100px]"
  aria-label="Customer testimonials">
  <div class="main-container">
    <div class="text-center mb-14 md:mb-[70px]">
      <span data-ns-animate data-delay="0.1" class="badge badge-green mb-3.5 md:mb-5">Review</span>
      <h2 data-ns-animate data-delay="0.2">
        Hear from our customers about their <br class="hidden lg:block" />
        <span class="text-primary-500 inline-block">experiences</span>
        with us
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <article data-ns-animate data-delay="0.3"
        class="bg-background-3 dark:bg-background-7 dark:border dark:border-stroke-7 rounded-[20px] sm:p-8 p-6">
        <div class="flex items-center justify-between pb-6">
          <figure class="flex items-center gap-3">
            <img src="images/avatar/avatar-4.png"
              class="size-11 rounded-full object-center object-cover bg-linear-[156deg,#FFF_32.92%,#A585FF_91%]"
              alt="Darrell Steward's avatar" width="44" height="44" loading="lazy" />
            <figcaption>
              <h3 class="text-tagline-1 sm:text-lg font-medium leading-[1.5]">Darrell Steward</h3>
              <p class="text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                Aland Islands
              </p>
            </figcaption>
          </figure>
          <a href="https://x.com/heystaticmania" target="_blank" rel="noopener"
            aria-label="Follow Darrell Steward on Twitter"
            class="bg-background-4 dark:bg-background-9 hover:bg-background-2 dark:hover:bg-background-9/60 transition-colors duration-[400ms] ease-[cubic-bezier(0.7, 0, 0.2, 8)] cursor-pointer size-9 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
              aria-hidden="true">
              <g clip-path="url(#clip0_3108_693)">
                <path
                  d="M9.45202 0.5H11.2924L7.27177 5.58308L12.0017 12.5H8.29819L5.3975 8.30492L2.07844 12.5H0.236996L4.53741 7.06308L0 0.5H3.7975L6.41947 4.33446L9.45202 0.5ZM8.80612 11.2815H9.82587L3.24339 1.65446H2.1491L8.80612 11.2815Z"
                  class="fill-secondary dark:fill-accent" />
              </g>
              <defs>
                <clipPath id="clip0_3108_693">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <p class="pt-6 border-t border-stroke-4 dark:border-stroke-7">
          As a small business owner, your service has been a lifesaver in managing cash flow and
          optimizing financial strategies. It has truly exceeded my expectations.
        </p>
      </article>

      
      <article data-ns-animate data-delay="0.4"
        class="bg-background-3 dark:bg-background-7 dark:border dark:border-stroke-7 rounded-[20px] sm:p-8 p-6">
        <div class="flex items-center justify-between pb-6">
          <figure class="flex items-center gap-3">
            <img src="images/avatar/avatar-5.png"
              class="size-11 rounded-full object-center object-cover bg-linear-[156deg,#FFF_32.92%,#A585FF_91%]"
              alt="Ralph Edwards's avatar" width="44" height="44" loading="lazy" />
            <figcaption>
              <h3 class="text-tagline-1 sm:text-lg font-medium leading-[1.5] dark:text-accent">
                Ralph Edwards
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">Serbia</p>
            </figcaption>
          </figure>
          <a href="https://x.com/heystaticmania" target="_blank" rel="noopener"
            aria-label="Follow Ralph Edwards on Twitter"
            class="bg-background-4 dark:bg-background-9 hover:bg-background-2 dark:hover:bg-background-9/60 transition-colors duration-[400ms] ease-[cubic-bezier(0.7, 0, 0.2, 8)] cursor-pointer size-9 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
              aria-hidden="true">
              <g clip-path="url(#clip0_3108_694)">
                <path
                  d="M9.45202 0.5H11.2924L7.27177 5.58308L12.0017 12.5H8.29819L5.3975 8.30492L2.07844 12.5H0.236996L4.53741 7.06308L0 0.5H3.7975L6.41947 4.33446L9.45202 0.5ZM8.80612 11.2815H9.82587L3.24339 1.65446H2.1491L8.80612 11.2815Z"
                  class="fill-secondary dark:fill-accent" />
              </g>
              <defs>
                <clipPath id="clip0_3108_694">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <p class="pt-6 border-t border-stroke-4 dark:border-stroke-7">
          As a small business owner, your service has been essential for managing my cash flow and
          improving my financial strategies. It has definitely exceeded what I anticipated.
        </p>
      </article>

     
      <article data-ns-animate data-delay="0.5"
        class="bg-background-3 dark:bg-background-7 dark:border dark:border-stroke-7 rounded-[20px] sm:p-8 p-6">
        <div class="flex items-center justify-between pb-6">
          <figure class="flex items-center gap-3">
            <img src="images/avatar/avatar-6.png"
              class="size-11 rounded-full object-center object-cover bg-linear-[156deg,#FFF_32.92%,#A585FF_91%]"
              alt="Esther Howard's avatar" width="44" height="44" loading="lazy" />
            <figcaption>
              <h3 class="text-tagline-1 sm:text-lg font-medium leading-[1.5] dark:text-accent">
                Esther Howard
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                Saudi Arabia
              </p>
            </figcaption>
          </figure>
          <a href="https://x.com/heystaticmania" target="_blank" rel="noopener"
            aria-label="Follow Esther Howard on Twitter"
            class="bg-background-4 dark:bg-background-9 hover:bg-background-2 dark:hover:bg-background-9/60 transition-colors duration-[400ms] ease-[cubic-bezier(0.7, 0, 0.2, 8)] cursor-pointer size-9 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
              aria-hidden="true">
              <g clip-path="url(#clip0_3108_695)">
                <path
                  d="M9.45202 0.5H11.2924L7.27177 5.58308L12.0017 12.5H8.29819L5.3975 8.30492L2.07844 12.5H0.236996L4.53741 7.06308L0 0.5H3.7975L6.41947 4.33446L9.45202 0.5ZM8.80612 11.2815H9.82587L3.24339 1.65446H2.1491L8.80612 11.2815Z"
                  class="fill-secondary dark:fill-accent" />
              </g>
              <defs>
                <clipPath id="clip0_3108_695">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <p class="pt-6 border-t border-stroke-4 dark:border-stroke-7">
          As a small business owner, I really appreciate your service. It has been a game changer
          for managing cash flow and optimizing my financial strategies. You've truly exceeded my
          expectations.
        </p>
      </article>

      
      <article data-ns-animate data-delay="0.6"
        class="bg-background-3 dark:bg-background-7 dark:border dark:border-stroke-7 rounded-[20px] sm:p-8 p-6">
        <div class="flex items-center justify-between pb-6">
          <figure class="flex items-center gap-3">
            <img src="images/avatar/avatar-7.png"
              class="size-11 rounded-full object-center object-cover bg-linear-[156deg,#FFF_32.92%,#A585FF_91%]"
              alt="Darrell Steward's avatar" width="44" height="44" loading="lazy" />
            <figcaption>
              <h3 class="text-tagline-1 sm:text-lg font-medium leading-[1.5] dark:text-accent">
                Darrell Steward
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">Brazil</p>
            </figcaption>
          </figure>
          <a href="https://x.com/heystaticmania" target="_blank" rel="noopener"
            aria-label="Follow Darrell Steward on Twitter"
            class="bg-background-4 dark:bg-background-9 hover:bg-background-2 dark:hover:bg-background-9/60 transition-colors duration-[400ms] ease-[cubic-bezier(0.7, 0, 0.2, 8)] cursor-pointer size-9 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
              aria-hidden="true">
              <g clip-path="url(#clip0_3108_696)">
                <path
                  d="M9.45202 0.5H11.2924L7.27177 5.58308L12.0017 12.5H8.29819L5.3975 8.30492L2.07844 12.5H0.236996L4.53741 7.06308L0 0.5H3.7975L6.41947 4.33446L9.45202 0.5ZM8.80612 11.2815H9.82587L3.24339 1.65446H2.1491L8.80612 11.2815Z"
                  class="fill-secondary dark:fill-accent" />
              </g>
              <defs>
                <clipPath id="clip0_3108_696">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <p class="pt-6 border-t border-stroke-4 dark:border-stroke-7">
          As a small business owner, I can't thank you enough for your service. It has been
          invaluable in helping me manage my cash flow and refine my financial strategies. You've
          truly gone above and beyond.
        </p>
      </article>

      
      <article data-ns-animate data-delay="0.7"
        class="bg-background-3 dark:bg-background-7 dark:border dark:border-stroke-7 rounded-[20px] sm:p-8 p-6">
        <div class="flex items-center justify-between pb-6">
          <figure class="flex items-center gap-3">
            <img src="images/avatar/avatar-1.png"
              class="size-11 rounded-full object-center object-cover bg-linear-[156deg,#FFF_32.92%,#A585FF_91%]"
              alt="Savannah Nguyen's avatar" width="44" height="44" loading="lazy" />
            <figcaption>
              <h3 class="text-tagline-1 sm:text-lg font-medium leading-[1.5] dark:text-accent">
                Savannah Nguyen
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                Iceland
              </p>
            </figcaption>
          </figure>
          <a href="https://x.com/heystaticmania" target="_blank" rel="noopener"
            aria-label="Follow Savannah Nguyen on Twitter"
            class="bg-background-4 dark:bg-background-9 hover:bg-background-2 dark:hover:bg-background-9/60 transition-colors duration-[400ms] ease-[cubic-bezier(0.7, 0, 0.2, 8)] cursor-pointer size-9 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
              aria-hidden="true">
              <g clip-path="url(#clip0_3108_697)">
                <path
                  d="M9.45202 0.5H11.2924L7.27177 5.58308L12.0017 12.5H8.29819L5.3975 8.30492L2.07844 12.5H0.236996L4.53741 7.06308L0 0.5H3.7975L6.41947 4.33446L9.45202 0.5ZM8.80612 11.2815H9.82587L3.24339 1.65446H2.1491L8.80612 11.2815Z"
                  class="fill-secondary dark:fill-accent" />
              </g>
              <defs>
                <clipPath id="clip0_3108_697">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <p class="pt-6 border-t border-stroke-4 dark:border-stroke-7">
          Being a small business owner, I find your service to be incredibly helpful in navigating
          cash flow and enhancing my financial strategies. It has genuinely surpassed my
          expectations.
        </p>
      </article>

     
      <article data-ns-animate data-delay="0.8"
        class="bg-background-3 dark:bg-background-7 dark:border dark:border-stroke-7 rounded-[20px] sm:p-8 p-6">
        <div class="flex items-center justify-between pb-6">
          <figure class="flex items-center gap-3">
            <img src="images/avatar/avatar-2.png"
              class="size-11 rounded-full object-center object-cover bg-linear-[156deg,#FFF_32.92%,#A585FF_91%]"
              alt="Marvin McKinney's avatar" width="44" height="44" loading="lazy" />
            <figcaption>
              <h3 class="text-tagline-1 sm:text-lg font-medium leading-[1.5] dark:text-accent">
                Marvin McKinney
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                Afghanistan
              </p>
            </figcaption>
          </figure>
          <a href="https://x.com/heystaticmania" target="_blank" rel="noopener"
            aria-label="Follow Marvin McKinney on Twitter"
            class="bg-background-4 dark:bg-background-9 hover:bg-background-2 dark:hover:bg-background-9/60 transition-colors duration-[400ms] ease-[cubic-bezier(0.7, 0, 0.2, 8)] cursor-pointer size-9 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"
              aria-hidden="true">
              <g clip-path="url(#clip0_3108_698)">
                <path
                  d="M9.45202 0.5H11.2924L7.27177 5.58308L12.0017 12.5H8.29819L5.3975 8.30492L2.07844 12.5H0.236996L4.53741 7.06308L0 0.5H3.7975L6.41947 4.33446L9.45202 0.5ZM8.80612 11.2815H9.82587L3.24339 1.65446H2.1491L8.80612 11.2815Z"
                  class="fill-secondary dark:fill-accent" />
              </g>
              <defs>
                <clipPath id="clip0_3108_698">
                  <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>

        <p class="pt-6 border-t border-stroke-4 dark:border-stroke-7">
          As a small business owner, I find your service to be a crucial asset in managing cash flow
          and fine-tuning my financial strategies. It has really gone beyond what I expected.
        </p>
      </article>
    </div>

    <div data-ns-animate data-delay="0.9" class="flex justify-center mt-10 md:mt-14">
      <a href="./testimonial-page-01.html"
        class="btn btn-white btn-lg md:btn-xl dark:btn-transparent hover:btn-primary w-full md:w-auto mx-auto md:mx-0">
        <span>Explore more</span>
      </a>
    </div>
  </div>
</section> -->

<!-- =========================
Blog section
===========================-->

<?php include_once('blog-home.php'); ?>

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


<?php include_once('footer.php'); ?>

</body>

</html>