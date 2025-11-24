<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <?php include("head-meta.php"); ?>
  <meta name="author" content="NextSaaS" />
  <link rel="icon" type="image/png" href="./images/gdpr-fav-icon.png" sizes="96x96" />
  <!-- <link rel="icon" type="image/svg+xml" href="./favicon.svg" /> -->
  <!-- <link rel="shortcut icon" href="./favicon.ico" /> -->
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./assets/main.css">
  <link rel="stylesheet" href="./assets/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <meta name="google-site-verification" content="8bc0UcziByrCtZYMkHcj0L6AdfvT_9CnOA7UmlhhEEY" />

</head>

<body class="bg-background-3 dark:bg-background-7">
  <header>
    <div
      class="header-one opacity-0 rounded-full lp:!max-w-[1290px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] min-[500px]:max-w-[450px] min-[425px]:max-w-[375px] max-w-[320px] mx-auto w-full fixed left-1/2 -translate-x-1/2 z-50 top-5 flex items-center justify-between px-2.5 xl:py-0 py-2.5 border border-stroke-2 bg-accent/60 backdrop-blur-[25px] dark:border-stroke-6 dark:bg-background-9"
      data-ns-animate data-direction="up" data-offset="100">
      <div>
        <a href="./index.php">
          <span class="sr-only">Home</span>
          <figure class="max-w-[40px] sm:max-w-[20px]">
            <!-- <img src="./images/shared/gdpr-logo.png" alt="Gdpr logo" class="dark:invert w-[153px]" /> -->
             <img src="./images/shared/gdpr-logo.png" alt="NextSaaS" class="w-[150px] dark:hidden block" />
            <img src="./images/shared/gdpr-logo-dark.png" alt="NextSaaS" class="w-[150px] dark:block hidden" />
          </figure>
          <figure class="max-w-[40px] sm:max-w-[20px] lg:hidden block">
            <!-- <img src="./images/shared/gdpr-logo.png" alt="NextSaaS" class="w-[150px] dark:hidden block" /> -->
            <!-- <img src="./images/shared/gdpr-logo.png" alt="NextSaaS" class="w-[150px] dark:block hidden" /> -->
          </figure>
        </a>
      </div>
      <nav class="hidden xl:flex items-center">
        <ul class="flex items-center">
          <li class="relative nav-item cursor-pointer py-2.5" data-menu="home-mega-menu">
            <a href="index.php" class="nav-item-link {=$nav-item-class}">
              <span>Home</span>
              <span class="nav-arrow block origin-center transition-all duration-300 translate-y-px">
                <!-- <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m19.5 8.25-7.5 7.5-7.5-7.5"
                />
              </svg> -->
              </span>
            </a>
            <!-- =========================
Mega Menu V1
===========================-->
            <div>
              <!-- Transparent bridge to prevent gap -->
              <div
                class="mega-menu-bridge py-6 fixed left-1/2 -translate-x-1/2 top-full w-full bg-transparent z-40 max-w-[1290px]">
              </div>

            </div>

          </li>

          <!-- <li class="relative nav-item cursor-pointer py-2.5" data-menu="about-menu">
          <a href="#" class="nav-item-link {=$nav-item-class}">
            <span>About</span>
            <span class="nav-arrow block origin-center transition-all duration-300 translate-y-px">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-4"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m19.5 8.25-7.5 7.5-7.5-7.5"
                />
              </svg>
            </span>
          </a>
          
<div class="">
  
  <div
    class="dropdown-menu-bridge absolute left-1/2 -translate-x-1/2 top-full w-full h-3 bg-transparent z-40 min-w-[280px] pointer-events-none"
  ></div>
  <div
    id="about-menu"
    class="dropdown-menu absolute left-1/2 -translate-x-1/2 top-full mt-2 pointer-events-none transition-all duration-300 opacity-0 bg-white dark:bg-background-6 rounded-[20px] px-[60px] py-[70px] z-50 min-w-[280px] w-full overflow-hidden {=$mega-menu-color} border border-stroke-1 dark:border-stroke-6"
  >
    <ul class="w-full space-y-5">
      <li>
        <a
          href="./about-page-01.php"
          class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200"
        >
          <span>About Page 01</span>
          <span
            class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
            >
              <path
                d="M8 12L12 8L8 4"
                class="stroke-secondary dark:stroke-accent"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </span>
        </a>
      </li>
      <li>
        <a
          href="./about-page-02.php"
          class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200"
        >
          <span>About Page 02</span>
          <span
            class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
            >
              <path
                d="M8 12L12 8L8 4"
                class="stroke-secondary dark:stroke-accent"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </span>
        </a>
      </li>
      <li>
        <a
          href="./about-page-03."
          class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200"
        >
          <span>About Page 03</span>

          <span
            class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
            >
              <path
                d="M8 12L12 8L8 4"
                class="stroke-secondary dark:stroke-accent"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </span>
        </a>
      </li>
    </ul>
  </div>
