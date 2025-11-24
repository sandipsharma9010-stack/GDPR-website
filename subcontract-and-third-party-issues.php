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