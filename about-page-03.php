<?php include_once('header.php'); ?>

<section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 {=$class}" aria-label="Page hero section">
  <div class="main-container">
    <!-- Hero content -->
    <div class="text-center space-y-2 pb-14 lg:pb-[72px]">
      <span
        data-ns-animate
        data-delay="0.1"
        class="hero-badge text-tagline-1 inline-block text-secondary dark:text-accent"
      >
        <a
          href="./index.html"
          class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-300"
          >Home</a
        >
        <span class="mx-2">-</span>
        <a
          href="#"
          class="hover:text-primary-500 dark:hover:text-primary-400 transition-colors duration-300"
          >About us 3</a
        >
      </span>
      <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">About us</h1>
    </div>
  </div>
</section>

      <!-- =========================
Feature  section
===========================-->

<section
  class="pb-14 pt-10 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px] overflow-hidden"
>
  <div class="main-container space-y-14 md:space-y-[70px]">
    <div class="space-y-3 text-center">
      <span data-ns-animate data-delay="0.2" class="badge badge-cyan mb-5"
        >Passion meets purpose</span
      >
      <h2
        data-ns-animate
        data-delay="0.3"
        class="xl:text-heading-1 font-medium lg:max-w-[980px] mx-auto"
      >
        Engineered for advancement. Crafted for potential.
      </h2>
      <p data-ns-animate data-delay="0.4" class="lg:max-w-[904px] mx-auto">
        At NextSaaS, we create tools that simplify your work, scale with your growth, and bring
        clarity to complexity. From streamlining operations to unlocking insights, our platform is
        built to support your entire journey—from startup to enterprise.
      </p>
    </div>

    <!-- Features Grid -->
    <div
      class="flex flex-col-reverse gap-y-7 gap-x-4 md:flex-row justify-around items-start md:items-center lg:items-end 2xl:justify-evenly"
    >
      <!-- Left Column Images -->
      <article
        aria-label="Feature supporting images"
        class="space-y-[25px] flex flex-row max-md:gap-2 max-md:justify-between md:flex-col items-center md:hidden lg:block"
      >
        <figure
          data-ns-animate
          data-delay="0.4"
          data-duration="2.8"
          data-spring
          data-direction="left"
          class="max-w-[254px] rounded-2xl shadow-5 overflow-hidden max-h-[250px]"
        >
          <img
            src="images/about-page-03/sales-asset.svg"
            class="size-full shadow-5 object-cover block dark:hidden"
            alt="Sales performance visualization"
            loading="lazy"
          />
          <img
            src="images/about-page-03/sales-asset-dark.svg"
            class="size-full shadow-5 object-cover hidden dark:block"
            alt="Sales performance visualization"
            loading="lazy"
          />
        </figure>

        <figure
          data-ns-animate
          data-delay="0.5"
          data-duration="2.2"
          data-spring
          class="max-w-[143px] rounded-2xl shadow-2 overflow-hidden max-h-[110px]"
        >
          <img
            src="images/about-page-03/satisfied-user-asset.png"
            class="size-full object-cover block dark:hidden"
            alt="Sales Asset"
          />
          <img
            src="images/about-page-03/satisfied-user-asset-light.png"
            class="size-full object-cover hidden dark:block"
            alt="Sales Asset"
          />
        </figure>
      </article>

      <!-- Center Main Feature Image -->
      <figure
        data-ns-animate
        data-delay="0.5"
        data-direction="up"
        aria-label="Main feature visualization"
        class="max-w-[630px] max-h-[564px]"
      >
        <img
          src="images/about-page-03/feature.png"
          alt="Main platform feature visualization"
          loading="lazy"
          class="size-full object-cover"
        />
      </figure>

      <!-- Right Column  Balance -->
      <article class="space-y-[37px] max-md:w-full">
        <figure data-ns-animate data-delay="0.5" data-spring data-duration="2.2">
          <img src="images/home-page-7/badge-3.svg" alt="Achievement badge" loading="lazy" />
        </figure>

        <!-- Investment  -->
        <div
          data-ns-animate
          data-delay="0.4"
          data-direction="right"
          class="flex items-start flex-col bg-secondary dark:bg-accent w-full md:w-[148px] h-auto md:h-[91px] gap-1 p-4 rounded-2xl"
        >
          <h3 class="text-tagline-2 text-accent dark:text-secondary font-normal">
            Investment target
          </h3>
          <h3
            class="text-heading-5 flex items-center justify-center gap-0.5 text-ns-green dark:text-secondary font-normal"
          >
            <span
              data-counter
              data-number="76"
              data-speed="1000"
              data-interval="180"
              data-rooms="2"
              data-height-space="2.6"
              >76</span
            >%
          </h3>
        </div>

        <!-- Balance Card -->
        <div
          data-ns-animate
          data-delay="0.6"
          data-direction="right"
          class="bg-white dark:bg-black rounded-2xl p-6 max-w-full md:max-w-[288px] min-w-full md:min-w-[288px]"
        >
          <div class="text-left">
            <span class="text-tagline-2 font-normal text-secondary dark:text-accent">Balance</span>
            <h3 class="text-[40px] flex items-center font-normal leading-[1.2] mt-2 mb-[30px]">
              $<span
                data-counter
                data-number="45324"
                data-speed="1000"
                data-interval="180"
                data-rooms="5"
                data-height-space="2.2"
                >45,324</span
              >
            </h3>
          </div>

          <div class="flex gap-3">
            <!-- Income Card -->
            <div
              class="bg-background-4 dark:bg-background-9 rounded-xl p-4 space-y-2 flex-1 text-left"
            >
              <div
                class="flex items-center justify-start gap-2 text-tagline-2 text-secondary dark:text-accent"
              >
                <span
                  class="bg-ns-red flex items-center justify-center rounded-full size-[18px] p-1"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="8"
                    height="9"
                    viewBox="0 0 8 9"
                    fill="none"
                    aria-hidden="true"
                    focusable="false"
                  >
                    <path
                      d="M7.8842 4.49692C7.81538 4.42054 7.72089 4.37564 7.62101 4.37185C7.51393 4.36976 7.41095 4.41514 7.33717 4.49692L4.39555 7.59633L4.39555 0.407818C4.39277 0.18381 4.2211 0.00292873 4.0085 0C3.79589 0.00292873 3.62422 0.18381 3.62144 0.407818L3.62144 7.59633L0.679823 4.49692C0.581182 4.39007 0.435935 4.34679 0.298794 4.38337C0.161654 4.41996 0.0534544 4.53085 0.0149541 4.67428C-0.0235462 4.81771 0.0135021 4.97189 0.112143 5.07873L3.72465 8.88503C3.87798 9.03832 4.11836 9.03832 4.27169 8.88503L7.8842 5.07873C7.95828 5.00206 8 4.89724 8 4.78783C8 4.67841 7.95828 4.57359 7.8842 4.49692Z"
                      fill="#1A1A1C"
                    />
                  </svg>
                </span>
                Income
              </div>
              <div class="text-lg flex items-center font-medium leading-[1.5] dark:text-accent">
                $<span
                  data-counter
                  data-number="48000"
                  data-speed="1000"
                  data-interval="180"
                  data-rooms="5"
                  data-height-space="2.5"
                  >48,000</span
                >
              </div>
            </div>

            <!-- Expenses Card -->
            <div
              class="bg-background-4 dark:bg-background-9 rounded-xl p-4 space-y-2 flex-1 text-left"
            >
              <div
                class="flex items-center justify-start gap-2 text-tagline-2 text-secondary dark:text-accent"
              >
                <span
                  class="bg-ns-green flex items-center justify-center rounded-full size-[18px] p-1"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="8"
                    height="9"
                    viewBox="0 0 8 9"
                    fill="none"
                    aria-hidden="true"
                    focusable="false"
                  >
                    <path
                      d="M7.8842 4.50308C7.81538 4.57946 7.72089 4.62436 7.62101 4.62815C7.51393 4.63024 7.41095 4.58486 7.33717 4.50308L4.39555 1.40367L4.39555 8.59218C4.39277 8.81619 4.2211 8.99707 4.0085 9C3.79589 8.99707 3.62422 8.81619 3.62144 8.59218L3.62144 1.40367L0.679823 4.50308C0.581182 4.60993 0.435935 4.65321 0.298794 4.61663C0.161654 4.58004 0.0534544 4.46915 0.0149541 4.32572C-0.0235462 4.18229 0.0135021 4.02811 0.112143 3.92127L3.72465 0.114967C3.87798 -0.0383222 4.11836 -0.0383222 4.27169 0.114967L7.8842 3.92127C7.95828 3.99794 8 4.10276 8 4.21217C8 4.32159 7.95828 4.42641 7.8842 4.50308Z"
                      fill="#1A1A1C"
                    />
                  </svg>
                </span>
                Expenses
              </div>
              <div class="text-lg flex items-center font-medium leading-[1.5] dark:text-accent">
                $<span
                  data-counter
                  data-number="2321"
                  data-speed="1000"
                  data-interval="180"
                  data-rooms="5"
                  data-height-space="2.5"
                  >2,321</span
                >
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

      <!-- ========================
