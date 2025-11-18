
<?php require 'db.pgsql.php'; ?>
<?php

$section = 'blogs';

$tbl = 'gdpr'; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;

/* * */

if (isset($_GET['id'])) {

    $recid = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM $tblname WHERE id = :recid");
    $stmt->execute(['recid' => $recid]);
    $dbrec = $stmt->fetch();
    if (!$dbrec) {
        header('Location: blogs.php');
        exit;
    }

    $recid = $dbrec['id'];
    $recstatus = $dbrec['status'];
    $recdate = $dbrec['recdate'];
    $recpub = $dbrec['recpub'];
    $rectitle = $dbrec['rectitle'];
    $recdesc = $dbrec['recdesc']; // htmlspecialchars_decode($dbrec['recdesc'], ENT_QUOTES);
    $metadesc = $dbrec['metadesc'];
    $metakeyw = $dbrec['metakeyw'];
    $imgalt = $dbrec['imgalt'];
    $recimg = $dbrec['recimg'];
    $recfile = $dbrec['recfile'];

}

/* * */

$rectext = $recdesc;

$pattern = '/<a\s+href="([^"]+)">([^<]+)<\/a>/i';

$pattern = '/<a\s+[^>]*href="*#([^"]+)"[^>]*>([^<]+)<\/a>/i';

$pattern = '/<a\s+[^>]*href="[^"]*#([^"]+)"[^>]*>(.*?)<\/a>/i';

preg_match_all($pattern, $rectext, $matches, PREG_SET_ORDER);

/* * */

?>

<?php $page = "blog"; ?>
<?php include_once('header.php'); ?>



<main>

<section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 pt-24 md:pt-36 lg:pt-44 xl:pt-[250px]" aria-label="Page hero section">
  <div class="main-container">
    <div class="text-center space-y-2 pb-14 lg:pb-[72px]">

    </div>
  </div>
</section>

<!-- ======================  
 Page Hero 
====================== -->

<!--
<section class="xl:pt-[180px] md:pt-42 sm:pt-36 pt-32 pt-24 md:pt-36 lg:pt-44 xl:pt-[250px]" aria-label="Page hero section">
  <div class="main-container">
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
          >Blog Details</a
        >
      </span>
      <h1 data-ns-animate data-delay="0.2" class="font-normal lg:text-heading-2">Blog Details</h1>
    </div>
  </div>
</section>
-->

<!-- =========================
Details Body
===========================-->
<section class="pt-7 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[200px]">
  <div class="main-container">
    <div class="space-y-3 max-w-[1209px] mx-auto">
      <h1 data-ns-animate data-delay="0.1" class="max-w-[884px]">
        <?php echo $rectitle; ?>
      </h1>
      <!--
      <div class="flex items-center gap-3">
        <figure
          data-ns-animate
          data-delay="0.2"
          class="size-12 rounded-full overflow-hidden bg-[#ECEAED]"
        >
          <img
            src="images/avatar/avatar-6.png"
            class="object-center object-cover"
            alt="Esther Howard's avatar"
            width="48"
            height="48"
            loading="lazy"
          />
        </figure>
        <div>
          <h3 data-ns-animate data-delay="0.3" class="text-tagline-1 font-medium">Esther Howard</h3>
          <time
            datetime="2014-03-13"
            data-ns-animate
            data-delay="0.4"
            class="text-tagline-2 flex items-center gap-2 font-normal text-secondary/60 dark:text-accent/60"
          >
            March 13, 2014 <span>•</span> 5 min read
          </time>
        </div>
      </div>
      -->
    </div>
    <figure
      data-ns-animate
      data-delay="0.4"
      class="max-w-full rounded-lg md:rounded-4xl my-10 md:my-[70px] overflow-hidden"
    >
      <img
        src="<?php echo $recimg; ?>"
        class="w-full h-full object-cover object-center"
        alt="<?php echo $imgalt; ?>"
        title="<?php echo $rectitle; ?>"
        loading="lazy"
      />
    </figure>

    <!-- Blog details-body -->
    <article class="details-body">

      <p data-ns-animate data-delay="0.4">
        <?php echo $recdesc; ?>
      </p>

    </article>
    <!-- details-footer -->

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
           Connect with us today and take the first step toward seamless GDPR compliance and stronger data protection for your business.
          </p>
        </div>
      </div>

      <!-- Right Button -->
      <div class="w-full lg:w-auto pt-6 lg:pt-0 flex justify-center lg:justify-end">
        <a href="contact.php"><button type="submit"
          class="btn btn-md btn-primary h-12 w-full sm:w-[200px] lg:w-auto hover:btn-secondary dark:hover:btn-white">
          <span>Get started</span>
        </button></a>
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
