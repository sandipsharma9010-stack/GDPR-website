<?php $page = "contact"; ?>
<?php include_once('header.php'); ?>

<?php session_start();
date_default_timezone_set('Asia/Kolkata');
include('contact-referer.php');
include('cpanel/admin.functions.php');
?>


<?php

$act = $_REQUEST["act"];

$hdtext = "Contact Us for DPDPA Compliance Services | Data Privacy Experts | DPDP Consultants";

if ($act == 'contact') {
  $hdtext = "Contact Us";
}
if ($act == 'schedule') {
  $hdtext = "Schedule a call";
}
if ($act == 'newsletter') {
  $hdtext = "Sign up for Newsletter";
}
if ($act == 'careers') {
  $hdtext = "Careers";
  $hdtext = $_GET['job'];
}
if ($act == 'visitor') {
  $hdtext = "Visitor Desk";
}

if ($act == 'blogs') {
  $hdtext = "Blogs";
}
if ($act == 'whitepapers') {
  $hdtext = "Whitepapers";
}
if ($act == 'research') {
  $hdtext = "Research";
}
if ($act == 'inthenews') {
  $hdtext = "In The News";
}
if ($act == 'events') {
  $hdtext = "Events";
}
if ($act == 'webinars') {
  $hdtext = "Webinars";
}



?>
<!-- Button to trigger modal -->

<?php include_once('device-type.php'); ?>
<?php include_once('contact-getapi.php'); ?>

<section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 pt-24 md:pt-36 lg:pt-40 xl:pt-[200px]"
  aria-label="Page hero section">
  <div class="main-container">
    <!-- Hero content -->
    <div class="text-center space-y-2 pb-14 lg:pb-[72px]">
      <span data-ns-animate data-delay="0.1"
        class="hero-badge text-tagline-1 inline-block text-secondary dark:text-accent">
        <a href="./index.html"
          class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-300">Home</a>
        <span class="mx-2">-</span>
        <a href="#" class="hover:text-primary-500 dark:hover:text-primary-400 transition-colors duration-300">Contact
          us</a>
      </span>
      <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">Contact us</h1>
    </div>
  </div>
</section>