Our Mission Section
======================== -->

<section class="pb-20 pt-14 md:pb-28 md:pt-16 lg:pb-44 lg:pt-[88px] xl:pb-[200px] xl:pt-[100px]">
  <div class="main-container">
    <div class="grid grid-cols-12 gap-y-14 xl:gap-x-28 items-center">
      <div class="col-span-12 lg:col-span-6 mx-4 xl:mx-0">
        <div class="space-y-3">
          <span data-ns-animate data-delay="0.1" class="badge badge-cyan mb-5">Our Mission</span>
          <h2 data-ns-animate data-delay="0.2">
            Empowering teams to collaborate and thrive with intelligent
          </h2>
          <p data-ns-animate data-delay="0.4">
            In today’s fast-paced, digitally connected world, successful teams rely on more than
            just talent—they thrive on intelligent collaboration.
          </p>
        </div>
      </div>
      <!--  -->
      <div class="col-span-12 lg:col-span-6 relative mx-4 xl:mx-0">
        <!-- Business Growth Card -->
        <figure
          data-ns-animate
          data-delay="0.5"
          data-spring
          data-duration="2.5"
          class="absolute max-w-[360px] z-20 overflow-hidden left-1/2 -translate-x-1/2 top-[78%] rounded-[12px]"
        >
          <img
            src="images/about-page-03/business-growth-card.png"
            alt="business growth card"
            class="h-full w-full block dark:hidden"
          />
          <img
            src="images/about-page-03/business-growth-card-dark.png"
            alt="business growth card"
            class="h-full w-full hidden dark:block"
          />
        </figure>

        <div
          data-ns-animate
          data-delay="0.6"
          class="p-[26px] backdrop-blur-[20px] bg-white/60 dark:bg-background-8 shadow-2 min-h-[380px] rounded-[20px] h-full overflow-hidden relative z-10 flex items-center justify-center"
        >
          <!-- gradient bg -->
          <figure
            data-ns-animate
            data-delay="0.7"
            class="absolute select-none pointer-events-none max-[376px]:bottom-[-45%] bottom-[-54%] md:bottom-[-112%] lg:bottom-[-80%] right-[-33%] md:right-[-30%] xl:bottom-[-90%] xl:right-[-32%] max-w-[500px] md:max-w-[700px] w-full -z-10 rotate-180"
          >
            <img
              src="images/gradient/gradient-4.png"
              alt="hero author bg"
              class="size-full object-cover"
            />
          </figure>

          <div class="text-center -mt-20">
            <div class="flex items-center justify-center gap-4 mb-4">
              <div class="flex -space-x-3.5 group">
                <figure
                  class="inline-block size-11 rounded-full ring-3 ring-white bg-linear-[156deg,_#FFF_32.92%,_#A585FF_91%] overflow-hidden relative"
                >
                  <img src="images/avatar/avatar-1.png" alt="avatar" class="max-w-full" />
                  <img
                    src="images/avatar/author-avatar-bg.png"
                    alt="avatar"
                    class="absolute top-0 left-0 -z-10"
                  />
                </figure>
                <figure
                  class="inline-block size-11 rounded-full ring-3 ring-white bg-linear-[156deg,_#FFF_32.92%,_#A585FF_91%] overflow-hidden relative"
                >
                  <img src="images/avatar/avatar-2.png" alt="avatar" class="max-w-full" />
                  <img
                    src="images/avatar/author-avatar-bg.png"
                    alt="avatar"
                    class="absolute top-0 left-0 -z-10"
                  />
                </figure>
                <figure
                  class="inline-block size-11 rounded-full ring-3 ring-white bg-linear-[156deg,_#FFF_32.92%,_#A585FF_91%] overflow-hidden relative"
                >
                  <img src="images/avatar/avatar-3.png" alt="avatar" class="max-w-full" />
                  <img
                    src="images/avatar/author-avatar-bg.png"
                    alt="avatar"
                    class="absolute top-0 left-0 -z-10"
                  />
                </figure>
                <div
                  class="inline-flex overflow-hidden items-center justify-center size-12 rounded-full ring-3 ring-white text-secondary/80 bg-ns-yellow text-tagline-3 font-medium relative z-10"
                >
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500"
                  >
                    <path
                      d="M6 18L18 6"
                      stroke="#1A1A1C"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M8.25 6H18V15.75"
                      stroke="#1A1A1C"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                  <!--  -->
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    class="absolute translate-y-6 -translate-x-12 transition-all duration-500 group-hover:-translate-x-[1px] group-hover:-translate-y-[2%]"
                  >
                    <path
                      d="M6 18L18 6"
                      stroke="#1A1A1C"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                    <path
                      d="M8.25 6H18V15.75"
                      stroke="#1A1A1C"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </div>
              </div>
            </div>
            <h6 class="mb-1 text-secondary dark:text-accent text-xl font-normal leading-[1 .5]">
              20k+ global investment
            </h6>
            <p class="text-secondary/60 dark:text-accent/60">
              Get Global Investment policy in the year
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- ========================
Our Vision Section
======================== -->

