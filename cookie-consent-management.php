<?php $page = "ccm"; ?>
<?php include_once('header.php'); ?>

<section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 {=$class}" aria-label="Page hero section">
  <div class="main-container">
    <!-- Hero content -->
    <div class="text-center space-y-2 pb-14 lg:pb-[72px]">
      <span data-ns-animate data-delay="0.1"
        class="hero-badge text-tagline-1 inline-block text-secondary dark:text-accent">
        <a href="./index.html"
          class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-300">Home</a>
        <span class="mx-2">-</span>
        <a href="#" class="hover:text-primary-500 dark:hover:text-primary-400 transition-colors duration-300"> Our
          Tools</a>
      </span>
      <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">Cookie Consent Management (CCM)</h1>
    </div>
  </div>
</section>

<!-- =========================
Services section
===========================-->
<section class="py-14 md:py-16 lg:py-[88px] xl:py-[100px] pt-[100px]">
  <div class="main-container">
    <div class="text-center space-y-5 mb-[70px]">
      <span data-ns-animate data-delay="0.2" class="badge badge-yellow-v2">Our Tools</span>
      <div class="space-y-3">
        <h2 data-ns-animate data-delay="0.3" class="max-w-[878px] mx-auto">
          Cookie Consent Management (CCM)
        </h2>
        <p data-ns-animate data-delay="0.4" class="max-w-[700px] mx-auto">
          A Cookie Consent Manager enables organizations (Controllers) to comply with the General Data Protection
          Regulation (GDPR), the ePrivacy Directive, and other global privacy laws by managing the lawful use of cookies
          and tracking technologies.
          Under GDPR, Controllers are responsible for ensuring that personal data collected through cookies is processed
          lawfully, transparently, and only after obtaining valid Cookie preference where required. Where Controllers
          rely on Processors (e.g., cookie management vendors), they must implement contractual and technical safeguards
          to ensure that processors act only on instructions and apply appropriate security measures (Art. 28 & 32
          GDPR).
        </p>
        <h6 class="max-w-[700px] mx-auto  space-y-2 text-center">Our CCM solution empowers Controllers to:</h6>

        <ul class="list-disc list-inside">
          <li
            class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">
            Obtain, store, and manage consent in a compliant manner.
          </li>
          <li
            class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">
            Prevent unlawful tracking by blocking non-essential cookies until consent is given.
          </li>
          <li
            class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">
            Ensure Data Subject rights are respected (e.g., withdrawal of consent).
          </li>
          <li
            class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">
            Demonstrate accountability with auditable consent logs.</li>
        </ul>

        <h6>Cookie Consent Manager and GDPR Compliance</h6>
        <p>GDPR and related EU laws impose strict requirements for cookies and similar tracking technologies:</p>
        <ul class="max-w-[700px] mx-auto list-disc list-inside space-y-2 text-center">
          <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3">GDPR (EU) – Prior, informed, and freely given consent (Art. 6(1)(a), Art. 7).</li>
          <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3">ePrivacy Directive (EU Cookie Law) – Explicit consent before storing or accessing information on a user’s
            device.</li>
          <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3">CCPA/CPRA (California, USA) – Right to opt-out of “sale/sharing” of personal data.</li>
          <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3">DPDP Act, 2023 (India) – Consent-based processing of personal data.</li>
        </ul>
        <p>Failure to comply may result in fines, reputational harm, and enforcement actions.</p>
      </div>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-12 xl:gap-8 md:gap-8 gap-y-5">

      <!-- CARD 1 -->
      <div data-ns-animate data-delay="0.5" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
            <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/23.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/23.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="space-y-2 px-6">
            <h3 class="text-heading-5">Cookie Categorization</h3>

            <!-- Wrap paragraph + ul inside one container -->
            <div
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              <p>
                Our CCM automatically identifies and groups cookies into categories that
                enable Controllers to provide clear and granular choices to Data Subjects
                as required under Art. 5(1)(a) – Transparency and Art. 7.
              </p>

              <p>Categories include:</p>
              <ul class="list-disc list-inside text-left ">
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3">Necessary cookies (always active)</li>
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Functional cookies</li>
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Performance/Analytics cookies</li>
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Marketing/Tracking cookies</li>
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Custom categories (organization-defined)</li>
              </ul>
            </div>
          </div>

          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
           <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/24.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/24.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="space-y-2">
            <h3 class="text-heading-5">Cookie Scanner & Auto Classification</h3>
            <p
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              The automated scanner detects both first- and third-party cookies, analyzes their functions, and
              classifies them based on privacy impact. This supports GDPR’s accountability principle (Art. 5(2)) by
              enabling Controllers to maintain accurate and up-to-date records of processing (Art. 30).
            </p>
          </div>
          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>

      <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
            <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/25.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/25.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="space-y-2">
            <h3 class="text-heading-5">Consent Banner & Pop-up</h3>
            <div
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              <p>
                The banner informs users, in plain and accessible language, about the use of cookies, ensuring GDPR
                transparency requirements (Art. 12–14) are met.
              </p>

              <p>It enables:</p>
              <ul class="list-disc list-inside text-left">
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Prior consent for non-essential cookies (Art. 6(1)(a)).</li>
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Clear accept/reject/customize options.</li>
                <li class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 transition-all duration-200 py-3 ">Display on first visit and after material changes in processing.</li>

              </ul>
            </div>
          </div>
          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>

      <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
           <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/26.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/26.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="space-y-2">
            <h3 class="text-heading-5">Consent Preference Center</h3>
            <div
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              <p>Provides Data Subjects with ongoing control to view, modify, or withdraw consent at any time as
                required
                by GDPR Art. 7(3). Unlike one-time banners, it ensures continuous compliance and user autonomy.</p>
            </div>


          </div>
          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
            <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/27.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/27.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="space-y-2">
            <h3 class="text-heading-5">Cookie Blocking Before Consent</h3>
            <div
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              <p>Non-essential cookies and scripts are blocked until valid consent is obtained. This is critical for
                compliance with GDPR Art. 6(1)(a) (lawfulness of processing) and the ePrivacy Directive, which require
                prior consent.</p>
            </div>
          </div>
          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>


      <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
            <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/28.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/28.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="space-y-2">
            <h3 class="text-heading-5"> Consent Logging & Audit Trail </h3>
            <div
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              <p>Every consent action (given, updated, withdrawn) is time-stamped, encrypted, and stored to provide
                verifiable evidence of compliance with GDPR’s accountability obligations (Art. 5(2) and Art. 30).</p>
            </div>
          </div>
          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>


      <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 xl:col-span-4">
        <div
          class="px-6 py-8 rounded-[20px] bg-background-3 dark:bg-background-7 space-y-6 text-center grid items-center justify-center hover:translate-y-[-10px] transition-transform duration-500 ease-in-out">
          <div class="flex items-center justify-center">
             <figure class="max-w-[26px] max-h-[17px]">
                <img src="images/gdpr-iconb/29.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/gdpr-icon/29.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
          </div>
          <div class="">
            <h3 class="text-heading-5"> Integration with Consent & Rights Management</h3>
            <div
              class="card-content max-w-[361px] mx-auto line-clamp-3 overflow-hidden transition-all duration-500 ease-in-out">
              <p>Integrates cookie preferences into the organization’s broader Consent Management Platform. This ensures
                consistency when honoring Data Subject Rights such as erasure (Art. 17), restriction (Art. 18), or
                objection (Art. 21).</p>
            </div>
          </div>
          <div>
            <button
              class="toggleBtn btn btn-white dark:btn-transparent dark:hover:btn-accent hover:btn-secondary btn-md">
              <span>Read more</span>
            </button>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>


