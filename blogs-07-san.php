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
          <a href="#" class="hover:text-primary-500 dark:hover:text-primary-400 transition-colors duration-300">Our Blog
          </a>
        </span>
        <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">Blog</h1>
      </div>
    </div>
  </section>

  <!-- ================================ 
Article Blog 
================================ -->

  <!-- <section class="pt-7 sm:pt-16 md:pt-20 lg:pt-24 xl:pt-32 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
    <div class="main-container">
      <div class="space-y-10 md:space-y-[70px]">
        <h2 data-ns-animate data-delay="0.2" class="max-w-[700px] text-center mx-auto">
          Latest articles published by NextSaaS
        </h2>
        <div class="relative" data-ns-animate data-delay="0.3">
          <div class="swiper blog-article-swiper">
            <div class="swiper-wrapper">
              
              <div class="swiper-slide">
                <article
                  class="scale-100 hover:scale-[99%] transition-transform duration-500 hover:transition-transform hover:duration-500">
                  <figure class="w-full max-h-[550px] rounded-t-[20px] overflow-hidden">
                    <img src="images/blogs/blog-cover.png" alt="Blog-Article" class="w-full h-full object-cover" />
                  </figure>
                  <div class="px-4 py-8 md:p-8 space-y-6 bg-background-1 dark:bg-background-6 rounded-b-[20px]">
                    <div class="flex items-center gap-2">
                      <span class="badge badge-green mr-1">Technology</span>

                      <span rel="author" class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">James
                        Wilson</span>
                      <span class="w-[5px] h-[6px] bg-[#ECE8FF] rounded-full"> </span>
                      <time datetime="2025-04-15"
                        class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">
                        April 15, 2025
                      </time>
                    </div>
                    <div>
                      <h3 class="font-normal sm:text-heading-5 text-tagline-1 mb-2">
                        <a href="./blog-details-page.php"
                          aria-label="Read full article about electronic prescription in finance sector">
                          Revolutionize Your Workflow with AI-Powered Automation
                        </a>
                      </h3>
                      <p class="sm:text-tagline-1 text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                        Discover how artificial intelligence is transforming business processes and
                        boosting productivity across industries.
                      </p>
                    </div>
                    <div>
                      <a href="./blog-details-page.php"
                        class="btn btn-md btn-white hover:btn-primary dark:btn-transparent inline-block"
                        aria-label="Read full article about electronic prescription in finance sector">
                        <span>Read more</span>
                      </a>
                    </div>
                  </div>
                </article>
              </div>
              
              <div class="swiper-slide">
                <article
                  class="scale-100 hover:scale-[99%] transition-transform duration-500 hover:transition-transform hover:duration-500">
                  <figure class="w-full max-h-[550px] rounded-t-[20px] overflow-hidden">
                    <img src="images/blogs/blog-38.png" alt="Blog-Article" class="w-full h-full object-cover" />
                  </figure>
                  <div class="px-4 py-8 md:p-8 space-y-6 bg-background-1 dark:bg-background-6 rounded-b-[20px]">
                    <div class="flex items-center gap-2">
                      <span class="badge badge-green mr-1">Security</span>

                      <span rel="author" class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">Sarah
                        Chen</span>
                      <span class="w-[5px] h-[6px] bg-[#ECE8FF] rounded-full"> </span>
                      <time datetime="2025-04-12"
                        class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">
                        April 12, 2025
                      </time>
                    </div>
                    <div>
                      <h3 class="font-normal sm:text-heading-5 text-tagline-1 mb-2">
                        <a href="./blog-details-page.php"
                          aria-label="Read full article about electronic prescription in finance sector">
                          Essential Cybersecurity Practices for Modern Businesses
                        </a>
                      </h3>
                      <p class="sm:text-tagline-1 text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                        Learn the latest strategies to protect your organization from emerging cyber
                        threats and data breaches.
                      </p>
                    </div>
                    <div>
                      <a href="./blog-details-page.php"
                        class="btn btn-md btn-white hover:btn-primary dark:btn-transparent inline-block"
                        aria-label="Read full article about electronic prescription in finance sector">
                        <span>Read more</span>
                      </a>
                    </div>
                  </div>
                </article>
              </div>
              
              <div class="swiper-slide">
                <article
                  class="scale-100 hover:scale-[99%] transition-transform duration-500 hover:transition-transform hover:duration-500">
                  <figure class="w-full max-h-[550px] rounded-t-[20px] overflow-hidden">
                    <img src="images/blogs/blog-01.png" alt="Blog-Article" class="w-full h-full object-cover" />
                  </figure>
                  <div class="px-4 py-8 md:p-8 space-y-6 bg-background-1 dark:bg-background-6 rounded-b-[20px]">
                    <div class="flex items-center gap-2">
                      <span class="badge badge-green mr-1">Innovation</span>

                      <span rel="author"
                        class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">Michael Brown</span>
                      <span class="w-[5px] h-[6px] bg-[#ECE8FF] rounded-full"> </span>
                      <time datetime="2025-04-10"
                        class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">
                        April 10, 2025
                      </time>
                    </div>
                    <div>
                      <h3 class="font-normal sm:text-heading-5 text-tagline-1 mb-2">
                        <a href="./blog-details-page.php"
                          aria-label="Read full article about electronic prescription in finance sector">
                          Digital Transformation Trends Shaping the Future
                        </a>
                      </h3>
                      <p class="sm:text-tagline-1 text-tagline-2 font-normal text-secondary/60 dark:text-accent/60">
                        Explore the latest digital transformation trends that are revolutionizing how
                        businesses operate and compete.
                      </p>
                    </div>
                    <div>
                      <a href="./blog-details-page.php"
                        class="btn btn-md btn-white hover:btn-primary dark:btn-transparent inline-block"
                        aria-label="Read full article about electronic prescription in finance sector">
                        <span>Read more</span>
                      </a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="mt-5 md:mt-14 pagination-bullets"></div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- =========================