<!-- =========================
Contact
===========================-->
<section class="pt-7 pb-14 md:pb-16 lg:pb-20 xl:pb-[100px]" aria-label="Contact Information and Form">

  <div id="consentModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
      <!-- Modal Dialog -->
      <div class="bg-white w-full max-w-6xl rounded-2xl shadow-xl">
        <!-- Modal Header -->
        <div class="flex items-center justify-between border-b px-6 py-4">
          <h5 class="text-lg font-semibold" id="consentModalLabel">
            <!-- Consent Notice -->
          </h5>
          <div class="flex items-center space-x-2">
            <span class="text-sm">Language:</span>
            <select id="languageSelect" name="languageSelect"
              class="text-sm rounded-md bg-blue-600 text-white px-2 py-1 focus:outline-none">
              <?php foreach ($decoded_response['data'] as $key => $value) {
                echo '<option value="' . $key . '">' . $key . '</option>';
              } ?>
            </select>
          </div>
        </div>

        <!-- Modal Body -->
        <div class="p-6">
          <?php foreach ($decoded_response['data'] as $key => $value) {
            echo '<div id="' . $key . '" class="language-content hidden"><p>' . $value['content'] . '</p></div>';
          } ?>
        </div>

        <!-- Modal Footer -->
        <div class="flex justify-end space-x-3 border-t px-6 py-4">
          <button type="submit" id="submitFormBtn"
            class="px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-700">
            Agree
          </button>
          <button type="button" onclick="toggleModal(false)" class="px-4 py-2 rounded-md bg-gray-200 hover:bg-gray-300">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>



  <script>
    // Show/Hide modal with Tailwind
    function toggleModal(show) {
      const modal = document.getElementById('consentModal');
      if (show) {
        modal.classList.remove('hidden');
      } else {
        modal.classList.add('hidden');
      }
    }
  </script>
  <div class="main-container">
    <div class="space-y-[70px]">
      <!-- heading  -->
      <div class="max-w-[680px] mx-auto text-center space-y-3">
        <h2 data-ns-animate data-delay="0.2">Reach out to our support team for help.</h2>
        <p data-ns-animate data-delay="0.3">
          Whether you need clarity on GDPR compliance, technical assistance with our tools, or expert guidance on data
          protection, our support team is here to help. We’re available around the clock to provide prompt and reliable
          GDPR support.
        </p>
      </div>

      <div class="flex lg:items-start flex-col justify-center items-center gap-10 lg:flex-row lg:gap-8 xl:gap-[70px]">
        <!-- contact info cards  -->
        <div data-ns-animate data-delay="0.4" class="flex flex-col gap-8 md:flex-row lg:flex-col">
          <!-- contact info one  -->
          <!-- <div
            class="bg-secondary dark:bg-background-6 rounded-[20px] p-11 space-y-6 w-full md:max-w-[371px] text-center relative overflow-hidden">
           
            <figure
              class="absolute select-none pointer-events-none size-[350px] overflow-hidden top-[-187px] left-[174px] -rotate-[78deg]">
              <img src="images/gradient/gradient-22.png" alt="Decorative gradient overlay"
                class="size-full object-cover" />
            </figure>
            <figure class="size-10 overflow-hidden mx-auto">
              <img src="images/icons/home.svg" alt="Office location icon" class="size-full object-cover" />
            </figure>

            <div class="space-y-2.5">
              <p class="text-heading-6 text-accent">Our Address</p>
              <p class="text-accent/60">2464 Royal Ln. Mesa, New Jersey 45463</p>
            </div>
          </div> -->

          <!-- contact info two  -->
          <div
            class="card-item bg-secondary dark:bg-background-6 rounded-[20px] p-11 w-full md:max-w-[371px] text-center relative overflow-hidden">
            <!-- bg overlay  -->
            <figure
              class="absolute size-[350px] select-none pointer-events-none overflow-hidden top-[-206px] left-[-36px] rotate-[62deg]">
              <img src="images/gradient/gradient-17.png" alt="Decorative gradient overlay"
                class="size-full object-cover" />
            </figure>

            <div class="space-y-6">
              <figure class="size-10 overflow-hidden mx-auto">
                <img src="images/icons/mail-open.svg" alt="Email icon" class="size-full object-cover" />
              </figure>

              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Email Us</p>
                <p class="text-accent/60">
                  <a href="mailto:info@gdprconsultants.in">info@gdprconsultants.in</a>
                </p>
              </div>
            </div>
          </div>

          <!-- contact info three  -->
          <div
            class="bg-secondary dark:bg-background-6 rounded-[20px] p-11 w-full md:max-w-[371px] text-center relative overflow-hidden">
            <!-- bg-overlay  -->
            <figure class="size-[450px] top-[-264px] left-[-255px] absolute select-none pointer-events-none">
              <img src="images/gradient/gradient-6.png" alt="Decorative gradient overlay" />
            </figure>

            <div class="space-y-6">
              <figure class="size-10 overflow-hidden mx-auto">
                <img src="images/icons/phone-right.svg" alt="Phone icon" class="size-full object-cover" />
              </figure>

              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Call Us</p>
                <p class="text-accent/60">
                  <a href="tel:+391035256845933">1800-5711-333</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <?php

        /* * */

        // print_r($_POST);
        
        /* * */

        /* * */

        /* * */

        /* * */

        $messagerror = "";
        $language = @trim(stripslashes($_POST['hiddenLanguage']));
        $fullname = @trim(stripslashes($_POST['fullname']));
        $emailadd = @trim(stripslashes($_POST['emailadd']));
        $phoneno = @trim(stripslashes($_POST['phoneno']));
        $subject = @trim(stripslashes($_POST['subject']));
        $message = @trim(stripslashes($_POST['message']));
        $reqsrc = @trim(stripslashes($_POST['reqsrc']));
        $calldt = @trim(stripslashes($_POST['calldt']));

        $contact_topic = @trim(stripslashes($_POST['contact_topic']));

        $otp = @trim(stripslashes($_POST['otp']));

        $job = $_REQUEST['job'];
        $act = $_REQUEST["act"];
        $show = $_REQUEST["show"];

        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $httpReferer = $_SERVER['HTTP_REFERER'];

        $email_from = $emailadd;

        /* * */

        $proceed = $_REQUEST["proceed"];

        /* * */

        /* * */


        if ($_POST) {

          // print_r($_POST);
          // exit(0);

          $response = '';
          include_once('contact-api-3.php');
          // print_r($response);

          $decodedArray = json_decode($response, true);
          // print_r($decodedArray);
          // print_r($_POST);
          // exit(0);

          $taken = $decodedArray['otp'];
          //echo " --- $taken --- ";

          //die();

          if ($otp) {

            include_once('contact-db.php');

            include_once('contact-mail.php');

            echo "<script>document.location.href=\"thanks.php?act=$act&proceed=$proceed\";</script>";

          }

        }

        /* * */

        ?>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <div name="divotp" id="divotp" href="divotp">
          <a id="#ahrefotp" name="#ahrefotp" href="#ahrefotp"> &nbsp; </a>
        </div>


        <!-- contact form  -->
        <div data-ns-animate data-delay="0.3"
          class="max-w-[847px] w-full mx-auto bg-white dark:bg-background-6 rounded-4xl p-6 md:p-8 lg:p-11">
          <form xclass="needs-validation" action="#divotp" method="post" id="mainForm" xnovalidate
            enctype="multipart/form-data" class="space-y-8">
            <!-- name and phone number  -->

            <input type="text" name="hiddenLanguage" id="hiddenLanguage" value="<?php echo $language; ?>"
              style="display:none" />
            <input type="text" name="reqsrc" id="reqsrc" value="contact" style="display:none" />
            <input type="text" name="reqtitle" id="reqtitle" style="display:none" />
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>" />
            <input type="hidden" name="_token" value="kWtDwQjq9Zf1BpylY4ckP9J8d7Pv8y8yXrynuMlh" />
            <input type="hidden" name="contact_topic" value="<?= $act; ?>" />
            <input type="text" name="act" value="<?= $act; ?>" style="display:none" />
            <input type="text" name="job" value="<?= $job; ?>" style="display:none" />
            <div class="flex items-center flex-col md:flex-row gap-8 justify-between">
              <!--  name -->
              <div class="space-y-2 lg:max-w-[364px] w-full">
                <label for="name"
                  class="form-label block text-tagline-2 text-secondary dark:text-accent font-medium">Full Name</label>
                <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $fullname; ?>" required
                  class="form-control w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal" />
              </div>

              <!-- number -->
              <div class="space-y-2 max-w-[364px] w-full">
                <label for="phone"
                  class="form-label block text-tagline-2 text-secondary dark:text-accent font-medium">Contact</label>
                <input type="text" maxlength="10" inputmode="numeric" pattern="\d{10}" placeholder="Contact"
                  onchange="this.value=this.value.replace(/\D/g,'').slice(0,10)" name="phoneno"
                  value="<?php echo $phoneno; ?>" required
                  class="form-control w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal" />
              </div>
            </div>

            <!-- email  -->
            <div class="space-y-2">
              <label for="email"
                class="form-label block text-tagline-2 text-secondary dark:text-accent font-medium">Email</label>

              <input type="email" placeholder="Email" name="emailadd" value="<?php echo strtolower($emailadd); ?>"
                oninput="this.value = this.value.toLowerCase()" required
                class="form-control w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal" />
            </div>

            <?php if ((!$act) || ($act == 'contact')) { ?>

              <!-- subject  -->
              <div class="space-y-2">
                <label for="contact_topic"
                  class="form-label block w-100 text-tagline-2 text-secondary dark:text-accent font-medium">Select a
                  Topic:</label>

                <select id="contact_topic" name="contact_topic"
                  class="form-control form-select w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal">
                  <option value="compliance_evaluation">Consent Management Tool Demo</option>
                  <option value="policy_development">Data Protection Third Party Demo</option>
                  <option value="training_education">Data Subject Rights and Grievance Management Demo</option>
                  <option value="data_audit_analysis">Data Protection Impact Assessment Demo</option>
                  <option value="incident_response">Cookie Consent Management Demo</option>
                  
                  <!-- <option value="gap_assessment">Gap Assessment Review & Remediation Planning</option>
                  <option value="dpo_service">Data Protection Officer as a Service</option>
                  <option value="contract_review">Contract Review & Data Processing Agreements</option>
                  <option value="consulting_advisory">Consulting, Advisory, and Audit</option> -->
                </select>
              </div>
            <?php } ?>

            <?php if ($_POST) { ?>
              <?php if ((!$act) || ($act == 'contact') || ($act == 'careers')) { ?>

                <!-- message -->
                <div class="space-y-2">

                  <label for="message"
                    class="form-label w-100 block text-tagline-2 text-secondary dark:text-accent font-medium">Your
                    Message:</label>
                  <textarea
                    class="form-control w-full px-[18px] py-3 rounded-xl border dark:bg-background-6 dark:border-stroke-7 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary dark:focus-visible:border-stroke-4/20 placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
                    name="message" novalidate="" rows="8" style="height: 100px;"> <?php echo $message; ?></textarea>
                </div>

              <?php } else { ?> <input type="hidden" name="message" value="<?php echo $message; ?>" /> <?php } ?>
            <?php } ?>
            <?php if ($act == 'newsletter') { ?> <input type="hidden" name="contact_topic" value="newsletter" /> <?php } ?>
            <?php if ($act == 'whitepaper') { ?> <input type="hidden" name="contact_topic" value="whitepaper" /> <?php } ?>
            <?php if ($act == 'research') { ?> <input type="hidden" name="contact_topic" value="research" /> <?php } ?>
            <?php if ($act == 'webinar') { ?> <input type="hidden" name="contact_topic" value="webinar" /> <?php } ?>
            <?php if ($act == 'event') { ?> <input type="hidden" name="contact_topic" value="event" /> <?php } ?>

            <?php if (($_POST) && ($act == 'careers')) { ?> <input type="hidden" name="contact_topic" value="careers" />

              <input type="hidden" name="job" value="<?php echo $job; ?>" />

              <label for="resumefile" class="form-label">Upload Resume File</label>
              <input type="file" class="form-control" name="resumefile" accept=".pdf, .doc, .docx"
                placeholder="Upload Resume File" required />

              <label for="experience" class="form-label">Experience</label>
              <input type="number" class="form-control" name="experience" placeholder="Year" length="2" min="0"
                max="49" />

              <label for="currsalary" class="form-label">Current CTC</label>
              <input type="text" class="form-control" name="currsalary" placeholder="Current CTC" />

              <label for="expsalary" class="form-label">Expected CTC</label>
              <input type="text" class="form-control" name="expsalary" placeholder="Expected CTC" />

            <?php } ?>

            <?php if (($_POST) && ($act == 'schedule')) { ?> <input type="hidden" name="contact_topic"
                value="schedule" />
              <input type="datetime-local" class="form-control" name="calldt" id="calldt"
                value="<?php echo date('Y-m-d\TH:i', strtotime('1 day')); ?>"
                min="<?php echo date('Y-m-d\TH:i', strtotime('1 day')); ?>"
                max="<?php echo date('Y-m-d\TH:i', strtotime('1 month')); ?>" />

            <?php } ?>

            <?php if ($_POST) { ?>

<input type="hidden" id="taken" name="taken" value="<?php echo $taken; ?>" />
<style>
.invalid-border { border: 2px solid red !important; background-color: #ffe6e6; }
</style>

              <div class="space-y-2">

                <label for="totp" class="form-label block text-tagline-2 text-secondary dark:text-accent font-medium"
                  id="lotp">Enter your OTP shared over Email </label>
                <input type="text"
                  class="form-control w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
                  placeholder="OTP" name="otp" id="totp" value="<?php echo $totp; ?>" maxlength="6" required
                  class="form-control w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal" />

              </div>

              <div class="captcha-wrapper my-3">
                <div class="g-recaptcha" data-sitekey="6LdwSFUqAAAAAA-lavndh9eKrhb_1XHlobRH0qKT"
                  data-callback="Recaptcha_Callback" data-expired-callback="Recaptcha_Expired">
                </div>
              </div>

              <div class="text-center">
                <input type="button" name="submit" id="btnproceed" value="PROCEED"
                  class="btn btn-submit bg-gray-[200px]!important text-black font-medium rounded-lg shadow-md px-6 py-2"
                  xdata-bs-toggle="modal" xdata-bs-target="#consentModal" style="display:none;" />
              </div>

              <input type="submit" name="submit" value="Submit" style="display:none" id="submitbtn" />

            <?php } else { ?>

              <div class="text-center">
                <input type="submit" name="submit" id="submitbtn" value="Submit"
                  class="bg-gray-[200px]!important text-black font-medium rounded-lg shadow-md px-6 py-6" />
              </div>

            <?php } ?>








            <!-- submit button -->

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
Conatct Map
===========================-->
<!-- <section
  class="md:pt-[80px] lg:pt-[100px] pb-[100px] md:pb-[150px] lg:pb-[200px]"
  aria-label="Location Map"
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
</section> -->

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

<script>
  let recaptchaValid = false;

  function Recaptcha_Callback() {
    recaptchaValid = true;
    document.getElementById('submitFormBtn').style.display = "block";
    document.getElementById('btnproceed').style.display = "block";
  }

  function Recaptcha_Expired() {
    recaptchaValid = false;
    //alert("reCAPTCHA expired, please complete it again.");
    grecaptcha.reset();

    document.getElementById('submitFormBtn').style.display = "none";
    document.getElementById('btnproceed').style.display = "none";
  }

  $('#submitFormBtn').click(function () {

    $('#submitbtn').click();

    if (!recaptchaValid) {
      //alert("Please complete the reCAPTCHA verification.");
      return false;
    }

    $('#submitbtn').click();
  });

  $(document).ready(function () {
    var selectedLanguage = $("#languageSelect").val();
    $('#hiddenLanguage').val(selectedLanguage);

    $('#languageSelect').on('change', function () {
      var selectedLanguage = $(this).val();
      $('#hiddenLanguage').val(selectedLanguage);
    });

    $('#btnproceed').click(function () {

      $("#lotp").css("color", "red");
      $("#totp").css("border", "2px solid red");

      if ($("#totp").val().trim() !== "") {

        $("#consentModal").modal("show");

      }

    });

  });

  // document.getElementById('btnproceed').disabled = false;
  // $('#btnproceed').prop('disabled', false);
  // $('#btnproceed').removeAttr('disabled');

  // $('#btnproceed').prop('display', true);

  // document.getElementById("datetime").value = new Date();
</script>

<?php include_once('footer.php'); ?>

<script>
  if (typeof gtag !== 'undefined') {
    gtag('event', 'conversion', { 'send_to': 'AW-16540124026/XOSvCLjTsasZEPqG-c49' });
  }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>