<section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-24 md:pb-32 lg:pb-44 xl:pb-[200px]">
  <div class="main-container">
    <div class="space-y-5 mb-[70px] text-center">
      <span data-ns-animate data-delay="0.2" class="badge badge-green">Services</span>
      <h2 data-ns-animate data-delay="0.3">Why Choose Our Cookie Consent Management Solution?</h2>
    </div>

    <div class="space-y-[42px] flex flex-wrap gap-4">
      <div data-ns-animate data-delay="0.4"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div class="space-y-2">
                <h3>End-to-End GDPR Compliance </h3>
                <p class="max-w-[410px] w-full">
                  Covers GDPR consent, ePrivacy Directive, and global privacy laws.
                </p>
              </div>
              <div>
                <a href="#Controller" class="btn hover:btn-primary btn-white dark:btn-transparent btn-md"><span>Read
                    more</span></a>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-center gap-8">
              <figure class="max-w-[233px] w-full rounded-2xl overflow-hidden">
                <img src="images/home-page-10/consent-rejection.svg" alt="time increase" class="w-full" />
              </figure>
              <figure class="max-w-[350px] w-full rounded-[20px] overflow-hidden">
                <img src="images/home-page-10/end-to-end.svg" alt="control car" class="w-full" />
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.5"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-center gap-8">
              <figure class="max-w-[326px] max-h-[317px] h-full w-full rounded-[20px] overflow-hidden">
                <img src="images/home-page-10/consent-acceptance.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/home-page-10/consent-acceptance.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
              <figure class="max-w-[255px] max-h-[178px] h-full w-full rounded-2xl overflow-hidden">
                <img src="images/home-page-10/change-in-pre.svg" alt="balance"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/home-page-10/change-in-pre.svg" alt="balance"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div id="Controller" class="space-y-2">
                <h3>Controller–Processor Compliance </h3>
                <p class="max-w-[493px] w-full">
                  Ensures Controllers can issue binding instructions to Processors, fulfilling obligations under Art. 28
                  GDPR.
                </p>
              </div>
              <div>
                <a href="#Integrated" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md"><span>View
                    more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.6"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div id="Integrated" class="space-y-2">
                <h3>Integrated Data Subject Rights </h3>
                <p class="max-w-[380px] w-full">
                  Centralized consent and rights management across web and app environments.
                </p>
              </div>
              <div>
                <a href="#Automation" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md"><span>View
                    more</span></a>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-start gap-8">
              <figure class="max-w-[350px] max-h-[345px] h-full w-full rounded-[20px] overflow-hidden">
                <img src="images/home-page-10/granular.svg" alt="earning"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/home-page-10/granular.svg" alt="earning"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
              <div class="space-y-8">
                <figure class="max-w-[286px] max-h-[190px] h-full w-full rounded-2xl overflow-hidden">
                  <img src="images/home-page-10/consent-rate.svg" alt="daily payment"
                    class="w-full h-full object-cover dark:hidden" />
                  <img src="images/home-page-10/consent-rate.svg" alt="daily payment"
                    class="w-full h-full object-cover hidden dark:block" />
                </figure>
                <!-- <div>
                  <div class="space-y-4">
                    <div class="flex -space-x-3.5 cursor-pointer">
                      <img class="inline-block size-11 rounded-full ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-1.png" alt="Avatar 1" />
                      <img class="inline-block size-11 rounded-full ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-2.png" alt="Avatar 2" />
                      <img class="inline-block size-11 rounded-full relative z-0 ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-3.png" alt="Avatar 3" />
                      <div
                        class="inline-flex items-center relative z-10 justify-center size-11 bg-ns-green rounded-full ring-4 ring-white text-secondary/80 text-tagline-3 font-medium">
                        99+
                      </div>
                    </div>
                    <div>
                      <p class="font-medium text-secondary dark:text-accent">Automated Workflows</p>
                      <p class="text-tagline-2 font-normal">Customers across the globe</p>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-ns-animate data-delay="0.7"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-start -space-x-20">
              <figure class="max-w-[408px] w-full rounded-[20px] overflow-hidden">
                <img src="images/services/partial-consent.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/services/partial-consent.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
              <figure class="max-w-[225px] w-full rounded-2xl overflow-hidden mt-4">
                <img src="images/services/currency-rate.svg" alt="balance"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/services/currency-rate-dark.svg" alt="balance"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div id="Automation" class="space-y-2">
                <h3>Automation & Efficiency </h3>
                <p class="max-w-[493px] w-full">
                  Automated scans, blocking, and consent logging reduce manual work.
                </p>
              </div>
              <div>
                <a href="#Customizable" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md"><span>View
                    more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-ns-animate data-delay="0.6"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div id="Customizable" class="space-y-2">
                <h3>Customizable Framework </h3>
                <p class="max-w-[380px] w-full">
                  Flexible configuration to meet sector-specific or organizational requirements.
                </p>
              </div>
              <div>
                <a href="#Actionable" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md"><span>View
                    more</span></a>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-start gap-8">
              <figure class="max-w-[350px] max-h-[345px] h-full w-full rounded-[20px] overflow-hidden">
                <img src="images/home-page-10/earning.png" alt="earning"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/home-page-10/earning-dark.png" alt="earning"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
              <div class="space-y-8">
                <figure class="max-w-[286px] max-h-[190px] h-full w-full rounded-2xl overflow-hidden">
                  <img src="images/home-page-10/daily-payment.png" alt="daily payment"
                    class="w-full h-full object-cover dark:hidden" />
                  <img src="images/home-page-10/daily-payment-dark.png" alt="daily payment"
                    class="w-full h-full object-cover hidden dark:block" />
                </figure>
                <div>
                  <div class="space-y-4">
                    <div class="flex -space-x-3.5 cursor-pointer">
                      <img class="inline-block size-11 rounded-full ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-1.png" alt="Avatar 1" />
                      <img class="inline-block size-11 rounded-full ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-2.png" alt="Avatar 2" />
                      <img class="inline-block size-11 rounded-full relative z-0 ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-3.png" alt="Avatar 3" />
                      <div
                        class="inline-flex items-center relative z-10 justify-center size-11 bg-ns-green rounded-full ring-4 ring-white text-secondary/80 text-tagline-3 font-medium">
                        99+
                      </div>
                    </div>
                    <div>
                      <p class="font-medium text-secondary dark:text-accent">Trusted by 20k+</p>
                      <p class="text-tagline-2 font-normal">Customers across the globe</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div data-ns-animate data-delay="0.7"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-start -space-x-20">
              <figure class="max-w-[408px] w-full rounded-[20px] overflow-hidden">
                <img src="images/services/revenue-green.svg" alt="revenue"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/services/revenue-green-dark.svg" alt="revenue"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
              <figure class="max-w-[225px] w-full rounded-2xl overflow-hidden mt-4">
                <img src="images/services/currency-rate.svg" alt="balance"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/services/currency-rate-dark.svg" alt="balance"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div id="Actionable" class="space-y-2">
                <h3>Actionable Insights and Reporting </h3>
                <p class="max-w-[493px] w-full">
                  Real-time dashboards and automated compliance reports provide evidence for regulators and auditors,
                  enabling proactive risk management.


                </p>
              </div>
              <div>
                <a href="./our-services-details-page.html"
                  class="btn hover:btn-primary dark:btn-transparent btn-white btn-md"><span>View more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div data-ns-animate data-delay="0.6"
        class="p-7 lg:max-w-full lg:p-[42px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6">
        <div class="grid grid-cols-12 items-center xl:gap-[100px] lg:gap-20 gap-y-10">
          <div class="col-span-12 lg:col-span-6">
            <div class="space-y-8">
              <div id="Audit" class="space-y-2">
                <h3>Audit-Ready Evidence </h3>
                <p class="max-w-[380px] w-full">
                  Detailed logs to demonstrate accountability to regulators or auditors.
                </p>
              </div>
              <div>
                <a href="#Actionable" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md"><span>View
                    more</span></a>
              </div>
            </div>
          </div>
          <div class="col-span-12 lg:col-span-6">
            <div class="flex items-start gap-8">
              <figure class="max-w-[350px] max-h-[345px] h-full w-full rounded-[20px] overflow-hidden">
                <img src="images/home-page-10/earning.png" alt="earning"
                  class="w-full h-full object-cover dark:hidden" />
                <img src="images/home-page-10/earning-dark.png" alt="earning"
                  class="w-full h-full object-cover hidden dark:block" />
              </figure>
              <div class="space-y-8">
                <figure class="max-w-[286px] max-h-[190px] h-full w-full rounded-2xl overflow-hidden">
                  <img src="images/home-page-10/daily-payment.png" alt="daily payment"
                    class="w-full h-full object-cover dark:hidden" />
                  <img src="images/home-page-10/daily-payment-dark.png" alt="daily payment"
                    class="w-full h-full object-cover hidden dark:block" />
                </figure>
                <div>
                  <div class="space-y-4">
                    <div class="flex -space-x-3.5 cursor-pointer">
                      <img class="inline-block size-11 rounded-full ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-1.png" alt="Avatar 1" />
                      <img class="inline-block size-11 rounded-full ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-2.png" alt="Avatar 2" />
                      <img class="inline-block size-11 rounded-full relative z-0 ring-4 ring-white bg-ns-green"
                        src="images/avatar/avatar-3.png" alt="Avatar 3" />
                      <div
                        class="inline-flex items-center relative z-10 justify-center size-11 bg-ns-green rounded-full ring-4 ring-white text-secondary/80 text-tagline-3 font-medium">
                        99+
                      </div>
                    </div>
                    <div>
                      <p class="font-medium text-secondary dark:text-accent">Trusted by 20k+</p>
                      <p class="text-tagline-2 font-normal">Customers across the globe</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