Our Blog section
===========================-->
  <section class="py-14 md:py-16 lg:py-[88px] xl:py-[100px]">
    <div class="main-container">

      <div class="text-center space-y-3 mb-10 md:mb-[70px]">
        <h2 data-ns-animate data-delay="0.1">
          Our recent
          <span class="text-primary-500 inline-block">news & insights</span>
        </h2>

        <p data-ns-animate data-delay="0.2" class="max-w-[738px] mx-auto">
          Our recent news and insights cover the latest regulatory updates, compliance best practices, and expert
          perspectives. From evolving EU data protection laws and enforcement actions to innovative GDPR compliance
          tools and strategies, we share the knowledge shaping privacy and data governance across the EU.
        </p>
      </div>

<?php require 'db.pgsql.php'; ?>
<?php

$section = 'blogs';

$tbl = 'gdpr'; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;

/* * */

$limit = 50;

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$totalQuery = $pdo->query("SELECT COUNT(*) FROM $tblname WHERE status = true");
$totalRecords = $totalQuery->fetchColumn();

$stmt = $pdo->prepare("SELECT * FROM $tblname WHERE status = true ORDER BY recdate DESC LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$dbrecords = $stmt->fetchAll(PDO::FETCH_ASSOC);

$totalPages = ceil($totalRecords / $limit);

/* * */

?>

      <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-7 md:gap-10">

        <?php foreach ($dbrecords as $dbrec): ?>
        <!-- Blog Card 1 -->
        <article data-ns-animate data-delay="0.4" class="group">
          <div
            class="bg-background-1 dark:bg-background-6 rounded-[20px] overflow-hidden relative md:min-h-[552px] min-h-[480px] scale-100 hover:scale-[102%] transition-transform duration-500 hover:transition-transform hover:duration-500">
            <figure class="md:min-h-[260px] md:max-h-[260px] max-w-full xl:max-w-[409px] overflow-hidden">
              <a href="blog.php?id=<?php echo $dbrec['id']; ?>&title=<?php echo $dbrec['rectitle']; ?>"
                    aria-label="Read more about <?php echo $dbrec['rectitle']; ?>"
                    title="<?php echo $dbrec['rectitle']; ?>">
                <img src="<?php echo $dbrec['recimg']; ?>"
                  alt="<?php echo $dbrec['rectitle']; ?>" loading="lazy"
                  class="w-full h-full object-cover" />
              </a>
            </figure>
            <div class="px-4 py-6 md:p-6 space-y-6">

              <!--
              <div class="flex items-center gap-2">

                <span class="badge badge-green">Finance</span>

                <span rel="author"
                  class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60 text-nowrap">Kristin Watson</span>
                <span class="w-[5px] h-[6px] bg-[#ECE8FF] rounded-full"> </span>

                <time datetime="2025-03-20"
                  class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60 text-nowrap">March 20, 2025</time>
              </div>
              -->

              <div>
                <h3 class="font-normal sm:text-heading-5 text-tagline-1 mb-2">
                  <a href="blog.php?id=<?php echo $dbrec['id']; ?>&title=<?php echo $dbrec['rectitle']; ?>"
                    aria-label="Read more about <?php echo $dbrec['rectitle']; ?>" title="<?php echo $dbrec['rectitle']; ?>">
                    <?php echo $dbrec['rectitle']; ?>
                  </a>
                </h3>
                <p
                  class="sm:text-tagline-1 text-tagline-2 font-normal text-secondary/60 dark:text-accent/60 line-clamp-2">
                  <?= htmlspecialchars(substr($dbrec['summary'], 0, 120)); ?>...
                </p>
              </div>
              <div>
                <a href="blog.php?id=<?php echo $dbrec['id']; ?>&title=<?php echo $dbrec['rectitle']; ?>"
                  class="btn btn-md btn-white hover:btn-primary dark:btn-transparent inline-block absolute bottom-6"
                  aria-label="Read full article about <?php echo $dbrec['rectitle']; ?>" title="Read full article about <?php echo $dbrec['rectitle']; ?>">
                  <span>Read more</span>
                </a>
              </div>
            </div>
          </div>
        </article>
        <?php endforeach; ?>

      </div>

      <!--
      <ul data-ns-animate data-delay="0.6" class="flex items-center justify-center mt-14 gap-2">
        <li class="group">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center justify-center border border-stroke-3 dark:border-stroke-7 rounded-full hover:bg-primary-500 duration-300 group">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                <path d="M12.5 6H1.5M1.5 6L6 1.5M1.5 6L6 10.5"
                  class="stroke-secondary dark:stroke-accent group-hover:stroke-white duration-300" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </a>
        </li>
        <li class="group page-active">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center text-tagline-2 font-medium justify-center rounded-full dark:text-accent hover:bg-primary-500 duration-300 hover:text-accent group-[.page-active]:bg-primary-500 group-[.page-active]:text-accent dark:group-[.page-active]:text-accent">
            1
          </a>
        </li>
        <li class="group">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center text-tagline-2 font-medium justify-center rounded-full dark:text-accent hover:bg-primary-500 duration-300 hover:text-accent group-[.page-active]::bg-primary-500">
            2
          </a>
        </li>
        <li class="group">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center text-tagline-2 font-medium justify-center rounded-full dark:text-accent hover:bg-primary-500 duration-300 hover:text-accent group-[.page-active]::bg-primary-500">
            3
          </a>
        </li>
        <li class="group max-md:hidden">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center text-tagline-2 font-medium justify-center rounded-full dark:text-accent hover:bg-primary-500 duration-300 hover:text-accent group-[.page-active]::bg-primary-500">
            4
          </a>
        </li>
        <li class="group max-md:hidden">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center text-tagline-2 font-medium justify-center rounded-full dark:text-accent hover:bg-primary-500 duration-300 hover:text-accent group-[.page-active]::bg-primary-500">
            5
          </a>
        </li>
        <li class="group">
          <a href="./blog-details-page.php"
            class="flex w-10 h-10 items-center justify-center border border-stroke-3 dark:border-stroke-7 rounded-full hover:bg-primary-500 duration-300 group">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                <path d="M1.5 6H12.5M12.5 6L8 1.5M12.5 6L8 10.5"
                  class="stroke-secondary dark:stroke-accent group-hover:stroke-white duration-300" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </a>
        </li>
      </ul>
      -->

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
              Build a complete website using the assistance
              <span class="text-primary-500 hidden">{=$span-text}</span>
            </h2>
            <p data-ns-animate data-delay="0.5">Start your free trial today and see your ideas come to life easily and
              creatively.</p>
          </div>
        </div>

        <div
          class="lg:basis-[466px] space-y-6 md:ml-0 xl:ml-[100px] pt-[40px] lg:pt-[67px] w-full sm:w-[80%] md:w-[60%]">
          <form data-ns-animate data-delay="0.6" action="#" method="post"
            class="flex items-center flex-col gap-5 sm:flex-row justify-start lg:gap-3">
            <input type="email" name="email" id="userEmail-cta-v1" placeholder="Enter your email" required
              class="px-[18px] shadow-1 h-12 py-3 placeholder:text-secondary/50 rounded-full border border-stroke-1 lg:max-w-[340px] md:w-[71%] w-full max-[376px]:w-full dark:border-stroke-7 dark:placeholder:text-accent/60 focus:outline-none focus:border-primary-600 dark:focus:border-primary-400 dark:text-accent placeholder:font-normal font-normal" />

            <button type="submit" class="btn btn-md btn-primary h-12 w-full sm:w-[28%] lg:w-auto {=$btn-class}">
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



<?php include_once('footer.php'); ?>



</body>

</html>