</div>

        </li> -->
          <li class="relative nav-item cursor-pointer py-2.5 w-full" data-menu="services-menu">
            <a href="#" class="nav-item-link {=$nav-item-class}">
              <span>Compliance Tools</span>
              <span class="nav-arrow block origin-center transition-all duration-300 translate-y-px">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
              </span>
            </a>

            <div>

              <div
                class="dropdown-menu-bridge absolute left-1/2 -translate-x-1/2 top-full w-full h-3 bg-transparent z-40 min-w-[280px] pointer-events-none">
              </div>
              <div id="services-menu"
                class="dropdown-menu absolute left-1/2 -translate-x-1/2 top-full mt-2 pointer-events-none transition-all duration-300 opacity-0 bg-white dark:bg-background-6 rounded-[20px] px-[60px] py-[70px] z-50 min-w-[280px] w-full overflow-hidden {=$mega-menu-color} border border-stroke-1 dark:border-stroke-6">
                <ul class="w-full space-y-5">
                  <li>
                    <a href="./consent-management-tool.php"
                      class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200">
                      <span>Consent Management Platform </span>
                      <span
                        class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="./data-protection-third-party.php"
                      class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200">
                      <span>Data Protection Third Party Compliance</span>
                      <span
                        class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="./data-subject-rights-and-grievance-management.php"
                      class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200">
                      <span>Data Subject Rights And Grievance Management</span>

                      <span
                        class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="./data-protection-impact-assessment.php"
                      class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200">
                      <span>Data Protection Impact Assessment</span>

                      <span
                        class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </a>
                  </li>

                  <li>
                    <a href="./cookie-consent-management.php"
                      class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200">
                      <span>Cookie Consent Management </span>

                      <span
                        class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="./our-services-details-page.html"
                      class="text-secondary/60 dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 group/item font-normal text-tagline-1 hover:text-secondary transition-all duration-200">
                      <span>Services Details</span>
                      <span
                        class="group-hover/item:translate-x-2 group-hover/item:opacity-100 opacity-0 transition-all duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </span>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>

          </li>
          <li class="relative nav-item cursor-pointer py-2.5" data-menu="blog-menu">
            <a href="./blogs.php" class="nav-item-link {=$nav-item-class}">
              <span>Blog</span>

            </a>
          </li>

            <div>


          <li class="relative nav-item cursor-pointer py-2.5" data-menu="blog-menu">
            <a href="./contact.php" class="nav-item-link {=$nav-item-class}">
              <span>Contact</span>

            </a>
          </li>
        </ul>
      </nav>

      <div class="xl:flex hidden items-center justify-center">
        <a href="#" class="btn btn-md btn-primary hover:bg-secondary dark:hover:btn-accent">
          <span>+44-7851313252</span>
        </a>
      </div>
      <div class="xl:hidden block">
        <button
          class="nav-hamburger flex flex-col gap-[5px] size-12 bg-background-4 dark:bg-background-6 rounded-full items-center justify-center cursor-pointer">
          <span class="sr-only">Menu</span>
          <span class="block w-6 h-0.5 bg-stroke-9 dark:bg-stroke-1"></span>
          <span class="block w-6 h-0.5 bg-stroke-9 dark:bg-stroke-1"></span>
          <span class="block w-6 h-0.5 bg-stroke-9 dark:bg-stroke-1"></span>
        </button>
      </div>
    </div>
    <!-- =========================
