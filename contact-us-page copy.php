<?php include_once('header.php'); ?>

<section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 pt-24 md:pt-36 lg:pt-40 xl:pt-[200px]" aria-label="Page hero section">
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
          >Contact us</a
        >
      </span>
      <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">Contact us</h1>
    </div>
  </div>
</section>

      <!-- =========================
Contact
===========================-->
<section
  class="pt-7 pb-14 md:pb-16 lg:pb-20 xl:pb-[100px]"
  aria-label="Contact Information and Form"
>
  <div class="main-container">
    <div class="space-y-[70px]">
      <!-- heading  -->
      <div class="max-w-[680px] mx-auto text-center space-y-3">
        <h2 data-ns-animate data-delay="0.2">Reach out to our support team for help.</h2>
        <p data-ns-animate data-delay="0.3">
          Whether you have a question, need technical assistance, or just want some guidance, our
          support team is here to help. We're available around the clock to provide quick and
          friendly support.
        </p>
      </div>

      <div
        class="flex lg:items-start flex-col justify-center items-center gap-10 lg:flex-row lg:gap-8 xl:gap-[70px]"
      >
        <!-- contact info cards  -->
        <div data-ns-animate data-delay="0.4" class="flex flex-col gap-8 md:flex-row lg:flex-col">
          <!-- contact info one  -->
          <div
            class="bg-secondary dark:bg-background-6 rounded-[20px] p-11 space-y-6 w-full md:max-w-[371px] text-center relative overflow-hidden"
          >
            <!-- bg overlay  -->
            <figure
              class="absolute select-none pointer-events-none size-[350px] overflow-hidden top-[-187px] left-[174px] -rotate-[78deg]"
            >
              <img
                src="images/gradient/gradient-22.png"
                alt="Decorative gradient overlay"
                class="size-full object-cover"
              />
            </figure>
            <figure class="size-10 overflow-hidden mx-auto">
              <img
                src="images/icons/home.svg"
                alt="Office location icon"
                class="size-full object-cover"
              />
            </figure>

            <div class="space-y-2.5">
              <p class="text-heading-6 text-accent">Our Address</p>
              <p class="text-accent/60">2464 Royal Ln. Mesa, New Jersey 45463</p>
            </div>
          </div>

          <!-- contact info two  -->
          <div
            class="card-item bg-secondary dark:bg-background-6 rounded-[20px] p-11 w-full md:max-w-[371px] text-center relative overflow-hidden"
          >
            <!-- bg overlay  -->
            <figure
              class="absolute size-[350px] select-none pointer-events-none overflow-hidden top-[-206px] left-[-36px] rotate-[62deg]"
            >
              <img
                src="images/gradient/gradient-17.png"
                alt="Decorative gradient overlay"
                class="size-full object-cover"
              />
            </figure>

            <div class="space-y-6">
              <figure class="size-10 overflow-hidden mx-auto">
                <img
                  src="images/icons/mail-open.svg"
                  alt="Email icon"
                  class="size-full object-cover"
                />
              </figure>

              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Email Us</p>
                <p class="text-accent/60">
                  <a href="mailto:hello@nextsaaS.com">hello@nextsaaS.com</a>
                </p>
              </div>
            </div>
          </div>

          <!-- contact info three  -->
          <div
            class="bg-secondary dark:bg-background-6 rounded-[20px] p-11 w-full md:max-w-[371px] text-center relative overflow-hidden"
          >
            <!-- bg-overlay  -->
            <figure
              class="size-[450px] top-[-264px] left-[-255px] absolute select-none pointer-events-none"
            >
              <img src="images/gradient/gradient-6.png" alt="Decorative gradient overlay" />
            </figure>

            <div class="space-y-6">
              <figure class="size-10 overflow-hidden mx-auto">
                <img
                  src="images/icons/phone-right.svg"
                  alt="Phone icon"
                  class="size-full object-cover"
                />
              </figure>

              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Call Us</p>
                <p class="text-accent/60">
                  <a href="tel:+391035256845933">+391 (0)35 2568 4593</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- contact form  -->
        <div
          data-ns-animate
          data-delay="0.3"
          class="max-w-[847px] w-full mx-auto bg-white dark:bg-background-6 rounded-4xl p-6 md:p-8 lg:p-11"
        >
          <form action="/index.html" method="POST" class="space-y-8">
            <!-- name and phone number  -->
            <div class="flex items-center flex-col md:flex-row gap-8 justify-between">
              <!--  name -->
              <div class="space-y-2 lg:max-w-[364px] w-full">
                <label
                  for="fullname"
                  class="block text-tagline-2 text-secondary dark:text-accent font-medium"
                  >Your name</label
                >
                <input
                  type="text"
                  id="fullname"
                  name="fullname"
                  placeholder="Enter your name"
                  required
                  autocomplete="name"
                  class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
                />
              </div>

              <!-- number -->
              <div class="space-y-2 max-w-[364px] w-full">
                <label
                  for="number"
                  class="block text-tagline-2 text-secondary dark:text-accent font-medium"
                  >Your number</label
                >
                <input
                  type="text"
                  id="number"
                  name="number"
                  placeholder="Enter your number"
                  required
                  autocomplete="tel"
                  class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
                />
              </div>
            </div>

            <!-- email  -->
            <div class="space-y-2">
              <label
                for="email"
                class="block text-tagline-2 text-secondary dark:text-accent font-medium"
                >Email address</label
              >
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                required
                autocomplete="email"
                class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
              />
            </div>

            <!-- subject  -->
            <div class="space-y-2">
              <label
                for="subject"
                class="block text-tagline-2 text-secondary dark:text-accent font-medium"
                >Subject</label
              >
              <input
                type="text"
                id="subject"
                name="subject"
                placeholder="Enter your subject"
                required
                class="w-full px-[18px] dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 py-3 h-[48px] xl:h-[41px] rounded-full dark:bg-background-6 border border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
              />
            </div>

            <!-- message -->
            <div class="space-y-2">
              <label
                for="message"
                class="block text-tagline-2 text-secondary dark:text-accent font-medium"
                >Write message</label
              >
              <textarea
                id="message"
                name="message"
                rows="7"
                placeholder="Enter your messages"
                required
                class="w-full px-[18px] py-3 rounded-xl border dark:bg-background-6 dark:border-stroke-7 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:outline-none focus:border-secondary dark:focus-visible:border-stroke-4/20 placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent placeholder:font-normal font-normal"
              ></textarea>
            </div>

            <!-- terms checkbox -->
            <fieldset class="flex items-center gap-2 mb-4">
              <label for="terms" class="flex items-center gap-x-3">
                <input id="terms" type="checkbox" class="sr-only peer" required />
                <span
                  class="size-4 rounded-full border border-stroke-3 dark:border-stroke-7 relative after:absolute after:size-2.5 after:bg-primary-500 after:rounded-full after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:opacity-0 peer-checked:after:opacity-100 peer-checked:border-primary-500 cursor-pointer"
                ></span>
              </label>
              <label
                for="terms"
                class="text-tagline-3 cursor-pointer text-secondary/60 dark:text-accent/60"
              >
                I agree with the
                <a href="#" class="text-primary-500 underline text-tagline-3"
                  >terms and conditions</a
                >
              </label>
            </fieldset>

            <!-- submit button -->
            <button
              type="submit"
              class="btn btn-md btn-secondary w-full hover:btn-primary dark:btn-accent before:content-none first-letter:uppercase"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

      <!-- =========================