<section
  class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]"
>
  <div class="main-container space-y-16 md:space-y-[100px]">
    <div class="space-y-3 text-center">
      <span data-ns-animate data-delay="0.2" class="badge badge-cyan mb-5">Our vision</span>
      <h2 data-ns-animate data-delay="0.3">Motivated by Intent, steered by insight</h2>
      <p data-ns-animate data-delay="0.4" class="max-w-[806px] mx-auto">
        Every great journey begins with a clear purpose—and it’s that sense of intent that drives
        everything we do. But purpose alone isn’t enough. To truly make meaningful progress, we
        combine our motivation with sharp
      </p>
    </div>

    <!--  -->
    <div class="grid grid-cols-12 xl:gap-x-24 gap-y-14">
      <div class="col-span-12 xl:col-span-8">
        <figure
          data-ns-animate
          data-delay="0.5"
          class="lg:max-w-[780px] lg:min-h-[424px] rounded-4xl overflow-hidden mx-auto"
        >
          <img
            src="images/home-page-13/hero-image.png"
            alt="hero image"
            class="w-full block dark:hidden"
          />
          <img
            src="images/home-page-13/hero-image-dark.png"
            alt="hero image"
            class="w-full hidden dark:block"
          />
        </figure>
      </div>
      <div class="col-span-12 xl:col-span-4">
        <div
          class="relative w-full h-full max-lg:flex max-[400px]:flex-wrap gap-4 max-[400px]:justify-start max-lg:justify-between"
        >
          <figure
            data-ns-animate
            data-delay="0.6"
            class="size-[140px] rounded-2xl lg:absolute lg:top-0 lg:left-11 overflow-hidden"
          >
            <img
              src="images/about-page-03/avatar-1.png"
              alt="Vision Avatar"
              class="w-full h-full object-cover"
            />
          </figure>
          <figure
            data-ns-animate
            data-delay="0.7"
            class="size-[140px] rounded-2xl lg:absolute lg:top-[41%] lg:right-[14%] overflow-hidden"
          >
            <img
              src="images/about-page-03/avatar-2.png"
              alt="Vision Avatar"
              class="w-full h-full object-cover"
            />
          </figure>
          <figure
            data-ns-animate
            data-delay="0.8"
            class="size-[140px] rounded-2xl lg:absolute lg:-bottom-22 xl:bottom-0 lg:left-96 xl:left-0 overflow-hidden"
          >
            <img
              src="images/about-page-03/avatar-3.png"
              alt="Vision Avatar"
              class="w-full h-full object-cover"
            />
          </figure>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- ========================
Innovation Section
======================== -->

<section
  class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]"