Feature section
===========================-->


<!-- =========================
Solutions section
===========================-->
<!-- <section>
  <div
    class="max-w-[1400px] xl:py-[200px] py-24 px-5 md:px-12 mx-5 sm:mx-auto bg-background-3 dark:bg-background-5 rounded-[20px] overflow-hidden"
  >
    <div class="grid grid-cols-12 xl:gap-[100px] lg:gap-20 gap-y-24 items-end">
      <div class="col-span-12 lg:col-span-6">
        <div class="space-y-5 lg:mt-[114px] lg:text-left sm:text-center">
          <span data-ns-animate data-delay="0.1" class="badge badge-yellow-v2"
            >Strong solutions</span
          >
          <div class="space-y-3 max-w-[595px] lg:mx-0 mx-auto">
            <h2 data-ns-animate data-delay="0.2">
              Ensure strong solutions are available at all times
            </h2>
            <p data-ns-animate data-delay="0.3">
              Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text.
              It's not Latin though it looks like nothing.
            </p>
          </div>
        </div>
        <div class="mt-8 mb-14">
          <ul
            class="flex items-start sm:items-center sm:flex-row flex-col gap-8 lg:justify-start justify-start sm:justify-center"
          >
            <li data-ns-animate data-delay="0.4" class="flex items-center gap-2">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="15"
                  height="10"
                  viewBox="0 0 15 10"
                  fill="none"
                >
                  <path
                    d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                    class="stroke-secondary dark:stroke-accent"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="shrink-0"
                  />
                </svg>
              </span>
              <p class="font-medium text-secondary dark:text-accent/60">On Demand Support</p>
            </li>
            <li data-ns-animate data-delay="0.5" class="flex items-center gap-2">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="15"
                  height="10"
                  viewBox="0 0 15 10"
                  fill="none"
                >
                  <path
                    d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                    class="stroke-secondary dark:stroke-accent"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="shrink-0"
                  />
                </svg>
              </span>
              <p class="font-medium text-secondary dark:text-accent/60">Information Sharing</p>
            </li>
            <li data-ns-animate data-delay="0.6" class="flex items-center gap-2">
              <span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="15"
                  height="10"
                  viewBox="0 0 15 10"
                  fill="none"
                >
                  <path
                    d="M13.1875 1.0625L5.3125 8.93715L1.375 5"
                    class="stroke-secondary dark:stroke-accent"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="shrink-0"
                  />
                </svg>
              </span>
              <p class="font-medium text-secondary dark:text-accent/60">Cloud Technology</p>
            </li>
          </ul>
        </div>
        <div data-ns-animate data-delay="0.7" class="text-center lg:text-left">
          <a
            href="./our-services-page-01.html"
            class="btn btn-xl dark:btn-transparent hover:btn-primary btn-secondary w-[90] sm:w-auto"
            ><span>Get started</span></a
          >
        </div>
      </div>
      <div class="col-span-12 lg:col-span-6">
        <div class="max-w-[595px] lg:mx-0 mx-auto w-full relative z-20 xl:mt-0 mt-40">
          <figure
            data-ns-animate
            data-delay="0.3"
            class="xl:max-w-[408px] max-w-[340px] w-full rounded-[20px] overflow-hidden xl:ml-9 relative z-10"
          >
            <img
              src="images/services/revenue.svg"
              class="size-full object-cover inline-block dark:hidden"
              alt="solutions"
            />
            <img
              src="images/services/revenue-dark.svg"
              class="size-full object-cover hidden dark:inline-block"
              alt="solutions"
            />
          </figure>
          <figure
            data-ns-animate
            data-delay="0.4"
            data-spring
            data-duration="1.9"
            data-direction="right"
            class="absolute xl:-top-28 -top-20 -z-10 xl:right-0 right-6 xl:max-w-[227px] max-w-[190px] w-full overflow-hidden rounded-2xl"
          >
            <img
              src="images/services/net-sales.svg"
              class="size-full object-cover inline-block dark:hidden"
              alt="solutions"
            />
            <img
              src="images/services/net-sales-dark.svg"
              class="size-full object-cover hidden dark:inline-block"
              alt="solutions"
            />
          </figure>
          <figure
            data-ns-animate
            data-delay="0.2"
            data-direction="left"
            class="absolute xl:-top-52 -top-44 -z-10 left-0 xl:max-w-[350px] max-w-[280px] w-full overflow-hidden rounded-2xl drop-shadow-11"
          >
            <img
              src="images/services/user-activity.svg"
              class="size-full object-cover inline-block dark:hidden"
              alt="solutions"
            />
            <img
              src="images/services/user-activity-dark.svg"
              class="size-full object-cover hidden dark:inline-block"
              alt="solutions"
            />
          </figure>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- =========================
Pricing section
===========================-->


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
           Connect with us today and take the first step toward seamless GDPR compliance and stronger data protection for your business.
          </p>
        </div>
      </div>

      <!-- Right Button -->
      <div class="w-full lg:w-auto pt-6 lg:pt-0 flex justify-center lg:justify-end">
        <button type="submit"
          class="btn btn-md btn-primary h-12 w-full sm:w-[200px] lg:w-auto hover:btn-secondary dark:hover:btn-white">
          <span>Get started</span>
        </button>
      </div>
      
    </div>
  </div>
</section>
<?php include_once('footer.php'); ?>


<script>
  document.querySelectorAll(".toggleBtn").forEach((btn) => {
    btn.addEventListener("click", () => {

      const card = btn.closest(".px-6");
      const content = card.querySelector(".card-content");


      content.classList.toggle("line-clamp-3");


      if (btn.innerText.trim() === "Read more") {
        btn.innerText = "Read less";
      } else {
        btn.innerText = "Read more";
      }
    });
  });
</script>


</body>

</html>