Conatct Map
===========================-->
<section
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
</section>

      <!-- =========================
CTA v1 section
===========================-->
<section class="py-[50px] md:py-20 lg:py-28 dark:bg-background-5 bg-white" aria-label="Use Case Overview">
  <div class="main-container">
    <div class="flex items-center flex-col lg:flex-row justify-between">
      <div
        class="xl:max-w-[650px] lg:max-w-[476px] max-[400px]:max-w-[300px] w-full space-y-5 text-center lg:text-left"
      >
        <span data-ns-animate data-delay="0.3" class="badge badge-green badge-yellow-v2"
          >Get started</span
        >
        <div class="space-y-3">
          <h2
            data-ns-animate
            data-delay="0.4"
            class="text-secondary dark:text-accent text-heading-5 sm:text-heading-4 lg:text-heading-2"
          >
            Build a complete website using the assistance
            <span class="text-primary-500 hidden">{=$span-text}</span>
          </h2>
          <p data-ns-animate data-delay="0.5">Start your free trial today and see your ideas come to life easily and creatively.</p>
        </div>
      </div>

      <div
        class="lg:basis-[466px] space-y-6 md:ml-0 xl:ml-[100px] pt-[40px] lg:pt-[67px] w-full sm:w-[80%] md:w-[60%]"
      >
        <form
          data-ns-animate
          data-delay="0.6"
          action="#"
          method="post"
          class="flex items-center flex-col gap-5 sm:flex-row justify-start lg:gap-3"
        >
          <input
            type="email"
            name="email"
            id="userEmail-cta-v1"
            placeholder="Enter your email"
            required
            class="px-[18px] shadow-1 h-12 py-3 placeholder:text-secondary/50 rounded-full border border-stroke-1 lg:max-w-[340px] md:w-[71%] w-full max-[376px]:w-full dark:border-stroke-7 dark:placeholder:text-accent/60 focus:outline-none focus:border-primary-600 dark:focus:border-primary-400 dark:text-accent placeholder:font-normal font-normal"
          />

          <button
            type="submit"
            class="btn btn-md btn-primary h-12 w-full sm:w-[28%] lg:w-auto hover:btn-secondary dark:hover:btn-accent"
          >
            <span>Get started</span>
          </button>
        </form>
        <ul
          class="flex flex-row items-center justify-center gap-x-4 sm:gap-x-6 sm:gap-y-0 gap-y-5 lg:justify-start"
        >
          <li data-ns-animate data-delay="0.7" class="flex items-center justify-center gap-2">
            <span
              class="size-[18px] bg-secondary dark:bg-accent rounded-full flex items-center justify-center"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="10"
                height="7"
                viewBox="0 0 10 7"
                fill="none"
                aria-hidden="true"
                class="fill-white dark:fill-secondary"
              >
                <path
                  d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z"
                />
              </svg>
            </span>
            <p class="text-tagline-3 sm:text-tagline-2">No credit card required</p>
          </li>
          <li data-ns-animate data-delay="0.8" class="flex items-center justify-center gap-2">
            <span
              class="size-[18px] bg-secondary dark:bg-accent rounded-full flex items-center justify-center"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="10"
                height="7"
                viewBox="0 0 10 7"
                fill="none"
                aria-hidden="true"
                class="fill-white dark:fill-secondary"
              >
                <path
                  d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z"
                />
              </svg>
            </span>
            <p class="text-tagline-3 sm:text-tagline-2">14-Day free trial</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

     <?php include_once('footer.php'); ?>

  </body>
</html>