>
  <div class="main-container" data-ns-animate data-delay="0.2">
    <div class="relative z-10">
      <div class="absolute top-0 left-0 right-0 bottom-0 -z-10 rounded-[20px] overflow-hidden">
        <img
          src="images/home-page-2/about-bg.png"
          alt=" about bg"
          class="w-full h-full object-cover"
        />
      </div>

      <div class="py-14 px-6 md:px-11 grid max-sm:grid-cols-1 grid-cols-2 max-sm:gap-10 gap-5">
        <div class="max-w-[500px]">
          <h2 class="text-accent text-heading-5 mb-8">
            At our core, we believe in integrity, innovation, and collaboration.
          </h2>
          <div>
            <a
              href="./login-page-01.html"
              class="btn btn-md btn-white hover:btn-primary dark:btn-transparent"
            >
              <span>Get started</span>
            </a>
          </div>
        </div>
        <div>
          <ul class="space-y-4">
            <li class="flex items-center gap-3">
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="shrink-0"
              >
                <path
                  d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                  fill="#FCFCFC"
                  fill-opacity="0.17"
                />
                <path
                  d="M14.125 7.375L8.875 12.6248L6.25 10"
                  stroke=""
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="stroke-accent"
                />
              </svg>

              <span class="text-accent">
                Embracing clarity means prioritizing simplicity and focus
              </span>
            </li>
            <li class="flex items-center gap-3">
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="shrink-0"
              >
                <path
                  d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                  fill="#FCFCFC"
                  fill-opacity="0.17"
                />
                <path
                  d="M14.125 7.375L8.875 12.6248L6.25 10"
                  stroke=""
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="stroke-accent"
                />
              </svg>
              <span class="text-accent">
                Innovation driven by customer insights leads to solutions
              </span>
            </li>
            <li class="flex items-center gap-3">
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="shrink-0"
              >
                <path
                  d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                  fill="#FCFCFC"
                  fill-opacity="0.17"
                />
                <path
                  d="M14.125 7.375L8.875 12.6248L6.25 10"
                  stroke=""
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="stroke-accent"
                />
              </svg>
              <span class="text-accent">
                Implementing security measures as a foundational principle
              </span>
            </li>
            <li class="flex items-center gap-3">
              <svg
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="shrink-0"
              >
                <path
                  d="M0 10.0002C0 4.47729 4.47717 0 10 0C15.5229 0 20.0001 4.47729 20.0001 10.0002C20.0001 15.523 15.5229 20.0003 10 20.0003C4.47717 20.0003 0 15.523 0 10.0002Z"
                  fill="#FCFCFC"
                  fill-opacity="0.17"
                />
                <path
                  d="M14.125 7.375L8.875 12.6248L6.25 10"
                  stroke=""
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="stroke-accent"
                />
              </svg>
              <span class="text-accent">
                Building transparency and trust is essential for fostering
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- =========================
Teams section
===========================-->
<section class="xl:py-[100px] lg:py-[90px] md:py-20 py-16">
  <div class="main-container md:space-y-[70px] space-y-10">
    <div class="text-center space-y-5">
      <span data-ns-animate data-delay="0.1" class="badge badge-cyan">Our team</span>
      <div class="max-w-[620px] mx-auto space-y-3">
        <h2 data-ns-animate data-delay="0.2">Our innovative, dynamic and talented team</h2>
        <p data-ns-animate data-delay="0.3">
          Our innovative, dynamic, and talented team is the driving force behind our success. Each
          member brings a unique blend of expertise
        </p>
      </div>
    </div>
    <div class="grid grid-cols-12 md:gap-8 sm:gap-5 gap-y-4">
      <div data-ns-animate data-delay="0.4" class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="relative z-10 group bg-white dark:bg-background-9 rounded-[20px] overflow-hidden p-3"
        >
          <figure class="lg:max-w-[408px] mx-auto overflow-hidden">
            <img
              src="images/avatar/avatar-1.png"
              alt="team member"
              class="w-full h-full object-cover bg-background-1 rounded-2xl dark:bg-background-5"
            />
          </figure>
          <div
            class="max-w-[384px] w-[calc(100%-44px)] shadow-1 rounded-xl absolute z-20 bottom-7 sm:bottom-5 left-1/2 -translate-x-1/2 mx-auto p-6 bg-white dark:bg-background-9 space-y-3 cursor-pointer lg:opacity-0 lg:translate-y-[30%] lg:group-hover:opacity-100 lg:group-hover:translate-y-0 lg:scale-[90%] lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
          >
            <div class="text-center">
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">
                <a href="./team-details-page.html"> John Smith </a>
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/40 dark:text-accent/40">
                New York
              </p>
            </div>
            <!-- =========================
Social Links
===========================-->
<div
  class="flex items-center justify-center gap-3 lg:opacity-0 lg:group-hover:opacity-100 lg:scale-75 lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
>
  <a href="#" class="group/social-link">
    <span class="sr-only">Facebook profile</span>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
        <path
          d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Instagram profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <rect
          x="11"
          y="5"
          width="2"
          height="2"
          rx="1"
          transform="rotate(-90 11 5)"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
        <rect
          x="11.5"
          y="4.5"
          width="1"
          height="1"
          rx="0.5"
          transform="rotate(-90 11.5 4.5)"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-linecap="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Youtube profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="16"
        viewBox="0 0 22 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Linkedin profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="13"
        height="11"
        viewBox="0 0 13 11"
        fill="none"
      >
        <path
          d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Dribbble profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Behance profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="14"
        viewBox="0 0 16 14"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
