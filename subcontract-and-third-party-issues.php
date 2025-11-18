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
          <h2>Subcontract and third party issues</h2>
          <h6>New requirements for Data processors under the GDPR</h6>
          <p>
            “Where processing is to be carried out on behalf of a controller, the controller shall use only processors
            providing sufficient guarantees to implement appropriate technical and organisational measures in such a
            manner that processing will meet the requirements of this Regulation and ensure the protection of the rights
            of the data subject.”
          </p>

          <!-- <p>As per Article 46 of GDPR</p> -->

          <p>In other words, data controllers, i.e. customers of data processors, shall only choose processors that
            comply with the GDPR, or risk penalties themselves. As supervisory authorities enforce penalties on
            controllers for a lack of proper vetting, processors may find themselves obligated to obtain independent
            compliance certifications to reassure their would be customers.</p>
          <h6>In addition, all processors are required to:</h6>

          <p>Only process personal data on instructions from the controller, and inform the controller if it believes
            said instruction infringes on the GDPR (28.3). In other words, a data processor may not opportunistically
            use or mine personal data it is entrusted with for purposes not outlined by the data controller.</p>

          <p>Obtain written permission from the controller before engaging a subcontractor (28.2), and assume full
            liability for failures of subcontractors to meet the GDPR (28.4)
            Upon request, delete or return all personal data to the controller at the end of service contract (28.3.g)
          </p>

          <p>Enable and contribute to compliance audits conducted by the controller or a representative of the
            controller (28.3.h)
            Take reasonable steps to secure data, such as encryption and pseudonymization, stability and uptime, backup
            and disaster recovery, and regular security testing (32.1)
            Notify data controllers without undue delay upon learning of data breaches (33.2)
            Restrict personal data transfer to a third country only if legal safeguards are obtained (46)</p>
          <h6>A processor is further required to maintain a record of data processing activities if it qualifies for any
            of the following criteria (30):</h6>

          <p>Employs 250 or more persons<br>
            Processes data that is “likely to result in a risk to the rights and freedoms of data subjects”<br>
            Processes data more than occasionally<br>
            Processes special categories of data as outlined in Article 9(1)<br>
            Processes data relating to criminal convictions</p>
            <h6>And a processor must appoint a DPO in select circumstances</h6>


          <p>
            Do <a href="contact.php"><strong>contact us</strong> for more information on how GDPR Consultants offerings can help your organization Stay One Step Ahead !.</a>
          </p>


        </div>

      </div>
  </section>

  <!-- =========================
CTA v1 section
===========================-->
  <section class="py-[50px] md:py-20 lg:py-28 dark:bg-background-5 bg-white" aria-label="Use Case Overview">
    <div class="main-container">
      <div class="flex items-center flex-col lg:flex-row justify-between">
        <div
          class="xl:max-w-[650px] lg:max-w-[476px] max-[400px]:max-w-[300px] w-full space-y-5 text-center lg:text-left">
          <span data-ns-animate data-delay="0.3" class="badge badge-green badge-yellow-v2">Get started</span>
          <div class="space-y-3">
            <h2 data-ns-animate data-delay="0.4"
              class="text-secondary dark:text-accent text-heading-5 sm:text-heading-4 lg:text-heading-2">
              Ready to start earning with NextSaaS?
              <span class="text-primary-500 hidden">{=$span-text}</span>
            </h2>
            <p data-ns-animate data-delay="0.5">If you have any questions, feel free to reach out to our team.</p>
          </div>
        </div>

        <div
          class="lg:basis-[466px] space-y-6 md:ml-0 xl:ml-[100px] pt-[40px] lg:pt-[67px] w-full sm:w-[80%] md:w-[60%]">
          <form data-ns-animate data-delay="0.6" action="#" method="post"
            class="flex items-center flex-col gap-5 sm:flex-row justify-start lg:gap-3">
            <input type="email" name="email" id="userEmail-cta-v1" placeholder="Enter your email" required
              class="px-[18px] shadow-1 h-12 py-3 placeholder:text-secondary/50 rounded-full border border-stroke-1 lg:max-w-[340px] md:w-[71%] w-full max-[376px]:w-full dark:border-stroke-7 dark:placeholder:text-accent/60 focus:outline-none focus:border-primary-600 dark:focus:border-primary-400 dark:text-accent placeholder:font-normal font-normal" />

            <button type="submit"
              class="btn btn-md btn-primary h-12 w-full sm:w-[28%] lg:w-auto hover:btn-secondary dark:hover:btn-accent">
              <span>Get started</span>
            </button>
          </form>
          <ul class="flex flex-row items-center justify-center gap-x-4 sm:gap-x-6 sm:gap-y-0 gap-y-5 lg:justify-start">
            <li data-ns-animate data-delay="0.7" class="flex items-center justify-center gap-2">
              <span class="size-[18px] bg-secondary dark:bg-accent rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none"
                  aria-hidden="true" class="fill-white dark:fill-secondary">
                  <path
                    d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z" />
                </svg>
              </span>
              <p class="text-tagline-3 sm:text-tagline-2">No credit card required</p>
            </li>
            <li data-ns-animate data-delay="0.8" class="flex items-center justify-center gap-2">
              <span class="size-[18px] bg-secondary dark:bg-accent rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none"
                  aria-hidden="true" class="fill-white dark:fill-secondary">
                  <path
                    d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z" />
                </svg>
              </span>
              <p class="text-tagline-3 sm:text-tagline-2">14-Day free trial</p>
            </li>
          </ul>
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