Mobile Menu
===========================-->

    <aside
      class="sidebar fixed top-0 right-0 w-full sm:w-1/2 translate-x-full transition-all duration-300 h-screen bg-white dark:bg-background-7 xl:hidden z-[999] scroll-bar">
      <div class="lg:p-9 sm:p-8 p-5 space-y-4">
        <div class="flex items-center justify-between">
          <a href="./index.php">
            <span class="sr-only">Home</span>
            <figure class="max-w-[40px] sm:max-w-[20px]">
              <img src="./images/shared/gdpr-logo.png" alt="NextSaaS" class="w-[150px] dark:hidden block" />
              <img src="./images/shared/gdpr-logo.png" alt="NextSaaS" class="w-[150px] dark:block hidden" />
            </figure>
          </a>
          <button
            class="nav-hamburger-close flex flex-col gap-1.5 size-10 bg-background-4 dark:bg-background-9 rounded-full items-center justify-center cursor-pointer relative">
            <span class="sr-only">Close Menu</span>
            <span class="block w-4 h-0.5 bg-stroke-9/60 dark:bg-stroke-1 rotate-45 absolute"></span>
            <span class="block w-4 h-0.5 bg-stroke-9/60 dark:bg-stroke-1 -rotate-45 absolute"></span>
          </button>
        </div>
        <div class="h-[85vh] w-full overflow-y-auto overflow-x-hidden pb-10 scroll-bar">
          <ul>
            <!-- home menu  -->
            <li class="relative space-y-0">
              <button
                class=" dark:bg-background-9 sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Home</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>

              </li>
              <!-- <div
    class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 overflow-y-auto"
  >
    <ul>
      <li>
        <a
          href="index.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          1. Crypto Marketing
        </a>
      </li>
      <li>
        <a
          href="./home-page-02.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          2. AI Software
        </a>
      </li>
      <li>
        <a
          href="./home-page-03.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          3. AI Chatbot
        </a>
      </li>
      <li>
        <a
          href="./home-page-04.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          4. Web Hosting
        </a>
      </li>
      <li>
        <a
          href="./home-page-05.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          5. Analytics & Reporting
        </a>
      </li>
      <li>
        <a
          href="./home-page-06.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          6. Financial Application
        </a>
      </li>
      <li>
        <a
          href="./home-page-07.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          7. Payment Solutions
        </a>
      </li>
      <li>
        <a
          href="./home-page-08.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          8. Online Banking
        </a>
      </li>
      <li>
        <a
          href="./home-page-09.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          9. Cloud Based Software
        </a>
      </li>
      <li>
        <a
          href="./home-page-10.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          10. Cyber Security
        </a>
      </li>
      <li>
        <a
          href="./home-page-11.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          11. Email Marketing
        </a>
      </li>
      <li>
        <a
          href="./home-page-12.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          12. Lead Capture
        </a>
      </li>
      <li>
        <a
          href="./home-page-13.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          13. Messaging Platform
        </a>
      </li>
      <li>
        <a
          href="./home-page-14.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          14. Mortgage Services
        </a>
      </li>
      <li>
        <a
          href="./home-page-15.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          15. Creative Portfolio
        </a>
      </li>
      <li>
        <a
          href="./home-page-16.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          16. App Builder
        </a>
      </li>
      <li>
        <a
          href="./home-page-17.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          17. App Development
        </a>
      </li>
      <li>
        <a
          href="./home-page-18.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          18. AI Agency
        </a>
      </li>
      <li>
        <a
          href="./home-page-19.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          19. Smart Solutions
        </a>
      </li>
      <li>
        <a
          href="./home-page-20.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          20. Risk Management Software
        </a>
      </li>
      <li>
        <a
          href="./home-page-21.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          21. Personal Finance
        </a>
      </li>
      <li>
        <a
          href="./home-page-22.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          22. Mobile Management Software
        </a>
      </li>
      <li>
        <a
          href="./home-page-23.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          23. Investment Management
        </a>
      </li>
      <li>
        <a
          href="./home-page-24.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          24. Insurance Software
        </a>
      </li>
      <li>
        <a
          href="./home-page-25.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          25. Property Management
        </a>
      </li>
      <li>
        <a
          href="./home-page-26.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          26. Pos System
        </a>
      </li>
      <li>
        <a
          href="./home-page-27.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          27. Social Media Management
        </a>
      </li>
      <li>
        <a
          href="./home-page-28.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          28. Nuvexa CRM
        </a>
      </li>
      <li>
        <a
          href="./home-page-29.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          29. Wealth Management
        </a>
      </li>
      <li>
        <a
          href="./home-page-30.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          30. Security Software
        </a>
      </li>
      <li>
        <a
          href="./home-page-31.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          31. Time Tracking
        </a>
      </li>
      <li>
        <a
          href="./home-page-32.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          32. Data Visualization
        </a>
      </li>
      <li>
        <a
          href="./home-page-33.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          33. Digital Marketing Agency
        </a>
      </li>
      <li>
        <a
          href="./home-page-34.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          34. Forex Trading
        </a>
      </li>
      <li>
        <a
          href="./home-page-35.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block"
        >
          35. Decentralized Finance
        </a>
      </li>
    </ul>
  </div> -->
            


            <!-- about us menu  -->
            <!-- <li class="relative space-y-0">
  <button
    class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer"
  >
    <span>About us</span>
    <span class="sub-menu-arrow transition-all duration-300">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        viewBox="0 0 16 16"
        fill="none"
      >
        <path
          d="M8 12L12 8L8 4"
          class="stroke-secondary dark:stroke-accent"
          stroke-width="1.5"
          stroke-linecap="round"
          stroke-linejoin="round"
        />
      </svg>
    </span>
  </button>
  <div
    class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar"
  >
    <ul>
      <li>
        <a
          href="./about-page-01.html"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          About us 01
        </a>
      </li>
      <li>
        <a
          href="./about-page-02.php"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block"
        >
          About us 02
        </a>
      </li>
      <li>
        <a
          href="./about-page-03.php"
          class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block"
        >
          About us 03
        </a>
      </li>
    </ul>
  </div>