</div>

          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.5" class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="relative z-10 group bg-white dark:bg-background-9 rounded-[20px] overflow-hidden p-3"
        >
          <figure class="lg:max-w-[408px] mx-auto overflow-hidden">
            <img
              src="images/avatar/avatar-2.png"
              alt="team member"
              class="w-full h-full object-cover bg-background-1 rounded-2xl dark:bg-background-5"
            />
          </figure>
          <div
            class="max-w-[384px] w-[calc(100%-44px)] shadow-1 rounded-xl absolute z-20 bottom-7 sm:bottom-5 left-1/2 -translate-x-1/2 mx-auto p-6 bg-white dark:bg-background-9 space-y-3 cursor-pointer lg:opacity-0 lg:translate-y-[30%] lg:group-hover:opacity-100 lg:group-hover:translate-y-0 lg:scale-[90%] lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
          >
            <div class="text-center">
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">
                <a href="./team-details-page.html"> Michael Chen </a>
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/40 dark:text-accent/40">
                San Francisco
              </p>
            </div>
            <!-- =========================
Social Links
===========================-->
<div
  class="flex items-center justify-center gap-3 lg:opacity-0 lg:group-hover:opacity-100 lg:scale-75 lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
>
  <a href="#" class="group/social-link">
    <span class="sr-only">Facebook profile</span>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
        <path
          d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Instagram profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <rect
          x="11"
          y="5"
          width="2"
          height="2"
          rx="1"
          transform="rotate(-90 11 5)"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
        <rect
          x="11.5"
          y="4.5"
          width="1"
          height="1"
          rx="0.5"
          transform="rotate(-90 11.5 4.5)"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-linecap="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Youtube profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="16"
        viewBox="0 0 22 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Linkedin profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="13"
        height="11"
        viewBox="0 0 13 11"
        fill="none"
      >
        <path
          d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Dribbble profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Behance profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="14"
        viewBox="0 0 16 14"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
</div>

          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.6" class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="relative z-10 group bg-white dark:bg-background-9 rounded-[20px] overflow-hidden p-3"
        >
          <figure class="lg:max-w-[408px] mx-auto overflow-hidden">
            <img
              src="images/avatar/avatar-3.png"
              alt="team member"
              class="w-full h-full object-cover bg-background-1 rounded-2xl dark:bg-background-5"
            />
          </figure>
          <div
            class="max-w-[384px] w-[calc(100%-44px)] shadow-1 rounded-xl absolute z-20 bottom-7 sm:bottom-5 left-1/2 -translate-x-1/2 mx-auto p-6 bg-white dark:bg-background-9 space-y-3 cursor-pointer lg:opacity-0 lg:translate-y-[30%] lg:group-hover:opacity-100 lg:group-hover:translate-y-0 lg:scale-[90%] lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
          >
            <div class="text-center">
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">
                <a href="./team-details-page.html"> Robert Wilson </a>
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/40 dark:text-accent/40">London</p>
            </div>
            <!-- =========================
Social Links
===========================-->
<div
  class="flex items-center justify-center gap-3 lg:opacity-0 lg:group-hover:opacity-100 lg:scale-75 lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
>
  <a href="#" class="group/social-link">
    <span class="sr-only">Facebook profile</span>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
        <path
          d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Instagram profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <rect
          x="11"
          y="5"
          width="2"
          height="2"
          rx="1"
          transform="rotate(-90 11 5)"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
        <rect
          x="11.5"
          y="4.5"
          width="1"
          height="1"
          rx="0.5"
          transform="rotate(-90 11.5 4.5)"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-linecap="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Youtube profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="16"
        viewBox="0 0 22 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Linkedin profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="13"
        height="11"
        viewBox="0 0 13 11"
        fill="none"
      >
        <path
          d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Dribbble profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Behance profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="14"
        viewBox="0 0 16 14"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
</div>

          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.7" class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="relative z-10 group bg-white dark:bg-background-9 rounded-[20px] overflow-hidden p-3"
        >
          <figure class="lg:max-w-[408px] mx-auto overflow-hidden">
            <img
              src="images/avatar/avatar-4.png"
              alt="team member"
              class="w-full h-full object-cover bg-background-1 rounded-2xl dark:bg-background-5"
            />
          </figure>
          <div
            class="max-w-[384px] w-[calc(100%-44px)] shadow-1 rounded-xl absolute z-20 bottom-7 sm:bottom-5 left-1/2 -translate-x-1/2 mx-auto p-6 bg-white dark:bg-background-9 space-y-3 cursor-pointer lg:opacity-0 lg:translate-y-[30%] lg:group-hover:opacity-100 lg:group-hover:translate-y-0 lg:scale-[90%] lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
          >
            <div class="text-center">
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">
                <a href="./team-details-page.html"> David Kim </a>
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/40 dark:text-accent/40">Seoul</p>
            </div>
            <!-- =========================
Social Links
===========================-->
<div
  class="flex items-center justify-center gap-3 lg:opacity-0 lg:group-hover:opacity-100 lg:scale-75 lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
>
  <a href="#" class="group/social-link">
    <span class="sr-only">Facebook profile</span>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
        <path
          d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Instagram profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <rect
          x="11"
          y="5"
          width="2"
          height="2"
          rx="1"
          transform="rotate(-90 11 5)"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
        <rect
          x="11.5"
          y="4.5"
          width="1"
          height="1"
          rx="0.5"
          transform="rotate(-90 11.5 4.5)"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-linecap="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Youtube profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="16"
        viewBox="0 0 22 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Linkedin profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="13"
        height="11"
        viewBox="0 0 13 11"
        fill="none"
      >
        <path
          d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Dribbble profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Behance profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="14"
        viewBox="0 0 16 14"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
