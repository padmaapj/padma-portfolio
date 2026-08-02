<?php
$page_title = "Services";
$page_slug  = "services.php";
$page_desc  = "Explore Padma Lakshmi's services: brand identity, logo design, packaging, social media design, digital marketing, SEO, Meta & Google Ads, WordPress development and video editing.";
include "includes/header.php";
include "includes/navbar.php";
?>

<section class="page-hero">
  <div class="bg-orbs"><div class="orb orb-1"></div><div class="orb orb-2"></div></div>
  <div class="container">
    <div class="eyebrow" data-aos="fade-up">What I Offer</div>
    <h1 class="page-title" data-aos="fade-up">Services built to<br><em class="text-accent" style="font-style:normal;">design &amp; drive growth</em></h1>
    <div class="breadcrumb" data-aos="fade-up"><a href="index.php">Home</a><i class="fa-solid fa-chevron-right" style="font-size:.6rem;"></i><span>Services</span></div>
  </div>
</section>

<section style="padding-top:0;">
  <div class="container">
    <div class="services-grid">
      <?php
      $services = [
        ["01","fa-solid fa-swatchbook","Graphic Design","Complete visual design across print and digital — from concept sketches to final production-ready files."],
        ["02","fa-solid fa-bezier-curve","Brand Identity","Strategic identity systems — logo suite, color palette, typography and brand guidelines that scale across every touchpoint."],
        ["03","fa-solid fa-signature","Logo Design","Distinctive, memorable marks designed to work everywhere from favicons to billboards."],
        ["04","fa-solid fa-box-open","Packaging","Shelf-ready packaging and label design that balances shelf impact with brand consistency."],
        ["05","fa-solid fa-share-nodes","Social Media Design","Instagram &amp; Facebook creatives, reels covers, story templates and a content calendar that keeps posting consistent."],
        ["06","fa-solid fa-bullseye","Digital Marketing","Full-funnel strategy connecting creative, targeting and budget to real business outcomes."],
        ["07","fa-solid fa-magnifying-glass-chart","SEO","On-page, technical and content SEO to build sustainable organic visibility."],
        ["08","fa-brands fa-meta","Meta Ads","Facebook &amp; Instagram campaigns — audience research, creative testing and ROAS-focused optimization."],
        ["09","fa-brands fa-google","Google Ads","Search, Display and Performance Max campaigns engineered for qualified traffic and conversions."],
        ["10","fa-brands fa-wordpress","WordPress Website Development","Custom, responsive, SEO-ready WordPress &amp; WooCommerce builds from design to deployment."],
        ["11","fa-solid fa-clapperboard","Video Editing","Reels, ads and brand films — cut, color and paced for the platform they'll live on."],
        ["12","fa-solid fa-comments","Brand Consultation","One-on-one strategy sessions to audit your current brand and map a clear visual &amp; marketing roadmap."],
      ];
      foreach ($services as $i => $s) {
        echo '<div class="service-card glass card" data-aos="fade-up" data-aos-delay="'.($i%3*80).'">
          <span class="num">'.$s[0].'</span>
          <span class="arrow"><i class="fa-solid fa-arrow-up-right"></i></span>
          <div class="ico"><i class="'.$s[1].'"></i></div>
          <h3>'.$s[2].'</h3>
          <p>'.$s[3].'</p>
        </div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- ===================== PROCESS SNAPSHOT ===================== -->
<section id="process-snap">
  <div class="container">
    <div class="section-head" data-aos="fade-up">
      <div class="eyebrow">How It Works</div>
      <h2 class="section-title">A process built for <em>clarity</em></h2>
      <p class="section-sub">Every engagement follows the same disciplined path — see the full breakdown on the Process page.</p>
    </div>
    <div class="mini-grid" style="grid-template-columns:repeat(4,1fr);" data-aos="fade-up">
      <?php
      $steps = [["Discover","fa-solid fa-magnifying-glass"],["Design","fa-solid fa-pen-ruler"],["Develop","fa-solid fa-code"],["Deliver","fa-solid fa-rocket"]];
      foreach ($steps as $s) {
        echo '<div class="skill-card glass card" style="aspect-ratio:auto;align-items:center;text-align:center;">
          <div class="ico" style="margin-inline:auto;">'.'<i class="'.$s[1].'"></i>'.'</div>
          <strong>'.$s[0].'</strong>
        </div>';
      }
      ?>
    </div>
    <div style="text-align:center;margin-top:44px;" data-aos="fade-up">
      <a href="process.php" class="btn btn-outline" data-cursor="Explore">See Full Process <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container" data-aos="zoom-in">
    <div class="cta-banner neu">
      <div class="eyebrow" style="justify-content:center;">Ready When You Are</div>
      <h2>Tell me what you're building.</h2>
      <p>Whether it's a single logo or a full brand relaunch, let's scope it together.</p>
      <div class="actions">
        <a href="contact.php" class="btn btn-primary" data-cursor="Let's talk">Start a Project <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>