</li> -->


            <!-- blog menu  -->



            <!-- services menu  -->
            <li class="relative space-y-0">
              <button
                class="dark:bg-background-9 sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Compliance Tools</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./consent-management-tool.php"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Consent Management Tool
                    </a>
                  </li>
                  <li>
                    <a href="./our-services-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Our Services Page 02
                    </a>
                  </li>
                  <li>
                    <a href="./data-protection-third-party.php"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Data Protection Third Party
                    </a>
                  </li>
                  <li>
                    <a href="./data-subject-rights-and-grievance-management.php"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Data Subject Rights and Grievance Management
                    </a>
                  </li>

                  <li>
                    <a href="./cookie-consent-management.php"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Cookie Consent Management
                    </a>
                  </li>
                </ul>
              </div>
            </li>



            <li class="relative space-y-0">
              <button
                class="dark:bg-background-9 sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span><a href="./blogs.php"
                    class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">

                    Blog</a></span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <!-- <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./blog-page-01.php"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Blog Page 01
                    </a>
                  </li>

                </ul>
              </div> -->
            </li>


            <!-- integration menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Integration</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./integration-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Integration Page 01
                    </a>
                  </li>
                  <li>
                    <a href="./integration-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Integration Page 02
                    </a>
                  </li>
                  <li>
                    <a href="./integration-page-03.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Integration Page 03
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->


            <!-- features menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Features</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./features-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Features Page 01
                    </a>
                  </li>
                  <li>
                    <a href="./features-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Features Page 02
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->


            <!-- process menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Process</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./process-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Process Page 01
                    </a>
                  </li>
                  <li>
                    <a href="./process-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Process Page 02
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->


            <!-- testimonial menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Testimonials</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./testimonial-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Testimonials Page 01
                    </a>
                  </li>
                  <li>
                    <a href="./testimonial-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Testimonials Page 02
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->


            <!-- teams menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Teams</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./our-team-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Our team 01
                    </a>
                  </li>
                  <li>
                    <a href="./our-team-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Our team 02
                    </a>
                  </li>
                  <li>
                    <a href="./team-details-page.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Team details
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->


            <!-- pricing menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Pricing</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./pricing-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Pricing Page 01
                    </a>
                  </li>
                  <li>
                    <a href="./pricing-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Pricing Page 02
                    </a>
                  </li>
                  <li>
                    <a href="./pricing-page-03.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Pricing Page 03
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->


            <!-- login menu  -->
            <li class="relative space-y-0">
              <button
                class="dark:bg-background-9 sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left flex items-center justify-between cursor-pointer">
                <span><a href="./contact.php"
                    class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">

                    Contact</a></span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <!-- <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./login-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Login Page 01
                    </a>
                  </li>
                  <li>
                    <a href="./login-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Login Page 02
                    </a>
                  </li>
                  <li>
                    <a href="./login-page-03.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Login Page 03
                    </a>
                  </li>
                  <li>
                    <a href="./login-page-04.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Login Page 04
                    </a>
                  </li>
                </ul>
              </div> -->
            </li>


            <!-- sign up menu  -->
            <!-- <li class="relative space-y-0">
              <button
                class="sub-menu text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left flex items-center justify-between cursor-pointer">
                <span>Sign up</span>
                <span class="sub-menu-arrow transition-all duration-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 12L12 8L8 4" class="stroke-secondary dark:stroke-accent" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </button>
              <div
                class="hidden ml-3.5 transition-all duration-300 w-full bg-white dark:bg-background-7 max-h-[500px] overflow-y-auto scroll-bar">
                <ul>
                  <li>
                    <a href="./signup-page-01.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Sign up 01
                    </a>
                  </li>
                  <li>
                    <a href="./signup-page-02.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Sign up 02
                    </a>
                  </li>
                  <li>
                    <a href="./signup-page-03.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 border-b border-stroke-4 dark:border-stroke-6 w-full text-left block">
                      Sign up 03
                    </a>
                  </li>
                  <li>
                    <a href="./signup-page-04.html"
                      class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 w-full text-left block">
                      Sign up 04
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->

          </ul>
        </div>
      </div>
    </aside>

  </header>

 