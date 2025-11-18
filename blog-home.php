<section
  class="sm:pt-28 pt-20 sm:pb-28 pb-20 md:pt-32 md:pb-32 lg:pt-[128px] lg:pb-[128px] xl:pt-[200px] xl:pb-[200px] bg-background-3 dark:bg-background-7"
  aria-label="Blog posts and insights">
  <div class="main-container">
    <div class="text-center mb-14 md:mb-[70px]">
      <span data-ns-animate data-delay="0.3" class="badge badge-green mb-3.5 md:mb-5">Blog</span>
      <h2 data-ns-animate data-delay="0.4" class="mb-3">
        Our recent
        <span class="text-primary-500 inline-block">news & insights</span>
      </h2>
      <p data-ns-animate data-delay="0.5" class="max-w-[738px] mx-auto">
        Our recent news and insights highlight the latest developments, achievements, and thought
        leadership shaping our journey forward. From product innovations and strategic partnerships
        to industry trends
      </p>
    </div>


<?php require 'db.pgsql.php'; ?>
<?php

$section = 'blogs';

$tbl = 'gdpr'; // dpdp / pdpl / gdpr / priv

$tblname = $section . '_' . $tbl;

/* * */

$limit = 3;

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
      <article data-ns-animate data-delay="0.6">
        <div
          class="bg-background-1 dark:bg-background-6 rounded-[20px] overflow-hidden relative md:min-h-[552px] scale-100 hover:scale-[102%] transition-transform duration-500 hover:transition-transform hover:duration-500">
          <figure class="max-w-full xl:max-w-[409px] overflow-hidden">
            <a href="blog.php?id=<?php echo $dbrec['id']; ?>&title=<?php echo $dbrec['rectitle']; ?>"
                    aria-label="Read more about <?php echo $dbrec['rectitle']; ?>"
                    title="<?php echo $dbrec['rectitle']; ?>">
                <img src="<?php echo $dbrec['recimg']; ?>"
                  alt="<?php echo $dbrec['rectitle']; ?>" loading="lazy"
                  class="w-full h-full object-cover" />
              </a>
          </figure>

          <div class="p-6 space-y-6">

<!--
            <div class="flex items-center gap-2">
              <span class="badge badge-green mr-1">Finance</span>
              <span rel="author" class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">Kristin
                Wat</span>
              <span class="w-[5px] h-[6px] bg-[#ECE8FF] rounded-full"> </span>
              <time datetime="2025-03-20" class="text-tagline-3 font-normal text-secondary/60 dark:text-accent/60">May
                20, 2025</time>
            </div>
-->

            <div>
              <h3 class="font-normal sm:text-heading-5 text-heading-6 mb-2">
                <a href="blog.php?id=<?php echo $dbrec['id']; ?>&title=<?php echo $dbrec['rectitle']; ?>"
                    aria-label="Read more about <?php echo $dbrec['rectitle']; ?>" title="<?php echo $dbrec['rectitle']; ?>">
                    <?php echo $dbrec['rectitle']; ?>
                </a>
              </h3>
              <p class="text-tagline-1 font-normal text-secondary/60 dark:text-accent/60 line-clamp-2">
                <?= htmlspecialchars(substr($dbrec['summary'], 0, 120)); ?>...
              </p>
            </div>

            <div class="flex justify-start md:block">
              <a href="blog.php?id=<?php echo $dbrec['id']; ?>&title=<?php echo $dbrec['rectitle']; ?>"
                  class="btn btn-md btn-white hover:btn-secondary dark:btn-transparent dark:hover:btn-accent dark:hover:text-secondary w-full sm:w-auto"
                  aria-label="Read full article about <?php echo $dbrec['rectitle']; ?>" title="Read full article about <?php echo $dbrec['rectitle']; ?>">
                  <span>Read more</span>
                </a>
            </div>

          </div>

        </div>

      </article>
      <?php endforeach; ?>

    </div>

    <div data-ns-animate data-delay="0.9" class="flex justify-center mt-10 md:mt-14">
      <a href="./blogs.php"
        class="btn btn-white btn-lg md:btn-xl hover:btn-primary dark:btn-transparent w-full md:w-auto mx-auto md:mx-0"
        aria-label="View all blog posts">
        <span>Explore all</span>
      </a>
    </div>
  </div>
</section>