</div>

          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.8" class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="relative z-10 group bg-white dark:bg-background-9 rounded-[20px] overflow-hidden p-3"
        >
          <figure class="lg:max-w-[408px] mx-auto overflow-hidden">
            <img
              src="images/avatar/avatar-5.png"
              alt="team member"
              class="w-full h-full object-cover bg-background-1 rounded-2xl dark:bg-background-5"
            />
          </figure>
          <div
            class="max-w-[384px] w-[calc(100%-44px)] shadow-1 rounded-xl absolute z-20 bottom-7 sm:bottom-5 left-1/2 -translate-x-1/2 mx-auto p-6 bg-white dark:bg-background-9 space-y-3 cursor-pointer lg:opacity-0 lg:translate-y-[30%] lg:group-hover:opacity-100 lg:group-hover:translate-y-0 lg:scale-[90%] lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
          >
            <div class="text-center">
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">
                <a href="./team-details-page.html"> Thomas Martinez </a>
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/40 dark:text-accent/40">
                Barcelona
              </p>
            </div>
            <!-- =========================
Social Links
===========================-->
<div
  class="flex items-center justify-center gap-3 lg:opacity-0 lg:group-hover:opacity-100 lg:scale-75 lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
>
  <a href="#" class="group/social-link">
    <span class="sr-only">Facebook profile</span>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
        <path
          d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Instagram profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <rect
          x="11"
          y="5"
          width="2"
          height="2"
          rx="1"
          transform="rotate(-90 11 5)"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
        <rect
          x="11.5"
          y="4.5"
          width="1"
          height="1"
          rx="0.5"
          transform="rotate(-90 11.5 4.5)"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-linecap="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Youtube profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="16"
        viewBox="0 0 22 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Linkedin profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="13"
        height="11"
        viewBox="0 0 13 11"
        fill="none"
      >
        <path
          d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Dribbble profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Behance profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="14"
        viewBox="0 0 16 14"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
</div>

          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.9" class="col-span-12 sm:col-span-6 lg:col-span-4">
        <div
          class="relative group z-10 bg-white dark:bg-background-9 rounded-[20px] overflow-hidden p-3"
        >
          <figure class="lg:max-w-[408px] mx-auto overflow-hidden">
            <img
              src="images/avatar/avatar-6.png"
              alt="team member"
              class="w-full h-full object-cover bg-background-1 rounded-2xl dark:bg-background-5"
            />
          </figure>
          <div
            class="max-w-[384px] w-[calc(100%-44px)] shadow-1 rounded-xl absolute z-20 bottom-7 sm:bottom-5 left-1/2 -translate-x-1/2 mx-auto p-6 bg-white dark:bg-background-9 space-y-3 cursor-pointer lg:opacity-0 lg:translate-y-[30%] lg:group-hover:opacity-100 lg:group-hover:translate-y-0 lg:scale-[90%] lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
          >
            <div class="text-center">
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">
                <a href="./team-details-page.html"> James Anderson </a>
              </h3>
              <p class="text-tagline-2 font-normal text-secondary/40 dark:text-accent/40">Sydney</p>
            </div>
            <!-- =========================
Social Links
===========================-->
<div
  class="flex items-center justify-center gap-3 lg:opacity-0 lg:group-hover:opacity-100 lg:scale-75 lg:group-hover:scale-100 transition-all duration-[400ms] ease-team-ease-1"
>
  <a href="#" class="group/social-link">
    <span class="sr-only">Facebook profile</span>
    <span>
      <svg xmlns="http://www.w3.org/2000/svg" width="7" height="16" viewBox="0 0 7 16" fill="none">
        <path
          d="M2.25 15C2.25 15.4142 2.58579 15.75 3 15.75C3.41421 15.75 3.75 15.4142 3.75 15H2.25ZM3.75 7C3.75 6.58579 3.41421 6.25 3 6.25C2.58579 6.25 2.25 6.58579 2.25 7H3.75ZM6 1.75C6.41421 1.75 6.75 1.41421 6.75 1C6.75 0.585786 6.41421 0.25 6 0.25V1.75ZM3 4H2.25H3ZM2.25 7C2.25 7.41421 2.58579 7.75 3 7.75C3.41421 7.75 3.75 7.41421 3.75 7H2.25ZM3 6.25C2.58579 6.25 2.25 6.58579 2.25 7C2.25 7.41421 2.58579 7.75 3 7.75V6.25ZM5 7.75C5.41421 7.75 5.75 7.41421 5.75 7C5.75 6.58579 5.41421 6.25 5 6.25V7.75ZM3 7.75C3.41421 7.75 3.75 7.41421 3.75 7C3.75 6.58579 3.41421 6.25 3 6.25V7.75ZM1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM3 15H3.75V7H3H2.25V15H3ZM6 1V0.25C3.92893 0.25 2.25 1.92893 2.25 4H3H3.75C3.75 2.75736 4.75736 1.75 6 1.75V1ZM3 4H2.25V7H3H3.75V4H3ZM3 7V7.75H5V7V6.25H3V7ZM3 7V6.25H1V7V7.75H3V7Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Instagram profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M11 1H5C2.79086 1 1 2.79086 1 5V11C1 13.2091 2.79086 15 5 15H11C13.2091 15 15 13.2091 15 11V5C15 2.79086 13.2091 1 11 1Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8C11 8.79565 10.6839 9.55871 10.1213 10.1213C9.55871 10.6839 8.79565 11 8 11Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <rect
          x="11"
          y="5"
          width="2"
          height="2"
          rx="1"
          transform="rotate(-90 11 5)"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
        <rect
          x="11.5"
          y="4.5"
          width="1"
          height="1"
          rx="0.5"
          transform="rotate(-90 11.5 4.5)"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-linecap="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Youtube profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="22"
        height="16"
        viewBox="0 0 22 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16.668 15.0028C18.9724 15.0867 20.91 13.29 21 10.9858V5.01982C20.91 2.71569 18.9724 0.918929 16.668 1.00282H5.332C3.02763 0.918929 1.08998 2.71569 1 5.01982V10.9858C1.08998 13.29 3.02763 15.0867 5.332 15.0028H16.668Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M10.508 5.17711L13.669 7.32511C13.8738 7.44468 13.9997 7.66398 13.9997 7.90111C13.9997 8.13824 13.8738 8.35754 13.669 8.47711L10.508 10.8271C9.908 11.2341 9 10.8871 9 10.2511V5.75111C9 5.11811 9.909 4.77011 10.508 5.17711Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Linkedin profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="13"
        height="11"
        viewBox="0 0 13 11"
        fill="none"
      >
        <path
          d="M2.25 4C2.25 3.58579 1.91421 3.25 1.5 3.25C1.08579 3.25 0.75 3.58579 0.75 4H2.25ZM0.75 10C0.75 10.4142 1.08579 10.75 1.5 10.75C1.91421 10.75 2.25 10.4142 2.25 10H0.75ZM10.75 10C10.75 10.4142 11.0858 10.75 11.5 10.75C11.9142 10.75 12.25 10.4142 12.25 10H10.75ZM5.5 7H4.75H5.5ZM4.75 10C4.75 10.4142 5.08579 10.75 5.5 10.75C5.91421 10.75 6.25 10.4142 6.25 10H4.75ZM2.25 1C2.25 0.585786 1.91421 0.25 1.5 0.25C1.08579 0.25 0.75 0.585786 0.75 1H2.25ZM0.75 2C0.75 2.41421 1.08579 2.75 1.5 2.75C1.91421 2.75 2.25 2.41421 2.25 2H0.75ZM1.5 4H0.75V10H1.5H2.25V4H1.5ZM11.5 10H12.25V7H11.5H10.75V10H11.5ZM11.5 7H12.25C12.25 4.92893 10.5711 3.25 8.5 3.25V4V4.75C9.74264 4.75 10.75 5.75736 10.75 7H11.5ZM8.5 4V3.25C6.42893 3.25 4.75 4.92893 4.75 7H5.5H6.25C6.25 5.75736 7.25736 4.75 8.5 4.75V4ZM5.5 7H4.75V10H5.5H6.25V7H5.5ZM1.5 1H0.75V2H1.5H2.25V1H1.5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Dribbble profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M9.81146 14.7617C6.69789 15.5957 3.41731 14.1957 1.86521 11.3707C0.313116 8.54567 0.890795 5.02595 3.26447 2.84524C5.63814 0.66452 9.19411 0.386619 11.8777 2.1721C14.5614 3.95759 15.6788 7.34483 14.5845 10.3767C13.8079 12.532 12.0248 14.1702 9.81146 14.7617Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M9.06142 14.7162C9.03653 15.1297 9.35153 15.485 9.765 15.5099C10.1785 15.5348 10.5338 15.2198 10.5587 14.8063L9.06142 14.7162ZM6.84286 0.874373C6.64188 0.512186 6.18534 0.381502 5.82315 0.582483C5.46097 0.783464 5.33028 1.24 5.53126 1.60219L6.84286 0.874373ZM13.2187 2.9035C13.3591 2.5138 13.157 2.08408 12.7673 1.94368C12.3776 1.80328 11.9479 2.00537 11.8075 2.39506L13.2187 2.9035ZM7.74006 7.03428L7.54644 6.30971L7.54546 6.30997L7.74006 7.03428ZM1.89802 5.05032C1.58158 4.78304 1.10838 4.82289 0.841101 5.13932C0.573819 5.45576 0.613667 5.92896 0.930105 6.19624L1.89802 5.05032ZM2.77955 13.0958C2.63901 13.4855 2.84095 13.9153 3.23059 14.0558C3.62023 14.1963 4.05003 13.9944 4.19057 13.6048L2.77955 13.0958ZM8.25822 8.96384L8.06412 8.23939L8.25822 8.96384ZM14.1013 10.9494C14.4178 11.2166 14.891 11.1766 15.1582 10.8601C15.4254 10.5435 15.3854 10.0703 15.0688 9.80317L14.1013 10.9494ZM9.81006 14.7613L10.5587 14.8063C10.7186 12.1509 10.1178 9.27114 9.32769 6.78072C8.53534 4.28333 7.53363 2.11922 6.84286 0.874373L6.18706 1.23828L5.53126 1.60219C6.17449 2.76135 7.13628 4.83373 7.89793 7.23434C8.66179 9.64192 9.20557 12.3216 9.06142 14.7162L9.81006 14.7613ZM12.5131 2.64928L11.8075 2.39506C11.1142 4.31922 9.52233 5.7817 7.54644 6.30971L7.74006 7.03428L7.93369 7.75886C10.3844 7.10397 12.3588 5.29004 13.2187 2.9035L12.5131 2.64928ZM7.74006 7.03428L7.54546 6.30997C5.57029 6.84064 3.46046 6.37005 1.89802 5.05032L1.41406 5.62328L0.930105 6.19624C2.86801 7.83311 5.48485 8.41679 7.93467 7.75859L7.74006 7.03428ZM3.48506 13.3503L4.19057 13.6048C4.88464 11.6805 6.47642 10.2177 8.45232 9.68829L8.25822 8.96384L8.06412 8.23939C5.614 8.89585 3.64019 10.7097 2.77955 13.0958L3.48506 13.3503ZM8.25822 8.96384L8.45232 9.68829C10.4282 9.15889 12.5381 9.62992 14.1013 10.9494L14.5851 10.3763L15.0688 9.80317C13.1305 8.16701 10.5142 7.58293 8.06412 8.23939L8.25822 8.96384Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
  <div class="h-[22px] w-px bg-stroke-1 dark:bg-accent/10"></div>
  <a href="#" class="group/social-link">
    <span class="sr-only">Behance profile</span>
    <span>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="14"
        viewBox="0 0 16 14"
        fill="none"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1 7V1H4C5.65685 1 7 2.34315 7 4C7 5.65685 5.65685 7 4 7C5.65685 7 7 8.34315 7 10C7 11.6569 5.65685 13 4 13H1V7Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10H15Z"
          class="stroke-secondary/40 dark:stroke-accent/40 group-hover/social-link:stroke-secondary dark:group-hover/social-link:stroke-accent transition-colors duration-300 ease-team-ease-1"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
        <path
          d="M1 6.25C0.585786 6.25 0.25 6.58579 0.25 7C0.25 7.41421 0.585786 7.75 1 7.75V6.25ZM4 7.75C4.41421 7.75 4.75 7.41421 4.75 7C4.75 6.58579 4.41421 6.25 4 6.25V7.75ZM9.75 9.99998C9.74999 9.58577 9.41419 9.24999 8.99998 9.25C8.58577 9.25001 8.24999 9.58581 8.25 10L9.75 9.99998ZM10.9295 12.8024L10.6619 13.5031L10.9295 12.8024ZM14.795 12.5C15.0712 12.1913 15.0447 11.7172 14.736 11.441C14.4273 11.1648 13.9532 11.1913 13.677 11.5L14.795 12.5ZM14 5.75C14.4142 5.75 14.75 5.41421 14.75 5C14.75 4.58579 14.4142 4.25 14 4.25V5.75ZM10 4.25C9.58579 4.25 9.25 4.58579 9.25 5C9.25 5.41421 9.58579 5.75 10 5.75V4.25ZM1 7V7.75H4V7V6.25H1V7ZM9 10L8.25 10C8.25004 11.5548 9.20948 12.9483 10.6619 13.5031L10.9295 12.8024L11.1971 12.1018C10.3257 11.7689 9.75002 10.9328 9.75 9.99998L9 10ZM10.9295 12.8024L10.6619 13.5031C12.1143 14.0578 13.7584 13.6588 14.795 12.5L14.236 12L13.677 11.5C13.0551 12.1953 12.0686 12.4347 11.1971 12.1018L10.9295 12.8024ZM14 5V4.25H10V5V5.75H14V5Z"
          class="fill-secondary/40 dark:fill-accent/40 group-hover/social-link:fill-secondary dark:group-hover/social-link:fill-accent transition-colors duration-300 ease-team-ease-1"
        />
      </svg>
    </span>
  </a>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- ========================
Map Area Section
======================== -->

<section
  class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]"
>
  <div class="main-container">
    <div
      data-ns-animate
      data-delay="0.1"
      class="rounded-[20px] bg-white dark:bg-background-6 p-2.5"
    >
      <div id="map" class="w-full min-h-[300px] overflow-hidden rounded-2xl lg:min-h-[566px]"></div>
    </div>
  </div>
</section>


      <!-- =========================
CTA section
===========================-->
<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px]">
  <div
    data-ns-animate
    data-delay="0.1"
    class="2xl:max-w-[1440px] xl:max-w-[1240px] lg:max-w-[980px] md:max-w-[700px] sm:max-w-[600px] min-[475px]:max-w-[450px] min-[425px]:max-w-[350px] max-w-[320px] z-10 mx-auto lg:p-[100px] sm:p-20 min-[475px]:p-14 py-12 px-6 bg-secondary dark:bg-background-6 sm:rounded-[32px] rounded-[20px] relative overflow-hidden"
  >
    <div
      data-ns-animate
      data-delay="0.1"
      data-direction="left"
      data-offset="200"
      class="absolute -z-10 sm:-top-[35%] -top-[100%] -left-[7%] size-[850px] rotate-[275deg] pointer-events-none select-none"
    >
      <img src="images/gradient/gradient-7.png" alt="cta-bg" class="w-[50%] sm:w-full" />
    </div>
    <div class="text-center space-y-5 sm:mb-14 mb-10">
      <span data-ns-animate data-delay="0.1" class="badge badge-blur text-ns-yellow"
        >Get started</span
      >
      <div class="space-y-3">
        <h2 data-ns-animate data-delay="0.2" class="text-white font-normal">
          Get started with industry-leading cyber security
        </h2>
        <p data-ns-animate data-delay="0.3" class="text-accent/60">
          No hidden fees. no steep learning curves. Just a platform built for your growth.
        </p>
      </div>
    </div>
    <div>
      <form
        data-ns-animate
        data-delay="0.4"
        class="md:max-w-[585px] max-w-[400px] mx-auto flex items-center md:flex-row flex-col md:gap-3 gap-y-5"
      >
        <fieldset class="md:max-w-[371px] w-full">
          <input
            type="text"
            placeholder="Enter your email"
            class="h-12 rounded-full px-[18px] py-3 bg-accent/10 border border-accent/20 shadow-1 ring-[0.7px] ring-accent/20 focus:ring-1 focus:ring-primary-600 placeholder:text-accent/60 block w-full outline-none text-white placeholder:font-normal font-normal"
          />
        </fieldset>
        <button class="h-12 btn btn-primary hover:btn-accent btn-md md:w-auto w-full border-0">
          <span>Started free today</span>
        </button>
      </form>
    </div>
  </div>
</section>

    </main>

  <?php include_once('footer.php'); ?>

  </body>
</html>
